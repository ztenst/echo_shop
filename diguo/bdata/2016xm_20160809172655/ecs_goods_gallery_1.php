<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_gallery`;");
E_C("CREATE TABLE `ecs_goods_gallery` (
  `img_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `img_url` varchar(255) NOT NULL DEFAULT '',
  `img_desc` varchar(255) NOT NULL DEFAULT '',
  `thumb_url` varchar(255) NOT NULL DEFAULT '',
  `img_original` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`img_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=123 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_gallery` values('53','46','images/201507/goods_img/46_P_1437092278066.jpg','','images/201507/thumb_img/46_thumb_P_1437092278473.jpg','images/201507/source_img/46_P_1437092278010.jpg');");
E_D("replace into `ecs_goods_gallery` values('38','31','images/201507/goods_img/31_P_1437075539094.jpg','','images/201507/thumb_img/31_thumb_P_1437075539421.jpg','images/201507/source_img/31_P_1437075539906.jpg');");
E_D("replace into `ecs_goods_gallery` values('39','32','images/201507/goods_img/32_P_1437075765944.jpg','','images/201507/thumb_img/32_thumb_P_1437075765465.jpg','images/201507/source_img/32_P_1437075765079.jpg');");
E_D("replace into `ecs_goods_gallery` values('40','33','images/201507/goods_img/33_P_1437075865227.jpg','','images/201507/thumb_img/33_thumb_P_1437075865237.jpg','images/201507/source_img/33_P_1437075865884.jpg');");
E_D("replace into `ecs_goods_gallery` values('41','34','images/201507/goods_img/34_P_1437076036621.jpg','','images/201507/thumb_img/34_thumb_P_1437076036805.jpg','images/201507/source_img/34_P_1437076036376.jpg');");
E_D("replace into `ecs_goods_gallery` values('42','35','images/201507/goods_img/35_P_1437081702366.jpg','','images/201507/thumb_img/35_thumb_P_1437081702651.jpg','images/201507/source_img/35_P_1437081702899.jpg');");
E_D("replace into `ecs_goods_gallery` values('43','36','images/201507/goods_img/36_P_1437082145143.jpg','','images/201507/thumb_img/36_thumb_P_1437082145850.jpg','images/201507/source_img/36_P_1437082145148.jpg');");
E_D("replace into `ecs_goods_gallery` values('44','37','images/201507/goods_img/37_P_1437082214509.jpg','','images/201507/thumb_img/37_thumb_P_1437082214988.jpg','images/201507/source_img/37_P_1437082214538.jpg');");
E_D("replace into `ecs_goods_gallery` values('45','38','images/201507/goods_img/38_P_1437082667902.jpg','','images/201507/thumb_img/38_thumb_P_1437082667724.jpg','images/201507/source_img/38_P_1437082667957.jpg');");
E_D("replace into `ecs_goods_gallery` values('46','39','images/201507/goods_img/39_P_1437082747827.jpg','','images/201507/thumb_img/39_thumb_P_1437082747037.jpg','images/201507/source_img/39_P_1437082747506.jpg');");
E_D("replace into `ecs_goods_gallery` values('47','40','images/201507/goods_img/40_P_1437082798936.jpg','','images/201507/thumb_img/40_thumb_P_1437082798602.jpg','images/201507/source_img/40_P_1437082798751.jpg');");
E_D("replace into `ecs_goods_gallery` values('48','41','images/201507/goods_img/41_P_1437082849358.jpg','','images/201507/thumb_img/41_thumb_P_1437082849448.jpg','images/201507/source_img/41_P_1437082849433.jpg');");
E_D("replace into `ecs_goods_gallery` values('49','42','images/201507/goods_img/42_P_1437082936955.jpg','','images/201507/thumb_img/42_thumb_P_1437082936854.jpg','images/201507/source_img/42_P_1437082936981.jpg');");
E_D("replace into `ecs_goods_gallery` values('50','43','images/201507/goods_img/43_P_1437091900195.jpg','','images/201507/thumb_img/43_thumb_P_1437091900030.jpg','images/201507/source_img/43_P_1437091900687.jpg');");
E_D("replace into `ecs_goods_gallery` values('51','44','images/201507/goods_img/44_P_1437092148904.jpg','','images/201507/thumb_img/44_thumb_P_1437092148467.jpg','images/201507/source_img/44_P_1437092148962.jpg');");
E_D("replace into `ecs_goods_gallery` values('52','45','images/201507/goods_img/45_P_1437092199657.jpg','','images/201507/thumb_img/45_thumb_P_1437092199896.jpg','images/201507/source_img/45_P_1437092199809.jpg');");
E_D("replace into `ecs_goods_gallery` values('37','30','images/201507/goods_img/30_P_1437075007961.jpg','','images/201507/thumb_img/30_thumb_P_1437075007298.jpg','images/201507/source_img/30_P_1437075007281.jpg');");
E_D("replace into `ecs_goods_gallery` values('36','29','images/201507/goods_img/29_P_1437074933206.jpg','','images/201507/thumb_img/29_thumb_P_1437074933782.jpg','images/201507/source_img/29_P_1437074933560.jpg');");
E_D("replace into `ecs_goods_gallery` values('35','28','images/201507/goods_img/28_P_1437074792937.jpg','','images/201507/thumb_img/28_thumb_P_1437074792079.jpg','images/201507/source_img/28_P_1437074792599.jpg');");
E_D("replace into `ecs_goods_gallery` values('34','27','images/201507/goods_img/27_P_1437074702951.jpg','','images/201507/thumb_img/27_thumb_P_1437074702931.jpg','images/201507/source_img/27_P_1437074702620.jpg');");
E_D("replace into `ecs_goods_gallery` values('33','27','images/201507/goods_img/27_P_1437074010553.jpg','','images/201507/thumb_img/27_thumb_P_1437074010140.jpg','images/201507/source_img/27_P_1437074010780.jpg');");
E_D("replace into `ecs_goods_gallery` values('54','47','images/201508/goods_img/47_P_1439331077456.jpg','','images/201508/thumb_img/47_thumb_P_1439331077895.jpg','images/201508/source_img/47_P_1439331077302.jpg');");
E_D("replace into `ecs_goods_gallery` values('55','53','images/201508/goods_img/53_P_1439511514491.jpg','','images/201508/thumb_img/53_thumb_P_1439511514984.jpg','images/201508/source_img/53_P_1439511514441.jpg');");
E_D("replace into `ecs_goods_gallery` values('56','54','images/201508/goods_img/54_P_1439511600464.jpg','','images/201508/thumb_img/54_thumb_P_1439511600402.jpg','images/201508/source_img/54_P_1439511600835.jpg');");
E_D("replace into `ecs_goods_gallery` values('57','55','images/201508/goods_img/55_P_1439511725475.jpg','','images/201508/thumb_img/55_thumb_P_1439511725800.jpg','images/201508/source_img/55_P_1439511725177.jpg');");
E_D("replace into `ecs_goods_gallery` values('58','27','images/201508/goods_img/27_P_1440636386428.jpg','','images/201508/thumb_img/27_thumb_P_1440636386334.jpg','images/201508/source_img/27_P_1440636386348.jpg');");
E_D("replace into `ecs_goods_gallery` values('59','27','images/201508/goods_img/27_P_1440636396953.png','','images/201508/thumb_img/27_thumb_P_1440636396876.jpg','images/201508/source_img/27_P_1440636396708.png');");
E_D("replace into `ecs_goods_gallery` values('60','27','images/201508/goods_img/27_P_1440636492199.jpg','','images/201508/thumb_img/27_thumb_P_1440636492790.jpg','images/201508/source_img/27_P_1440636492732.jpg');");
E_D("replace into `ecs_goods_gallery` values('110','95','images/201509/goods_img/95_P_1441738495691.png','','images/201509/thumb_img/95_thumb_P_1441738495450.jpg','images/201509/source_img/95_P_1441738495871.png');");
E_D("replace into `ecs_goods_gallery` values('62','56','images/201508/goods_img/56_P_1440717641995.png','','images/201508/thumb_img/56_thumb_P_1440717641728.jpg','images/201508/source_img/56_P_1440717641227.png');");
E_D("replace into `ecs_goods_gallery` values('63','57','images/201508/goods_img/57_P_1440717888340.jpg','','images/201508/thumb_img/57_thumb_P_1440717888922.jpg','images/201508/source_img/57_P_1440717888289.jpg');");
E_D("replace into `ecs_goods_gallery` values('64','58','images/201508/goods_img/58_P_1440725448086.jpg','','images/201508/thumb_img/58_thumb_P_1440725448884.jpg','images/201508/source_img/58_P_1440725448044.jpg');");
E_D("replace into `ecs_goods_gallery` values('65','59','images/201508/goods_img/59_P_1440983020331.jpg','','images/201508/thumb_img/59_thumb_P_1440983020113.jpg','images/201508/source_img/59_P_1440983020449.jpg');");
E_D("replace into `ecs_goods_gallery` values('66','61','images/201508/goods_img/61_P_1440983075194.jpg','','images/201508/thumb_img/61_thumb_P_1440983075257.jpg','images/201508/source_img/61_P_1440983075683.jpg');");
E_D("replace into `ecs_goods_gallery` values('67','60','images/201508/goods_img/60_P_1440983103335.jpg','','images/201508/thumb_img/60_thumb_P_1440983103759.jpg','images/201508/source_img/60_P_1440983103825.jpg');");
E_D("replace into `ecs_goods_gallery` values('68','62','images/201508/goods_img/62_P_1440983163360.jpg','','images/201508/thumb_img/62_thumb_P_1440983163430.jpg','images/201508/source_img/62_P_1440983163883.jpg');");
E_D("replace into `ecs_goods_gallery` values('69','63','images/201508/goods_img/63_P_1440983188388.jpg','','images/201508/thumb_img/63_thumb_P_1440983188630.jpg','images/201508/source_img/63_P_1440983188664.jpg');");
E_D("replace into `ecs_goods_gallery` values('70','64','images/201508/goods_img/64_P_1440983246654.jpg','','images/201508/thumb_img/64_thumb_P_1440983246436.jpg','images/201508/source_img/64_P_1440983246818.jpg');");
E_D("replace into `ecs_goods_gallery` values('71','65','images/201508/goods_img/65_P_1440983430245.png','','images/201508/thumb_img/65_thumb_P_1440983430750.jpg','images/201508/source_img/65_P_1440983430130.png');");
E_D("replace into `ecs_goods_gallery` values('72','66','images/201508/goods_img/66_P_1440983490499.png','','images/201508/thumb_img/66_thumb_P_1440983490179.jpg','images/201508/source_img/66_P_1440983490681.png');");
E_D("replace into `ecs_goods_gallery` values('73','67','images/201508/goods_img/67_P_1440983638515.png','','images/201508/thumb_img/67_thumb_P_1440983638347.jpg','images/201508/source_img/67_P_1440983638706.png');");
E_D("replace into `ecs_goods_gallery` values('74','68','images/201508/goods_img/68_P_1440983695525.jpg','','images/201508/thumb_img/68_thumb_P_1440983695392.jpg','images/201508/source_img/68_P_1440983695874.jpg');");
E_D("replace into `ecs_goods_gallery` values('75','69','images/201508/goods_img/69_P_1440983751707.jpg','','images/201508/thumb_img/69_thumb_P_1440983751247.jpg','images/201508/source_img/69_P_1440983751360.jpg');");
E_D("replace into `ecs_goods_gallery` values('76','69','images/201508/goods_img/69_P_1440983751268.jpg','','images/201508/thumb_img/69_thumb_P_1440983751851.jpg','images/201508/source_img/69_P_1440983751038.jpg');");
E_D("replace into `ecs_goods_gallery` values('77','69','images/201508/goods_img/69_P_1440983751855.jpg','','images/201508/thumb_img/69_thumb_P_1440983751517.jpg','images/201508/source_img/69_P_1440983751470.jpg');");
E_D("replace into `ecs_goods_gallery` values('78','70','images/201508/goods_img/70_P_1440983810457.jpg','','images/201508/thumb_img/70_thumb_P_1440983810977.jpg','images/201508/source_img/70_P_1440983810155.jpg');");
E_D("replace into `ecs_goods_gallery` values('79','71','images/201508/goods_img/71_P_1440983839013.jpg','','images/201508/thumb_img/71_thumb_P_1440983839171.jpg','images/201508/source_img/71_P_1440983839575.jpg');");
E_D("replace into `ecs_goods_gallery` values('80','72','images/201508/goods_img/72_P_1440983887937.jpg','','images/201508/thumb_img/72_thumb_P_1440983887273.jpg','images/201508/source_img/72_P_1440983887487.jpg');");
E_D("replace into `ecs_goods_gallery` values('81','73','images/201508/goods_img/73_P_1440983937493.jpg','','images/201508/thumb_img/73_thumb_P_1440983937145.jpg','images/201508/source_img/73_P_1440983937958.jpg');");
E_D("replace into `ecs_goods_gallery` values('82','74','images/201508/goods_img/74_P_1440983959915.jpg','','images/201508/thumb_img/74_thumb_P_1440983959089.jpg','images/201508/source_img/74_P_1440983959660.jpg');");
E_D("replace into `ecs_goods_gallery` values('83','75','images/201508/goods_img/75_P_1440984011204.jpg','','images/201508/thumb_img/75_thumb_P_1440984011032.jpg','images/201508/source_img/75_P_1440984011552.jpg');");
E_D("replace into `ecs_goods_gallery` values('84','76','images/201508/goods_img/76_P_1440984280952.png','','images/201508/thumb_img/76_thumb_P_1440984280227.jpg','images/201508/source_img/76_P_1440984280400.png');");
E_D("replace into `ecs_goods_gallery` values('85','77','images/201508/goods_img/77_P_1440984390419.png','','images/201508/thumb_img/77_thumb_P_1440984390019.jpg','images/201508/source_img/77_P_1440984390701.png');");
E_D("replace into `ecs_goods_gallery` values('86','78','images/201509/goods_img/78_P_1441050387993.png','','images/201509/thumb_img/78_thumb_P_1441050387910.jpg','images/201509/source_img/78_P_1441050387023.png');");
E_D("replace into `ecs_goods_gallery` values('87','79','images/201509/goods_img/79_P_1441050485571.png','','images/201509/thumb_img/79_thumb_P_1441050485861.jpg','images/201509/source_img/79_P_1441050485884.png');");
E_D("replace into `ecs_goods_gallery` values('88','80','images/201509/goods_img/80_P_1441050558370.png','','images/201509/thumb_img/80_thumb_P_1441050558679.jpg','images/201509/source_img/80_P_1441050558797.png');");
E_D("replace into `ecs_goods_gallery` values('89','81','images/201509/goods_img/81_P_1441050609354.png','','images/201509/thumb_img/81_thumb_P_1441050609396.jpg','images/201509/source_img/81_P_1441050609935.png');");
E_D("replace into `ecs_goods_gallery` values('90','82','images/201509/goods_img/82_P_1441050801811.jpg','','images/201509/thumb_img/82_thumb_P_1441050801396.jpg','images/201509/source_img/82_P_1441050801454.jpg');");
E_D("replace into `ecs_goods_gallery` values('91','83','images/201509/goods_img/83_P_1441052403904.png','','images/201509/thumb_img/83_thumb_P_1441052403926.jpg','images/201509/source_img/83_P_1441052403124.png');");
E_D("replace into `ecs_goods_gallery` values('92','84','images/201509/goods_img/84_P_1441056023451.jpg','','images/201509/thumb_img/84_thumb_P_1441056023162.jpg','images/201509/source_img/84_P_1441056023607.jpg');");
E_D("replace into `ecs_goods_gallery` values('93','85','images/201509/goods_img/85_P_1441056112035.jpg','','images/201509/thumb_img/85_thumb_P_1441056112906.jpg','images/201509/source_img/85_P_1441056112504.jpg');");
E_D("replace into `ecs_goods_gallery` values('94','86','images/201509/goods_img/86_P_1441056239799.jpg','','images/201509/thumb_img/86_thumb_P_1441056239192.jpg','images/201509/source_img/86_P_1441056239437.jpg');");
E_D("replace into `ecs_goods_gallery` values('95','87','images/201509/goods_img/87_P_1441056303446.jpg','','images/201509/thumb_img/87_thumb_P_1441056303989.jpg','images/201509/source_img/87_P_1441056303788.jpg');");
E_D("replace into `ecs_goods_gallery` values('96','88','images/201509/goods_img/88_P_1441056484153.jpg','','images/201509/thumb_img/88_thumb_P_1441056484641.jpg','images/201509/source_img/88_P_1441056484525.jpg');");
E_D("replace into `ecs_goods_gallery` values('97','89','images/201509/goods_img/89_P_1441056597776.jpg','','images/201509/thumb_img/89_thumb_P_1441056597458.jpg','images/201509/source_img/89_P_1441056597511.jpg');");
E_D("replace into `ecs_goods_gallery` values('98','90','images/201509/goods_img/90_P_1441056659643.jpg','','images/201509/thumb_img/90_thumb_P_1441056659969.jpg','images/201509/source_img/90_P_1441056659528.jpg');");
E_D("replace into `ecs_goods_gallery` values('99','91','images/201509/goods_img/91_P_1441056702062.jpg','','images/201509/thumb_img/91_thumb_P_1441056702481.jpg','images/201509/source_img/91_P_1441056702311.jpg');");
E_D("replace into `ecs_goods_gallery` values('100','92','images/201509/goods_img/92_P_1441056728536.jpg','','images/201509/thumb_img/92_thumb_P_1441056728093.jpg','images/201509/source_img/92_P_1441056728693.jpg');");
E_D("replace into `ecs_goods_gallery` values('101','93','images/201509/goods_img/93_P_1441056767053.jpg','','images/201509/thumb_img/93_thumb_P_1441056767377.jpg','images/201509/source_img/93_P_1441056767969.jpg');");
E_D("replace into `ecs_goods_gallery` values('102','94','images/201509/goods_img/94_P_1441056891966.jpg','','images/201509/thumb_img/94_thumb_P_1441056891641.jpg','images/201509/source_img/94_P_1441056891627.jpg');");
E_D("replace into `ecs_goods_gallery` values('103','55','images/201509/goods_img/55_P_1441498030235.jpg','','images/201509/thumb_img/55_thumb_P_1441498030464.jpg','images/201509/source_img/55_P_1441498030729.jpg');");
E_D("replace into `ecs_goods_gallery` values('104','55','images/201509/goods_img/55_P_1441498030320.jpg','','images/201509/thumb_img/55_thumb_P_1441498030567.jpg','images/201509/source_img/55_P_1441498030051.jpg');");
E_D("replace into `ecs_goods_gallery` values('105','55','images/201509/goods_img/55_P_1441498031944.jpg','','images/201509/thumb_img/55_thumb_P_1441498031389.jpg','images/201509/source_img/55_P_1441498031853.jpg');");
E_D("replace into `ecs_goods_gallery` values('106','55','images/201509/goods_img/55_P_1441498031553.png','','images/201509/thumb_img/55_thumb_P_1441498031661.jpg','images/201509/source_img/55_P_1441498031036.png');");
E_D("replace into `ecs_goods_gallery` values('107','30','images/201509/goods_img/30_P_1441661907785.png','','images/201509/thumb_img/30_thumb_P_1441661907216.jpg','images/201509/source_img/30_P_1441661907596.png');");
E_D("replace into `ecs_goods_gallery` values('108','30','images/201509/goods_img/30_P_1441661907757.png','','images/201509/thumb_img/30_thumb_P_1441661907011.jpg','images/201509/source_img/30_P_1441661907757.png');");
E_D("replace into `ecs_goods_gallery` values('109','30','images/201509/goods_img/30_P_1441661908217.png','','images/201509/thumb_img/30_thumb_P_1441661908459.jpg','images/201509/source_img/30_P_1441661908909.png');");
E_D("replace into `ecs_goods_gallery` values('111','96','images/201509/goods_img/96_P_1441738537411.png','','images/201509/thumb_img/96_thumb_P_1441738537288.jpg','images/201509/source_img/96_P_1441738537805.png');");
E_D("replace into `ecs_goods_gallery` values('112','97','images/201509/goods_img/97_P_1441738581693.png','','images/201509/thumb_img/97_thumb_P_1441738581210.jpg','images/201509/source_img/97_P_1441738581386.png');");
E_D("replace into `ecs_goods_gallery` values('113','98','images/201509/goods_img/98_P_1441738620481.png','','images/201509/thumb_img/98_thumb_P_1441738620390.jpg','images/201509/source_img/98_P_1441738620047.png');");
E_D("replace into `ecs_goods_gallery` values('114','99','images/201509/goods_img/99_P_1441738667644.png','','images/201509/thumb_img/99_thumb_P_1441738667068.jpg','images/201509/source_img/99_P_1441738667880.png');");
E_D("replace into `ecs_goods_gallery` values('115','100','images/201509/goods_img/100_P_1441738698187.png','','images/201509/thumb_img/100_thumb_P_1441738698771.jpg','images/201509/source_img/100_P_1441738698582.png');");
E_D("replace into `ecs_goods_gallery` values('116','101','images/201509/goods_img/101_P_1441738730510.png','','images/201509/thumb_img/101_thumb_P_1441738730487.jpg','images/201509/source_img/101_P_1441738730994.png');");
E_D("replace into `ecs_goods_gallery` values('117','102','images/201509/goods_img/102_P_1441738765274.png','','images/201509/thumb_img/102_thumb_P_1441738765170.jpg','images/201509/source_img/102_P_1441738765702.png');");
E_D("replace into `ecs_goods_gallery` values('118','103','images/201509/goods_img/103_P_1441738795859.png','','images/201509/thumb_img/103_thumb_P_1441738795088.jpg','images/201509/source_img/103_P_1441738795138.png');");
E_D("replace into `ecs_goods_gallery` values('120','38','images/201509/goods_img/38_P_1442179091821.png','','images/201509/thumb_img/38_thumb_P_1442179091550.jpg','images/201509/source_img/38_P_1442179091563.png');");
E_D("replace into `ecs_goods_gallery` values('121','38','images/201509/goods_img/38_P_1442179091715.png','','images/201509/thumb_img/38_thumb_P_1442179091581.jpg','images/201509/source_img/38_P_1442179091565.png');");
E_D("replace into `ecs_goods_gallery` values('122','38','images/201509/goods_img/38_P_1442179091449.png','','images/201509/thumb_img/38_thumb_P_1442179091766.jpg','images/201509/source_img/38_P_1442179091088.png');");

require("../../inc/footer.php");
?>