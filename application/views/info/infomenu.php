<div id="companyInfoWrap">
	<aside id="leftmenuWrap">
		<span class="list-group-item active">Information</span></span>
		<span class="list-group-item" id='infoMicrotravel'><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>&nbsp;&nbsp;微旅行的意义</span>
		<span class="list-group-item" id='infoHowhost'><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>&nbsp;&nbsp;微导是什么？</span>
		<span class="list-group-item" id='infoHowTraveler'><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>&nbsp;&nbsp;给旅行者的信息</span>
		<span class="list-group-item" id='infoFaq'><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>&nbsp;&nbsp;疑问解答</span>
	</aside><!-- leftmenuWrap end -->


	<div id="rightWrap">
		<?
			if($mode == "1"){
				$this->load->view("/info/01microtravel");
			}else if($mode == "2"){
				$this->load->view("/info/02howhost");
			}else if($mode == "3"){
				$this->load->view("/info/03howtraveler");
			}else if($mode == "4"){
				$this->load->view("/info/05faq");
			}else{
				$this->load->view("/info/01microtravel");
			}
		?>
	</div><!-- rightWrap end -->
</div><!-- guestWrap end -->



<script type="text/javascript">
	$(function(){

			$('#infoMicrotravel').click( function(){
				$.ajax({
					type:"POST" ,
					dataType:"text",
					contentType:"application/x-www-form-urlencoded; charset=UTF-8",
					data:{ },
					url:"/index.php/info/infomenu/infoMicrotravel",
					success: function (data){
						//alert(data);
						document.getElementById('rightWrap').innerHTML =data;
					}
				});
			});

			$('#infoHowhost').click( function(){
				$.ajax({
					type:"POST" ,
					dataType:"text",
					contentType:"application/x-www-form-urlencoded; charset=UTF-8",
					data:{ },
					url:"/index.php/info/infomenu/infoHowhost",
					success: function (data){
						//alert(data);
						document.getElementById('rightWrap').innerHTML =data;
					}
				});
			});

			$('#infoHowTraveler').click( function(){
				$.ajax({
					type:"POST" ,
					dataType:"text",
					contentType:"application/x-www-form-urlencoded; charset=UTF-8",
					data:{ },
					url:"/index.php/info/infomenu/infoHowTraveler",
					success: function (data){
						//alert(data);
						document.getElementById('rightWrap').innerHTML =data;
					}
				});
			});

			$('#infoPrivacy').click( function(){
				$.ajax({
					type:"POST" ,
					dataType:"text",
					contentType:"application/x-www-form-urlencoded; charset=UTF-8",
					data:{ },
					url:"/index.php/info/infomenu/infoPrivacy",
					success: function (data){
						//alert(data);
						document.getElementById('rightWrap').innerHTML =data;
					}
				});
			});

			$('#infoFaq').click( function(){
				$.ajax({
					type:"POST" ,
					dataType:"text",
					contentType:"application/x-www-form-urlencoded; charset=UTF-8",
					data:{ },
					url:"/index.php/info/infomenu/infoFaq",
					success: function (data){
						document.getElementById('rightWrap').innerHTML =data;
					}
				});
			});
	});
</script>