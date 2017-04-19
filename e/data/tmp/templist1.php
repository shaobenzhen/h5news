<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE HTML>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<meta http-equiv="Cache-Control" content="no-transform" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<title>[!--pagetitle--]-<?=$public_r[sitename]?></title>
<meta name="keywords" content="[!--pagekey--]" />
<meta name="description" content="[!--pagedes--]" />
<script type='text/javascript' src='/e/data/js/ajax.js'></script>
<link rel="stylesheet" type="text/css" href="/skin/ecms802/css/style.css"  />
<link rel="stylesheet" type="text/css" href="/skin/ecms802/css/responsive.css"  />
<link rel="stylesheet" type="text/css" href="/skin/ecms802/css/custom.css"  />
<link rel="stylesheet" type="text/css" href="/skin/ecms802/css/font-awesome.css"  media="all" />
<style>
article.product .tips {
	display: none;
}
</style>
<link rel='stylesheet' id='nm-css'  href='/skin/ecms802/css/style2.css?ver=2016.12.21' type='text/css' media='all' />
<script type='text/javascript' src='/skin/ecms802/js/jquery-1.10.2.min.js?ver=2016.12.21'></script>
<!--[if lt IE 9]>
<script src="/skin/ecms802/js/html5.js"></script>
<script src="/skin/ecms802/js/css3-mediaqueries.js"></script>
<script src="/skin/ecms802/js/PIE_IE678.js"></script>
<link rel="stylesheet" type="text/css" href="/skin/ecms802/css/iefix.css"  media="all" />
<![endif]-->
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="/skin/ecms802/css/font-awesome-ie7.min.css"  media="all" />
<![endif]-->
<!--[if IE 6]>
<script src="/skin/ecms802/js/kill-IE6.js"></script>
<![endif]-->
</head>
<body id="wrap" class="home blog" style="background:#ffffff; ">
<div id="body-container">
<aside id="navmenu-mobile">
  <div id="navmenu-mobile-wraper">
    <div class="mobile-login-field">
      <div id="login-box-mobile">
        <div class="login-box-mobile-form"> 
          <script src="/e/member/login/loginjsm.php"></script></div>
      </div>
    </div>
    <ul id="menu-mobile" class="menu-mobile">
            <li class="menu-item menu-item-has-children <?=$GLOBALS[navclassid]?"":"menu-item current-menu-item"?>"><a rel="nofollow" href="/"><i class="fa fa-home"></i>首页<span>Home</span></a></li>
        <?php
$sql=$empire->query("select classid,classname,islast from {$dbtbpre}enewsclass where bclassid=0 and showclass=0 order by myorder,myorder asc");
    while($s=$empire->fetch($sql)){
    	$tclass="";
        $value=''; 
        $fr=explode('|',$class_r[$GLOBALS[navclassid]][featherclass]);
        $topbclassid=$fr[1]?$fr[1]:$GLOBALS[navclassid];
        if($topbclassid==$s[classid]){
        	$tclass='current-menu-item';
        }
        $classurl=sys_ReturnBqClassname($s,9);
        $value=ReturnClassAddField($s[classid],'font');
        if($value!=''){
        $value='<i class="fa '.ReturnClassAddField($s[classid],'font').'"></i>'; 
        }
        if(!$s[islast]){
        $value2='<span class="caret"></span>';
        }
        echo '<li class="menu-item menu-item-has-children '.$tclass.'"><a href="'.$classurl.'">'.$value.''.$s[classname].'<span> '.ReturnClassAddField($s[classid],'pinyin').'</span></a>';
        if(!$s[islast]){
        	$sql2=$empire->query("select classid,classname from {$dbtbpre}enewsclass where bclassid=$s[classid] and showclass=0 order by myorder,myorder asc");
            $str="";
            while($s2=$empire->fetch($sql2)){
            	$classurl2=sys_ReturnBqClassname($s2,9); 
            	$str.='<li class="menu-item"><a href="'.$classurl2.'"><i class="fa '.ReturnClassAddField($s2[classid],'font').'"></i>'.$s2[classname].'</a></li>';
            }
            echo '<ul class="sub-menu">'.$str.'</ul>';
        }
        echo '</li>';
    }
?>
    </ul>
  </div>
</aside>
<section id="content-container">
  <header class="header-wrap" id="nav-scroll">
    <div class="nav-wrap">
      <div class="logo"> <a href="/" alt="<?=$public_r[sitename]?>" id="logo" > <img src="/skin/ecms802/img/logo.png"> </a> </div>
      <div class="toggle-menu"> <i class="fa fa-bars"></i> </div>
      <div class="search-btn-click"> <i class="fa fa-search"></i> </div>
      <div id="login-reg"> 
        <script src="/e/member/login/loginjsd.php"></script> 
      </div>
      <?=$public_r['add_ecms802-sinaweibo-tencent-weibo']?>
      <nav id="pri-nav" class="site-navigation pri-nav elan_menu" role="navigation">
        <div class="menu-%e9%9b%86%e5%90%88%e7%9f%ad%e8%8f%9c%e5%8d%95-container">
          <ul id="menu-%e9%9b%86%e5%90%88%e7%9f%ad%e8%8f%9c%e5%8d%95" class="nav-menu">
                  <li class="menu-item menu-item-has-children <?=$GLOBALS[navclassid]?"":"menu-item current-menu-item"?>"><a rel="nofollow" href="/"><i class="fa fa-home"></i>首页<span>Home</span></a></li>
        <?php
$sql=$empire->query("select classid,classname,islast from {$dbtbpre}enewsclass where bclassid=0 and showclass=0 order by myorder,myorder asc");
    while($s=$empire->fetch($sql)){
    	$tclass="";
        $value=''; 
        $fr=explode('|',$class_r[$GLOBALS[navclassid]][featherclass]);
        $topbclassid=$fr[1]?$fr[1]:$GLOBALS[navclassid];
        if($topbclassid==$s[classid]){
        	$tclass='current-menu-item';
        }
        $classurl=sys_ReturnBqClassname($s,9);
        $value=ReturnClassAddField($s[classid],'font');
        if($value!=''){
        $value='<i class="fa '.ReturnClassAddField($s[classid],'font').'"></i>'; 
        }
        if(!$s[islast]){
        $value2='<span class="caret"></span>';
        }
        echo '<li class="menu-item menu-item-has-children '.$tclass.'"><a href="'.$classurl.'">'.$value.''.$s[classname].'<span> '.ReturnClassAddField($s[classid],'pinyin').'</span></a>';
        if(!$s[islast]){
        	$sql2=$empire->query("select classid,classname from {$dbtbpre}enewsclass where bclassid=$s[classid] and showclass=0 order by myorder,myorder asc");
            $str="";
            while($s2=$empire->fetch($sql2)){
            	$classurl2=sys_ReturnBqClassname($s2,9); 
            	$str.='<li class="menu-item"><a href="'.$classurl2.'"><i class="fa '.ReturnClassAddField($s2[classid],'font').'"></i>'.$s2[classname].'</a></li>';
            }
            echo '<ul class="sub-menu">'.$str.'</ul>';
        }
        echo '</li>';
    }
?>
            <?=$public_r['add_ecms802-navigation-toggle']?>
          </ul>
        </div>
      </nav>
    </div>
    <div class="clr"></div>
    <div class="site_loading"></div>
    <div class="header-search-slide" style="display: none;">
      <form onsubmit="return checkSearchForm()" method="post" id="searchform" class="searchform" action="/e/search/index.php" role="search">
        <input type="hidden" value="title" name="show">
        <input type="hidden" value="1" name="tempid">
        <input type="hidden" value="news" name="tbname">
        <input name="mid" value="1" type="hidden">
        <input type="search" class="field" name="keyboard" value="" placeholder="输入关键词并回车" required>
        <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>
  </header>
  <div class="hidefixnav"></div>
  <script type="text/javascript">
	$('.site_loading').animate({'width':'33%'},50); 
</script>
  <div class="breadcrumbs">
    <div class="container clr">
      <div id="breadcrumbs">
        <h1><i class="fa fa-folder-open"></i>[!--pagetitle--]</h1>
        <div class="breadcrumbs-text">[!--newsnav--]</div>
      </div>
    </div>
  </div>
  <div id="main-wrap">
    <div id="home-blog-wrap" class="container two-col-container">
      <div id="main-wrap-left">
        <div class="bloglist-container clr">[!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]</div>
        <!-- pagination -->
        <div class="clear"> </div>
        <div class="page5">[!--show.listpage--]</div>
      </div>
      <script type="text/javascript">
	$('.site_loading').animate({'width':'55%'},50); 
</script>
      <div class="f8f482afb85e4ded"></div>
      <div id="sidebar" class="clr"> 
        <script src="/e/member/login/loginjsc.php"></script>
        <?=$public_r['add_ecms802-ad01']?>
        <div id="tintabs-3" class="widget widget_tin_tabs">
          <ul class="tin-tabs-nav group tab-count-3">
            <li class="tin-tab tab-recent"><a href="#tab-recent" title="推荐文章"><i class="fa fa-thumbs-up"></i><span>推荐文章</span></a></li>
            <li class="tin-tab tab-popular"></li>
          </ul>
          <div class="tin-tabs-container">
            <ul id="tab-recent" class="tin-tab group thumbs-enabled">
              <? @sys_GetEcmsInfo(0,10,32,0,3,17,0,'isgood=1');?>
            </ul>
            <ul id="tab-popular" class="tin-tab group thumbs-enabled">
            </ul>
          </div>
        </div>
        <?=$public_r['add_ecms802-ad02']?>
        <div id="tintabs-3" class="widget widget_tin_tabs">
          <ul class="tin-tabs-nav group tab-count-3">
            <li class="tin-tab tab-recent"><a href="#tab-recent" title="头条文章"><i class="fa fa-thumbs-up"></i><span>头条文章</span></a></li>
            <li class="tin-tab tab-popular"></li>
          </ul>
          <div class="tin-tabs-container">
            <ul id="tab-recent" class="tin-tab group thumbs-enabled">
              <? @sys_GetEcmsInfo(0,10,32,0,3,17,0,'firsttitle=1');?>
            </ul>
            <ul id="tab-popular" class="tin-tab group thumbs-enabled">
            </ul>
          </div>
        </div>
        <?=$public_r['add_ecms802-ad03']?>
        <div class="floatwidget-container"> </div>
      </div>
      <script type="text/javascript">
	$('.site_loading').animate({'width':'78%'},50);  
</script></div>
    <div class="clear"></div>
  </div>
  <div id="bottom-banner" class="banner">
    <div class="container"> </div>
  </div>
  <footer id="footer-nav-wrap">
    <div id="footer-nav" class="layout-wrap">
      <div id="footer-nav-left">
        <div id="footermenu" class="menu-footer-container">
          <ul id="footer-nav-links" class="footermenu">
            <?=$public_r['add_ecms802-dibulink']?>
          </ul>
        </div>
        <div id="footer-copyright">&copy; 2016
          <?=$public_r[sitename]?>
          &nbsp;
          <?=$public_r['add_ecms802-tongji-beian']?>
        </div>
      </div>
      <div id="footer-nav-right">
        <div id="footer-links-icons">
          <?=$public_r['add_ecms802-link']?>
        </div>
        <div class="clear clr"></div>
      </div>
    </div>
  </footer>
  <script type="text/javascript">
	$('.site_loading').animate({'width':'90%'},50); 
</script>
  </div>
</section>
<div class="floatbtn"> <span id="bdshare" class="bdshare_t mobile-hide"><a class="bds_more" href="#" data-cmd="more"></a></span>  <span id="back-to-top"><i class="fa fa-arrow-up"></i></span> </div>
<script type="text/javascript">
/* <![CDATA[ */
var ajax_sign_object = {"redirecturl":"","ajaxurl":" ","loadingmessage":""};
var tin = {"ajax_url":" ","tin_url":"","Tracker":{"type":"home","pid":1},"uid":0}/* ]]> */
</script> 
<script src="/skin/ecms802/js/function.js"></script> 
<script type="text/javascript">var defaultEncoding = 0; var translateDelay = 100; var cookieDomain = " ";</script> 
<script type="text/javascript" id="bdshare_js" data="type=tools" ></script> 
<script type="text/javascript" id="bdshell_js"></script> 
<script type="text/javascript">
        document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
    </script>
<div class="nmplaybar">
  <div class="nmplayer-prosess"></div>
  <div class="nmplayer-wrap">
    <div class="nmplayer-info"><span class="nmplayer-title"></span><span class="nmplayer-time"></span><span class="nmplayer-lrc"></span></div>
    <div class="nmplayer-control">
      <ul>
        <li> <a id="nmplayer-prev" href="javascript:;"> <span class="icon-previous fxfont "></span> </a> </li>
        <li> <a id="nmplayer-button" href="javascript:;"> <span class="icon-pause fxfont "></span> </a> </li>
        <li> <a id="nmplayer-next" href="javascript:;"> <span class="icon-next fxfont"></span> </a> </li>
      </ul>
    </div>
  </div>
</div>
<script type='text/javascript' src='/skin/ecms802/js/base.js?ver=2016.12.21'></script> 
<script type='text/javascript' src='/skin/ecms802/js/wp-embed.min.js?ver=2016.12.21'></script> 
<script type='text/javascript' src='/skin/ecms802/js/theme.min.js?ver=2016.12.21'></script> 
<script type="text/javascript">
	$('.site_loading').animate({'width':'100%'},50); 
</script>
</body>
</html>