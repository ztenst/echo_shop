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
use App\Models\v2\Shipping;
use App\Models\v2\Goods;
use App\Models\v2\Comment;
use App\Models\v2\GoodsCategory;
use App\Models\v2\CollectGoods;
use App\Models\v2\Products;
use Log;

class GoodsController extends Controller
{
    /**
     * POST /ecapi.home.product.list
     */
    public function home()
    {
        $data = Goods::getHomeList();

        return $this->json($data);
    }

    /**
     * POST /ecapi.product.list
     */
    public function index()
    {
        $rules = [
            'page'            => 'required|integer|min:1',
            'per_page'        => 'required|integer|min:1',
            'brand'           => 'integer|min:1',
            'category'        => 'integer|min:1',
            'shop'            => 'integer|min:1',
            'keyword'         => 'string|min:1',
            'sort_key'        => 'string|min:1',
            'sort_value'      => 'required_with:sort_key|string|min:1',
        ];

        if ($error = $this->validateInput($rules)) {
            return $error;
        }

        $data = Goods::getList($this->validated);

        return $this->json($data);
    }

    /**
     * POST /ecapi.search.product.list
     */
    public function search()
    {
        $rules = [
            'page'            => 'required|integer|min:1',
            'per_page'        => 'required|integer|min:1',
            'brand'           => 'integer|min:1',
            'category'        => 'integer|min:1',
            'shop'            => 'integer|min:1',
            'keyword'         => 'string|min:1',
            'sort_key'        => 'string|min:1',
            'sort_value'      => 'required_with:sort_key|string|min:1',
        ];

        if ($error = $this->validateInput($rules)) {
            return $error;
        }

        $data = Goods::getList($this->validated);

        return $this->json($data);
    }

    /**
     * POST /ecapi.product.like
     */
    public function setLike()
    {
        $rules = [
            'product' => 'required|integer|min:1',
        ];

        if ($error = $this->validateInput($rules)) {
            return $error;
        }

        $data = CollectGoods::setLike($this->validated);

        return $this->json($data);
    }

    /**
     * POST /ecapi.product.unlike
     */
    public function setUnlike()
    {
        $rules = [
            'product' => 'required|integer|min:1',
        ];

        if ($error = $this->validateInput($rules)) {
            return $error;
        }

        $data = CollectGoods::setUnlike($this->validated);

        return $this->json($data);
    }

    /**
     * POST /ecapi.product.liked.list
     */
    public function likedList()
    {
        $rules = [
            'page'            => 'required|integer|min:1',
            'per_page'        => 'required|integer|min:1',
        ];

        if ($error = $this->validateInput($rules)) {
            return $error;
        }

        $data = CollectGoods::getList($this->validated);

        return $this->json($data);
    }

    /**
     * 商品评价
     * @return [type] [description]
     */
    public function review()
    {

        $rules = [
            'page'     => 'required|integer|min:1',
            'per_page' => 'required|integer|min:1',
            'product'  => 'required|integer|min:1',
            'grade'    => 'integer|in:0,1,2,3',
        ];

        if ($error = $this->validateInput($rules)) {
            return $error;
        }
        $data = Comment::getReview($this->validated);

        return $this->json($data);
    }

    /**
     * 评价统计
     * @return [type] [description]
     */
    public function subtotal()
    {

        $rules = [
            'product'  => 'required|integer|min:1',
        ];

        if ($error = $this->validateInput($rules)) {
            return $error;
        }
        $data = Comment::getSubtotal($this->validated);

        return $this->json($data);
    }


    public function recommendList()
    {
        $rules = [
            'page'            => 'required|integer|min:1',
            'per_page'        => 'required|integer|min:1',
            'product'         => 'integer|min:1',
            'brand'           => 'integer|min:1',
            'category'        => 'integer|min:1',
            'shop'            => 'integer|min:1',
            'sort_key'        => 'string|min:1',
            'sort_value'      => 'required_with:sort_key|string|min:1',
        ];

        if ($error = $this->validateInput($rules)) {
            return $error;
        }

        $data = Goods::getRecommendList($this->validated);

        return $this->json($data);
    }

    public function accessoryList()
    {
        $rules = [
            'page'            => 'required|integer|min:1',
            'per_page'        => 'required|integer|min:1',
            'product'         => 'required|integer|min:1',
        ];

        if ($error = $this->validateInput($rules)) {
            return $error;
        }

        $data = Goods::getAccessoryList($this->validated);

        return $this->json($data);
    }


    public function brandList()
    {
        $rules = [
            'page'            => 'required|integer|min:1',
            'per_page'        => 'required|integer|min:1',
        ];

    }

    public function category()
    {
        $rules = [
            'page'     => 'required|integer|min:1',
            'per_page' => 'required|integer|min:1',
            'category' => 'integer|min:1',
            'shop'     => 'integer|min:1',
            // 'paging'     => 'required',
        ];

        if ($error = $this->validateInput($rules)) {
            return $error;
        }

        $data = GoodsCategory::getList($this->validated);

        return $this->json($data);
    }


    public function categorySearch()
    {
        $rules = [
            'page'     => 'required|integer|min:1',
            'per_page' => 'required|integer|min:1',
            'category' => 'integer|min:1',
            'shop'     => 'integer|min:1',
            'keyword'  => 'string',
        ];

        if ($error = $this->validateInput($rules)) {
            return $error;
        }

        $data = GoodsCategory::getList($this->validated);

        return $this->json($data);
    }

    public function info()
    {
        $rules = [
            'product' => 'required|integer|min:1',
        ];

        if ($error = $this->validateInput($rules)) {
            return $error;
        }

        $data = Goods::getInfo($this->validated);
        
        return $this->json($data);
    }

    public function intro($id)
    {
        return Goods::getIntro($id);
    }

    public function share($id)
    {
        return Goods::getShare($id);
    }

    public function purchase()
    {
        $rules = [
            "shop"             => "integer|min:1",          // 店铺ID
            "consignee"        => "required|integer|min:1", // 收货人ID
            "shipping"         => "required|integer|min:1", // 快递ID
            "invoice_type"     => "string|min:1",           // 发票类型ID，如：公司、个人
            "invoice_content"  => "string|min:1",           // 发票内容ID，如：办公用品、礼品
            "invoice_title"    => "string|min:1",           // 发票抬头，如：xx科技有限公司
            "coupon"           => "string|min:1",           // 优惠券ID
            "cashgift"         => "string|min:1",           // 红包ID
            "comment"          => "string|min:1",           // 留言
            "score"            => "integer",                 // 积分
            "property"         => "required|string",         // 用户选择的属性ID
            "product"          => "required|integer|min:1",         // 商品ID
            "amount"           => "required|integer|min:1",         // 数量
        ];

        if ($error = $this->validateInput($rules)) {
            return $error;
        }

        $response = Goods::purchase($this->validated);

        return $this->json($response);
    }


    public function checkProduct()
    {
        $rules = [
            "product"  => "required|json",
        ];

        if ($error = $this->validateInput($rules)) {
            return $error;
        }

        $response = Products::validateProducts($this->validated);

        return $this->json($response);
    }
}
