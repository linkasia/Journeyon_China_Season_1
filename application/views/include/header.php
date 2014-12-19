<?if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$mainTitle="为您准备的300个不同的微旅行";
$maincontents="当地人推荐的最佳自由行之地 Journey On";
?>
<!DOCTYPE html>
<html lang="ko">
	<head>
		<meta charset="UTF-8">
		<meta name="Generator" content="EditPlus®">
		<meta name="Author" content="">
		<meta name="Description" content="">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Journey On - 上海卓尼旅游咨询有限公司</title>

		<!-- Bootstrap core CSS (나중에 경로 다시 잡아줘야할 듯 -->
		<link href="/application/views/css/bootstrap.css" rel="stylesheet" type="text/css">	

		<!-- Bootstrap Theme -->
		<link href="/application/views/css/bootstrap-theme.css" rel="stylesheet" type="text/css">
		
		<!-- CustomCSS -->
		<link rel="stylesheet" type="text/css" href="/application/views/css/style.css">
		<!-- <link href="/application/views/css/agency2.css" rel="stylesheet"> -->


		<!-- Just for debugging purposes. Don't actually copy this line! -->
		<!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->

		<script src="/application/views/js/jquery-1.8.3.min.js" type="text/javascript"></script>
		<script src="/application/views/js/bootstrap.js" type="text/javascript"></script>
		<script type="text/javascript" src = "https://maps.googleapis.com/maps/api/js?sensor=false&language=kr"></script>

		<!-- startbootstrap -->
		<script src="/application/views/js/jquery.js" type="text/javascript"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		<script src="/application/views/js/classie.js"></script>
		<script src="/application/views/js/cbpAnimatedHeader.js"></script>
		<script src="/application/views/js/agency.js"></script>
		
		<!-- 캘린더 js 불러온 부분 -->
		<link rel="stylesheet" href="/application/views/jqwidgets/styles/jqx.base.css" type="text/css" />
		<!-- <script type="text/javascript" src="/application/views/scripts/jquery-1.11.1.min.js"></script> -->
		<script type="text/javascript" src="/application/views/scripts/demos.js"></script>
		<script type="text/javascript" src="/application/views//jqwidgets/jqxcore.js"></script>
		<script type="text/javascript" src="/application/views/jqwidgets/jqxdatetimeinput.js"></script>
		<script type="text/javascript" src="/application/views/jqwidgets/jqxcalendar.js"></script>
		<script type="text/javascript" src="/application/views//jqwidgets/jqxtooltip.js"></script>
		<script type="text/javascript" src="/application/views/jqwidgets/globalization/globalize.js"></script>
	</head>
	

	<body id="page-top" class="index">
		
		<div id="wrap"><!-- wrap -->
			<header id="header_wrap">
				<!-- <video autoplay loop id="bgvid">
					<source src="/application/views/images/Paris-P1-1.mp4">
					<source src="/application/views/images/Paris-P1-1.webm">
				</video> -->
				<header id="header_top">
					<ul>
						<li class="logo" name="logo" id="logo"></li>
						<li class="become_host" name="become_host" id="become_host">申请加入当地人</li>
						<li class="how_works" name="how_works" id="how_works">如何参与</li>
						<?
						if(@$this->session->userdata['logged_in'] == TRUE)
						{
							if($this->session->userdata['email']!=null){
							?>
							<li class="login_email"><a href="/index.php/mypage/myPage_M/mypageintro" id="mypage"><?=$this->session->userdata['email']?></a></li>
							<a href="/index.php/member/memberJoin/logout" class="logout">退出<!-- <img src="/application/views/images/main/img04_text2.png" alt=""> --></a>
							<!--li class="logout" name="logout" id="logout"></li-->
						<?}?>
							
						<?}else{?>
							<li class="login" name="login" id="login">登陆&nbsp;&nbsp;|</li>
							<li class="signup" name="signup" id="signup">注册</li>
						<?}?>
					</ul>
				</header>
				<div id="headerTitle">
					<h2 id="headerText"><img src="/application/views/images/main/headerText.png" alt=""></h2>
					<h4 id="headerContents"></h4>			
				</div>
			</header>
		</div>


		<script type="text/javascript">
			$(function(){
				$('#logo').click( function(){
					location.href ="http://www.linkasia.co.kr/";
				});

				$('#become_host').click( function(){
					alert("become_host");
					//location.href = "http://127.0.0.1/"
				});

				$('#how_works').click( function(){
					//alert("how_works");
				});

				$('#login').click( function(){
					location.href = "<?=site_url('auth/Login_view'); ?>";
				});

				$('#logout').click( function(){
					alert("logout");
				});

				$('#signup').click( function(){
					location.href = "<?=site_url('auth/member_join'); ?>";
				});
			});
		
		</script>
	</body>
</html>
