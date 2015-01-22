<div id="companyInfoWrap">
	<aside id="leftmenuWrap">
		<span class="list-group-item active">Company Menu</span></span>
		<span class="list-group-item" id='companyAbout'><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;&nbsp;关于</span>
		<!-- <span class="list-group-item" id='companyWhy'><span class="glyphicon glyphicon-star" aria-hidden="true"></span>&nbsp;&nbsp;为什么</span> -->
		<!-- <span class="list-group-item" id='companyOurteam'><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;团队</span> -->
		<span class="list-group-item" id='companyRecruit'><span class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"></span>&nbsp;&nbsp;招聘</span>
		<span class="list-group-item" id='companyContact'><span class="glyphicon glyphicon-share" aria-hidden="true"></span>&nbsp;&nbsp;联系方式</span>
		<span class="list-group-item" id='companyPrivacy'><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>&nbsp;&nbsp;隐私权政策</span>
	</aside><!-- leftmenuWrap end -->


	<div id="rightWrap">
		<? $data = "";
			$this->load->view("/companyinfo/01about",$data);
		?>
	</div><!-- rightWrap end -->
</div><!-- guestWrap end -->



<script type="text/javascript">
	$(function(){

			$('#companyAbout').click( function(){
				$.ajax({
					type:"POST" ,
					dataType:"text",
					contentType:"application/x-www-form-urlencoded; charset=UTF-8",
					data:{ },
					url:"/index.php/company/companyinfo/companyAbout",
					success: function (data){
						//alert(data);
						document.getElementById('rightWrap').innerHTML =data;
					}
				});
			});

			$('#companyWhy').click( function(){
				$.ajax({
					type:"POST" ,
					dataType:"text",
					contentType:"application/x-www-form-urlencoded; charset=UTF-8",
					data:{ },
					url:"/index.php/company/companyinfo/companyWhy",
					success: function (data){
						//alert(data);
						document.getElementById('rightWrap').innerHTML =data;
					}
				});
			});

			$('#companyRecruit').click( function(){
				$.ajax({
					type:"POST" ,
					dataType:"text",
					contentType:"application/x-www-form-urlencoded; charset=UTF-8",
					data:{ },
					url:"/index.php/company/companyinfo/companyRecruit",
					success: function (data){
						//alert(data);
						document.getElementById('rightWrap').innerHTML =data;
					}
				});
			});


			$('#companyOurteam').click( function(){
				$.ajax({
					type:"POST" ,
					dataType:"text",
					contentType:"application/x-www-form-urlencoded; charset=UTF-8",
					data:{ },
					url:"/index.php/company/companyinfo/companyOurteam",
					success: function (data){
						//alert(data);
						document.getElementById('rightWrap').innerHTML =data;
					}
				});
			});

			$('#companyContact').click( function(){
				$.ajax({
					type:"POST" ,
					dataType:"text",
					contentType:"application/x-www-form-urlencoded; charset=UTF-8",
					data:{ },
					url:"/index.php/company/companyinfo/companyContact",
					success: function (data){
						//alert(data);
						document.getElementById('rightWrap').innerHTML =data;
					}
				});
			});

			$('#companyPrivacy').click( function(){
				$.ajax({
					type:"POST" ,
					dataType:"text",
					contentType:"application/x-www-form-urlencoded; charset=UTF-8",
					data:{ },
					url:"/index.php/company/companyinfo/companyPrivacy",
					success: function (data){
						document.getElementById('rightWrap').innerHTML =data;
					}
				});
			});

	});
</script>