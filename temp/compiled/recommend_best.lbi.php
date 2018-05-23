<?php if ($this->_var['best_goods']): ?>
<?php if ($this->_var['script_name'] == "index"): ?>
<div class="xm-plain-box J_starGoodsCarousel">
	<div class="box-hd">
    	<h2 class="title">
			小米明星单品
        </h2>
        <div class="more">
        	<div class="xm-controls xm-controls-line-small xm-carousel-controls">
            	<a class="control control-prev iconfont" href="javascript: void(0);"></a>
				<a class="control control-next iconfont" href="javascript: void(0);"></a>
            </div>
        </div>
    </div>
    <div class="box-bd">
    	<div class="xm-carousel-wrapper J_carouselWrap">
        	<ul class="xm-carousel-list xm-carousel-col-5-list goods-list rainbow-list clearfix J_carouselList">
            	<?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['best_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['best_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['best_goods']['iteration']++;
?>
                	<li class="rainbow-item-<?php echo $this->_foreach['best_goods']['iteration']; ?>">
                    	<a class="thumb" href="<?php echo $this->_var['goods']['url']; ?>" target="_blank">
                        	<img src="<?php echo $this->_var['goods']['thumb']; ?>" />
                        </a>
                        <h3 class="title">
                        	<a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank"><?php echo $this->_var['goods']['short_style_name']; ?></a>
                        </h3>
                        <p class="desc"><?php echo $this->_var['goods']['brief']; ?></p>
                    </li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
        </div>
    </div>
</div>

<?php else: ?>




	<div class="temai_box">
  <h2>今日推荐</h2>
  <div class="temai_main">
    <ul class="temai_list cle" id="temai_list">
     <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
      <li class="show"> <a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank">
        <p class="pic"> <img src="<?php echo $this->_var['goods']['thumb']; ?>" style="display: inline;"> </p>
        <h3><?php echo $this->_var['goods']['short_style_name']; ?></h3>
        <p class="price"> <span class="bd"><strong><?php if ($this->_var['goods']['promote_price'] != ""): ?>
          <?php echo $this->_var['goods']['promote_price']; ?>
          <?php else: ?>
          <?php echo $this->_var['goods']['shop_price']; ?>
          <?php endif; ?></strong> </span> <span class="sale"><b><?php echo $this->_var['goods']['market_price']; ?></b></span> <span class="num">销量：<strong><?php echo $this->_var['goods']['sales_volume']; ?></strong></span> </p>
        </a> </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
  </div>
</div>
<?php endif; ?> 
<?php endif; ?> 
