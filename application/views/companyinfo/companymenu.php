<div id="header_wrap3">
	<div class="bgimgDiv8">
		<!-- <img src="/application/views/images/main/bg08.jpg" alt="" class="innerHeaderimg"> -->
		<!-- <img src="" alt="" id='bakGround' name='bakGround'> -->
	</div>
</div>

<div id="companyInfoWrap">
	<aside id="leftmenuWrap">
		<span class="list-group-item active2">Company Menu</span></span>
		<span role="presentation" class="list-group-item" id='companyAbout'><a href="#companyAbout" class="companyAbout" data-toggle="tab"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;&nbsp;关于</span></a>
		<!-- <span class="list-group-item" id='companyWhy'><span class="glyphicon glyphicon-star" aria-hidden="true"></span>&nbsp;&nbsp;为什么</span> -->
		<!-- <span class="list-group-item" id='companyOurteam'><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;团队</span> -->
		<span role="presentation" class="list-group-item" id='companyRecruit'><a href="#companyRecruit" class="companyRecruit" data-toggle="tab"><span class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"></span>&nbsp;&nbsp;招聘</span></a>
		<span role="presentation" class="list-group-item" id='companyContact'><a href="#companyContact" class="companyContact" data-toggle="tab"><span class="glyphicon glyphicon-share" aria-hidden="true"></span>&nbsp;&nbsp;联系方式</span></a>
		<span role="presentation" class="list-group-item" id='companyPrivacy'><a href="#companyPrivacy" class="companyPrivacy" data-toggle="tab"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>&nbsp;&nbsp;隐私权政策</span></a>
	</aside><!-- leftmenuWrap end -->


	<div id="rightWrap">
		<?
			if($mode == "1"){
				$this->load->view("/companyinfo/01about");
			}else if($mode == "2"){
				$this->load->view("/companyinfo/03recruit");
			}else if($mode == "3"){
				$this->load->view("/companyinfo/05contact");
			}else if($mode == "4"){
				$this->load->view("/companyinfo/06privacy");
			}else{
				$this->load->view("/companyinfo/01about");
			}

		?>
	</div><!-- rightWrap end -->
</div><!-- guestWrap end -->



<script type="text/javascript">
	$(function(){

			$('.companyAbout').click( function(){
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

			$('.companyWhy').click( function(){
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

			$('.companyRecruit').click( function(){
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


			$('.companyOurteam').click( function(){
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

			$('.companyContact').click( function(){
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

			$('.companyPrivacy').click( function(){
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