<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewspubvar`;");
E_C("CREATE TABLE `phome_enewspubvar` (
  `varid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `myvar` varchar(60) NOT NULL DEFAULT '',
  `varname` varchar(20) NOT NULL DEFAULT '',
  `varvalue` text NOT NULL,
  `varsay` varchar(255) NOT NULL DEFAULT '',
  `myorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `tocache` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`varid`),
  UNIQUE KEY `varname` (`varname`),
  KEY `classid` (`classid`),
  KEY `tocache` (`tocache`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewspubvar` values('3','ecms802-changyan','搜狐畅言 ','<!--高速版-->\r\n<div id=\"SOHUCS\"></div>\r\n<script charset=\"utf-8\" type=\"text/javascript\" src=\"http://changyan.sohu.com/upload/changyan.js\" ></script>\r\n<script type=\"text/javascript\">\r\n    window.changyan.api.config({\r\n        appid: ''cys9POvoY'',\r\n        conf: ''prod_d54b641fe874037ce77b5d8278876ed3''\r\n    });\r\n</script>\r\n\r\n','搜狐畅言 ','3','0','1');");
E_D("replace into `phome_enewspubvar` values('4','ecms802-tongji-beian','备案号和统计代码 ','\r\n<!-- 统计代码 -->\r\n<script type=''text/javascript'' src=''/tongji.js''></script>\r\n<!-- 请改为自已的-->\r\n','备案号和统计代码 ','4','0','1');");
E_D("replace into `phome_enewspubvar` values('5','ecms802-flashpic','焦点图 ','<li><a class=\"slider-img\" href=\"#\" title=\"\"><img src=\"/skin/ecms802/img/JDTU01.jpg\" alt=\"\"/></a><h2><a href=\"#\" title=\"\">banner1</a></h2></li>\r\n<li><a class=\"slider-img\" href=\"#\" title=\"\"><img src=\"/skin/ecms802/img/JDTU02.jpg\" alt=\"\"/></a><h2><a href=\"#\" title=\"\">banner2</a></h2></li>\r\n\r\n\r\n<!-- 焦点图   可以通过设8级头条也行，两个二选一（注意图片大小），也可以“不写入缓存”，然后生成首页，这里的就不显示了  -->','首页焦点图 ','2','0','1');");
E_D("replace into `phome_enewspubvar` values('17','931E619D8CADEF77','自适应会员中心开关','libusi/','','99','0','1');");
E_D("replace into `phome_enewspubvar` values('6','ecms802-sinaweibo-tencent-weibo','关注我们-微博(页顶）','<div id=\"focus-us\">\r\n关注我们<div id=\"focus-slide\" class=\"ie_pie\">\r\n<div class=\"focus-title\">关注我们</div>\r\n<p class=\"focus-content\">\r\n		<a href=\"http://weibo.com/12345678\" target=\"_blank\" class=\"sinaweibo\"><span><i class=\"fa fa-weibo\"></i>新浪微博</span></a>\r\n		<a href=\"http://t.qq.com/12345678\" target=\"_blank\" class=\"sinaweibo\"><span><i class=\"fa fa-tencent-weibo\"></i>腾讯微博</span></a>\r\n</p>\r\n</div></div>\r\n\r\n<!--  请改为自己的，或者 “不写入缓存” 就关闭了  -->','请改为自己的，或者不写入缓存就关闭了','3','0','1');");
E_D("replace into `phome_enewspubvar` values('7','ecms802-link','最下面右下角一堆图标的链接','	<span class=\"footer-aliyun-link\">\r\n		<a href=\"https://www.aliyun.com\" target=\"_blank\" class=\"aliyun\">\r\n			<span class=\"tinicon-aliyun\"><i class=\"fa fa-cloud\"></i></span>\r\n			<br>Aliyun\r\n		</a>\r\n	</span>\r\n	<span class=\"footer-sinaweibo-link\">\r\n		<a href=\"http://weibo.com/11111111111\" target=\"_blank\" class=\"sinaweibo\">\r\n			<span class=\"tinicon-sinaweibo\"><i class=\"fa fa-weibo\"></i></span>\r\n			<br>Weibo\r\n		</a>\r\n	</span>\r\n	 \r\n		<span class=\"footer-qq-link\">\r\n		<a href=\"http://wpa.qq.com/msgrd?v=3&uin=1364831875&site=qq&menu=yes\" target=\"_blank\" class=\"qq\">\r\n			<span class=\"tinicon-qq\"><i class=\"fa fa-qq\"></i></span>\r\n			<br>QQ\r\n		</a>\r\n	</span> \r\n		<span class=\"footer-newsletter-link\">\r\n		<a href=\"mailto:00000@163.com\" target=\"_blank\" class=\"Email\">\r\n			<span class=\"tinicon-newsletter\"><i class=\"fa fa-envelope\"></i></span>\r\n			<br>Email\r\n		</a>\r\n	</span>','','9','0','1');");
E_D("replace into `phome_enewspubvar` values('11','ecms802-dibulink','底部链接','<li id=\"menu-item\" class=\"menu-item\"><a href=\"http://news.baidu.com/\">百度新闻</a></li>\r\n<li id=\"menu-item\" class=\"menu-item\"><a href=\"http://news.sina.com.cn/\">新浪新闻</a></li>\r\n','','9','0','1');");
E_D("replace into `phome_enewspubvar` values('12','ecms802-ad01','广告01','<div id=\"enhancedtextwidget-10\" class=\"widget widget_text enhanced-text-widget\">\r\n<div class=\"textwidget widget-text\">\r\n\r\n<a href=\"#\" target=\"_blank\">\r\n<img src=\"/skin/ecms802/img/a01.png\" alt=\"购买主题\"/></a>\r\n\r\n</div></div>','','2','0','1');");
E_D("replace into `phome_enewspubvar` values('13','ecms802-ad02','广告02','<div id=\"enhancedtextwidget-11\" class=\"widget widget_text enhanced-text-widget\">\r\n<div class=\"textwidget widget-text\">\r\n\r\n<a href=\"#\" target=\"_blank\">\r\n<img src=\"/skin/ecms802/img/a02.png\" alt=\"购买主题\"/></a>\r\n\r\n</div></div>','','2','0','0');");
E_D("replace into `phome_enewspubvar` values('14','ecms802-ad03','广告03','<div id=\"enhancedtextwidget-11\" class=\"widget widget_text enhanced-text-widget\">\r\n<div class=\"textwidget widget-text\">\r\n\r\n<a href=\"#\" target=\"_blank\">\r\n<img src=\"/skin/ecms802/img/a03.png\" alt=\"购买主题\"/></a>\r\n\r\n</div></div>','','2','0','0');");
E_D("replace into `phome_enewspubvar` values('15','ecms802-ad04','广告04','<div id=\"singlethumb-banner\">\r\n\r\n<a href=\"#\" target=\"_blank\">\r\n<img src=\"/skin/ecms802/img/a04.png\" alt=\"购买主题\"/></a>\r\n\r\n</div>','','2','0','0');");
E_D("replace into `phome_enewspubvar` values('16','ecms802-ad05','广告05','<div id=\"cmnt-banner1\" class=\"banner\">\r\n\r\n<a href=\"#\" target=\"_blank\">\r\n<img src=\"/skin/ecms802/img/a05.png\" alt=\"购买主题\"/></a>\r\n\r\n</div>','','2','0','0');");

@include("../../inc/footer.php");
?>