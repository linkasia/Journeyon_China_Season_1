				<!-- 여기서부터 탭 영역 시작 Page -->
				<div id="tabplace">
				<!--div class="btn-group sortGroup" role="group" aria-label="" id="sortGroup">
					<button type="button" class="btn btn-info" id="sort1" name="sort1">등록순</button>
					<button type="button" class="btn btn-info" id="sort2" name="sort2">후기순</button>
					<button type="button" class="btn btn-info" id="sort3" name="sort3">판매순</button>
					<button type="button" class="btn btn-info" id="sort4" name="sort4">좋아요순</button>
				</div-->
				<?foreach($salesProduct as $v){?>
				<!-- 여기서부터 섬네일 시작 -->
				<div class="contents_list1">
				<div class="statusDiv bluegloss2"><p id="statusP"><?=$v->state?></p></div>
					<div class="list_image1">
						<div class="statusBand transblack">
							<p id="status" name="status">发放日期 <?=$v->regdate?><br>
							<span class="sub_title"><span id="pNumber"><?=$v->cnt?></span>已有 1 人出发</span>
							</p>
						</div>
						<div class="band">
							<div class="wishcount">
								<img src="/application/views/images/main/img23_heart.PNG" alt="" class="heart_image">
								<span id="heart" name="heart"> 15</span>
							</div>
							<div class="reviewcount">
								<img src="/application/views/images/main/img24_talkbox.PNG" alt="" class="talkbox_image">
								<span id="talkbox" name="talkbox"> 11</span>
							</div>
							<div class="localcount">
								<img src="/application/views/images/main/img27_navi.PNG" alt="" class="navi_image">
								<span id="talkbox" name="talkbox"> 当地人</span>
							</div>
						</div>
						<img src="/application/views/images/contents/img01.jpg" alt="" class="pic1_img" style="width: 100%; height: 100%;">
						<img src="/application/views/images/main/profile01.jpg" alt="" class="img-circle profile_image">
						<img src="/application/views/images/flag/01korea.png" alt="" class="flag_image">
						<img src="/application/views/images/main/img22_vmark.PNG" alt="" class="vmark_image">
					</div><!-- list_image1 닫힘 -->
					<div class="list_rightwrap whitegloss">
						<div class="right_title"><span><?=$v->title?></span>
						</div>
						<div class="money bluegloss"><span><?=$v->fat_price?>元</span></div>
						<div class="right_text"><?=$v->describe_contents?>
						</div>
						<div class="bottom_text">
							<div class="line1">
								<div class="tag"><img src="<?=$v->refrem1?>" alt=""><?=$v->tem1?></div>
								<div class="tag"><img src="<?=$v->refrem2?>" alt=""><?=$v->tem2?></div>
								<div class="tag"><img src="<?=$v->refrem3?>" alt=""><?=$v->tem3?></div>
							</div>
							<div class="line2">
								<div class="tag2"><img src="<?=$v->refrecom1?>" alt=""><?=$v->recom1?></div>
								<div class="tag2"><img src="<?=$v->refrecom2?>" alt=""><?=$v->tem2?></div>
							</div>
						</div> <!-- bottom_text 닫음 -->
					</div> <!-- list_rightwrap 닫음 -->
				</div><!-- contents_list1 닫음 -->
				<div class="btn-group listFooter" role="group" aria-label="" id="b-group">
					<!--button type="button" class="btn whitegloss bd" id="productModify" name="productModify" onclick="productModify('<?=$v->product_num?>')">编辑</button-->
					<button type="button" class="btn whitegloss bd" id="productStop" name="productStop" onclick="productStop('<?=$v->product_num?>')">停止发放</button>
					<button type="button" class="btn whitegloss bd" id="productDelete" name="productDelete" onclick="productDelete('<?=$v->product_num?>')">删除</button>
				</div>
				<!-- 섬네일 끝 -->
				<?}?>
			</div><!-- 탭영역 끝 -->