<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_sessions_data`;");
E_C("CREATE TABLE `ecs_sessions_data` (
  `sesskey` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `expiry` int(10) unsigned NOT NULL DEFAULT '0',
  `data` longtext NOT NULL,
  PRIMARY KEY (`sesskey`),
  KEY `expiry` (`expiry`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_sessions_data` values('ac551e23e28fd31cfe2a9d9355c1c66b','4294967295','a:8:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:12:\"captcha_word\";s:16:\"YzFjMWJlMWFmYw==\";s:9:\"flow_type\";i:0;s:10:\"flow_order\";a:1:{s:14:\"extension_code\";s:0:\"\";}s:13:\"captcha_login\";s:16:\"ZGEyZTA0NzcyNw==\";s:15:\"direct_shopping\";i:1;}');");
E_D("replace into `ecs_sessions_data` values('3d06abf4cc1c12f48e5891ea0e2f1c1e','4294967295','a:9:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:12:\"captcha_word\";s:16:\"N2UwOWM5NzExMg==\";s:9:\"flow_type\";i:0;s:10:\"flow_order\";a:8:{s:14:\"extension_code\";s:0:\"\";s:11:\"shipping_id\";i:10;s:6:\"pay_id\";i:6;s:7:\"pack_id\";i:0;s:7:\"card_id\";i:0;s:5:\"bonus\";i:0;s:8:\"integral\";i:0;s:7:\"surplus\";i:0;}s:9:\"last_time\";s:1:\"0\";s:7:\"last_ip\";s:0:\"\";s:14:\"flow_consignee\";a:14:{s:10:\"address_id\";s:1:\"1\";s:9:\"consignee\";s:9:\"刘先生\";s:7:\"country\";s:1:\"1\";s:8:\"province\";s:1:\"2\";s:4:\"city\";s:2:\"52\";s:8:\"district\";s:3:\"502\";s:5:\"email\";s:17:\"ecshop@ecshop.com\";s:7:\"address\";s:12:\"海兴大厦\";s:7:\"zipcode\";s:0:\"\";s:3:\"tel\";s:12:\"010-25851234\";s:6:\"mobile\";s:11:\"13986765412\";s:13:\"sign_building\";s:0:\"\";s:9:\"best_time\";s:0:\"\";s:7:\"user_id\";s:1:\"1\";}}');");
E_D("replace into `ecs_sessions_data` values('41c5f015c7904867d226a31592c52558','4294967295','a:8:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:9:\"last_time\";s:10:\"1450023809\";s:7:\"last_ip\";s:9:\"127.0.0.1\";s:9:\"flow_type\";i:0;s:10:\"flow_order\";a:9:{s:14:\"extension_code\";s:0:\"\";s:11:\"shipping_id\";i:10;s:6:\"pay_id\";i:10;s:7:\"pack_id\";i:10;s:7:\"card_id\";i:0;s:5:\"bonus\";i:0;s:8:\"integral\";i:0;s:7:\"surplus\";i:0;s:8:\"bonus_id\";i:0;}s:14:\"flow_consignee\";a:15:{s:10:\"address_id\";s:1:\"1\";s:12:\"address_name\";s:0:\"\";s:7:\"user_id\";s:1:\"1\";s:9:\"consignee\";s:9:\"刘先生\";s:5:\"email\";s:17:\"ecshop@ecshop.com\";s:7:\"country\";s:1:\"1\";s:8:\"province\";s:1:\"2\";s:4:\"city\";s:2:\"52\";s:8:\"district\";s:3:\"502\";s:7:\"address\";s:12:\"海兴大厦\";s:7:\"zipcode\";s:0:\"\";s:3:\"tel\";s:12:\"010-25851234\";s:6:\"mobile\";s:11:\"13986765412\";s:13:\"sign_building\";s:0:\"\";s:9:\"best_time\";s:0:\"\";}}');");
E_D("replace into `ecs_sessions_data` values('ddba0993f92129528f0404a8747ea6d9','4294967295','a:8:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:12:\"captcha_word\";s:16:\"YTYzYWM2MTA2Mg==\";s:14:\"display_search\";s:4:\"grid\";s:9:\"flow_type\";i:0;s:10:\"flow_order\";a:1:{s:14:\"extension_code\";s:0:\"\";}s:13:\"captcha_login\";s:16:\"ZWYwOTcyZDI1Nw==\";}');");

require("../../inc/footer.php");
?>