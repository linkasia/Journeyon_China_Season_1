<?if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$to=$_GET['to'];
if($to == "" || $to == null){
	return;
}
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
		<link href="/application/views/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="/application/views/css/bootstrap-select.css">

		<!-- CustomCSS -->
		<link rel="stylesheet" type="text/css" href="/application/views/css/style.css">
		<!-- <link href="/application/views/css/agency.css" rel="stylesheet"> -->


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

		<script type="text/javascript" src="/application/views/js/bootstrap-select.js"></script>
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



		<!--<div class="fullscreen-bg"> <img style="width: 100%; min-width: 1920px; min-height: 1080px;"  class="bg" src="/application/views/images/main/bg03.jpg" alt=""> -->

	<div class="form-group">
		<div class="input_container">
			<select class="form-control" id="yourCountry" name="yourCountry">

			<?foreach($countryList as $v){?>
				<option value="<?=$v->class?>,<?=$v->CODE?>"><?=$v->code_nm?></option>
			<?}?>
			</select>

			<input class="form-control input-lg" type="password" id="password" placeholder="您的密码">
			<span></span>
			<input class="form-control input-lg" type="password" id="password_comfirm" placeholder="确认密码">
			<button class="btn-primary btn" id='comfirm' name='comfirm'>登陆</button>
			<!-- <span>已注册？回到登陆页</span> -->
			<button class="btn-danger btn" id='cancel' name='cancel'>取消</button>
		</div>
	</div>



	<script type="text/javascript">
	var _selnum = "<?=$to?>";
		$(function(){

			$('#comfirm').click( function(){
				if($('#password').val().length < 5 || $('#password').val().length >= 21){
					alert("패스워드를 5자 이상 20자이내로 입력해주세요!");
				}else{
					if($('#password').val() == $('#password_comfirm').val())
					{
						var pw = $('#password').val();
						var _countrySelectClass = $('#yourCountry').val().substring(0,4);
						var _code = $('#yourCountry').val().substring(5,9);

						$.ajax({
							type:"POST" ,
							dataType:"text",
							contentType:"application/x-www-form-urlencoded; charset=UTF-8",
							data:{ selnum: _selnum, password:pw, countrySelectClass:_countrySelectClass, code:_code },
							url: "/index.php/member/memberJoin/insertMember",
							success: function (data){
								alert("가입되었습니다.");
								location.href = "<?=site_url('auth/index'); ?>";
							}
						});
					}else{
						alert('패스워드가 다릅니다!');
					}
				}
			});

			$('#logo').click( function(){
					location.href = "http://www.linkasia.co.kr";
				});

			$('#cancel').click( function(){
				location.href = "<?=site_url('auth/index'); ?>";
			});

		});


	</script>

</body>
</html>
