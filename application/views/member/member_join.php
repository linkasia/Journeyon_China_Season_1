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

	</head>
	

	<body id="page-top" class="index">

		<img id="bg" src="/application/views/images/main/bg03.jpg" alt="">
		<div id="wrap"><!-- 사이트 전체를 감싸는 wrap -->
			<header id="header_wrap3">
				<header id="header_top2">
					<ul>
						<li class="logo" name="logo" id="logo"></li>
					</ul>
				</header>
			</header>
			<section id="member_container">
				<div class="form-group">
					<div class="member_container">
							<input class="form-control input-lg" type="text" id="inputLarge" placeholder="登录名有误">
							<input  type="hidden" id="hidden_mail" placeholder="">
							<!-- <span id="imi_id">已经被申请</span> -->
							<ul id="ul_margin">
								<li id='ul'><input type='button' class="btn-primary btn" id='send' name='send' value='免费注册'></li>
							</ul>
							<span id="repeated_join" name="repeated_join">已注册？回到登陆页</span>
							<button class="btn-danger btn" id='cancel' name='cancel'>取消</button>
							<span id="clause" name="clause">《蚂蜂窝用户使用协议》</span>
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
				</form>
			</section>
		</div>


<script type="text/javascript">
		//인증번호 생성
		var _random="";

		$(function(){
				$('#send').click( function()
				{
					var oldMail = document.getElementById('hidden_mail');
					var newOld=document.getElementById('inputLarge');
					
					var format  = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;
					 _selnum = $('#inputLarge').val();
					
					if(_selnum == null || _selnum=="")
					{
						alert('请填写Email！');
						return;    
					}
					else if(_selnum.search(format) == -1)
					{
						// 형식에 어긋남
						alert("이메일 형식에 맞게 입력해 주세요");
						$("#inputLarge").focus(); //해당 input으로 포커스 이동
						return;
					}else{
						if(oldMail.value != newOld.value)
						{
							//입력한 메일주소비교
							if(oldMail.value != newOld.value){
								oldMail.value=newOld.value;
							}

							$.ajax({
								type:"POST" ,
								dataType:"text",
								contentType:"application/x-www-form-urlencoded; charset=UTF-8",
								data:{selnum: _selnum},
								url:"http://163.180.73.62/index.php/member/memberJoin/searchMem",
								success: function (data){
									if(data =="fail"){
										alert("이미가입되어있습니다.");
									}else{
										$.ajax({
											type:"POST" ,
											dataType:"text",
											contentType:"application/x-www-form-urlencoded; charset=UTF-8",
											data:{selnum: _selnum},
											url:"http://163.180.73.62/index.php/auth/sendmail",
											success: function (data){
												alert("인증메일을 전송하였습니다!");
											}
										});
									}
								}
							});
						}else{
							alert("전송된 메일을 확인하세요");
						}
					}
				});
				
				$('#logo').click( function(){
					location.href = "http://163.180.73.62:80/";
				});

				$('#cancel').click( function(){
					location.href = "<?=site_url('auth/index'); ?>";
				});

			});

</script>

	</body>
</html>
