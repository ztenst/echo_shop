<?php exit;?>a:3:{s:8:"template";a:4:{i:0;s:64:"D:/webroot/demo/mobile/themesmobile/68ecshopcom_mobile/goods.dwt";i:1;s:74:"D:/webroot/demo/mobile/themesmobile/68ecshopcom_mobile/library/up_menu.lbi";i:2;s:80:"D:/webroot/demo/mobile/themesmobile/68ecshopcom_mobile/library/goods_gallery.lbi";i:3;s:75:"D:/webroot/demo/mobile/themesmobile/68ecshopcom_mobile/library/comments.lbi";}s:7:"expires";i:1487146604;s:8:"maketime";i:1487143004;}<!DOCTYPE html >
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<title>柏年好禾 家具 欧式床 真皮实木床 法式田园公主床_家纺_家纺家居_鸿宇多用户商城手机版  </title>
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
<link rel="stylesheet" type="text/css" href="themesmobile/68ecshopcom_mobile/css/public.css"/>
<link rel="stylesheet" type="text/css" href="themesmobile/68ecshopcom_mobile/css/goods.css"/>  
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.json.js"></script><script type="text/javascript" src="js/transport.js"></script><script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/touchslider.dev.js"></script>
<script type="text/javascript" src="js/common.js"></script>
</head>
<body>
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<script language="javascript"> 
<!--
/*屏蔽所有的js错误*/
function killerrors() { 
return true; 
} 
window.onerror = killerrors; 
//-->
function tiaozhuan()
{ 
//var thisurl = window.location.href;
document.getElementById("share_form").submit();
}
</script>
<script type="text/javascript">
				/*第一种形式 第二种形式 更换显示样式*/
				function setGoodsTab(name,cursel,n){
					$('html,body').animate({'scrollTop':0},600);
				for(i=1;i<=n;i++){
				var menu=document.getElementById(name+i);
				var con=document.getElementById("user_"+name+"_"+i);
				menu.className=i==cursel?"on":"";
				con.style.display=i==cursel?"block":"none";
				}
				}
				</script>
<div class="main"> 
      
      <div class="tab_nav">
        <div class="header">
          <div class="h-left"><a class="sb-back" href="javascript:history.back(-1)" title="返回"></a></div>
          <div class="h-mid">
            <ul>
              <li><a href="javascript:;" class="tab_head on"   id="goods_ka1" onClick="setGoodsTab('goods_ka',1,3)">商品</a></li>
              <li><a href="javascript:;" class="tab_head" id="goods_ka2" onClick="setGoodsTab('goods_ka',2,3)">详情</a></li>
              <li><a href="javascript:;" class="tab_head" id="goods_ka3" onClick="setGoodsTab('goods_ka',3,3)">评价</a></li>
              
            </ul>
          </div>
          <div class="h-right">
            <aside class="top_bar">
            <div onClick="show_menu();$('#close_btn').addClass('hid');" id="show_more"><a href="javascript:;"></a> </div>
            <a href="flow.php" class="show_cart"><em class="global-nav__nav-shop-cart-num" id="ECS_CARTINFO">554fcae493e564ee0dc75bdf2ebf94cacart_info|a:1:{s:4:"name";s:9:"cart_info";}554fcae493e564ee0dc75bdf2ebf94ca</em></a>
            
            
            </aside>
          </div>
        </div>
      </div>
       	
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/mobile.js" ></script>
<div class="goods_nav hid" id="menu">
        <div class="Triangle">
          <h2></h2>
        </div>
        <ul>
          <li><a href="index.php"><span class="menu1"></span><i>首页</i></a></li>
          <li><a href="catalog.php"><span class="menu2"></span><i>分类</i></a></li>
          <li><a href="flow.php"><span class="menu3"></span><i>购物车</i></a></li>
          <li style=" border:0;"><a href="user.php"><span class="menu4"></span><i>我的</i></a></li>
        </ul>
      </div> 
     <form action="share_goods.php" method="post" id="share_form">
            <input type="hidden" name="content" value="柏年好禾 家具 欧式床 真皮实木床 法式田园公主床">
            <input type="hidden" name="pics" value="../images/201507/goods_img/120_G_1437525234107.jpg">
            <input type="hidden" name="gid" value="120">
            <input type="hidden" name="url" value="http://demo.52jscn.com/mobile/goods.php?id=120">
     </form>
      
      <div class="main" id="user_goods_ka_1" style="display:block;">
         
            <div class="banner">
  <div id="slider" class="slider" style="overflow: hidden; visibility: visible; list-style: none; position: relative;">
    <ul id="sliderlist" class="sliderlist" style="position: relative; overflow: hidden; transition: left 600ms ease; -webkit-transition: left 600ms ease; width: 2400px; left: -600px;">
             <li style="float: left; display: block; width: 600px;"><span><a  href="javacript:void(0)"><img title="" width="100%" src="../images/201507/goods_img/120_P_1437525234944.jpg"></a></span></li>
           </ul>
    <div id="pagenavi">
        <a href="javascript:void(0);" class="active"></a>
     </div>
  </div>
</div>
<div class="s_bottom"></div>
<script type="text/javascript">$(function(){
	$("div.module_special .wrap .major ul.list li:last-child").addClass("remove_bottom_line");
});
var active=0,
	as=document.getElementById('pagenavi').getElementsByTagName('a');
	
for(var i=0;i<as.length;i++){
	(function(){
		var j=i;
		as[i].onclick=function(){
			t2.slide(j);
			return false;
		}
	})();
}
var t2=new TouchSlider({id:'sliderlist', speed:600, timeout:6000, before:function(index){
		as[active].className='';
		active=index;
		as[active].className='active';
	}});
</script> 
          <form action="javascript:addToCart(120)" method="post" id="purchase_form" name="ECS_FORMBUY" >
            <div class="product_info">
              <div class="info_dottm">
                <h3 class="name">柏年好禾 家具 欧式床 真皮实木床 法式田园公主床</h3>
                <div class="right"><a onClick="tiaozhuan()"><div id="pro_share" class="share"></div></a></div>
              </div>
              
              <dl class="goods_price">
               <script type="text/javascript" src="js/lefttime.js"></script>                  
                   
              <dt> <span id="ECS_GOODS_AMOUNT">￥2098.00元</span><font>价格：￥2517.60元</font>                                </dt>
                            </dl>
              <ul class="price_dottm">
               <li style=" text-align:left">折扣：0折</li>
               <li>0人评价</li>
               <li style=" text-align:right">0人已付款</li> 
              </ul>
              </div>             
 <section id="search_ka" class="huodong">
	<div class="subNav"> 
     <div class="att_title">
            
         <span>惠</span>
     <p>购买此商品可使用：0</p>
        
      </div>
      </div>
  
    <div class="navContent"> 
   <ul class="youhui_list1">
     
        </li>
      </ul>
      
    
         
      
               <ul class="youhui_list1" style="margin-top:0px;"> 
              <li><img src="themesmobile/68ecshopcom_mobile/images/hui.png">购买此商品可使用：0</li> 
                                
        
              
       
   <div class="blank10"></div>
       </div>      
</section>
<section id="search_ka">
<div class="ui-sx bian1"> 
<div class="subNavBox"> 
	<div class="subNav on"><strong>购买数量</strong></div>
    <ul class="navContent" style="display: block;"> 
	<li style=" border-bottom:1px solid #eeeeee">
        <div class="item1">
         <script language="javascript" type="text/javascript">  function goods_cut(){var num_val=document.getElementById('number');  var new_num=num_val.value;  var Num = parseInt(new_num);  if(Num>1)Num=Num-1;  num_val.value=Num;}  function goods_add(){var num_val=document.getElementById('number');  var new_num=num_val.value;  var Num = parseInt(new_num);  Num=Num+1;  num_val.value=Num;} </script>
         <span class="ui-number">
          <button type="button" class="decrease" onclick="goods_cut();changePrice();">-</button>
          <input type="text" class="num" id="number" onblur="changePrice();" name="number" value="1" min="1" max="451"/>
          <button type="button" class="increase" onclick="goods_add();changePrice();">+</button>
          </span>
      </div>    
    </li>
       </ul>  
    </div>
    </div>    
</section> 
<section id="search_ka">
<div class="ui-sx bian1"> 
<div class="subNavBox" > 
	<div class="subNav"><strong>会员专享价</strong></a></div>
    <ul class="navContent" > 
    <li  class="user_price">			
		        <p>
         <span class="key">铜牌会员：</span>
         <b class="p-price-v">￥1993.10元</b>
         </p>
             <p>
         <span class="key">金牌会员：</span>
         <b class="p-price-v">￥1888.20元</b>
         </p>
             <p>
         <span class="key">钻石会员：</span>
         <b class="p-price-v">￥1783.30元</b>
         </p>
     
    </li>
       </ul> 
    </div>
    </div> 
  
</section>
        <script type="text/javascript">
$(function(){
	$(".subNav").click(function(){
		
		$(this).next(".navContent").slideToggle(300).siblings(".navContent").slideUp(500);
		$(this).toggleClass("on").siblings(".subNav").removeClass("on");
		if($(".is_scroll").length <= 0)
		{
		$('html,body').animate({'scrollTop':$('body')[0].scrollHeight},600);
		}
	})	
})
</script>
<script type="text/jscript">
			  function click_search (){
				  var search_ka = document.getElementById("search_ka");
				  if (search_ka.className == "s-buy open ui-section-box"){
					  search_ka.className = "s-buy ui-section-box";
					  }else {
						  search_ka.className = "s-buy open ui-section-box";
						  }
				  }
function changeAtt(t) {
t.lastChild.checked='checked';
for (var i = 0; i<t.parentNode.childNodes.length;i++) {
        if (t.parentNode.childNodes[i].className == 'hover') {
            t.parentNode.childNodes[i].className = '';
			t.childNodes[0].checked="checked";
		}
    }
t.className = "hover";
changePrice();
}
function changeAtt1(t) {
t.lastChild.checked='checked';
for (var i = 0; i<t.parentNode.childNodes.length;i++) {
        if (t.className == 'hover') {
            t.className = '';
			t.childNodes[0].checked = false;
		}
		else{
			t.className="hover";
			t.childNodes[0].checked = true;
		}
		
	
}
changePrice();
}
</script> 
<div style=" height:8px; background:#eeeeee; margin-top:-1px;"></div>
<div class="is_scroll">
<section id="search_ka">
<div class="ui-sx bian1"> 
<div class="subNavBox" > 
<div class="subNav" style=" border:0;"><a href="pocking.php?id=120" style=" border:0px;"><strong>自提点</strong></a></div>
</div>
</div> 
  
</section>
</div>
    <div class="is_scroll">
<input type="hidden" id="chat_supp_id" value="7" />
<div style=" height:8px; background:#eeeeee; margin-top:-1px;"></div>
<section class="rzs_info">
<div class="top_info">
<dl>
<dt><a href="supplier.php?suppId=7"><div style="background-image:url(./..//data/supplier/logo/logo_supplier7.jpg)"></div></a></dt>
<dd><strong>卖家: <a href="supplier.php?suppId=7" style="color:#333; font-size:18px;">金星家纺</a></strong><em>中级店铺</em></dd>
</dl>
<ul>
<li><span>宝贝描述</span><strong>:5.0</strong><em>高</em></li>
<li><span>卖家服务</span><strong>:5.0</strong><em>高</em></li>
<li><span>物流服务</span><strong>:5.0</strong><em>高</em></li>
</ul>
</div>
<div class="s_dianpu">
<span><a href="tel:400-888-8888" style=" margin-left:7%;"><em class="bg1"></em>联系客服</a></span>
<span><a href="supplier.php?suppId=7" style=" margin-left:3%;"><em class="bg2"></em>进入店铺</a></span>
</div>
</section>
</div>
          </form>
      </div>
          
      
      <div class="main" id="user_goods_ka_2" style="display:none">
      <div class="product_main" style=" margin-top:40px;"> 
          <div class="product_images product_desc" id="product_desc">  </div>
        </div>
              <section class="index_floor">
    <h2 style=" border-bottom:1px solid #ddd ">
      <span></span>
      商品信息    </h2>
    
      <ul class="xiangq">
                                            <li><p>上架时间：</p><span>2015-07-22</span><li>
          
      </ul>
       </section>
             </div> 
      
      <div class="tab_attrs tab_item hide" id="user_goods_ka_3" style="display:none;">
        <script type="text/javascript" src="js/utils.js"></script><div id="ECS_COMMENT"> 
554fcae493e564ee0dc75bdf2ebf94cacomments|a:3:{s:4:"name";s:8:"comments";s:4:"type";i:0;s:2:"id";i:120;}554fcae493e564ee0dc75bdf2ebf94ca</div> 
        <script language="javascript"> ShowMyComments(120,0,1);</script>
      </div>
      
    </div>
    
    
    
    
 
     
    
<script>
function goTop(){
	$('html,body').animate({'scrollTop':0},600);
}
</script>
<a href="javascript:goTop();" class="gotop"><img src="themesmobile/68ecshopcom_mobile/images/topup.png"></a>
<div style=" height:60px;"></div>
<div class="footer_nav">
 <ul> 
 <li class="bian"><a href="index.php"><em class="goods_nav1"></em><span>首页</span></a> </li>
 <li class="bian"><a href="tel:4000000001"><em class="goods_nav2"></em><span>客服</span></a> </li>
 <li><a href="javascript:collect(120)" id="favorite_add"><em class="goods_nav3"></em><span>收藏</span></a></li>
 </ul>
 <dl>
 <dd class="flow"><a class="button active_button" href="javascript:addToCart(120);">加入购物车</a> </dd>
 <dd class="goumai"><a style="display:block;" href="javascript:addToCart1(120)">立即购买</a> </dd>
 </dl>                
</div>                
<script type="text/javascript">
var goods_id = 120;
var goodsattr_style = 1;
var gmt_end_time = 0;
var day = "天";
var hour = "小时";
var minute = "分钟";
var second = "秒";
var end = "结束";
var goodsId = 120;
var now_time = 1487114205;
onload = function(){ 
  changePrice();
  try {onload_leftTime();}
  catch (e) {}
}
/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;
if(qty <=0 ){
 document.forms['ECS_FORMBUY'].elements['number'].value = 1;
 qty = 1;
}
  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}
/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;
    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}
</script>
</body>
</html>