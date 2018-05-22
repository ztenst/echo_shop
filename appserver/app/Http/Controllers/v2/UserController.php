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
namespace App\Http\Controllers\v2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Helper\Token;
use App\Models\v2\Member;
use App\Models\v2\RegFields;
use App\Models\v2\Configs;
use App\Models\v2\Features;
use Log;
use Cookie;

class UserController extends Controller
{
    /**
     * POST /user/signin
     */
    public function signin()
    {
        $rules = [
            'username' => 'required|string',
            'password' => 'required|min:6|max:20'
        ];

        if ($error = $this->validateInput($rules)) {
            return $error;
        }

        $data = Member::login($this->validated);
        return $this->json($data);
    }

    /**
     * POST /user/signup-email
     */
    public function signupByEmail()
    {
        $rules = [
            'device_id'     => 'string',
            'username'      => 'required|min:3|max:25|alpha_num',
            'email'         => 'required|email',
            'password'      => 'required|min:6|max:20',
            'invite_code'   => 'integer'
        ];

        if($res = Features::check('signup.default'))
        {
            return $this->json($res);
        }

        if ($error = $this->validateInput($rules)) {
            return $error;
        }

        $data = Member::createMember($this->validated);
        return $this->json($data);
    }

    /**
     * POST /user/signup-mobile
     */
    public function signupByMobile()
    {
        if($res = Features::check('signup.mobile'))
        {
            return $this->json($res);
        }

        $rules = [
            'device_id'     => 'string',
            'password'      => 'required|min:6|max:20',
            'mobile'        => 'required|string',
            'code'          => 'required|string|digits:6',
            'invite_code'   => 'integer', 
        ];

        if ($error = $this->validateInput($rules)) {
            return $error;
        }

        $data = Member::createMemberByMobile($this->validated);
        return $this->json($data);
    }

    /**
     * POST /user/verify-mobile
     */
    public function verifyMobile()
    {
        $rules = [
            'mobile' => 'required|string',
        ];

        if ($error = $this->validateInput($rules)) {
            return $error;
        }

        $data = Member::verifyMobile($this->validated);
        return $this->json($data);
    }

    /**
     * POST /user/send-code
     */
    public function sendCode()
    {
        $rules = [
            'mobile' => 'required|string',
        ];

        if ($error = $this->validateInput($rules)) {
            return $error;
        }

        $data = Member::sendCode($this->validated);
        return $this->json($data);
    }

    /**
     * POST /user/profile
     */
    public function profile()
    {
        $data = Member::getMemberByToken();
        return $this->json($data);
    }

    /**
     * POST /user/update-profile
     */
    public function updateProfile()
    {
        $rules = [
            'values'        => 'json',
            'nickname'      => 'string|max:25',
            'gender'        => 'integer|in:0,1,2',
            'avatar_url'    => 'string'
        ];

        if ($error = $this->validateInput($rules)) {
            return $error;
        }

        $data = Member::updateMember($this->validated);
        return $this->json($data);
    }

    /**
     * POST /user/update-password
     */
    public function updatePassword()
    {
        $rules = [
            'old_password' => 'required|min:6|max:20',
            'password'     => 'required|min:6|max:20'
        ];

        if ($error = $this->validateInput($rules)) {
            return $error;
        }

        $data = Member::updatePassword($this->validated);
        return $this->json($data);
    }

    /**
     * POST /user/reset-password-mobile
     */
    public function resetPasswordByMobile()
    {
        $rules = [
            'mobile'   => 'required|string',
            'code'     => 'required|string|digits:6',
            'password' => 'required|min:6|max:20'
        ];

        if($res = Features::check('findpass.default'))
        {
            return $this->json($res);
        }

        if ($error = $this->validateInput($rules)) {
            return $error;
        }

        $data = Member::updatePasswordByMobile($this->validated);
        return $this->json($data);
    }

    /**
     * POST /user/reset-password-email
     */
    public function resetPasswordByEmail()
    {
        $rules = [
            'email' => 'required|email'
        ];

        if($res = Features::check('findpass.default'))
        {
            return $this->json($res);
        }

        if ($error = $this->validateInput($rules)) {
            return $error;
        }

        $data = Member::resetPassword($this->validated);
        return $this->json($data);
    }

    /**
     * POST /user/auth
     */
    public function auth()
    {
        $rules = [
            'device_id'     => 'string',
            'vendor'        => 'required|integer|in:1,2,3,4,5',
            'access_token'  => 'string',
            'js_code'       => 'string',
            'open_id'       => 'string',
            'invite_code'   => 'integer', 
        ];

        if ($error = $this->validateInput($rules)) {
            return $error;
        }

        $data = Member::auth($this->validated);
        return $this->json($data);
    }

    /**
     * POST /ecapi.user.profile.fields
     */
    public function fields()
    {
        $data = RegFields::findAll();
        return $this->json($data);
    }


    /**
     * GET /user/web
     */
    public function webOauth()
    {
        $rules = [
                    'vendor'        => 'required|integer|in:1,2,3,4',
                    'referer'       => 'required|url',
                    'invite_code'   => 'integer', 
                 ];

        if ($error = $this->validateInput($rules)) {
            return $error;
        }

        $data = Member::webOauth($this->validated);
        if (isset($data['error'])) {
            return $this->json($data);
        }
        return redirect($data);
    }
    /**
     * GET /ecapi.auth.web.callback/:vendor
     */
     public function webCallback($vendor)
     {        

         $data = Member::webOauthCallback($vendor);
          if (isset($data['error'])) {
              return $this->json($data);
          }        
          if (isset($_GET['referer'])) {
            if(isset($data['openid'])){
                setcookie('o',$data['openid'],time()+7200,'/',config('app.domain_url'));
            }
            if(isset($data['token'])){
                setcookie('t',$data['token'],time()+7200,'/',config('app.domain_url'));
            }
                                    
//               return redirect(urldecode($_GET['referer']).'?token='.$data['token'].'&openid='.$data['openid']);
            return redirect(urldecode($_GET['referer']));
          }
          return $this->json(['token' => $data]);
     }

}
