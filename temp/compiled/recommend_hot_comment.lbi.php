<div class="box-hd">
	<h2 class="title">热评产品</h2>
</div>
<div class="box-bd J_brickBd">
	<ul class="review-list clearfix">
    	<?php $_from = $this->_var['index_comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comments_0_75402000_1465364592');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['comments_0_75402000_1465364592']):
        $this->_foreach['no']['iteration']++;
?>
        <?php if ($this->_foreach['no']['iteration'] < 5): ?>
    	<li class="review-item<?php if (($this->_foreach['no']['iteration'] <= 1)): ?> review-item-first<?php endif; ?>">
        	<div class="figure figure-img"><a href="<?php echo $this->_var['comments_0_75402000_1465364592']['url']; ?>"><img src="<?php echo $this->_var['comments_0_75402000_1465364592']['goods_thumb']; ?>" width="296" height="220" alt="<?php echo $this->_var['comments_0_75402000_1465364592']['goods_name']; ?>"></a></div>
            <p class="review"><a href="<?php echo $this->_var['comments_0_75402000_1465364592']['url']; ?>"><?php echo sub_str($this->_var['comments_0_75402000_1465364592']['content'],30); ?></a></p>
            <p class="author">来自于 <?php echo empty($this->_var['comments_0_75402000_1465364592']['user_name']) ? '匿名用户' : $this->_var['comments_0_75402000_1465364592']['user_name']; ?> 的评价</p>
            <div class="info">
            	<h3 class="title"><a href="<?php echo $this->_var['comments_0_75402000_1465364592']['url']; ?>"><?php echo $this->_var['comments_0_75402000_1465364592']['goods_name']; ?></a></h3>
                <span class="sep">|</span>
                <p class="price"><?php if ($this->_var['comments_0_75402000_1465364592']['promote_price'] != 0): ?><?php echo $this->_var['comments_0_75402000_1465364592']['promote_price']; ?><?php else: ?><?php echo $this->_var['comments_0_75402000_1465364592']['shop_price']; ?><?php endif; ?></p>
            </div>
        </li>
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
</div>
