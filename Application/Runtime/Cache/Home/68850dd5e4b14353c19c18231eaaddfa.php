<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>这是一个神奇的网站</title>
  <meta name="keywords" content="论坛,PHP">
  <meta name="description" content="最大的社区网站">
  <meta http-equiv="X-UA-Compatible" content="IE=8">
  <link rel="stylesheet" type="text/css" href="/Public/Home/css/style_1_common.css?gQK" /> 
  <link rel="stylesheet" type="text/css" href="/Public/Home/css/style_1_forum_viewthread.css?gQK" /> 
  <link rel="stylesheet" type="text/css" href="/Public/Home/css/layout.css">
  <link rel="stylesheet" type="text/css" href="/Public/Home/css/css.css">
</head>
<body>
<!--网页顶部start-->
  <div id="top">
    <div id="top_main">
      <span class="top_content_left">设为主页</span>
      <span class="top_content_left">收藏本站</span>
      <span class="top_content_right">切换到宽版</span>
    </div>
  </div>
<!--网页顶部end-->
 
	<!--网页主体部分start-->
	<div id="main">
  
		<!--网页顶部广告部分start-->
		<div id="banner"></div>
		<!--网页顶部广告部分end-->
		
		<!--网页头部start-->
		<div id="header">
		
		  <!--logo、登陆部分start-->
		  <div id="logo_login">
		  
			<!--logo部分start-->
			<div id="logo"></div>
			<!--logo部分end-->
			  
			<!--登陆部分start-->
			<div id="login">
			<?php if(empty($_SESSION['flag'])): ?>
			<form action="/index.php?m=home&c=login&a=dologin" method="post">
			  <table>
				<tr>
				  <td>
					<label>帐号</label>
				  </td>
				  <td>
					<input type="text" name="uname" />
				  </td>
				  <td width="80px">
					<label><input type="checkbox" name="remember" />自动登录</label>
				  </td>
				  <td>
					找回密码
				  </td>
				</tr>
				<tr>
				  <td>
					<label>密码</label>
				  </td>
				  <td>
					<input type="password" name="upwd" />
				  </td>
				  <td>
					<input type="submit" value="立即登录" />
				  </td>
				  <td>
					<a href="/index.php?m=home&c=login&a=signUp">立即注册</a>
				  </td>
				</tr>
			  </table>
			</form>
			<?php else: ?>
				用户<?= $_SESSION['userInfo']['uname']?>
				<a href="/index.php?m=home&c=login&a=logout">退出</a>
			<?php endif; ?>
			</div>
			<!--登陆部分start-->
			
		  </div>
		  <!--logo、登陆部分end-->
		  
		  <!--菜单部分start-->
		  <div id="menu">
			<ul>
			  <li><a href="#">论坛</a></li>
			  <li class="line"></li>
			  <li><a href="">论坛</a></li>
			  <li class="line"></li>
			  <li><a href="">论坛</a></li>
			  <li class="line"></li>
			  <li><a href="">论坛</a></li>
			  <li class="line"></li>
			</ul>
		  </div>
		  <!--菜单部分end-->
			
			<!--搜索部分start-->
			<div id="search">
				<table cellpadding="0" cellspacing="0">
				  <tr>
					<td class="search_ico"></td>
					<td class="search_input">
					  <input type="text" name="search" x-webkit-speech speech placeholder="请输入搜索内容" />
					</td>
					<td class="search_select">
					  <a href="">帖子</a>
					  <span class="select"></span>
					</td>
					<td class="search_btn">
					  <button>搜索</button>
					</td>
					<td class="search_hot">
					  <div>
						<strong>热搜:</strong>
						<a href="">交友</a>
						<a href="">教育</a>
						<a href="">幽默</a>
						<a href="">搞笑</a>
						<a href="">房产</a>
						<a href="">购物</a>
						<a href="">二手</a>
						<a href="">衣服</a>
						<a href="">鞋子</a>
						<a href="">帮助</a>
						<a href="">折扣</a>
						<a href="">电影</a>
					  </div>
					</td>
				  </tr>
				</table>
			
			</div>
			<!--搜索部分end-->
			
			<!--小提示部分start-->
			<div id="tip">
			
				<!--路径部分start-->
				<div id="path">
				  <a href="" class="index"></a>
				  <em></em>
				  <a href="" class="path_menu">论坛</a>
				</div>
				<!--路径部分end-->
				
				<!--统计部分start-->
				<div id="count">
				  今日: <em>1520</em>
				  <span class="pipe">|</span>
				  昨日: <em>1520</em>
				  <span class="pipe">|</span>
				  帖子: <em>1520</em>
				  <span class="pipe">|</span>
				  会员: <em>1520</em>
				  <span class="pipe">|</span>
				  欢迎新会员: <em><a href="">1520</a></em>
				</div>
				<!--统计部分end-->
				
			</div>
			<!--小提示部分end-->
			
		</div>
		<!--网页头部end-->

<!--内容部分start-->
		<div class="content">			
			<form action="/index.php?m=home&c=login&a=register" method="post">
				<table align="center" width="300" height="60">
					<tr>
						<td><label>用户名:</label></td>
						<td><input type="text" name="uname"></td>
					</tr>
					<tr>
						<td><label>密码:</label></td>
						<td><input type="password" name="upwd"></td>
					</tr>
					<tr>
						<td><label>确认密码:</label></td>
						<td><input type="password" name="reupwd"></td>
					</tr>
					<tr>
						<td><label>手机号:</label></td>
						<td><input type="text" name="tel"></td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" value="注册">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="reset" name="重置">
						</td>
					</tr>
					
				</table>
			</form>
				
		</div>
		<!--内容部分end-->

<!--友情链接部分start-->
        <div id="friend_link">
            
            <!--友情链接标题部分start-->
            <div id="fri_title">
              <span>友情链接</span>
            </div>
            <!--友情链接标题部分end-->
            
            <!--友情链接内容部分start-->
            <div class="fri_content">
                <div class="fri_left"><img src="/Public/Home/images/20080926_9b2baec56b95a9ae46ab8ir8uBrEJQjx.gif" /></div>
                <div class="fri_right">
                  <p><strong>Discuz! 产品</strong></p>
                  <p>Discuz! 官方网站 用户会员区</p>
                </div>
            </div>
            <!--友情链接内容部分end-->
            
        </div>
        <!--友情链接部分end-->
	
	</div>
	<!--网页主体部分end-->
	
	<!--尾部部分start-->
	<div id="footer">
	
		<!--尾部左侧部分start-->
		<div id="footer_left">
		  <p>Powered by <strong><a href="http://www.discuz.net" target="_blank">Discuz!</a></strong> <em>X2.5</em></p>
		  <p class="xs0">© 2001-2012 <a href="http://www.comsenz.com" target="_blank">Comsenz Inc.</a></p>
		</div>
		<!--尾部左侧部分start-->
		
		<!--尾部右侧部分start-->
		<div id="footer_right">
		  <p>
			<a href="http://www.discuz.net/archiver/">Archiver</a>
			<span class="pipe">|</span>
			<a href="">手机版</a>
			<span class="pipe">|</span>
			<strong>
			  <a href="http://www.comsenz.com/" target="_blank">北京康盛新创科技有限责任公司</a>
			</strong>
		  ( <a href="http://www.miitbeian.gov.cn/" target="_blank">京ICP证110024号|京网文[2011]0019-007号|北京公安备案:1101082242</a> )&nbsp;
			<a href="http://discuz.qq.com/service/security" target="_blank" title="防水墙保卫网站远离侵害">
		  </p>
		  <p class="xs0">
		  GMT+8, 2012-11-13 20:33
		  <span id="debuginfo">
		  , Processed in 0.030692 second(s), 2 queries
		  , Gzip On, Memcached On.
		  </span>
		  </p>
		</div>
		<!--尾部右侧部分end-->
		
	</div>
	<!--尾部部分end-->
</body>
</html>