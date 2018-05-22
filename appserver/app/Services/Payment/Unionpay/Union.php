<?php
//
//    ______     ______     __  __
//   /\  ___\   /\  ___\   /\_\_\_\
//   \ \  __\   \ \ \____  \/_/\_\/_
//    \ \_____\  \ \_____\   /\_\/\_\
//     \/_____/   \/_____/   \/_/\/_
//
//   英斯特哈博（北京）科技有限公司
//
//  -----------------------------------------------------------------------------
//
//   一、协议的许可和权利
//
//    1. 您可以在完全遵守本协议的基础上，将本软件应用于商业用途；
//    2. 您可以在协议规定的约束和限制范围内修改本产品源代码或界面风格以适应您的要求；
//    3. 您拥有使用本产品中的全部内容资料、商品信息及其他信息的所有权，并独立承担与其内容相关的
//       法律义务；
//    4. 获得商业授权之后，您可以将本软件应用于商业用途，自授权时刻起，在技术支持期限内拥有通过
//       指定的方式获得指定范围内的技术支持服务；
//
//   二、协议的约束和限制
//
//    1. 未获商业授权之前，禁止将本软件用于商业用途（包括但不限于企业法人经营的产品、经营性产品
//       以及以盈利为目的或实现盈利产品）；
//    2. 未获商业授权之前，禁止在本产品的整体或在任何部分基础上发展任何派生版本、修改版本或第三
//       方版本用于重新开发；
//    3. 如果您未能遵守本协议的条款，您的授权将被终止，所被许可的权利将被收回并承担相应法律责任；
//
//   三、有限担保和免责声明
//
//    1. 本软件及所附带的文件是作为不提供任何明确的或隐含的赔偿或担保的形式提供的；
//    2. 用户出于自愿而使用本软件，您必须了解使用本软件的风险，在尚未获得商业授权之前，我们不承
//       诺提供任何形式的技术支持、使用担保，也不承担任何因使用本软件而产生问题的相关责任；
//    3. 英斯特哈博（北京）科技有限公司不对使用本产品构建的商城中的内容信息承担责任，但在不侵犯
//       用户隐私信息的前提下，保留以任何方式获取用户信息及商品信息的权利；
//
//   有关本产品最终用户授权协议、商业授权与技术服务的详细内容，均由英斯特哈博（北京）科技有限公司
//   独家提供。英斯特哈博（北京）科技有限公司拥有在不事先通知的情况下，修改授权协议的权力，修改后
//   的协议对改变之日起的新授权用户生效。电子文本形式的授权协议如同双方书面签署的协议一样，具有完
//   全的和等同的法律效力。您一旦开始修改、安装或使用本产品，即被视为完全理解并接受本协议的各项条
//   款，在享有上述条款授予的权力的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反
//   本授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权力。
//
//  -----------------------------------------------------------------------------
//
namespace App\Services\Payment\Unionpay;
use Exception;

class Union  {
    /**
     * 支付配置
     * @var array
     */
    public $config = [];
     
    /**
     * 支付参数，提交到银联对应接口的所有参数
     * @var array
     */
    public $params = [];
     
    /**
     * 自动提交表单模板
     * @var string
     */
    private $formTemplate = <<<'HTML'
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>支付</title>
</head>
<body>
    <div style="text-align:center">跳转中...</div>
    <form id="pay_form" name="pay_form" action="%s" method="post">
        %s
    </form>
    <script type="text/javascript">
        document.onreadystatechange = function(){
            if(document.readyState == "complete") {
                document.pay_form.submit();
            }
        };
    </script>
</body>
</html>
HTML;
     
    /**
     * 构建自动提交HTML表单
     * @return string
     */
    public function createPostForm()
    {
        $this->params['signature'] = $this->sign();
        $input = '';
        foreach($this->params as $key => $item) {
            $input .= "\t\t<input type=\"hidden\" name=\"{$key}\" value=\"{$item}\">\n";
        }
         
        return sprintf($this->formTemplate, $this->config['frontUrl'], $input);
    }
     
    /**
     * 推送订单信息到银联，获取到流水号tn
     * 
     * @return string
     */
    public function getTn()
    {
        $this->params['signature'] = $this->sign();
         
        $result = $this->postUrl($this->config['appUrl'], http_build_query($this->params));
        if(!$result) {
            throw new Exception('推送订单信息到银联请求失败！');
        }

        parse_str($result, $resultArr);

        if(!isset($resultArr['tn'])) {
            throw new Exception('获取银联受理订单号失败，原始返回：'.$result);
        }
         
        return $resultArr['tn'];
    }
     
    /**
     * 验证签名
     * 验签规则：
     * 除signature域之外的所有项目都必须参加验签
     * 根据key值按照字典排序，然后用&拼接key=value形式待验签字符串；
     * 然后对待验签字符串使用sha1算法做摘要；
     * 用银联公钥对摘要和签名信息做验签操作
     * 
     * @throws \Exception
     * @return bool
     */
    public function verifySign()
    {
        $publicKey = $this->getVerifyPublicKey();
        $verifyArr = $this->filterBeforSign();
        ksort($verifyArr);
        $verifyStr = $this->arrayToString($verifyArr);
        $verifySha1 = sha1($verifyStr);
        $signature = base64_decode($this->params['signature']);
        $result = openssl_verify($verifySha1, $signature, $publicKey);
        if($result === -1) {
            throw new \Exception('Verify Error:'.openssl_error_string());
        }
         
        return $result === 1 ? true : false;
    }
     
    /**
     * 取签名证书ID(SN)
     * @return string
     */
    public function getSignCertId()
    {
        return $this->getCertIdPfx($this->config['signCertPath']);
    }  
     
    /**
     * 签名数据
     * 签名规则:
     * 除signature域之外的所有项目都必须参加签名
     * 根据key值按照字典排序，然后用&拼接key=value形式待签名字符串；
     * 然后对待签名字符串使用sha1算法做摘要；
     * 用银联颁发的私钥对摘要做RSA签名操作
     * 签名结果用base64编码后放在signature域
     * 
     * @throws \InvalidArgumentException
     * @return multitype|string
     */
    private function sign() {
        $signData = $this->filterBeforSign();
        ksort($signData);
        $signQueryString = $this->arrayToString($signData);
        if($this->params['signMethod'] == 01) {
            //签名之前先用sha1处理
            //echo $signQueryString;exit;
            $datasha1 = sha1($signQueryString);
            $signed = $this->rsaSign($datasha1);
        } else {
            throw new \InvalidArgumentException('Nonsupport Sign Method');
        }
                 
        return $signed;
         
    }
     
    /**
     * 数组转换成字符串
     * @param array $arr
     * @return string
     */
    private function arrayToString($arr)
    {
        $str = '';
        foreach($arr as $key => $value) {
            $str .= $key.'='.$value.'&';
        }
        return substr($str, 0, strlen($str) - 1);
    }
     
    /**
     * 过滤待签名数据
     * signature域不参加签名
     * 
     * @return array
     */
    private function filterBeforSign()
    {
        $tmp = $this->params;
        unset($tmp['signature']);
        return $tmp;
    }
     
    /**
     * RSA签名数据，并base64编码
     * @param string $data 待签名数据
     * @return mixed
     */
    private function rsaSign($data)
    {
        $privatekey = $this->getSignPrivateKey();
        $result = openssl_sign($data, $signature, $privatekey);
        if($result) {
            return base64_encode($signature);
        }
        return false;
    }
     
    /**
     * 取.pfx格式证书ID(SN)
     * @return string
     */
    private function getCertIdPfx($path)
    {
        $pkcs12certdata = $path;
        openssl_pkcs12_read($pkcs12certdata, $certs, $this->config['signCertPwd']);
        $x509data = $certs['cert'];
        openssl_x509_read($x509data);
        $certdata = openssl_x509_parse($x509data);
        return $certdata['serialNumber'];
    }
     
    /**
     * 取.cer格式证书ID(SN)
     * @return string
     */
    private function getCertIdCer($path)
    {
        $x509data = file_get_contents($path);
        openssl_x509_read($x509data);
        $certdata = openssl_x509_parse($x509data);
        return $certdata['serialNumber'];
    }
     
    /**
     * 取签名证书私钥
     * @return resource
     */
    private function getSignPrivateKey()
    {
        $pkcs12 = $this->config['signCertPath'];
        openssl_pkcs12_read($pkcs12, $certs, $this->config['signCertPwd']);
        return $certs['pkey'];
    }
     
    /**
     * 取验证签名证书
     * @throws \InvalidArgumentException
     * @return string
     */
    private function getVerifyPublicKey()
    {
        //先判断配置的验签证书与银联返回指定的证书是否一致
        if($this->getCertIdCer($this->config['verifyCertPath']) != $this->params['certId']) {
            throw new \InvalidArgumentException('Verify sign cert is incorrect');
        }
        return file_get_contents($this->config['verifyCertPath']);     
    }
     
    /**
     * 通过POST方法请求URL
     * @param string $url
     * @param array|string $data post的数据
     *
     * @return mixed
     */
    protected function postUrl($url, $data) {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //忽略证书验证
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        $result = curl_exec($curl);
        return $result;
    }
}