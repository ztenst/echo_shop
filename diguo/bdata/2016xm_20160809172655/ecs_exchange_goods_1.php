<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_exchange_goods`;");
E_C("CREATE TABLE `ecs_exchange_goods` (
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `exchange_integral` int(10) unsigned NOT NULL DEFAULT '0',
  `is_exchange` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_hot` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`goods_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_exchange_goods` values('63','33','1','0');");
E_D("replace into `ecs_exchange_goods` values('45','122','1','0');");
E_D("replace into `ecs_exchange_goods` values('33','321','1','0');");
E_D("replace into `ecs_exchange_goods` values('43','2221','1','0');");
E_D("replace into `ecs_exchange_goods` values('38','123','1','0');");
E_D("replace into `ecs_exchange_goods` values('55','223','1','1');");
E_D("replace into `ecs_exchange_goods` values('44','120','1','0');");
E_D("replace into `ecs_exchange_goods` values('64','44','1','0');");
E_D("replace into `ecs_exchange_goods` values('83','342','1','0');");
E_D("replace into `ecs_exchange_goods` values('35','43','1','0');");
E_D("replace into `ecs_exchange_goods` values('40','21','1','0');");
E_D("replace into `ecs_exchange_goods` values('69','12','1','0');");
E_D("replace into `ecs_exchange_goods` values('93','2','1','0');");
E_D("replace into `ecs_exchange_goods` values('56','1234','1','0');");
E_D("replace into `ecs_exchange_goods` values('39','27','1','0');");
E_D("replace into `ecs_exchange_goods` values('53','3421','1','0');");

require("../../inc/footer.php");
?>