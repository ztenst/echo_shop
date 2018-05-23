<div class="site-footer">
	<div class="container">
    	<div class="footer-service">
        	<ul class="list-service clearfix">
            	<li>
                	<a rel="nofollow" href="javascript:void(0)">
                    	<i class="iconfont"></i>1小时快修服务
                    </a>
                </li>
            	<li>
                	<a rel="nofollow" href="javascript:void(0)">
                    	<i class="iconfont"></i>7天无理由退货
                    </a>
                </li>
            	<li>
                	<a rel="nofollow" href="javascript:void(0)">
                    	<i class="iconfont"></i>15天免费换货
                    </a>
                </li>
            	<li>
                	<a rel="nofollow" href="javascript:void(0)">
                    	<i class="iconfont"></i>满150元包邮
                    </a>
                </li>
            	<li>
                	<a rel="nofollow" href="javascript:void(0)">
                    	<i class="iconfont"></i>520余家售后网点
                    </a>
                </li>
            </ul>
        </div>
        <div class="footer-links clearfix">
            <?php echo $this->fetch('library/help.lbi'); ?>
            <div class="col-contact">
                <p class="phone"><?php echo $this->_var['service_phone']; ?></p>
                <p>周一至周日 8:00-18:00<br>（仅收市话费）</p>
                <a rel="nofollow" class="btn btn-line-primary btn-small">
                    <i class="iconfont"></i> 24小时在线客服
                </a>
            </div>
        </div>
    </div>
</div>
<div class="site-info">
	<div class="container">
    	<div class="logo ir"><?php echo $this->_var['shop_name']; ?></div>
        <div class="info-text">
        	<p class="sites">
            	<?php $_from = $this->_var['txt_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');$this->_foreach['link'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['link']['total'] > 0):
    foreach ($_from AS $this->_var['link']):
        $this->_foreach['link']['iteration']++;
?>
                <a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><?php echo $this->_var['link']['name']; ?></a>
                <?php if (! ($this->_foreach['link']['iteration'] == $this->_foreach['link']['total'])): ?>
                <span class="sep">|</span>
                 <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </p>
            <p>
            	<?php echo $this->_var['icp_number']; ?>    
            </p>
        </div>
        <div class="info-links">
        	<a href="#"><img src="http://s1.mi.com/zt/12052601/cnnicVerifyseal.png" alt="可信网站"></a>
        	<a href="#"><img src="http://s1.mi.com/zt/12052601/szfwVerifyseal.gif" alt="诚信网站"></a>
        	<a href="#"><img src="http://s1.mi.com/zt/12052601/save.jpg" alt="网上交易保障中心"></a>
        </div>
    </div>
</div>
