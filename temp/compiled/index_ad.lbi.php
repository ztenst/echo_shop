<div id="J_homeSlider" class="xm-slider" style="overflow:hidden;">
	<div class="xm-slider-container">
    	<div class="xm-slider-control">
            <?php $_from = $this->_var['index_ad_w']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'index_ad_0_71841400_1465364592');if (count($_from)):
    foreach ($_from AS $this->_var['index_ad_0_71841400_1465364592']):
?>
            <div class="slide xm-slider-slide">
                <a target="_blank" href="<?php echo $this->_var['index_ad_0_71841400_1465364592']['url']; ?>" >
                    <img src="<?php echo $this->_var['index_ad_0_71841400_1465364592']['src']; ?>" />
                </a>
            </div>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>
    </div>
    <a class="xm-slider-previous xm-slider-navigation icon-slides icon-slides-prev prev" href="#" style="display:none;">上一张</a>
	<a class="xm-slider-next xm-slider-navigation icon-slides icon-slides-next next" href="#" style="display: none;">下一张</a>
    <ul class="xm-slider-pagination">
    	<?php $_from = $this->_var['index_ad_w']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'index_ad_0_71852300_1465364592');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['index_ad_0_71852300_1465364592']):
        $this->_foreach['foo']['iteration']++;
?>
        <li class="xm-slider-pagination-item">
            <a href="javascript:;" <?php if (($this->_foreach['foo']['iteration'] <= 1)): ?>class="active"<?php endif; ?>><?php echo $this->_foreach['foo']['iteration']; ?></a>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
</div>
