<div id="noticeboardWrap" class="">

	<div id="titleBox" class="tac">
		<h3 class="pageTitle">Notice Board</h3>
		<h4 class="textGrey tac mb60">궁금하신게 있다면 글을 남겨 주세요</h4>
	</div>

	<div id="writeForm">
		<form class="form-horizontal" method="post" action="" id="write_action">
			<fieldset>
				<div class="controls1 mb20">
					<label class="control-label" for="input01">제목</label>
					<input type="text" class="form-control input-xlarge" id="input01" name="subject" placeholder="게시물 제목을 써주세요.">
				</div>

				<div class="controls">
					<label class="control-label" for="input02">내용</label>
					<textarea class="input-xlarge form-control" id="input02" name="contents" rows="15" placeholder="Textarea"></textarea>
				</div>

				<div class="form-actions2">
					<button type="submit" class="btn btn-info" id="write_btn">작성</button>
					<button class="btn btn-danger" onclick="document.location.reload()">취소</button>
				</div>
			</fieldset>
		</form>
	</div>
</div>