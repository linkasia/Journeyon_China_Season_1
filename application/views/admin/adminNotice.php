<div id="noticeboardWrap" class="">

	<div id="titleBox" class="tac">
		<h3 class="pageTitle">Notice Board</h3>
		<h4 class="textGrey tac mb60">궁금하신게 있다면 글을 남겨 주세요</h4>
	</div>

	<!-- 테이블 시작 -->
	<table id="boardTable" class="table success mb20" style="float: left;">
		<thead class="tac">
			<tr class="bgf9fafc tac">
				<th class="th1 tac">번호</th>
				<th class="th2 tac">말머리</th>
				<th class="th3 tac">제목</th>
				<th class="th4 tac">조회 수</th>
				<th class="th5 tac">날짜</th>
			</tr>
		</thead>


		<tbody class="tac">
			<?foreach($noticeList as $v){?>
				<tr>
					<td><?=$v->board_num?></td>
					<td>[<?=$v->board_title?>]</td>
					<td><a href="/index.php/admin/adminMenu/adminNotice_review?num=<?=$v->board_num?>"><?=$v->board_subject?></a></td>
					<td><?=$v->board_hit?></td>
					<td><?=$v->board_reg_date?></td>
				</tr>
			<?}?>
		</tbody>

		<tfoot>
			<tr>
				<th colspan="5"></th>
			</tr>
		</tfoot>

	</table>
	<!-- 테이블 끝 -->
	<a href ="/index.php/admin/adminMenu/adminNotice_write" button class="btn btn-primary mb80" style="float: right; width: 130px;">글 쓰기</a>

</div>