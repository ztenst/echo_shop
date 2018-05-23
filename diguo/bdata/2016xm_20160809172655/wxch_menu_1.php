<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_menu`;");
E_C("CREATE TABLE `wxch_menu` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `menu_type` varchar(6) NOT NULL,
  `level` int(1) NOT NULL,
  `name` varchar(30) NOT NULL,
  `value` varchar(250) NOT NULL,
  `aid` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8");
E_D("replace into `wxch_menu` values('1','click','1','商品查看','','0');");
E_D("replace into `wxch_menu` values('2','click','1','会员功能','','0');");
E_D("replace into `wxch_menu` values('3','click','1','更多..','','0');");
E_D("replace into `wxch_menu` values('4','click','2','热销产品','hot','1');");
E_D("replace into `wxch_menu` values('5','click','2','精品推荐','best','1');");
E_D("replace into `wxch_menu` values('6','click','2','新款推荐','news','1');");
E_D("replace into `wxch_menu` values('7','click','2','','','1');");
E_D("replace into `wxch_menu` values('8','click','2','','','1');");
E_D("replace into `wxch_menu` values('9','click','2','会员绑定','bd','2');");
E_D("replace into `wxch_menu` values('10','click','2','重新绑定','cxbd','2');");
E_D("replace into `wxch_menu` values('11','click','2','订单查询','ddcx','2');");
E_D("replace into `wxch_menu` values('12','click','2','','','2');");
E_D("replace into `wxch_menu` values('13','click','2','','','2');");
E_D("replace into `wxch_menu` values('14','click','2','帮忙说明','help','3');");
E_D("replace into `wxch_menu` values('15','click','2','订单快递','kdcx','3');");
E_D("replace into `wxch_menu` values('16','click','2','菜单回复','cdhf','3');");
E_D("replace into `wxch_menu` values('17','view','2','首页','http://m.ecmoban.com','3');");
E_D("replace into `wxch_menu` values('18','click','2','','','3');");

require("../../inc/footer.php");
?>