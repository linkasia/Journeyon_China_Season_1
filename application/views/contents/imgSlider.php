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


<script type="text/javascript">

function realtime() {
	$( '#example3' ).sliderPro({
		width: 960,
		height: 500,
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
  setTimeout("realtime()", 1000);
}



$( document ).ready(function( $ ) {
	realtime
	});

</script>