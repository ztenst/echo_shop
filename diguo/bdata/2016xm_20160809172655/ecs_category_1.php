<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_category`;");
E_C("CREATE TABLE `ecs_category` (
  `cat_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(90) NOT NULL DEFAULT '',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `cat_desc` varchar(255) NOT NULL DEFAULT '',
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `sort_order` tinyint(1) unsigned NOT NULL DEFAULT '50',
  `template_file` varchar(50) NOT NULL DEFAULT '',
  `measure_unit` varchar(15) NOT NULL DEFAULT '',
  `show_in_nav` tinyint(1) NOT NULL DEFAULT '0',
  `style` varchar(150) NOT NULL,
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `grade` tinyint(4) NOT NULL DEFAULT '0',
  `filter_attr` varchar(255) NOT NULL DEFAULT '0',
  `is_top_style` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_on_top` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `thumb` varchar(255) NOT NULL DEFAULT '',
  `cat_ico` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=133 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_category` values('69','购买手机','','','0','50','','','1','','1','0','','0','0','','');");
E_D("replace into `ecs_category` values('91','床头灯','','','80','50','','','0','','1','0','0','0','0','1440714828177337851.jpg','');");
E_D("replace into `ecs_category` values('83','小米手环','','','80','50','','','0','','1','0','0','0','0','1440714594129934702.jpg','');");
E_D("replace into `ecs_category` values('77','小米电视2','','','76','50','','','0','','1','0','0','0','0','1440714523818497367.jpg','');");
E_D("replace into `ecs_category` values('75','根据机型选配件','','','69','50','','','0','','1','0','0','0','0','1440714436136987275.jpg','');");
E_D("replace into `ecs_category` values('70','小米Note','','','69','50','','','0','','1','0','0','0','0','1440694830757590201.jpg','');");
E_D("replace into `ecs_category` values('71','小米手机4','','','69','50','','','0','','1','0','0','0','0','1440714333309950345.jpg','');");
E_D("replace into `ecs_category` values('95','小米移动电源','','','94','50','','','0','','1','0','0','0','0','1440714900932574593.jpg','');");
E_D("replace into `ecs_category` values('92','随身WiFi','','','80','50','','','0','','1','0','0','0','0','1440715656375233503.jpg','');");
E_D("replace into `ecs_category` values('84','净化器与滤芯','','','80','50','','','0','','1','0','0','0','0','1440714604871156701.jpg','');");
E_D("replace into `ecs_category` values('80','路由器与智能硬件','','','0','50','','','0','','1','0','','0','0','','');");
E_D("replace into `ecs_category` values('81','小米路由器','','','80','50','','','0','','1','0','0','0','0','1440714625090181569.jpg','');");
E_D("replace into `ecs_category` values('76','购买电视与平板','','','0','50','','','1','','1','9','11,10','0','0','','');");
E_D("replace into `ecs_category` values('73','红米Note','','','69','50','','','0','','1','0','0','0','0','1440714403858779637.jpg','');");
E_D("replace into `ecs_category` values('72','红米手机2','','','69','50','','','0','','1','0','0','0','0','1440714364083646808.jpg','');");
E_D("replace into `ecs_category` values('74','合约机','','','69','50','','','0','','1','0','0','0','0','1440714462800237542.jpg','');");
E_D("replace into `ecs_category` values('82','小米路由器mini','','','80','50','','','0','','1','0','0','0','0','1440714634528408482.jpg','');");
E_D("replace into `ecs_category` values('104','小米蓝牙耳机','','','101','50','','','0','','1','0','0','0','0','1440715065754194490.jpg','');");
E_D("replace into `ecs_category` values('105','品牌耳机','','','101','50','','','0','','1','0','0','0','0','1440715032831550803.jpg','');");
E_D("replace into `ecs_category` values('101','耳机音箱与存储卡','','','0','50','','','1','','1','0','','0','0','','');");
E_D("replace into `ecs_category` values('103','小米活塞耳机','','','101','50','','','0','','1','0','0','0','0','1440715024130191189.jpg','');");
E_D("replace into `ecs_category` values('102','小米头戴式耳机','','','101','50','','','0','','1','0','0','0','0','1440715048540050271.jpg','');");
E_D("replace into `ecs_category` values('97','品牌移动电源','','','94','50','','','0','','1','0','0','0','0','1440714924713983846.jpg','');");
E_D("replace into `ecs_category` values('96','插线板','','','94','50','','','0','','1','0','0','0','0','1440714915425315885.jpg','');");
E_D("replace into `ecs_category` values('100','线材','','','94','50','','','0','','1','0','0','0','0','1440714936755382725.jpg','');");
E_D("replace into `ecs_category` values('98','电池','','','94','50','','','0','','1','0','0','0','0','1440714981256300433.jpg','');");
E_D("replace into `ecs_category` values('99','充电器','','','94','50','','','0','','1','0','0','0','0','1440714969081433313.jpg','');");
E_D("replace into `ecs_category` values('94','插线板、移动电源与电池','','','0','50','','','0','','1','0','','0','0','','');");
E_D("replace into `ecs_category` values('93','智能家庭套装','','','80','50','','','0','','1','0','0','0','0','1440714801144245694.jpg','');");
E_D("replace into `ecs_category` values('90','体重秤','','','80','50','','','0','','1','0','0','0','0','1440714813461961388.jpg','');");
E_D("replace into `ecs_category` values('85','运动相机','','','80','50','','','0','','1','0','0','0','0','1440714715783886182.jpg','');");
E_D("replace into `ecs_category` values('86','摄像机','','','80','50','','','0','','1','0','0','0','0','1440714727617165633.jpg','');");
E_D("replace into `ecs_category` values('87','血压计','','','80','50','','','0','','1','0','0','0','0','1440714693247309265.jpg','');");
E_D("replace into `ecs_category` values('88','智能插座','','','80','50','','','0','','1','0','0','0','0','1440714705263121780.jpg','');");
E_D("replace into `ecs_category` values('89','智能灯泡','','','80','50','','','0','','1','0','0','0','0','1440715638505801362.jpg','');");
E_D("replace into `ecs_category` values('108','保护套与贴膜','','','0','50','','','1','','1','0','','0','0','','');");
E_D("replace into `ecs_category` values('107','存储卡','','','101','50','','','0','','1','0','0','0','0','1440715085793740200.jpg','');");
E_D("replace into `ecs_category` values('106','音箱','','','101','50','','','0','','1','0','0','0','0','1440715040881731212.jpg','');");
E_D("replace into `ecs_category` values('79','小米平板','','','76','50','','','0','','1','0','0','0','0','1440714487073430021.jpg','');");
E_D("replace into `ecs_category` values('78','小米盒子','','','76','50','','','0','','1','0','0','0','0','1440714530518865434.jpg','');");
E_D("replace into `ecs_category` values('109','保护套','','','108','50','','','0','','1','0','0','0','0','1440715134794547790.jpg','');");
E_D("replace into `ecs_category` values('110','贴膜','','','108','50','','','0','','1','0','0','0','0','1440715114068188035.jpg','');");
E_D("replace into `ecs_category` values('111','防尘塞','','','108','50','','','0','','1','0','0','0','0','1440715123287405177.jpg','');");
E_D("replace into `ecs_category` values('112','后盖与个性化配件','','','0','50','','','0','','1','0','','0','0','','');");
E_D("replace into `ecs_category` values('113','米键','','','112','50','','','0','','1','0','0','0','0','1440715625439150214.jpg','');");
E_D("replace into `ecs_category` values('114','后盖','','','112','50','','','0','','1','0','0','0','0','1440715187036075931.jpg','');");
E_D("replace into `ecs_category` values('115','贴纸','','','112','50','','','0','','1','0','0','0','0','1440715195561532491.jpg','');");
E_D("replace into `ecs_category` values('116','手机支架','','','112','50','','','0','','1','0','0','0','0','1440715238522222987.jpg','');");
E_D("replace into `ecs_category` values('117','耳机绕线器','','','112','50','','','0','','1','0','0','0','0','1440715230765044894.jpg','');");
E_D("replace into `ecs_category` values('118','小米生活方式','','','0','50','','','1','','1','0','','0','0','','');");
E_D("replace into `ecs_category` values('119','T恤','','','118','50','','','0','','1','0','0','0','0','1440715327531806544.jpg','');");
E_D("replace into `ecs_category` values('120','米兔','','','118','50','','','0','','1','0','0','0','0','1440715299548417989.jpg','');");
E_D("replace into `ecs_category` values('121','背包','','','118','50','','','0','','1','0','0','0','0','1440715307737503627.jpg','');");
E_D("replace into `ecs_category` values('122','小米鼠标垫','','','118','50','','','0','','1','0','0','0','0','1440715318290414276.jpg','');");
E_D("replace into `ecs_category` values('123','生活周边','','','118','50','','','0','','1','0','0','0','0','1440715289580224704.jpg','');");
E_D("replace into `ecs_category` values('124','小米电视','','','76','50','','','0','','1','0','0','0','0','1441052146914725720.jpg','');");
E_D("replace into `ecs_category` values('125','电视盒子配件','','','76','50','','','0','','1','0','0','0','0','1441052187926588684.jpg','');");
E_D("replace into `ecs_category` values('126','小米盒子mini','','','76','50','','','0','','1','0','0','0','0','1441057025002599029.jpg','');");
E_D("replace into `ecs_category` values('127','翻盖保护套','','','108','50','','','0','','1','0','0','0','0','1441055970998522204.png','');");
E_D("replace into `ecs_category` values('128','软胶保护套','','','108','50','','','0','','1','0','0','0','0','1441056068949453322.png','');");
E_D("replace into `ecs_category` values('129','保护壳','','','108','50','','','0','','1','0','0','0','0','1441056471201197370.png','');");
E_D("replace into `ecs_category` values('130','酷玩产品','','','118','50','','','0','','1','0','0','0','0','1441056836925397608.jpg','');");
E_D("replace into `ecs_category` values('131','卫衣','','','118','50','','','0','','1','0','0','0','0','1441057330781825431.jpg','');");
E_D("replace into `ecs_category` values('132','POLO衫','','','118','50','','','0','','1','0','0','0','0','1441057345875896145.jpg','');");

require("../../inc/footer.php");
?>