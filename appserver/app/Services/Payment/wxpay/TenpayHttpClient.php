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
 * http、https通信类
 * ============================================================================
 * api说明：
 * setReqContent($reqContent),设置请求内容，无论post和get，都用get方式提供
 * getResContent(), 获取应答内容
 * setMethod($method),设置请求方法,post或者get
 * getErrInfo(),获取错误信息
 * setCertInfo($certFile, $certPasswd, $certType="PEM"),设置证书，双向https时需要使用
 * setCaInfo($caFile), 设置CA，格式未pem，不设置则不检查
 * setTimeOut($timeOut)， 设置超时时间，单位秒
 * getResponseCode(), 取返回的http状态码
 * call(),真正调用接口
 *
 * ============================================================================
 *
 */
namespace App\Services\Payment\wxpay;

class TenpayHttpClient {
    //请求链接
    var $reqContent;
    //请求内容
    var $reqBody;
    //应答内容
    var $resContent;
    //请求方法
    var $method;

    //证书文件
    var $certFile;
    //证书密码
    var $certPasswd;
    //证书类型PEM
    var	$certType;

    //CA文件
    var $caFile;

    //错误信息
    var $errInfo;

    //超时时间
    var $timeOut;

    //http状态码
    var $responseCode;

    function __construct() {
        $this->TenpayHttpClient();
    }


    function TenpayHttpClient() {
        $this->reqContent = "";
        $this->resContent = "";
        $this->method = "post";

        $this->certFile = "";
        $this->certPasswd = "";
        $this->certType = "PEM";

        $this->caFile = "";

        $this->errInfo = "";

        $this->timeOut = 120;

        $this->responseCode = 0;

    }


    //设置请求链接
    function setReqContent($reqContent) {
        $this->reqContent = $reqContent;
    }
    //设置请求内容
    function setReqBody($body) {
        $this->reqBody = $body;
    }
    //获取结果内容
    function getResContent() {
        return $this->resContent;
    }

    //设置请求方法post或者get
    function setMethod($method) {
        $this->method = $method;
    }

    //获取错误信息
    function getErrInfo() {
        return $this->errInfo;
    }

    //设置证书信息
    function setCertInfo($certFile, $certPasswd, $certType="PEM") {
        $this->certFile = $certFile;
        $this->certPasswd = $certPasswd;
        $this->certType = $certType;
    }

    //设置Ca
    function setCaInfo($caFile) {
        $this->caFile = $caFile;
    }

    //设置超时时间,单位秒
    function setTimeOut($timeOut) {
        $this->timeOut = $timeOut;
    }


    //执行http调用
    function call() {
        //启动一个CURL会话
        $ch = curl_init();


        // 设置curl允许执行的最长秒数
        curl_setopt($ch, CURLOPT_TIMEOUT, $this->timeOut);


        // 获取的信息以文件流的形式返回，而不是直接输出。
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);

        // 从证书中检查SSL加密算法是否存在
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);


        //$arr = explode("?", $this->reqContent);
        if(strtolower($this->method) == "post") {
            //发送一个常规的POST请求
            curl_setopt($ch, CURLOPT_URL, $this->reqContent);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $this->reqBody);
            curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');
            //要传送的所有数据
            curl_setopt($ch, CURLOPT_POSTFIELDS, $this->reqBody);

        }else{

            curl_setopt($ch, CURLOPT_URL, $this->reqContent);
        }


        //设置证书信息
        if($this->certFile != "") {
            curl_setopt($ch, CURLOPT_SSLCERT, $this->certFile);
            curl_setopt($ch, CURLOPT_SSLCERTPASSWD, $this->certPasswd);
            curl_setopt($ch, CURLOPT_SSLCERTTYPE, $this->certType);
        }

        //设置CA
        if($this->caFile != "") {
            // 对认证证书来源的检查，0表示阻止对证书的合法性的检查。1需要设置CURLOPT_CAINFO
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
            curl_setopt($ch, CURLOPT_CAINFO, $this->caFile);

        } else {
            // 对认证证书来源的检查，0表示阻止对证书的合法性的检查。1需要设置CURLOPT_CAINFO
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

        }

        // 执行操作
        $res = curl_exec($ch);

        $this->responseCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if ($res == NULL) {
            $this->errInfo = "call http err :" . curl_errno($ch) . " - " . curl_error($ch) ;
            curl_close($ch);

            return false;

        } else if($this->responseCode != "200") {
            $this->errInfo = "call http err httpcode=" . $this->responseCode;
            curl_close($ch);
            return false;
        }
        curl_close($ch);
        $this->resContent = $res;


        return true;
    }

    function getResponseCode() {
        return $this->responseCode;
    }

}
?>
