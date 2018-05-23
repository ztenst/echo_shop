
<div class="blank2"></div>
<section class="item_show_box1 box1 region">
    <header>
        <span>
            <?php echo htmlspecialchars($this->_var['goods_cat']['name']); ?>
        </span>
        <a href="<?php echo $this->_var['goods_cat']['url']; ?>" class="ico_04 more">
        </a>
    </header>
    <div class="flex flex-f-row">
        <?php $_from = $this->_var['cat_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_23783500_1463534978');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_23783500_1463534978']):
        $this->_foreach['goods']['iteration']++;
?>
        <div class="goodsItem flex_in">
            <a href="<?php echo $this->_var['goods_0_23783500_1463534978']['url']; ?>">
                <img src="<?php echo $this->_var['site_url']; ?><?php echo $this->_var['goods_0_23783500_1463534978']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_23783500_1463534978']['name']); ?>" />
            </a>
            <div style="text-align:center">
            <?php if ($this->_var['goods_0_23783500_1463534978']['promote_price'] != ""): ?> 
            <span class="price_s"> <?php echo $this->_var['goods_0_23783500_1463534978']['promote_price']; ?> </span> 
            <?php else: ?> 
            <span class="price_s"> <?php echo $this->_var['goods_0_23783500_1463534978']['shop_price']; ?> </span> 
            <?php endif; ?>
            <br><?php echo sub_str(htmlspecialchars($this->_var['goods_0_23783500_1463534978']['name']),12); ?>
            </div>
        </div>
         <?php if ($this->_foreach['goods']['iteration'] % 3 == 0): ?></div><div class="flex flex-f-row"><?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
    <div class="item_tags clearfix">
        <?php if ($this->_var['goods_cat']['cat_id']): ?>
        <?php $_from = $this->_var['goods_cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'rec_cat');$this->_foreach['f'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['f']['total'] > 0):
    foreach ($_from AS $this->_var['rec_cat']):
        $this->_foreach['f']['iteration']++;
?>
        <A href="category.php?id=<?php echo $this->_var['rec_cat']['id']; ?>">
            <?php echo htmlspecialchars($this->_var['rec_cat']['name']); ?>
        </A>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endif; ?>
    </div>
</section>
