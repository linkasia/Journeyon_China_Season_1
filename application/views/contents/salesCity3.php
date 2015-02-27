			<?foreach($userInfo as $v){?>
			<div class="profileWrap1">
				<div class="title1"><div class="underline">基本信息</div></div>  <!-- 라인 들어가는 타이틀 city부분 복제 -->
				<div class="profile_text1">是否是专业导游<br>Host<br>生活在<br>现居住在纽约<br>年龄<br>性别<br>注册时间<br>语言<br><br>职业<br>最近登录时间<br></div>
				<div class="profile_text2"><?if($v ->g_get_code=="0001"){ ?>是<?}else{?>no<?}?><br><?if($v ->v_get_code=="0001"){ ?>Available<?}else{?>no<?}?><br><?=$v->live_country?><br><?=$v->live_country_year?>年<br><?=$v->age?>岁<br><?=$v->gender?><br><?=$v->create_day?><br><?=$v->lang1?>（<?=$v->langSkill1?>）<?=$v->lang2?>（<?=$v->langSkill2?>）<?=$v->lang3?>（<?=$v->langSkill3?>）<br>学生、专业<br>10分钟前（微博为准）<br>
				<div class="sns_icon">
					<img src="/application/views/images/main/sns01.png" alt="">
					<img src="/application/views/images/main/sns02.png" alt="">
					<img src="/application/views/images/main/sns03.png" alt="">
					<img src="/application/views/images/main/sns04.png" alt="">
					<img src="/application/views/images/main/sns05.png" alt="">
					<img src="/application/views/images/main/sns06.png" alt="">
					<img src="/application/views/images/main/sns07.png" alt="">
					<img src="/application/views/images/main/sns08.png" alt="">
				</div>
			</div>
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
									<img src="/application/views/images/main/img23_heart.PNG" alt="" class="heart_image"><?=$v->cnt?>
								</div>
								<div class="reviewcount">
									<img src="/application/views/images/main/img24_talkbox.PNG" alt="" class="talkbox_image">11
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
									<div class="tag"><img src="<?=$v->refrem1?>" alt=""><?=$v->tem1?></div>
									<div class="tag"><img src="<?=$v->refrem2?>" alt=""><?=$v->tem2?></div>
									<div class="tag"><img src="<?=$v->refrem3?>" alt=""><?=$v->tem3?></div>
								</div>
								<div class="line2">
									<div class="tag2"><img src="<?=$v->refrecom1?>" alt=""><?=$v->recom1?></div>
									<div class="tag2"><img src="<?=$v->refrecom2?>" alt=""><?=$v->recom2?></div>
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
				<div class="somenail_wrap">
					<ul class="somenail_list">
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
										<img src="/application/views/images/main/img24_talkbox.png" alt="icon_t" class="icon_t">&nbsp;<span class="posa_reply">游记 0个</span>
									</div>

									<div class="flagbox"><img src="<?=$v->ref1?>" alt=""></div>
									<div class="vbox"><img src="/application/views/images/main/img22_vmark.png" alt=""></div>
									<div class="navibox"><img src="/application/views/images/main/img26_navi.png" alt=""></div>

							</div>
						</section>
					</li>




						<li class="somenail2_3">
							<section class="somenail_bootstrap2">
								<div class="portfolio-item2">
									<div class="portfolio-link2">
										<div class="portfolio-hover2">
											<div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
										</div>
										<img src="/application/views/images/main/img13_some03.png" alt="">
									</div>
									<div class="somenail_transbox2" style="background-color:rgba(63,127,206,.6)">
										<p class="somenail_title">搜寻那些首尔的人气美甲店</p>
									</div>
								</div>
								<div class="somenail_transcity2">
									<p>纽约</p>
								</div>
								<div class="somenail_caption">
									<div class="circle-div2">
										<img src="/application/views/images/main/profile04.jpg" alt="profile pic" class="img-circle2 somenail_profile");'>
									</div>
									<div class="back-line1">
										<img src="/application/views/images/main/img25_coin.png" alt="icon_coin" class="icon_coin"><span>600 元</span>
									</div>
									<div class="back-line2">
										<p>赵涧楠&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;当地人</p>
									</div>
									<div class="back-line3">
										<img src="/application/views/images/main/img23_heart.png" alt="icon_heart" class="icon_heart">&nbsp;<span>游记 20个</span>&nbsp;&nbsp;
										<img src="/application/views/images/main/img23_heart.png" alt="icon_" class="icon_t">&nbsp;<span>15个</span>
									</div>
									<div class="flagbox"><img src="/application/views/images/flag/39austria.png" alt=""></div>
									<div class="vbox"><img src="/application/views/images/main/img22_vmark.png" alt=""></div>
									<div class="navibox"><img src="/application/views/images/main/img26_navi.png" alt=""></div>
								</div>
							</section>
						</li>
						<li class="somenail2_4">
							<section class="somenail_bootstrap2">
								<div class="portfolio-item2">
									<div class="portfolio-link2">
										<div class="portfolio-hover2">
											<div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
										</div>
										<img src="/application/views/images/main/img17_some07.png" alt="">
									</div>
									<div class="somenail_transbox2" style="background-color:rgba(243,164,107,.6)">
										<p class="somenail_title">热辣旅游主题NBA, 纽约麦迪逊现场为...</p>
									</div>
								</div>
								<div class="somenail_transcity2">
									<p>纽约</p>
								</div>
								<div class="somenail_caption">
									<div class="circle-div2">
										<img src="/application/views/images/main/profile05.jpg" alt="profile pic" class="img-circle2 somenail_profile");'>
									</div>
									<div class="back-line1">
										<img src="/application/views/images/main/img25_coin.png" alt="icon_coin" class="icon_coin"><span>600 元</span>
									</div>
									<div class="back-line2">
										<p>赵涧楠&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;当地人</p>
									</div>
									<div class="back-line3">
										<img src="/application/views/images/main/img23_heart.png" alt="icon_heart" class="icon_heart">&nbsp;<span>游记 20个</span>&nbsp;&nbsp;
										<img src="/application/views/images/main/img23_heart.png" alt="icon_" class="icon_t">&nbsp;<span>15个</span>
									</div>
									<div class="flagbox"><img src="/application/views/images/flag/40columbia.png" alt=""></div>
									<div class="vbox"><img src="/application/views/images/main/img22_vmark.png" alt=""></div>
									<div class="navibox"><img src="/application/views/images/main/img26_navi.png" alt=""></div>
								</div>
							</section>
						</li>
					</ul>
				</div> <!-- somenail_wrap 닫음 -->
			</div><!-- profileWrap4 -->

			<div class="profileWrap5">
				<div class="title5"><div class="underline">Host References (10)</div></div>  <!-- 라인 들어가는 타이틀 city부분 복제 -->

				<div class="reply"><!-- 질문 부분 -->
					<div class="profile_pic">
						<img src="/application/views/images/main/profile01.jpg" alt="" class="img-circle profile_image">
						<img src="/application/views/images/left_menu/flag03_usa.png" alt="" class="flag_image">
						<img src="/application/views/images/main/img22_vmark.PNG" alt="" class="vmark_image">
					</div>
					<div class="reply_textQnA"><span class="reply_id">一杯情 : </span>世界的瑰宝呀，逛了一天都没看完，太漂亮了，拍了美美的照片，下次还想来呢回复有用 0
					<br><span class="time_log">12月20日 18:00</span>
					</div>
				</div>

				<div class="reply"><!-- 질문 부분 -->
					<div class="profile_pic">
						<img src="/application/views/images/main/profile02.jpg" alt="" class="img-circle profile_image">
						<img src="/application/views/images/flag/44singapore.PNG" alt="" class="flag_image">
						<img src="/application/views/images/main/img22_vmark.PNG" alt="" class="vmark_image">
					</div>
					<div class="reply_textQnA"><span class="reply_id">一杯情 : </span>世界的瑰宝呀，逛了一天都没看完，太漂亮了，拍了美美的照片，下次还想来呢回复有用 0
					<br><span class="time_log">12月21日 19:20</span>
					</div>
				</div>

			</div><!-- profileWrap5 -->