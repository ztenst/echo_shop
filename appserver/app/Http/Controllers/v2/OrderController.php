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

use App\Models\v2\Order;
use App\Models\v2\Payment;
use App\Models\v2\Features;
class OrderController extends Controller
{
    /**
     * POST /ecapi.order.list
     */
    public function index()
    {
        $rules = [
            'page'            => 'required|integer|min:1',
            'per_page'        => 'required|integer|min:1',
            'status'          => 'integer|min:0',
        ];

        if ($error = $this->validateInput($rules)) {
            return $error;
        }

        $data = Order::getList($this->validated);
        return $this->json($data);
    }

    /**
     * POST /ecapi.order.get
     */
    public function view()
    {
        $rules = [
            'order' => 'required|integer|min:1',
        ];

        if ($error = $this->validateInput($rules)) {
            return $error;
        }

        $data = Order::getInfo($this->validated);
        return $this->json($data);
    }

    /**
     * POST /ecapi.order.confirm
     */
    public function confirm()
    {
        $rules = [
            'order' => 'required|integer|min:1',
        ];

        if ($error = $this->validateInput($rules)) {
            return $error;
        }

        $data = Order::confirm($this->validated);
        return $this->json($data);
    }

    /**
     * POST /ecapi.order.cancel
     */
    public function cancel()
    {
        $rules = [
            'order'  => 'required|integer|min:1',
            'reason' => 'required|integer|min:1',
        ];

        if ($error = $this->validateInput($rules)) {
            return $error;
        }

        $data = Order::cancel($this->validated);
        return $this->json($data);
    }

    /**
     * POST /ecapi.order.price
     */
    public function price()
    {
        $rules = [
            "shop"             => "integer|min:1",          // 店铺ID
            "consignee"        => "integer|min:1",          // 收货人ID
            "shipping"         => "integer|min:1",          // 快递ID
            "coupon"           => "string|min:1",           // 优惠券ID
            "cashgift"         => "string|min:1",           // 红包ID
            "score"            => "integer",                // 积分
            "order_product"    => "required|string",        // 商品id数组
        ];

        if ($error = $this->validateInput($rules)) {
            return $error;
        }

        $data = Order::price($this->validated);
        return $this->json($data);
    }

    /**
     * POST /ecapi.order.review
     */
    public function review()
    {
        $rules = [
            'order' => 'required|integer|min:1',
            'review' => 'required|json',
            'is_anonymous' => 'required|integer|in:0,1'
        ];

        if ($error = $this->validateInput($rules)) {
            return $error;
        }

        $items = json_decode($this->validated['review'], true);

        $items_rules = [
            '*.goods'   => 'required|integer|min:1',
            '*.grade'   => 'required|integer|in:1,2,3',
            '*.content' => 'string'
        ];

        if ($error = $this->customValidate($items, $items_rules)) {
            return $error;
        }

        $data = Order::review($this->validated, $items);
        return $this->json($data);
    }

    /**
     * POST /ecapi.payment.types.list
     */
    public function paymentList()
    {
        $rules = [
            'shop' => 'integer|min:1',
        ];

        if ($error = $this->validateInput($rules)) {
            return $error;
        }

        $data = Payment::getList($this->validated);
        return $this->json($data);
    }

    /**
     * POST /ecapi.payment.pay
     */
    public function pay()
    {
        $rules = [
            'order' => 'required|integer|min:1',
            'code' => 'required|string|in:alipay.app,wxpay.app,unionpay.app,cod.app,wxpay.web,teegon.wap,alipay.wap,wxpay.wxa,balance',            
            'openid' => 'required_if:code,wxpay.web|string',
            'channel' => 'string',
            'referer' => 'string',
        ];

        if ($error = $this->validateInput($rules)) {
            return $error;
        }

        extract($this->validated);
        $payarr = ['alipay.app' => 'pay.alipay', 'wxpay.app' => 'pay.weixin', 'unionpay.app' => 'pay.unionpay', 'cod.app' => 'pay.cod','wxpay.web' => 'pay.wxweb','teegon.wap' => 'pay.teegon','alipay.wap' => 'pay.alipaywap','wxpay.wxa'=>'pay.wxa','balance'=>'balance'];

        // if($res = Features::check($payarr[$code]))
        // {
        //     return $this->json($res);
        // }

        $data = Payment::pay($this->validated);
        return $this->json($data);
    }

    /**
     * POST /order/notify/:code
     */
    public function notify($code)
    {
        Payment::notify($code);
    }

    /**
     * POST /ecapi.order.reason.list
     */
    public function reasonList()
    {
        return $this->json(Order::getReasonList());
    }

    /**
     * POST /ecapi.order.subtotal
     */
    public function subtotal()
    {
        return $this->json(Order::subtotal());
    }
}
