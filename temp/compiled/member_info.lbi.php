<?php if ($this->_var['user_info']): ?>
<span class="user">
	<a class="user-name" target="_blank" href="user.php"><span class="name"><?php echo $this->_var['user_info']['username']; ?></span><i class="iconfont"></i></a>
    <ul class="user-menu">
        <li><a target="_blank" href="user.php">个人中心</a></li>
        <li><a target="_blank" href="user.php?act=collection_list"><?php echo $this->_var['lang']['label_collection']; ?></a></li>
        <li><a target="_blank" href="user.php?act=comment_list">我的评论</a></li>
        <li><a target="_blank" href="user.php?act=track_packages">跟踪包裹</a></li>
        <li><a href="user.php?act=logout">退出登录</a></li>
    </ul>
</span> 
<span class="sep">|</span> <a href="user.php?act=order_list" class="link">我的订单</a> 

<?php else: ?>
<a class="link" href="user.php" rel="nofollow">登录</a>
<span class="sep">|</span>
<a class="link" href="user.php?act=register" rel="nofollow">注册</a>
<?php endif; ?>        
            
