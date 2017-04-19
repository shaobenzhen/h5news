<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsclassadd`;");
E_C("CREATE TABLE `phome_enewsclassadd` (
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classtext` mediumtext NOT NULL,
  `ttids` text NOT NULL,
  `font` varchar(255) NOT NULL DEFAULT '',
  `pinyin` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsclassadd` values('1','','','fa-paper-plane','news');");
E_D("replace into `phome_enewsclassadd` values('2','','','','');");
E_D("replace into `phome_enewsclassadd` values('3','','','fa-taxi','yun ying');");
E_D("replace into `phome_enewsclassadd` values('4','','','fa-leaf','SHE JI');");
E_D("replace into `phome_enewsclassadd` values('5','','','fa-database','chuang tou');");
E_D("replace into `phome_enewsclassadd` values('6','','','fa-graduation-cap','jiao cheng');");
E_D("replace into `phome_enewsclassadd` values('7','','','fa-music','Seng Huo');");
E_D("replace into `phome_enewsclassadd` values('8','','','','');");
E_D("replace into `phome_enewsclassadd` values('9','','','','');");
E_D("replace into `phome_enewsclassadd` values('10','','','','');");
E_D("replace into `phome_enewsclassadd` values('11','','','','');");
E_D("replace into `phome_enewsclassadd` values('12','','','','');");
E_D("replace into `phome_enewsclassadd` values('13','','','','');");
E_D("replace into `phome_enewsclassadd` values('14','','','','');");
E_D("replace into `phome_enewsclassadd` values('15','','','','');");
E_D("replace into `phome_enewsclassadd` values('16','','','','');");
E_D("replace into `phome_enewsclassadd` values('17','','','','');");
E_D("replace into `phome_enewsclassadd` values('18','','','','');");
E_D("replace into `phome_enewsclassadd` values('19','','','','');");
E_D("replace into `phome_enewsclassadd` values('20','','','','');");
E_D("replace into `phome_enewsclassadd` values('21','','','','');");
E_D("replace into `phome_enewsclassadd` values('22','','','','');");
E_D("replace into `phome_enewsclassadd` values('23','','','','');");
E_D("replace into `phome_enewsclassadd` values('24','','','','');");
E_D("replace into `phome_enewsclassadd` values('25','','','','');");
E_D("replace into `phome_enewsclassadd` values('26','','','','');");
E_D("replace into `phome_enewsclassadd` values('27','','','','');");
E_D("replace into `phome_enewsclassadd` values('28','','','fa-folder-open','daohang');");
E_D("replace into `phome_enewsclassadd` values('29','','','fa-suitcase','');");
E_D("replace into `phome_enewsclassadd` values('30','','','fa-users','');");
E_D("replace into `phome_enewsclassadd` values('31','','','fa-heart','');");
E_D("replace into `phome_enewsclassadd` values('32','','','fa-pencil','');");
E_D("replace into `phome_enewsclassadd` values('33','','','fa-sitemap','');");
E_D("replace into `phome_enewsclassadd` values('34','','','fa-tasks','');");
E_D("replace into `phome_enewsclassadd` values('35','','','fa-trophy','');");
E_D("replace into `phome_enewsclassadd` values('36','','','fa-phone','');");

@include("../../inc/footer.php");
?>