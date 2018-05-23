
    	
        <div class="order-list-box clearfix">
        <form method="GET" name="listform">
        <ul class="order-list">
          <li class="first<?php if ($this->_var['pager']['sort'] == 'sales_volume'): ?> active<?php endif; ?>"><a title="销量" href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=sales_volume&order=<?php if ($this->_var['pager']['sort'] == 'sales_volume' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list" <?php if ($this->_var['pager']['sort'] == 'sales_volume'): ?>class="curr"<?php endif; ?> rel="nofollow"><span class="<?php if ($this->_var['pager']['sort'] == 'sales_volume'): ?>search_<?php echo $this->_var['pager']['order']; ?><?php endif; ?>">销量</span><?php if ($this->_var['pager']['sort'] == 'sales_volume'): ?>&nbsp;<i class="iconfont"><?php if ($this->_var['pager']['order'] == 'ASC'): ?><?php elseif ($this->_var['pager']['order'] == "DESC"): ?><?php endif; ?></i><?php endif; ?></a></li>
           <li class="<?php if ($this->_var['pager']['sort'] == 'shop_price'): ?>active<?php endif; ?>"><a title="价格" href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=shop_price&order=<?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>#goods_list" <?php if ($this->_var['pager']['sort'] == 'shop_price'): ?>class="curr"<?php endif; ?> rel="nofollow"><span class="<?php if ($this->_var['pager']['sort'] == 'shop_price'): ?>search_<?php echo $this->_var['pager']['order']; ?><?php endif; ?>">价格</span><?php if ($this->_var['pager']['sort'] == 'shop_price'): ?>&nbsp;<i class="iconfont"><?php if ($this->_var['pager']['order'] == 'ASC'): ?><?php elseif ($this->_var['pager']['order'] == "DESC"): ?><?php endif; ?></i><?php endif; ?></a></li>
           <li class="<?php if ($this->_var['pager']['sort'] == 'goods_id'): ?>active<?php endif; ?>"><a title="上架时间" href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=goods_id&order=<?php if ($this->_var['pager']['sort'] == 'goods_id' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list" <?php if ($this->_var['pager']['sort'] == 'goods_id'): ?>class="curr"<?php endif; ?>rel="nofollow"><span class="<?php if ($this->_var['pager']['sort'] == 'goods_id'): ?>search_<?php echo $this->_var['pager']['order']; ?><?php endif; ?>">上架时间</span><?php if ($this->_var['pager']['sort'] == 'goods_id'): ?>&nbsp;<i class="iconfont"><?php if ($this->_var['pager']['order'] == 'ASC'): ?><?php elseif ($this->_var['pager']['order'] == "DESC"): ?><?php endif; ?></i><?php endif; ?></a></li>
          <input type="hidden" name="category" value="<?php echo $this->_var['category']; ?>" />
          <input type="hidden" name="display" value="<?php echo $this->_var['pager']['display']; ?>" id="display" />
          <input type="hidden" name="brand" value="<?php echo $this->_var['brand_id']; ?>" />
          <input type="hidden" name="price_min" value="<?php echo $this->_var['price_min']; ?>" />
          <input type="hidden" name="price_max" value="<?php echo $this->_var['price_max']; ?>" />
          <input type="hidden" name="filter_attr" value="<?php echo $this->_var['filter_attr']; ?>" />
          <input type="hidden" name="page" value="<?php echo $this->_var['pager']['page']; ?>" />
          <input type="hidden" name="sort" value="<?php echo $this->_var['pager']['sort']; ?>" />
          <input type="hidden" name="order" value="<?php echo $this->_var['pager']['order']; ?>" />
          </ul>
        </form>
        <ul class="type-list">
         <li><?php echo $this->_var['lang']['btn_display']; ?>：</li>
  <li> <a href="javascript:;" onClick="javascript:display_mode('list')"><img src="themes/xiaomi/images/display_mode_list<?php if ($this->_var['pager']['display'] == 'list'): ?>_act<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['display']['list']; ?>"></a></li>
  <li><a href="javascript:;" onClick="javascript:display_mode('grid')"><img src="themes/xiaomi/images/display_mode_grid<?php if ($this->_var['pager']['display'] == 'grid'): ?>_act<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['display']['grid']; ?>"></a></li>
  <li><a href="javascript:;" onClick="javascript:display_mode('text')"><img src="themes/xiaomi/images/display_mode_text<?php if ($this->_var['pager']['display'] == 'text'): ?>_act<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['display']['text']; ?>"></a></li>&nbsp;&nbsp;
          
        </ul>
      </div>
    	
        	
           
        
       
       <?php if (! $this->_var['goods_list']): ?><p class="empty">对不起，对应商品分类或筛选组合下没有商品</p><?php endif; ?>
    <?php if ($this->_var['category'] > 0): ?>
  <form name="compareForm" action="compare.php" method="post" onSubmit="return compareGoods(this);">
    <?php endif; ?>
    <?php if ($this->_var['pager']['display'] == 'list'): ?>
    <div class="goods-list-list">
    <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
?>
    <ul class="goods-item clearfix">
    <li class="thumb"><a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" /></a></li>
    <li class="goodsName">
    <a href="<?php echo $this->_var['goods']['url']; ?>" class="f6">
        <?php if ($this->_var['goods']['goods_style_name']): ?>
        <?php echo $this->_var['goods']['goods_style_name']; ?><br />
        <?php else: ?>
        <?php echo $this->_var['goods']['goods_name']; ?><br />
        <?php endif; ?>
      </a>
     <?php if ($this->_var['goods']['goods_brief']): ?>
    <?php echo $this->_var['lang']['goods_brief']; ?><?php echo $this->_var['goods']['goods_brief']; ?><br />
    <?php endif; ?>
    </li>
    <li class="goodsPrice">
    <?php if ($this->_var['goods']['promote_price'] != ""): ?>
    <span class="shop"><?php echo $this->_var['lang']['promote_price']; ?><b><?php echo $this->_var['goods']['promote_price']; ?></b></span><br />
    <?php else: ?>
    <span class="shop"><?php echo $this->_var['lang']['shop_price']; ?><b><?php echo $this->_var['goods']['shop_price']; ?></b></span><br />
    <?php endif; ?>
    <?php if ($this->_var['show_marketprice']): ?>
    <del><?php echo $this->_var['lang']['market_price']; ?><?php echo $this->_var['goods']['market_price']; ?></del><br />
    <?php endif; ?>
    </li>
    <li class="action">
    <a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" class="btn  btn-primary goods-add-cart-btn" id="buy_btn"><i class="iconfont"></i> 加入购物车</a>
    <a href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>);" class="collect"><i class="iconfont"></i> <?php echo $this->_var['lang']['btn_collect']; ?></a>
    </li>
    </ul>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
    <?php elseif ($this->_var['pager']['display'] == 'grid'): ?>
    <div class="goods-list-box">
        	<div class="goods-list clearfix">
    <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
    <?php if ($this->_var['goods']['goods_id']): ?>
    <div class="goods-item">
    	  <div class="figure figure-img">
           <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" class="goodsimg" /></a>
           </div>
           <p class="desc"><?php echo $this->_var['goods']['goods_brief']; ?></p>
          <h2 class="title"><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['goods_name']; ?></a></h2>
           <p class="price">
            <?php if ($this->_var['goods']['promote_price'] != ""): ?>
            <?php echo $this->_var['lang']['promote_price']; ?><font class="shop_s"><?php echo $this->_var['goods']['promote_price']; ?></font>
            <?php else: ?>
            <?php echo $this->_var['lang']['shop_prices']; ?><font class="shop_s"><?php echo $this->_var['goods']['shop_price']; ?></font>
            <?php endif; ?>
            <?php if ($this->_var['show_marketprice']): ?>
            <del><?php echo $this->_var['lang']['market_prices']; ?><font class="market_s"><?php echo $this->_var['goods']['market_price']; ?></font></del>
            <?php endif; ?>
            </p>
            <div class="thumbs J_attrImg">
            	<div style="width:212px;margin:0 auto;">
                <ul class="thumb-list clearfix J_imgList">
                	<?php if ($this->_var['goods']['attr_img']): ?>
                        <?php $_from = $this->_var['goods']['attr_img']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr_img');$this->_foreach['foo2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo2']['total'] > 0):
    foreach ($_from AS $this->_var['attr_img']):
        $this->_foreach['foo2']['iteration']++;
?>
                        <li <?php if (($this->_foreach['foo2']['iteration'] <= 1)): ?>class="active"<?php endif; ?> data-config='{figure:"<?php echo $this->_var['attr_img']; ?>"}'>
                            <a><img src="<?php echo $this->_var['attr_img']; ?>" width="34" height="34"></a>
                        </li>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    <?php else: ?>
                    <li class="active" data-config='{figure:"<?php echo $this->_var['goods']['goods_thumb']; ?>"}'>
                        <a><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" width="34" height="34"></a>
                    </li>
                    <?php endif; ?>
                </ul>
                </div>
                <?php $_from = $this->_var['goods']['attr_img']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr_img');$this->_foreach['foo2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo2']['total'] > 0):
    foreach ($_from AS $this->_var['attr_img']):
        $this->_foreach['foo2']['iteration']++;
?>
                <?php if ($this->_foreach['foo2']['iteration'] == 6): ?>
                <a class="prev iconfont" href="javascript:void(0);"></a><a class="next iconfont" href="javascript:void(0);"></a>
                <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>
            <div class="actions clearfix">
                <a href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>);" class="btn-like J_likeGoods"><i class="iconfont"></i> <span><?php echo $this->_var['lang']['btn_collect']; ?></span></a> 
                <a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" class="btn-buy J_buyGoods"><span><?php echo $this->_var['lang']['btn_buy']; ?></span> <i class="iconfont"></i></a>
           </div>
           <div class="flags">
           			
			<?php if ($this->_var['goods']['zhekou']): ?>
              <div class="flag flag-saleoff"><?php echo $this->_var['goods']['zhekou']; ?>折促销</div>
          <?php endif; ?>
            
          </div>
        </div>
    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
    </div>
    <?php elseif ($this->_var['pager']['display'] == 'text'): ?>
    <div class="goods-list-list goods-list-text">
    <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
?>
    <ul class="goods-item clearfix">
    <li class="goodsName">
    <a href="<?php echo $this->_var['goods']['url']; ?>" class="f6">
        <?php if ($this->_var['goods']['goods_style_name']): ?>
        <?php echo $this->_var['goods']['goods_style_name']; ?><br />
        <?php else: ?>
        <?php echo $this->_var['goods']['goods_name']; ?><br />
        <?php endif; ?>
      </a>
     <?php if ($this->_var['goods']['goods_brief']): ?>
    <?php echo $this->_var['lang']['goods_brief']; ?><?php echo $this->_var['goods']['goods_brief']; ?><br />
    <?php endif; ?>
    </li>
    <li class="goodsPrice">
    <?php if ($this->_var['goods']['promote_price'] != ""): ?>
    <span class="shop"><?php echo $this->_var['lang']['promote_price']; ?><b><?php echo $this->_var['goods']['promote_price']; ?></b></span><br />
    <?php else: ?>
    <span class="shop"><?php echo $this->_var['lang']['shop_price']; ?><b><?php echo $this->_var['goods']['shop_price']; ?></b></span><br />
    <?php endif; ?>
    <?php if ($this->_var['show_marketprice']): ?>
    <del><?php echo $this->_var['lang']['market_price']; ?><?php echo $this->_var['goods']['market_price']; ?></del><br />
    <?php endif; ?>
    </li>
    <li class="action">
    <a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" class="btn  btn-primary goods-add-cart-btn" id="buy_btn"><i class="iconfont"></i> 加入购物车</a>
    <a href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>);" class="collect"><i class="iconfont"></i> <?php echo $this->_var['lang']['btn_collect']; ?></a>
    </li>
    </ul>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
    <?php endif; ?>
  <?php if ($this->_var['category'] > 0): ?>
  </form>
  <?php endif; ?>
        


<script type="Text/Javascript" language="JavaScript">
<!--

function selectPage(sel)
{
  sel.form.submit();
}

//-->
</script> 
<script type="text/javascript">
window.onload = function()
{
  Compare.init();
  fixpng();
}
<?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
<?php if ($this->_var['key'] != 'button_compare'): ?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php else: ?>
var button_compare = '';
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>