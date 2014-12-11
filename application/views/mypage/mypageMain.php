<div id="mypage_wrap"> <!-- 컨텐츠 영역 나중에 include -->
	<aside class="list-group">
		<span class="list-group-item active">PROFILE MENU<img src="/application/views/images/mypage/icon_a.png" class="icon_profile" alt="profile_icon"> </span>
		<span class="list-group-item" id='myProfile'>&nbsp;&nbsp;My Profile</span>
		<span class="list-group-item" id='Chat'>&nbsp;&nbsp;Chat<!-- <img src="/application/views/images/mypage/icon_b.png" alt=""> --></span>
		<span class="list-group-item" id='Account'>&nbsp;&nbsp;Account<!-- <img src="/application/views/images/mypage/icon_e.png" alt=""> --></span>
		<span class="list-group-item active">Host<img src="/application/views/images/mypage/icon_c.png" class="icon_host" alt="host_icon"></span>
		<span class="list-group-item" id='HostProduct'>&nbsp;&nbsp;Product</span>
		<span class="list-group-item" id='HostSales'>&nbsp;&nbsp;Sales</span>
		<span class="list-group-item" id='HostCancel'>&nbsp;&nbsp;Cancel</span>
		<span class="list-group-item" id='HostProfit'>&nbsp;&nbsp;Profit</span>
		<span class="list-group-item active">Guest<img src="/application/views/images/mypage/icon_d.png" class="icon_guest" alt="guest_icon"></span>
		<span class="list-group-item" id='GuestCounsel'>&nbsp;&nbsp;Counsel</span>
		<span class="list-group-item" id='Guestwish'>&nbsp;&nbsp;I wish</span>
		<span class="list-group-item"  id='GuestBeen'>&nbsp;&nbsp;Have Been</span>
		<span class="list-group-item" id='GuestCancel'>&nbsp;&nbsp;Cancel</span>
	</aside>

	<!-- 여기서 부터 우측영역 -->
	<section id="mypage_rightWrap">
		<?$this->load->view("/mypage/myprofile");?>
	</section>
</div>

<script>
		$('#myProfile').click( function(){
			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ },
				//url:"http://163.180.73.62/index.php/city/country/detailCity1",
				url:"http://163.180.73.25/index.php/mypage/myPage_M/myprofile",
				success: function (data){
					document.getElementById('mypage_rightWrap').innerHTML = data;
					
				}
			});
		});

		$('#Chat').click( function(){
			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ },
				//url:"http://163.180.73.62/index.php/city/country/detailCity1",
				url:"http://163.180.73.25/index.php/mypage/myPage_M/myChat",
				success: function (data){
					document.getElementById('mypage_rightWrap').innerHTML = data;
					
				}
			});
		});

		$('#Account').click( function(){
			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ },
				//url:"http://163.180.73.62/index.php/city/country/detailCity1",
				url:"http://163.180.73.25/index.php/mypage/myPage_M/myAccount",
				success: function (data){
					document.getElementById('mypage_rightWrap').innerHTML = data;
					
				}
			});
		});
		
		$('#HostProduct').click( function(){
			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ },
				//url:"http://163.180.73.62/index.php/city/country/detailCity1",
				url:"http://163.180.73.25/index.php/mypage/myPage_M/HostProduct",
				success: function (data){
					document.getElementById('mypage_rightWrap').innerHTML = data;
					
				}
			});
		});

		$('#HostProduct').click( function(){
			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ },
				//url:"http://163.180.73.62/index.php/city/country/detailCity1",
				url:"http://163.180.73.25/index.php/mypage/myPage_M/HostProduct",
				success: function (data){
					document.getElementById('mypage_rightWrap').innerHTML = data;
					
				}
			});
		});
		
		$('#HostSales').click( function(){
			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ },
				//url:"http://163.180.73.62/index.php/city/country/detailCity1",
				url:"http://163.180.73.25/index.php/mypage/myPage_M/HostSales",
				success: function (data){
					document.getElementById('mypage_rightWrap').innerHTML = data;
					
				}
			});
		});

		$('#HostCancel').click( function(){
			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ },
				//url:"http://163.180.73.62/index.php/city/country/detailCity1",
				url:"http://163.180.73.25/index.php/mypage/myPage_M/HostCancel",
				success: function (data){
					document.getElementById('mypage_rightWrap').innerHTML = data;
					
				}
			});
		});

		$('#HostProfit').click( function(){
			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ },
				//url:"http://163.180.73.62/index.php/city/country/detailCity1",
				url:"http://163.180.73.25/index.php/mypage/myPage_M/HostProfit",
				success: function (data){
					document.getElementById('mypage_rightWrap').innerHTML = data;
					
				}
			});
		});
		
		$('#GuestCounsel').click( function(){
			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ },
				//url:"http://163.180.73.62/index.php/city/country/detailCity1",
				url:"http://163.180.73.25/index.php/mypage/myPage_M/GuestCounsel",
				success: function (data){
					document.getElementById('mypage_rightWrap').innerHTML = data;
					
				}
			});
		});
		
		$('#Guestwish').click( function(){
			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ },
				//url:"http://163.180.73.62/index.php/city/country/detailCity1",
				url:"http://163.180.73.25/index.php/mypage/myPage_M/Guestwish",
				success: function (data){
					document.getElementById('mypage_rightWrap').innerHTML = data;
					
				}
			});
		});
		
		$('#GuestBeen').click( function(){
			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ },
				//url:"http://163.180.73.62/index.php/city/country/detailCity1",
				url:"http://163.180.73.25/index.php/mypage/myPage_M/GuestBeen",
				success: function (data){
					document.getElementById('mypage_rightWrap').innerHTML = data;
					
				}
			});
		});

		$('#GuestCancel').click( function(){
			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ },
				//url:"http://163.180.73.62/index.php/city/country/detailCity1",
				url:"http://163.180.73.25/index.php/mypage/myPage_M/GuestCancel",
				success: function (data){
					document.getElementById('mypage_rightWrap').innerHTML = data;
					
				}
			});
		});


		$('#profileModify').click( function(){
			alert("test");
		
		});
		
</script>