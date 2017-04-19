<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsclass`;");
E_C("CREATE TABLE `phome_enewsclass` (
  `classid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `bclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classname` varchar(50) NOT NULL DEFAULT '',
  `sonclass` text NOT NULL,
  `is_zt` tinyint(1) NOT NULL DEFAULT '0',
  `lencord` smallint(6) NOT NULL DEFAULT '0',
  `link_num` tinyint(4) NOT NULL DEFAULT '0',
  `newstempid` smallint(6) NOT NULL DEFAULT '0',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `listtempid` smallint(6) NOT NULL DEFAULT '0',
  `featherclass` text NOT NULL,
  `islast` tinyint(1) NOT NULL DEFAULT '0',
  `classpath` text NOT NULL,
  `classtype` varchar(10) NOT NULL DEFAULT '',
  `newspath` varchar(20) NOT NULL DEFAULT '',
  `filename` tinyint(1) NOT NULL DEFAULT '0',
  `filetype` varchar(10) NOT NULL DEFAULT '',
  `openpl` tinyint(1) NOT NULL DEFAULT '0',
  `openadd` tinyint(1) NOT NULL DEFAULT '0',
  `newline` int(11) NOT NULL DEFAULT '0',
  `hotline` int(11) NOT NULL DEFAULT '0',
  `goodline` int(11) NOT NULL DEFAULT '0',
  `classurl` varchar(200) NOT NULL DEFAULT '',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `myorder` smallint(6) NOT NULL DEFAULT '0',
  `filename_qz` varchar(20) NOT NULL DEFAULT '',
  `hotplline` tinyint(4) NOT NULL DEFAULT '0',
  `modid` smallint(6) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `firstline` tinyint(4) NOT NULL DEFAULT '0',
  `bname` varchar(50) NOT NULL DEFAULT '',
  `islist` tinyint(1) NOT NULL DEFAULT '0',
  `searchtempid` smallint(6) NOT NULL DEFAULT '0',
  `tid` smallint(6) NOT NULL DEFAULT '0',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `maxnum` int(11) NOT NULL DEFAULT '0',
  `checkpl` tinyint(1) NOT NULL DEFAULT '0',
  `down_num` tinyint(4) NOT NULL DEFAULT '0',
  `online_num` tinyint(4) NOT NULL DEFAULT '0',
  `listorder` varchar(50) NOT NULL DEFAULT '',
  `reorder` varchar(50) NOT NULL DEFAULT '',
  `intro` text NOT NULL,
  `classimg` varchar(255) NOT NULL DEFAULT '',
  `jstempid` smallint(6) NOT NULL DEFAULT '0',
  `addinfofen` int(11) NOT NULL DEFAULT '0',
  `listdt` tinyint(1) NOT NULL DEFAULT '0',
  `showclass` tinyint(1) NOT NULL DEFAULT '0',
  `showdt` tinyint(1) NOT NULL DEFAULT '0',
  `checkqadd` tinyint(1) NOT NULL DEFAULT '0',
  `qaddlist` tinyint(1) NOT NULL DEFAULT '0',
  `qaddgroupid` text NOT NULL,
  `qaddshowkey` tinyint(1) NOT NULL DEFAULT '0',
  `adminqinfo` tinyint(1) NOT NULL DEFAULT '0',
  `doctime` smallint(6) NOT NULL DEFAULT '0',
  `classpagekey` varchar(255) NOT NULL DEFAULT '',
  `dtlisttempid` smallint(6) NOT NULL DEFAULT '0',
  `classtempid` smallint(6) NOT NULL DEFAULT '0',
  `nreclass` tinyint(1) NOT NULL DEFAULT '0',
  `nreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `nrejs` tinyint(1) NOT NULL DEFAULT '0',
  `nottobq` tinyint(1) NOT NULL DEFAULT '0',
  `ipath` varchar(255) NOT NULL DEFAULT '',
  `addreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `haddlist` tinyint(4) NOT NULL DEFAULT '0',
  `sametitle` tinyint(1) NOT NULL DEFAULT '0',
  `definfovoteid` smallint(6) NOT NULL DEFAULT '0',
  `wburl` varchar(255) NOT NULL DEFAULT '',
  `qeditchecked` tinyint(1) NOT NULL DEFAULT '0',
  `wapstyleid` smallint(6) NOT NULL DEFAULT '0',
  `repreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `pltempid` smallint(6) NOT NULL DEFAULT '0',
  `cgroupid` text NOT NULL,
  `yhid` smallint(6) NOT NULL DEFAULT '0',
  `wfid` smallint(6) NOT NULL DEFAULT '0',
  `cgtoinfo` tinyint(1) NOT NULL DEFAULT '0',
  `bdinfoid` varchar(25) NOT NULL DEFAULT '',
  `repagenum` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keycid` smallint(6) NOT NULL DEFAULT '0',
  `allinfos` int(10) unsigned NOT NULL DEFAULT '0',
  `infos` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`classid`),
  KEY `bclassid` (`bclassid`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsclass` values('1','0','资讯','|2|8|9|10|11|12|','0','16','10','1','0','1','','0','news','.html','','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','资讯','1','0','1','news','0','1','2','2','id DESC','newstime DESC','业界资讯','','1','0','0','0','0','0','0',',1,3,2,4,','1','0','0','业界资讯','1','1','0','0','0','0','','1','0','1','0','','1','0','0','0','','0','0','0','','0','0','0','0','1452772609');");
E_D("replace into `phome_enewsclass` values('2','1','游戏','','0','16','10','1','0','1','|1|','1','news/youxi','.html','','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','游戏','1','0','1','news','0','1','2','2','id DESC','newstime DESC','游戏攻略','','1','0','0','0','0','0','0',',1,3,2,4,','1','0','0','游戏攻略','1','1','0','0','0','0','','1','0','1','0','','1','0','0','0','','0','0','0','','0','0','10','10','1452772725');");
E_D("replace into `phome_enewsclass` values('3','0','运营','|13|14|','0','16','10','1','0','1','','0','yunying','.html','','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','运营','1','0','1','news','0','1','2','2','id DESC','newstime DESC','运营','','1','0','0','1','0','0','0',',1,3,2,4,','1','0','0','运营','1','1','0','0','0','0','','1','0','1','0','','1','0','0','0','','0','0','0','','0','0','0','0','1452773097');");
E_D("replace into `phome_enewsclass` values('4','0','设计','|17|18|19|20|22|','0','16','10','1','0','1','','0','sheji','.html','','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','设计','1','0','1','news','0','1','2','2','id DESC','newstime DESC','设计','','1','0','0','0','0','0','0',',1,3,2,4,','1','0','0','设计','1','1','0','0','0','0','','1','0','1','0','','1','0','0','0','','0','0','0','','0','0','0','0','1452773142');");
E_D("replace into `phome_enewsclass` values('5','0','创投','|23|24|','0','16','10','1','0','1','','0','chuangtou','.html','','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','创投','1','0','1','news','0','1','2','2','id DESC','newstime DESC','创投','','1','0','0','1','0','0','0',',1,3,2,4,','1','0','0','创投','1','1','0','0','0','0','','1','0','1','0','','1','0','0','0','','0','0','0','','0','0','0','0','1452773191');");
E_D("replace into `phome_enewsclass` values('7','0','生活','|15|16|21|','0','16','10','1','0','1','','0','shenghuo','.html','','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','生活','1','0','1','news','0','1','2','2','id DESC','newstime DESC','生活','','1','0','0','0','0','0','0',',1,3,2,4,','1','0','0','生活','1','1','0','0','0','0','','1','0','1','0','','1','0','0','0','','0','0','0','','0','0','0','0','1452773335');");
E_D("replace into `phome_enewsclass` values('8','1','互联网','','0','16','10','1','0','1','|1|','1','news/hulianwang','.html','','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','互联网','1','0','1','news','0','1','2','2','id DESC','newstime DESC','互联网','','1','0','0','0','0','0','0',',1,3,2,4,','1','0','0','互联网','1','1','0','0','0','0','','1','0','1','0','','1','0','0','0','','0','0','0','','0','0','10','10','1452773441');");
E_D("replace into `phome_enewsclass` values('9','1','移动互联网','','0','16','10','1','0','1','|1|','1','news/yidonghulianwang','.html','','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','移动互联网','1','0','1','news','0','1','2','2','id DESC','newstime DESC','移动互联网','','1','0','0','0','0','0','0',',1,3,2,4,','1','0','0','移动互联网','1','1','0','0','0','0','','1','0','1','0','','1','0','0','0','','0','0','0','','0','0','11','10','1452773507');");
E_D("replace into `phome_enewsclass` values('10','1','电商','','0','16','10','1','0','1','|1|','1','news/dianshang','.html','','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','电商','1','0','1','news','0','1','2','2','id DESC','newstime DESC','电商','','1','0','0','0','0','0','0',',1,3,2,4,','1','0','0','电商','1','1','0','0','0','0','','1','0','1','0','','1','0','0','0','','0','0','0','','0','0','10','10','1452773573');");
E_D("replace into `phome_enewsclass` values('11','1','设备','','0','16','10','1','0','1','|1|','1','news/shebei','.html','','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','设备','1','0','1','news','0','1','2','2','id DESC','newstime DESC','设备','','1','0','0','0','0','0','0',',1,3,2,4,','1','0','0','设备','1','1','0','0','0','0','','1','0','1','0','','1','0','0','0','','0','0','0','','0','0','10','10','1452773630');");
E_D("replace into `phome_enewsclass` values('12','1','图媒体','','0','16','10','1','0','1','|1|','1','news/tumeiti','.html','','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','图媒体','1','0','1','news','0','1','2','2','id DESC','newstime DESC','图媒体','','1','0','0','0','0','0','0',',1,3,2,4,','1','0','0','图媒体','1','1','0','0','0','0','','1','0','1','0','','1','0','0','0','','0','0','0','','0','0','10','10','1452773803');");
E_D("replace into `phome_enewsclass` values('13','3','管理','','0','16','10','1','0','1','|3|','1','yunying/guanli','.html','','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','管理','1','0','1','news','0','1','2','2','id DESC','newstime DESC','管理','','1','0','0','0','0','0','0',',1,3,2,4,','1','0','0','管理','1','1','0','0','0','0','','1','0','1','0','','1','0','0','0','','0','0','0','','0','0','10','10','1452773935');");
E_D("replace into `phome_enewsclass` values('14','3','营销','','0','16','10','1','0','1','|3|','1','yunying/yingxiao','.html','','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','营销','1','0','1','news','0','1','2','2','id DESC','newstime DESC','营销','','1','0','0','0','0','0','0',',1,3,2,4,','1','0','0','营销','1','1','0','0','0','0','','1','0','1','0','','1','0','0','0','','0','0','0','','0','0','10','10','1452773995');");
E_D("replace into `phome_enewsclass` values('15','7','智驾','','0','16','10','1','0','1','|7|','1','shenghuo/zhijia','.html','','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','智驾','1','0','1','news','0','1','2','2','id DESC','newstime DESC','智驾','','1','0','0','0','0','0','0',',1,3,2,4,','1','0','0','智驾','1','1','0','0','0','0','','1','0','1','0','','1','0','0','0','','0','0','0','','0','0','12','12','1452774050');");
E_D("replace into `phome_enewsclass` values('16','7','职场','','0','16','10','1','0','1','|7|','1','shenghuo/zhichang','.html','','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','职场','1','0','1','news','0','1','2','2','id DESC','newstime DESC','职场','','1','0','0','0','0','0','0',',1,3,2,4,','1','0','0','职场','1','1','0','0','0','0','','1','0','1','0','','1','0','0','0','','0','0','0','','0','0','10','10','1452774116');");
E_D("replace into `phome_enewsclass` values('17','4','交互','','0','16','10','1','0','1','|4|','1','sheji/jiaohu','.html','','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','交互','1','0','1','news','0','1','2','2','id DESC','newstime DESC','交互','','1','0','0','0','0','0','0',',1,3,2,4,','1','0','0','交互','1','1','0','0','0','0','','1','0','1','0','','1','0','0','0','','0','0','0','','0','0','10','10','1452774198');");
E_D("replace into `phome_enewsclass` values('18','4','网页','','0','16','10','1','0','1','|4|','1','sheji/wangye','.html','','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','网页','1','0','1','news','0','1','2','2','id DESC','newstime DESC','网页','','1','0','0','0','0','0','0',',1,3,2,4,','1','0','0','网页','1','1','0','0','0','0','','1','0','1','0','','1','0','0','0','','0','0','0','','0','0','10','10','1452774256');");
E_D("replace into `phome_enewsclass` values('19','4','视觉','','0','16','10','1','0','1','|4|','1','sheji/shijue','.html','','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','视觉','1','0','1','news','0','1','2','2','id DESC','newstime DESC','视觉','','1','0','0','0','0','0','0',',1,3,2,4,','1','0','0','视觉','1','1','0','0','0','0','','1','0','1','0','','1','0','0','0','','0','0','0','','0','0','10','10','1452774306');");
E_D("replace into `phome_enewsclass` values('20','4','工业','','0','16','10','1','0','1','|4|','1','sheji/gongye','.html','','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','工业','1','0','1','news','0','1','2','2','id DESC','newstime DESC','工业','','1','0','0','0','0','0','0',',1,3,2,4,','1','0','0','工业','1','1','0','0','0','0','','1','0','1','0','','1','0','0','0','','0','0','0','','0','0','10','10','1452774369');");
E_D("replace into `phome_enewsclass` values('21','7','家居','','0','16','10','1','0','1','|7|','1','shenghuo/jiaju','.html','','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','家居','1','0','1','news','0','1','2','2','id DESC','newstime DESC','家居','','1','0','0','0','0','0','0',',1,3,2,4,','1','0','0','家居','1','1','0','0','0','0','','1','0','1','0','','1','0','0','0','','0','0','0','','0','0','10','10','1452774435');");
E_D("replace into `phome_enewsclass` values('22','4','APP','','0','16','10','1','0','1','|4|','1','sheji/APP','.html','','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','APP','1','0','1','news','0','1','2','2','id DESC','newstime DESC','APP','','1','0','0','0','0','0','0',',1,3,2,4,','1','0','0','APP','1','1','0','0','0','0','','1','0','1','0','','1','0','0','0','','0','0','0','','0','0','10','10','1452774665');");
E_D("replace into `phome_enewsclass` values('23','5','创业','','0','16','10','1','0','1','|5|','1','chuangtou/chuangye','.html','','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','创业','1','0','1','news','0','1','2','2','id DESC','newstime DESC','创业','','1','0','0','0','0','0','0',',1,3,2,4,','1','0','0','创业','1','1','0','0','0','0','','1','0','1','0','','1','0','0','0','','0','0','0','','0','0','10','10','1452774783');");
E_D("replace into `phome_enewsclass` values('24','5','投资','','0','16','10','1','0','1','|5|','1','chuangtou/touzi','.html','','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','投资','1','0','1','news','0','1','2','2','id DESC','newstime DESC','投资','','1','0','0','0','0','0','0',',1,3,2,4,','1','0','0','投资','1','1','0','0','0','0','','1','0','1','0','','1','0','0','0','','0','0','0','','0','0','10','10','1452774847');");
E_D("replace into `phome_enewsclass` values('28','0','综合导航','|29|32|35|36|','0','25','10','0','0','1','','0','zonghedaohang','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','综合导航','1','0','1','news','0','1','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1459571122');");
E_D("replace into `phome_enewsclass` values('29','28','广告合作','','0','25','10','1','0','1','|28|','1','guanggaohezuo','.html','','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','广告合作','0','0','1','news','0','1','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','29,169','0','0','1','1','1459571316');");
E_D("replace into `phome_enewsclass` values('32','28','给我留言','','0','25','10','1','0','1','|28|','1','geiwoliuyan','.html','','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','给我留言','0','0','1','news','0','1','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','32,172','0','0','1','1','1459571825');");
E_D("replace into `phome_enewsclass` values('35','28','关于我们','','0','25','10','1','0','1','|28|','1','guanyuwomen','.html','','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','关于我们','0','0','1','news','0','1','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','35,175','0','0','1','1','1459572252');");
E_D("replace into `phome_enewsclass` values('36','28','联系方式','','0','25','10','1','0','1','|28|','1','lianxifangshi','.html','','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','联系方式','0','0','1','news','0','1','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','36,176','0','0','1','1','1459572366');");

@include("../../inc/footer.php");
?>