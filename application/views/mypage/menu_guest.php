<div id="guestWrap">
	<aside id="leftmenuWrap">
		<span class="list-group-item active">Guide Menu</span></span>
		<span class="list-group-item" id='guestHome'><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;&nbsp;Guest Home</span>
		<span class="list-group-item" id='guestBucket'><span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span>&nbsp;&nbsp;Bucket List</span>
		<span class="list-group-item" id='guestReservation'><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;&nbsp;Reservation List&nbsp;&nbsp;</span>
		<span class="list-group-item" id='guestBuy'><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;&nbsp;Buy List&nbsp;&nbsp;</span>
		<span class="list-group-item" id='guestCancel'><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>&nbsp;&nbsp;Cancel &nbsp;&nbsp;</span>
	</aside><!-- leftmenuWrap end -->


	<div id="rightWrap">
		<? $data = "";
			$this->load->view("/mypage/m_guest0",$data);
		?>
	</div><!-- rightWrap end -->
</div><!-- guestWrap end -->



<script type="text/javascript">
	$(function(){

			$('#guestHome').click( function(){
				$.ajax({
					type:"POST" ,
					dataType:"text",
					contentType:"application/x-www-form-urlencoded; charset=UTF-8",
					data:{ },
					url:"/index.php/mypage/myPage_M/myGuestHome",
					success: function (data){
						//alert(data);
						document.getElementById('rightWrap').innerHTML =data;
					}
				});
			});

			$('#guestBucket').click( function(){
				$.ajax({
					type:"POST" ,
					dataType:"text",
					contentType:"application/x-www-form-urlencoded; charset=UTF-8",
					data:{ },
					url:"/index.php/mypage/myPage_M/myGuestAdmin",
					success: function (data){
						//alert(data);
						document.getElementById('rightWrap').innerHTML =data;
					}
				});
			});

			$('#guestReservation').click( function(){
				$.ajax({
					type:"POST" ,
					dataType:"text",
					contentType:"application/x-www-form-urlencoded; charset=UTF-8",
					data:{ },
					url:"/index.php/mypage/myPage_M/myGuestItemAdmin",
					success: function (data){
						//alert(data);
						document.getElementById('rightWrap').innerHTML =data;
					}
				});
			});

			$('#guestBuy').click( function(){
				$.ajax({
					type:"POST" ,
					dataType:"text",
					contentType:"application/x-www-form-urlencoded; charset=UTF-8",
					data:{ },
					url:"/index.php/mypage/myPage_M/myGuestSalesAdmin",
					success: function (data){
						//alert(data);
						document.getElementById('rightWrap').innerHTML =data;
					}
				});
			});

			$('#guestCancel').click( function(){
				$.ajax({
					type:"POST" ,
					dataType:"text",
					contentType:"application/x-www-form-urlencoded; charset=UTF-8",
					data:{ },
					url:"/index.php/mypage/myPage_M/myGuestCancelAdmin",
					success: function (data){
						document.getElementById('rightWrap').innerHTML =data;
					}
				});
			});
	});
</script>