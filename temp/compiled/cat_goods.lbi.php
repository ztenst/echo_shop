<div class="home-brick-box home-brick-row-2-box xm-plain-box J_itemBox J_brickBox is-visible loaded">
	
	<div class="box-hd">
        <h2 class="title"><?php echo $this->_var['goods_cat']['name']; ?></h2>
        <div class="more J_brickNav">
            <a class="more-link" href="<?php echo $this->_var['goods_cat']['url']; ?>" style=" display:inline-block;">
                查看全部<i class="iconfont"></i>
            </a>
            <ul class="tab-list J_brickTabSwitch">
            	<li class="tab-active">热门</li>
                <?php $_from = $this->_var['goods_cat']['goods_level2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_level2');$this->_foreach['goods_level2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_level2']['total'] > 0):
    foreach ($_from AS $this->_var['goods_level2']):
        $this->_foreach['goods_level2']['iteration']++;
?>
                <?php if ($this->_foreach['goods_level2']['iteration'] < 5): ?>
            	<li><?php echo $this->_var['goods_level2']['name']; ?></li>
                <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
        </div>
    </div>
    
    <div class="box-bd J_brickBd">
    	<div class="row">
        	<div class="span4 span-first">
                <ul class="brick-promo-list clearfix">
                  <?php if ($this->_var['goods_cat']['sort_order'] == 1): ?>
                    <li class="brick-item brick-item-l">
                    <?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '分类下商品左侧广告大',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
                    </li>
                  <?php else: ?>
                    <li class="brick-item brick-item-m">
                    <?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '分类下商品左侧广告小1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
                    </li>
                    <li class="brick-item brick-item-m">
                    <?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '分类下商品左侧广告小2',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
                    </li>
                  <?php endif; ?>
                </ul>
                
            </div>

            <div class="span16">
            
            	
            	<ul class="brick-list clearfix">
                  <?php $_from = $this->_var['goods_cat']['cat_hot']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_73841100_1465364592');$this->_foreach['cate'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cate']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_73841100_1465364592']):
        $this->_foreach['cate']['iteration']++;
?>
                  <?php if ($this->_foreach['cate']['iteration'] < 9): ?>
                  <li class="brick-item brick-item-m">
                      <div class="figure figure-img">
                          <a href="<?php echo $this->_var['goods_0_73841100_1465364592']['url']; ?>">
                              <img src="<?php echo $this->_var['goods_0_73841100_1465364592']['thumb']; ?>" width="160" height="160" alt="<?php echo htmlspecialchars($this->_var['goods_0_73841100_1465364592']['name']); ?>">
                          </a>
                      </div>
                      <h3 class="title">
                          <a href="<?php echo $this->_var['goods_0_73841100_1465364592']['url']; ?>"><?php echo htmlspecialchars($this->_var['goods_0_73841100_1465364592']['name']); ?></a>
                      </h3>
                      <p class="desc"><?php echo $this->_var['goods_0_73841100_1465364592']['brief']; ?></p>
                      <p class="price">
                          <?php if ($this->_var['goods_0_73841100_1465364592']['promote_price'] != ""): ?><?php echo $this->_var['goods_0_73841100_1465364592']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods_0_73841100_1465364592']['shop_price']; ?><?php endif; ?>
                      </p>
                      <p class="rank"><?php echo empty($this->_var['goods_0_73841100_1465364592']['comments']['comment_percent']['comment_count']) ? '0' : $this->_var['goods_0_73841100_1465364592']['comments']['comment_percent']['comment_count']; ?>人评价</p>
                      <?php $_from = $this->_var['goods_0_73841100_1465364592']['comments']['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comments');$this->_foreach['comments'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['comments']['total'] > 0):
    foreach ($_from AS $this->_var['comments']):
        $this->_foreach['comments']['iteration']++;
?>
                      <?php if ($this->_foreach['comments']['iteration'] == 1): ?>
                      <div class="review-wrapper">
                          <a href="javascript:void(0)">
                              <span class="review"> <?php echo sub_str(htmlspecialchars($this->_var['comments']['content']),26); ?></span>
                              <span class="author"> 来自于 <?php echo empty($this->_var['comments']['username']) ? '匿名用户' : $this->_var['comments']['username']; ?> 的评价 </span>
                          </a>
                      </div>
                      <?php endif; ?>
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  </li>
                  <?php endif; ?>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
                
                
            	<?php $_from = $this->_var['goods_cat']['goods_level2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_level2');$this->_foreach['goods_level2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_level2']['total'] > 0):
    foreach ($_from AS $this->_var['goods_level2']):
        $this->_foreach['goods_level2']['iteration']++;
?>
                <?php if ($this->_foreach['goods_level2']['iteration'] < 5): ?>
            	<ul class="brick-list clearfix">
                  <?php $_from = $this->_var['goods_level2']['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_73907400_1465364592');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_73907400_1465364592']):
        $this->_foreach['goods']['iteration']++;
?>
                  <?php if ($this->_foreach['goods']['iteration'] < 9): ?>
                  <li class="brick-item brick-item-m">
                      <div class="figure figure-img">
                          <a href="<?php echo $this->_var['goods_0_73907400_1465364592']['url']; ?>">
                              <img src="<?php echo $this->_var['goods_0_73907400_1465364592']['goods_thumb']; ?>" width="160" height="160" alt="<?php echo htmlspecialchars($this->_var['goods_0_73907400_1465364592']['name']); ?>">
                          </a>
                      </div>
                      <h3 class="title">
                          <a href="<?php echo $this->_var['goods_0_73907400_1465364592']['url']; ?>"><?php echo htmlspecialchars($this->_var['goods_0_73907400_1465364592']['goods_name']); ?></a>
                      </h3>
                      <p class="desc"><?php echo $this->_var['goods_0_73907400_1465364592']['goods_brief']; ?></p>
                      <p class="price">
                          <?php if ($this->_var['goods_0_73907400_1465364592']['promote_price'] != ""): ?><?php echo $this->_var['goods_0_73907400_1465364592']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods_0_73907400_1465364592']['shop_price']; ?><?php endif; ?>
                      </p>
                      <p class="rank"><?php echo empty($this->_var['goods_0_73907400_1465364592']['comments']['comment_percent']['comment_count']) ? '0' : $this->_var['goods_0_73907400_1465364592']['comments']['comment_percent']['comment_count']; ?>人评价</p>
                      <?php $_from = $this->_var['goods_0_73907400_1465364592']['comments']['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comments');$this->_foreach['comments'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['comments']['total'] > 0):
    foreach ($_from AS $this->_var['comments']):
        $this->_foreach['comments']['iteration']++;
?>
                      <?php if ($this->_foreach['comments']['iteration'] == 1): ?>
                      <div class="review-wrapper">
                          <a href="javascript:void(0)">
                              <span class="review"> <?php echo sub_str(htmlspecialchars($this->_var['comments']['content']),26); ?></span>
                              <span class="author"> 来自于 <?php echo empty($this->_var['comments']['username']) ? '匿名用户' : $this->_var['comments']['username']; ?> 的评价 </span>
                          </a>
                      </div>
                      <?php endif; ?>
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  </li>
                  <?php endif; ?>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
                <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>
        </div>
    </div>
</div>