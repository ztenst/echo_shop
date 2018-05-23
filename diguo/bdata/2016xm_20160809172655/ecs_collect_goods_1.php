<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_collect_goods`;");
E_C("CREATE TABLE `ecs_collect_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `add_time` int(11) unsigned NOT NULL DEFAULT '0',
  `is_attention` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rec_id`),
  KEY `user_id` (`user_id`),
  KEY `goods_id` (`goods_id`),
  KEY `is_attention` (`is_attention`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_collect_goods` values('6','16','39','1440975180','1');");
E_D("replace into `ecs_collect_goods` values('4','16','32','1440955562','1');");
E_D("replace into `ecs_collect_goods` values('5','16','58','1440974744','1');");
E_D("replace into `ecs_collect_goods` values('7','16','56','1440977617','0');");
E_D("replace into `ecs_collect_goods` values('8','2','27','1441748113','1');");

require("../../inc/footer.php");
?>