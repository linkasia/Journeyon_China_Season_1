<?if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
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
	</head>
	

	<body id="page-top" class="index">
		
		<div id="wrap"><!-- wrap -->
			<header id="header_wrap">
				<header id="header_top">
					<ul>
						<li class="logo" name="logo" id="logo"></li>
						<li class="become_host" name="become_host" id="become_host"></li>
						<li class="how_works" name="how_works" id="how_works"></li>
						<li class="login" name="login" id="login"></li>
						<!-- <li class="logout" name="logout" id="logout"></li> -->
						<li class="signup" name="signup" id="signup"></li>
					</ul>
				</header>
			</header>
		</div>


		<script type="text/javascript">
		
			$(function(){
				$('#logo').click( function(){
					location.href = "http://163.180.73.25:80/";
					/*
					if(document.getElementById('header_wrap2') == null){
						if(document.getElementById('header_wrap').id == 'header_wrap'){
							document.getElementById('header_wrap').id = 'header_wrap2';
						}else{
							document.getElementById('header_wrap').id = 'header_wrap';
						}
					}else{
						if(document.getElementById('header_wrap2').id == 'header_wrap'){
							document.getElementById('header_wrap2').id = 'header_wrap2';
						}else{
							document.getElementById('header_wrap2').id = 'header_wrap';
						}
					}
					*/
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
					//location.href = "http://127.0.0.1/"
				});

				$('#signup').click( function(){
					location.href = "<?=site_url('auth/member_join'); ?>";
				});

			});
		
		</script>
	</body>
</html>
