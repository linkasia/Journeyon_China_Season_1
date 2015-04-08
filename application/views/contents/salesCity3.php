			<?foreach($userInfo as $v){?>
			<div class="profileWrap1">
				<div class="title1"><div class="underline">基本信息</div></div>  <!-- 라인 들어가는 타이틀 city부분 복제 -->
				<div class="profile_text1">是否是专业导游<br>Host<br>生活在<br>现居住在纽约<br>年龄<br>性别<br>注册时间<br>语言<br><br><br>职业<br>Job Detail<br>最近登录时间<br></div>
				<div class="profile_text2">
					<?if($v ->g_get_code=="0001"){ ?>是<?}else{?>no<?}?><br>
					<?if($v ->v_get_code=="0001"){ ?>Available<?}else{?>no<?}?><br>
					<?=$v->live_country?><br><?=$v->live_country_year?>年<br>
					<?=$v->age?>岁<br>
					<?=$v->gender?><br>
					<?=$v->create_day?><br>
					<?=$v->lang1?>（<?=$v->langSkill1?>）<br><?=$v->lang2?>（<?=$v->langSkill2?>）<br><?=$v->lang3?>（<?=$v->langSkill3?>）<br>
					<?=$v->job?><br><?=$v->job_detail?><br><?=$v->finaljoin?><br>
				<!-- <div class="sns_icon">
					<img src="/application/views/images/main/sns01.png" alt="">
					<img src="/application/views/images/main/sns02.png" alt="">
					<img src="/application/views/images/main/sns03.png" alt="">
					<img src="/application/views/images/main/sns04.png" alt="">
					<img src="/application/views/images/main/sns05.png" alt="">
					<img src="/application/views/images/main/sns06.png" alt="">
					<img src="/application/views/images/main/sns07.png" alt="">
					<img src="/application/views/images/main/sns08.png" alt="">
				</div>
			</div> -->
			</div><!-- profileWrap1 -->

			<div class="profileWrap2">
				<div class="title2"><div class="underline">Micro Information (100% Reply)</div></div>  <!-- 라인 들어가는 타이틀 city부분 복제 -->
				<div class="profile_text3">
					<p>我的特点</p>
					<p>
						<div class="tag">History</div>
						<div class="tag">Art</div>
						<div class="tag">Venture</div>
					</p><br><br>
					<p class="salescity3_p">个人介绍</p><p><?=$v->selfintroduce?></p>

				</div>
				<div class="profile_text4">
					<p>微旅行经验</p>
					<p>专家 : 0  |  客人 : 0</p>
					<p>什么类型</p>
					<p><?=$v->interesting1?></p>
					<p>兴趣爱好</p>
					<p><?=$v->interesting2?></p>
				</div>
			</div><!-- profileWrap2 -->
		<?}?>
			<div class="profileWrap3">
				<div class="title3">
					<div class="underline">微旅客</div>
				</div>  <!-- 라인 들어가는 타이틀 city부분 복제 -->

				<?foreach($userSales as $v){?>
					<div class="contents_list1" onclick="detailPage('<?=$v->product_num?>')">
						<div class="list_image1">
							<div class="band">
								<div class="wishcount">
									<img src="/application/views/images/main/img23_heart.PNG" alt="" class="heart_image"> <?=$v->cnt?>
								</div>
								<div class="reviewcount">
									<img src="/application/views/images/main/img24_talkbox.PNG" alt="" class="talkbox_image"> <?=$v->reviewCnt?>
								</div>
								<div class="localcount">
									<img src="/application/views/images/main/img27_navi.PNG" alt="" class="navi_image">	当地人
								</div>
							</div>
							<?$i=0;
							foreach($ImageCity as $k){
								if($i==0){?>
								<img src="<?=$k->img_path?>" alt="" class="pic1_img">
							<?}
							$i++;
							}?>
							<img src="<?=$v->face_img_path?>" alt="" class="img-circle profile_image">
							<img src="<?=$v->countryimg?>" alt="" class="flag_image">
							<?if($v->v_get_code == "0001"){?>
								<img src="/application/views/images/main/img22_vmark.PNG" alt="" class="vmark_image">
							<?}?>
						</div><!-- list_image1 닫힘 -->
						<div class="list_rightwrap">
							<div class="right_title"><span><?=$v->title?></span>
								<div class="money"><span><?=$v->fat_price?>元</span></div>
							</div>
							<div class="right_text"><?=$v->describe_contents?></div>
							<div class="bottom_text">
								<div class="line1">
									<?if($v->tem1 != ""){?>
										<div class="tag"><img src="<?=$v->refrem1?>" alt=""><?=$v->tem1?></div>
									<?}?>
									<?if($v->tem2 != ""){?>
										<div class="tag"><img src="<?=$v->refrem2?>" alt=""><?=$v->tem2?></div>
									<?}?>
									<?if($v->tem3 != ""){?>
										<div class="tag"><img src="<?=$v->refrem3?>" alt=""><?=$v->tem3?></div>
									<?}?>
								</div>

								<div class="line2">
									<?if($v->recom1 != ""){?>
										<div class="tag2"><img src="<?=$v->refrecom1?>" alt=""><?=$v->recom1?></div>
									<?}?>
									<?if($v->recom2 != ""){?>
										<div class="tag2"><img src="<?=$v->refrecom2?>" alt=""><?=$v->recom2?></div>
									<?}?>
								</div>
							</div> <!-- bottom_text 닫음 -->
						</div> <!-- list_rightwrap 닫음 -->
					</div><!-- contents_list1 닫음 -->
				<?}?>

				<!--div class="contents_list1">
					<div class="list_image1">
						<div class="band">
							<div class="wishcount">
								<img src="/application/views/images/main/img23_heart.PNG" alt="" class="heart_image">20
							</div>
							<div class="reviewcount">
								<img src="/application/views/images/main/img24_talkbox.PNG" alt="" class="talkbox_image">15
							</div>
							<div class="localcount">
								<img src="/application/views/images/main/img27_navi.PNG" alt="" class="navi_image">	当地人
							</div>
						</div>
						<img src="/application/views/images/contents/img03.jpg" alt="" class="pic1_img">
						<img src="/application/views/images/main/profile05.jpg" alt="" class="img-circle profile_image">
						<img src="/application/views/images/left_menu/flag12_nl.png" alt="" class="flag_image">
						<img src="/application/views/images/main/img22_vmark.PNG" alt="" class="vmark_image">
					</div><!-- list_image1 닫음 -->
					<!--div class="list_rightwrap">
						<div class="right_title"><span>纽约军事历史主题</span>
							<div class="money"><span>1500元</span></div>
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
						</div> <!-- bottom_text 닫음 -->
					<!--/div> <!-- list_rightwrap 닫음 -->
				<!--/div><!-- contents_list1 닫음 -->
			<!--/div--><!-- profileWrap3 -->

			<div class="profileWrap4">
				<div class="title4">
					<div class="underline">点评</div>
				</div>  <!-- 라인 들어가는 타이틀 city부분 복제 -->
				<div class="blueborder2"><span class="glyphicon glyphicon-info-sign bf"></span>  아직 내용이 없습니다</div>
				<div class="somenail_wrap">
					<ul class="somenail_list">
					</ul>
				</div> <!-- somenail_wrap 닫음 -->
			</div><!-- profileWrap4 -->

			<div class="profileWrap5">
				<div class="title5"><div class="underline">Host References </div></div>
				<!-- 라인 들어가는 타이틀 city부분 복제 -->
			</div><!-- profileWrap5 -->