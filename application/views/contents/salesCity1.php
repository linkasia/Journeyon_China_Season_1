
<div class="title"><div class="underline">微旅行</div></div>  <!-- 라인 들어가는 타이틀 city부분 복제 -->
	<?foreach($salesCity as $v){?>
		<div class="contents_text1"><?=$v->title?></div>

    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->
    <div id="slider1_container" style="position: relative; width: 660px; height: auto; float: left;">

        <!-- Loading Screen -->
        <div u="loading" style="position: relative; width: 660px; height: 440px; display: block;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: relative; display: block;  background-color: #000; top: 0px; left: 0px; width: 100%; height:100%;"></div>
            <div style="position: absolute; display: block; background: url(/application/images/loading.gif) no-repeat center center; top: 0px; left: 0px; width: 100%; height:100%;"></div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 660px; height: 440px; overflow: hidden;">
			<?foreach($ImageCity as $k){?>
            <div>
              <img u="image" src="<?=$k->img_path?>" />
               <img u="thumb" src="<?=$k->img_path?>" />
            </div>
            <?}?>
        </div>

        <!-- Thumbnail Navigator Skin Begin -->
<!-- Thumbnail Navigator Skin Begin -->

        <div u="thumbnavigator" class="jssort07" style="position: absolute; width: 660px; height: 100px; left: 0px; top: 340px; overflow: hidden; ">
            <div style=" background-color: #000; filter:alpha(opacity=30); opacity:.3; width: 100%; height:100%;"></div>
            <!-- Thumbnail Item Skin Begin -->

            <div u="slides" style="cursor: move;">
                <div u="prototype" class="p" style="POSITION: absolute; WIDTH: 99px; HEIGHT: 66px; TOP: 0; LEFT: 0;">
                    <div u="thumbnailtemplate" class="i" style="position:absolute;"></div>
                    <div class="o">
                    </div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
            <!-- Arrow Navigator Skin Begin -->

            <!-- Arrow Left -->
            <span u="arrowleft" class="jssora11l" style="width: 37px; height: 37px; top: 123px; left: 8px; display: block;"></span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssora11r" style="width: 37px; height: 37px; top: 123px; right: 8px">
            </span>
            <!-- Arrow Navigator Skin End -->
        </div>
        <!-- ThumbnailNavigator Skin End -->
        <!-- Trigger -->
    </div>
    <!-- Jssor Slider End -->



<div class="contents_text2"><p><?=$v->describe_contents?></p>
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