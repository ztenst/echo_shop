<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_group_goods`;");
E_C("CREATE TABLE `ecs_group_goods` (
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `admin_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `group_id` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '配件分组',
  PRIMARY KEY (`parent_id`,`goods_id`,`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_group_goods` values('38','46','129.00','1','1');");
E_D("replace into `ecs_group_goods` values('38','45','89.00','1','1');");
E_D("replace into `ecs_group_goods` values('38','30','499.00','1','1');");
E_D("replace into `ecs_group_goods` values('38','47','49.90','1','1');");
E_D("replace into `ecs_group_goods` values('27','75','15.90','1','1');");
E_D("replace into `ecs_group_goods` values('27','32','120.00','1','2');");
E_D("replace into `ecs_group_goods` values('27','67','50.00','1','2');");
E_D("replace into `ecs_group_goods` values('27','35','799.00','1','2');");
E_D("replace into `ecs_group_goods` values('27','73','200.00','1','1');");
E_D("replace into `ecs_group_goods` values('27','34','299.00','1','2');");
E_D("replace into `ecs_group_goods` values('27','31','60.00','1','1');");
E_D("replace into `ecs_group_goods` values('27','44','40.00','1','1');");
E_D("replace into `ecs_group_goods` values('27','33','119.00','1','3');");
E_D("replace into `ecs_group_goods` values('27','36','129.00','1','3');");
E_D("replace into `ecs_group_goods` values('27','37','49.00','1','3');");

require("../../inc/footer.php");
?>