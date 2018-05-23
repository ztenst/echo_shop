<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_attr`;");
E_C("CREATE TABLE `ecs_goods_attr` (
  `goods_attr_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `attr_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `attr_value` text NOT NULL,
  `attr_price` varchar(255) NOT NULL DEFAULT '',
  `img_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`goods_attr_id`),
  KEY `goods_id` (`goods_id`),
  KEY `attr_id` (`attr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=93 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_attr` values('36','28','11','灰','','35');");
E_D("replace into `ecs_goods_attr` values('35','28','10','45','','0');");
E_D("replace into `ecs_goods_attr` values('34','29','11','黑','','36');");
E_D("replace into `ecs_goods_attr` values('33','29','10','15','','0');");
E_D("replace into `ecs_goods_attr` values('37','27','10','45','','0');");
E_D("replace into `ecs_goods_attr` values('38','27','11','黄','100','34');");
E_D("replace into `ecs_goods_attr` values('91','38','12','樱花粉','30','121');");
E_D("replace into `ecs_goods_attr` values('90','38','12','冰川蓝','20','120');");
E_D("replace into `ecs_goods_attr` values('87','30','12','红','0','0');");
E_D("replace into `ecs_goods_attr` values('86','30','12','蓝','0','0');");
E_D("replace into `ecs_goods_attr` values('85','30','12','白','0','0');");
E_D("replace into `ecs_goods_attr` values('66','53','10','45','','0');");
E_D("replace into `ecs_goods_attr` values('67','53','11','黑','','55');");
E_D("replace into `ecs_goods_attr` values('68','54','10','58','','0');");
E_D("replace into `ecs_goods_attr` values('69','54','11','黄','','56');");
E_D("replace into `ecs_goods_attr` values('70','55','10','15','','0');");
E_D("replace into `ecs_goods_attr` values('71','55','11','蓝','','57');");
E_D("replace into `ecs_goods_attr` values('72','55','11','黄','','103');");
E_D("replace into `ecs_goods_attr` values('73','55','11','黑','','104');");
E_D("replace into `ecs_goods_attr` values('74','55','11','白','','106');");
E_D("replace into `ecs_goods_attr` values('89','38','12','丁香紫','10','122');");
E_D("replace into `ecs_goods_attr` values('82','27','11','红','300','58');");
E_D("replace into `ecs_goods_attr` values('81','27','11','黑白','200','60');");
E_D("replace into `ecs_goods_attr` values('83','27','11','灰','400','59');");
E_D("replace into `ecs_goods_attr` values('92','38','13','50cm','100','0');");

require("../../inc/footer.php");
?>