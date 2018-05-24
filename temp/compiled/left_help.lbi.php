<?php if ($this->_var['helps']): ?>
<div class="left">
  <div class="help_side"  id="sortlist">
    <?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['help_cat']):
        $this->_foreach['name']['iteration']++;
?>
    <div class="current">
      <h4><b></b><?php echo $this->_var['help_cat']['cat_name']; ?></h4>
      <ul>
        <?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');$this->_foreach['name1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name1']['total'] > 0):
    foreach ($_from AS $this->_var['item']):
        $this->_foreach['name1']['iteration']++;
?>
        <li  class="li1 <?php if ($this->_var['item']['title'] == $this->_var['article']['title']): ?>helpcurr<?php endif; ?>"  > <a href="help.php?id=<?php echo $this->_var['item']['article_id']; ?>" target="_self"><?php echo $this->_var['item']['short_title']; ?></a> </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
    </div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </div>
</div>
<?php endif; ?>
