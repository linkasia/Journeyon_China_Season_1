	<div id="contents_wrap1"> <!-- 컨텐츠 영역 나중에 include -->
		<section id="section1">
			<div class="city_title">
				<h3 class="city_text">目前有<span class="font_blue">2万多</span>人访问了<span class="font_blue">200多</span>个不同的国家</h3>
			</div>
			<div class="city_icon">
				<div id="city01" class="city01" name="city01"><img src="/application/views/images/main/img30.png" alt="제주도"><p>济州岛</p></div>
				<div id="city02" class="city02" name="city01"><img src="/application/views/images/main/img31.png" alt="홍콩"><p>香港</p></div>
				<div id="city03" class="city03" name="city01"><img src="/application/views/images/main/img32.png" alt=""><p>东京</p></div>
				<div id="city04" class="city04" name="city01"><img src="/application/views/images/main/img33.png" alt=""><p>台北</p></div>
				<div id="city05" class="city05" name="city01"><img src="/application/views/images/main/img34.png" alt=""><p>纽约</p></div>
				<div id="city06" class="city06" name="city01"><img src="/application/views/images/main/img35.png" alt=""><p>巴黎</p></div>
				<div id="city07" class="city07" name="city01"><img src="/application/views/images/main/img36.png" alt=""><p>柏林</p></div>
				<div id="city08" class="city08" name="city01"><img src="/application/views/images/main/img37.png" alt=""><p>巴塞罗那</p></div>
				<div id="city09" class="city09" name="city01"><img src="/application/views/images/main/img38.png" alt=""><p>伦敦</p></div>
				<div id="city10" class="city10" name="city01"><img src="/application/views/images/main/img39.png" alt=""><p>佛罗伦萨</p></div>
			</div>
		</section>

		<section id="section2">
			<div class="s_button"><img src="/application/views/images/main/button01_travel.png" alt="scroll_button" onclick="pushEvent()" name="btnImg" id="btnImg">
				 <div class="nation_list" name="nation_list" id="nation_list">
					<!--<ul>
						<li>
							<div class="menu-column">
								<p>한국</p>
								<ul>
									<li>한국</li>
								</ul>
							</div>
						</li>

						<li>
							<div class="menu-column">
								<p>아시아</p>
								<p>홍콩/마카오/대만</p>
								<ul>
									<li>대만</li>
									<li>마카오</li>
									<li>싱가포르</li>
									<li>홍콩</li>
								</ul>
								<p>중국/일본</p>
								<ul>
									<li>일본</li>
									<li>중국</li>
								</ul>
							</div>
						</li>

						<li>
							<div class="menu-column">
								<p>동남아</p>
								<ul>
									<li>라오스</li>
									<li>말레이시아</li>
									<li>베트남</li>
									<li>인도네시아</li>
									<li>캄보디아</li>
									<li>태국</li>
									<li>필리핀</li>
								</ul>
							</div>
						</li>

						<li>
							<div class="menu-column">
								<p>유럽</p>
								<p>서유럽</p>
								<ul>
									<li>네덜란드</li>
									<li>독일</li>
									<li>룩셈부르크</li>
									<li>벨기에</li>
									<li>스위스</li>
									<li>아일랜드</li>
									<li>영국</li>
									<li>오스트리아</li>
									<li>이탈리아</li>
									<li>프랑스</li>
								</ul>
							</div>
						</li>

						<li>
							<div class="menu-column">
								<p>남유럽</p>
								<ul>
									<li>스페인</li>
									<li>크로아티아</li>
									<li>터키</li>
								</ul>
								<p>북유럽</p>
								<ul>
									<li>노르웨이</li>
									<li>덴마크</li>
								</ul>

								<p>동유럽/발틱 3국</p>
								<ul>
									<li>러시아</li>
									<li>루마니아</li>
									<li>체코</li>
								</ul>
							</div>
						</li>

						
						<li>
							<div class="menu-column">
								<p>아메리카</p>
								<p>미국/캐나다</p>
								<ul>
									<li>미국</li>
									<li>캐나다</li>
								</ul>
								
								<p>중남미</p>
								<ul>
									<li>파나마</li>
								</ul>
							</div>
						</li>

						<li>
							<div class="menu-column">
								<p>오세아니아</p>
								<p>호주/뉴질랜드</p>
								<ul>
									<li>뉴질랜드</li>
									<li>오스트레일리아</li>
								</ul>
								<p>남태평양</p>
								<ul>
									<li>괌</li>
								</ul>
							</div>
						</li>
					</ul>-->
				</div>
			</div> 
		</section>
	</div> <!-- wrap1 이 여기서 끝남 -->


	<div id="contents_wrap3">
		<section id="section3">
			<div class="sub_title"> <h4>11月 主题纽约 <span>去纽约玩什么？  当地人带你去游玩！</span></h4> </div>
			<div class="somenail_wrap">
				<ul class="somenail_list">

				<? for($i=1; $i<=6; $i++){ ?>
					<li class="somenail1">
						<section class="somenail_bootstrap">
							<div class="portfolio-item"  name='backpic_<?=$i?>' id='backpic_<?=$i?>' onclick='selectBackpic(<?=$i?>);'>
								<div class="portfolio-link">
										<div class="portfolio-hover">
											<div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
										</div>
										<img src="/application/views/images/main/img1<?=$i?>_some0<?=$i?>.png" alt="">
								</div>
								<?if($i== 1){?>
									<div class="somenail_transbox" style="background-color:rgba(59,183,202,.6)"><p class="somenail_title">纽约军事历史主题</p></div> <!-- 투명박스 -->
								<?}else if($i== 2){ ?>
									<div class="somenail_transbox" style="background-color:rgba(195,119,228,.6)"><p class="somenail_title">纽约军事历史主题</p></div>
								<?}else if($i== 3){?>
									<div class="somenail_transbox" style="background-color:rgba(63,127,206,.6)"><p class="somenail_title">纽约军事历史主题</p></div>
								<?}else if($i== 4){?>
									<div class="somenail_transbox" style="background-color:rgba(255,210,5,.6)"><p class="somenail_title">纽约军事历史主题</p></div> 
								<?}else if($i== 5){?>
									<div class="somenail_transbox" style="background-color:rgba(243,164,107,.6)"><p class="somenail_title">纽约军事历史主题</p></div> 
								<?}else if($i== 6){?>
									<div class="somenail_transbox" style="background-color:rgba(48,59,76,.6)"><p class="somenail_title">纽约军事历史主题</p></div>
								<?}?>
							</div> 
							
							<div class="somenail_transcity"><p>纽约</p></div>

							<div class="somenail_caption">

									<div class="circle-div">
										<img name='profile_<?=$i?>' id='profile_<?=$i?>' src="/application/views/images/main/profile01.jpg" alt="profile pic" class="img-circle somenail_profile" onclick='selectProfile(<?=$i?>);'>
									</div>

									<div class="back-line1">
										<img src="/application/views/images/main/img25_coin.png" alt="icon_coin" class="icon_coin"><span>500 元</span>
									</div>

									<div class="back-line2">
										<p>赵涧楠&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;当地人</p>
									</div>

									<div class="back-line3">
										<img src="/application/views/images/main/img23_heart.png" alt="icon_heart" class="icon_heart">&nbsp;<span>游记 20个</span>&nbsp;&nbsp;
										<img src="/application/views/images/main/img23_heart.png" alt="icon_" class="icon_t">&nbsp;<span>50个</span>
									</div>

									<div class="flagbox"><img src="/application/views/images/main/img21_flag01.png" alt=""></div>
									<div class="vbox"><img src="/application/views/images/main/img22_vmark.png" alt=""></div>
									<div class="navibox"><img src="/application/views/images/main/img26_navi.png" alt=""></div>

							</div>
						</section>
					</li>
					<?}?>


					<!-- <li class="somenail2"></li>
					<li class="somenail3"></li>
					<li class="somenail4"></li>
					<li class="somenail5"></li>
					<li class="somenail6"></li> -->
				</ul>
			</div>
		</section>
	</div> <!-- contents wrap3 끝남 -->

	<div id="contents wrap4">
		<section id="section4">
			<div class="sub_title"> <h4>最新上传的首尔旅行 <span> / 最新准备的首尔旅行！</span></h4> </div>
			<div class="somenail_wrap">
				<ul class="somenail_list">

					<li class="somenail2_1">
						<section class="somenail_bootstrap2">
							<div class="portfolio-item2">
								<div class="portfolio-link2">
										<div class="portfolio-hover2">
											<div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
										</div>
										<img src="/application/views/images/main/img17_some07.png" alt="">
								</div>
								<div class="somenail_transbox2" style="background-color:rgba(237,28,36,.6)"><p class="somenail_title">首尔地铁沿线游之3号线</p></div>
							</div> 
							
							<div class="somenail_transcity2"><p>纽约</p></div>

							<div class="somenail_caption">

									<div class="circle-div2">
										<img src="/application/views/images/main/profile02.jpg" alt="profile pic" class="img-circle2 somenail_profile");'>
									</div>

									<div class="back-line1">
										<img src="/application/views/images/main/img25_coin.png" alt="icon_coin" class="icon_coin"><span>500 元</span>
									</div>

									<div class="back-line2">
										<p>赵涧楠&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;当地人</p>
									</div>

									<div class="back-line3">
										<img src="/application/views/images/main/img23_heart.png" alt="icon_heart" class="icon_heart">&nbsp;<span>游记 20个</span>&nbsp;&nbsp;
										<img src="/application/views/images/main/img23_heart.png" alt="icon_" class="icon_t">&nbsp;<span>50个</span>
									</div>

									<div class="flagbox"><img src="/application/views/images/main/img21_flag01.png" alt=""></div>
									<div class="vbox"><img src="/application/views/images/main/img22_vmark.png" alt=""></div>
									<div class="navibox"><img src="/application/views/images/main/img26_navi.png" alt=""></div>

							</div>
						</section>
					</li>
				</ul>
			</div>
		</section>
	</div> <!-- contents_wrap4 -->



	<div id="contents_wrap5">
		<section id="section5">
			<div class="microstory_wrap">
				<div class="title">微旅行故事</div>
				<div></div>
			</div>
			<div class="travelstory_wrap">
				<div class="title">游记</div>
				<div></div>
			</div>
			<div class="news_wrap">
				<div class="title">卓尼在线 新闻</div>
				<div></div>
			</div>
		</section>
	</div>


	<script type="text/javascript">

		function pushEvent(){
			if(document.getElementById('section2').style.height == "0px"){
				document.getElementById('section2').style.transition="all ease .8s";
				document.getElementById('section2').style.height="390px";
			}else{
				document.getElementById('section2').style.transition="all ease .8s";
				document.getElementById('section2').style.height="0px";
			}
			
			if(document.getElementById('nation_list').style.height == "0px"){
				document.getElementById('nation_list').style.transition="all ease .8s";
				document.getElementById('nation_list').style.height="370px";
				document.getElementById('btnImg').src="/application/views/images/main/button01_travel.png";
			}else{
				//document.getElementById('nation_list').style.height="0px";
				document.getElementById('nation_list').style.transition="all ease .8s";
				document.getElementById('nation_list').style.height="0px";
				document.getElementById('btnImg').src="/application/views/images/main/button01_traveldown.png";
			}
			
		}
		
		//도시 이미지 클릭시
		function selectBackpic(code){
			alert("배경"+code);
		}

		//프로필 사진 클릭시
		function selectProfile(code){
			alert("프로필이동"+code);
		}

		

		//$(function(){
			
		
		//});
	
	</script>