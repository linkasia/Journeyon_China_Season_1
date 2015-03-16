<div id="noticeboardWrap" class="">

	<div id="titleBox" class="tac">
		<h3 class="pageTitle">Notice Board</h3>
		<h4 class="textGrey tac mb60">궁금하신게 있다면 글을 남겨 주세요</h4>
	</div>

	<div id="writeForm">
	<?foreach($noticeDetail as $v){?>
		<table id="boardTable" cellspaCodeigniter="0" cellpadding="0" class="table success">
	<!--  cellspaCodeigniter="0" cellpadding="0" -->
		<thead id="thead">
			<tr class="bgf9fafc">
				<th class="th1">번호 : <?=$v->board_num?></th>
				<th class="th2">[<?=$v->board_title?>]</th>
				<th class="th3"><?=$v->board_subject?></th>
				<th class="th4">조회수 : <?=$v->board_hit?></th>
				<th class="th5">날짜 : <?=$v->board_reg_date?></th>
			</tr>
		</thead>
		</table>
			<div id="tableinDiv">
				<?=$v->board_contents?>23194872908239482390875203984750923875902837450923847509238745092384750923874509w384750923 8745293087529308475239084592830
There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
			</div>

					<div class="btnGroup" id="btnDiv2">
						<button class="btn btn-info" id="write_btn3" name="write_btn3">목록</button>
						<?
						if(@$this->session->userdata['logged_in'] == TRUE)
						{
							if($this->session->userdata['email'] == "admin@linkasia.co.kr"){?>
						<button class="btn btn-warning" id="write_btn4" name="write_btn4" onclick="updateNotice(<?=$v->board_num?>)">수정</button>
						<button class="btn btn-danger" id="write_btn5" name="write_btn5" onclick="deleteNotice(<?=$v->board_num?>)">삭제</button>
						<?}
						}?>
					</div>

	<?}?>
	</div>
</div>

<script type="text/javascript">
	//삭제
	function deleteNotice(key){
		$.ajax({
			type:"POST" ,
			dataType:"text",
			contentType:"application/x-www-form-urlencoded; charset=UTF-8",
			data:{ num:key },
			url:"/index.php/admin/adminMenu/adminDeleteNotice",
			success: function (data){
				document.getElementById('noticeboardWrap').innerHTML =data;
			}
		});
	}
	//수정
	function updateNotice(key){
		location.href = "/index.php/admin/adminMenu/adminNoticeUpdateReview?num="+key;
	}

	$(function(){
		//목록
		$('#write_btn3').click( function(){
			location.href = "/index.php/admin/adminMenu/adminNotice";
		});
	});
</script>


