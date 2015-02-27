			<div id="serviceStatus" class="bd bgf9fafc">
				<p class="title bluegloss">我的订单记录</p> <!-- 서비스 제공 예정일 -->
				<div class="serviceWindow bd white">
				<?foreach($date as $v){?>
					<p id="status1"><?=$v->book_Start_date?> : 将成为<span class="txt_blue" id="status1ID"><?=$v->Name_cn_en?></span> 的微导游</p> <!-- ㅇㅇ님에게 가이드 제공하기로 예약됐습니다 번역 -->
				<?}?>
				</div>
			</div><!-- serviceStatus end -->