<?foreach($bookDetail as $v){
		if($v->order_type_code == "0005" && $v->cancel_text !=""){?>
			<textarea class="form-control" name="cancelComment" id="cancelComment" cols="30" rows="10" placeholder="请说明取消订单的原因" readonly><?=$v->cancel_text?></textarea>
			<div class="modal-footer">
			<button type="button" class="btn btn-danger" data-dismiss="modal">Close Window</button>
		</div><!-- modal-footer 닫힘 -->
	<?}else{?>
		<div class="modal-body" id="cancelTextareaModalBody">
			<p id="cancel_p">
			※ 如欲取消订单，请于旅行出发最少3天前完成取消程序。<br>
			如少于3天前取消，阁下账户将被停用一段期间。<br>
			请必须说明取消订单的理由,并需发送信息于客户解释取消原因。<br>
			否则阁下账户亦将被有限期停用。<br>
			</p>
			<!-- 주의사항
			최소 3일 전 취소를 해주세요<br>
			3일 후 취소할 경우 계정이 정지가 됩니다.<br>
			취소할 경우 취소 사유를 꼭 적어주셔야 합니다.<br>
			취소샤유가 불분명할 경우 계정 정지 패널티가 부여됩니다.<br>
			취소 하기 전 고객과 채팅을 통해서 취소 사유에 대해서 설명 하셔야합니다.<br>
			그렇지 않고 취소하게 되면 패널티를 받습니다. -->


			<textarea class="form-control" name="cancelComment" id="cancelComment" cols="30" rows="10" placeholder="请说明取消订单的原因"></textarea>

		</div><!-- modal-body 닫힘 -->
		<div class="modal-footer">
			<button class="btn btn-danger" id="cancelBook" name="cancelBook" onclick="cancelBook()">Cancel</button>
			<!-- <button type="button" class="btn btn-danger">确定</button> -->
			<button type="button" class="btn btn-danger" data-dismiss="modal">Close Window</button>
		</div><!-- modal-footer 닫힘 -->
<?}
}?>