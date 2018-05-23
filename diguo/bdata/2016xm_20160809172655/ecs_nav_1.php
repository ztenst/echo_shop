<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_nav`;");
E_C("CREATE TABLE `ecs_nav` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `ctype` varchar(10) DEFAULT NULL,
  `cid` smallint(5) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `ifshow` tinyint(1) NOT NULL,
  `vieworder` tinyint(1) NOT NULL,
  `opennew` tinyint(1) NOT NULL,
  `url` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `ifshow` (`ifshow`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_nav` values('2','','0','选购中心','0','2','0','pick_out.php','top');");
E_D("replace into `ecs_nav` values('3','','0','查看购物车','0','0','0','flow.php','top');");
E_D("replace into `ecs_nav` values('6','','0','标签云','0','5','6','tag_cloud.php','top');");
E_D("replace into `ecs_nav` values('54','','0','留言板','1','16','1','message.php','top');");
E_D("replace into `ecs_nav` values('53','','0','520余家售后网点','1','5','0','#','bottom');");
E_D("replace into `ecs_nav` values('52','','0','满150元包邮','1','4','0','#','bottom');");
E_D("replace into `ecs_nav` values('51','','0','15天免费换货','1','3','0','#','bottom');");
E_D("replace into `ecs_nav` values('50','','0','7天无理由退货','1','2','0','#','bottom');");
E_D("replace into `ecs_nav` values('32','c','101','耳机音箱与存储卡','1','3','0','category.php?id=101','middle');");
E_D("replace into `ecs_nav` values('23','','0','报价单','0','6','0','quotation.php','top');");
E_D("replace into `ecs_nav` values('42','c','76','购买电视与平板','1','1','0','category.php?id=76','middle');");
E_D("replace into `ecs_nav` values('43','c','69','购买手机','1','2','0','category.php?id=69','middle');");
E_D("replace into `ecs_nav` values('33','','0','小米模板','1','7','0','index.php','top');");
E_D("replace into `ecs_nav` values('34','','0','MIUI','1','8','1','#','top');");
E_D("replace into `ecs_nav` values('35','','0','米聊','1','9','1','#','top');");
E_D("replace into `ecs_nav` values('36','','0','游戏','1','10','1','#','top');");
E_D("replace into `ecs_nav` values('37','','0','多看阅读','1','11','1','#','top');");
E_D("replace into `ecs_nav` values('38','','0','云服务','1','12','1','#','top');");
E_D("replace into `ecs_nav` values('39','','0','移动版商城','1','13','1','/mobile','top');");
E_D("replace into `ecs_nav` values('40','','0','Select region','1','14','0','#','top');");
E_D("replace into `ecs_nav` values('44','c','108','保护套与贴膜','1','4','0','category.php?id=108','middle');");
E_D("replace into `ecs_nav` values('45','c','118','小米生活方式','1','5','0','category.php?id=118','middle');");
E_D("replace into `ecs_nav` values('49','','0','1小时快修服务','1','1','0','#','bottom');");
E_D("replace into `ecs_nav` values('47','','0','网店帮助分类','1','15','0','article_cat.php?id=3','top');");
E_D("replace into `ecs_nav` values('48','a','3','网店帮助分类','0','7','0','article_cat.php?id=3','middle');");

require("../../inc/footer.php");
?>