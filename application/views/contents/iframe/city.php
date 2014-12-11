<div id="contents_wrap1"> <!-- 컨텐츠 영역 나중에 include -->
	<div id="contents_wrapcenter"> <!-- 가운데로 가로값 줘서 가운데 정렬시키는 wrap -->
		<aside id="aside_wrap"> <!-- 좌측 정렬 부분 감싸는 영역 -->

			<div class="div_box1">
				<div class="div_box1-1">
					<div class="nation1"><img src="/application/views/images/left_menu/icon02_city.PNG" alt="">
						<p class="stitle">国家</p>
					</div>
					<?foreach($choiceCountry as $v){?>
					<div class="selectDiv"><span id='valueCountry'><?=$v->code_nm?></span>
						<span id='change_button' name='change_button'><img src="/application/views/images/left_menu/check_box.png" alt=""  onclick="countryList()"></span>
					</div>
					<?}?>
					<!-- <div class="selectParent"> 
						<select class="select_option"> <span>China</span>
							<option value=''>China</option>
							<option value=''>Korea</option>
							<option value=''>미국</option>
						</select>
					</div> -->

				<!-- 여기서부터 나라선택 박스 시작 -->
					 <div class="nation_list" name="nation_list" id="nation_list">
								<?foreach($country as $v){
									if($v->class == "0001" && $v->CODE == "0001"){?>
										<div class="nation-column1">
											<p class="big_p"><b>亚洲</b></p>
											<p><b>东亚</b></p>
											<ul>
												<?foreach($country as $k){
													if($k->class =='0001'){?>
													<li onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"><img src="<?=$k->ref1?>" onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"> <?=$k->code_nm?></li>
												<?}
												}?>
											</ul>
											<p class="small_p"><b>南亚</b></p>
											<ul>
												<?foreach($country as $k){
													if($k->class =='0002'){?>
													<li onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"><img src="<?=$k->ref1?>" onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"> <?=$k->code_nm?></li>
												<?}
												}?>
											</ul>
										</div>
										<div class="nation-column2">
											<p class="small_pp"><b>东南亚</b></p>
											<ul>
												<?foreach($country as $k){
													if($k->class =='0003'){?>
													<li onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"><img src="<?=$k->ref1?>" onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"> <?=$k->code_nm?></li>
												<?}
												}?>
											</ul>
											<p class="small_p"><b>西亚</b></p>
											<ul>
												<?foreach($country as $k){
													if($k->class =='0004'){?>
													<li onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"><img src="<?=$k->ref1?>" onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"> <?=$k->code_nm?></li>
												<?}
												}?>
											</ul>
										</div>

									<?}else if($v->class == "0005" && $v->CODE == "0001"){?>
										<div class="nation-column3">
											<p class="big_p"><b>美洲</b></p>
											<p><b>北美洲</b></p>
											<ul>
												<?foreach($country as $k){
													if($k->class =='0005'){?>
													<li onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"><img src="<?=$k->ref1?>" onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"> <?=$k->code_nm?></li>
												<?}
												}?>
											</ul>
											<p class="small_p"><b>南美洲</b></p>
											<ul>
												<?foreach($country as $k){
													if($k->class =='0006'){?>
													<li onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"><img src="<?=$k->ref1?>" onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"> <?=$k->code_nm?></li>
												<?}
												}?>
											</ul>
										</div>

									<?}else if($v->class == "0007" && $v->CODE == "0001"){?>
										<div class="nation-column4">
											<p class="big_p"><b>欧洲</b></p>
											<p><b>北欧</b></p>
											<ul>
												<?foreach($country as $k){
													if($k->class =='0007'){?>
													<li onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"><img src="<?=$k->ref1?>" onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"> <?=$k->code_nm?></li>
												<?}
												}?>
											</ul>
											<p><b>东欧</b></p>
											<ul>
												<?foreach($country as $k){
													if($k->class =='0008'){?>
													<li onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"><img src="<?=$k->ref1?>" onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"> <?=$k->code_nm?></li>
												<?}
												}?>
											</ul>
											<p><b>西欧</b></p>
											<ul>
												<?foreach($country as $k){
													if($k->class =='0009'){?>
													<li onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"><img src="<?=$k->ref1?>" onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"> <?=$k->code_nm?></li>
												<?}
												}?>
											</ul>
										</div>

									<?}else if($v->class == "0010" && $v->CODE == "0001"){?>
										<div class="nation-column5">
											<p class="small_pp"><b>南欧</b></p>
											<ul>
												<?foreach($country as $k){
													if($k->class =='0010'){?>
													<li onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"><img src="<?=$k->ref1?>" onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"> <?=$k->code_nm?></li>
												<?}
												}?>
											</ul>
											<p><b>中欧</b></p>
											<ul>
												<?foreach($country as $k){
													if($k->class =='0011'){?>
													<li onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"><img src="<?=$k->ref1?>" onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"> <?=$k->code_nm?></li>
												<?}
												}?>
											</ul>
										</div>
									<?}else if($v->class == "0012" && $v->CODE == "0001"){?>
										<div class="nation-column6">
											<p class="big_p"><b>大洋洲</b></p>
											<p><b>南欧</b></p>
											<ul>
												<?foreach($country as $k){
													if($k->class =='0012'){?>
													<li onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"><img src="<?=$k->ref1?>" onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"> <?=$k->code_nm?></li>
												<?}
												}?>
											</ul>
										</div>
										<?}?>
								<?}?>
						</div> <!-- div.nation_list 끝 -->
				</div><!-- div_box 1-1 끝 -->
					
				<div class="div_box1-2">
					<div class="nation2"><img src="/application/views/images/left_menu/icon01_country.PNG" alt="">
						<p class="stitle">City</p>
					</div>
					<div class="selectParent">
						<select class="select_option"> 
							<option value=''>서울</option>
							<option value=''>대전</option>
							<option value=''>대구</option>
							<option value=''>부산 </option>
							<option value=''>인천</option>
							<option value=''>제주도</option>
							<option value=''>광주</option>
							<option value=''>충주</option>
							<option value=''>청주</option>
							<option value=''>일산</option>
							<option value=''>분당</option>
						</select>
					</div>
				</div>

			</div>


			
			<div class="div_box2"> <!-- 현지인 & V인증마크 영역 -->
				<ul class="local"><img src="/application/views/images/left_menu/icon03_guide.PNG" alt=""><p class="stitle">导游特征</p>

					<?$i=0;
					foreach($guideType as $v){?>
					<li>
						<input type="checkbox" name="checkboxG<?=$i?>" id="checkboxG<?=$i?>" class="css-checkbox"/>
						<label for="checkboxG<?=$i?>" class="css-label">
							<div class="round_box"><img src="<?=$v->ref1?>" alt=""><?=$v->code_nm?></div>
						</label>
					</li>
					<?$i++;
					}?>
				</ul>		
				

				<!-- 성별 선택 옮겨온 부분 -->
				<ul class="gender"><img src="/application/views/images/left_menu/icon07_gender.PNG" alt=""><p class="stitle">性别</p>
				<?foreach($sexual as $v){?>
					<li>
						<input type="checkbox" name="checkboxG<?=$i?>" id="checkboxG<?=$i?>" class="css-checkbox"/>
						<label for="checkboxG<?=$i?>" class="css-label">
							<div class="round_box"><img src="<?=$v->ref1?>" alt=""><?=$v->code_nm?></div>
						</label>
					</li>

				<?$i++;
				}?>
				</ul>
				
				<ul class="vmark"><img src="/application/views/images/left_menu/icon04_vmark.PNG" alt=""><p class="stitle">V. 认证</p>
					<?foreach($guide as $v){?>
					<li>
						<input type="checkbox" name="checkboxG<?=$i?>" id="checkboxG<?=$i?>" class="css-checkbox"/>
						<label for="checkboxG<?=$i?>" class="css-label">
							<div class="round_box"><img src="<?=$v->ref1?>" alt=""><?=$v->code_nm?></div>
						</label>
					</li>
					<?$i++;
					}?>
				</ul>
			</div>


			<div class="div_box3"> <!-- Favorite 영역 -->
				<ul class="favorite"><img src="/application/views/images/left_menu/icon05_type.PNG" alt=""><p class="stitle">经验类型</p>
				<?foreach($theme as $v){?>
					<li>
						<input type="checkbox" name="checkboxG<?=$i?>" id="checkboxG<?=$i?>" class="css-checkbox"/>
						<label for="checkboxG<?=$i?>" class="css-label">
							<div class="round_box"><img src="<?=$v->ref1?>" alt=""><?=$v->code_nm?></div>
						</label>
					</li>
				<?$i++;
				}?>
				</ul>

				<ul class="recommanded"><img src="/application/views/images/left_menu/icon06_recomanded.PNG" alt=""><p class="stitle">推荐</p>
				<?foreach($recommend as $v){?>
					<li>
						<input type="checkbox" name="checkboxG<?=$i?>" id="checkboxG<?=$i?>" class="css-checkbox"/>
						<label for="checkboxG<?=$i?>" class="css-label">
							<div class="round_box"><img src="<?=$v->ref1?>" alt=""><?=$v->code_nm?></div>
						</label>
					</li>
				<?$i++;
				}?>
				</ul>
			</div>


			<!--<div class="div_box4">
				<ul class="gender"><img src="/application/views/images/left_menu/icon07_gender.PNG" alt=""><p class="stitle">性别</p>
				<?foreach($sexual as $v){?>
					<li>
						<input type="checkbox" name="checkboxG5" id="checkboxG5" class="css-checkbox"/>
						<label for="checkboxG5" class="css-label">
							<div class="round_box"><img src="<?=$v->ref1?>" alt=""><?=$v->code_nm?></div>
						</label>
					</li>
				<?}?>
				</ul>
			</div> -->

		</aside><!-- 왼쪽 메뉴 끝 -->
		


		<section id="section_wrap"> <!-- 여기서부터 우측 감싸는 영역 -->

			<div class="2button">
				<button id="select1" type="image" class="btn btn-primary">微旅行</button>
				<button id="select2" class="btn btn-primary">点评</button>
			</div><!-- 버튼 2개 넣을 곳 -->

			
			<iframe src="./cityList" frameborder="0" width='100%' height='100%' id="city_iframe">
			<!-- 이 아래부터 iframe -->
			<!-- <div class="title"><div class="underline">微旅行</div></div> 

			<div class="sort">
				<div class="flr">
					<button class="btn btn-info">按人气</button>
					<button class="btn btn-info">按游记</button>
					<button class="btn btn-info">按最新</button>
				</div>
			</div>
			<div class="contents">
				<div class="contents_list1">
					<div class="list_image1">
						<div class="band">
							<div id="band_heart">59&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;23&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;当地人</div>
							<img src="/application/views/images/main/img23_heart.PNG" alt="" class="heart_image">
							<img src="/application/views/images/main/img24_talkbox.PNG" alt="" class="talkbox_image">
							<img src="/application/views/images/main/img27_navi.PNG" alt="" class="navi_image">
						</div>
							<img src="/application/views/images/contents/img01.jpg" alt="" class="img_270x180" onclick="detail_page();">
							<img src="/application/views/images/main/profile01.jpg" alt="" class="img-circle profile_image">
							<img src="/application/views/images/left_menu/flag03_usa.png" alt="" class="flag_image">
							<img src="/application/views/images/main/img22_vmark.PNG" alt="" class="vmark_image">
					</div>
					
					<div class="list_rightwrap">
						<div class="right_title"><span>纽约军事历史主题</span>
							<div class="money"><span>500元</span></div>
						</div>
							<div class="right_text">纽约是什么样的呢？是电影中午夜时分的灯红酒绿，还是黑暗阴影中的危机四伏？每个人心目中都有一副纽约的图像，诚然，纽约是一座集经济、科技、旅游、娱乐、影视、时尚于一身的豪华大城市。这里是旅游之都，高耸的帝国大厦，散发着耀眼的光芒， 就如同霸气一身的王者；被誉为“照耀世界之神”的自由女神像，彰显着美丽的容颜和非凡的气质，令无数的游客折服，每一个到美国的人都不会错过。这里也是购物之都，人潮拥挤的第五大道，是购物狂的天堂，你几乎可以买到世界上任何的名牌。这里还是经济之都，在气氛紧张的纽约证劵交易所里，每天都上演着经济大战......不要只停留在美剧当中的纽约啦，赶快出发吧，玩转纽约，来一场说走就走的旅行吧！ 
						</div>
						<div class="bottom_text">
							<div class="line1">
								<div class="tag"><img src="/application/views/images/left_menu/icon11_adventure.PNG" alt="">冒险</div>
								<div class="tag"><img src="/application/views/images/left_menu/icon12_relaxation.PNG" alt="">休闲</div>
								<div class="tag"><img src="/application/views/images/left_menu/icon13_romantic.PNG" alt="">浪漫</div>
							</div>
							<div class="line2">
								<div class="tag2"><img src="/application/views/images/left_menu/icon21_solo.PNG" alt="">单人</div>
								<div class="tag2"><img src="/application/views/images/left_menu/icon23_family.PNG" alt="">家族</div>
							</div>
						</div> 
					</div> 
				</div> 
			</div>  -->
			</iframe>

		</section> <!-- 우측 감싸는 영역 닫음 -->

	</div> <!-- contents_wrap center 주는거 닫음 -->
</div> <!-- contents_wrap1 닫음  -->

<script>
	function detail_page(){
		location.href = "<?=site_url('auth/Detailcity_search'); ?>";
	}

	function selecCountry(country,city)
	{
		location.href = "<?=site_url('City/country/city_search?co="+country+"&ci="+city+"'); ?>";
	}

	function countryList()
	{
		document.getElementById('nation_list').style.display='block'
		document.getElementById('change_button').innerHTML ="<img src='/application/views/images/left_menu/check_box.png' alt=''  onclick='changeList()'>"
	}

	function changeList()
	{
		document.getElementById('nation_list').style.display='none'
		document.getElementById('change_button').innerHTML ="<img src='/application/views/images/left_menu/check_box.png' alt=''  onclick='countryList()'>"
	}
</script>