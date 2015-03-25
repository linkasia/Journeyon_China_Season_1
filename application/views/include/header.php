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
		<link rel="stylesheet" type="text/css" href="/application/views/css/bootstrap-select.css">

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

		<script src="/application/views/js/jquery-1.11.0.min.js" type="text/javascript"></script>
		<script src="/application/views/js/bootstrap.js" type="text/javascript"></script>
		<script type="text/javascript" src = "https://maps.googleapis.com/maps/api/js?sensor=false&language=kr"></script>

		<!-- slider pro plugin install -->
		<script type="text/javascript" src="/application/views/js/jquery.sliderPro.min.js"></script>
		<link rel="stylesheet" type="text/css" href="/application/views/css/slider-pro.css" media="screen"/>

		<!-- startbootstrap -->
		<!-- <script src="/application/views/js/jquery.js" type="text/javascript"></script> -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		<script src="/application/views/js/classie.js"></script>
		<script src="/application/views/js/cbpAnimatedHeader.js"></script>
		<script src="/application/views/js/agency.js"></script>
		<script src="/application/views/js/jquery.form.min.js"></script>

		<script type="text/javascript" src="/application/views/js/bootstrap-select.js"></script>

		<!-- HTML 편집기-->
		<script type="text/javascript" src="/application/views/js/HuskyEZCreator.js" charset="utf-8"></script>
		<!-- <script type="text/javascript" src="/application/views/js/jindo.min.js" charset="utf-8"></script>
		<script type="text/javascript" src="/application/views/js/jindo_component.js" charset="utf-8"></script>
		<script type="text/javascript" src="/application/views/js/SE2B_Configuration_Service.js" charset="utf-8"></script>
		<script type="text/javascript" src="/application/views/js/SE2B_Configuration_General.js" charset="utf-8"></script>
		<script type="text/javascript" src="/application/views/js/SE2BasicCreator.js" charset="utf-8"></script>
		<script src='/application/views/js/smarteditor2.min.js' charset='utf-8'></script>
		<script src='photo_uploader/plugin/hp_SE2M_AttachQuickPhoto.js' charset='utf-8'></script>

		<link href="/application/views/css/smart_editor2.css" rel="stylesheet" type="text/css"> -->
		<!-- end-->

		<script src='js/smarteditor2.min.js' charset='utf-8'></script>
		<script src='photo_uploader/plugin/hp_SE2M_AttachQuickPhoto.js' charset='utf-8'></script>

		<!-- 캘린더 js 불러온 부분 -->
		<link rel="stylesheet" href="/application/views/jqwidgets/styles/jqx.base.css" type="text/css" />
		<!-- <script type="text/javascript" src="/application/views/scripts/jquery-1.11.1.min.js"></script> -->
		<script type="text/javascript" src="/application/views/scripts/demos.js"></script>
		<script type="text/javascript" src="/application/views/jqwidgets/jqxcore.js"></script>
		<script type="text/javascript" src="/application/views/jqwidgets/jqxdatetimeinput.js"></script>
		<script type="text/javascript" src="/application/views/jqwidgets/jqxcalendar.js"></script>
		<script type="text/javascript" src="/application/views/jqwidgets/jqxtooltip.js"></script>
		<script type="text/javascript" src="/application/views/jqwidgets/jqxbuttons.js"></script>
		<script type="text/javascript" src="/application/views/jqwidgets/jqxscrollbar.js"></script>
		<script type="text/javascript" src="/application/views/jqwidgets/jqxlistbox.js"></script>
		<script type="text/javascript" src="/application/views/jqwidgets/jqxdropdownlist.js"></script>
		<script type="text/javascript" src="/application/views/jqwidgets/globalization/globalize.js"></script>

		<!-- 사진 js 불러온 부분 -->
		<script type="text/javascript" src="/application/views/scripts/jasny-bootstrap.js"></script>

		<!-- simple modal plugin -->
		<link rel="stylesheet" href="/application/views/css/simplemodal.css" type="text/css" media="screen" title="no title" charset="utf-8">
		<script src="/application/views/js/mootools-core-1.3.1.js" type="text/javascript" charset="utf-8"></script>
		<script src="/application/views/js/mootools-more-1.3.1.1.js" type="text/javascript" charset="utf-8"></script>
		<script src="/application/views/js/simple-modal.js" type="text/javascript" charset="utf-8"></script>
		<!-- script src="/application/views/js/demo.js" type="text/javascript" charset="utf-8"></script -->

		<!-- 사진 css 불러온 부분 -->
		<link rel="stylesheet" href="/application/views/css/jasny-bootstrap.css" type="text/css" media="screen" title="no title" charset="utf-8">

		<!-- 1/30 추가 스크립트 -->
		<!-- <script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-59164921-1', 'auto');
		  ga('send', 'pageview');
		</script> -->

	</head>


	<body id="page-top" class="index">
		<div id="wrap"><!-- wrap 각주에 글씨-->
			<header id="header_wrap">
				<!-- <video autoplay loop id="bgvid">
					<source src="/application/views/images/Paris-P1-1.mp4">
					<source src="/application/views/images/Paris-P1-1.webm">
				</video> -->
				<video autoplay loop id="bgvid">
					<source src="/application/views/images/g3.mp4">
					<source src="/application/views/images/Paris-P1-1.webm">
				</video>
				<header id="header_top">
					<div id="darken"></div>
					<ul>
						<li class="logo" name="logo" id="logo"></li>
							<?

							?>
						<li class="how_works" name="how_works" id="how_works" data-toggle="modal" data-target="#how_worksmodal" data-backdrop="static">如何参与</li>
						<!-- <li class="how_works" name="how_works" id="how_works"><a href="/index.php/City/country/productUpload" class="product-upload" id='productUpload' name='productUpload'><span class="glyphicon glyphicon-pencil"></span>  我要参与</a></li> -->



						<?
						if(@$this->session->userdata['logged_in'] == TRUE)
						{
							if($this->session->userdata['email']!=null){
								$data['bookCount']= $this->country_M->bookCount($this->session->userdata['num']);
								$data['msgCount']= $this->country_M->realChat( $this->session->userdata['num']);
							// $this -> load ->view('/include/realtimechat',$data);
							?>
							<li class="become_host" name="become_host" id="become_host">申请加入当地微导游</li>
							<!-- <li class="login_email"><a href="/index.php/mypage/myPage_M/mypageintro" id="mypage"><?=$this->session->userdata['email']?></a></li> 이메일 -->
							<!-- <a href="/index.php/member/memberJoin/logout" class="logout"></a> -->
							<!--li class="logout" name="logout" id="logout"></li-->
						<?$this -> load ->view('/include/talkbox',$data)?>


						<li class="profilePic">
							<div class="dropdown">
								<img src="<?=$this->session->userdata['face_img_path']?>" alt="myprofile_Picture" class="img-circle dropdown-toggle" type="button" id="profileMenu" data-toggle="dropdown" aria-expanded="true"><span class="caret caret-block" data-toggle="dropdown" aria-expanded="true"></span>
								<!-- <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true"></button> -->
								<ul class="dropdown-menu" role="menu" aria-labelledby="profileMenu">
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/index.php/mypage/myPage_M/mypublic?userNum=<?=$this->session->userdata['num']?>">个人页面</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/index.php/mypage/myPage_M/myaccountSetting">编辑及设定</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/index.php/mypage/myPage_M/myguide?mode=0">微导游</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/index.php/mypage/myPage_M/myguest?mode=0">旅行者</a></li>
									<?if($this->session->userdata['email'] == "admin@linkasia.co.kr"){?>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/index.php/admin/adminMenu/mainTotalMenu?mode=">admin</a></li>
									<?}?>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/index.php/member/memberJoin/logout">退出</a></li>
								</ul>
							</div>
						</li>
						<?}?>

						<?}else{?>
							<li class="login" name="login" id="login">登录&nbsp;&nbsp;|</li>
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

<!-- modal1 시작 -->
<div class="modal fade" id="how_worksmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title txt_blue" id="exampleModalLabel">如何参与</h4>
			</div>
			<div class="modal-body">
				<p class="how_works_p">在Journey On! 卓尼上，您会找到旅行的新体验，新乐趣。
					在这里您会发现很多没有在旅游书上出现的景点和地道活动；更没有广告宣传和强制消费的束缚，您可以放心的去享受与别不同的旅游；尽情的感受当地的文化；拥抱您旅途上的人和事。
					登录后，您可以收藏您感兴趣的微旅程和挑选您的微旅行导游；也可以一尝当导游的体验，带世界各地的朋友们去看您住的地方的好风光。
				您也可以使用其他社区平台的账号来使用Journey On!卓尼，把微旅行文化分享到每个角落。
					</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- modal 끝 -->


		<script type="text/javascript">
			function orderBook(){
				location.href = "/index.php/mypage/myPage_M/myguide?mode=3";
			}

			function goChat(){
				location.href = "/index.php/auth/chat_List";
			}

			$(function(){
				/*
				$('#chatList').click( function(){
					location.href = "<?=site_url('auth/chat_List'); ?>";
				});
				*/
				$('#logo').click( function(){
					location.href ="/index.php";
				});

				$('#become_host').click( function(){
					location.href = "/index.php/mypage/myPage_M/myguide?mode=1";
				});

				$('#how_works').click( function(){
					//alert("how_works");
				});

				$('#login').click( function(){
					location.href = "/index.php/auth/Login_view";
				});

				$('#signup').click( function(){
					location.href = "/index.php/auth/member_join?id=";
				});
			});

		</script>



	</body>
</html>
