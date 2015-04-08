<?$this -> load ->view('/include/headervid')?>
	<div id="contents_wrap1"> <!-- 컨텐츠 영역 나중에 include -->
		<section id="section0">
			<div class="section0divide">
				<p class="section0P1">One-on-One TLC</p>
				<p>Your pup stays in their home or yours</p>
				<button class="btn btn-info">Become a Host</button>
			</div>
			<div class="section0divide">
				<p class="section0P1">Premium Insurance Included</p>
				<p>Reservations covered by 24/7 Customer Care</p>
				<button class="btn btn-info">Become a Guest</button>
			</div>
		</section>
		
		<section id="section1">
			<div class="city_title">
				<h4 class="city_text">目前有<span class="font_orange">2万多</span>人访问了<span class="font_orange">200多</span>个不同的国家</h4>
			</div>
			<div class="map_jr">
				<img src="/application/views/images/main/map2.png" alt="" class="img_map2">
				<div class="map_sb1">
					<img src="/application/views/images/main/map_sb.png" alt="" class="map_local_icon">
					<img src="/application/views/images/main/profile01.jpg" alt="" class="map_local_profile">
					<img src="/application/views/images/flag/20american.png" alt="" class="map_local_flag">
				</div>
				<div class="map_sb2">
					<img src="/application/views/images/main/map_sb.png" alt="" class="map_local_icon">
					<img src="/application/views/images/main/profile02.jpg" alt="" class="map_local_profile">
					<img src="/application/views/images/flag/26mexico.png" alt="" class="map_local_flag">
				</div>
				<div class="map_sb3">
					<img src="/application/views/images/main/map_sb.png" alt="" class="map_local_icon">
					<img src="/application/views/images/main/profile03.jpg" alt="" class="map_local_profile">
					<img src="/application/views/images/flag/24argentina.png" alt="" class="map_local_flag">
				</div>
				<div class="map_sb4">
					<img src="/application/views/images/main/map_sb.png" alt="" class="map_local_icon">
					<img src="/application/views/images/main/profile04.jpg" alt="" class="map_local_profile">
					<img src="/application/views/images/flag/46uk.png" alt="" class="map_local_flag">
				</div>
				<div class="map_sb5">
					<img src="/application/views/images/main/map_sb.png" alt="" class="map_local_icon">
					<img src="/application/views/images/main/profile05.jpg" alt="" class="map_local_profile">
					<img src="/application/views/images/flag/28australia.png" alt="" class="map_local_flag">
				</div>			
				<div class="map_sb6">
					<img src="/application/views/images/main/map_sb.png" alt="" class="map_local_icon">
					<img src="/application/views/images/main/profile06.jpg" alt="" class="map_local_profile">
					<img src="/application/views/images/flag/11italy.png" alt="" class="map_local_flag">
				</div>
				<div class="map_sb7">
					<img src="/application/views/images/main/map_sb.png" alt="" class="map_local_icon">
					<img src="/application/views/images/main/profile07.jpg" alt="" class="map_local_profile">
					<img src="/application/views/images/flag/14turkey.png" alt="" class="map_local_flag">
				</div>
				<div class="map_sb8">
					<img src="/application/views/images/main/map_sb.png" alt="" class="map_local_icon">
					<img src="/application/views/images/main/profile08.jpg" alt="" class="map_local_profile">
					<img src="/application/views/images/flag/01korea.png" alt="" class="map_local_flag">
				</div>
				
				<div class="map_sbRight">
					<img src="/application/views/images/flag/01korea.png" alt="" class="map_sbRight_flag">
					<p class="map_sbRightP1">&nbsp;> 加拿大</p>
					<p class="map_sbRightP2"><巴西世界杯那些事儿></p>

					<img src="/application/views/images/main/p02.png" alt="" class="map_sbRightP3_leftmark">
					<p class="map_sbRightP3">  近北极圈，是加西观望北极光的最佳地点之一，也是育空地区的首府。这里是户外的天堂，野生动物的乐园，冬季的夜空里会洒满精...  <img src="/application/views/images/main/p02.png" alt="" class=""></p>
				</div>
			</div>
		</section>



		<section id="section2">
			<div class="s_button">
			<div onclick="pushEvent()" name="btnImg" id="btnImg">全部地区  <span class="glyphicon glyphicon-chevron-down"></span></div>
			<!-- <img src="/application/views/images/main/button01_travel.png" alt="scroll_button" onclick="pushEvent()" name="btnImg" id="btnImg"> -->
				 <div class="nation_list" name="nation_list" id="nation_list">
							<?foreach($country as $v){
								if($v->class == "0001" && $v->CODE == "0001"){?>
									<div class="menu-column1">
										<p class="big_p"><b>亚洲</b></p>
										<p><b>东亚</b></p>
										<ul>
											<?foreach($country as $k){
												if($k->class =='0001'){?>
												<li onclick="page_country('<?=$k->class?>','<?=$k->CODE?>')"><img src="<?=$k->ref1?>" onclick="page_country('<?=$k->class?>','<?=$k->CODE?>')"><span class='cursor'> <?=$k->code_nm?></span></li>
											<?}
											}?>
										</ul>
										<p class="small_p"><b>南亚</b></p>
										<ul>
											<?foreach($country as $k){
												if($k->class =='0002'){?>
												<li onclick="page_country('<?=$k->class?>','<?=$k->CODE?>')"><img src="<?=$k->ref1?>" onclick="page_country('<?=$k->class?>','<?=$k->CODE?>')"><span class='cursor'> <?=$k->code_nm?></span></li>
											<?}
											}?>
										</ul>
									</div>
									<div class="menu-column2">
										<p class="small_pp"><b>东南亚</b></p>
										<ul>
											<?foreach($country as $k){
												if($k->class =='0003'){?>
												<li onclick="page_country('<?=$k->class?>','<?=$k->CODE?>')"><img src="<?=$k->ref1?>" onclick="page_country('<?=$k->class?>','<?=$k->CODE?>')"><span class='cursor'> <?=$k->code_nm?></span></li>
											<?}
											}?>
										</ul>
										<p class="small_p"><b>西亚</b></p>
										<ul>
											<?foreach($country as $k){
												if($k->class =='0004'){?>
												<li onclick="page_country('<?=$k->class?>','<?=$k->CODE?>')"><img src="<?=$k->ref1?>" onclick="page_country('<?=$k->class?>','<?=$k->CODE?>')"><span class='cursor'> <?=$k->code_nm?></span></li>
											<?}
											}?>
										</ul>
									</div>

								<?}else if($v->class == "0005" && $v->CODE == "0001"){?>
									<div class="menu-column3">
										<p class="big_p"><b>美洲</b></p>
										<p><b>北美洲</b></p>
										<ul>
											<?foreach($country as $k){
												if($k->class =='0005'){?>
												<li onclick="page_country('<?=$k->class?>','<?=$k->CODE?>')"><img src="<?=$k->ref1?>" onclick="page_country('<?=$k->class?>','<?=$k->CODE?>')"><span class='cursor'> <?=$k->code_nm?></span></li>
											<?}
											}?>
										</ul>
										<p class="small_p"><b>南美洲</b></p>
										<ul>
											<?foreach($country as $k){
												if($k->class =='0006'){?>
												<li onclick="page_country('<?=$k->class?>','<?=$k->CODE?>')"><img src="<?=$k->ref1?>" onclick="page_country('<?=$k->class?>','<?=$k->CODE?>')"><span class='cursor'> <?=$k->code_nm?></span></li>
											<?}
											}?>
										</ul>
									</div>

								<?}else if($v->class == "0007" && $v->CODE == "0001"){?>
									<div class="menu-column4">
										<p class="big_p"><b>欧洲</b></p>
										<p><b>北欧</b></p>
										<ul>
											<?foreach($country as $k){
												if($k->class =='0007'){?>
												<li onclick="page_country('<?=$k->class?>','<?=$k->CODE?>')"><img src="<?=$k->ref1?>" onclick="page_country('<?=$k->class?>','<?=$k->CODE?>')"><span class='cursor'> <?=$k->code_nm?></span></li>
											<?}
											}?>
										</ul>
										<p><b>东欧</b></p>
										<ul>
											<?foreach($country as $k){
												if($k->class =='0008'){?>
												<li onclick="page_country('<?=$k->class?>','<?=$k->CODE?>')"><img src="<?=$k->ref1?>" onclick="page_country('<?=$k->class?>','<?=$k->CODE?>')"><span class='cursor'> <?=$k->code_nm?></span></li>
											<?}
											}?>
										</ul>
										<p><b>西欧</b></p>
										<ul>
											<?foreach($country as $k){
												if($k->class =='0009'){?>
												<li onclick="page_country('<?=$k->class?>','<?=$k->CODE?>')"><img src="<?=$k->ref1?>" onclick="page_country('<?=$k->class?>','<?=$k->CODE?>')"><span class='cursor'> <?=$k->code_nm?></span></li>
											<?}
											}?>
										</ul>
									</div>

								<?}else if($v->class == "0010" && $v->CODE == "0001"){?>
									<div class="menu-column5">
										<p class="small_pp"><b>南欧</b></p>
										<ul>
											<?foreach($country as $k){
												if($k->class =='0010'){?>
												<li onclick="page_country('<?=$k->class?>','<?=$k->CODE?>')"><img src="<?=$k->ref1?>" onclick="page_country('<?=$k->class?>','<?=$k->CODE?>')"><span class='cursor'> <?=$k->code_nm?></span></li>
											<?}
											}?>
										</ul>
										<p><b>中欧</b></p>
										<ul>
											<?foreach($country as $k){
												if($k->class =='0011'){?>
												<li onclick="page_country('<?=$k->class?>','<?=$k->CODE?>')"><img src="<?=$k->ref1?>" onclick="page_country('<?=$k->class?>','<?=$k->CODE?>')"><span class='cursor'> <?=$k->code_nm?></span></li>
											<?}
											}?>
										</ul>
									</div>
								<?}else if($v->class == "0012" && $v->CODE == "0001"){?>
									<div class="menu-column6">
										<p class="big_p"><b>大洋洲</b></p>
										<p><b>南欧</b></p>
										<ul>
											<?foreach($country as $k){
												if($k->class =='0012'){?>
												<li onclick="page_country('<?=$k->class?>','<?=$k->CODE?>')"><img src="<?=$k->ref1?>" onclick="page_country('<?=$k->class?>','<?=$k->CODE?>')"><span class='cursor'> <?=$k->code_nm?></span></li>
											<?}
											}?>
										</ul>
									</div>
									<?}?>
							<?}?>

				</div>
			</div>
		</section>
	</div> <!-- wrap1 이 여기서 끝남 -->


	<div id="contents_wrap3">
		<section id="section3">
			<div class="sub_title"> <h4><?=date('m')?>月 主题纽约 <span>去纽约玩什么？  当地人带你去游玩！</span></h4> </div>
			<div class="somenail_wrap">
				<ul class="somenail_list">
				<?$i=1;?>
				<? foreach($choice as $v){ ?>
					<li class="somenail1">
						<section class="somenail_bootstrap">
							<div class="portfolio-item"  name='backpic' id='backpic' onclick="detailCity('<?=$v->product_num?>')">
								<div class="portfolio-link">
										<div class="portfolio-hover">
											<div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
										</div>
										<img style="width: 300px; height: 240px;" src="<?=$v->image?>" alt="">
								</div>
								<?if($i== 1){?>
									<div class="somenail_transbox" style="background-color:rgba(83,203,241,.8)" title='<?=$v->title?>'><p class="somenail_title"><?=$v->title?></p></div>
								<?}else if($i== 2){ ?>
									<div class="somenail_transbox" style="background-color:rgba(242,87,76,.8)" title='<?=$v->title?>'><p class="somenail_title"><?=$v->title?></p></div>
								<?}else if($i== 3){?>
									<div class="somenail_transbox" style="background-color:rgba(242,216,81,.8)" title='<?=$v->title?>'><p class="somenail_title"><?=$v->title?></p></div>
								<?}else if($i== 4){?>
									<div class="somenail_transbox" style="background-color:rgba(28,177,153,.8)" title='<?=$v->title?>'><p class="somenail_title"><?=$v->title?></p></div>
								<?}else if($i== 5){?>
									<div class="somenail_transbox" style="background-color:rgba(255,183,0,.8)" title='<?=$v->title?>'><p class="somenail_title"><?=$v->title?></p></div>
								<?}else if($i== 6){?>
									<div class="somenail_transbox" style="background-color:rgba(124,66,140,.8)" title='<?=$v->title?>'><p class="somenail_title"><?=$v->title?></p></div>
								<?}?>
							</div>

							<div class="somenail_transcity" onclick="detailCity('<?=$v->product_num?>')"><p><?=$v->code_nm?></p></div>

							<div class="somenail_caption">

									<div class="circle-div">
										<img name='profile' id='profile' src="<?=$v->face_img_path?>" alt="" class="img-circle somenail_profile" onclick="detailProfile('<?=$v->product_num?>')">
									</div>

									<div class="back-line1">
										<img src="/application/views/images/main/img25_coin.png" alt="icon_coin" class="icon_coin"><span class="posa_price"><?=$v->fat_price?> 元</span>
									</div>

									<div class="back-line2">
										<span class="posa_name"><?=$v->Name_cn_en?></span><span class="posa_local">当地人</span>
									</div>

									<div class="back-line3">
										<img src="/application/views/images/main/img23_heart.png" alt="icon_heart" class="icon_heart"><span class="posa_like"><?=$v->likeCnt?>个</span>
										<img src="/application/views/images/main/img24_talkbox.png" alt="icon_t" class="icon_t">&nbsp;<span class="posa_reply">游记 <?=$v->reviewCnt?>个</span>
									</div>

									<div class="flagbox"><img src="<?=$v->monther_img?>" alt=""></div>
									<div class="vbox"><img src="/application/views/images/main/img22_vmark.png" alt=""></div>
									<div class="navibox"><img src="/application/views/images/main/img26_navi.png" alt=""></div>

							</div>
						</section>
					</li>
					<?$i++;?>
					<?}?>
				</ul>
			</div>
		</section>
	</div> <!-- contents wrap3 끝남 -->

	<div id="contents_wrap4">
		<section id="section4">
			<div class="sub_title"> <h4>最新上传的首尔旅行 <span> / 最新准备的首尔旅行！</span></h4> </div>

			<?$k=1;?>
			<?foreach($Travel as $v){?>
				<div class="somenail_wrap">
					<ul class="somenail_list">
						<li class="somenail2_1">
							<section class="somenail_bootstrap">
								<div class="portfolio-item2" onclick="detailCity('<?=$v->product_num?>')">
									<div class="portfolio-link">
										<div class="portfolio-hover">
											<div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
										</div>
										<img style="width: 300px; height: 240px" src="<?=$v->image?>" alt="">
									</div>
									<?if($k== 1){?>
									<div class="somenail_transbox" style="background-color:rgba(255,183,0,.8)" title='<?=$v->title?>'><p class="somenail_title"><?=$v->title?></p></div>
									<?}else if($k== 2){ ?>
									<div class="somenail_transbox" style="background-color:rgba(28,177,153,.8)" title='<?=$v->title?>'><p class="somenail_title"><?=$v->title?></p></div>
									<?}else if($k== 3){?>
									<div class="somenail_transbox" style="background-color:rgba(242,216,81,.8)" title='<?=$v->title?>'><p class="somenail_title"><?=$v->title?></p></div>
									<?}?>
								</div>
								<div class="somenail_transcity" onclick="detailCity('<?=$v->product_num?>')">
									<p><?=$v->code_nm?></p>
								</div>

								<div class="somenail_caption">

									<div class="circle-div">
										<img name='profile' id='profile' src="<?=$v->face_img_path?>" alt="" class="img-circle somenail_profile" onclick="detailProfile('<?=$v->product_num?>')">
									</div>

									<div class="back-line1">
										<img src="/application/views/images/main/img25_coin.png" alt="icon_coin" class="icon_coin"><span class="posa_price"><?=$v->fat_price?> 元</span>
									</div>

									<div class="back-line2">
										<span class="posa_name"><?=$v->Name_cn_en?></span><span class="posa_local">当地人</span>
									</div>

									<div class="back-line3">
										<img src="/application/views/images/main/img23_heart.png" alt="icon_heart" class="icon_heart"><span class="posa_like"><?=$v->likeCnt?>个</span>
										<img src="/application/views/images/main/img24_talkbox.png" alt="icon_t" class="icon_t">&nbsp;<span class="posa_reply">游记  <?=$v->reviewCnt?>个</span>
									</div>

									<div class="flagbox"><img src="<?=$v->monther_img?>" alt=""></div>
									<div class="vbox"><img src="/application/views/images/main/img22_vmark.png" alt=""></div>
									<div class="navibox"><img src="/application/views/images/main/img26_navi.png" alt=""></div>
								</div>
							</section>
						</li>
					</ul>
				</div> <!-- somenail_wrap 닫음 -->
				<?$k++;?>
			<?}?>

		</section> <!-- section4 닫음 -->
	</div> <!-- contents_wrap4 -->



	<div id="contents_wrap5">
		<section id="section5">
			<div class="section5divide plpr20">
				<p class="section5divideP1">如何参与</p>
				<p class="section5divideP2">在Journey On! 卓尼上</p>
				<p class="section5divideP3">您会找到旅行的新体验，新乐趣。 在这里您会发现很多没有在旅游书上出现的景点和地道活动；更没有广告宣传和强制消费的束缚，您可以放心的去享受与别不同的旅游；尽情的感受当地的文化；拥抱您旅途上的人和事。 登录后，您可以收藏您感兴趣的微旅程和挑选您的微旅行导游；也可以一尝当导游的体验，带世界各地的朋友们去看您住的地方的好风光。 您也可以使用其他社区平台的账号来使用Journey On!卓尼，把微旅行文化分享到每个角落。</p>
				<button class="btn btn-danger section5btn">更多</button>
			</div>
			<div class="section5divide">
				<img src="/application/views/images/main/sns05.jpg" alt="">
			</div>
		</section>
	</div>

	<div id="contents_wrap6">
		<section id="section6">
			<div class="section5divide">
				<img src="/application/views/images/main/weibobg.png" alt="" class="weibobg">
				<div class="weibopicWrap">
					<div class="weibopic"><img src="/application/views/images/main/profile01.jpg" alt="weibopic"></div>
					<div class="weibopic"><img src="/application/views/images/main/profile02.jpg" alt="weibopic"></div>
					<div class="weibopic"><img src="/application/views/images/main/profile03.jpg" alt="weibopic"></div>
					<div class="weibopic"><img src="/application/views/images/main/profile04.jpg" alt="weibopic"></div>
					<div class="weibopic"><img src="/application/views/images/main/profile05.jpg" alt="weibopic"></div>
					<div class="weibopic"><img src="/application/views/images/main/profile06.jpg" alt="weibopic"></div>
					<div class="weibopic"><img src="/application/views/images/main/profile07.jpg" alt="weibopic"></div>
					<div class="weibopic"><img src="/application/views/images/main/profile08.jpg" alt="weibopic"></div>
				</div>
				<p class="weiboP">123,916 people like Jouney On</p>
			</div>
			<div class="section5divide plpr40">
				<p class="section5divideP1">微旅行故事</p>
				<p class="section5divideP7">在Journey On! 卓尼上</p>
				<p class="section5divideP6">您会找到旅行的新体验，新乐趣。 在这里您会发现很多没有在旅游书上出现的景点和地道活动；更没有广告宣传和强制消费的束缚，您可以放心的去享受与别不同的旅游；尽情的感受当地的文化；拥抱您旅途上的人和事。 登录后，您可以收藏您感兴趣的微旅程和挑选您的微旅行导游；也可以一尝当导游的体验，带世界各地的朋友们去看您住的地方的好风光。 您也可以使用其他社区平台的账号来使用Journey On!卓尼，把微旅行文化分享到每个角落。</p>
			</div>
		</section>
	</div>

	<!-- <div class="fb-comments" data-href="https://www.facebook.com/weihaikorea" data-numposts="5" data-colorscheme="light"></div>
	<div id="fb-root"></div> -->
<!-- <iframe src="https://www.facebook.com/shareevent/app_552924508082093" scrolling="no" frameborder="1" style="border:none; overflow:hidden; width:470px; height:250px;" id='frmFacebook' name='frmFacebook'> </iframe>
 -->
	<script type="text/javascript">
	/*
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ko_KR/sdk.js#xfbml=1&appId=1076643705712373&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
*/
/*
		function notice(key){
			location.href = "/index.php/admin/adminMenu/adminNotice";
		}
*/
		function pushEvent(){
			if(document.getElementById('section2').style.height == "0px"){
				document.getElementById('section2').style.transition="all ease .8s";
				document.getElementById('section2').style.height="370px";
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

		function page_country(country,city){
			location.href = "<?=site_url('City/country/city_search?scountry="+country+"&countryList="+city+"&cityList='); ?>";
		}
/*
		function Country_move(a,b,c){
			location.href = "<?=site_url('City/country/city_search?scountry="+a+"&countryList="+b+"&cityList="+c+"'); ?>";
		}
*/
		function detailProfile(code)
		{
			location.href = "<?=site_url('City/country/Detailcity_search?salesNum="+code+"&mode=P'); ?>";
		}
		function detailCity(code)
		{
			location.href = "<?=site_url('City/country/Detailcity_search?salesNum="+code+"&mode='); ?>";
		}
/*
		$(function(){

			$('#backpic').click( function(){
				alert("AAA");
			});

		});
*/
	</script>