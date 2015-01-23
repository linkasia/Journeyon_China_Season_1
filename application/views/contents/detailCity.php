<?
$salesNum = $_REQUEST['salesNum'];
$mode = $_REQUEST['mode'];
?>


<div id="detailCity_wrap">
	<section id="left_section">
		<div class="4menu">
			<button class="btn btn-danger" id = 'city1' name='city1' >微旅行</button>
			<button class="btn btn-danger" id = 'city2' name='city2'>疑问解答</button>
			<button class="btn btn-danger" id = 'city3' name='city3'>介绍</button>
		</div>

		<!-- salesCity1.php 로 뺀 부분 CI로딩 -->
		<div id='viewContents' name='viewContents' class="contents_wrap">
			<!-- include 한 부분 -->
			<?
			/*
			if($mode == "P"){

			}else{
				$data['salesCity']= $this->country_M->salesDetailCity($salesNum);

				$this->load->view("/contents/salesCity1",$data);
			}
			*/
			?>
		</div>
	</section>

	<aside id="right_aside">
		<?foreach($salesBasic as $v){?>
			<div class="right_reservation">
				<div class="price">
					<p class="price_title">价格 :</p>
						<p class="price_sub"><?=$v->fat_price?> 元<p>
						<input type='hidden' id='fee' name='fee' value='<?=$v->fat_price?>'>
				</div>
				<div>
					<p>选择行程</p>
					<span>可选</span><span>已选</span>
				</div>

				<div class="calandar">
					<div class="select">
					</div>

					<!--div id='divCal' name='divCal'> <?//$this->load->view("/include/calendar");?> </div-->
					<div id='jqxWidget'> </div>

					<!-- <img src="/application/views/images/contents/calandar.png" alt=""> --> <!-- 캘린더 들어가는 칸 -->
					<div id='insetDiv' name='insetDiv' class="selectParent2"> <!-- 날짜 선택하면 등장하는 option 박스 -->
						<ul id='checkDate' name='checkDate'>	</ul>
					</div>
					<textarea name="recheckTextarea" id="recheckTextarea" cols="27" rows="5" placeholder=" "></textarea>
				</div>
				<div class="aside-menu">
					<button type="button" class="btn btn-primary" id="calPop" name="calPop">定制游咨询</button>
					<!-- Modal 여기서부터 Overview 박스 시작 -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
									<h4 class="modal-title" id="myModalLabel">예약 일정을 선택하세요</h4>
								</div><!-- modal-header 닫힘 -->
								<div class="modal-body">
									<div id='content'><!--div id='jqxWidget'> </div--></div>
									<div class="modalFix" id='dateDiv' name='dateDiv'>
<!--
										<div id="modalDiv" name="modalDiv">
											<input type="date" class="form-control" id="recheckDate" name="recheckDate">
											<input type="text" class="form-control" id="recheckPerson" name="recheckPerson">
											<span> 名</span>
										</div>
										<div id="modalDiv" name="modalDiv">
											<input type="date" class="form-control" id="recheckDate" name="recheckDate">
											<input type="text" class="form-control" id="recheckPerson" name="recheckPerson">
											<span> 名</span>
										</div>
										<div id="modalDiv" name="modalDiv">
											<input type="date" class="form-control" id="recheckDate" name="recheckDate">
											<input type="text" class="form-control" id="recheckPerson" name="recheckPerson">
											<span> 名</span>
										</div>
-->
									</div><!-- modalFix 고정 끝 -->

									  <div id="emptyDiv" name="emptyDiv"></div>
									  <!--textarea name="recheckTextarea" id="recheckTextarea" cols="30" rows="10"></textarea-->
								</div><!-- modal-body 닫힘 -->
								<div class="modal-footer">
									<button type="button" class="btn btn-primary">Chat start</button>
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div><!-- modal-footer 닫힘 -->
							</div><!-- modal-content 닫힘 -->
						</div><!-- modal-dialog 닫힘 -->
					</div><!-- modal fade Overveiw 끝 -->

				</div>
				<div class="aside-like">
					<hr>
					<img src="/application/views/images/contents/heart.PNG" alt="heart">
					<span>&nbsp;想去</span>
				</div>
			</div>
		<?}?>

		<?foreach($salesBasic as $v){?>
			<input type='hidden' id='user_num' name='user_num' value='<?=$v->user_num?>' >
			<div class="right_profile">
				<div class="gray_box"><span><img src="/application/views/images/main/img27_navi.PNG" alt="">  当地人</span>
					<img src="<?=$v->face_img_path?>" alt="" class="img-circle profile_image">
					<img src="<?=$v->country_img?>" alt="" class="flag_image">
					<?if ( $v->v_get_code == "0001"){ ?>
						<img src="/application/views/images/main/img22_vmark.PNG" alt="" class="vmark_image">
					<?}?>
				</div>
				<div class="name_tag">
					<div class="tag1"><?=$v->theme_num1_nm?></div>
					<div class="tag2"><?=$v->theme_num2_nm?></div>
					<div class="tag3"><?=$v->theme_num3_nm?></div>
				</div>
				<div class="text">
					<p>
						生活在 : <?=$v->live_city_nm?> <br>
						现居住在纽约 : <?=$v->live_country_year?>年 <br>
						性别 : <?=$v->gender_nm?> <br>
						语言 : <?=$v->lang1_nm?>（<?=$v->lang1_skill_nm?>）<?=$v->lang2_nm?>（<?=$v->lang2_skill_nm?>）<?=$v->lang3_nm?>（<?=$v->lang3_skill_nm?>）<br>
					</p>
				</div>
				<div class="sns_icon">

					<?if($v->messenger_qq == null || $v->messenger_qq == ""){?>
						<img src="/application/views/images/main/sns03G.png" alt="" class="sns_icon1G">
					<?}else{?>
						<img src="/application/views/images/main/sns03.png" alt="" class="sns_icon1C">
					<?}?>

					<?if($v->messenger_weixin == null || $v->messenger_weixin == ""){?>
						<img src="/application/views/images/main/sns02G.png" alt="" class="sns_icon2G">
					<?}else{?>
						<img src="/application/views/images/main/sns02.png" alt="" class="sns_icon2C">
					<?}?>
					<div id = "hiddenNum"></div>
				</div><!-- sns_icon end -->
			</div><!-- right_profile end -->
		<?}?>
	</aside>
	<div id='test'></div>
</div>


<script type="text/javascript">
	var _checkDate="";
	var _tmpCheckDate = "";
	//달력제어
	$(document).ready(function () {
		var today = new Date();
		$("#jqxWidget").jqxCalendar({width: 209, height: 200});
	 });

	$(function(){
		var _salesNum= "<?=$salesNum?>";
		var mode= "<?=$mode?>";

		if(mode =="P")
		{
			var _user=document.getElementById('user_num').value;

			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ salesNum : _salesNum, user:_user},
				url:"/index.php/city/country/detailCity3",
				success: function (data){
					document.getElementById('viewContents').innerHTML = data;
				}
			});
		}else{
			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ salesNum : _salesNum},
				url:"/index.php/city/country/detailCity1",
				success: function (data){
					document.getElementById('viewContents').innerHTML = data;

				}
			});
		}

		var i=0;
		$('#calendarContent').click( function(){
			var checkDay = $('#jqxWidget').val().getFullYear() + "-" + ($('#jqxWidget').val().getMonth() + 1 ) + "-" + $('#jqxWidget').val().getDate();
			if(checkDay.length == 9){
				checkDay = $('#jqxWidget').val().getFullYear() + "-0" + ($('#jqxWidget').val().getMonth() + 1 ) + "-" + $('#jqxWidget').val().getDate();
			}else if(checkDay.length == 8){
				checkDay = $('#jqxWidget').val().getFullYear() + "-0" + ($('#jqxWidget').val().getMonth() + 1 ) + "-0" + $('#jqxWidget').val().getDate();
			}

			if(_checkDate.indexOf(checkDay) > -1){
				alert("이미선택된 날짜입니다");
			}else{
				if($('#hiddenValueNum').val()  == -1){
					i	=	0;
				}

				document.getElementById('hiddenNum').innerHTML = "<input type='text' value='"+i+"' id='hiddenValueNum'>";
				_checkDate +="<li class='checkdateLi'  id='li"+i+"'><div class='checkdateDiv'>"+checkDay+"</div> <input type='text' class='checkdateInput'  id='personNum"+i+"' value='0'> 名 <img src='/application/views/images/contents/icon_x.png' class='checkdateClosebtn' id='cancel' name='cancel' onclick='checkCancel("+i+")'><input type='hidden' value="+checkDay+" id='date"+i+"'><input type='hidden' value='"+i+"' id='hidden'"+i+"></li>";

				i++;
			}

			document.getElementById('checkDate').innerHTML = _checkDate;
		});

		$('#city1').click( function(){
			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ salesNum : _salesNum},
				url:"/index.php/city/country/detailCity1",
				success: function (data){
					document.getElementById('viewContents').innerHTML = data;

				}
			});
		});

		$('#city2').click( function(){
			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ salesNum : _salesNum},
				url:"/index.php/city/country/detailCity2",
				success: function (data){
					document.getElementById('viewContents').innerHTML = data;

				}
			});
		});

		$('#city3').click( function(){
			var _user=document.getElementById('user_num').value;

			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ salesNum : _salesNum, user:_user},
				url:"/index.php/city/country/detailCity3",
				success: function (data){
					document.getElementById('viewContents').innerHTML = data;
				}
			});
		});

		$('#calPop').click( function(){
			var _user_num = $('#user_num').val();
			var _fee = $('#fee').val();
			if( $('#li0').html() == "" || $('#li0').html() == null ){
				alert("날짜를 1개 이상 선택해주세요~!");
			}else{
				var _contents = $('#recheckTextarea').val();
				$.ajax({
					type:"GET" ,
					dataType:"text",
					contentType:"application/x-www-form-urlencoded; charset=UTF-8",
					data:{ salesNum: _salesNum,  contents:_contents},
					url:"/index.php/city/country/insertChating",
					success: function (data){
						var hiddenValueNum = $('#hiddenValueNum').val();
						for(var i =0 ;  i <= hiddenValueNum; i++){
							var _date = $('#date'+i).val();
							var _personNum = $('#personNum'+i).val();
							if($('#date'+i).val() != null){
								$.ajax({
									type:"GET" ,
									dataType:"text",
									contentType:"application/x-www-form-urlencoded; charset=UTF-8",
									data:{ productNum: _salesNum, personNum:_personNum, date:_date, fee:_fee, user_num:_user_num},
									url:"/index.php/city/country/insertBookingDate",
									success: function (data){
										//document.getElementById('detailCity_wrap').innerHTML = data;
									}
								});
							}
						}

						document.getElementById('detailCity_wrap').innerHTML = data;
					}
				});
			}
		});
	});


	function checkCancel(i)
	{
		var choiceDate=document.getElementById('date'+i).value;
		/*
		var insertBox = "<li class='checkdateLi'  id='li"+i+"'>";
				insertBox += "<div id='modalDiv' name='modalDiv'>";
				insertBox += "<input type='date' class='form-control' id='recheckDate' name='recheckDate' value='"+choiceDate+"'>";
				insertBox += "<input type='text' class='form-control' id='recheckPerson' name='recheckPerson'>";
				insertBox += "<span> 名</span>";
				insertBox += "<img src='/application/views/images/contents/icon_x.png' class='checkdateClosebtn' id='cancel' name='cancel' onclick='checkCancel("+i+")'>";
				insertBox += "<input type='hidden' value="+choiceDate+" id='date"+i+"'>";
				insertBox += "</div>";
				insertBox += "</li>";
*/
		var num = $('#hiddenValueNum').val();

		document.getElementById('hiddenNum').innerHTML = "<input type='text' value='"+(num-1)+"' id='hiddenValueNum'>";
		var _tmpCheckDate =document.getElementById("li"+i).innerHTML= "<li class='checkdateLi'  id='li"+i+"'><div class='checkdateDiv'>"+choiceDate+"</div> <input type='text' class='checkdateInput' id='personNum"+i+"' value='0'> 名 <img src='/application/views/images/contents/icon_x.png' class='checkdateClosebtn' id='cancel' name='cancel' onclick='checkCancel("+i+")'><input type='hidden' value="+choiceDate+" id='date"+i+"'><input type='hidden' value='"+i+"' id='hidden'"+i+"></li>";

		_checkDate = _checkDate.replace(_tmpCheckDate,"");
		document.getElementById("li"+i).innerHTML="";
	}

	function addReply(num)
	{
		var insertBox ="<div class='typingBox2'>"
									+"<img src='/application/views/images/contents/reply.png' class='reply_arrow2'>"
									+"<textarea name='agencyArea' id='agencyArea' cols='20' rows='20' class='typingArea'></textarea>"
									+"<input type='hidden' value='"+num+"' name='qna_num' id='qna_num' >"
									+"<button class='btn btnQna2' id='agency' name='agency' onclick='insertAgency()'>上传</button>"
									+"</div>";

			document.getElementById('addReply'+num).innerHTML = insertBox;
	}

	function insertQuetion(userNum){
		var _salesNum= "<?=$salesNum?>";
		var _content = document.getElementById('quetionArea').value;
		var _userNum= userNum;

		$.ajax({
			type:"GET" ,
			dataType:"text",
			contentType:"application/x-www-form-urlencoded; charset=UTF-8",
			data:{ salesNum: _salesNum,  content:_content, userNum:_userNum},
			url:"/index.php/city/country/Question",
			success: function (data){
				document.getElementById('viewContents').innerHTML = data;
			}
		});
	}

	function insertAgency(){
		var _salesNum= "<?=$salesNum?>";
		var _content = document.getElementById('agencyArea').value;
		var _qna_num =  document.getElementById('qna_num').value;
		$.ajax({
			type:"GET" ,
			dataType:"text",
			contentType:"application/x-www-form-urlencoded; charset=UTF-8",
			data:{ salesNum: _salesNum,  content:_content, qna_num:_qna_num},
			url:"/index.php/city/country/Agency",
			success: function (data){
				document.getElementById('viewContents').innerHTML = data;
			}
		});
	}

	//상세페이지
	function detailPage(num)
	{
		location.href = "<?=site_url('City/country/Detailcity_search?salesNum="+num+"&mode='); ?>";
	}
</script>