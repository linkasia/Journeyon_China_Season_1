<?foreach($slaesBuyList as $v){?>
<!-- 여기서부터 섬네일 시작 -->
<div class="contents_list1">
	<div class="list_image1">
		<div class="band">
			<div class="wishcount">
				<img src="/application/views/images/main/img23_heart.PNG" alt="" class="heart_image">
				<span id="heart" name="heart">0</span>
			</div>
			<div class="reviewcount">
				<img src="/application/views/images/main/img24_talkbox.PNG" alt="" class="talkbox_image">
				<span id="talkbox" name="talkbox">0</span>
			</div>
			<div class="localcount">
				<img src="/application/views/images/main/img27_navi.PNG" alt="" class="navi_image">
				<span id="talkbox" name="talkbox"> 当地人</span>
			</div>
		</div>
		<img src="/application/views/images/contents/img01.jpg" alt="" class="pic1_img" style="width: 100%; height: 100%;">
		<a href="http://www.naver.com"><img src="/application/views/images/main/profile01.jpg" alt="" class="img-circle profile_image" id="profileLink" name="profileLink"></a>
		<img src="/application/views/images/flag/01korea.png" alt="" class="flag_image">
		<img src="/application/views/images/main/img22_vmark.PNG" alt="" class="vmark_image">
	</div><!-- list_image1 닫힘 -->
	<div class="list_rightwrap whitegloss">
		<div class="right_title"><span><?=$v->title?></span>
		</div>
		<div class="money bluegloss"><span><?=$v->fat_price?>元</span></div>
		<div class="right_text"><?=$v->describe_contents?>
		</div>
		<div class="bottom_text">
			<div class="line1">
				<div class="tag"><img src="<?=$v->refrem1?>" alt=""><?=$v->tem1?></div>
				<div class="tag"><img src="<?=$v->refrem2?>" alt=""><?=$v->tem2?></div>
				<div class="tag"><img src="<?=$v->refrem3?>" alt=""><?=$v->tem3?></div>
			</div>
			<div class="line2">
				<div class="tag2"><img src="<?=$v->refrecom1?>" alt=""><?=$v->recom1?></div>
				<div class="tag2"><img src="<?=$v->refrecom2?>" alt=""><?=$v->recom2?></div>
			</div>
		</div> <!-- bottom_text 닫음 -->
		<span class="glyphicon glyphicon-remove" id="listremoveIcon"></span>
	</div> <!-- list_rightwrap 닫음 -->
</div><!-- contents_list1 닫음 -->
<!-- 섬네일 끝 -->
<?}?>