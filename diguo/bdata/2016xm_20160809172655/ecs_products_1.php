<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_products`;");
E_C("CREATE TABLE `ecs_products` (
  `product_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_attr` varchar(50) DEFAULT NULL,
  `product_sn` varchar(60) DEFAULT NULL,
  `product_number` smallint(5) unsigned DEFAULT '0',
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_products` values('1','32','163','','100');");
E_D("replace into `ecs_products` values('21','39','49|50','ECS000039g_p21','10000');");
E_D("replace into `ecs_products` values('22','39','48|51','ECS000039g_p22','10000');");
E_D("replace into `ecs_products` values('23','39','48|52','ECS000039g_p23','10000');");
E_D("replace into `ecs_products` values('24','39','49|51','ECS000039g_p24','10000');");
E_D("replace into `ecs_products` values('25','39','49|52','ECS000039g_p25','10000');");
E_D("replace into `ecs_products` values('26','39','48|50','ECS000039g_p26','10000');");

require("../../inc/footer.php");
?>