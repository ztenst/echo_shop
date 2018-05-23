<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_feedback`;");
E_C("CREATE TABLE `ecs_feedback` (
  `msg_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_name` varchar(60) NOT NULL DEFAULT '',
  `user_email` varchar(60) NOT NULL DEFAULT '',
  `msg_title` varchar(200) NOT NULL DEFAULT '',
  `msg_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `msg_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `msg_content` text NOT NULL,
  `msg_time` int(10) unsigned NOT NULL DEFAULT '0',
  `message_img` varchar(255) NOT NULL DEFAULT '0',
  `order_id` int(11) unsigned NOT NULL DEFAULT '0',
  `msg_area` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`msg_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_feedback` values('1','0','1','ecshop','ecshop@ecshop.com','三星SGH-F258什么时候到','4','0','三星SGH-F258什么时候有货','1242107197','','0','0');");
E_D("replace into `ecs_feedback` values('2','0','16','tyq','kk1346@qq.com','囧囧的撒','4','0','的方法','1440544030','','0','0');");
E_D("replace into `ecs_feedback` values('4','2','1','admin','qqw.aaa.33@33.cc','reply','0','0','防感染人','1440547098','0','0','0');");
E_D("replace into `ecs_feedback` values('6','0','16','tyq','kk1346@qq.com','格外的的','0','0','仍然高热高热个人各个，板块的巴萨就看的吧，的三倍海南。较大囧囧的。囧囧掉手机哦，暖暖氛围浓能给您。寂寞ID睡觉阿迪偶奇偶，的窘迫奇偶街，阿叫哦我我和和和和和和和和和和好好好好好好会会会会会会会会会会好好好好好号号号号号化化化化化化iwoijgiog66','1440547417','16_20150826ruuhvo.png','0','0');");
E_D("replace into `ecs_feedback` values('7','6','1','admin','规范广告德芙','reply','0','0','的娃娃大大我的的。囧囧掉手机哦，暖暖氛围浓能给您。寂寞ID睡觉阿迪偶奇偶，的窘迫奇偶街，','1440547434','0','0','0');");
E_D("replace into `ecs_feedback` values('8','0','0','匿名用户','dsadds@qqqq.adsads','dsddsad','1','1','ggggdfsfdsf','1440633136','','0','1');");
E_D("replace into `ecs_feedback` values('9','8','1','admin','fwwa','reply','0','0','wadsadsad','1440633150','0','0','0');");
E_D("replace into `ecs_feedback` values('10','0','0','匿名用户','aaa@d.sd','dsad','2','1','询问','1440960212','','0','1');");
E_D("replace into `ecs_feedback` values('11','0','0','匿名用户','dsadds@qqqq.adsads','dfffffffffff','3','1','售后','1440960226','','0','1');");
E_D("replace into `ecs_feedback` values('12','0','0','匿名用户','aaa@d.sd','dsad','4','1','求购','1440960242','','0','1');");
E_D("replace into `ecs_feedback` values('13','0','2','vip','vip@ecshop.com','你好','0','0','你们的新产品什么时候发布','1441733619','','0','0');");

require("../../inc/footer.php");
?>