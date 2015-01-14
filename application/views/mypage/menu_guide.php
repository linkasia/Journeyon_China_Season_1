<div id="guideWrap">
	<aside id="leftmenuWrap">
		<span class="list-group-item active">Guide Menu</span></span>
		<span class="list-group-item" id='guideHome'><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;&nbsp;Guide Home</span>
		<span class="list-group-item" id='guideR'><span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span>&nbsp;&nbsp;Guide Request</span>
		<span class="list-group-item" id='itemAdmin'><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;&nbsp;Product Management&nbsp;&nbsp;</span>
		<span class="list-group-item" id='salesAdmin'><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;&nbsp;Sales Management&nbsp;&nbsp;</span>
		<span class="list-group-item" id='cancelAdmin'><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>&nbsp;&nbsp;Cancel Management&nbsp;&nbsp;</span>
	</aside><!-- leftmenuWrap end -->

	<div id="rightWrap">
		<? $data = "";
			$this->load->view("/mypage/m_guide0",$data);
		?>
	</div><!-- rightWrap end -->

</div><!-- guideWrap end -->

<script type="text/javascript">
	$(function(){

			$('#guideHome').click( function(){
				$.ajax({
					type:"POST" ,
					dataType:"text",
					contentType:"application/x-www-form-urlencoded; charset=UTF-8",
					data:{ },
					url:"/index.php/mypage/myPage_M/myGuideHome",
					success: function (data){
						//alert(data);
						document.getElementById('rightWrap').innerHTML =data;
					}
				});
			});

			$('#guideR').click( function(){
				$.ajax({
					type:"POST" ,
					dataType:"text",
					contentType:"application/x-www-form-urlencoded; charset=UTF-8",
					data:{ },
					url:"/index.php/mypage/myPage_M/myGuideAdmin",
					success: function (data){
						//alert(data);
						document.getElementById('rightWrap').innerHTML =data;
					}
				});
			});

			$('#itemAdmin').click( function(){
				$.ajax({
					type:"POST" ,
					dataType:"text",
					contentType:"application/x-www-form-urlencoded; charset=UTF-8",
					data:{ },
					url:"/index.php/mypage/myPage_M/myItemAdmin",
					success: function (data){
						//alert(data);
						document.getElementById('rightWrap').innerHTML =data;
					}
				});
			});

			$('#salesAdmin').click( function(){
				$.ajax({
					type:"POST" ,
					dataType:"text",
					contentType:"application/x-www-form-urlencoded; charset=UTF-8",
					data:{ },
					url:"/index.php/mypage/myPage_M/mySalesAdmin",
					success: function (data){
						//alert(data);
						document.getElementById('rightWrap').innerHTML =data;
					}
				});
			});

			$('#cancelAdmin').click( function(){
				$.ajax({
					type:"POST" ,
					dataType:"text",
					contentType:"application/x-www-form-urlencoded; charset=UTF-8",
					data:{ },
					url:"/index.php/mypage/myPage_M/myCancelAdmin",
					success: function (data){
						document.getElementById('rightWrap').innerHTML =data;
					}
				});
			});
	});
</script>