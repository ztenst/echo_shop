<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_cart`;");
E_C("CREATE TABLE `ecs_cart` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `session_id` char(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_sn` varchar(60) NOT NULL DEFAULT '',
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `group_id` varchar(255) NOT NULL,
  `goods_name` varchar(120) NOT NULL DEFAULT '',
  `market_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `goods_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `goods_number` smallint(5) unsigned NOT NULL DEFAULT '0',
  `goods_attr` text NOT NULL,
  `is_real` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `extension_code` varchar(30) NOT NULL DEFAULT '',
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `rec_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_gift` smallint(5) unsigned NOT NULL DEFAULT '0',
  `is_shipping` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `can_handsel` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `goods_attr_id` varchar(255) NOT NULL DEFAULT '',
  `touch_sale` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `touch_fencheng` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`rec_id`),
  KEY `session_id` (`session_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_cart` values('1','0','ddba0993f92129528f0404a8747ea6d9','35','ECS000035','0','','小米空气净化器','1078.80','899.00','1','','1','','0','0','0','0','0','','0.00','0.00');");
E_D("replace into `ecs_cart` values('2','0','ddba0993f92129528f0404a8747ea6d9','56','ECS000056','0','','小米手机4','1798.80','1499.00','1','','1','','0','0','0','0','0','','0.00','0.00');");
E_D("replace into `ecs_cart` values('3','0','ddba0993f92129528f0404a8747ea6d9','80','ECS000080','0','','小米NOTE','2638.79','2199.00','1','','1','','0','0','0','0','0','','0.00','0.00');");
E_D("replace into `ecs_cart` values('4','0','ddba0993f92129528f0404a8747ea6d9','78','ECS000078','0','','红米Note2','958.80','799.00','1','','1','','0','0','0','0','0','','0.00','0.00');");
E_D("replace into `ecs_cart` values('5','0','ddba0993f92129528f0404a8747ea6d9','46','ECS000046','0','','小钢炮蓝牙音箱','154.80','129.00','1','','1','','0','0','0','0','0','','0.00','0.00');");
E_D("replace into `ecs_cart` values('6','0','ddba0993f92129528f0404a8747ea6d9','34','ECS000034','0','','小蚁运动相机','478.00','399.00','1','','1','','0','0','0','0','0','','0.00','0.00');");
E_D("replace into `ecs_cart` values('7','0','de3c60181122616aa87a15bfb8d30a67','28','ECS000028','0','','小米平板 16G','1558.00','1299.00','1','尺寸:45 \n颜色:灰 \n','1','','0','0','0','0','0','35,36','0.00','0.00');");
E_D("replace into `ecs_cart` values('8','0','de3c60181122616aa87a15bfb8d30a67','38','ECS000038','0','','小米活塞耳机 炫彩版','156.80','149.00','1','颜色:丁香紫[10] \n线长:50cm[100] \n','1','','0','0','0','0','0','89,92','0.00','0.00');");
E_D("replace into `ecs_cart` values('11','0','b12e852b82580944acd7b302cbc40f86','35','ECS000035','0','','小米空气净化器','1078.80','899.00','1','','1','','0','0','0','0','0','','0.00','0.00');");

require("../../inc/footer.php");
?>