<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_user_address`;");
E_C("CREATE TABLE `ecs_user_address` (
  `address_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `address_name` varchar(50) NOT NULL DEFAULT '',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `consignee` varchar(60) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `country` smallint(5) NOT NULL DEFAULT '0',
  `province` smallint(5) NOT NULL DEFAULT '0',
  `city` smallint(5) NOT NULL DEFAULT '0',
  `district` smallint(5) NOT NULL DEFAULT '0',
  `address` varchar(120) NOT NULL DEFAULT '',
  `zipcode` varchar(60) NOT NULL DEFAULT '',
  `tel` varchar(60) NOT NULL DEFAULT '',
  `mobile` varchar(60) NOT NULL DEFAULT '',
  `sign_building` varchar(120) NOT NULL DEFAULT '',
  `best_time` varchar(120) NOT NULL DEFAULT '',
  PRIMARY KEY (`address_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_user_address` values('1','','1','刘先生','ecshop@ecshop.com','1','2','52','502','海兴大厦','','010-25851234','13986765412','','');");
E_D("replace into `ecs_user_address` values('2','','3','叶先生','text@ecshop.com','1','2','52','510','通州区旗舰凯旋小区','','13588104710','','','');");
E_D("replace into `ecs_user_address` values('3','','6','q111','admin123@qq.com','1','4','55','540','22','','333','','','');");
E_D("replace into `ecs_user_address` values('4','','8','111','444@qq.com','1','7','102','907','22','','333','','','');");
E_D("replace into `ecs_user_address` values('5','','6','11','222@qq.com','1','6','81','754','333','44','55','','','');");
E_D("replace into `ecs_user_address` values('6','','16','dsdad','497110669@qq.com','1','3','36','400','dsdadsadad','3213','13444442222','13444442222','','');");
E_D("replace into `ecs_user_address` values('7','','2','小明','vip@ecshop.com','1','3','38','417','上海市普陀区金沙江路','','18655564452','','','');");

require("../../inc/footer.php");
?>