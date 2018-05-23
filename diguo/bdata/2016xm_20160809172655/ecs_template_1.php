<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_template`;");
E_C("CREATE TABLE `ecs_template` (
  `filename` varchar(30) NOT NULL DEFAULT '',
  `region` varchar(40) NOT NULL DEFAULT '',
  `library` varchar(40) NOT NULL DEFAULT '',
  `sort_order` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `number` tinyint(1) unsigned NOT NULL DEFAULT '5',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `theme` varchar(60) NOT NULL DEFAULT '',
  `remarks` varchar(30) NOT NULL DEFAULT '',
  KEY `filename` (`filename`,`region`),
  KEY `theme` (`theme`),
  KEY `remarks` (`remarks`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_template` values('category','','/library/recommend_promotion.lbi','0','0','3','0','xiaomi','');");
E_D("replace into `ecs_template` values('index','首页轮播下广告','/library/ad_position.lbi','0','3','3','4','xiaomi','');");
E_D("replace into `ecs_template` values('index','分类下商品区域','/library/cat_goods.lbi','4','118','8','1','xiaomi','');");
E_D("replace into `ecs_template` values('index','分类下商品区域','/library/cat_goods.lbi','3','94','8','1','xiaomi','');");
E_D("replace into `ecs_template` values('index','分类下商品区域','/library/cat_goods.lbi','2','101','8','1','xiaomi','');");
E_D("replace into `ecs_template` values('index','分类下商品区域','/library/cat_goods.lbi','1','80','8','1','xiaomi','');");
E_D("replace into `ecs_template` values('index','','/library/brands.lbi','0','0','3','0','xiaomi','');");
E_D("replace into `ecs_template` values('index','','/library/auction.lbi','0','0','3','0','xiaomi','');");
E_D("replace into `ecs_template` values('index','','/library/group_buy.lbi','0','0','3','0','xiaomi','');");
E_D("replace into `ecs_template` values('index','','/library/recommend_promotion.lbi','0','0','4','0','xiaomi','');");
E_D("replace into `ecs_template` values('index','为您推荐（调用热卖）','/library/recommend_hot.lbi','0','0','10','0','xiaomi','');");
E_D("replace into `ecs_template` values('index','','/library/recommend_new.lbi','0','0','8','0','xiaomi','');");
E_D("replace into `ecs_template` values('index','小米明星单品（调用精品）','/library/recommend_best.lbi','0','0','10','0','xiaomi','');");
E_D("replace into `ecs_template` values('category','','/library/brands.lbi','0','0','3','0','xiaomi','');");
E_D("replace into `ecs_template` values('category','','/library/recommend_best.lbi','0','0','3','0','xiaomi','');");
E_D("replace into `ecs_template` values('category','为您推荐（调用热卖）','/library/recommend_hot.lbi','0','0','15','0','xiaomi','');");
E_D("replace into `ecs_template` values('group_buy_list','团购页顶部广告','/library/ad_position.lbi','0','11','1','4','xiaomi','');");

require("../../inc/footer.php");
?>