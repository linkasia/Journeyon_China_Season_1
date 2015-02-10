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

								<div id='jqxWidget'></div>
								<div style='font-size: 13px; font-family: Verdana;' id='selection'></div>

								<div style='font-size: 13px; font-family: Verdana;' id='selection'>

								</div>
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


 <script type="text/javascript">

	$(document).ready(function () {
		//alert("AA");
		// create jqxcalendar.
		$("#jqxWidget").jqxCalendar({ width: 220, height: 220,  selectionMode: 'range' });
		$("#jqxWidget").on('change', function (event) {
			var selection = event.args.range;
			//$('#startDate').val() = selection.from.toLocaleDateString();
			//$('#endDate').val() = selection.to.toLocaleDateString();
			var staetDate = selection.from.toLocaleDateString().substring(0,selection.from.toLocaleDateString().length -1);
			var endDate =selection.to.toLocaleDateString().substring(0,selection.to.toLocaleDateString().length -1);
			var sDate = "<input class='form-control' type='hidden' id='startDate' name='startDate'  value='"+ staetDate +"'>";
			var eDate = "<input class='form-control' type='hidden' id='endDate' name='endDate'  value='"+ endDate +"'>";
			$("#selection").html("<div>From: " + selection.from.toLocaleDateString() + sDate +" <br/>To: " + selection.to.toLocaleDateString() + eDate+"</div>");
		});

		var date1 = new Date();
		date1.setFullYear(date1.getFullYear(), date1.getMonth(), date1.getDate());

		var date2 = new Date();
		date2.setFullYear(date1.getFullYear(), date1.getMonth(), date1.getDate());
		$("#jqxWidget").jqxCalendar('setRange', date1, date2);
	});

	$(function(){
		$('#saveDate').click( function(){
			var _sDate = $('#startDate').val();
			var _eDate = $('#endDate').val();
			var _productNum = $('#hiddenProductNum').val();
			location.href = "/index.php/City/country/detailBooking?sDate="+_sDate+"&eDate="+_eDate+"&productNum="+_productNum+"";
			/*

			$.ajax({
				type:"POST" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ sDate : _sDate, eDate:_eDate, productNum:_productNum},
				url: "/index.php/city/country/detailBooking",
				success: function (data){
					location.href = "/index.php/City/country/detailBooking?sDate="+_sDate+"&eDate="+_eDate+"&productNum="+_productNum+"";
					//document.getElementById('chatlistWrap').innerHTML = data;
				}
			});
			*/
		});
	});

	//send 버튼 클릭시
	function sendChat(){
		var _chatNum = $('#hiddenChatNum').val();
		var _productNum = $('#hiddenProductNum').val();
		var _contents = $('#chatInput').val();
		var _userNum = $('#hiddenUserNum').val();
		var _loginNum = $('#hiddenLoginNum').val();
		var _url = "";
		if(_userNum != _loginNum)
		{
			_url ="/index.php/city/country/insertMainChating";
		}else{
			_url ="/index.php/city/country/insertSubChating";
		}

		$.ajax({
			type:"POST" ,
			dataType:"text",
			contentType:"application/x-www-form-urlencoded; charset=UTF-8",
			data:{ chatNum : _chatNum, productNum:_productNum, contents:_contents},
			url: _url,
			success: function (data){
				document.getElementById('chatlistWrap').innerHTML = data;
			}
		});
	}
</script>







