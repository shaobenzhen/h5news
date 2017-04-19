<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsdolog`;");
E_C("CREATE TABLE `phome_enewsdolog` (
  `logid` bigint(20) NOT NULL AUTO_INCREMENT,
  `logip` varchar(20) NOT NULL DEFAULT '',
  `logtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `username` varchar(30) NOT NULL DEFAULT '',
  `enews` varchar(30) NOT NULL DEFAULT '',
  `doing` varchar(255) NOT NULL DEFAULT '',
  `pubid` bigint(16) unsigned NOT NULL DEFAULT '0',
  `ipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`logid`),
  KEY `pubid` (`pubid`)
) ENGINE=MyISAM AUTO_INCREMENT=141 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsdolog` values('1','::1','2017-04-05 11:24:30','admin','ReData','dbname=abc&path=802_libusi_com_L_20170404001747943','0','55653');");
E_D("replace into `phome_enewsdolog` values('2','::1','2017-04-05 11:27:33','adm1n','login','---','0','55955');");
E_D("replace into `phome_enewsdolog` values('3','::1','2017-04-05 11:29:03','adm1n','SetEnews','---','0','56020');");
E_D("replace into `phome_enewsdolog` values('4','::1','2017-04-05 11:29:37','adm1n','ReInfoUrl','---','0','56044');");
E_D("replace into `phome_enewsdolog` values('5','::1','2017-04-05 11:30:06','adm1n','ChangeEnewsData','---','0','56071');");
E_D("replace into `phome_enewsdolog` values('6','::1','2017-04-05 11:30:08','adm1n','ReClassPath','---','0','56071');");
E_D("replace into `phome_enewsdolog` values('7','::1','2017-04-05 11:30:10','adm1n','DelFcListClass','---','0','56071');");
E_D("replace into `phome_enewsdolog` values('8','::1','2017-04-05 11:30:15','adm1n','UpdateClassInfosAll','---','0','56071');");
E_D("replace into `phome_enewsdolog` values('9','::1','2017-04-05 11:30:30','adm1n','ChangeAllModForm','ChangeClass=1','0','56105');");
E_D("replace into `phome_enewsdolog` values('10','::1','2017-04-05 11:30:39','adm1n','ReAllNewsJs','---','0','56111');");
E_D("replace into `phome_enewsdolog` values('11','::1','2017-04-05 11:30:42','adm1n','ReDtPage','---','0','56111');");
E_D("replace into `phome_enewsdolog` values('12','::1','2017-04-05 11:30:49','adm1n','ReIndex','---','0','56131');");
E_D("replace into `phome_enewsdolog` values('13','::1','2017-04-05 11:30:57','adm1n','ReListHtml_all','---','0','56131');");
E_D("replace into `phome_enewsdolog` values('14','::1','2017-04-05 11:32:55','adm1n','SetEnews','---','0','56252');");
E_D("replace into `phome_enewsdolog` values('15','::1','2017-04-05 11:33:50','adm1n','ReInfoUrl','---','0','56322');");
E_D("replace into `phome_enewsdolog` values('16','::1','2017-04-05 11:34:59','adm1n','ChangeEnewsData','---','0','56393');");
E_D("replace into `phome_enewsdolog` values('17','::1','2017-04-05 11:35:01','adm1n','ReClassPath','---','0','56393');");
E_D("replace into `phome_enewsdolog` values('18','::1','2017-04-05 11:35:03','adm1n','DelFcListClass','---','0','56393');");
E_D("replace into `phome_enewsdolog` values('19','::1','2017-04-05 11:35:07','adm1n','UpdateClassInfosAll','---','0','56393');");
E_D("replace into `phome_enewsdolog` values('20','::1','2017-04-05 11:35:14','adm1n','ChangeAllModForm','ChangeClass=1','0','56393');");
E_D("replace into `phome_enewsdolog` values('21','::1','2017-04-05 11:35:17','adm1n','ReAllNewsJs','---','0','56393');");
E_D("replace into `phome_enewsdolog` values('22','::1','2017-04-05 11:35:20','adm1n','ReDtPage','---','0','56393');");
E_D("replace into `phome_enewsdolog` values('23','::1','2017-04-05 11:35:24','adm1n','ReIndex','---','0','56393');");
E_D("replace into `phome_enewsdolog` values('24','::1','2017-04-05 11:35:27','adm1n','ReListHtml_all','---','0','56393');");
E_D("replace into `phome_enewsdolog` values('25','127.0.0.1','2017-04-05 11:38:25','adm1n','login','---','0','56767');");
E_D("replace into `phome_enewsdolog` values('26','127.0.0.1','2017-04-05 11:39:02','adm1n','SetEnews','---','0','56824');");
E_D("replace into `phome_enewsdolog` values('27','127.0.0.1','2017-04-05 11:39:16','adm1n','ReInfoUrl','---','0','56846');");
E_D("replace into `phome_enewsdolog` values('28','127.0.0.1','2017-04-05 11:39:24','adm1n','ChangeEnewsData','---','0','56846');");
E_D("replace into `phome_enewsdolog` values('29','127.0.0.1','2017-04-05 11:39:27','adm1n','ReClassPath','---','0','56846');");
E_D("replace into `phome_enewsdolog` values('30','127.0.0.1','2017-04-05 11:39:29','adm1n','DelFcListClass','---','0','56846');");
E_D("replace into `phome_enewsdolog` values('31','127.0.0.1','2017-04-05 11:39:34','adm1n','UpdateClassInfosAll','---','0','56846');");
E_D("replace into `phome_enewsdolog` values('32','127.0.0.1','2017-04-05 11:39:40','adm1n','ChangeAllModForm','ChangeClass=1','0','56846');");
E_D("replace into `phome_enewsdolog` values('33','127.0.0.1','2017-04-05 11:39:44','adm1n','ReAllNewsJs','---','0','56846');");
E_D("replace into `phome_enewsdolog` values('34','127.0.0.1','2017-04-05 11:39:47','adm1n','ReDtPage','---','0','56846');");
E_D("replace into `phome_enewsdolog` values('35','127.0.0.1','2017-04-05 11:39:49','adm1n','ReIndex','---','0','56846');");
E_D("replace into `phome_enewsdolog` values('36','127.0.0.1','2017-04-05 11:39:53','adm1n','ReListHtml_all','---','0','56846');");
E_D("replace into `phome_enewsdolog` values('37','127.0.0.1','2017-04-05 11:41:04','adm1n','ChangeEnewsData','---','0','57010');");
E_D("replace into `phome_enewsdolog` values('38','127.0.0.1','2017-04-05 11:41:45','adm1n','SetEnews','---','0','57222');");
E_D("replace into `phome_enewsdolog` values('39','127.0.0.1','2017-04-05 11:41:56','adm1n','ReInfoUrl','---','0','57222');");
E_D("replace into `phome_enewsdolog` values('40','127.0.0.1','2017-04-05 11:42:07','adm1n','ChangeEnewsData','---','0','57290');");
E_D("replace into `phome_enewsdolog` values('41','127.0.0.1','2017-04-05 11:42:10','adm1n','ReClassPath','---','0','57290');");
E_D("replace into `phome_enewsdolog` values('42','127.0.0.1','2017-04-05 11:42:12','adm1n','DelFcListClass','---','0','57290');");
E_D("replace into `phome_enewsdolog` values('43','127.0.0.1','2017-04-05 11:42:16','adm1n','UpdateClassInfosAll','---','0','57290');");
E_D("replace into `phome_enewsdolog` values('44','127.0.0.1','2017-04-05 11:42:25','adm1n','ChangeAllModForm','ChangeClass=1','0','57290');");
E_D("replace into `phome_enewsdolog` values('45','127.0.0.1','2017-04-05 11:42:29','adm1n','ReAllNewsJs','---','0','57290');");
E_D("replace into `phome_enewsdolog` values('46','127.0.0.1','2017-04-05 11:42:32','adm1n','ReDtPage','---','0','57290');");
E_D("replace into `phome_enewsdolog` values('47','127.0.0.1','2017-04-05 11:42:34','adm1n','ReIndex','---','0','57290');");
E_D("replace into `phome_enewsdolog` values('48','127.0.0.1','2017-04-05 11:42:39','adm1n','ReListHtml_all','---','0','57290');");
E_D("replace into `phome_enewsdolog` values('49','127.0.0.1','2017-04-05 11:44:20','adm1n','DelPubVar','varid=2<br>var=802.libusi.com','0','57668');");
E_D("replace into `phome_enewsdolog` values('50','127.0.0.1','2017-04-05 11:44:37','adm1n','DelPubVar','varid=1<br>var=ecms802-navigation-toggle','0','57709');");
E_D("replace into `phome_enewsdolog` values('51','127.0.0.1','2017-04-05 11:46:38','adm1n','ReIndex','---','0','57847');");
E_D("replace into `phome_enewsdolog` values('52','127.0.0.1','2017-04-05 11:46:42','adm1n','ReListHtml_all','---','0','57847');");
E_D("replace into `phome_enewsdolog` values('53','127.0.0.1','2017-04-05 11:51:03','adm1n','EditPubVar','varid=5<br>var=ecms802-flashpic','0','58216');");
E_D("replace into `phome_enewsdolog` values('54','127.0.0.1','2017-04-05 11:51:14','adm1n','ReIndex','---','0','58216');");
E_D("replace into `phome_enewsdolog` values('55','127.0.0.1','2017-04-05 11:51:18','adm1n','ReListHtml_all','---','0','58216');");
E_D("replace into `phome_enewsdolog` values('56','127.0.0.1','2017-04-05 11:52:21','adm1n','EditPubVar','varid=5<br>var=ecms802-flashpic','0','58351');");
E_D("replace into `phome_enewsdolog` values('57','127.0.0.1','2017-04-05 11:54:01','adm1n','DelPubVar','varid=10<br>var=ecms802-wzhz','0','58507');");
E_D("replace into `phome_enewsdolog` values('58','127.0.0.1','2017-04-05 11:54:06','adm1n','DelPubVar','varid=9<br>var=ecms802-jrwm','0','58507');");
E_D("replace into `phome_enewsdolog` values('59','127.0.0.1','2017-04-05 11:54:14','adm1n','DelPubVar','varid=8<br>var=ecms802-gybz','0','58520');");
E_D("replace into `phome_enewsdolog` values('60','127.0.0.1','2017-04-05 11:54:36','adm1n','ReIndex','---','0','58532');");
E_D("replace into `phome_enewsdolog` values('61','127.0.0.1','2017-04-05 11:54:40','adm1n','ReListHtml_all','---','0','58532');");
E_D("replace into `phome_enewsdolog` values('62','127.0.0.1','2017-04-05 11:57:10','adm1n','EditPubVar','varid=11<br>var=ecms802-dibulink','0','59008');");
E_D("replace into `phome_enewsdolog` values('63','127.0.0.1','2017-04-05 11:59:14','adm1n','EditPubVar','varid=7<br>var=ecms802-link','0','59223');");
E_D("replace into `phome_enewsdolog` values('64','127.0.0.1','2017-04-05 11:59:51','adm1n','EditPubVar','varid=12<br>var=ecms802-ad01','0','59269');");
E_D("replace into `phome_enewsdolog` values('65','127.0.0.1','2017-04-05 12:00:06','adm1n','EditPubVar','varid=15<br>var=ecms802-ad04','0','59283');");
E_D("replace into `phome_enewsdolog` values('66','127.0.0.1','2017-04-05 12:00:24','adm1n','EditPubVar','varid=14<br>var=ecms802-ad03','0','59303');");
E_D("replace into `phome_enewsdolog` values('67','127.0.0.1','2017-04-05 12:00:39','adm1n','EditPubVar','varid=13<br>var=ecms802-ad02','0','59314');");
E_D("replace into `phome_enewsdolog` values('68','127.0.0.1','2017-04-05 12:00:49','adm1n','EditPubVar','varid=12<br>var=ecms802-ad01','0','59331');");
E_D("replace into `phome_enewsdolog` values('69','127.0.0.1','2017-04-05 12:01:01','adm1n','EditPubVar','varid=16<br>var=ecms802-ad05','0','59341');");
E_D("replace into `phome_enewsdolog` values('70','127.0.0.1','2017-04-05 12:02:49','adm1n','EditPubVar','varid=3<br>var=ecms802-changyan','0','59503');");
E_D("replace into `phome_enewsdolog` values('71','127.0.0.1','2017-04-05 12:05:21','adm1n','EditNews','classid=2<br>id=35<br>title=游戏这块蛋糕有够大，为何电视始终没吃到？','1000010000000035','59691');");
E_D("replace into `phome_enewsdolog` values('72','127.0.0.1','2017-04-05 12:05:31','adm1n','EditNews','classid=2<br>id=22<br>title=电视游戏，即将被互联网+玩坏','1000010000000022','59691');");
E_D("replace into `phome_enewsdolog` values('73','127.0.0.1','2017-04-05 12:19:33','adm1n','EditPubVar','varid=15<br>var=ecms802-ad04','0','60594');");
E_D("replace into `phome_enewsdolog` values('74','127.0.0.1','2017-04-05 12:19:47','adm1n','ReIndex','---','0','60608');");
E_D("replace into `phome_enewsdolog` values('75','127.0.0.1','2017-04-05 12:19:51','adm1n','ReListHtml_all','---','0','60608');");
E_D("replace into `phome_enewsdolog` values('76','127.0.0.1','2017-04-05 12:20:54','adm1n','EditPubVar','varid=14<br>var=ecms802-ad03','0','60732');");
E_D("replace into `phome_enewsdolog` values('77','127.0.0.1','2017-04-05 12:49:37','adm1n','EditPublicTemp','gid=2','0','61871');");
E_D("replace into `phome_enewsdolog` values('78','127.0.0.1','2017-04-05 12:50:24','adm1n','EditListtemp','tempid=1<br>tempname=ecms802-新闻列表模板&gid=2','0','61915');");
E_D("replace into `phome_enewsdolog` values('79','127.0.0.1','2017-04-05 12:50:52','adm1n','EditNewstemp','tempid=1<br>tempname=ecms802-新闻内容模板&gid=2','0','61937');");
E_D("replace into `phome_enewsdolog` values('80','127.0.0.1','2017-04-05 12:51:58','adm1n','DelBqtemp','tempid=19<br>tempname=--------网站使用说明-----&gid=2','0','62036');");
E_D("replace into `phome_enewsdolog` values('81','127.0.0.1','2017-04-05 12:53:55','adm1n','ReIndex','---','0','62137');");
E_D("replace into `phome_enewsdolog` values('82','127.0.0.1','2017-04-05 12:53:59','adm1n','ReListHtml_all','---','0','62137');");
E_D("replace into `phome_enewsdolog` values('83','127.0.0.1','2017-04-05 12:55:08','adm1n','DelLink','lid=1<br>lname=自适应检测','0','62329');");
E_D("replace into `phome_enewsdolog` values('84','127.0.0.1','2017-04-05 12:55:13','adm1n','DelLink','lid=7<br>lname=帝国CMS模板','0','62329');");
E_D("replace into `phome_enewsdolog` values('85','127.0.0.1','2017-04-05 12:55:17','adm1n','DelLink','lid=6<br>lname=常见问题','0','62329');");
E_D("replace into `phome_enewsdolog` values('86','127.0.0.1','2017-04-05 12:55:20','adm1n','DelLink','lid=5<br>lname=手机显示效果','0','62329');");
E_D("replace into `phome_enewsdolog` values('87','127.0.0.1','2017-04-05 12:55:23','adm1n','DelLink','lid=4<br>lname=模板更新','0','62329');");
E_D("replace into `phome_enewsdolog` values('88','127.0.0.1','2017-04-05 12:55:51','adm1n','EditLink','lid=2<br>lname=百度','0','62364');");
E_D("replace into `phome_enewsdolog` values('89','127.0.0.1','2017-04-05 12:56:48','adm1n','EditLink','lid=3<br>lname=新浪','0','62705');");
E_D("replace into `phome_enewsdolog` values('90','127.0.0.1','2017-04-05 12:56:52','adm1n','ReIndex','---','0','62705');");
E_D("replace into `phome_enewsdolog` values('91','127.0.0.1','2017-04-05 12:56:55','adm1n','ReListHtml_all','---','0','62705');");
E_D("replace into `phome_enewsdolog` values('92','127.0.0.1','2017-04-05 12:59:48','adm1n','DelNews','classid=34<br>id=174<br>title=标签列表','1000010000000174','62998');");
E_D("replace into `phome_enewsdolog` values('93','127.0.0.1','2017-04-05 12:59:59','adm1n','DelNews','classid=30<br>id=170<br>title=友情链接','1000010000000170','63012');");
E_D("replace into `phome_enewsdolog` values('94','127.0.0.1','2017-04-05 13:00:40','adm1n','EditNews','classid=36<br>id=176<br>title=联系方式','1000010000000176','63062');");
E_D("replace into `phome_enewsdolog` values('95','127.0.0.1','2017-04-05 13:01:06','adm1n','EditNews','classid=35<br>id=175<br>title=关于我们','1000010000000175','63078');");
E_D("replace into `phome_enewsdolog` values('96','127.0.0.1','2017-04-05 13:01:25','adm1n','DelNews','classid=33<br>id=173<br>title=网站地图','1000010000000173','63095');");
E_D("replace into `phome_enewsdolog` values('97','127.0.0.1','2017-04-05 13:01:31','adm1n','DelNews','classid=31<br>id=171<br>title=最新文章','1000010000000171','63107');");
E_D("replace into `phome_enewsdolog` values('98','127.0.0.1','2017-04-05 13:02:17','adm1n','EditNews','classid=32<br>id=172<br>title=给我留言','1000010000000172','63150');");
E_D("replace into `phome_enewsdolog` values('99','127.0.0.1','2017-04-05 13:02:54','adm1n','EditNews','classid=29<br>id=169<br>title=广告合作','1000010000000169','63187');");
E_D("replace into `phome_enewsdolog` values('100','127.0.0.1','2017-04-05 13:03:02','adm1n','ReIndex','---','0','63187');");
E_D("replace into `phome_enewsdolog` values('101','127.0.0.1','2017-04-05 13:03:07','adm1n','ReListHtml_all','---','0','63187');");
E_D("replace into `phome_enewsdolog` values('102','127.0.0.1','2017-04-05 13:04:09','adm1n','ChangeEnewsData','---','0','63364');");
E_D("replace into `phome_enewsdolog` values('103','127.0.0.1','2017-04-05 13:04:11','adm1n','ReClassPath','---','0','63364');");
E_D("replace into `phome_enewsdolog` values('104','127.0.0.1','2017-04-05 13:04:13','adm1n','DelFcListClass','---','0','63364');");
E_D("replace into `phome_enewsdolog` values('105','127.0.0.1','2017-04-05 13:04:19','adm1n','UpdateClassInfosAll','---','0','63364');");
E_D("replace into `phome_enewsdolog` values('106','127.0.0.1','2017-04-05 13:04:25','adm1n','ChangeAllModForm','ChangeClass=1','0','63364');");
E_D("replace into `phome_enewsdolog` values('107','127.0.0.1','2017-04-05 13:04:29','adm1n','ReAllNewsJs','---','0','63364');");
E_D("replace into `phome_enewsdolog` values('108','127.0.0.1','2017-04-05 13:04:31','adm1n','ReDtPage','---','0','63364');");
E_D("replace into `phome_enewsdolog` values('109','127.0.0.1','2017-04-05 13:04:33','adm1n','ReIndex','---','0','63364');");
E_D("replace into `phome_enewsdolog` values('110','127.0.0.1','2017-04-05 13:04:39','adm1n','ReListHtml_all','---','0','63364');");
E_D("replace into `phome_enewsdolog` values('111','127.0.0.1','2017-04-05 13:06:01','adm1n','DelClass','classid=30<br>classname=友情链接','0','63563');");
E_D("replace into `phome_enewsdolog` values('112','127.0.0.1','2017-04-05 13:06:08','adm1n','DelClass','classid=31<br>classname=最新文章','0','63583');");
E_D("replace into `phome_enewsdolog` values('113','127.0.0.1','2017-04-05 13:06:15','adm1n','DelClass','classid=33<br>classname=网站地图','0','63589');");
E_D("replace into `phome_enewsdolog` values('114','127.0.0.1','2017-04-05 13:06:20','adm1n','DelClass','classid=34<br>classname=标签列表','0','63589');");
E_D("replace into `phome_enewsdolog` values('115','127.0.0.1','2017-04-05 13:10:27','adm1n','EditListtemp','tempid=9<br>tempname=ecms802-首页-列表式模板&gid=2','0','63892');");
E_D("replace into `phome_enewsdolog` values('116','127.0.0.1','2017-04-05 13:10:50','adm1n','EditListtemp','tempid=10<br>tempname=ecms802-TAGS-列表模板&gid=2','0','63908');");
E_D("replace into `phome_enewsdolog` values('117','127.0.0.1','2017-04-05 13:11:07','adm1n','ReIndex','---','0','63918');");
E_D("replace into `phome_enewsdolog` values('118','127.0.0.1','2017-04-05 13:11:11','adm1n','ReListHtml_all','---','0','63918');");
E_D("replace into `phome_enewsdolog` values('119','127.0.0.1','2017-04-05 13:12:22','adm1n','EditNewstemp','tempid=15<br>tempname=ecms802-综合导航(给我留言) &gid=2','0','64019');");
E_D("replace into `phome_enewsdolog` values('120','127.0.0.1','2017-04-05 13:12:56','adm1n','EditNewstemp','tempid=14<br>tempname=ecms802-综合导航(标签列表)&gid=2','0','64041');");
E_D("replace into `phome_enewsdolog` values('121','127.0.0.1','2017-04-05 13:13:21','adm1n','EditNewstemp','tempid=13<br>tempname=ecms802-综合导航(网站地图)&gid=2','0','64054');");
E_D("replace into `phome_enewsdolog` values('122','127.0.0.1','2017-04-05 13:13:49','adm1n','EditNewstemp','tempid=11<br>tempname=ecms802-综合导航(友情链接) &gid=2','0','64075');");
E_D("replace into `phome_enewsdolog` values('123','127.0.0.1','2017-04-05 13:14:09','adm1n','EditNewstemp','tempid=12<br>tempname=ecms802-综合导航(最新文章) &gid=2','0','64085');");
E_D("replace into `phome_enewsdolog` values('124','127.0.0.1','2017-04-05 13:14:28','adm1n','EditNewstemp','tempid=10<br>tempname=ecms802-综合导航(联系方式-广告合作-关于我们-联系我们) &gid=2','0','64098');");
E_D("replace into `phome_enewsdolog` values('125','127.0.0.1','2017-04-05 13:14:36','adm1n','DelNewstemp','tempid=14<br>tempname=ecms802-综合导航(标签列表)&gid=2','0','64098');");
E_D("replace into `phome_enewsdolog` values('126','127.0.0.1','2017-04-05 13:14:42','adm1n','DelNewstemp','tempid=13<br>tempname=ecms802-综合导航(网站地图)&gid=2','0','64098');");
E_D("replace into `phome_enewsdolog` values('127','127.0.0.1','2017-04-05 13:14:46','adm1n','DelNewstemp','tempid=12<br>tempname=ecms802-综合导航(最新文章) &gid=2','0','64098');");
E_D("replace into `phome_enewsdolog` values('128','127.0.0.1','2017-04-05 13:14:50','adm1n','DelNewstemp','tempid=11<br>tempname=ecms802-综合导航(友情链接) &gid=2','0','64098');");
E_D("replace into `phome_enewsdolog` values('129','127.0.0.1','2017-04-05 13:14:57','adm1n','ReIndex','---','0','64098');");
E_D("replace into `phome_enewsdolog` values('130','127.0.0.1','2017-04-05 13:15:00','adm1n','ReListHtml_all','---','0','64098');");
E_D("replace into `phome_enewsdolog` values('131','127.0.0.1','2017-04-05 13:15:52','adm1n','ChangeEnewsData','---','0','64269');");
E_D("replace into `phome_enewsdolog` values('132','127.0.0.1','2017-04-05 13:23:44','adm1n','ChangeEnewsData','---','0','65048');");
E_D("replace into `phome_enewsdolog` values('133','127.0.0.1','2017-04-05 13:23:47','adm1n','ReClassPath','---','0','65048');");
E_D("replace into `phome_enewsdolog` values('134','127.0.0.1','2017-04-05 13:23:49','adm1n','DelFcListClass','---','0','65048');");
E_D("replace into `phome_enewsdolog` values('135','127.0.0.1','2017-04-05 13:23:54','adm1n','UpdateClassInfosAll','---','0','65048');");
E_D("replace into `phome_enewsdolog` values('136','127.0.0.1','2017-04-05 13:24:00','adm1n','ChangeAllModForm','ChangeClass=1','0','65048');");
E_D("replace into `phome_enewsdolog` values('137','127.0.0.1','2017-04-05 13:24:06','adm1n','ReAllNewsJs','---','0','65048');");
E_D("replace into `phome_enewsdolog` values('138','127.0.0.1','2017-04-05 13:24:09','adm1n','ReDtPage','---','0','65048');");
E_D("replace into `phome_enewsdolog` values('139','127.0.0.1','2017-04-05 13:24:12','adm1n','ReIndex','---','0','65048');");
E_D("replace into `phome_enewsdolog` values('140','127.0.0.1','2017-04-05 13:24:16','adm1n','ReListHtml_all','---','0','65048');");

@include("../../inc/footer.php");
?>