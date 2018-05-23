<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_pay_log`;");
E_C("CREATE TABLE `ecs_pay_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `order_amount` decimal(10,2) unsigned NOT NULL,
  `order_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_paid` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_pay_log` values('1','1','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('2','2','503.00','0','0');");
E_D("replace into `ecs_pay_log` values('3','3','8097.00','0','0');");
E_D("replace into `ecs_pay_log` values('4','4','4998.00','0','0');");
E_D("replace into `ecs_pay_log` values('5','5','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('6','6','35.00','0','0');");
E_D("replace into `ecs_pay_log` values('7','7','2198.10','0','0');");
E_D("replace into `ecs_pay_log` values('8','8','638.00','0','0');");
E_D("replace into `ecs_pay_log` values('9','9','2015.00','0','0');");
E_D("replace into `ecs_pay_log` values('10','10','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('11','11','3810.00','0','0');");
E_D("replace into `ecs_pay_log` values('12','12','253.00','0','0');");
E_D("replace into `ecs_pay_log` values('13','13','975.00','0','0');");
E_D("replace into `ecs_pay_log` values('14','14','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('15','15','17054.00','0','0');");
E_D("replace into `ecs_pay_log` values('16','16','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('17','17','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('18','18','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('19','20','1401.00','0','0');");
E_D("replace into `ecs_pay_log` values('20','21','327.00','0','0');");
E_D("replace into `ecs_pay_log` values('21','22','124.00','0','0');");
E_D("replace into `ecs_pay_log` values('22','1','2214.00','0','0');");
E_D("replace into `ecs_pay_log` values('23','2','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('24','3','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('25','4','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('26','5','88249.00','0','0');");
E_D("replace into `ecs_pay_log` values('27','6','26488.70','0','0');");
E_D("replace into `ecs_pay_log` values('28','7','963.10','0','0');");
E_D("replace into `ecs_pay_log` values('29','8','2209.00','0','0');");
E_D("replace into `ecs_pay_log` values('30','1','451.00','0','0');");
E_D("replace into `ecs_pay_log` values('31','2','2014.00','0','0');");
E_D("replace into `ecs_pay_log` values('32','3','144.00','0','0');");
E_D("replace into `ecs_pay_log` values('33','4','331.00','0','0');");
E_D("replace into `ecs_pay_log` values('34','5','2463.64','0','0');");
E_D("replace into `ecs_pay_log` values('35','6','139.00','0','0');");
E_D("replace into `ecs_pay_log` values('36','7','94.95','0','0');");
E_D("replace into `ecs_pay_log` values('37','8','139.00','0','0');");
E_D("replace into `ecs_pay_log` values('38','9','109.00','0','0');");
E_D("replace into `ecs_pay_log` values('39','10','109.00','0','0');");
E_D("replace into `ecs_pay_log` values('40','11','132.50','0','0');");
E_D("replace into `ecs_pay_log` values('41','12','132.50','0','0');");
E_D("replace into `ecs_pay_log` values('42','13','52.50','0','0');");
E_D("replace into `ecs_pay_log` values('43','14','129.00','0','0');");
E_D("replace into `ecs_pay_log` values('44','15','132.50','0','0');");
E_D("replace into `ecs_pay_log` values('45','16','1302.50','0','0');");
E_D("replace into `ecs_pay_log` values('46','17','112.50','0','0');");
E_D("replace into `ecs_pay_log` values('47','18','132.50','0','0');");
E_D("replace into `ecs_pay_log` values('48','19','1309.00','0','0');");
E_D("replace into `ecs_pay_log` values('49','20','1302.50','0','0');");
E_D("replace into `ecs_pay_log` values('50','21','52.50','0','0');");
E_D("replace into `ecs_pay_log` values('51','22','132.50','0','0');");
E_D("replace into `ecs_pay_log` values('52','23','102.50','0','0');");
E_D("replace into `ecs_pay_log` values('53','24','133.84','0','0');");
E_D("replace into `ecs_pay_log` values('54','25','54.00','0','0');");
E_D("replace into `ecs_pay_log` values('55','26','49.00','0','0');");
E_D("replace into `ecs_pay_log` values('56','27','89.00','0','0');");
E_D("replace into `ecs_pay_log` values('57','28','79.80','0','0');");
E_D("replace into `ecs_pay_log` values('58','29','129.00','0','0');");
E_D("replace into `ecs_pay_log` values('59','30','139.00','0','0');");
E_D("replace into `ecs_pay_log` values('60','31','109.00','0','0');");
E_D("replace into `ecs_pay_log` values('61','32','82.50','0','0');");
E_D("replace into `ecs_pay_log` values('62','33','129.00','0','0');");
E_D("replace into `ecs_pay_log` values('63','34','129.00','0','0');");
E_D("replace into `ecs_pay_log` values('64','35','89.00','0','0');");
E_D("replace into `ecs_pay_log` values('65','36','1299.00','0','0');");
E_D("replace into `ecs_pay_log` values('66','37','89.90','0','0');");
E_D("replace into `ecs_pay_log` values('67','38','79.00','0','0');");
E_D("replace into `ecs_pay_log` values('68','39','1470.50','0','0');");
E_D("replace into `ecs_pay_log` values('69','40','265.37','0','0');");
E_D("replace into `ecs_pay_log` values('70','41','246420.00','0','0');");
E_D("replace into `ecs_pay_log` values('71','42','342.00','0','0');");
E_D("replace into `ecs_pay_log` values('72','43','2127.27','0','0');");
E_D("replace into `ecs_pay_log` values('73','44','299.00','0','0');");
E_D("replace into `ecs_pay_log` values('74','45','99.00','0','0');");
E_D("replace into `ecs_pay_log` values('75','46','397.00','0','0');");

require("../../inc/footer.php");
?>