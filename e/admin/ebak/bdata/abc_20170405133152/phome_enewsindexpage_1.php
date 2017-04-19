<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsindexpage`;");
E_C("CREATE TABLE `phome_enewsindexpage` (
  `tempid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tempname` varchar(30) NOT NULL DEFAULT '',
  `temptext` mediumtext NOT NULL,
  PRIMARY KEY (`tempid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsindexpage` values('1','教程网址','<!doctype html>\r\n<html>\r\n<head>\r\n<meta charset=\\\\\"utf-8\\\\\">\r\n</head>\r\n<body>\r\n\r\n感谢使用  李布斯（www.libusi.com）提供的网站模板。请大家自觉遵守法律规定,共同营造绿色的网络环境。<br><br>\r\n\r\n安装前，一定要先清空FTP里面的老程序和数据库后，在上传程序进行安装。●非常重要●<br><br>\r\n\r\n安装完成后，请及时更改后台地址和后台密码，不懂方法的，请看下面的教程。<br><br>\r\n\r\n使用中如遇到问题，请不要着急，请看下面的教程，常见的问题都可以解决的。可以先看看。<br><br>\r\n\r\n常见问题解决,安装方法,使用视频,请看这：（  http://www.libusi.com/1/edu1.html   )<br><br>\r\n\r\n</body>\r\n</html>');");

@include("../../inc/footer.php");
?>