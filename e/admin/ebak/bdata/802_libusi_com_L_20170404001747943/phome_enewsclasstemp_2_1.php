<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsclasstemp_2`;");
E_C("CREATE TABLE `phome_enewsclasstemp_2` (
  `tempid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tempname` varchar(30) NOT NULL DEFAULT '',
  `temptext` mediumtext NOT NULL,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`tempid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsclasstemp_2` values('1','---页面显示模式-请选列表式↑↑↑------','<!doctype html>\r\n<html>\r\n<head>\r\n<meta charset=\\\\\"utf-8\\\\\">\r\n</head>\r\n<body>\r\n请到网站后台→栏目→管理栏目→<font color=\\\\''#00aeff\\\\''> [!--pagetitle--] </font>→修改→模板选项→<font color=\\\\''#f30\\\\''> 页面显示模板→请选→列表式</font>，然后重新刷新生成一下栏目页。\r\n</body>\r\n</html>','0');");

@include("../../inc/footer.php");
?>