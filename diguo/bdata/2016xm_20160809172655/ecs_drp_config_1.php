<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_drp_config`;");
E_C("CREATE TABLE `ecs_drp_config` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `centent` text COMMENT '分销申请 温馨提示',
  `keyword` varchar(20) DEFAULT NULL COMMENT '区分文章的key',
  `name` varchar(50) DEFAULT NULL COMMENT '显示字段名',
  `remarks` text COMMENT '备注',
  `type` varchar(20) DEFAULT 'text' COMMENT '数据类型',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_drp_config` values('1','温馨提示','apply','温馨提示','申请分销商时，提示用户的信息','textarea');");
E_D("replace into `ecs_drp_config` values('2','新手必读','novice','新手必读','分销商申请成功后，用户要注意的事项','textarea');");
E_D("replace into `ecs_drp_config` values('3','7','fxts','分销间隔','下单并付款之后经过设置天数才可以对订单分成','text');");

require("../../inc/footer.php");
?>