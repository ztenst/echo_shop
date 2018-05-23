<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_admin_log`;");
E_C("CREATE TABLE `ecs_admin_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `log_time` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `log_info` varchar(255) NOT NULL DEFAULT '',
  `ip_address` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`log_id`),
  KEY `log_time` (`log_time`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3718 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_admin_log` values('3697','1446663718','6','编辑商店设置: ','222.182.199.85');");
E_D("replace into `ecs_admin_log` values('3698','1446663743','6','编辑商店设置: ','222.182.199.85');");
E_D("replace into `ecs_admin_log` values('3699','1446663787','6','编辑商店设置: ','222.182.199.85');");
E_D("replace into `ecs_admin_log` values('3700','1446665861','6','编辑商店设置: ','222.182.199.85');");
E_D("replace into `ecs_admin_log` values('3701','1446665871','6','编辑商店设置: ','222.182.199.85');");
E_D("replace into `ecs_admin_log` values('3702','1447181200','1','还原数据库备份: 备份时间2015-11-05 22:51:44','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('3703','1450021611','1','编辑权限管理: admin','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('3704','1450021652','1','编辑权限管理: admin','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('3705','1450445638','1','还原数据库备份: 备份时间2015-12-13 15:50:41','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('3706','1450445736','1','编辑权限管理: admin','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('3707','1450446873','1','添加友情链接: ecshop模板','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('3708','1463475856','1','编辑权限管理: webmaster','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('3709','1463476448','1','删除友情链接: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('3710','1463476451','1','删除友情链接: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('3711','1463476453','1','删除友情链接: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('3712','1463476470','1','编辑友情链接: TTSHOP','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('3713','1463535181','1','编辑商品: Yeelight床头灯','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('3714','1463535188','1','编辑商品: Yeelight床头灯','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('3715','1463535307','1','回收商品: Yeelight床头灯','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('3716','1463535412','1','批量删除商品: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('3717','1463535989','1','编辑权限管理: admin','127.0.0.1');");

require("../../inc/footer.php");
?>