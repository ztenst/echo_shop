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
use App\Helper\Token;

$app->get('/', function () use ($app) {
    return 'Hi';
});

//Other
$app->group(['namespace' => 'App\Http\Controllers\v2', 'prefix' => 'v2'], function($app)
{

    $app->get('article.{id:[0-9]+}', 'ArticleController@show');

    $app->get('notice.{id:[0-9]+}', 'NoticeController@show');

    $app->post('order.notify.{code}', 'OrderController@notify');

    $app->get('product.intro.{id:[0-9]+}', 'GoodsController@intro');
    
    $app->get('product.share.{id:[0-9]+}', 'GoodsController@share');

    $app->get('ecapi.auth.web', 'UserController@webOauth');

    $app->get('ecapi.auth.web.callback/{vendor:[0-9]+}', 'UserController@webCallback');

});

//Guest
$app->group(['namespace' => 'App\Http\Controllers\v2','prefix' => 'v2', 'middleware' => ['xss']], function($app)
{
    $app->post('ecapi.access.dns', 'AccessController@dns');
    
    $app->post('ecapi.access.batch', 'AccessController@batch');

    $app->post('ecapi.category.list', 'GoodsController@category');

    $app->post('ecapi.product.list', 'GoodsController@index');
    
    $app->post('ecapi.home.product.list', 'GoodsController@home');

    $app->post('ecapi.search.product.list', 'GoodsController@search');

    $app->post('ecapi.review.product.list', 'GoodsController@review');

    $app->post('ecapi.review.product.subtotal', 'GoodsController@subtotal');

    $app->post('ecapi.recommend.product.list', 'GoodsController@recommendList');

    $app->post('ecapi.product.accessory.list', 'GoodsController@accessoryList');

    $app->post('ecapi.product.get', 'GoodsController@info');

    $app->post('ecapi.auth.signin', 'UserController@signin');

    $app->post('ecapi.auth.social', 'UserController@auth');

    $app->post('ecapi.auth.default.signup', 'UserController@signupByEmail');

    $app->post('ecapi.auth.mobile.signup', 'UserController@signupByMobile');

    $app->post('ecapi.user.profile.fields', 'UserController@fields');

    $app->post('ecapi.auth.mobile.verify', 'UserController@verifyMobile');

    $app->post('ecapi.auth.mobile.send', 'UserController@sendCode');

    $app->post('ecapi.auth.mobile.reset', 'UserController@resetPasswordByMobile');

    $app->post('ecapi.auth.default.reset', 'UserController@resetPasswordByEmail');

    $app->post('ecapi.cardpage.get', 'CardPageController@view');

    $app->post('ecapi.cardpage.preview', 'CardPageController@preview');

    $app->post('ecapi.config.get', 'ConfigController@index');
    
    $app->post('ecapi.config.wechat', 'ConfigController@wechat');

    $app->post('ecapi.article.list', 'ArticleController@index');

    $app->post('ecapi.brand.list', 'BrandController@index');

    $app->post('ecapi.search.keyword.list', 'SearchController@index');

    $app->post('ecapi.region.list', 'RegionController@index');

    $app->post('ecapi.invoice.type.list', 'InvoiceController@type');

    $app->post('ecapi.invoice.content.list', 'InvoiceController@content');

    $app->post('ecapi.invoice.status.get', 'InvoiceController@status');

    $app->post('ecapi.notice.list', 'NoticeController@index');

    $app->post('ecapi.banner.list', 'BannerController@index');

    $app->post('ecapi.version.check', 'VersionController@check');

    $app->post('ecapi.recommend.brand.list', 'BrandController@recommend');

    $app->post('ecapi.message.system.list', 'MessageController@system');

    $app->post('ecapi.message.count', 'MessageController@unread');

    $app->post('ecapi.site.get', 'SiteController@index');

    $app->post('ecapi.splash.list', 'SplashController@index');

    $app->post('ecapi.splash.preview', 'SplashController@view');

    $app->post('ecapi.theme.list', 'ThemeController@index');

    $app->post('ecapi.theme.preview', 'ThemeController@view');

    $app->post('ecapi.search.category.list', 'GoodsController@categorySearch');

    $app->post('ecapi.order.reason.list', 'OrderController@reasonList');

    $app->post('ecapi.search.shop.list', 'ShopController@search');

    $app->post('ecapi.recommend.shop.list', 'ShopController@recommand');

    $app->post('ecapi.shop.list', 'ShopController@index');

    $app->post('ecapi.shop.get', 'ShopController@info');

    $app->post('ecapi.areacode.list', 'AreaCodeController@index');


});

//Authorization
$app->group(['prefix' => 'v2', 'namespace' => 'App\Http\Controllers\v2', 'middleware' => ['token', 'xss']], function($app)
{
    $app->post('ecapi.user.profile.get', 'UserController@profile');

    $app->post('ecapi.user.profile.update', 'UserController@updateProfile');

    $app->post('ecapi.user.password.update', 'UserController@updatePassword');

    $app->post('ecapi.order.list', 'OrderController@index');

    $app->post('ecapi.order.get', 'OrderController@view');

    $app->post('ecapi.order.confirm', 'OrderController@confirm');

    $app->post('ecapi.order.cancel', 'OrderController@cancel');

    $app->post('ecapi.order.price', 'OrderController@price');

    $app->post('ecapi.product.like', 'GoodsController@setLike');

    $app->post('ecapi.product.unlike', 'GoodsController@setUnlike');

    $app->post('ecapi.product.liked.list', 'GoodsController@likedList');

    $app->post('ecapi.order.review', 'OrderController@review');

    $app->post('ecapi.order.subtotal', 'OrderController@subtotal');

    $app->post('ecapi.payment.types.list', 'OrderController@paymentList');

    $app->post('ecapi.payment.pay', 'OrderController@pay');

    $app->post('ecapi.shipping.vendor.list', 'ShippingController@index');

    $app->post('ecapi.shipping.status.get', 'ShippingController@info');

    $app->post('ecapi.consignee.list', 'ConsigneeController@index');

    $app->post('ecapi.consignee.update', 'ConsigneeController@modify');

    $app->post('ecapi.consignee.add', 'ConsigneeController@add');

    $app->post('ecapi.consignee.delete', 'ConsigneeController@remove');

    $app->post('ecapi.consignee.setDefault', 'ConsigneeController@setDefault');

    $app->post('ecapi.score.get', 'ScoreController@view');

    $app->post('ecapi.score.history.list', 'ScoreController@history');

    $app->post('ecapi.cashgift.list', 'CashGiftController@index');

    $app->post('ecapi.cashgift.available', 'CashGiftController@available');

    $app->post('ecapi.push.update', 'MessageController@updateDeviceId');
    //cart
    $app->post('ecapi.cart.add', 'CartController@add');

    $app->post('ecapi.cart.clear', 'CartController@clear');

    $app->post('ecapi.cart.delete', 'CartController@delete');

    $app->post('ecapi.cart.get', 'CartController@index');

    $app->post('ecapi.cart.update', 'CartController@update');

    $app->post('ecapi.cart.checkout', 'CartController@checkout');

    $app->post('ecapi.cart.promos', 'CartController@promos');

    $app->post('ecapi.product.purchase', 'GoodsController@purchase');

    $app->post('ecapi.product.validate', 'GoodsController@checkProduct');

    $app->post('ecapi.message.order.list', 'MessageController@order');

    $app->post('ecapi.shop.watch', 'ShopController@watch');

    $app->post('ecapi.shop.unwatch', 'ShopController@unwatch');

    $app->post('ecapi.shop.watching.list', 'ShopController@watchingList');

    $app->post('ecapi.coupon.list', 'CouponController@index');

    $app->post('ecapi.coupon.available', 'CouponController@available');

    $app->post('ecapi.recommend.bonus.list', 'AffiliateController@index');
    $app->post('ecapi.recommend.bonus.info', 'AffiliateController@info');

    $app->post('ecapi.withdraw.submit', 'AccountController@submit');
    $app->post('ecapi.withdraw.cancel', 'AccountController@cancel');
    $app->post('ecapi.withdraw.list', 'AccountController@index');
    $app->post('ecapi.withdraw.info', 'AccountController@getDetail');

    $app->post('ecapi.balance.get', 'AccountController@surplus');
    $app->post('ecapi.balance.list', 'AccountController@accountDetail');
});
