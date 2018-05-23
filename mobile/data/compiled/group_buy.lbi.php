<?php if ($this->_var['hot_goods']): ?>
<style type="text/css">
.picScroll2{margin:10px auto; text-align:center;}
.picScroll2 .bd ul{width:100%;  float:left; padding-top:10px;}
.picScroll2 .bd li{width:33%; float:left; font-size:14px; text-align:center;}
.picScroll2 .bd li a{-webkit-tap-highlight-color:rgba(0, 0, 0, 0); /* 取消链接高亮 */}
.picScroll2 .bd li img{width:100px; height:100px;}
.picScroll2 .hd{display:None}
</style>
<div class="blank2"></div>
<div class="item_show_box2 box1 region" style="overflow:hidden">

    <div id="picScroll2" class="picScroll2">
        <div class="hd">
            <ul></ul>
        </div>
        <div class="bd">
            <ul>
                <?php $_from = $this->_var['group_buy_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_22101800_1463534978');$this->_foreach['hot_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['hot_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_22101800_1463534978']):
        $this->_foreach['hot_goods']['iteration']++;
?>
                <li><a href="<?php echo $this->_var['goods_0_22101800_1463534978']['url']; ?>"><img src="<?php echo $this->_var['site_url']; ?><?php echo $this->_var['goods_0_22101800_1463534978']['thumb']; ?>" /></a>
                <br/>            
                <span class="price_s"> <?php echo $this->_var['goods_0_22101800_1463534978']['last_price']; ?> </span> <br><?php echo sub_str(htmlspecialchars($this->_var['goods_0_22101800_1463534978']['goods_name']),12); ?>
                </li>
                <?php if ($this->_foreach['hot_goods']['iteration'] % 3 == 0 && $this->_foreach['hot_goods']['iteration'] != $this->_foreach['hot_goods']['total']): ?></ul><ul><?php endif; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>
    </div>

    <div class="position_a_lt">
      <div> </div>
      <a href="search.php?intro=hot">
      <p> 团购 </p>
      <p class="ico_04"> </p>
      </a> </div>

  </div>

<script type="text/javascript">
TouchSlide({
    slideCell:"#picScroll2",
    titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
    autoPage:true, //自动分页
    pnLoop:"false", // 前后按钮不循环
    //switchLoad:"_src" //切换加载，真实图片路径为"_src" 
});
</script>
<?php endif; ?>