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
				<th>Sales</th>
				<th>Like</th>
				<th>Review</th>
				<th>Update Date</th>
				<th>Status</th>
			</tr>
		</thead>

		<tbody>
			<!-- Tr 반복 시작 -->
			<tr>
				<td>1000</td>
				<td>
					<a href="" data-toggle="modal" data-target="#memberModal" data-whatever="@mdo">신청</a>
					<!-- 맨 아래 memberModal과 연결되서 팝업창 띄움 -->
				</td>	
				<td>
					<a href="" data-toggle="modal" data-target="#memberModal" data-whatever="@fat">신청</a>
				</td>
				<td>
					<a href="" data-toggle="modal" data-target="#memberModal" data-whatever="@getbootstrap">신청</a>
				</td>
				<td>2132165456@qq.com</td>
				<td>6</td>
				<td>China</td>
				<td>None</td>
				<td>활동중</td>
			</tr>
			<!-- Tr 반복 끝 -->

			<tr>
				<td>1000</td>
				<td>미신청</td>
				<td>미신청</td>
				<td>미신청</td>
				<td>2132165456@qq.com</td>
				<td>6</td>
				<td>China</td>
				<td>None</td>
				<td>활동중</td>
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


<!-- 실험용으로 써 볼 수 있는 테스트 버튼 -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button>



<!-- modal 시작 -->
<div class="modal fade" id="memberModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="exampleModalLabel">New message</h4>
			</div>
			<div id="membermodalBody" class="modal-body">
				<!-- php로 뺄 부분 시작 -->
				<? $this -> load ->view('/admin/modal') ?>
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