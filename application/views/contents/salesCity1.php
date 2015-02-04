    <script>
        $(document).ready(function () {
			//달력
			var today = new Date();
			$("#jqxWidget").jqxCalendar({width: 209, height: 200});

            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
                $UISearchMode: 0,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).

                $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                    $Loop: 2,                                       //[Optional] Enable loop(circular) of carousel or not, 0: stop, 1: loop, 2 rewind, default value is 1
                    $SpacingX: 3,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                    $SpacingY: 3,                                   //[Optional] Vertical space between each thumbnail in pixel, default value is 0
                    $DisplayPieces: 6,                              //[Optional] Number of pieces to display, default value is 1
                    $ParkingPosition: 204,                          //[Optional] The offset position to park thumbnail,

                    $ArrowNavigatorOptions: {
                        $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                        $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                        $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                        $Steps: 6                                       //[Optional] Steps to go for each navigation request, default value is 1
                    }
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$ScaleWidth(Math.min(parentWidth, 720));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

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