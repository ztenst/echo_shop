<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_activity`;");
E_C("CREATE TABLE `ecs_goods_activity` (
  `act_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `act_name` varchar(255) NOT NULL,
  `act_desc` text NOT NULL,
  `act_type` tinyint(3) unsigned NOT NULL,
  `goods_id` mediumint(8) unsigned NOT NULL,
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_name` varchar(255) NOT NULL,
  `start_time` int(10) unsigned NOT NULL,
  `end_time` int(10) unsigned NOT NULL,
  `is_finished` tinyint(3) unsigned NOT NULL,
  `ext_info` text NOT NULL,
  `touch_img` varchar(50) DEFAULT '',
  PRIMARY KEY (`act_id`),
  KEY `act_name` (`act_name`,`act_type`,`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_activity` values('23','小米活塞耳机 炫彩版','','1','38','0','小米活塞耳机 炫彩版','1442131200','1568361600','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:10;s:5:\"price\";d:200;}}s:15:\"restrict_amount\";i:2000;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:0;}','');");
E_D("replace into `ecs_goods_activity` values('12','小米电视2 40英寸','','1','27','0','小米电视2 40英寸','1439798400','1472371200','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:12;s:5:\"price\";d:10;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:0;}','');");
E_D("replace into `ecs_goods_activity` values('19','小米手机-夺宝奇兵-耳机','耳机限量夺宝','0','62','0','1MORE金澈耳机','1441479840','1442372640','0','a:4:{s:11:\"start_price\";s:4:\"1.00\";s:9:\"end_price\";s:6:\"800.00\";s:9:\"max_price\";i:0;s:11:\"cost_points\";s:1:\"1\";}','');");
E_D("replace into `ecs_goods_activity` values('20','猫的秘密','','1','94','0','猫的秘密','1441526400','1505376000','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:1000;s:5:\"price\";d:10;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:0;}','');");
E_D("replace into `ecs_goods_activity` values('18','拍卖小米手机4','限时拍卖，价高者得','2','56','0','小米手机4','1441440000','1441872000','0','a:5:{s:7:\"deposit\";d:100;s:11:\"start_price\";d:1;s:9:\"end_price\";d:2000;s:9:\"amplitude\";d:10;s:6:\"no_top\";i:0;}','');");
E_D("replace into `ecs_goods_activity` values('21','萨摩小狗移动电源','','1','74','0','萨摩小狗移动电源','1441612800','1537862400','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:18;s:5:\"price\";d:10;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:0;}','');");
E_D("replace into `ecs_goods_activity` values('13','小钢炮蓝牙音箱','','1','46','0','小钢炮蓝牙音箱','1439280000','1470816000','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:11;s:5:\"price\";d:22;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:0;}','');");
E_D("replace into `ecs_goods_activity` values('14','小米活塞耳机标准版','','1','45','0','小米活塞耳机标准版','1440403200','1471334400','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:11;s:5:\"price\";d:22;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:0;}','');");
E_D("replace into `ecs_goods_activity` values('15','小米盒子增强版 1G','','1','29','0','小米盒子增强版 1G','1439107200','1503907200','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:3;s:5:\"price\";d:113;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:0;}','');");
E_D("replace into `ecs_goods_activity` values('16','米兔手机U盘升级版','','1','47','0','米兔手机U盘升级版','1439884800','1503907200','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:13;s:5:\"price\";d:444;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:0;}','');");
E_D("replace into `ecs_goods_activity` values('17','小米头戴式耳机','小米头戴式耳机疯狂大甩卖','1','30','0','小米头戴式耳机','1439193600','1503907200','0','a:4:{s:12:\"price_ladder\";a:3:{i:0;a:2:{s:6:\"amount\";i:10;s:5:\"price\";d:400;}i:1;a:2:{s:6:\"amount\";i:50;s:5:\"price\";d:300;}i:2;a:2:{s:6:\"amount\";i:150;s:5:\"price\";d:200;}}s:15:\"restrict_amount\";i:500;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:0;}','');");
E_D("replace into `ecs_goods_activity` values('22','米兔主题3D保护壳','','1','88','0','米兔主题3D保护壳','1441526400','1505030400','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:50;s:5:\"price\";d:2;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:0;}','');");

require("../../inc/footer.php");
?>