<link href="/themes/xiaomi/lrtk.css" rel="stylesheet" type="text/css" />
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'transport_jquery.js,utils.js,jquery.SuperSlide.js,xiaomi_common.js')); ?>
<script type="text/javascript">
    
    <!--
    function checkSearchForm()
    {
        if(document.getElementById('keyword').value)
        {
            return true;
        }
        else
        {
            alert("<?php echo $this->_var['lang']['no_keywords']; ?>");
            return false;
        }
    }
    -->
    
    </script>
<div class="site-topbar">
	<div class="container">
    	<?php if ($this->_var['navigator_list']['top']): ?>
    	<div class="topbar-nav">
        	<?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?>
            <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?> target="_blank" <?php endif; ?> class="snc-link snc-order"><?php echo $this->_var['nav']['name']; ?></a>
            <?php if (! ($this->_foreach['nav_top_list']['iteration'] == $this->_foreach['nav_top_list']['total'])): ?><span class="sep">|</span><?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>
        <?php endif; ?>
        <div class="topbar-cart" id="ECS_CARTINFO">
            <?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
        </div>
        <div class="topbar-info J_userInfo" id="ECS_MEMBERZONE">
        	<?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
        </div>
    </div>
</div>
<div class="site-header" style="clear:both;">
	<div class="container">
    	<div class="header-logo">
        	<a href="index.php" title="<?php echo $this->_var['shop_name']; ?>"><img src="themes/xiaomi/images/logo.gif" /></a>
        </div>
        <div class="header-nav">
        	<ul class="nav-list">
            	<li class="nav-category">
                	<a class="btn-category-list" href="catalog.php" <?php if ($this->_var['script_name'] == 'index'): ?>style="display:none;"<?php endif; ?>>全部商品分类</a>
                	<div class="site-category <?php if ($this->_var['script_name'] != 'index'): ?>category-hidden<?php endif; ?>">
                    	<ul class="site-category-list clearfix" id="site-category-list">
                            <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['foo']['iteration']++;
?>
                        	<li class="category-item">
                            	<a class="title" href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?><i class="iconfont"></i></a>
                                <div class="children clearfix">
                                	<?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['no1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no1']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['no1']['iteration']++;
?>
                                    <?php if ($this->_foreach['no1']['iteration'] % 6 == 1): ?>
                                	<ul class="children-list">
                                    <?php endif; ?>
                                    	<li>
                                        	<a href="<?php echo $this->_var['child']['url']; ?>" class="link">
                                            	<img class="thumb" src="data/catthumb/<?php echo $this->_var['child']['thumb']; ?>" width="40" height="40">
                                            	<span><?php echo htmlspecialchars($this->_var['child']['name']); ?></span>
                                            </a>
                                        </li>
                                    <?php if ($this->_foreach['no1']['iteration'] % 6 == 0 || ($this->_foreach['no1']['iteration'] == $this->_foreach['no1']['total'])): ?>
                                    </ul>
                                    <?php endif; ?>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </div>
                            </li>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </ul>
                    </div>
                </li>
                <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
            	<li class="nav-item">
                	<a class="link" href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank"<?php endif; ?> <?php if ($this->_var['nav']['active'] == 1): ?> class="current"<?php endif; ?>><span><?php echo $this->_var['nav']['name']; ?></span></a>
                    <?php if ($this->_var['nav']['cat_list']): ?>
                    <div class='item-children'>
                    	<div class="container">
                        	<ul class="children-list clearfix">
                            	<?php $_from = $this->_var['nav']['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['cat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['cat']['iteration']++;
?>
                                    <?php if ($this->_foreach['cat']['iteration'] < 7): ?>
                                    <?php $_from = $this->_var['cat']['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'good');$this->_foreach['good'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['good']['total'] > 0):
    foreach ($_from AS $this->_var['good']):
        $this->_foreach['good']['iteration']++;
?>
                                    <?php if ($this->_foreach['good']['iteration'] == 1): ?>
                                    <li class="first">
                                        <div class="figure figure-thumb"><a href="<?php echo $this->_var['good']['url']; ?>"><img src="<?php echo htmlspecialchars($this->_var['good']['thumb']); ?>"  alt="<?php echo htmlspecialchars($this->_var['good']['name']); ?>"></a></div>
                                        <div class="title"><a href="<?php echo $this->_var['good']['url']; ?>"><?php echo htmlspecialchars($this->_var['good']['name']); ?></a></div>
                                        <p class="price"><?php echo $this->_var['good']['shop_price']; ?>元</p>
                                    </li>
                                    <?php endif; ?>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    <?php endif; ?>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </ul>
                    	</div>
                    </div>
                    <?php endif; ?>
                </li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
        </div>
        <div class="header-search">
        	<form action="search.php" method="get" id="searchForm" name="searchForm" onSubmit="return checkSearchForm()" class="search-form clearfix">
            	<label class="hide">站内搜索</label>
        		<input class="search-text" type="text" name="keywords" id="keyword" value="<?php echo htmlspecialchars($this->_var['search_keywords']); ?>" autocomplete="off">
        		<input type="hidden" value="k1" name="dataBi">
        		<button type="submit" class="search-btn iconfont"></button>
                <?php if ($this->_var['searchkeywords']): ?>
                <div class="hot-words" <?php if ($this->_var['search_keywords']): ?>style="display:none"<?php endif; ?>>
                	<?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?> <a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>" target="_blank"><?php echo $this->_var['val']; ?></a> <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </div>
                <?php endif; ?>
      		</form>
        </div>
    </div>
	<div id="J_navMenu" class="header-nav-menu" style="display: none;">
    	<div class="container"></div>
    </div>
</div>

