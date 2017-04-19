<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewslog`;");
E_C("CREATE TABLE `phome_enewslog` (
  `loginid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `logintime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `loginip` varchar(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(30) NOT NULL DEFAULT '',
  `loginauth` tinyint(1) NOT NULL DEFAULT '0',
  `ipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`loginid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewslog` values('1','adm1n','2017-04-05 11:27:33','::1','1','','0','55955');");
E_D("replace into `phome_enewslog` values('2','adm1n','2017-04-05 11:38:25','127.0.0.1','1','','0','56767');");
E_D("replace into `phome_enewslog` values('3','adm1n','2017-04-05 13:47:14','::1','1','','0','59282');");
E_D("replace into `phome_enewslog` values('4','adm1n','2017-04-05 13:55:23','::1','1','','0','60265');");
E_D("replace into `phome_enewslog` values('5','adm1n','2017-04-05 13:59:53','::1','1','','0','60701');");
E_D("replace into `phome_enewslog` values('6','adm1n','2017-04-05 20:49:52','::1','0','','0','50247');");
E_D("replace into `phome_enewslog` values('7','adm1n','2017-04-05 20:50:52','::1','1','','0','50282');");
E_D("replace into `phome_enewslog` values('8','adm1n','2017-04-05 20:52:25','::1','1','','0','50400');");
E_D("replace into `phome_enewslog` values('9','adm1n','2017-04-05 21:36:07','::1','1','','0','52695');");
E_D("replace into `phome_enewslog` values('10','hucan','2017-04-07 10:47:11','::1','0','','0','60919');");
E_D("replace into `phome_enewslog` values('11','hucan','2017-04-07 10:47:34','::1','0','','0','60942');");
E_D("replace into `phome_enewslog` values('12','adm1n','2017-04-07 10:58:24','::1','1','','0','61780');");
E_D("replace into `phome_enewslog` values('13','hucan','2017-04-08 15:25:05','::1','0','','0','56042');");
E_D("replace into `phome_enewslog` values('14','adm1n','2017-04-08 15:25:18','::1','1','','0','56051');");
E_D("replace into `phome_enewslog` values('15','adm1n','2017-04-09 09:07:08','::1','1','','0','53513');");
E_D("replace into `phome_enewslog` values('16','adm1n','2017-04-10 10:06:26','::1','1','','0','53133');");
E_D("replace into `phome_enewslog` values('17','adm1n','2017-04-10 15:04:29','::1','1','','0','60323');");
E_D("replace into `phome_enewslog` values('18','adm1n','2017-04-11 08:49:27','::1','1','','0','53461');");
E_D("replace into `phome_enewslog` values('19','adm1n','2017-04-12 08:07:16','::1','1','','0','55621');");
E_D("replace into `phome_enewslog` values('20','adm1n','2017-04-13 10:46:18','::1','1','','0','63258');");
E_D("replace into `phome_enewslog` values('21','adm1n','2017-04-14 08:59:30','::1','1','','0','59422');");
E_D("replace into `phome_enewslog` values('22','adm1n','2017-04-18 13:42:41','::1','1','','0','57011');");
E_D("replace into `phome_enewslog` values('23','adm1n','2017-04-18 15:44:09','::1','1','','0','61928');");
E_D("replace into `phome_enewslog` values('24','adm1n','2017-04-18 21:06:44','::1','1','','0','54068');");

@include("../../inc/footer.php");
?>