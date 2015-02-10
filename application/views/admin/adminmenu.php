<div id="adminWrap">
	<aside id="leftmenuWrap">
		<span class="list-group-item active" id='admin'>Admin Menu</span>
		<span class="list-group-item" id='adminMain'>Main</span>
		<span class="list-group-item" id='adminMember'>Member</span>
		<span class="list-group-item" id='adminProduct'>Product</span>
		<span class="list-group-item" id='adminBook'>Book</span>
		<span class="list-group-item" id='adminNotice'>Notice</span>
		<span class="list-group-item" id='adminBoard'>Board</span>
	</aside><!-- leftmenuWrap end -->
	<div id='adminrightWrap'>
	</div>
</div>



<script type="text/javascript">
	$(function(){
		$('#adminMain').click( function(){
			$.ajax({
				type:"POST" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ },
				url:"/index.php/admin/adminMenu/mainMenu",
				success: function (data){
					//alert(data);
					document.getElementById('adminrightWrap').innerHTML =data;
				}
			});
		});

		$('#adminMember').click( function(){
			$.ajax({
				type:"POST" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ },
				url:"/index.php/admin/adminMenu/mainMember",
				success: function (data){
					//alert(data);
					document.getElementById('adminrightWrap').innerHTML =data;
				}
			});
		});

		$('#adminProduct').click( function(){
			$.ajax({
				type:"POST" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ },
				url:"/index.php/admin/adminMenu/mainProduct",
				success: function (data){
					//alert(data);
					document.getElementById('adminrightWrap').innerHTML =data;
				}
			});
		});

		$('#adminBook').click( function(){
			$.ajax({
				type:"POST" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ },
				url:"/index.php/admin/adminMenu/mainBook",
				success: function (data){
					//alert(data);
					document.getElementById('adminrightWrap').innerHTML =data;
				}
			});
		});

		$('#adminNotice').click( function(){
			$.ajax({
				type:"POST" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ },
				url:"/index.php/admin/adminMenu/mainNotice",
				success: function (data){
					//alert(data);
					document.getElementById('adminrightWrap').innerHTML =data;
				}
			});
		});

		$('#adminBoard').click( function(){
			$.ajax({
				type:"POST" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ },
				url:"/index.php/admin/adminMenu/mainBoard",
				success: function (data){
					//alert(data);
					document.getElementById('adminrightWrap').innerHTML =data;
				}
			});
		});
	});
</script>