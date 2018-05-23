<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link href="themes/xiaomi/category.css" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,global.js,easydialog.min.js,compare.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?> 
<?php echo $this->smarty_insert_scripts(array('files'=>'xiaomi_category.js')); ?>
<?php echo $this->fetch('library/ur_here.lbi'); ?>
<?php echo $this->fetch('library/filter_attr.lbi'); ?>
<div class="content">
	<div class="container">
	<?php echo $this->fetch('library/goods_list.lbi'); ?>
    <?php echo $this->fetch('library/pages.lbi'); ?>
    </div>
    
<?php echo $this->fetch('library/recommend_hot.lbi'); ?>

</div>
<div class="add_ok" id="cart_show">
    <div class="tip">
        <i class="iconfont"> </i>商品已成功加入购物车
    </div>
    <div class="go">
        <a href="javascript:easyDialog.close();" class="back">&lt;&lt;继续购物</a>
        <a href="flow.php" class="btn">去结算</a>
    </div>
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>