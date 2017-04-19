<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewspl_1`;");
E_C("CREATE TABLE `phome_enewspl_1` (
  `plid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pubid` bigint(16) NOT NULL DEFAULT '0',
  `username` varchar(20) NOT NULL DEFAULT '',
  `sayip` varchar(20) NOT NULL DEFAULT '',
  `saytime` int(10) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `zcnum` smallint(5) unsigned NOT NULL DEFAULT '0',
  `fdnum` smallint(5) unsigned NOT NULL DEFAULT '0',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `isgood` tinyint(1) NOT NULL DEFAULT '0',
  `saytext` text NOT NULL,
  `eipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`plid`),
  KEY `id` (`id`),
  KEY `classid` (`classid`),
  KEY `pubid` (`pubid`,`checked`,`plid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewspl_1` values('1','1000010000000172','hucan','::1','1491400653','172','1','32','0','0','1','0','你好世界','54216');");
E_D("replace into `phome_enewspl_1` values('2','1000010000000172','hucan','::1','1491400997','172','1','32','0','0','1','0','我来了','54567');");
E_D("replace into `phome_enewspl_1` values('3','1000010000000143','hucan','::1','1491795675','143','1','21','0','0','1','0','非常好[~e.hh~]','56711');");
E_D("replace into `phome_enewspl_1` values('4','1000010000000167','hucan1','::1','1491817135','167','1','15','0','0','2','0','djaijdiajdiwj','64566');");
E_D("replace into `phome_enewspl_1` values('5','1000010000000172','hucan','::1','1491957634','172','1','32','0','0','1','0','你好','56571');");
E_D("replace into `phome_enewspl_1` values('6','1000010000000172','hucan','::1','1491957688','172','1','32','0','0','1','0','世界和平','56625');");

@include("../../inc/footer.php");
?>