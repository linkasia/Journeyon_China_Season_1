<div id="noticeboardWrap" class="">

	<div id="titleBox" class="tac">
		<h3 class="pageTitle">Notice Board</h3>
		<h4 class="textGrey tac mb60">궁금하신게 있다면 글을 남겨 주세요</h4>
	</div>

	<div id="writeForm">
			<fieldset>
				<div class="controls1 mb20">
					<div id="leftDiv2">
						<select class="form-control" id="inputHeader" name="inputHeader">
						<?foreach($headList as $v){?>
							<option value="<?=$v->code?>" >[<?=$v->code_nm?>] </option>
						<?}?>
						</select>
					</div>
					<div id="rightDiv2">
						<input type="text" class="form-control input-xlarge" id="subject" name="subject" placeholder="게시물 제목을 써주세요.">
					</div>
				</div>

				<div class="controls">
					<textarea class="input-xlarge form-control" id="contents" name="contents" rows="15" placeholder="내용을 입력해 주세요"></textarea>
				</div>

				<div id="btnDiv">
					<button class="btn btn-info" id="write_btn1" name="write_btn1">저장</button>
					<button class="btn btn-danger" id="write_btn2" name="write_btn2">취소</button>
				</div>
			</fieldset>
	</div>
</div>
<div id='test'>
</div>
<script type="text/javascript">
	$(function(){
		$('#write_btn1').click( function(){
			var _head = $('#inputHeader').val();
			var _subject = $('#subject').val();
			var _contents = $('#contents').val();

			$.ajax({
				type:"POST" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ head:_head, subject:_subject, contents:_contents },
				url:"/index.php/admin/adminMenu/adminInsertNotice",
				success: function (data){
					document.getElementById('noticeboardWrap').innerHTML =data;
				}
			});
		});

		$('#write_btn2').click( function(){
			location.href = "/index.php/admin/adminMenu/adminNotice";
		});
	});
</script>
