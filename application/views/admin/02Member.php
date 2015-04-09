<h1 class="mb40">Member</h1>
<div id="statusBox">
	<ul class="nav nav-pills" role="tablist">
		<li role="presentation" class="active mr10"><a href="#">총 회원수<span class="badge">100,000</span></a></li>
		<li role="presentation" class="active mr10"><a href="#">활동자<span class="badge">100,000</span></a></li>
		<li role="presentation" class="active mr10"><a href="#">탈퇴자<span class="badge">50</span></a></li>
		<li role="presentation" class="active"><a href="#">강퇴자<span class="badge">32</span></a></li>
	</ul>

	<ul class="nav nav-pills" role="tablist">
		<li role="presentation" class="active mr10"><a href="#">전체 신청자<span class="badge">90</span></a></li>
		<li role="presentation" class="active mr10"><a href="#">V인증신청자<span class="badge">30</span></a></li>
		<li role="presentation" class="active mr10"><a href="#">가이드 신청자<span class="badge">30</span></a></li>
		<li role="presentation" class="active"><a href="#">프로가이드 신청자<span class="badge">30</span></a></li>
	</ul>
</div>


	<div class="col-lg-6">
		<div class="input-group">
			<span class="input-group-btn">
			<button class="btn btn-default" type="button">Search</button>
			</span>
			<input type="text" class="form-control" placeholder="Search for...">
		</div><!-- /input-group -->
	</div><!-- /.col-lg-6 -->

	<button class="btn btn-info mb20">상세 검색</button>

	<!-- 테이블 시작 -->
	<table id="memberTable" class="table">
		<thead>
			<tr>
				<th>No</th>
				<th>V</th>
				<th>G</th>
				<th>PG</th>
				<th>ID</th>
				<th>Product</th>
				<th>M_country</th>
				<th>L_country</th>
				<th>Active</th>
			</tr>
		</thead>

		<tbody>
			<!-- Tr 반복 시작 -->
			<?foreach($member as $v){?>
				<tr>
					<td><?=$v->user_num?></td>
					<?if($v->v_get_code == "0001"){?>
						<td><?=$v->V_get?></td>
					<?}else{?>
						<td onclick="Vget('<?=$v->user_num?>')">
							<a href="" data-toggle="modal" data-target="#memberModal1" data-whatever="@mdo"><?=$v->V_get?></a>
							<!-- 맨 아래 memberModal과 연결되서 팝업창 띄움 -->
						</td>
					<?}?>
					<?if($v->g_get_code == "0002"){?>
						<td><?=$v->G_get?></td>
					<?}else{?>
						<td onclick="Pget('<?=$v->user_num?>')">
						<a href="" data-toggle="modal" data-target="#memberModal2" data-whatever="@fat"><?=$v->G_get?></a>
					</td>
					<?}?>
					<?if($v->pg_get_code == "0003"){?>
						<td><?=$v->PG_get?></td>
					<?}else{?>
						<td onclick="PGget('<?=$v->user_num?>')">
							<a href="" data-toggle="modal" data-target="#memberModal3" data-whatever="@getbootstrap"><?=$v->PG_get?></a>
						</td>
					<?}?>
					<td><?=$v->email?></td>
					<td><?=$v->product_cnt?></td>
					<td><?=$v->M_country?></td>
					<td><?=$v->L_country?></td>
					<td>활동중</td>
				</tr>
				<!-- Tr 반복 끝 -->
			<?}?>
		</tbody>
	</table>
	<!-- 테이블 끝 -->


	<!-- 페이지 넘버링 시작 -->
	<!-- <nav id="pageNumber">
	  <ul class="pagination">
		<li>
		  <a href="#" aria-label="Previous">
			<span aria-hidden="true">&laquo;</span>
		  </a>
		</li>
		<li><a href="#">1</a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li><a href="#">5</a></li>
		<li>
		  <a href="#" aria-label="Next">
			<span aria-hidden="true">&raquo;</span>
		  </a>
		</li>
	  </ul>
	</nav> -->
	<!-- 페이지 넘버링 끝 -->

</div>




<!-- modal1 시작 -->
<div class="modal fade" id="memberModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="exampleModalLabel">V 인증</h4>
			</div>
			<div class="modal-body" id='modalVget' name='modalVget'>
				<!-- php로 뺄 부분 시작 -->

				<!-- php로 뺄 부분 끝 -->
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- modal 끝 -->

<!-- modal2 시작 -->
<div class="modal fade" id="memberModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="exampleModalLabel">G 인증</h4>
			</div>
			<div class="modal-body" id="modalPget" name="modalPget">

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- modal 끝 -->

<!-- modal3시작 -->
<div class="modal fade" id="memberModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="exampleModalLabel">PG 인증</h4>
			</div>
			<div class="modal-body"  id="modalPGget" name="modalPGget">
				<!-- php로 뺄 부분 시작 -->

				<!-- php로 뺄 부분 끝 -->
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- modal 끝 -->
