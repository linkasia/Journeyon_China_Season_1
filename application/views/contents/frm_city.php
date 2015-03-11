			<?$scontry = $_REQUEST['scountry'];
				$contry = $_REQUEST['countryList'];

			?>

			<div class="title"><div class="underline">微旅行</div></div> <!-- 라인 들어가는 타이틀 -->

			<div class="sort">
				<div class="flr">
					<button class="btn btn-default">按人气</button>
					<button class="btn btn-default">按游记</button>
					<button class="btn btn-default">按最新</button>
				</div>
			</div>

			<div class="contents">
			<?
			if(count($salesCountry) > 0){
				foreach($salesCountry as $v){?>
				<div class="contents_list1"  onclick="detail_page('<?=$v->product_num?>')">
					<div class="list_image1">
						<div class="band">
								<div class="wishcount">
									<img src="/application/views/images/main/img23_heart.PNG" alt="" class="heart_image">
									<?=$v->cnt?>
								</div>
								<div class="reviewcount">
									<img src="/application/views/images/main/img24_talkbox.PNG" alt="" class="talkbox_image">
									<?=$v->reviewCnt?>
								</div>
								<div class="localcount">
									<img src="/application/views/images/main/img27_navi.PNG" alt="" class="navi_image">
									当地人
								</div>
						</div>

							<img src="<?=$v->img_path?>" alt="" class="pic1_img">
							<img src="<?=$v->face_img_path?>" alt="" class="img-circle profile_image">
							<img src="<?=$v->countryimg?>" alt="" class="flag_image">
							<?if($v->v_get_code == "0001"){?>
							<img src="/application/views/images/main/img22_vmark.PNG" alt="" class="vmark_image">
							<?}?>
					</div>

					<div class="list_rightwrap">
						<div class="right_title"><span><?=$v->title?></span>
							<div class="money"><span><?=$v->fat_price?>元</span></div>
						</div>
							<div class="right_text"><?=$v->describe_contents?>
						</div>
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
				</div> <!-- contents_list1 닫음  -->
				<?}
				}else{?>
					<p><b>최초의 가이드가 되어주세요.!</b></p>
				<?}?>
			</div> <!-- contents 닫음 -->
