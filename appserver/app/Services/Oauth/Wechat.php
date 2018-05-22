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
namespace App\Services\Oauth;

class Wechat {
    /**
     * @ignore
     */
    private $appid;
    /**
     * @ignore
     */
    private $secret;
    /**
     * @ignore
     */
    private $access_token;
    /**
     * @ignore
     */
    private $refresh_token;
    /**
     * @ignore
     */
    private $expires_in;
    /**
     * @ignore
     */
    private $openid;
    /**
     * @ignore
     */
    private $unionid;
    /**
     * Set up the API root URL
     *
     * @ignore
     */
    private $host = "https://api.weixin.qq.com/";
    /**
     * Set timeout
     *
     * @ignore
     */
    private $timeout = 5;
    /**
     * Set the user agnet
     *
     * @ignore
     */
    private $user_agent = 'Henter WeChat OAuth SDK';
    private $error;
    /**
     * @param $appid
     * @param $secret
     * @param null $access_token
     * @return OAuth
     */
    public function __construct($appid, $secret, $access_token = null) {
        $this->appid = $appid;
        $this->secret = $secret;
        $this->access_token = $access_token;
        return $this;
    }
    public function error($error = NULL){
        if(is_null($error))
            return $this->error;
        $this->error = $error;
        return false;
    }
    /**
     * 获取二维码授权页，用于PC端登陆
     * get qrcode authorize url, with callback url and scope
     *
     * @param $redirect_uri
     * @param string $scope
     * @param null $state
     * @return string
     */
    public function getAuthorizeURL($redirect_uri, $scope = 'snsapi_userinfo', $state = null) {
        $params = array();
        $params['appid'] = $this->appid;
        $params['redirect_uri'] = $redirect_uri;
        $params['response_type'] = 'code';
        $params['scope'] = $scope;
        $params['state'] = $state;
        return "https://open.weixin.qq.com/connect/qrconnect?" . http_build_query($params);
    }
    /**
     * 用户授权，用于微信端登陆
     * get authorize url, with callback url and scope
     *
     * @param $redirect_uri
     * @param string $scope
     * @param null $state
     * @return string
     */
    public function getWeChatAuthorizeURL($redirect_uri, $scope = 'snsapi_userinfo', $state = null) {
        $params = array();
        $params['appid'] = $this->appid;
        $params['redirect_uri'] = $redirect_uri;
        $params['response_type'] = 'code';
        $params['scope'] = $scope;
        $params['state'] = $state;

        return "https://open.weixin.qq.com/connect/oauth2/authorize?" . http_build_query($params)."#wechat_redirect";
    }
    /**
     * @param $access_token
     * @return $this
     */
    public function setAccessToken($access_token){
        $this->access_token = $access_token;
        return $this;
    }
    /**
     * get access_token
     *
     * @param string $type [code|token]
     * @param $key [code|refresh_token]
     * @return string
     */
    public function getAccessToken($type = 'code', $key) {
        $params = array();
        $params['appid'] = $this->appid;
        $params['secret'] = $this->secret;
        if ($type === 'token') {
            $uri = 'sns/oauth2/refresh_token';
            $params['appid'] = $this->appid;
            $params['grant_type'] = 'refresh_token';
            $params['refresh_token'] = $key;
        }elseif($type === 'code') {
            $uri = 'sns/oauth2/access_token';
            $params['appid'] = $this->appid;
            $params['secret'] = $this->secret;
            $params['code'] = $key;
            $params['grant_type'] = 'authorization_code';
        }else{
            return $this->error("wrong auth type");
        }
        $return = $this->request($this->host.$uri, 'GET', $params);
        if(!is_array($return) || !$return)
            return $this->error("get access token failed".$return);
        if (!isset($return['errcode'])){
            $this->access_token = $return['access_token'];
            $this->refresh_token = $return['refresh_token'];
            $this->expires_in = $return['expires_in'];
            $this->openid = $return['openid'];
            $this->unionid = isset($return['unionid']) ? $return['unionid'] : null;
        }else{
            return $this->error("get access token failed: " . $return['errmsg']);
        }
        return $this->access_token;
    }
    /**
     * refresh access_token
     *
     * @param string $refresh_token
     * @return string
     */
    public function refreshAccessToken($refresh_token){
        return $this->getAccessToken('token', $refresh_token);
    }
    /**
     * get refresh_token
     * @return string
     */
    public function getRefreshToken(){
        return $this->refresh_token;
    }
    /**
     * get expires time (seconds)
     * @return integer
     */
    public function getExpiresIn(){
        return $this->expires_in;
    }
    /**
     * get openid
     * @return string
     */
    public function getOpenid(){
        return $this->openid;
    }
    /**
     * get unionid
     * @return string
     */
    public function getUnionid(){
        return $this->unionid;
    }
    /**
     * request api
     *
     * @param $api
     * @param array $params
     * @param string $method
     * @return array|false
     */
    public function api($api, $params = array(), $method = 'GET'){
        if(!isset($params['access_token']) && !$this->access_token)
            return $this->error('access_token error');
        $params['access_token'] = $this->access_token;
        $return = $this->request($this->host.$api, $method, $params);
        if(!is_array($return) || !$return)
            return $this->error("request failed");
        if (!isset($return['errcode'])) {
            return $return;
        }else{
            return $this->error("request failed: " . $return['errmsg']);
        }
    }
    /**
     * http request wrapper
     * @param $url
     * @param $method
     * @param $parameters
     * @return \Henter\WeChat\Response
     */
    function request($url, $method, $parameters) {
        return curl_request($url, $method, $parameters);
    }
}