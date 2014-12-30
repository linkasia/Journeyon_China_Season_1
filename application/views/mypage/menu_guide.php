<div id="guideWrap">
	<aside id="leftmenuWrap">
		<span class="list-group-item active">Guide Home&nbsp;&nbsp;<span class="glyphicon glyphicon-cog" aria-hidden="true"></span></span>
		<span class="list-group-item" id='guideR'><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;가이드 신청</span>
		<span class="list-group-item" id='itemAdmin'><span class="glyphicon glyphicon-usd" aria-hidden="true"></span>&nbsp;&nbsp;상품관리&nbsp;&nbsp;</span>
		<span class="list-group-item" id='salesAdmin'><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span>&nbsp;&nbsp;판매관리&nbsp;&nbsp;</span>
		<span class="list-group-item" id='cancelAdmin'><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span>&nbsp;&nbsp;취소관리&nbsp;&nbsp;</span>
	</aside><!-- leftmenuWrap end -->

	<div id="rightWrap">
		<? $data = "";
			$this->load->view("/mypage/m_guest1",$data);
		?>
	</div><!-- rightWrap end -->

</div><!-- guideWrap end -->

<script type="text/javascript">
	$(function(){

			$('#guideR').click( function(){
				$.ajax({
					type:"POST" ,
					dataType:"text",
					contentType:"application/x-www-form-urlencoded; charset=UTF-8",
					data:{ },
					url:"http://www.linkasia.co.kr/index.php/mypage/myPage_M/myAccount",
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
					url:"http://www.linkasia.co.kr/index.php/mypage/myPage_M/myPayment",
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
					url:"http://www.linkasia.co.kr/index.php/mypage/myPage_M/myV_Certicification",
					success: function (data){
						document.getElementById('rightWrap').innerHTML =data;
					}
				});
			});
	});
</script>