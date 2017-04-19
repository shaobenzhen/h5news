<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_news_index`;");
E_C("CREATE TABLE `phome_ecms_news_index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `checked` (`checked`),
  KEY `newstime` (`newstime`),
  KEY `truetime` (`truetime`,`id`),
  KEY `havehtml` (`classid`,`truetime`,`havehtml`,`checked`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=287 DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_news_index` values('263','20','1','1492136060','1492136217','1492136217','1');");
E_D("replace into `phome_ecms_news_index` values('270','23','1','1492137447','1492137545','1492137545','1');");
E_D("replace into `phome_ecms_news_index` values('269','23','1','1492137066','1492137444','1492137444','1');");
E_D("replace into `phome_ecms_news_index` values('268','23','1','1492136962','1492137062','1492137062','1');");
E_D("replace into `phome_ecms_news_index` values('267','22','1','1492136692','1492136938','1492136938','1');");
E_D("replace into `phome_ecms_news_index` values('266','22','1','1492136466','1492136688','1492136688','1');");
E_D("replace into `phome_ecms_news_index` values('262','20','1','1492135829','1492136057','1492136057','1');");
E_D("replace into `phome_ecms_news_index` values('261','20','1','1492135626','1492135826','1492135826','1');");
E_D("replace into `phome_ecms_news_index` values('260','20','1','1492135506','1492135622','1492135622','1');");
E_D("replace into `phome_ecms_news_index` values('265','22','1','1492136352','1492136462','1492136462','1');");
E_D("replace into `phome_ecms_news_index` values('256','19','1','1492134604','1492134807','1492134807','1');");
E_D("replace into `phome_ecms_news_index` values('259','19','1','1492135115','1492135493','1492135493','1');");
E_D("replace into `phome_ecms_news_index` values('255','19','1','1492134411','1492134600','1492134600','1');");
E_D("replace into `phome_ecms_news_index` values('250','17','1','1492133119','1492133223','1492133223','1');");
E_D("replace into `phome_ecms_news_index` values('249','17','1','1492133025','1492133115','1492133115','1');");
E_D("replace into `phome_ecms_news_index` values('244','14','1','1492087956','1492088212','1492088212','1');");
E_D("replace into `phome_ecms_news_index` values('243','14','1','1492087796','1492087952','1492087952','1');");
E_D("replace into `phome_ecms_news_index` values('238','12','1','1492080606','1492080930','1492080930','1');");
E_D("replace into `phome_ecms_news_index` values('237','12','1','1492080408','1492080603','1492080603','1');");
E_D("replace into `phome_ecms_news_index` values('236','12','1','1492080211','1492080404','1492080404','1');");
E_D("replace into `phome_ecms_news_index` values('258','19','1','1492134930','1492135112','1492135112','1');");
E_D("replace into `phome_ecms_news_index` values('264','22','1','1492136265','1492136349','1492136349','1');");
E_D("replace into `phome_ecms_news_index` values('254','18','1','1492134131','1492134311','1492134311','1');");
E_D("replace into `phome_ecms_news_index` values('248','17','1','1492132701','1492132982','1492132982','1');");
E_D("replace into `phome_ecms_news_index` values('242','14','1','1492087385','1492087793','1492087793','1');");
E_D("replace into `phome_ecms_news_index` values('235','12','1','1492079910','1492080207','1492080207','1');");
E_D("replace into `phome_ecms_news_index` values('27','13','1','1484450433','1452828033','1491710005','1');");
E_D("replace into `phome_ecms_news_index` values('232','12','1','1492078831','1492079155','1492079155','1');");
E_D("replace into `phome_ecms_news_index` values('29','13','1','1489559366','1452828405','1491709970','1');");
E_D("replace into `phome_ecms_news_index` values('231','12','1','1492078550','1492078828','1492078828','1');");
E_D("replace into `phome_ecms_news_index` values('228','11','1','1492058761','1492060157','1492060157','1');");
E_D("replace into `phome_ecms_news_index` values('32','18','1','1491374576','1452828902','1491710587','1');");
E_D("replace into `phome_ecms_news_index` values('33','17','1','1491374311','1452828907','1491710336','1');");
E_D("replace into `phome_ecms_news_index` values('230','11','1','1492061401','1492078310','1492078310','1');");
E_D("replace into `phome_ecms_news_index` values('271','23','1','1492137548','1492137699','1492137699','1');");
E_D("replace into `phome_ecms_news_index` values('227','11','1','1492058545','1492058756','1492058756','1');");
E_D("replace into `phome_ecms_news_index` values('37','18','1','1491374538','1452829420','1491710553','1');");
E_D("replace into `phome_ecms_news_index` values('229','11','1','1492060160','1492061397','1492061397','1');");
E_D("replace into `phome_ecms_news_index` values('39','17','1','1491374257','1452829435','1491710304','1');");
E_D("replace into `phome_ecms_news_index` values('40','18','1','1491374462','1452829465','1491710480','1');");
E_D("replace into `phome_ecms_news_index` values('226','11','1','1492002921','1492003456','1492003456','1');");
E_D("replace into `phome_ecms_news_index` values('257','19','1','1492134810','1492134926','1492134926','1');");
E_D("replace into `phome_ecms_news_index` values('247','17','1','1492132582','1492132697','1492132994','1');");
E_D("replace into `phome_ecms_news_index` values('253','18','1','1492133616','1492134127','1492134127','1');");
E_D("replace into `phome_ecms_news_index` values('234','12','1','1492079687','1492079906','1492079906','1');");
E_D("replace into `phome_ecms_news_index` values('225','11','1','1492002642','1492002918','1492002918','1');");
E_D("replace into `phome_ecms_news_index` values('47','19','1','1491374716','1452831181','1491710739','1');");
E_D("replace into `phome_ecms_news_index` values('224','11','1','1492002478','1492002638','1492002638','1');");
E_D("replace into `phome_ecms_news_index` values('49','22','1','1491375147','1452831469','1491711182','1');");
E_D("replace into `phome_ecms_news_index` values('50','20','1','1491374968','1452831556','1491710952','1');");
E_D("replace into `phome_ecms_news_index` values('51','22','1','1491375120','1452831562','1491711149','1');");
E_D("replace into `phome_ecms_news_index` values('52','19','1','1491374695','1452831571','1491710708','1');");
E_D("replace into `phome_ecms_news_index` values('219','10','1','1492001767','1492001877','1492001877','1');");
E_D("replace into `phome_ecms_news_index` values('54','22','1','1491375083','1452832025','1491711100','1');");
E_D("replace into `phome_ecms_news_index` values('218','10','1','1492001611','1492001764','1492001764','1');");
E_D("replace into `phome_ecms_news_index` values('217','10','1','1492001482','1492001608','1492001608','1');");
E_D("replace into `phome_ecms_news_index` values('57','23','1','1491375289','1452833507','1491711394','1');");
E_D("replace into `phome_ecms_news_index` values('216','10','1','1492001065','1492001274','1492001274','1');");
E_D("replace into `phome_ecms_news_index` values('213','9','1','1492000321','1492000466','1492000521','1');");
E_D("replace into `phome_ecms_news_index` values('215','10','1','1492000974','1492001062','1492001062','1');");
E_D("replace into `phome_ecms_news_index` values('188','12','1','1491378539','1491378979','1491709698','1');");
E_D("replace into `phome_ecms_news_index` values('252','18','1','1492133489','1492133613','1492133613','1');");
E_D("replace into `phome_ecms_news_index` values('212','9','1','1492000005','1492000318','1492000318','1');");
E_D("replace into `phome_ecms_news_index` values('187','11','1','1491378453','1491378516','1491709564','1');");
E_D("replace into `phome_ecms_news_index` values('65','19','1','1491374672','1452834032','1491710679','1');");
E_D("replace into `phome_ecms_news_index` values('186','11','1','1491378403','1491378450','1491709606','1');");
E_D("replace into `phome_ecms_news_index` values('184','10','1','1491378123','1491378199','1491709520','1');");
E_D("replace into `phome_ecms_news_index` values('185','10','1','1491378202','1491378315','1491709488','1');");
E_D("replace into `phome_ecms_news_index` values('211','9','1','1491999485','1492000002','1492000002','1');");
E_D("replace into `phome_ecms_news_index` values('214','9','1','1492000530','1492000768','1492000768','1');");
E_D("replace into `phome_ecms_news_index` values('183','9','1','1491377971','1491378070','1491707442','1');");
E_D("replace into `phome_ecms_news_index` values('210','9','1','1491999292','1491999482','1491999482','1');");
E_D("replace into `phome_ecms_news_index` values('182','9','1','1491377856','1491377964','1491707471','1');");
E_D("replace into `phome_ecms_news_index` values('209','9','1','1491999156','1491999289','1491999289','1');");
E_D("replace into `phome_ecms_news_index` values('208','9','1','1491998830','1491999153','1491999153','1');");
E_D("replace into `phome_ecms_news_index` values('202','8','1','1491997313','1491997635','1491997635','1');");
E_D("replace into `phome_ecms_news_index` values('201','8','1','1491997170','1491997310','1491997310','1');");
E_D("replace into `phome_ecms_news_index` values('200','8','1','1491990703','1491990970','1491996751','1');");
E_D("replace into `phome_ecms_news_index` values('199','8','1','1491990637','1491990700','1491996724','1');");
E_D("replace into `phome_ecms_news_index` values('207','9','1','1491998726','1491998827','1491998827','1');");
E_D("replace into `phome_ecms_news_index` values('206','8','1','1491998377','1491998555','1491998555','1');");
E_D("replace into `phome_ecms_news_index` values('205','8','1','1491998135','1491998374','1491998374','1');");
E_D("replace into `phome_ecms_news_index` values('198','2','1','1491989337','1491989461','1491989461','1');");
E_D("replace into `phome_ecms_news_index` values('197','2','1','1491989146','1491989333','1491989333','1');");
E_D("replace into `phome_ecms_news_index` values('196','2','1','1491988933','1491989108','1491989108','1');");
E_D("replace into `phome_ecms_news_index` values('195','2','1','1491988356','1491988930','1491988930','1');");
E_D("replace into `phome_ecms_news_index` values('194','2','1','1491988168','1491988353','1491988353','1');");
E_D("replace into `phome_ecms_news_index` values('193','2','1','1491987567','1491988126','1491988126','1');");
E_D("replace into `phome_ecms_news_index` values('192','2','1','1491986769','1491987564','1491987564','1');");
E_D("replace into `phome_ecms_news_index` values('190','9','0','1491400494','1491400494','1491400494','0');");
E_D("replace into `phome_ecms_news_index` values('204','8','1','1491997856','1491998132','1491998132','1');");
E_D("replace into `phome_ecms_news_index` values('203','8','1','1491997639','1491997853','1491997853','1');");
E_D("replace into `phome_ecms_news_index` values('246','17','1','1492132154','1492132579','1492132579','1');");
E_D("replace into `phome_ecms_news_index` values('241','14','1','1492087244','1492087382','1492087382','1');");
E_D("replace into `phome_ecms_news_index` values('240','13','1','1492081131','1492081297','1492081297','1');");
E_D("replace into `phome_ecms_news_index` values('96','13','1','1492237739','1452842084','1491709940','1');");
E_D("replace into `phome_ecms_news_index` values('97','14','1','1491374084','1452842097','1491710171','1');");
E_D("replace into `phome_ecms_news_index` values('98','13','1','1486276097','1452842099','1491709904','1');");
E_D("replace into `phome_ecms_news_index` values('99','14','1','1491374053','1452842102','1491710139','1');");
E_D("replace into `phome_ecms_news_index` values('100','13','1','1491373622','1452842104','1491709867','1');");
E_D("replace into `phome_ecms_news_index` values('101','14','1','1491374001','1452842107','1491710102','1');");
E_D("replace into `phome_ecms_news_index` values('102','14','1','1493965941','1452842112','1491710075','1');");
E_D("replace into `phome_ecms_news_index` values('103','13','1','1491373522','1452842114','1491709829','1');");
E_D("replace into `phome_ecms_news_index` values('104','13','1','1491373484','1452842119','1491709799','1');");
E_D("replace into `phome_ecms_news_index` values('105','13','1','1491373377','1452842124','1491709762','1');");
E_D("replace into `phome_ecms_news_index` values('106','14','1','1491460308','1452842125','1491710047','1');");
E_D("replace into `phome_ecms_news_index` values('251','18','1','1492133241','1492133486','1492133486','1');");
E_D("replace into `phome_ecms_news_index` values('245','14','1','1492088215','1492088396','1492088396','1');");
E_D("replace into `phome_ecms_news_index` values('239','13','1','1492080981','1492081127','1492081127','1');");
E_D("replace into `phome_ecms_news_index` values('233','12','1','1492079159','1492079684','1492079684','1');");
E_D("replace into `phome_ecms_news_index` values('111','17','1','1491374206','1452863789','1491710276','1');");
E_D("replace into `phome_ecms_news_index` values('112','18','1','1491374437','1452863817','1491710440','1');");
E_D("replace into `phome_ecms_news_index` values('113','19','1','1491374648','1452863952','1491710650','1');");
E_D("replace into `phome_ecms_news_index` values('114','20','1','1491374940','1452863975','1491710923','1');");
E_D("replace into `phome_ecms_news_index` values('115','20','1','1491374916','1452863984','1491710893','1');");
E_D("replace into `phome_ecms_news_index` values('116','22','1','1491375054','1452864031','1491711061','1');");
E_D("replace into `phome_ecms_news_index` values('117','19','1','1491374622','1452864041','1491710622','1');");
E_D("replace into `phome_ecms_news_index` values('118','20','1','1491374882','1452864088','1491710860','1');");
E_D("replace into `phome_ecms_news_index` values('223','11','1','1492002334','1492002474','1492002474','1');");
E_D("replace into `phome_ecms_news_index` values('222','10','1','1492002128','1492002238','1492002238','1');");
E_D("replace into `phome_ecms_news_index` values('221','10','1','1492002009','1492002125','1492002125','1');");
E_D("replace into `phome_ecms_news_index` values('220','10','1','1492001881','1492002006','1492002006','1');");
E_D("replace into `phome_ecms_news_index` values('123','20','1','1491374829','1452864151','1491710819','1');");
E_D("replace into `phome_ecms_news_index` values('124','20','1','1491374796','1452864173','1491710783','1');");
E_D("replace into `phome_ecms_news_index` values('125','22','1','1491375029','1452864203','1491711018','1');");
E_D("replace into `phome_ecms_news_index` values('126','18','1','1491374388','1452864278','1491710408','1');");
E_D("replace into `phome_ecms_news_index` values('127','17','1','1491374167','1452864349','1491710245','1');");
E_D("replace into `phome_ecms_news_index` values('128','22','1','1491374998','1452864459','1491710992','1');");
E_D("replace into `phome_ecms_news_index` values('129','18','1','1491374340','1452864565','1491710380','1');");
E_D("replace into `phome_ecms_news_index` values('130','17','1','1491374143','1452864583','1491710212','1');");
E_D("replace into `phome_ecms_news_index` values('131','23','1','1491375268','1452864645','1491711362','1');");
E_D("replace into `phome_ecms_news_index` values('132','24','1','1491375406','1452864660','1491711496','1');");
E_D("replace into `phome_ecms_news_index` values('133','23','1','1491375248','1452864663','1491711312','1');");
E_D("replace into `phome_ecms_news_index` values('134','24','1','1491375388','1452864668','1491711469','1');");
E_D("replace into `phome_ecms_news_index` values('135','23','1','1491375226','1452864669','1491711281','1');");
E_D("replace into `phome_ecms_news_index` values('136','24','1','1491375369','1452864676','1491711446','1');");
E_D("replace into `phome_ecms_news_index` values('137','23','1','1491375208','1452864684','1491711254','1');");
E_D("replace into `phome_ecms_news_index` values('138','24','1','1491375332','1452864701','1491711422','1');");
E_D("replace into `phome_ecms_news_index` values('189','12','1','1491378982','1491379313','1491709672','1');");
E_D("replace into `phome_ecms_news_index` values('140','16','1','1491375960','1452864763','1491712275','1');");
E_D("replace into `phome_ecms_news_index` values('141','16','1','1491375939','1452864780','1491712247','1');");
E_D("replace into `phome_ecms_news_index` values('142','15','1','1491375839','1452864782','1491712119','1');");
E_D("replace into `phome_ecms_news_index` values('143','21','1','1491376194','1452864783','1491712479','1');");
E_D("replace into `phome_ecms_news_index` values('144','16','1','1491375919','1452864789','1491712220','1');");
E_D("replace into `phome_ecms_news_index` values('145','15','1','1491375809','1452864792','1491712090','1');");
E_D("replace into `phome_ecms_news_index` values('146','15','1','1491375791','1452864797','1491712060','1');");
E_D("replace into `phome_ecms_news_index` values('147','16','1','1491375898','1452864803','1491712176','1');");
E_D("replace into `phome_ecms_news_index` values('148','21','1','1491376161','1452864814','1491712452','1');");
E_D("replace into `phome_ecms_news_index` values('149','16','1','1491375876','1452864817','1491712151','1');");
E_D("replace into `phome_ecms_news_index` values('150','15','1','1491375766','1452864819','1491712023','1');");
E_D("replace into `phome_ecms_news_index` values('181','8','1','1491377687','1491377813','1491707360','1');");
E_D("replace into `phome_ecms_news_index` values('152','21','1','1491376133','1452864848','1491712425','1');");
E_D("replace into `phome_ecms_news_index` values('153','21','1','1491376103','1452864960','1491712399','1');");
E_D("replace into `phome_ecms_news_index` values('154','21','1','1491376072','1452864968','1491712372','1');");
E_D("replace into `phome_ecms_news_index` values('180','8','1','1491377510','1491377684','1491707389','1');");
E_D("replace into `phome_ecms_news_index` values('179','2','1','1491377363','1491377497','1491636557','1');");
E_D("replace into `phome_ecms_news_index` values('157','15','1','1491375735','1452864986','1491711987','1');");
E_D("replace into `phome_ecms_news_index` values('158','15','1','1491375696','1452864999','1491711959','1');");
E_D("replace into `phome_ecms_news_index` values('159','21','1','1491376050','1452865026','1491712344','1');");
E_D("replace into `phome_ecms_news_index` values('160','15','1','1491375676','1452865058','1491711930','1');");
E_D("replace into `phome_ecms_news_index` values('161','15','1','1491375649','1452873325','1491711857','1');");
E_D("replace into `phome_ecms_news_index` values('178','2','1','1491377069','1491376860','1491636775','1');");
E_D("replace into `phome_ecms_news_index` values('177','2','1','1491376259','1491376694','1491707320','1');");
E_D("replace into `phome_ecms_news_index` values('164','15','1','1491375611','1452873550','1491711831','1');");
E_D("replace into `phome_ecms_news_index` values('165','21','1','1491376027','1452873584','1491712319','1');");
E_D("replace into `phome_ecms_news_index` values('166','15','1','1491375580','1452873613','1491711790','1');");
E_D("replace into `phome_ecms_news_index` values('167','15','1','1491375556','1452873656','1491711762','1');");
E_D("replace into `phome_ecms_news_index` values('168','15','1','1491375506','1452873682','1491711738','1');");
E_D("replace into `phome_ecms_news_index` values('169','29','1','1396412946','1459571386','1491368574','1');");
E_D("replace into `phome_ecms_news_index` values('172','32','1','1396413435','1459571913','1491368537','1');");
E_D("replace into `phome_ecms_news_index` values('175','35','1','1396413860','1459572304','1491368466','1');");
E_D("replace into `phome_ecms_news_index` values('176','36','1','1396413984','1459572416','1491368440','1');");
E_D("replace into `phome_ecms_news_index` values('272','23','1','1492137702','1492137839','1492137839','1');");
E_D("replace into `phome_ecms_news_index` values('273','24','1','1492137982','1492140412','1492140412','1');");
E_D("replace into `phome_ecms_news_index` values('274','24','1','1492140415','1492140648','1492140648','1');");
E_D("replace into `phome_ecms_news_index` values('275','24','1','1492140651','1492140849','1492140849','1');");
E_D("replace into `phome_ecms_news_index` values('276','24','1','1492140852','1492140938','1492140938','1');");
E_D("replace into `phome_ecms_news_index` values('277','24','1','1492140941','1492141099','1492141099','1');");
E_D("replace into `phome_ecms_news_index` values('278','24','1','1492141103','1492141616','1492141616','1');");
E_D("replace into `phome_ecms_news_index` values('279','16','1','1492141752','1492141869','1492141869','1');");
E_D("replace into `phome_ecms_news_index` values('280','16','1','1492141872','1492141964','1492141964','1');");
E_D("replace into `phome_ecms_news_index` values('281','16','1','1492141967','1492142077','1492142077','1');");
E_D("replace into `phome_ecms_news_index` values('282','16','1','1492142080','1492142174','1492142174','1');");
E_D("replace into `phome_ecms_news_index` values('283','16','1','1492142177','1492142366','1492142366','1');");
E_D("replace into `phome_ecms_news_index` values('284','21','1','1492142377','1492142626','1492142626','1');");
E_D("replace into `phome_ecms_news_index` values('285','21','1','1492142629','1492142738','1492142738','1');");
E_D("replace into `phome_ecms_news_index` values('286','21','1','1492142741','1492142848','1492142848','1');");

@include("../../inc/footer.php");
?>