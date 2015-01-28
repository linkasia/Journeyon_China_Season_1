		<div class="profileWrap1">
			<div class="title1">
				<div class="underline">구매 완료 현황</div>
			</div>  <!-- 라인 들어가는 타이틀 city부분 복제 -->

			<div id="selectDiv">
			<?foreach($buyList as $v){?>
				<div id="somenailwrapDiv">
					<div class="somenailDiv">
						<img src="<?=$v->ref1?>" alt="countryImg" id="somenailImg" name="somenailImg">
						<p class="contentsNumber"><?=$v->cnt?></p>
					</div><!-- somenailDiv end  -->
					<div class="somenailText"><?=$v->country_nm?></div>
				</div>
			<?}?>
			</div>

			<div id="listWrap">

				<?php $this -> load ->view('/mypage/productList'); ?>

			</div>
		</div><!-- profileWrap1 end -->
