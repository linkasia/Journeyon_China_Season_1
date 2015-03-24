		<div class="profileWrap1">

			<div class="title9">
				<div class="underline">我的收藏</div>
			</div>  <!-- 라인 들어가는 타이틀 city부분 복제 -->

			<div id="selectDiv" class="bd">
				<?foreach($bucketList as $v){?>
				<div id="somenailwrapDiv">
					<div class="somenailDiv img-circle" onclick="myBucketList('<?=$v->sortcountry?>','<?=$v->country_code?>')">
						<img src="/application/views/images/contents/01mongolia.jpg" alt="countryImg" id="somenailImg" name="somenailImg">
						<p class="contentsNumber"><?=$v->cnt?></p>
					</div><!-- somenailDiv end  -->
					<div class="somenailText"><?=$v->country_nm?></div>
				</div>
				
				<?}?>
			</div>

			<div id="listWrap">
				<?
					//$data['slaesBuyList'] = $this->country_M->salesCountry($scontry, $contry, null);
					//$this -> load ->view('/mypage/productList', $data);
				?>
			</div>


		</div><!-- profileWrap1 end -->
