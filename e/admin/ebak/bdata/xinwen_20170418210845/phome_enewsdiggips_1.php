<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsdiggips`;");
E_C("CREATE TABLE `phome_enewsdiggips` (
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `id` int(11) NOT NULL DEFAULT '0',
  `ips` mediumtext NOT NULL,
  KEY `classid` (`classid`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsdiggips` values('21','153',',::1,');");
E_D("replace into `phome_enewsdiggips` values('21','143',',::1,');");
E_D("replace into `phome_enewsdiggips` values('32','172',',::1,');");
E_D("replace into `phome_enewsdiggips` values('8','206',',::1,');");

@include("../../inc/footer.php");
?>