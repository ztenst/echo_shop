<?php if ($this->_var['hot_goods']): ?>
<?php if ($this->_var['script_name'] == 'index'): ?>
<div class="xm-plain-box">
	<div class="box-hd">
    	<h2 class="title">
			为你推荐
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
            	<?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_75060700_1465364592');$this->_foreach['hot_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['hot_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_75060700_1465364592']):
        $this->_foreach['hot_goods']['iteration']++;
?>
                	<li>
                    	<a class="thumb" href="<?php echo $this->_var['goods_0_75060700_1465364592']['url']; ?>" target="_blank">
                        	<img src="<?php echo $this->_var['goods_0_75060700_1465364592']['thumb']; ?>" />
                        </a>
                        <h3 class="title">
                        	<a href="<?php echo $this->_var['goods_0_75060700_1465364592']['url']; ?>" target="_blank"><?php echo $this->_var['goods_0_75060700_1465364592']['short_style_name']; ?></a>
                        </h3>
                        <p class="price"><?php if ($this->_var['goods_0_75060700_1465364592']['promote_price'] != ""): ?><?php echo $this->_var['goods_0_75060700_1465364592']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods_0_75060700_1465364592']['shop_price']; ?><?php endif; ?></p>
                    </li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
        </div>
    </div>
</div>

<?php else: ?>

    <div id="J_renovateWrap" class="xm-recommend-container container xm-carousel-container">
        <h2 class="xm-recommend-title"><span>为你推荐</span></h2>
        <div class="xm-recommend">
            <div class="xm-carousel-wrapper">
                <ul class="xm-carousel-col-5-list xm-carousel-list clearfix">
                	<?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_75085400_1465364592');$this->_foreach['hot_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['hot_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_75085400_1465364592']):
        $this->_foreach['hot_goods']['iteration']++;
?>
                    <li class="J_xm-recommend-list">
                        <dl>
                            <dt><a href="<?php echo $this->_var['goods_0_75085400_1465364592']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['goods_0_75085400_1465364592']['thumb']; ?>" /></a></dt>
                            <dd class="xm-recommend-name"><a href="<?php echo $this->_var['goods_0_75085400_1465364592']['url']; ?>" target="_blank" title="<?php echo $this->_var['goods_0_75085400_1465364592']['short_style_name']; ?>"><?php echo $this->_var['goods_0_75085400_1465364592']['short_style_name']; ?></a></dd>
                            <dd class="xm-recommend-price"><?php if ($this->_var['goods_0_75085400_1465364592']['promote_price'] != ""): ?><?php echo $this->_var['goods_0_75085400_1465364592']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods_0_75085400_1465364592']['shop_price']; ?><?php endif; ?></dd>
                            <dd class="xm-recommend-tips"> </dd>
                        </dl>
                    </li>
                    
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
            </div>
            <div class="xm-pagers-wrapper">
                <ul class="xm-pagers">
                	<?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_75107700_1465364592');$this->_foreach['hot_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['hot_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_75107700_1465364592']):
        $this->_foreach['hot_goods']['iteration']++;
?>
                    <?php if (($this->_foreach['hot_goods']['iteration'] - 1) % 5 == 0): ?>
                	<li class="pager"><span class="dot"><?php echo $this->_foreach['hot_goods']['iteration']; ?></span></li>
                    <?php endif; ?> 
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
            </div>
        </div>
    </div>
<?php endif; ?> 
<?php endif; ?> 
