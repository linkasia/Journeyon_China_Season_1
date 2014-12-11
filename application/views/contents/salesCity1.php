<div class="title"><div class="underline">微旅行</div></div>  <!-- 라인 들어가는 타이틀 city부분 복제 -->
	<?foreach($salesCity as $v){?>
		<div class="contents_text1"><?=$v->title?></div>	
		<div class="contents_img">
			<div class="img_big"  id='clickDivBig' ><img style="width:660px; height:528px;"src="<?=$v->pic1_img?>" alt="img_big" id='clickImgBig'></div>
			<div class="img1" id='clickDiv1'><img style="width:157px; height:105px;" src="<?=$v->pic1_img?>" alt="img_a" id='clickImg1'></div>
			<div class="img2" id='clickDiv2'><img style="width:157px; height:105px;" src="<?=$v->pic2_img?>" alt="img_b" id='clickImg2'></div>
			<div class="img3" id='clickDiv3'><img style="width:157px; height:105px;" src="<?=$v->pic3_img?>" alt="img_c" id='clickImg3'></div>
			<div class="img4" id='clickDiv4'><img style="width:157px; height:105px;" src="<?=$v->pic4_img?>" alt="img_d" id='clickImg4'></div>
		</div>
		<div class="contents_text2"><p><?=$v->describe?></p>
		</div>
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
		<div class="reply"><!-- 덧글달리는 부분 -->
			<div class="profile_pic">
				<img src="/application/views/images/main/profile01.jpg" alt="" class="img-circle profile_image">
				<img src="/application/views/images/left_menu/flag03_usa.png" alt="" class="flag_image">
				<img src="/application/views/images/main/img22_vmark.PNG" alt="" class="vmark_image">
			</div>
			<div class="reply_text"><span class="reply_id">From Regina Paul : </span>世界的瑰宝呀，逛了一天都没看完，太漂亮了，拍了美美的照片，下次还想来呢回复有用 0 世界的瑰宝呀，逛了一天都没看完，太漂亮了，拍了美美的照片，下次还想来呢回复有用 0世界的瑰宝呀，逛了一天都没看完，太漂亮了，拍了美美的照片，下次还想来呢回复有用 0
			</div>
		</div>

		<div class="reply"><!-- 덧글 답변달리는 부분 -->
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

<script type="text/javascript"t>
	$(function(){
		$('#clickDiv1').click( function(){
			$('#clickImgBig').attr('src',$('#clickImg1').attr('src'));
		});
		
		$('#clickDiv2').click( function(){
			$('#clickImgBig').attr('src',$('#clickImg2').attr('src'));
		});
		$('#clickDiv3').click( function(){
			$('#clickImgBig').attr('src',$('#clickImg3').attr('src'));
		});
		$('#clickDiv4').click( function(){
			$('#clickImgBig').attr('src',$('#clickImg4').attr('src'));
		});
	});
</script>