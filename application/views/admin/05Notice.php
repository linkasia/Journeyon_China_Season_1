<h1 class="mb40">Notice</h1>

<div id="sortBox" class="mb20">
	<h6>City</h6>
	<select class="form-control2 languageSelect" id="adminbookCity"  name="adminbookCity">
		<option value="">Seoul</option>
		<option value="">Shanghai</option>
		<option value="">Beijing</option>
	</select>
	
	<div id="startendBox">
	<h6>Start</h6>
	<label for="START"></label>
	<input type="date" class="form-control2 text" id="START" name="START" value="" data-date='{"openOnFocus": true}' style="width: 170px; float: left;">

	<h6>End</h6>
	<label for="END"></label>
	<input type="date" class="form-control2 text" id="END" name="END" value="" data-date='{"openOnFocus": true}' style="width: 170px; float: left;">
	</div>


</div>




<div id="statusBox" class="mb40">
	<ul class="nav nav-pills" role="tablist">
		<li role="presentation" class="active mr10"><a href="#">컴플레인 전체<span class="badge">32</span></a></li>
		<li role="presentation" class="active mr10"><a href="#">컴플레인 접수<span class="badge">0</span></a></li>
		<li role="presentation" class="active mr10"><a href="#">컴플레인 해결<span class="badge">0</span></a></li>
	</ul>

	<ul class="nav nav-pills" role="tablist">
		<li role="presentation" class="active mr10"><a href="#">전체 취소<span class="badge">32</span></a></li>
		<li role="presentation" class="active mr10"><a href="#">구매자 취소<span class="badge">32</span></a></li>
		<li role="presentation" class="active mr10"><a href="#">판매자 취소<span class="badge">32</span></a></li>
	</ul>
</div>


<div id="searchBox">
	<div class="col-lg-6">
		<div class="input-group">
			<span class="input-group-btn">
			<button class="btn btn-default" type="button">Search</button>
			</span>
			<input type="text" class="form-control" placeholder="Search for...">
		</div><!-- /input-group -->
	</div><!-- /.col-lg-6 -->
	<button class="btn btn-info mb20">상세 검색</button>
</div>	

	<!-- 테이블 시작 -->
	<table id="memberTable" class="table">
		<thead>
			<tr>
				<th>No</th>
				<th>Country</th>
				<th>City</th>
				<th>Product Name</th>
				<th>Saler</th>
				<th>Buyer</th>
				<th>Status</th>
			</tr>
		</thead>

		<tbody>
			<!-- Tr 반복 시작 -->
			<tr>
				<td>1</td>
				<td>China</td>
				<td>shanghai</td>
				<td>와우 놀라워라 상해~!</td>
				<td>james@linkasia.co.kr</td>
				<td>james@linkasia.co.kr</td>
				<td><a href="" data-toggle="modal" data-target="#noticemodal1" data-whatever="@mdo">컨플레인</a>	</td>	
			</tr>
			<!-- Tr 반복 끝 -->

			<tr>
				<td>2</td>
				<td>China</td>
				<td>shanghai</td>
				<td>와우 놀라워라 상해~!</td>
				<td>james@linkasia.co.kr</td>
				<td>james@linkasia.co.kr</td>
				<td><a href="" data-toggle="modal" data-target="#noticemodal2" data-whatever="@mdo">구매자취소</a>	</td>	
			</tr>

			<tr>
				<td>3</td>
				<td>China</td>
				<td>shanghai</td>
				<td>와우 놀라워라 상해~!</td>
				<td>james@linkasia.co.kr</td>
				<td>james@linkasia.co.kr</td>
				<td>판매자 취소</td>
			</tr>

			<tr>
				<td>4</td>
				<td>China</td>
				<td>shanghai</td>
				<td>와우 놀라워라 상해~!</td>
				<td>james@linkasia.co.kr</td>
				<td>james@linkasia.co.kr</td>
				<td>컨플레인 접수</td>
			</tr>

			<tr>
				<td>5</td>
				<td>China</td>
				<td>shanghai</td>
				<td>와우 놀라워라 상해~!</td>
				<td>james@linkasia.co.kr</td>
				<td>james@linkasia.co.kr</td>
				<td>컨플레인 해결</td>
			</tr>

		</tbody>
	</table>
	<!-- 테이블 끝 -->

	<!-- 페이지 넘버링 시작 -->
	<nav id="pageNumber">
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
	</nav>
	<!-- 페이지 넘버링 끝 -->

</div>


<!-- modal 시작 -->
<div class="modal fade" id="noticemodal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="exampleModalLabel">Status History</h4>
			</div>
			<div id="membermodalBody" class="modal-body">
				<!-- php로 뺄 부분 시작 -->
				<h5>Title : 와우 놀라워라 상해~!!!</h5>
				<h5>Seller : james@linkasialco.kr</h5>
				<h5>Buyer : james@linkasia.co.kr</h5>
				<div id="modalTable">
					<table id="memberTable" class="table">
						<thead>
							<tr>
								<th>Status</th>
								<th>Date</th>
							</tr>
						</thead>

						<tbody>
							<!-- Tr 반복 시작 -->
							<tr>
								<td>상담시작</td>
								<td>2015-02-10</td>
							</tr>
							<!-- Tr 반복 끝 -->
							
							<tr>
								<td>구매확정</td>
								<td>2015-02-11</td>
							</tr>
							<tr>
								<td>가격확정</td>
								<td>2015-02-12</td>
							</tr>
							<tr>
								<td>결제완료</td>
								<td>2015-02-13</td>
							</tr>
							<tr>
								<td>서비스완료</td>
								<td>2015-02-15</td>
							</tr>
							<tr>
								<td>구매자 취소</td>
								<td>2015-03-06</td>
							</tr>
						</tbody>
					</table>
							<button class="btn btn-info mr10">상대방 동의 완료</button>
							<button class="btn btn-danger mr10">강제 취소</button>
							<button class="btn btn-danger">ID 정지</button>

				</div>
				<!-- php로 뺄 부분 끝 -->
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Send message</button>
			</div>
		</div>
	</div>
</div>
<!-- modal 끝 -->

<!-- 2번째 modal 시작 -->
<div class="modal fade" id="noticemodal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="exampleModalLabel">Status History</h4>
			</div>
			<div id="membermodalBody" class="modal-body">
				<!-- php로 뺄 부분 시작 -->
				<h5>Title : 와우 놀라워라 상해~!!!</h5>
				<h5>Seller : james@linkasialco.kr</h5>
				<h5>Buyer : james@linkasia.co.kr</h5>
				<div id="modalTable">
					<table id="memberTable" class="table">
						<thead>
							<tr>
								<th>Status</th>
								<th>Date</th>
							</tr>
						</thead>

						<tbody>
							<!-- Tr 반복 시작 -->
							<tr>
								<td>상담시작</td>
								<td>2015-02-10</td>
							</tr>
							<!-- Tr 반복 끝 -->
							
							<tr>
								<td>구매확정</td>
								<td>2015-02-11</td>
							</tr>
							<tr>
								<td>가격확정</td>
								<td>2015-02-12</td>
							</tr>
							<tr>
								<td>결제완료</td>
								<td>2015-02-13</td>
							</tr>
							<tr>
								<td>서비스완료</td>
								<td>2015-02-15</td>
							</tr>
							<tr>
								<td>구매자 취소</td>
								<td>2015-03-06</td>
							</tr>
						</tbody>
					</table>
							<button class="btn btn-info mr10">상대방 동의 완료</button>
							<button class="btn btn-danger mr10">강제 취소</button>
							<button class="btn btn-danger">ID 정지</button>

				</div>
				<!-- php로 뺄 부분 끝 -->
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- 2번째 modal 끝 -->




<!-- 특정 문구를 찾아서 맞는 팝업으로 띄우는 스크립트 -->
<script>
	$('#memberModal').on('show.bs.modal', function (event) {
	  var button = $(event.relatedTarget) // Button that triggered the modal
	  var recipient = button.data('whatever') // Extract info from data-* attributes
	  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
	  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
	  var modal = $(this)
	  modal.find('.modal-title').text('New message to ' + recipient)
	  modal.find('.modal-body input').val(recipient)
	})
</script>