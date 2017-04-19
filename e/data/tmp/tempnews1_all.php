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
<title><?=$grpagetitle?>-<?=$public_r[sitename]?></title>
<meta name="keywords" content="<?=$ecms_gr[keyboard]?>" />
<meta name="description" content="<?=esub(NoHtml($navinfor[newstext]),300)?>" />
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
<script type='text/javascript' src='/e/data/js/ajax.js'></script>
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
        <h1><?=$grpagetitle?></h1>
        <div class="breadcrumbs-text"><?=$grurl?>&nbsp;»&nbsp;<?=$grpagetitle?></div>
      </div>
    </div>
  </div>
  <div id="main-wrap">
    <div id="sitenews-wrap" class="container"> </div>
    <div id="single-blog-wrap" class="container two-col-container">
      <div id="main-wrap-left">
        <div class="content">
          <div id="single-meta"> <span class="single-meta-author"><i class="fa fa-user">&nbsp;</i><?=$ecms_gr[username]?></span> <span class="single-meta-time"><i class="fa fa-calendar">&nbsp;</i><?=date('Y-m-d H:i:s',$ecms_gr[newstime])?></span> <span class="single-meta-category"><i class="fa fa-folder-open">&nbsp;</i><a href="<?=$grclassurl?>" rel="category tag"><?=$class_r[$ecms_gr[classid]][classname]?></a></span> <span class="single-meta-comments">|&nbsp;&nbsp;<i class="fa fa-comments"></i>&nbsp;<a href="<?=$grtitleurl?>#comments" class="commentbtn">查看评论</a></span> <span class="single-meta-views"><i class="fa fa-fire"></i>&nbsp;<script src="http://localhost/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&addclick=1"></script>&nbsp;</span> </div>
          <div class="rates" pid="1320"> </div>
          <div id="singletop-banner" class="banner"> </div>
          <div class="single-thumb">
            <?=$public_r['add_ecms802-ad04']?>
          </div>
          <div class="single-text"> <?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?>
            <div class="page5">[!--page.url--]</div>
          </div>
          <div class="sg-tag"><i class="fa fa-tag"></i>&nbsp;&nbsp;<? @sys_eShowTags('selfinfo',100,0,'',0,r,'&nbsp;',0,'');?></div>
          <div class="sg-cp"> <i class="fa fa-bullhorn">&nbsp;</i>
            <p>除特别注明外，本站所有文章均为<a href="http://localhost/" title="<?=$public_r[sitename]?>" target="_blank">
              <?=$public_r[sitename]?>
              </a>原创，转载请注明出处来自<a href="<?=$grtitleurl?>" title="<?=$grpagetitle?>"><?=$grpagetitle?></a></p>
          </div>
          <div id="singlebottom-banner" class="banner"> </div>
          <div class="sg-act">
            <div class="mark-like-btn tinlike clr"> <a class="share-btn like-btn " pid="1320" href="JavaScript:makeRequest('http://localhost/e/public/digg/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&dotop=1&doajax=1&ajaxarea=diggnum<?=$ecms_gr[id]?>','EchoReturnedText','GET','');"  
							       class="good"> <span class="ion-thumbsup"></span> <i class="fa fa-heart"></i> <b class="count" id="diggnum<?=$ecms_gr[id]?>"><script src="http://localhost/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&down=5"></script></b> 人喜欢 </a> </div>
            <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare baidu-share"> <a href="#" class="bds_tsina weibo-btn share-btn" data-cmd="tsina"> <i class="fa fa-weibo"></i>分享到微博 </a> <a href="#" class="bds_weixin weixin-btn share-btn"> <i class="fa fa-weixin"></i>分享到朋友圈
              <div id="weixin-qt" style="display: none; top: 80px; opacity: 1;"> <img src="http://s.jiathis.com/qrcode.php?url=<?=$grtitleurl?>" width="120">
                <div id="weixin-qt-msg">打开微信，点击底部的“发现”，使用“扫一扫”即可将网页分享至朋友圈。</div>
              </div>
              </a> <a href="#" class="bds_more more-btn share-btn" data-cmd="more"><i class="fa fa-share-alt fa-flip-horizontal"></i><span class="pc-text">更多</span><span class="mobile-text">分享</span></a> </div>
          </div>
          <div class="clear"></div>
          <div class="relpost">
            <ul>
              <? @sys_GetEcmsInfo('selfinfo',4,26,0,0,18,0);?>
            </ul>
          </div>
          <div class="navigation">
            <div class="navigation-left"> <span>上一篇</span> <?php
	$next_r=$empire->fetch1("select isurl,titleurl,classid,id,title from {$dbtbpre}ecms_".$class_r[$ecms_gr[classid]][tbname]." where id<$ecms_gr[id] and classid='$ecms_gr[classid]' order by id desc limit 1");
	if(empty($next_r[id]))
	{$infonext="<a href='".$grclassurl."'>返回列表</a>";}
	else
	{
		$nexttitleurl=sys_ReturnBqTitleLink($next_r);
		$infonext="<a href='".$nexttitleurl."'>".$next_r[title]."</a>";
	}
	echo $infonext;
	?> </div>
            <div class="navigation-right"> <span>下一篇</span> <?php
	$next_r=$empire->fetch1("select isurl,titleurl,classid,id,title from {$dbtbpre}ecms_".$class_r[$ecms_gr[classid]][tbname]." where id>$ecms_gr[id] and classid='$ecms_gr[classid]' order by id limit 1");
	if(empty($next_r[id]))
	{$infonext="<a href='".$grclassurl."'>返回列表</a>";}
	else
	{
		$nexttitleurl=sys_ReturnBqTitleLink($next_r);
		$infonext="<a href='".$nexttitleurl."'>".$next_r[title]."</a>";
	}
	echo $infonext;
	?></div>
          </div>
          <?=$public_r['add_ecms802-ad05']?>
        </div>
        <div id="comments"></div>
        <div class="comments-main">
          <div id="respond_box">
            <div style="margin:8px 0 8px 0">
              <h3 class="multi-border-hl"></h3>
            </div>
            <div id="respond">
              <?php
if($navinfor[closepl])
{
?>
              <?=$public_r['add_ecms802-changyan']?>
              <?
}
else
{
?>
              <link href="/skin/ecmspl/css/pl.css" rel="stylesheet">
<div class="showpage" id="plpost">
<table width="100%" border="0" cellpadding="0" cellspacing="0"  style="line-height: 25px; padding: 5px 3px 1px 8px; font-size: 18px;">
<tr><td><strong><font color="#333333">留言与评论（共有 <span id="infocommentnumarea">0</span> 条评论）</font></strong></td></tr>
</table>
<script>
		  function CheckPl(obj)
		  {
		  if(obj.saytext.value=="")
		  {
		  alert("您没什么话要说吗？");
		  obj.saytext.focus();
		  return false;
		  }
		  return true;
		  }
		  </script>
<form action="/e/pl/doaction.php" method="post" name="saypl" id="saypl" onsubmit="return CheckPl(document.saypl)">
<table width="100%" border="0" cellpadding="0" cellspacing="0" id="plpost">
<tr>
<td>
<table width="100%" border="0" cellspacing="10" cellpadding="0">
<tr>
<td>
<script src="http://localhost/e/pl/loginjspl.php"></script>
<textarea name="saytext" rows="6" id="saytext" placeholder="请遵守互联网相关规定，不要发布广告和违法内容!"></textarea>
<script src="/d/js/js/plface.js"></script>&nbsp;&nbsp;&nbsp;
<table width='100%' align='left' cellpadding=3 cellspacing=1 bgcolor='#FFF'>
<tr>
<td width="80%" height="40" bgcolor="#FFFFFF">验证码：<input name="key" type="text" class="inputText" size="16" />
<img src="/e/ShowKey/?v=pl" align="absmiddle" name="plKeyImg" id="plKeyImg" onclick="plKeyImg.src='/e/ShowKey/?v=pl&t='+Math.random()" title="看不清楚,点击刷新" /> 
</td> 
<td width="20%" height="40" bgcolor="#FFFFFF"> 
<input name="sumbit" type="submit" value="提交评论" tabindex="6" style="border-radius: 5px;font-size: 16px;background: #51aded none repeat scroll 0% 0%;border: 0px none;margin: 0px 16px;padding: 1px 16px;height: 33px;line-height: 30px;color: rgb(255, 255, 255);opacity: 0.95;">
<input name="id" type="hidden" id="id" value="<?=$ecms_gr[id]?>" />
<input name="classid" type="hidden" id="classid" value="<?=$ecms_gr[classid]?>" />
<input name="enews" type="hidden" id="enews" value="AddPl" />
<input name="repid" type="hidden" id="repid" value="0" />
<input type="hidden" name="ecmsfrom" value="<?=$grtitleurl?>">
</td>
</tr>  
</table> 
</td>
</tr>
</table>
</td>
</tr>
</table></form>
	<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
        <tr>
          <td bgcolor="#FFFFFF" id="infocommentarea"></td>
        </tr>
        </table>
 <script src="http://localhost/e/extend/infocomment/commentajax.php?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>"></script>
</div>	
              <?
}
?>
              <div class="clear"></div>
            </div>
          </div>
        </div>
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
  <div id="ft-wg-sr">
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
<div class="f8f482afb85e4ded"></div>
<div class="floatbtn"> <span class="commentbtn mobile-hide"><i class="fa fa-comments"></i></span> <span id="bdshare" class="bdshare_t mobile-hide"><a class="bds_more" href="#" data-cmd="more"></a></span>  <span id="back-to-top"><i class="fa fa-arrow-up"></i></span> </div>
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