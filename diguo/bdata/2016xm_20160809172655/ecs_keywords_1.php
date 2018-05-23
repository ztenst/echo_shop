<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_keywords`;");
E_C("CREATE TABLE `ecs_keywords` (
  `date` date NOT NULL DEFAULT '0000-00-00',
  `searchengine` varchar(20) NOT NULL DEFAULT '',
  `keyword` varchar(90) NOT NULL DEFAULT '',
  `count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`date`,`searchengine`,`keyword`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_keywords` values('2009-04-21','ecshop','诺基亚','1');");
E_D("replace into `ecs_keywords` values('2009-04-27','ecshop','智能手机','1');");
E_D("replace into `ecs_keywords` values('2009-05-04','ecshop','斤','1');");
E_D("replace into `ecs_keywords` values('2009-05-10','ecshop','诺基亚','1');");
E_D("replace into `ecs_keywords` values('2009-05-11','ecshop','智能手机','1');");
E_D("replace into `ecs_keywords` values('2009-05-11','ecshop','诺基亚','1');");
E_D("replace into `ecs_keywords` values('2009-05-12','ecshop','三星','1');");
E_D("replace into `ecs_keywords` values('2009-05-12','ecshop','智能手机','1');");
E_D("replace into `ecs_keywords` values('2009-05-12','ecshop','p806','1');");
E_D("replace into `ecs_keywords` values('2009-05-12','ecshop','诺基亚','1');");
E_D("replace into `ecs_keywords` values('2009-05-12','ecshop','夏新','1');");
E_D("replace into `ecs_keywords` values('2009-05-18','ecshop','52','2');");
E_D("replace into `ecs_keywords` values('2009-05-22','ecshop','p','1');");
E_D("replace into `ecs_keywords` values('2014-05-15','ecshop','棉色织格子花边舒适女式长袖衬衫','1');");
E_D("replace into `ecs_keywords` values('2014-06-11','ecshop','衣','55');");
E_D("replace into `ecs_keywords` values('2014-06-11','ecshop','1','26');");
E_D("replace into `ecs_keywords` values('2014-06-12','ecshop','1','1');");
E_D("replace into `ecs_keywords` values('2014-07-23','ecshop','1','1');");
E_D("replace into `ecs_keywords` values('2014-07-23','ecshop','天空','1');");
E_D("replace into `ecs_keywords` values('2014-08-07','ecshop','D48','2');");
E_D("replace into `ecs_keywords` values('2014-08-08','ecshop','D48','1');");
E_D("replace into `ecs_keywords` values('2014-08-09','ecshop','D48','1');");
E_D("replace into `ecs_keywords` values('2014-08-11','ecshop','1','40');");
E_D("replace into `ecs_keywords` values('2014-08-11','ecshop','D48MF','1');");
E_D("replace into `ecs_keywords` values('2014-08-13','ecshop','1','3');");
E_D("replace into `ecs_keywords` values('2014-08-13','ecshop','的（Midea）','1');");
E_D("replace into `ecs_keywords` values('2014-08-13','ecshop','FS406C','1');");
E_D("replace into `ecs_keywords` values('2014-08-13','ecshop','4L','1');");
E_D("replace into `ecs_keywords` values('2014-08-13','ecshop','电脑版电饭煲','1');");
E_D("replace into `ecs_keywords` values('2014-08-13','ecshop','D48MF','2');");
E_D("replace into `ecs_keywords` values('2014-08-13','ecshop','防晒隔离','1');");
E_D("replace into `ecs_keywords` values('2014-08-14','ecshop','1','6');");
E_D("replace into `ecs_keywords` values('2014-08-15','ecshop','1','5');");
E_D("replace into `ecs_keywords` values('2014-08-20','ecshop','D48MF','1');");
E_D("replace into `ecs_keywords` values('2014-08-21','ecshop','D48MF','1');");
E_D("replace into `ecs_keywords` values('2014-08-21','ecshop','1','1');");
E_D("replace into `ecs_keywords` values('2014-09-01','ecshop','48','3');");
E_D("replace into `ecs_keywords` values('2014-09-04','ecshop','D48','1');");
E_D("replace into `ecs_keywords` values('2014-09-04','ecshop','D48MF','2');");
E_D("replace into `ecs_keywords` values('2014-09-15','ecshop','M48DF','1');");
E_D("replace into `ecs_keywords` values('2014-09-15','ecshop','48','2');");
E_D("replace into `ecs_keywords` values('2014-09-16','ecshop','48','1');");
E_D("replace into `ecs_keywords` values('2014-09-29','ecshop','D48MF','1');");
E_D("replace into `ecs_keywords` values('2014-10-22','ecshop','古井贡酒','2');");
E_D("replace into `ecs_keywords` values('2014-11-18','ecshop','1','1');");
E_D("replace into `ecs_keywords` values('2014-11-18','ecshop','箱','1');");
E_D("replace into `ecs_keywords` values('2014-11-20','ecshop','1','1');");
E_D("replace into `ecs_keywords` values('2014-11-20','ecshop','all','1');");
E_D("replace into `ecs_keywords` values('2014-11-28','ecshop','电视机','1');");
E_D("replace into `ecs_keywords` values('2014-12-03','ecshop','1','3');");
E_D("replace into `ecs_keywords` values('2014-12-03','ecshop','电视','6');");
E_D("replace into `ecs_keywords` values('2014-12-15','ecshop','1','1');");
E_D("replace into `ecs_keywords` values('2014-12-25','ecshop','RMZONE婵真美菁红酒二件套装','1');");
E_D("replace into `ecs_keywords` values('2014-12-25','ecshop','CHARMZONE婵真美菁红酒二件套装','2');");
E_D("replace into `ecs_keywords` values('2014-12-25','ecshop','HARMZONE婵真美菁红酒二件套装','1');");
E_D("replace into `ecs_keywords` values('2014-12-26','ecshop','粉','2');");
E_D("replace into `ecs_keywords` values('2014-12-26','ecshop','ONE婵真美菁红酒二件套装','1');");
E_D("replace into `ecs_keywords` values('2014-12-29','ecshop','1','3');");
E_D("replace into `ecs_keywords` values('2014-12-29','ecshop','Kiehl\\\\\\\\\\\\''s','2');");
E_D("replace into `ecs_keywords` values('2014-12-29','ecshop','科颜氏（契尔氏）小黄瓜水植物精华化妆水250ml','2');");
E_D("replace into `ecs_keywords` values('2014-12-30','ecshop','1','37');");
E_D("replace into `ecs_keywords` values('2014-12-30','ecshop','面膜','1');");
E_D("replace into `ecs_keywords` values('2014-12-30','ecshop','菲诗小铺','1');");
E_D("replace into `ecs_keywords` values('2014-12-30','ecshop','爱丽小屋','1');");
E_D("replace into `ecs_keywords` values('2014-12-30','ecshop','CHARMZONE婵真美菁红酒二件套装','5');");
E_D("replace into `ecs_keywords` values('2014-12-31','ecshop','1','37');");
E_D("replace into `ecs_keywords` values('2014-12-31','ecshop','深深深','4');");
E_D("replace into `ecs_keywords` values('2014-12-31','ecshop','sss','5');");
E_D("replace into `ecs_keywords` values('2015-08-07','ecshop','耳机','1');");
E_D("replace into `ecs_keywords` values('2015-08-07','ecshop','小米手环','1');");
E_D("replace into `ecs_keywords` values('2015-08-11','ecshop','小米手环','2');");
E_D("replace into `ecs_keywords` values('2015-08-12','ecshop','小米手环','1');");
E_D("replace into `ecs_keywords` values('2015-08-12','ecshop','耳机','1');");
E_D("replace into `ecs_keywords` values('2015-08-12','ecshop','xiao','1');");
E_D("replace into `ecs_keywords` values('2015-08-24','ecshop','小米手环','1');");
E_D("replace into `ecs_keywords` values('2015-08-24','ecshop','耳机','1');");
E_D("replace into `ecs_keywords` values('2015-08-27','ecshop','1','34');");
E_D("replace into `ecs_keywords` values('2015-08-27','ecshop','dsad','2');");
E_D("replace into `ecs_keywords` values('2015-08-27','ecshop','dsadsad','3');");
E_D("replace into `ecs_keywords` values('2015-08-27','ecshop','455666','7');");
E_D("replace into `ecs_keywords` values('2015-08-27','ecshop','dsadadsad','1');");
E_D("replace into `ecs_keywords` values('2015-08-27','ecshop','a','19');");
E_D("replace into `ecs_keywords` values('2015-08-27','ecshop','小米手环','1');");
E_D("replace into `ecs_keywords` values('2015-08-27','ecshop','耳机','1');");
E_D("replace into `ecs_keywords` values('2015-08-27','ecshop','插线板','1');");
E_D("replace into `ecs_keywords` values('2015-08-28','ecshop','耳机','1');");
E_D("replace into `ecs_keywords` values('2015-08-28','ecshop','小米手环','1');");
E_D("replace into `ecs_keywords` values('2015-08-28','ecshop','2','5');");
E_D("replace into `ecs_keywords` values('2015-08-31','ecshop','小米手环','3');");
E_D("replace into `ecs_keywords` values('2015-08-31','ecshop','耳机','14');");
E_D("replace into `ecs_keywords` values('2015-08-31','ecshop','插线板','1');");
E_D("replace into `ecs_keywords` values('2015-09-01','ecshop','小米手环','3');");
E_D("replace into `ecs_keywords` values('2015-09-01','ecshop','插线板','2');");
E_D("replace into `ecs_keywords` values('2015-09-02','ecshop','耳机','1');");
E_D("replace into `ecs_keywords` values('2015-09-06','ecshop','小米手环','41');");
E_D("replace into `ecs_keywords` values('2015-09-07','ecshop','小米手环','1');");
E_D("replace into `ecs_keywords` values('2015-09-07','ecshop','耳机','7');");
E_D("replace into `ecs_keywords` values('2015-09-08','ecshop','fffffffff','1');");
E_D("replace into `ecs_keywords` values('2015-09-08','ecshop','aaaaaaaaa','1');");
E_D("replace into `ecs_keywords` values('2015-09-08','ecshop','小米手环','1');");
E_D("replace into `ecs_keywords` values('2015-09-09','ecshop','音乐手机','1');");
E_D("replace into `ecs_keywords` values('2015-09-10','ecshop','dsad','1');");
E_D("replace into `ecs_keywords` values('2015-09-10','ecshop','音乐手机','1');");
E_D("replace into `ecs_keywords` values('2015-11-05','ecshop','小米手环','1');");
E_D("replace into `ecs_keywords` values('2016-05-18','ecshop','小米手环','2');");

require("../../inc/footer.php");
?>