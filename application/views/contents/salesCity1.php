
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
		<!-- <div class="contents_text1"><span class="glyphicon glyphicon-leaf"></span>  <?=$v->title?></div> -->

		<!-- 사진 슬라이더 시작 -->
		<div id="example3" class="slider-pro">
			<div class="sp-slides">

				<!-- 여기서부터 반복 -->
				<?foreach($ImageCity as $k){?>
					<div class="sp-slide">
						<img class="sp-image" src="<?=$k->img_path?>" />
						<input type='hidden' id='hiddenImg' name='hiddenImg' value='<?=$k->img_path?>' >

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
				<dt><span><img src="/application/views/images/contents/icon30_micro.PNG" alt=""></span>微旅行时间</dt>
				<dd><?=$v->travel_time?>小时</dd>

				<dt><span><img src="/application/views/images/contents/icon31_included.PNG" alt=""></span>费用包括</dt>
				<dd><?=$v->include?></dd>


				<dt><span><img src="/application/views/images/contents/icon32_notincluded.PNG" alt="">费用不包括</dt>
				<dd><?=$v->not_include?></dd>


				<dt><span><img src="/application/views/images/contents/icon33_first.PNG" alt="">见面地点</dt>
				<dd><?=$v->meeting_place_describe?></dd>
				<div id='map' name='map'><?$this->load->view("/include/google_map");?></div>

				<dt><span><img src="/application/views/images/contents/icon34_cancel.PNG" alt="">取消规定</dt>
				<dd>24小时内取消</dd>

				<dt><span><img src="/application/views/images/contents/icon35_info.PNG" alt="">其他</dt>
				<dd><?=$v->etc?></dd>
			</dl>
		</div>
		<?}?>
		<!-- Reply 달리는 부분 php로 뺌 -->
		<div id="salescityreplyDiv">
			<?
			$salesNum = $_REQUEST['salesNum'];

			$data['review']= $this->country_M->salesDetailCityReview($salesNum);
			$data['reviewAnswer']= $this->country_M->salesDetailCityReview2($salesNum);
			$data['orderBook'] = "";
			if(@$this->session->userdata['logged_in'] == TRUE)
			{
				if($this->session->userdata['email']!=null){
					$data['orderBook'] = $this->country_M->orderBookUser($salesNum,$this->session->userdata['num']);
				}
			}
			$this->load->view('/contents/salescityReply',$data)?>
		</div>
</div>