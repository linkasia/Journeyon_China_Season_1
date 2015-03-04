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

	<!-- slider pro script-->
	<script type="text/javascript">
		$( document ).ready(function( $ ) {
			$( '#example3' ).sliderPro({
				width: 660,
				height: 400,
				fade: true,
				arrows: true,
				buttons: false,
				fullScreen: true,
				shuffle: true,
				smallSize: 500,
				mediumSize: 1000,
				largeSize: 3000,
				thumbnailArrows: true,
				autoplay: false
			});
		});
	</script>

	</head>



<body id="page-top" class="index">
<div id="previewWrap">
	<div class="title"><div class="underline">微旅行</div></div>  <!-- 라인 들어가는 타이틀 city부분 복제 -->
		<?foreach($salesCity as $v){?>
			
			<div class="contents_text1"><p class="title"><span class="glyphicon glyphicon-leaf"></span>  <?=$v->title?>
			<br><p id="previewPrice">Price : <?=$v->fat_price?>元</p>
			</p>
			
			</div>

			<!-- 사진 슬라이더 시작 -->
			<div id="example3" class="slider-pro">
				<div class="sp-slides">

					<!-- 여기서부터 반복 -->
					<?foreach($ImageCity as $k){?>
						<div class="sp-slide">
							<img class="sp-image" src="<?=$k->img_path?>" />

							<!-- 사진 제목 올라가는 부분 -->
							<p class="sp-layer sp-black sp-padding"
								data-horizontal="50" data-vertical="50"
								data-show-transition="down" data-show-delay="500">
								<?=$k->name_cn_en?>
							</p>

							<!--  사진 설명 올라가는 부분 -->
							<p class="sp-layer sp-white sp-padding"
								data-horizontal="50" data-vertical="100"
								data-show-transition="up" data-show-delay="500">
								<?=$k->content?>
							</p>
						</div><!-- sp-slide end -->
					<?}?>
				</div>

					<div class="sp-thumbnails">
					<?foreach($ImageCity as $k){?>
						<img class="sp-thumbnail" src="<?=$k->img_path?>" />
					<?}?>
					</div>

			</div><!--example3 end -->


			<div class="contents_text2"><p><?=$v->describe_contents?></p></div>
			<div class="information_wrap">
				<dl class="information">
					<dt><span><img src="/application/views/images/contents/icon30_micro.PNG" alt=""></span>微旅行时间</dt>
					<dd><?=$v->travel_time?>小时</dd>

					<dt><span><img src="/application/views/images/contents/icon31_included.PNG" alt=""></span>费用包括</dt>
					<dd><?=$v->include?></dd>


					<dt><span><img src="/application/views/images/contents/icon32_notincluded.PNG" alt="">费用不包括</dt>
					<dd><?=$v->not_include?></dd>


					<dt><span><img src="/application/views/images/contents/icon33_first.PNG" alt="">见面地点</dt>
					<dd><?=$v->meeting_place_describe?></dd>

					<dt><span><img src="/application/views/images/contents/icon34_cancel.PNG" alt="">取消规定</dt>
					<dd>24小时内取消</dd>

					<dt><span><img src="/application/views/images/contents/icon35_info.PNG" alt="">其他</dt>
					<dd><?=$v->etc?></dd>
				</dl>
			</div>
			<?}?>
	</div>
</div>



</body>
</html>