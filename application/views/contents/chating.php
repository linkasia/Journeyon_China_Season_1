<div id="chatlistWrap">

	<div class="header">
		<!--img src="/application/views/images/flag/20american.png" alt="nation_flagImage" class="flag">
		<span class="glyphicon glyphicon-chevron-right"></span>
		<button class="btn btn-start">Newyork</button -->
		<p class="chatingTitle">《老友记》咖啡馆纽约开张免费迎客</p>
	</div><!-- div.header end -->
	<div class="chatingFrame" id ='realCht'>
	<?
		$this -> load ->view('/contents/chatingFrame');
	?>
	</div><!-- chatingFrame end -->
	<!-- chatingFrame.php로 빼냄 -->
	<?foreach($orderUser as $v){?>
		<div class="rightWrap">
			<div class="right_profile">
				<p class="guideTalk font_orange"><span class="glyphicon glyphicon-comment font_orange"></span> Guide Talk</p>
				<div class="gray_box"><span><img src="/application/views/images/main/img29_navi.PNG" alt="">  当地人</span>
					<img src="<?=$v->face_img_path?>" alt="" class="img-circle profile_image">
					<img src="<?=$v->mother_country_img?>" alt="" class="flag_image">
					<?if($v->v_get_code == "0001"){?>
						<img src="/application/views/images/main/img22_vmark.PNG" alt="" class="vmark_image">
					<?}?>
				</div>
				<div class="name_tag">
					<div class="tag1">Advanced</div>
					<div class="tag2">Funny</div>
					<div class="tag3">History</div>
				</div>
				<div class="text">
					<p>
						生活在 : <?=$v->live_city?> <br>
						现居住在纽约 : <?=$v->create_day?> <br>
						性别 : <?=$v->gender?><br>
						语言 : <?=$v->lang1?>, <?=$v->lang2?>, <?=$v->lang3?><br>
					</p>
				</div>
				<div class="sns_icon">
					<!-- <img src="/application/views/images/main/sns03G.png" alt="" class="sns_icon1G"> -->
					<!-- img src="/application/views/images/main/sns03.png" alt="" class="sns_icon1C">
					<img src="/application/views/images/main/sns02G.png" alt="" class="sns_icon2C" -->
					<!-- <img src="/application/views/images/main/sns02.png" alt="" class="sns_icon2G"> -->
				</div><!-- sns_icon end -->
			</div><!-- rightProfile end -->
		<?}?>



		<div class="Add">
			<button class="btn btn-warning" id="pricePay" data-toggle="modal" data-target="#myModal8" data-backdrop="static">预约</button><!-- 날짜 예약하기 -->

			<div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog2">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							<h4 class="modal-title" id="myModalLabel">预约微旅程</h4><!-- 날짜 예약하기 -->
						</div><!-- modal-header 닫힘 -->
						<div class="modal-body2">
							<div id='content'>
								<div class="seDateDiv">Start Date : <input type="date" id='startDate' class="btn-default" name='startDate' value=<?=date('Y-m-d')?> onchange="checkStartValue();"></div>
								<div class="seDateDiv">End Date : <input type="date" id='endDate' class="btn-default" name='endDate' value=<?=date('Y-m-d')?> onchange="checkEndValue();"></div>



								<!-- <div style='font-size: 13px; font-family: Verdana;' id='selection'></div>
								<div style='font-size: 13px; font-family: Verdana;' id='selection'></div> -->
							</div>
						</div><!-- modal-body2 닫힘 -->
						<div class="modal-footer">
							<button type="button" class="btn btn-info" id="saveDate" name="saveDate">确认</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">取消</button>
						</div><!-- modal-footer 닫힘 -->
					</div><!-- modal-content 닫힘 -->
				</div><!-- modal-dialog 닫힘 -->
			</div><!-- modal fade Overveiw 끝 -->
		</div>
	</div><!-- rightWrap end -->

	<div id="typingBox">
		<input type="text" name="chatInput" id="chatInput" class="form-control" cols="30" rows="10" placeholder="您想说什么？"></input>
		<span class="btn btn-info" id="chatSend" onclick="sendChat()">发送</span>
	</div>
</div><!-- chatlistWrap -->
<div id='test'></div>


 <script type="text/javascript">

	$(document).ready(function () {
		setInterval("dpTime()",2000);
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

	//날짜 체크
	function checkStartValue(){
		var date=new Date();
		var year = date.getFullYear();
		var mon = date.getMonth()+1;
		var day = date.getDate();
		if(mon <= 9){
			mon = "0"+mon;
		}
		if(day <= 9){
			day = "0"+day;
		}
		var today = year+"-"+mon+"-"+day;
		var sDay = $('#startDate').val();
		if(today >= sDay){
			alert("현재 날짜 이후로만 선택할 수 있습니다.");
			document.getElementById('startDate').value = today;
		}
	}

	function checkEndValue(){
		var sDay = $('#startDate').val();
		var eDay = $('#endDate').val();

		if(sDay > eDay){
			alert("시작일 이후를 선택해주세요");
			document.getElementById('endDate').value = sDay;
		}
	}

	function dpTime(){

		var _chatNum = $('#hiddenChatNum').val();
		var _productNum = $('#hiddenProductNum').val();

		$.ajax({
			type:"POST" ,
			dataType:"text",
			contentType:"application/x-www-form-urlencoded; charset=UTF-8",
			data:{ chatNum : _chatNum, productNum:_productNum},
			url: "/index.php/city/country/dpTimeChating",
			success: function (data){
				//alert(data);
				document.getElementById('realCht').innerHTML = data;
			}
		});
	}

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







