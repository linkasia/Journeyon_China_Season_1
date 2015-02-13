<h1 class="mb40">Book</h1>

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




<div id="statusBox">
	<ul class="nav nav-pills" role="tablist">
		<li role="presentation" class="active mr10"><a href="#">총 거래진행<span class="badge">165,320</span></a></li>
		<li role="presentation" class="active mr10"><a href="#">10일 이내 서비스 예정<span class="badge">32</span></a></li>
		<li role="presentation" class="active mr10"><a href="#">취소<span class="badge">32</span></a></li>
	</ul>

	<ul class="nav nav-pills" role="tablist">
		<li role="presentation" class="active mr10"><a href="#">상담중<span class="badge">90</span></a></li>
		<li role="presentation" class="active mr10"><a href="#">구매확정<span class="badge">30</span></a></li>
		<li role="presentation" class="active mr10"><a href="#">결제완료<span class="badge">30</span></a></li>
		<li role="presentation" class="active"><a href="#">서비스 완료<span class="badge">30</span></a></li>
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
			<?foreach($bookList as $v){?>
				<tr>
					<td><?=$v->book_num?></td>
					<td><?=$v->country?></td>
					<td><?=$v->city?></td>
					<td><?=$v->title?></td>
					<td><?=$v->saler?></td>
					<td><?=$v->buyer?></td>
					<td><a href="" data-toggle="modal" data-target="#memberModal" data-whatever="@mdo"><?=$v->order_state?></a>	</td>
				</tr>
			<?}?>
			<!-- Tr 반복 끝 -->
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
<!--div class="modal fade" id="memberModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="exampleModalLabel">Status History</h4>
			</div>
			<div id="membermodalBody" class="modal-body" >

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

							<tr>
								<td>상담시작</td>
								<td>2015-02-10</td>
							</tr>


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
						</tbody>
					</table>
				</div>

			</div>
		</div>
	</div>
</div -->
<!-- modal 끝 -->