			<div id="serviceStatus" class="bd whitegloss">
				<p class="title bluegloss2">서비스 제공 예정일</p>
				<div class="serviceWindow bd white">
				<?foreach($date as $v){?>
					<p id="status1"><?=$v->book_Start_date?> : <span class="txt_blue" id="status1ID"><?=$v->Name_cn_en?></span>에게 가이드 제공하기로 예약됐습니다.</p>
				<?}?>
				</div>
			</div><!-- serviceStatus end -->