<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_action`;");
E_C("CREATE TABLE `ecs_order_action` (
  `action_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `action_user` varchar(30) NOT NULL DEFAULT '',
  `order_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `shipping_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pay_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `action_place` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `action_note` varchar(255) NOT NULL DEFAULT '',
  `log_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`action_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_action` values('1','2','admin','1','0','2','0','1','1437090070');");
E_D("replace into `ecs_order_action` values('2','2','admin','1','3','2','0','','1437090073');");
E_D("replace into `ecs_order_action` values('3','2','admin','5','5','2','0','','1437090077');");
E_D("replace into `ecs_order_action` values('4','2','admin','1','1','2','1','','1437090084');");
E_D("replace into `ecs_order_action` values('5','2','admin','5','2','2','0','1','1437090091');");
E_D("replace into `ecs_order_action` values('6','3','admin','1','0','2','0','1','1437093859');");
E_D("replace into `ecs_order_action` values('7','3','admin','1','3','2','0','','1437093862');");
E_D("replace into `ecs_order_action` values('8','3','admin','5','5','2','0','','1437093867');");
E_D("replace into `ecs_order_action` values('9','3','admin','1','1','2','1','','1437093874');");
E_D("replace into `ecs_order_action` values('10','3','admin','5','2','2','0','1','1437093881');");
E_D("replace into `ecs_order_action` values('11','4','admin','1','0','2','0','1','1437093951');");
E_D("replace into `ecs_order_action` values('12','4','admin','1','3','2','0','','1437093954');");
E_D("replace into `ecs_order_action` values('13','4','admin','5','5','2','0','','1437093959');");
E_D("replace into `ecs_order_action` values('14','4','admin','1','1','2','1','','1437093965');");
E_D("replace into `ecs_order_action` values('15','4','admin','5','2','2','0','1','1437093971');");
E_D("replace into `ecs_order_action` values('16','45','admin','1','0','0','0','','1441822340');");
E_D("replace into `ecs_order_action` values('17','45','admin','1','0','2','0',' ','1441823939');");
E_D("replace into `ecs_order_action` values('18','45','admin','1','3','2','0','','1441823943');");
E_D("replace into `ecs_order_action` values('19','45','admin','5','5','2','0','','1441823948');");
E_D("replace into `ecs_order_action` values('20','45','admin','1','1','2','1','','1441823955');");
E_D("replace into `ecs_order_action` values('21','44','admin','1','0','0','0','','1441833359');");
E_D("replace into `ecs_order_action` values('22','44','admin','1','0','2','0',' ','1441833367');");
E_D("replace into `ecs_order_action` values('23','44','admin','1','3','2','0','','1441833371');");
E_D("replace into `ecs_order_action` values('24','44','admin','5','5','2','0','','1441833378');");
E_D("replace into `ecs_order_action` values('25','44','admin','1','1','2','1','','1441833387');");
E_D("replace into `ecs_order_action` values('26','43','admin','1','0','0','0','','1441833406');");
E_D("replace into `ecs_order_action` values('27','43','admin','1','0','2','0',' ','1441833411');");
E_D("replace into `ecs_order_action` values('28','43','admin','1','3','2','0','','1441833414');");
E_D("replace into `ecs_order_action` values('29','43','admin','5','5','2','0','','1441833420');");
E_D("replace into `ecs_order_action` values('30','43','admin','1','1','2','1','','1441833428');");
E_D("replace into `ecs_order_action` values('31','42','admin','1','0','0','0','','1441906058');");
E_D("replace into `ecs_order_action` values('32','42','admin','1','3','0','0','','1441906061');");
E_D("replace into `ecs_order_action` values('33','42','admin','5','5','0','0','','1441906067');");
E_D("replace into `ecs_order_action` values('34','42','admin','1','1','0','1','','1441906074');");
E_D("replace into `ecs_order_action` values('35','41','admin','1','0','0','0','','1441906118');");
E_D("replace into `ecs_order_action` values('36','41','admin','1','0','2','0',' ','1441906124');");
E_D("replace into `ecs_order_action` values('37','41','admin','1','3','2','0','','1441906131');");
E_D("replace into `ecs_order_action` values('38','41','admin','1','3','2','0','[售后]  ','1441906181');");
E_D("replace into `ecs_order_action` values('39','40','admin','1','0','0','0','','1441906209');");
E_D("replace into `ecs_order_action` values('40','40','admin','1','0','2','0',' ','1441906214');");
E_D("replace into `ecs_order_action` values('41','40','admin','1','3','2','0','','1441906217');");
E_D("replace into `ecs_order_action` values('42','40','admin','5','5','2','0','','1441906222');");
E_D("replace into `ecs_order_action` values('43','40','admin','1','1','2','1','sasdsadsadssasd','1441906236');");
E_D("replace into `ecs_order_action` values('44','39','admin','1','0','0','0','','1441906303');");
E_D("replace into `ecs_order_action` values('45','39','admin','1','0','2','0','  ','1441906307');");
E_D("replace into `ecs_order_action` values('46','39','admin','1','3','2','0','','1441906311');");
E_D("replace into `ecs_order_action` values('47','39','admin','5','5','2','0','d','1441906316');");
E_D("replace into `ecs_order_action` values('48','39','admin','1','1','2','1','fwfegr','1441906327');");

require("../../inc/footer.php");
?>