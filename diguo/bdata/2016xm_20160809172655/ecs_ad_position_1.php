<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ad_position`;");
E_C("CREATE TABLE `ecs_ad_position` (
  `position_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `position_name` varchar(60) NOT NULL DEFAULT '',
  `ad_width` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ad_height` smallint(5) unsigned NOT NULL DEFAULT '0',
  `position_desc` varchar(255) NOT NULL DEFAULT '',
  `position_style` text NOT NULL,
  PRIMARY KEY (`position_id`)
) ENGINE=MyISAM AUTO_INCREMENT=265 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_ad_position` values('3','首页轮播下广告','316','170','','<ul class=\"home-promo-list clearfix\">\r\n{foreach from=\$ads item=ad name=ad}\r\n<li class=\"<!-- {if \$smarty.foreach.ad.first} -->first<!-- {/if} -->\">{\$ad}</li>\r\n{/foreach}\r\n</ul>\r\n');");
E_D("replace into `ecs_ad_position` values('4','新品上架左边广告','620','310','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('5','大家都喜欢左边广告','620','310','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('8','分类下商品左侧广告大','234','614','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('9','分类下商品左侧广告小','234','300','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('1','首页倒计时广告位','580','250','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}');");
E_D("replace into `ecs_ad_position` values('2','分类下商品左广告','340','400','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}');");
E_D("replace into `ecs_ad_position` values('11','团购页顶部广告','1226','460','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}');");
E_D("replace into `ecs_ad_position` values('255','手机端首页Banner广告位','360','168','','<ul>\r\n{foreach from=\$ads item=ad}\r\n  <li>{\$ad}</li>\r\n{/foreach}\r\n</ul>\r\n');");
E_D("replace into `ecs_ad_position` values('256','手机端首页主题精选广告位','360','168','','{foreach from=\$ads item=ad name=ads}{if \$smarty.foreach.ads.iteration % 2 == 0}<li class=\"fl\">{else}<li class=\"fr\">{/if}{\$ad}</li>{/foreach}');");
E_D("replace into `ecs_ad_position` values('257','手机端首页限时促销广告位1','360','168','','{foreach from=\$ads item=ad name=ads}{\$ad}{/foreach}');");
E_D("replace into `ecs_ad_position` values('258','手机端首页限时促销广告位2','360','168','','{foreach from=\$ads item=ad name=ads}{\$ad}{/foreach}');");
E_D("replace into `ecs_ad_position` values('259','手机端首页热门活动广告位1','360','168','','{foreach from=\$ads item=ad name=ads}{\$ad}{/foreach}');");
E_D("replace into `ecs_ad_position` values('260','手机端首页热门活动广告位2','360','168','','{foreach from=\$ads item=ad name=ads}{\$ad}{/foreach}');");
E_D("replace into `ecs_ad_position` values('261','手机端首页精品推荐广告位1','360','168','','{foreach from=\$ads item=ad name=ads}{\$ad}{/foreach}');");
E_D("replace into `ecs_ad_position` values('262','手机端首页精品推荐广告位2','360','168','','{foreach from=\$ads item=ad name=ads}{\$ad}{/foreach}');");
E_D("replace into `ecs_ad_position` values('263','手机端首页品牌街广告位1','360','168','','{foreach from=\$ads item=ad name=ads}{\$ad}{/foreach}');");
E_D("replace into `ecs_ad_position` values('264','手机端首页品牌街广告位2','360','168','','{foreach from=\$ads item=ad name=ads}{\$ad}{/foreach}');");

require("../../inc/footer.php");
?>