<div class="blank"></div>
<?php if ($this->_var['helps']): ?>
    <?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['help_cat']):
        $this->_foreach['foo']['iteration']++;
?> 
    <?php if ($this->_foreach['foo']['iteration'] < 6): ?>
    <dl class="col-links">
      <dt><?php echo $this->_var['help_cat']['cat_name']; ?></dt>
      <?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
      <dd> 
        <a href="<?php echo $this->_var['item']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['item']['title']); ?>" rel="nofollow"><?php echo $this->_var['item']['short_title']; ?></a>
      </dd>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    </dl>
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
<?php endif; ?> 

