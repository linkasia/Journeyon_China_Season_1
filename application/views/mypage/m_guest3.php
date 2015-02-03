		<div class="profileWrap1">
			<div class="title10">
				<div class="underline">已预约行程状态</div>
			</div>  <!-- 라인 들어가는 타이틀 city부분 복제 -->

			<div id="selectDiv">
			<?foreach($buyList as $v){?>
				<div id="somenailwrapDiv">
					<div class="somenailDiv">
						<img src="<?=$v->ref1?>" alt="countryImg" id="somenailImg" name="somenailImg" onclick="changeProduct('<?=$v->sortcountry?>','<?=$v->country_code?>')">
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