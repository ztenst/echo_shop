<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="http://test.dede168.com/" />
<meta name="Generator" content="HongYuJD v7_2" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link type="text/css" rel="stylesheet" href="themes/68ecshopcom_360buy/css/help.css" />
<script src="themes/68ecshopcom_360buy/js/jquery-1.9.1.min.js" data-fixed="true"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.json.js,transport.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body>
<div id="site-nav"> 
  <?php echo $this->fetch('library/page_header.lbi'); ?>
  <div class="blank"></div>
  <div class="w main"> 
    <div class="m breadcrumb"><strong><a  href="help.php?id=9" >帮助中心</a> </strong> &gt; <?php echo htmlspecialchars($this->_var['article']['title']); ?> </div>
    <?php echo $this->fetch('library/left_help.lbi'); ?> 
    <div class="right" > 
      <h3 class="help_tit"><strong><?php echo htmlspecialchars($this->_var['article']['title']); ?></strong></h3>
      <div class="help_box"> 
        <?php if ($this->_var['article']['content']): ?> 
        <?php echo $this->_var['article']['content']; ?> 
        <?php endif; ?> 
      </div>
      <a class="h-1px" id="help160" name="help160"></a> 
    </div>
    <div class="clr"></div>
  </div>
  <script type="text/javascript">
    jQuery("#sortlist h4").bind("click",function() {
        var element = $(this).parent();
        if (element.hasClass("current")) {
            element.removeClass("current");
        } else {
            element.addClass("current");
        }
    })
</script> 
<div class="blank"></div>
  <?php echo $this->fetch('library/help.lbi'); ?> 
  <?php echo $this->fetch('library/page_footer.lbi'); ?> 
</div>
</body>
</html>
