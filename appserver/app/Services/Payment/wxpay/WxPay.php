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

/**
 * 请求类
 * ============================================================================
 * api说明：
 * init(),初始化函数，默认给一些参数赋值，如cmdno,date等。
 * getGateURL()/setGateURL(),获取/设置入口地址,不包含参数值
 * getKey()/setKey(),获取/设置密钥
 * getParameter()/setParameter(),获取/设置参数值
 * getAllParameters(),获取所有参数
 * getRequestURL(),获取带参数的请求URL
 * getDebugInfo(),获取debug信息
 *
 * ============================================================================
 *
 */
namespace App\Services\Payment\wxpay;
use App\Services\Payment\wxpay\TenpayHttpClient;
use Log;

class WxPay {

    /** Token获取网关地址*/
    var $tokenUrl;

    /**预支付网关url地址 */
    var $gateUrl;

    var $unifiedorderUrl;

    /** 商户参数 */
    var $app_id, $partner_key, $app_secret, $app_key;

    /**  Token */
    var $Token;

    /** debug信息 */
    var $debugInfo;

    function __construct(){
        $this->RequestHandler();
    }
    function RequestHandler(){
        $this->tokenUrl		= 'https://api.weixin.qq.com/cgi-bin/token';
        $this->gateUrl		= 'https://api.weixin.qq.com/pay/genprepay';
        $this->notifyUrl	= 'https://gw.tenpay.com/gateway/simpleverifynotifyid.xml';
        $this->unifiedorderUrl = 'https://api.mch.weixin.qq.com/pay/unifiedorder';
    }
    /**
     *初始化函数。
     */
    function init($appid, $appsecret,$partnerkey) {
        $this->debugInfo	= '';
        $this->Token		= '';
        $this->app_id		= $appid;
        $this->partner_key	= $partnerkey;
        $this->app_secret	= $appsecret;
    }
    /**
     *获取debug信息
     */
    function getDebugInfo() {
        $res = $this->debugInfo;
        $this->debugInfo = '';
        return $res;
    }

    //
    function httpSend($url, $method, $data){
        $client = new TenpayHttpClient();
        $client->setReqContent($url);
        $client->setMethod($method);
        $client->setReqBody($data);
        $res =  '';
        if( $client->call()){
            $res =  $client->getResContent();
        }
        //设置debug信息
        $this->_setDebugInfo('Req Url:' .$url);
        $this->_setDebugInfo('Req data:' .$data);
        $this->_setDebugInfo('Res Content:' .$res);

        return $res;
    }

    //获取TOKEN，一天最多获取200次
    function GetToken(){


        if(Cache::has("weixin_access_token"))
        {
            if($this->Token = Cache::get('weixin_access_token')){
                return $this->Token;
            }
        }

        $url= $this->tokenUrl . '?grant_type=client_credential&appid='.$this->app_id .'&secret='.$this->app_secret;
        $json=$this->httpSend($url,'GET','');
        if( $json != ""){
            $tk = json_decode($json);
            if( $tk->access_token != "" )
            {
                $this->Token =$tk->access_token;
                $expires_in = $tk->expires_in;
                Cache::put("weixin_access_token",$this->Token,$expires_in);
            }else{
                $this->Token = '';
            }
        }
        //设置debug信息
        $this->_setDebugInfo('tokenUrl:' .$url);
        $this->_setDebugInfo('tokenRes jsonContent:' .$json);
        return $this->Token;
    }

    /**
     *创建package签名
     */
    function createMd5Sign($signParams) {
        $signPars = '';

        ksort($signParams);
        foreach($signParams as $k =>$v) {
            if($v != "" && 'sign' !=$k) {
                $signPars .= $k . '=' .$v.'&';
            }
        }
        $signPars .= 'key=' .$this->partner_key;

        $sign = strtoupper(md5($signPars));
        //debug信息
        $this->_setDebugInfo('md5签名:'.$signPars . ' => sign:' .$sign);

        return $sign;

    }

    //获取带参数的签名包
    function genPackage($packageParams){

        $sign = $this->createMd5Sign($packageParams);
        $reqPars = '';
        foreach ($packageParams as $k =>$v ){
            $reqPars.=$k . '='.URLencode($v) . '&';
        }
        $reqPars = $reqPars . 'sign=' .$sign;
        //debug信息
//        $this->_setDebugInfo('gen package:' .$reqPars);

        return $reqPars;
    }

    //创建签名SHA1
    function createSHA1Sign($packageParams){
        $signPars = '';
        ksort($packageParams);
        foreach($packageParams as $k=> $v) {
            if($signPars == ''){
                $signPars =$signPars .$k. '=' .$v;
            }else{
                $signPars =$signPars. '&' .$k. '=' .$v;
            }
        }

        $sign = SHA1($signPars);

        //debug信息
        $this->_setDebugInfo('sha1:' .$signPars .'=>'. $sign);

        return $sign;
    }

    //提交预支付
    function sendPrepay($packageParams){
        $prepayid = null;

        $smlStr = $this->arrayToXml($packageParams);

        $url= $this->unifiedorderUrl;

        $res = $this->httpSend($url,'POST',$smlStr);

        $res = $this->xmlToArray($res);
        if($res['return_code'] == 'SUCCESS' && $res['result_code'] == 'SUCCESS'
        && $this->verifySignResponse($res))
        {
            return $res['prepay_id'];
        }

        if($res['return_code'] == 'FAIL') {
            // throw new \Exception("提交预支付交易单失败:{$res['return_msg']}");
            Log::error("提交预支付交易单失败:{$res['return_msg']}");
        }

        // throw new \Exception("提交预支付交易单失败，{$res['err_code']}:{$res['err_code']}");
        // $res = json_encode($res);
        // Log::error("提交预支付交易单失败，{$res}");
    }

    /**
     * 数组转成xml字符串
     *
     * @return string
     */
    protected function arrayToXml($params)
    {
        $xml = '<xml>';
        foreach($params as $key => $value) {
            $xml .= "<{$key}>";
            $xml .= "<![CDATA[{$value}]]>";
            $xml .= "</{$key}>";
        }
        $xml .= '</xml>';

        return $xml;
    }

    /**
     * 取成功响应
     * @return string
     */
    public function getSucessXml()
    {
        $xml = '<xml>';
        $xml .= '<return_code><![CDATA[SUCCESS]]></return_code>';
        $xml .= '<return_msg><![CDATA[OK]]></return_msg>';
        $xml .= '</xml>';
        return $xml;
    }

    public function getFailXml()
    {
        $xml = '<xml>';
        $xml .= '<return_code><![CDATA[FAIL]]></return_code>';
        $xml .= '<return_msg><![CDATA[OK]]></return_msg>';
        $xml .= '</xml>';
        return $xml;
    }

    /**
     * xml 转换成数组
     * @param string $xml
     * @return array
     */
    protected function xmlToArray($xml)
    {
        $xmlObj = simplexml_load_string(
            $xml,
            'SimpleXMLIterator',   //可迭代对象
            LIBXML_NOCDATA
        );

        $arr = [];
        $xmlObj->rewind(); //指针指向第一个元素
        while (1) {
            if( ! is_object($xmlObj->current()) )
            {
                break;
            }
            $arr[$xmlObj->key()] = $xmlObj->current()->__toString();
            $xmlObj->next(); //指向下一个元素
        }

        return $arr;
    }

    //验证统一下单接口响应
    protected function verifySignResponse($arr)
    {
        $tmpArr = $arr;
        unset($tmpArr['sign']);
        ksort($tmpArr);
        $str = '';
        foreach($tmpArr as $key => $value) {
            if($value)
            {
                $str .= "$key=$value&";
            }

        }
        $str .= 'key='.$this->partner_key;

        if($arr['sign'] == $this->signMd5($str)) {
            return true;
        }
        return false;
    }

    /**
     * MD5签名
     *
     * @param string $str 待签名字符串
     * @return string 生成的签名，最终数据转换成大写
     */
    protected function signMd5($str)
    {
        $sign = md5($str);

        return strtoupper($sign);
    }
    /**
     *设置debug信息
     */
    function _setDebugInfo($debugInfo) {
        $this->debugInfo = PHP_EOL.$this->debugInfo.$debugInfo.PHP_EOL;
    }
}
?>
