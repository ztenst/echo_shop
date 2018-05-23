<?php if ($this->_var['brands']['1'] || $this->_var['price_grade']['1'] || $this->_var['filter_attr_list']): ?>
<div class="container">
	<div class="filter-box">
    	<?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr_0_48272800_1465364628');if (count($_from)):
    foreach ($_from AS $this->_var['filter_attr_0_48272800_1465364628']):
?>
    	<div class="filter-list-wrap">
        	<dl class="filter-list clearfix filter-list-row-2">
            	<dt><?php echo htmlspecialchars($this->_var['filter_attr_0_48272800_1465364628']['filter_attr_name']); ?>：</dt>
                <?php $_from = $this->_var['filter_attr_0_48272800_1465364628']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?>
                <?php if ($this->_var['attr']['selected']): ?>
                <dd class="active"><?php echo $this->_var['attr']['attr_value']; ?></dd>
                <?php else: ?>
                <dd><a href="<?php echo $this->_var['attr']['url']; ?>"><?php echo $this->_var['attr']['attr_value']; ?></a></dd>
                <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </dl>
            <a  href="javascript:;" class="more J_filterToggle">更多<i class="iconfont"></i></a>
        </div>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php if ($this->_var['brands']['1']): ?>
    	<div class="filter-list-wrap">
        	<dl class="filter-list clearfix filter-list-row-2">
            	<dt><?php echo $this->_var['lang']['brand']; ?>：</dt>
                <?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['brand']):
?>
                <?php if ($this->_var['brand']['selected']): ?>
                <dd class="active"><?php echo $this->_var['brand']['brand_name']; ?></dd>
                <?php else: ?>
                <dd><a href="<?php echo $this->_var['brand']['url']; ?>"><?php echo $this->_var['brand']['brand_name']; ?></a></dd>
                <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </dl>
            <a  href="javascript:;" class="more J_filterToggle">更多<i class="iconfont"></i></a>
        </div>
        <?php endif; ?>
        <?php if ($this->_var['price_grade']['1']): ?>
        <div class="filter-list-wrap">
        	<dl class="filter-list clearfix filter-list-row-2">
            	<dt><?php echo $this->_var['lang']['price']; ?>：</dt>
                <?php $_from = $this->_var['price_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'grade');if (count($_from)):
    foreach ($_from AS $this->_var['grade']):
?>
                    <?php if ($this->_var['grade']['selected']): ?>
                    <dd class="active"><?php echo $this->_var['grade']['price_range']; ?></dd>
                    <?php else: ?>
                    <dd><a href="<?php echo $this->_var['grade']['url']; ?>"><?php echo $this->_var['grade']['price_range']; ?></a></dd>
                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        	 </dl>
             <a  href="javascript:;" class="more J_filterToggle">更多<i class="iconfont"></i></a>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>
 