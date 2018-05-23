<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_attribute`;");
E_C("CREATE TABLE `ecs_attribute` (
  `attr_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `attr_name` varchar(60) NOT NULL DEFAULT '',
  `attr_input_type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `attr_type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `attr_values` text NOT NULL,
  `attr_index` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `is_linked` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `attr_group` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_show_img` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`attr_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_attribute` values('11','3','颜色','1','1','白\r\n黑\r\n蓝\r\n红\r\n黄\r\n灰\r\n黑白','0','0','0','0','1');");
E_D("replace into `ecs_attribute` values('10','3','尺寸','1','1','15\r\n21\r\n25\r\n33\r\n38\r\n45\r\n52\r\n58','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('12','4','颜色','1','1','丁香紫\r\n樱花粉\r\n冰川蓝','0','0','0','0','1');");
E_D("replace into `ecs_attribute` values('13','4','线长','1','1','50cm\r\n60cm\r\n70cm\r\n80cm','0','0','0','0','0');");

require("../../inc/footer.php");
?>