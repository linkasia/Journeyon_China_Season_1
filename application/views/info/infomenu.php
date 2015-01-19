<div id="guestWrap">
	<aside id="leftmenuWrap">
		<span class="list-group-item active">Information</span></span>
		<span class="list-group-item" id='infoMicrotravel'><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>&nbsp;&nbsp;微旅行是什么？</span>
		<span class="list-group-item" id='infoHowhost'><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>&nbsp;&nbsp;如何加入当地人?</span>
		<span class="list-group-item" id='infoHowTraveler'><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>&nbsp;&nbsp;对旅游者使用方法？</span>
		<span class="list-group-item" id='infoPrivacy'><span class="glyphicon glyphicon-compressed" aria-hidden="true"></span>&nbsp;&nbsp;隐私权政策</span>
		<span class="list-group-item" id='infoFaq'><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>&nbsp;&nbsp;疑问解答</span>
	</aside><!-- leftmenuWrap end -->


	<div id="rightWrap">
		<? $data = "";
			$this->load->view("/info/01microtravel",$data);
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