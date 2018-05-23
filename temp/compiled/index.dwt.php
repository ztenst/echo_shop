<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge">

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link href="themes/xiaomi/index.css" rel="stylesheet" type="text/css" />
<link href="themes/xiaomi/lrtk.css" rel="stylesheet" type="text/css" />

<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js,jquery.js,popwin.js')); ?>
</head>
<body>

<?php echo $this->fetch('library/page_header.lbi'); ?> 
<?php echo $this->smarty_insert_scripts(array('files'=>'xiaomi_index.js')); ?>

<div class="home-hero-container container">
	<div class="home-hero">
    	<div class="home-hero-slider">
			
			<?php echo $this->fetch('library/index_ad.lbi'); ?> 
			
        </div>    
        
        <div class="home-hero-sub row">
            <div class="span4">
               <?php echo $this->fetch('library/channel_list.lbi'); ?>
            </div>
            <div class="span16">
            
<?php $this->assign('ads_id','3'); ?><?php $this->assign('ads_num','3'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

            </div>
        </div>
        
    </div>
    
    <div class="home-star-goods xm-carousel-container">
    	
<?php echo $this->fetch('library/recommend_best.lbi'); ?>

    </div>
</div>


<div class="page-main home-main">
	<div class="container">
	 
<?php $this->assign('cat_goods',$this->_var['cat_goods_80']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_80']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_101']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_101']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_94']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_94']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_118']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_118']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>


      <div class="home-star-goods recommend-for-you">
      
<?php echo $this->fetch('library/recommend_hot.lbi'); ?>

      </div>
      
      <div id="hot-comment" class="home-review-box xm-plain-box J_itemBox J_reviewBox is-visible">
		  <?php echo $this->fetch('library/recommend_hot_comment.lbi'); ?> 
      </div>
      
      <div id="video" class="home-video-box xm-plain-box J_itemBox J_videoBox is-visible">
		  <?php echo $this->fetch('library/recommend_video.lbi'); ?> 
      </div>
      
    </div>
</div>

<div id="J_modalVideo" class="modal modal-video fade modal-hide">
	<div class="modal-hd">
    	<h3 class="title"></h3>
        <a class="close"><i class="iconfont"></i></a>
    </div>
    <div class="modal-bd">
    	<iframe width="880" height="536" src="" frameborder="0" allowfullscreen></iframe>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){

	$("a.moquu_wmaps").on('click', function(){
		popWin.showWin("800", "475", "TTshop", "http://www.oeob.net");
	});
	
});
</script>

<?php echo $this->fetch('library/page_footer.lbi'); ?> 
</body>
</html>
