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



		<!-- simple modal plugin -->
		<link rel="stylesheet" href="/application/views/css/simplemodal.css" type="text/css" media="screen" title="no title" charset="utf-8">
		<script src="/application/views/js/mootools-core-1.3.1.js" type="text/javascript" charset="utf-8"></script>
		<script src="/application/views/js/mootools-more-1.3.1.1.js" type="text/javascript" charset="utf-8"></script>
		<script src="/application/views/js/simple-modal.js" type="text/javascript" charset="utf-8"></script>
		<!-- script src="/application/views/js/demo.js" type="text/javascript" charset="utf-8"></script -->

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
							<input class="form-control input-lg" type="text" id="inputLarge" placeholder="您的邮箱" value=<?=$_REQUEST['id'];?>>
							<input  type="hidden" id="hidden_mail" placeholder="">
							<!-- <span id="imi_id">已经被申请</span> -->
							<ul id="ul_margin">
								<li id='ul'><input type='button' class="btn-primary btn" id='send' name='send' value='免费注册'></li>
							</ul>
							<span id="repeated_join" name="repeated_join">《已注册？回到登陆页》</span>
							<button class="btn-danger btn" id='cancel' name='cancel'>取消</button>
							<span id="clause" name="clause"><a href="#" data-toggle="modal" data-target="#myModal2">《隐私权政策》</a></span>

										<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<div class="modal-dialog2">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
														<h4 class="modal-title" id="myModalLabel">服务条款</h4>
													</div><!-- modal-header 닫힘 -->
													<div class="modal-body2">
														  <div id='content'>
																<p>

		<h4 class="title">1. 特别提示</h3><br>
  		欢迎您来到卓尼旅行。请您仔细阅读以下条款，如果您对本协议的任何条款表示异议，您可以选择不进入卓尼旅行。当您注册成功，无论是进入卓尼旅行，还是在卓尼旅行上发布任何内容（即“内容”），均意味着您（即“用户”）完全接受本协议项下的全部条款。<br><br><br>

		<h4 class="title">2. 服务内容</h4><br>
		2.1 本服务的具体内容由卓尼旅行根据实际情况提供，卓尼旅行保留随时变更、中断或终止部分或全部服务的权利。卓尼旅行不承担因业务调整给用户造成的损失。除非本协议另有其它明示规定，增加或强化目前本服务的任何新功能，包括所推出的新产品，均受到本协议之规范。用户了解并同意，本服务仅依其当前所呈现的状况提供，对于任何用户通讯或个人化设定之时效、删除、传递错误、未予储存或其它任何问题，卓尼旅行均不承担任何责任。<br>
		2.2 卓尼旅行在提供本服务时，可能会对部分服务的用户收取一定的费用。在此情况下，卓尼旅行会在相关页面上做明确的提示。如用户拒绝支付该等费用，则不能使用相关的服务。<br>
		2.3 用户理解，卓尼旅行仅提供相关的本服务，除此之外与相关本服务有关的设备（如电脑、调制解调器及其他与接入互联网有关的装置）及所需的费用（如为接入互联网而支付的电话费及移动上网费）均应由用户自行负担。<br><br><br>

		<h4 class="title">3. 使用规则</h4><br>
		3.1 用户注册成功后，卓尼旅行将给予每个用户一个用户帐号及相应的密码，该用户帐号和密码由用户负责保管；用户应当对以其用户帐号进行的所有活动和事件负法律责任。<br>
		3.2 用户须对在卓尼旅行的注册信息的真实性、合法性、有效性承担全部责任，用户不得冒充他人；不得利用他人的名义发布任何信息；不得恶意使用注册帐户导致其他用户误认；否则卓尼旅行有权立即停止提供服务，收回其帐号并由用户独自承担由此而产生的一切法律责任。<br>
		3.3 用户承诺不得以任何方式利用卓尼旅行直接或间接从事违反中国法律、以及社会公德的行为，卓尼旅行有权对违反上述承诺的内容予以删除。<br>
		3.4 用户不得利用卓尼旅行服务制作、上载、复制、发布、传播或者转载如下内容：<br>
		反对宪法所确定的基本原则的；<br>
		危害国家安全，泄露国家秘密，颠覆国家政权，破坏国家统一的；<br>
		损害国家荣誉和利益的；<br>
		煽动民族仇恨、民族歧视，破坏民族团结的；<br>
		破坏国家宗教政策，宣扬邪教和封建迷信的；<br>
		散布谣言，扰乱社会秩序，破坏社会稳定的；<br>
		散布淫秽、色情、赌博、暴力、凶杀、恐怖或者教唆犯罪的；<br>
		侮辱或者诽谤他人，侵害他人合法权益的；<br>
		含有法律、行政法规禁止的其他内容的信息。<br>
		3.5 卓尼旅行有权对用户使用卓尼旅行的情况进行审查和监督，如用户在使用卓尼旅行时违反任何上述规定，卓尼旅行或其授权的人有权要求用户改正或直接采取一切必要的措施（包括但不限于更改或删除用户张贴的内容、暂停或终止用户使用卓尼旅行的权利）以减轻用户不当行为造成的影响。<br><br><br>

		<h4 class="title">4. 内容所有权</h4><br>
		4.1 卓尼旅行提供的本服务内容可能包括：文字、软件、声音、图片、视频、图表等。所有这些内容受版权、商标和其它财产所有权法律的保护。<br>
		4.2 用户只有在获得卓尼旅行或其他相关权利人的授权之后才能使用这些内容，不能擅自复制、再造这些内容、或创造与内容有关的派生产品。<br>
		4.3 卓尼旅行鼓励用户充分利用卓尼旅行平台自由地张贴和共享自己的信息，但这些内容必须位于公共领域内，或者用户拥有这些内容的使用权。同时，用户对于其创作并在卓尼旅行上发布的合法内容依法享有著作权及其相关权利。用户不应通过卓尼旅行张贴其它受版权保护的内容。卓尼旅行如果收到正式版权投诉，将会删除这些内容。
		4.4 在卓尼旅行张贴的公开信息：<br>
		在本协议中，“本服务公开使用区域”系指一般公众可以使用的区域。<br>
		用户同意已就用户于本服务公开使用区域及本服务其它任何公开使用区域张贴之内容，包括照片、文字或影音资料等内容，授予卓尼旅行全球性、免许可费及非独家的使用权，卓尼旅行可以为了展示、散布及推广张贴前述内容之特定服务目的，将前述内容复制、修改、改写、改编或出版，对于照片及文字影音资料的上述使用，仅为张贴该照片或文字影音于本服务之目的而为之。在用户将前述内容放入本服务期间，使用权持续有效；若用户将前述内容自本服务中删除，则使用权于删除时终止。<br>
		用户同意已就用户于本服务其它公开使用区域张贴的其它内容，授予卓尼旅行免许可费、永久有效、不可撤销、非独家及可完全再授权之权利在全球使用、复制、修改、改写、改编、发行、翻译、创造衍生性著作，及/或将前述内容（部分或全部）加以散布、表演、展示，及/ 或放入利用任何现在已知和未来开发出之形式、媒体和科技之其它著作物当中。<br>
		4.5 用户发表在卓尼旅行的原创文章、评论、图片等内容的版权均归用户本人所有。<br><br>

		<h4 class="title">5. 隐私保护</h4><br>
		5.1 保护用户隐私是卓尼旅行的一项基本政策，卓尼旅行保证不对外公开或向第三方提供用户注册资料及用户在使用本服务时存储在卓尼旅行的非公开内容，但下列情况除外：<br>
		事先获得用户的明确授权；<br>
		根据有关的法律法规要求；<br>
		按照相关政府主管部门的要求；<br>
		为维护社会公众的利益；<br>
		维护卓尼旅行的合法权益。<br>
		5.2 卓尼旅行可能会与第三方合作向用户提供相关的本服务，在此情况下，如该第三方同意承担与卓尼旅行同等的保护用户隐私的责任，则卓尼旅行可将用户的注册资料等提供给该第三方。<br>
		5.3 在不透露单个用户隐私资料的前提下，卓尼旅行有权对整个用户数据库进行分析并对用户数据库进行商业上的利用。<br><br><br>

		<h4 class="title">6. 免责声明</h4><br>
		6.1 用户将照片、个人信息等资料上传到互联网上，有可能会被其他组织或个人复制、转载、擅改或做其它非法用途，用户必须充分意识此类风险的存在。用户明确同意其使用卓尼旅行服务所存在的风险（包括但不限于受到第三方侵权或对第三方造成侵权）将完全由其自己承担；因其使用卓尼旅行服务而产生的一切后果也由其自己承担，卓尼旅行对此不承担任何责任。<br>
		6.2 卓尼旅行不担保本服务一定能满足用户的要求，也不担保本服务不会中断，对本服务的及时性、安全性、准确性、真实性、完整性也都不作担保。<br>
		6.3 对于因不可抗力或卓尼旅行不能控制的原因造成的本服务中断或其它缺陷，卓尼旅行不承担任何责任，但将尽力减少因此而给用户造成的损失和影响。<br>
		6.4 根据有关法律法规，卓尼旅行在此郑重提请用户注意，任何经由本服务以上载、张贴、发送电子邮件或任何其它方式传送的资讯、资料、文字、软件、音乐、音讯、照片、图形、视讯、信息或其它资料（以下简称“内容”），无论系公开还是私下传送，均由内容提供者承担责任。卓尼旅行无法控制经由本服务传送之内容，因此不保证内容的正确性、完整性或品质。在任何情况下，卓尼旅行均不为任何内容负责，包含但不限于任何内容之任何错误或遗漏，以及经由本服务以张贴、发送电子邮件或其它方式传送任何内容而衍生之任何损失或损害。但卓尼旅行有权依法停止传输任何前述内容并采取相应行动，包括但不限于暂停用户使用本服务的全部或部分，保存有关记录，并向有关机关报告。<br>
		6.5 卓尼旅行作为网络服务提供者，对非法转载，虚假发布、盗版行为的发生不具备充分的监控能力。卓尼旅行对他人在网站上实施的此类侵权行为不承担法律责任，侵权的法律责任概由本人承担。<br>
		6.6 用户上传自行编辑的文字信息、或拍摄图片等内容，卓尼旅行有权视为用户已将上述内容同意用于卓尼旅行自有的产品展示或者非盈利的市场活动宣传。<br><br><br>

		<h4 class="title">7.  协议修改</h4><br>
		7.1 卓尼旅行将有权随时修改本协议的有关条款，一旦本协议的内容发生变动，卓尼旅行将会通过适当方式在网站上提示。<br>
		7.2 如果不同意卓尼旅行对本协议相关条款所做的修改，用户有权停止使用本服务。如果用户继续使用本服务，则视为用户接受卓尼旅行对本协议相关条款所做的修改。<br>

																</p>
														  </div>
													</div><!-- modal-body 닫힘 -->
													<div class="modal-footer">
														<button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
													</div><!-- modal-footer 닫힘 -->
												</div><!-- modal-content 닫힘 -->
											</div><!-- modal-dialog 닫힘 -->
										</div><!-- modal fade Overveiw 끝 -->


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
								url:"/index.php/member/memberJoin/searchMem",
								success: function (data){
									if(data =="fail"){
										alert("이미가입되어있습니다.");
									}else{
										$.ajax({
											type:"POST" ,
											dataType:"text",
											contentType:"application/x-www-form-urlencoded; charset=UTF-8",
											data:{selnum: _selnum,mode: null, ran: null},
											url:"/index.php/auth/sendmail",
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
					location.href = "http://www.linkasia.co.kr";
				});

				$('#repeated_join').click( function(){
					location.href = "/index.php/auth/Login_view";
				});

				$('#cancel').click( function(){
					location.href = "http://www.linkasia.co.kr";
				});

			});

</script>

	</body>
</html>
