<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsgbookclass`;");
E_C("CREATE TABLE `phome_enewsgbookclass` (
  `bid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `bname` varchar(60) NOT NULL DEFAULT '',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsgbookclass` values('3','游客','1','0');");
E_D("replace into `phome_enewsgbookclass` values('2','普通会员','1','1');");
E_D("replace into `phome_enewsgbookclass` values('4','企业会员','1','3');");
E_D("replace into `phome_enewsgbookclass` values('5','VIP会员','0','2');");

@include("../../inc/footer.php");
?>