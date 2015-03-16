<div id="noticeboardWrap" class="">

	<div id="titleBox" class="tac">
		<h3 class="pageTitle">Notice Board</h3>
		<h4 class="textGrey tac mb60">궁금하신게 있다면 글을 남겨 주세요</h4>
	</div>

	<div id="writeForm">
		<form class="form-horizontal" method="post" action="" id="write_action">
			<fieldset>
				<div class="controls1 mb20">
					<div id="leftDiv">
						<select class="form-control" id="inputHeader" name="inputHeader">
							<option value="">[가이드]</option>
							<option value="">[가이드]</option>
							<option value="">[가이드]</option>
						</select>
					</div>
					<div id="rightDiv">
						<input type="text" class="form-control input-xlarge" id="input01" name="subject" placeholder="게시물 제목을 써주세요.">
					</div>
				</div>

				<div class="controls">
					<textarea class="input-xlarge form-control" id="input02" name="contents" rows="15" placeholder="내용을 입력해 주세요"></textarea>
				</div>

				<div id="btnDiv">
					<button type="submit" class="btn btn-info" id="write_btn1" name="write_btn1">저장</button>
					<button class="btn btn-danger" id="write_btn2" name="write_btn2">취소</button>
				</div>
			</fieldset>
		</form>
	</div>
</div>