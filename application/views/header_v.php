<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="viewport" content="width=device-width,initial-scale=1, user-scalable=no" />
	<title>CodeIgniter</title>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<link rel='stylesheet' href="/bbs/include/css/bootstrap.css" />
</head>
<body>
<div id="main">

	<header id="header" data-role="header" data-position="fixed"><!-- Header Start -->
	<br>
		<center> <a href="/bbs" style="text-decoration : none; color : black; font-size : 2em">Home</a></center>
			<p>
<?php
if( @$this->session->userdata['logged_in'] == TRUE )
{
	$un = $un = openssl_decrypt($this->session->userdata['username'], 'AES-256-CBC', KEY_256, 0, KEY_128);
	// $un = $this->session->userdata['username'];
?>
<?php echo $un ?>님 환영합니다. <a href="/bbs/auth/logout" class="btn">로그아웃</a>
<?php
} else {
?>
<a href="/bbs/auth/login" class="btn btn-primary">로그인</a>
<a href="/bbs/auth/signup" class="btn btn-primary">회원가입</a>
<?php
}
?>
		</p>
	</header><!-- Header End -->

	<nav id="gnb"><!-- gnb Start -->
		<ul>
			<li><a rel="external" href="/bbs/<?php echo $this->uri->segment(1, 'board');?>/lists/<?php echo $this->uri->segment(3);?>">게시판 프로젝트</a></li>
		</ul>
	</nav><!-- gnb End -->