<div id="chatlistWrap">

	<div class="header">
		<img src="/application/views/images/flag/20american.png" alt="nation_flagImage" class="flag">
		<span class="glyphicon glyphicon-chevron-right"></span>
		<button class="btn btn-start">Newyork</button>
		<p class="chatingTitle">《老友记》咖啡馆纽约开张免费迎客</p>
	</div><!-- div.header end -->

	<div class="chatingFrame">
	<?foreach($SendList as $v){?>
		<div id="youChat">
			<span id="youchatID"><?=$v->Name_cn_en?><span id="youchatDate"><?=$v->create_time?></span></span>
			<div id="chatImg" class="chatImg">
				<img src="<?=$v->face_img_path?>" alt="" class="profile_image img-circle">
				<img src="<?=$v->ref1?>" alt="nation_flagImage" class="flag_image">
				<?if($v->v_get_code == "0001"){?>
				<img src="/application/views/images/main/img22_vmark.png" alt="" class="vmark_image">
				<?}?>
			</div>
			<img src="/application/views/images/contents/chatarrow_left.png" alt="" class="chatarrow1">
			<div class="youchatBox"><p><?=$v->content?></p></div>
		</div><!-- youChat end -->
	<?}?>
		<div id="meChat">
			<span id="mechatID">Hyo-Sung <span id="mechatDate">2015年10月20日 18:12</span></span>
			<div id="chatImg" class="chatImg">
				<img src="/application/views/images/main/profile02.jpg" alt="" class="profile_image img-circle">
				<img src="/application/views/images/flag/20american.png" alt="nation_flagImage" class="flag_image">
				<img src="/application/views/images/main/img22_vmark.png" alt="" class="vmark_image">
			</div>
			<img src="/application/views/images/contents/chatarrow_right.png" alt="" class="chatarrow2">
			<div class="mechatBox"><p>1月5日，在位于达州市达川区麻柳镇明月江的一条支流的河床上打捞起一根长22米、重超60吨、价值不菲的千年乌木。据在现场的专家介绍，该段乌木被深埋于数10米深的河床已有3000余年，</p></div>
		</div>


	</div><!-- chatingFrame end -->


	<div class="rightWrap">
		<div class="rightProfile">
			<p class="guideTalk"><span class="glyphicon glyphicon-comment"></span> Guide Talk</p>
			<div class="gray_box"><span><img src="/application/views/images/main/img29_navi.PNG" alt="">  当地人</span>
				<img src="/application/views/images/main/profile01.jpg" alt="" class="img-circle profile_image">
				<img src="/application/views/images/flag/01korea.png" alt="" class="flag_image">
				<img src="/application/views/images/main/img22_vmark.PNG" alt="" class="vmark_image">
			</div>
			<div class="name_tag">
				<div class="tag1">Advanced</div>
				<div class="tag2">Funny</div>
				<div class="tag3">History</div>
			</div>
			<div class="text">
				<p>
					生活在 : Seoul <br>
					现居住在纽约 : 2015年 <br>
					性别 : 女<br>
					语言 : Korean, English, Chinese<br>
				</p>
			</div>
			<div class="sns_icon">
				<!-- <img src="/application/views/images/main/sns03G.png" alt="" class="sns_icon1G"> -->
				<img src="/application/views/images/main/sns03.png" alt="" class="sns_icon1C">
				<img src="/application/views/images/main/sns02G.png" alt="" class="sns_icon2C">
				<!-- <img src="/application/views/images/main/sns02.png" alt="" class="sns_icon2G"> -->
			</div><!-- sns_icon end -->
		</div><!-- rightProfile end -->

		<div class="bookedDay">
			<div class="band">BookedDay</div>

			<div id="reservationDay">
				<span id="bookedDate">2015/01/08</span>
				<input type="text" class="form-control" placeholder="" id="number">
				<span>名   </span><span class="glyphicon glyphicon-remove" id="remove"></span>
			</div><!-- reservationDay 이게 반복되면서 늘어남 -->
			<div id="reservationDay">
				<span id="bookedDate">2015/01/08</span>
				<input type="text" class="form-control" placeholder="" id="number">
				<span>名   </span><span class="glyphicon glyphicon-remove" id="remove"></span>
			</div><!-- reservationDay 이게 반복되면서 늘어남 -->
			<div id="reservationDay">
				<span id="bookedDate">2015/01/08</span>
				<input type="text" class="form-control" placeholder="" id="number">
				<span>名   </span><span class="glyphicon glyphicon-remove" id="remove"></span>
			</div><!-- reservationDay 이게 반복되면서 늘어남 -->
			<div id="reservationDay">
				<span id="bookedDate">2015/01/08</span>
				<input type="text" class="form-control" placeholder="" id="number">
				<span>名   </span><span class="glyphicon glyphicon-remove" id="remove"></span>
			</div><!-- reservationDay 이게 반복되면서 늘어남 -->

		</div>

		<div class="Add">
			<span id="fixedPrice">Fixed price From Guide</span>
			<div class="statusDiv" id="statusDiv"><p>판매가격 입력 대기중...</p></div>
		</div>

		<div class="Add">
			<span id="fixedPrice">Fixed price From Guide</span>
			<input type="text" class="form-control" id="inputPrice"><span class="won">元</span>
			<button class="btn btn-info" id="priceModify">가격수정</button>
			<button class="btn btn-warning" id="pricePay">결제하기</button>
		</div>
	</div><!-- rightWrap end -->

	<div id="typingBox">
		<input type="text" name="" id="chatInput" class="form-control" cols="30" rows="10" placeholder="Write a message..."></input>
		<span class="btn btn-primary" id="chatSend">Send</span>
	</div>
</div><!-- chatlistWrap -->

