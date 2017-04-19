<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsclassf`;");
E_C("CREATE TABLE `phome_enewsclassf` (
  `fid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `f` varchar(30) NOT NULL DEFAULT '',
  `fname` varchar(30) NOT NULL DEFAULT '',
  `fform` varchar(20) NOT NULL DEFAULT '',
  `fhtml` mediumtext NOT NULL,
  `fzs` varchar(255) NOT NULL DEFAULT '',
  `myorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ftype` varchar(30) NOT NULL DEFAULT '',
  `flen` varchar(20) NOT NULL DEFAULT '',
  `fvalue` text NOT NULL,
  `fformsize` varchar(12) NOT NULL DEFAULT '',
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsclassf` values('1','font','栏目旁的小图标 ','text','<input name=\\\\\"font\\\\\" type=\\\\\"text\\\\\" id=\\\\\"font\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":ehtmlspecialchars(\$addr[font])?>\\\\\" size=\\\\\"\\\\\">栏目旁的小图标，http://www.thinkcmf.com/font/icons 可在这里查询新的图标\r\n\r\n','','0','VARCHAR','255','','');");
E_D("replace into `phome_enewsclassf` values('2','pinyin','一级栏目下的拼音','text','<input name=\\\\\"pinyin\\\\\" type=\\\\\"text\\\\\" id=\\\\\"pinyin\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":ehtmlspecialchars(\$addr[pinyin])?>\\\\\" size=\\\\\"\\\\\">一级栏目下的的拼音,二级栏目不用填，填了也显不了\r\n\r\n','','0','VARCHAR','255','','');");

@include("../../inc/footer.php");
?>