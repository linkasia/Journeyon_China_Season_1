<div id="chatlistWrap">

	<div class="header">
		<img src="/application/views/images/flag/20american.png" alt="nation_flagImage" class="flag">
		<span class="glyphicon glyphicon-chevron-right"></span>
		<button class="btn btn-start">Newyork</button>
		<p class="chatingTitle">《老友记》咖啡馆纽约开张免费迎客</p>
	</div><!-- div.header end -->

	<div class="chatingFrame">
	<?foreach($SendList as $v){
		if($v->user_num != $this->session->userdata['num']) {?>
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
	<?}else{?>
			<div id="meChat">
			<span id="mechatID"><?=$v->Name_cn_en?><span id="mechatDate"><?=$v->create_time?></span></span>
			<div id="chatImg" class="chatImg">
				<img src="<?=$v->face_img_path?>" alt="" class="profile_image img-circle">
				<img src="<?=$v->ref1?>" alt="nation_flagImage" class="flag_image">
				<?if($v->v_get_code == "0001"){?>
					<img src="/application/views/images/main/img22_vmark.png" alt="" class="vmark_image">
				<?}?>
			</div>
			<img src="/application/views/images/contents/chatarrow_right.png" alt="" class="chatarrow2">
			<div class="mechatBox"><p><?=$v->content?></p></div>
		</div>
	<?	}?>
	<?foreach($salesCity as $k){ ?>
		<input type='hidden' id='hiddenUserNum' name='hiddenUserNum' value='<?=$k->user_num?>'>
		<input type='hidden' id='hiddenLoginNum' name='hiddenLoginNum' value='<?=$this->session->userdata['num']?>'>
	<?}?>
	<input type='hidden' id='hiddenChatNum' name='hiddenChatNum' value='<?=$v->chat_num?>'>
	<input type='hidden' id='hiddenProductNum' name='hiddenProductNum' value='<?=$v->product_num?>'>
	<?}?>



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



		<div class="Add">
			<button class="btn btn-warning" id="pricePay" data-toggle="modal" data-target="#myModal8">날짜 예약하기</button>

			<div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog2">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							<h4 class="modal-title" id="myModalLabel">날짜 예약하기</h4>
						</div><!-- modal-header 닫힘 -->
						<div class="modal-body2">
							<div id='content'>
								<span>기간</span><input class="form-control" type="text" id="startDate" name="startDate" readonly value="">  ~ 
								<input class="form-control" type="text" id="endDate" name="endDate" readonly value=""> 
								<div id='jqxWidget' style="height: 500px;"> </div>

							</div>
						</div><!-- modal-body 닫힘 -->
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" id="saveDate" name="saveDate">확정</button>
							<button type="button" class="btn btn-info" data-dismiss="modal">취소</button>
						</div><!-- modal-footer 닫힘 -->
					</div><!-- modal-content 닫힘 -->
				</div><!-- modal-dialog 닫힘 -->
			</div><!-- modal fade Overveiw 끝 -->		

		
		</div>
	</div><!-- rightWrap end -->

	<div id="typingBox">
		<input type="text" name="chatInput" id="chatInput" class="form-control" cols="30" rows="10" placeholder="Write a message..."></input>
		<span class="btn btn-primary" id="chatSend" onclick="sendChat()">Send</span>
	</div>
</div><!-- chatlistWrap -->


