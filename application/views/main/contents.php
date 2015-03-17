
	<div id="contents_wrap1"> <!-- 컨텐츠 영역 나중에 include -->
		<section id="section1">
			<div class="city_title">
				<h3 class="city_text">目前有<span class="font_orange">2万多</span>人访问了<span class="font_orange">200多</span>个不同的国家</h3>
			</div>

			<div class="city_icon">

			<?foreach($city as $v) {?>
					<div id="city" class="city" name="city"><img src="<?=$v->ref1?>" alt="" onclick="Country_move('<?=$v->sclass?>','<?=$v->class?>','<?=$v->code?>')">
						<p><?=$v->code_nm?></p>
					</div>
				<?}?>
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
									<div class="somenail_transbox" style="background-color:rgba(59,183,202,.6)" title='<?=$v->title?>'><p class="somenail_title"><?=$v->title?></p></div>
								<?}else if($i== 2){ ?>
									<div class="somenail_transbox" style="background-color:rgba(195,119,228,.6)" title='<?=$v->title?>'><p class="somenail_title"><?=$v->title?></p></div>
								<?}else if($i== 3){?>
									<div class="somenail_transbox" style="background-color:rgba(63,127,206,.6)" title='<?=$v->title?>'><p class="somenail_title"><?=$v->title?></p></div>
								<?}else if($i== 4){?>
									<div class="somenail_transbox" style="background-color:rgba(255,210,5,.6)" title='<?=$v->title?>'><p class="somenail_title"><?=$v->title?></p></div>
								<?}else if($i== 5){?>
									<div class="somenail_transbox" style="background-color:rgba(243,164,107,.6)" title='<?=$v->title?>'><p class="somenail_title"><?=$v->title?></p></div>
								<?}else if($i== 6){?>
									<div class="somenail_transbox" style="background-color:rgba(48,59,76,.6)" title='<?=$v->title?>'><p class="somenail_title"><?=$v->title?></p></div>
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

	<div id="contents wrap4">
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
									<div class="somenail_transbox" style="background-color:rgba(237,28,36,0.6)" title='<?=$v->title?>'><p class="somenail_title"><?=$v->title?></p></div>
									<?}else if($k== 2){ ?>
									<div class="somenail_transbox" style="background-color:rgba(195,119,228,0.8)" title='<?=$v->title?>'><p class="somenail_title"><?=$v->title?></p></div>
									<?}else if($k== 3){?>
									<div class="somenail_transbox" style="background-color:rgba(27,188,155 ,0.8)" title='<?=$v->title?>'><p class="somenail_title"><?=$v->title?></p></div>
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
			<div class="microstory_wrap">
				<div class="title">微旅行故事</div>
				<div>
					<img src="/application/views/images/main/sns01.jpg" alt="" />
				</div>
			</div>
			<div class="travelstory_wrap">
				<div class="title">游记</div>
				<div>
					<img src="/application/views/images/main/sns02.jpg" alt="" />
				</div>
			</div>
			<div class="news_wrap">
				<div class="title">卓尼在线 新闻</div>
				<div id="noticeTablediv"onclick="notice()">
					<!-- <img src="/application/views/images/main/sns03.jpg" alt="" /> -->
					<table id="noticeTable" class="table">
						<thead class="tac">
							<tr class="bgf9fafc tac">
								<th class="nth1 tac">말머리</th>
								<th class="nth2 tac">제목</th>
								<th class="nth3 tac">날짜</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="ntd1">[가이드]</td>
								<td class="ntd2">어디 놀러갔다왔어요어디 놀러갔다왔어요어디 놀러 갔다 왔어요</td>
								<td class="ntd3">2015-03-17</td>
							</tr>
							<tr>
								<td class="ntd1">[가이드]</td>
								<td class="ntd2">어디 놀러갔다왔어요어디 놀러갔다왔어요어디 놀러 갔다 왔어요</td>
								<td class="ntd3">2015-03-17</td>
							</tr>
							<tr>
								<td class="ntd1">[가이드]</td>
								<td class="ntd2">어디 놀러갔다왔어요어디 놀러갔다왔어요어디 놀러 갔다 왔어요</td>
								<td class="ntd3">2015-03-17</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</section>
	</div>


	<script type="text/javascript">

		function notice(){
			location.href = "/index.php/admin/adminMenu/adminNotice";
		}

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

		function page_country(country,city){
			location.href = "<?=site_url('City/country/city_search?scountry="+country+"&countryList="+city+"&cityList='); ?>";
		}

		function Country_move(a,b,c){
			location.href = "<?=site_url('City/country/city_search?scountry="+a+"&countryList="+b+"&cityList="+c+"'); ?>";
		}

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