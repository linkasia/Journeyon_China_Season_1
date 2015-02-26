<div id="accountWrap">
	<aside id="leftmenuWrap">
		<span class="list-group-item active">编辑及设定&nbsp;&nbsp;<span class="glyphicon glyphicon-cog" aria-hidden="true"></span></span>
		<span class="list-group-item" id='Account'><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;账户变更</span>
		<span class="list-group-item" id='Payment'><span class="glyphicon glyphicon-usd" aria-hidden="true"></span>&nbsp;&nbsp;订单及交易记录&nbsp;&nbsp;</span>
		<span class="list-group-item" id='V_Certicification'><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span>&nbsp;&nbsp;V认证设定&nbsp;&nbsp;</span>
	</aside><!-- leftmenuWrap end -->

	<div id="rightWrap">
		<?
			if($mode == "0"){
				$data['countryList'] = $this->main_i->country();
				$this->load->view("/mypage/m_accountSetting1",$data);
			}else if($mode == "2"){
				$data['certicification'] =  $this->myModify->myCerticificationState($this->session->userdata['num']);
				$this->load->view('mypage/m_accountSetting3');
			}
		?>
	</div><!-- rightWrap end -->

</div><!-- accountWrap end -->

<script type="text/javascript">
	$(function(){

			$('#Account').click( function(){
				$.ajax({
					type:"POST" ,
					dataType:"text",
					contentType:"application/x-www-form-urlencoded; charset=UTF-8",
					data:{ },
					url:"/index.php/mypage/myPage_M/myAccount",
					success: function (data){
						//alert(data);
						document.getElementById('rightWrap').innerHTML =data;
					}
				});
			});

			$('#Payment').click( function(){
				$.ajax({
					type:"POST" ,
					dataType:"text",
					contentType:"application/x-www-form-urlencoded; charset=UTF-8",
					data:{ },
					url:"/index.php/mypage/myPage_M/myPayment",
					success: function (data){
						//alert(data);
						document.getElementById('rightWrap').innerHTML =data;
					}
				});
			});

			$('#V_Certicification').click( function(){
				$.ajax({
					type:"POST" ,
					dataType:"text",
					contentType:"application/x-www-form-urlencoded; charset=UTF-8",
					data:{ },
					url:"/index.php/mypage/myPage_M/myV_Certicification",
					success: function (data){
						document.getElementById('rightWrap').innerHTML =data;
					}
				});
			});
	});
</script>