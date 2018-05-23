<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_comment`;");
E_C("CREATE TABLE `ecs_comment` (
  `comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `comment_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `id_value` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `email` varchar(60) NOT NULL DEFAULT '',
  `user_name` varchar(60) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `comment_rank` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `ip_address` varchar(15) NOT NULL DEFAULT '',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_id`),
  KEY `parent_id` (`parent_id`),
  KEY `id_value` (`id_value`)
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_comment` values('88','0','27','497110669@qq.com','','不买盒子可以直接放电视吗','5','1441666569','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('89','0','27','admin1232444@qq.com','','电视太漂亮了，外观很时尚','5','1441666602','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('92','0','27','497110669@qq.com','','颜色好看，音质和简装版一样，有点小贵','3','1441666806','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('91','0','27','497110669@qq.com','','这个冰川蓝我非常喜欢！颜色很亮！感觉很清爽呢！像是夏天的海洋！音质棒棒的！来吧！打开DJ一起摇…！','5','1441666787','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('90','0','27','444@qq.com','','东西不错，是正品，现在高仿小米的产品太多了，只有选择官网购买，一分钱一分货','4','1441666765','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('54','0','39','af@sdds.dsd','','大发发生','3','1440454940','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('55','0','39','497110669@qq.com','','sadadsad','4','1440455014','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('56','0','55','dsadsadad@qq.cc','','dsadsdsad','2','1440625711','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('57','0','55','21e12@ww.aaa','','DSADADSFASDFASD','5','1440625790','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('58','0','55','21e12@ww.aaa','','RSGDFHFRHRT','5','1440625812','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('59','0','55','497110669@qq.com','','五星','5','1440626866','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('60','0','55','admin1232444@qq.com','','四星','4','1440626886','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('61','0','55','497110669@qq.com','','dasdsad','5','1440626899','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('62','0','55','admin1232444@qq.com','','三星','3','1440626939','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('63','0','55','497110669@qq.com','','两星','2','1440626980','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('64','0','55','497110669@qq.com','','一星','1','1440626998','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('65','0','55','497110669@qq.com','','dsddad','3','1440634960','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('66','0','55','admin1232444@qq.com','','ededededededededededededededed','2','1440634977','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('67','0','55','admin1232444@qq.com','','wdwdw','2','1440634988','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('93','0','27','497110669@qq.com','','收到实物后，看见耳机确实是蓝色的，有一点像小清新的天空蓝，颜色真好看，超喜欢的说≧◇≦','5','1441666830','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('69','0','45','kk1346@qq.com','tyq','eeeeeeeeeeeeeeeee','5','1440974952','127.0.0.1','1','0','16');");
E_D("replace into `ecs_comment` values('70','0','28','ss5521221w@qq.cs','','外观时尚，系统流畅，续航时间长。','5','1441492507','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('71','0','85','ssssssss@ww.aa','','同事很喜欢，不显厚～bling bling～ ','5','1441492559','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('72','0','38','ssssssss@ww.aa','','还不错，音质也好，就是太可爱了，被小侄女看到了。(๑´ω`๑) ','5','1441492617','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('73','0','88','ssssssss@ww.aa','','So cool！看米关公风虎云龙！大喝一声—— 『刀下留人！』 ','5','1441492755','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('74','0','84','ssssssss@ww.aa','','东西是还可以啦。。就是不方便。要是带磁铁封的就好了。。可能是新东西。。放在哪老是自己张开。。这个情况令我很是烦恼。。。 ','4','1441502880','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('75','0','84','ssssssss@ww.aa','','我己买了手杌套，下一步就该手机了，必须买个红米note，因为手机我只用小米的！！！ ','4','1441502916','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('76','0','84','ssssssss@ww.aa','','昨天我夜观天象，被告知我评论完成，就可以得到客服妹妹的电话号码，特意前来验证 ','4','1441502938','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('77','0','84','ssssssss@ww.aa','','做工是比较熬好的，有几点不足，观看电影的时候保护套不能将手机倾斜45度角，在盖住手机的时候前盖盖不住，设计个按钮会更好地，弄的我有换了一个保护壳。 ','3','1441502981','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('78','0','84','ssssssss@ww.aa','','给力啊，小米的周边配件挺好用的。 ','5','1441503019','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('79','0','84','','admin','这么巧？小妹我昨夜夜观星象，发现贪狼移位，破军妄动，紫薇星暗淡！萤惑星闪耀红光。拈指一算，竟推出今日若有信息泄露，必定狼哭鬼嚎，血流成河。为了大地苍生，此事改日再议，感谢您对小米的支持。','0','1441503072','127.0.0.1','0','76','0');");
E_D("replace into `ecs_comment` values('80','0','84','','admin','购物狂是种病，得治啊，不过闲着也是闲着，不如送给身边有用的人儿吧。感谢您对小米的支持。','0','1441503142','127.0.0.1','0','77','0');");
E_D("replace into `ecs_comment` values('81','0','84','','admin','张开的解决办法……把手机反过来壳子背面朝上放一晚上……一定可以','0','1441503300','127.0.0.1','0','74','0');");
E_D("replace into `ecs_comment` values('82','0','38','ssssssss@ww.aa','','颜色好看，音质和简装版一样，有点小贵 ','5','1441558875','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('83','0','38','ssssssss@ww.aa','','耳机音效还不错？价格也合适，就是又加了邮费让人不爽 ','4','1441558902','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('84','0','38','ssssssss@ww.aa','','这个冰川蓝我非常喜欢！颜色很亮！感觉很清爽呢！像是夏天的海洋！音质棒棒的！来吧！打开DJ一起摇…！ ','5','1441558926','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('85','0','38','ssssssss@ww.aa','','东西不错，是正品，现在高仿小米的产品太多了，只有选择官网购买，一分钱一分货 ','5','1441558947','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('86','0','38','ssssssss@ww.aa','','收到实物后，看见耳机确实是蓝色的，有一点像小清新的天空蓝，颜色真好看，超喜欢的说≧◇≦ ','5','1441558983','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('87','0','38','ssssssss@ww.aa','','跟女神版超配的。颜值高。 ','5','1441559012','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('94','0','94','vip@ecshop.com','vip','猫儿很可爱，女朋友戴上萌萌哒','5','1441672540','127.0.0.1','1','0','2');");
E_D("replace into `ecs_comment` values('95','0','43','vip@ecshop.com','vip','超级帅的自拍杆，还可以伸缩，方便携带','5','1441672605','127.0.0.1','1','0','2');");
E_D("replace into `ecs_comment` values('96','0','90','vip@ecshop.com','vip','米兔的眼神好呆','5','1441672652','127.0.0.1','1','0','2');");
E_D("replace into `ecs_comment` values('97','0','39','vip@ecshop.com','vip','方便实用','5','1441672682','127.0.0.1','1','0','2');");
E_D("replace into `ecs_comment` values('98','0','93','vip@ecshop.com','vip','刚买就掉地上了，但是质量很坚固，没有摔坏','5','1441672799','127.0.0.1','1','0','2');");
E_D("replace into `ecs_comment` values('99','0','45','123@qq.com','','dddd','5','1441835647','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('100','0','45','admin1232444@qq.com','','dsad','5','1441835756','127.0.0.1','1','0','0');");

require("../../inc/footer.php");
?>