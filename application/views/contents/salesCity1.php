
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

<div class="title"><div class="underline">微旅行</div></div>  <!-- 라인 들어가는 타이틀 city부분 복제 -->
	<?foreach($salesCity as $v){?>
		<div class="contents_text1"><?=$v->title?></div>

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

		</div>


		<div class="contents_text2"><p><?=$v->describe_contents?></p></div>
		<div class="information_wrap">
			<dl class="information">
				<dt class="txt_blue"><span><img src="/application/views/images/contents/icon30_micro.PNG" alt=""></span>微旅行时间</dt>
				<dd><?=$v->travel_time?>小时</dd>

				<dt class="txt_blue"><span><img src="/application/views/images/contents/icon31_included.PNG" alt=""></span>费用包括</dt>
				<dd><?=$v->include?></dd>


				<dt class="txt_blue"><span><img src="/application/views/images/contents/icon32_notincluded.PNG" alt="">费用不包括</dt>
				<dd><?=$v->not_include?></dd>


				<dt class="txt_blue"><span><img src="/application/views/images/contents/icon33_first.PNG" alt="">见面地点</dt>
				<dd><?=$v->meeting_place_describe?></dd>
				<div id='map' name='map'><?$this->load->view("/include/google_map");?></div>

				<dt class="txt_blue"><span><img src="/application/views/images/contents/icon34_cancel.PNG" alt="">取消规定</dt>
				<dd>24小时内取消</dd>

				<dt class="txt_blue"><span><img src="/application/views/images/contents/icon35_info.PNG" alt="">其他</dt>
				<dd><?=$v->etc?></dd>
			</dl>
		</div>


		<div class="reply">
			<div class="profile_pic">
				<img src="/application/views/images/main/profile01.jpg" alt="" class="img-circle profile_image">
				<img src="/application/views/images/left_menu/flag03_usa.png" alt="" class="flag_image">
				<img src="/application/views/images/main/img22_vmark.PNG" alt="" class="vmark_image">
			</div>
			<div class="reply_text"><span class="reply_id">From Regina Paul : </span>世界的瑰宝呀，逛了一天都没看完，太漂亮了，拍了美美的照片，下次还想来呢回复有用 0 世界的瑰宝呀，逛了一天都没看完，太漂亮了，拍了美美的照片，下次还想来呢回复有用 0世界的瑰宝呀，逛了一天都没看完，太漂亮了，拍了美美的照片，下次还想来呢回复有用 0
			</div>
		</div>

		<div class="reply">
			<img src="/application/views/images/contents/reply.png" alt="" class="reply_arrow">
			<div class="profile_pic_answer">
				<img src="/application/views/images/main/profile02.jpg" alt="" class="img-circle profile_image">
				<img src="/application/views/images/left_menu/flag03_usa.png" alt="" class="flag_image">
				<img src="/application/views/images/main/img22_vmark.PNG" alt="" class="vmark_image">
			</div>
			<div class="reply_text_answer"><span class="reply_id">From xiangyu19880319 : </span>世界的瑰宝呀，逛了一天都没看完，太漂亮了，拍了美美的照片，下次还想来呢回复有用 0 世界的瑰宝呀，逛了一天都没看完，太漂亮了，拍了美美的照片，下次还想来呢回复有用 0世界的瑰宝呀，逛了一天都没看完，太漂亮了，拍了美美的照片，下次还想来呢回复有用 0世界的瑰宝呀，逛了一天都没看完，太漂亮了，拍了美美的照片，下次还想来呢回复有用 0 世界的瑰宝呀，逛了一天都没看完，太漂亮了，拍了美美的照片，下次还想来呢回复有用 0世界的瑰宝呀，逛了一天都没看完，太漂亮了，拍了美美的照片，下次还想来呢回复有用 0世界的瑰宝呀，逛了一天都没看完，太漂亮了，
			</div>
		<?}?>
</div>
