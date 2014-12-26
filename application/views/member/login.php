<?if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
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
		<link href="/application/views/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">

		<!-- CustomCSS -->
		<link rel="stylesheet" type="text/css" href="/application/views/css/style.css">
		<link href="/application/views/css/agency.css" rel="stylesheet">


		<!-- Just for debugging purposes. Don't actually copy this line! -->
		<!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->

		<script src="/application/views/js/jquery-1.8.3.min.js" type="text/javascript"></script>
		<script src="/application/views/js/bootstrap.min.js" type="text/javascript"></script>


		<!-- startbootstrap -->
		<script src="/application/views/js/jquery.js" type="text/javascript"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		<script src="/application/views/js/classie.js"></script>
		<script src="/application/views/js/cbpAnimatedHeader.js"></script>
		<script src="/application/views/js/agency.js"></script>

		<!-- modal plugin -->
		<link rel="stylesheet" href="/application/views/css/simplemodal.css" type="text/css" media="screen" title="no title" charset="utf-8">
		<script src="/application/views/js/mootools-core-1.3.1.js" type="text/javascript" charset="utf-8"></script>
		<script src="/application/views/js/mootools-more-1.3.1.1.js" type="text/javascript" charset="utf-8"></script>
		<script src="/application/views/js/simple-modal.js" type="text/javascript" charset="utf-8"></script>



	</head>

	<body id="login-body" class="index">
		<img id="bg" src="/application/views/images/main/bg03.jpg" alt="">
		<div id="login_wrap"><!-- 사이트 전체를 감싸는 wrap -->
			<header id="header_wrap3">
				<header id="header_top2">
					<ul>
						<li class="logo" name="logo" id="logo"></li>
					</ul>
				</header>
			</header>
			<form id="frm" name="frm" action="/index.php/member/memberJoin/login" method="post" style="margin-top: 50px;" role="form">
			<div class="form-group">
				<div class="input_container">
					<input class="form-control input-lg" type="text" id="inputLarge"  name="inputLarge" placeholder="登录名有误">
					<span id="e-mail2"><ins><font color='#3F7FCE'>已经被申请</font><ins></span>
					<input class="form-control input-lg" type="password" id="password" name="password" placeholder="登陆密码">
					<!--button class="btn-primary btn" id='login' name='login'>登陆</button-->
					<button class="btn-primary btn" id='login' name='login'  onclick="id_save(); return false;">登陆</button>
					<!-- <span>已注册？回到登陆页</span> -->
					<input type='button' class="btn-danger btn"  id='LoginCancel' name='LoginCancel' value='取消'>
					<!--button class="btn-danger btn" id='LoginCancel' name='LoginCancel'>取消</button -->
				</div>
				<div class="sns_container">
					<div class="div1"></div>
					<div class="div2"><span>其它账号登陆</span></div>
					<div class="div3"></div>
					<div class="sns_icon">
						<img src="/application/views/images/main/sns01.png" alt="taobao">
						<img src="/application/views/images/main/sns02.png" alt="weibo">
						<img src="/application/views/images/main/sns03.png" alt="qq">
						<img src="/application/views/images/main/sns04.png" alt="instagram">
						<img src="/application/views/images/main/sns05.png" alt="baidu">
						<img src="/application/views/images/main/sns06.png" alt="rinrin">
						<img src="/application/views/images/main/sns07.png" alt="facebook">
						<img src="/application/views/images/main/sns08.png" alt="alipay">
					</div>
				</div>
			</div>
		</div>
		</form>
		<script type="text/javascript">
			$(function(){
				//로고 클릭시 메인페이지 이동
				$('#logo').click( function(){
					location.href = "http://www.linkasia.co.kr/";
				});

				//취소버튼 클릭시 메인페이지 이동
				$('#LoginCancel').click( function(){
					location.href = "http://www.linkasia.co.kr/";
				});

				$('#e-mail2').click( function(){
					var _selnum = $('#inputLarge').val();
					var _mode = "password";

					if(_selnum == "" || _selnum == null){
						alert("insert Email!");
					}else{
						$.ajax({
							type:"POST" ,
							dataType:"text",
							contentType:"application/x-www-form-urlencoded; charset=UTF-8",
							data:{selnum: _selnum, mode:_mode},
							url:"http://www.linkasia.co.kr/index.php/auth/sendmail",
							success: function (data){
								var SM = new SimpleModal({"btn_ok":"Confirm button"});
								SM.show({
									"model":"confirm",
									"title":"Title",
									"contents":"패스워드가 메일로 전송되었습니다."

								});
							}
						});
					}
				});

			});

			function id_save()
			{
				if(frm.idcheck.checked)
				{
					saveLogin(frm.company_id.value);
					document.frm.submit();
				}
				else
				{
					saveLogin("");
					document.frm.submit();
				}
			}

			function saveLogin(id)
			{
				if(id != "")
				{
					// userid 쿠키에 id 값을5일간 저장
					setsave("com_id", id, 5);
				}else{
				// userid 쿠키 삭제
				setsave("com_id", id, -1);
				}
			}

			function setsave(name, value, expiredays)
			{
				var today = new Date();
				today.setDate( today.getDate() + expiredays );
				document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + today.toGMTString() + ";";
			 }
		</script>
	</body>
</html>
