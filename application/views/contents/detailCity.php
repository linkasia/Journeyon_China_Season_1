<?
$salesNum = $_REQUEST['salesNum'];
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
			<!-- include 한 부분 --><?
			
			$data['salesCity']= $this->country_M->salesDetailCity($salesNum);

			$this->load->view("/contents/salesCity1",$data);
			?>
		</div>
	</section>

	<aside id="right_aside">
		<?foreach($salesBasic as $v){?>
			<div class="right_reservation">
				<div class="price">
					<p class="price_title">价格 :</p>
						<p class="price_sub"><?=$v->fat_price?> 元<p>
				</div>
				<div>
					<p>选择行程</p>
					<span>可选</span><span>已选</span>
				</div>

				<div class="calandar">
					<div class="select">
					</div>
					
					<div id='divCal' name='divCal'> <?$this->load->view("/include/calendar");?> </div>

					<!-- <img src="/application/views/images/contents/calandar.png" alt=""> --> <!-- 캘린더 들어가는 칸 -->
					<div class="selectParent2"> <!-- 날짜 선택하면 등장하는 option 박스 -->
						<ul id='checkDate' name='checkDate'>	</ul>
						
						<!--select class="select_option2"> 
							<option value=''>2014-12-10</option>
						</select-->

						<!--select class="select_option3"> 
							<option value=''>1名</option>
							<option value=''>2名</option>
							<option value=''>3名</option>
							<option value=''>4名</option>
							<option value=''>5名</option>
						</select-->
					</div>
				</div>
				<div class="aside-menu">
					<button class="btn btn-primary" id="calPop" name="calPop">定制游咨询</button>
				</div>
				<div class="aside-menu">
					<hr>
					<img src="/application/views/images/contents/heart.PNG" alt="heart">
					<span><?=$v->wishcount?>名 想去</span>
				</div>
				<div class="aside-menu">
					<button class="btn btn-primary">我想去</button>
				</div>
			</div>
		<?}?>

		<?foreach($salesBasic as $v){?>
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
						是否是专业导游 : <?=$v->country_nm?> <br>
						<?if ( $v->g_get_code == "0001"){ ?>
							Host : Available  <br>
						<?}else{?>
							Host : Disable  <br>
						<?}?>
						生活在 : <?=$v->live_city_nm?> <br>
						现居住在纽约 : <?=$v->live_country_year?>年 <br>
						年龄 :  <?=$v->age?>岁 <br>
						性别 : <?=$v->gender_nm?> <br>
						注册时间 : <?=$v->YEAR?> 年 <?=$v->mon?> 月 <?=$v->DAY?> 日 <br>
						语言 : <?=$v->lang1_nm?>（<?=$v->lang1_skill_nm?>）<?=$v->lang2_nm?>（<?=$v->lang2_skill_nm?>）<?=$v->lang3_nm?>（<?=$v->lang3_skill_nm?>）<br>		
						职业 : <?=$v->job?>、<?=$v->job_detail?> <br>
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
				</div>
				<button class="btn btn-info profile-btn">更多</button>
			</div>
		<?}?>
	</aside>
</div>


<script type="text/javascript"t>
	var _checkDate="";
	var _tmpCheckDate = "";
	//달력제어
	$(document).ready(function () {           
		var today = new Date();
		$("#jqxWidget").jqxCalendar({width: 209, height: 200});
	 });

	$(function(){
		var _salesNum= "<?=$salesNum?>";
		
		var i=0;
		$('#calendarContent').click( function(){

			var checkDay = $('#jqxWidget').val().getFullYear() + "-" + $('#jqxWidget').val().getMonth() + "-" + $('#jqxWidget').val().getDate();

			
			if(_checkDate.indexOf(checkDay) > -1){
				alert("이미선택된 날짜입니다");
			}else{
				
				//alert(_checkDate);
				_checkDate += "<li class='checkdateLi'  id='li"+i+"'><div class='checkdateDiv'>"+checkDay+"</div> <input type='text' class='checkdateInput'> 名 <img src='/application/views/images/contents/icon_x.png' class='checkdateClosebtn' id='cancel' name='cancel' onclick='checkCancel("+i+")'><input type='hidden' value="+checkDay+" id='date"+i+"'></li>";
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
				//url:"http://163.180.73.62/index.php/city/country/detailCity1",
				url:"http://163.180.73.25/index.php/city/country/detailCity1",
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
				//url:"http://163.180.73.62/index.php/city/country/detailCity2",
				url:"http://163.180.73.25/index.php/city/country/detailCity2",
				success: function (data){
					document.getElementById('viewContents').innerHTML = data;
					
				}
			});
		});

		$('#city3').click( function(){
			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ salesNum : _salesNum},
				//url:"http://163.180.73.62/index.php/city/country/detailCity3",
				url:"http://163.180.73.25/index.php/city/country/detailCity3",
				success: function (data){
					document.getElementById('viewContents').innerHTML = data;
					
				}
			});
		});
	});


	function checkCancel(i)
	{
		var choiceDate=document.getElementById('date'+i).value;
		 var _tmpCheckDate =document.getElementById("li"+i).innerHTML="<li class='checkdateLi'  id='li"+i+"'><div class='checkdateDiv'>"+choiceDate+"</div> <input type='text' class='checkdateInput'> 名 <img src='/application/views/images/contents/icon_x.png' class='checkdateClosebtn' id='cancel' name='cancel' onclick='checkCancel("+i+")'><input type='hidden' value="+choiceDate+" id='date"+i+"'></li>";
		 _checkDate = _checkDate.replace(_tmpCheckDate,"");
		 document.getElementById("li"+i).innerHTML="";
	}
</script>