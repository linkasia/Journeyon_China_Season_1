<h1>Product</h1>
<h6><span class="glyphicon glyphicon-user"></span>Our People</h6>

<div id="statusBox">
	<ul class="nav nav-pills" role="tablist">
		<li role="presentation" class="active mr10"><a href="#">총 상품수<span class="badge">100,000</span></a></li>
		<li role="presentation" class="active mr10"><a href="#">판매중 상품수<span class="badge">100,000</span></a></li>
		<li role="presentation" class="active mr10"><a href="#">등록중 상품수<span class="badge">50</span></a></li>
		<li role="presentation" class="active"><a href="#">중지중 상품수<span class="badge">32</span></a></li>
	</ul>

	<ul class="nav nav-pills" role="tablist">
		<li role="presentation" class="active mr10"><a href="#">신규 등록신청<span class="badge">90</span></a></li>
		<li role="presentation" class="active mr10"><a href="#">판매량순<span class="badge">30</span></a></li>
		<li role="presentation" class="active mr10"><a href="#">좋아요순<span class="badge">30</span></a></li>
		<li role="presentation" class="active"><a href="#">후기순<span class="badge">30</span></a></li>
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
				<th>Country</th>
				<th>City</th>
				<th>Product Name</th>
				<th>ID</th>
				<th>Update Date</th>
				<th>Status</th>
				<th> </th>
			</tr>
		</thead>

		<tbody>

			<?foreach($productList as $v){?>
				<tr>
					<td><?=$v->product_num?></td>
					<td><?=$v->country?></td>
					<td><?=$v->city?></td>
					<td><?=$v->title?></td>
					<td><?=$v->email?></td>
					<td><?=$v->create_date?></td>
					<td><?=$v->state?></td>
					<td>
						<button class="btn btn-warning" onclick="productUnAppov('<?=$v->product_num?>','<?=$v->user_num?>')">반려</button>
						<button class="btn btn-info" onclick="productAppov('<?=$v->product_num?>')">승인</button>
					</td>
				</tr>
			<?}?>
			<!-- Tr 반복 끝 -->

		</tbody>
	</table>
	<!-- 테이블 끝 -->


	<!-- 페이지 넘버링 시작 -->
	<!--nav id="pageNumber">
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
<!--div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="exampleModalLabel">New message</h4>
			</div>
			<div id="productmodalBody" class="modal-body">
				<textarea name="" id="productConfirmtextarea" name="productConfirmtextarea" cols="30" rows="10"></textarea>
				<button class="btn btn-primary" id="productConfirmBtn" name="productConfirmBtn">승인</button>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div-->
<!-- modal 끝 -->
