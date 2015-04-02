<div id="header_wrap3">
	<div class="bgimgDiv5">
		<!-- <img src="/application/views/images/main/bg08.jpg" alt="" class="innerHeaderimg"> -->
		<!-- <img src="" alt="" id='bakGround' name='bakGround'> -->
	</div>
</div>

<div id="accountWrap">
	<aside id="leftmenuWrap">
		<span class="list-group-item active2">编辑及设定&nbsp;&nbsp;<span class="glyphicon glyphicon-cog" aria-hidden="true"></span></span>
		<span role="presentation" class="list-group-item active" id='Account'><a href="#Account" class="Account" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;账户变更</span></a>
		<span role="presentation" class="list-group-item" id='Payment'><a href="#Payment" class="Payment" data-toggle="tab"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span>&nbsp;&nbsp;订单及交易记录&nbsp;&nbsp;</span></a>
		<span role="presentation" class="list-group-item" id='V_Certicification'><a href="#V_Certicification" class="V_Certicification" data-toggle="tab"><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span>&nbsp;&nbsp;V认证设定&nbsp;&nbsp;</span></a>
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

	function ImgReview(){
		ext = $('#vCertification').val().split('.').pop().toLowerCase(); //확장자
		if($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
			resetFormElement($('#vCertification')); //폼 초기화
			window.alert('이미지 파일이 아닙니다! (gif, png, jpg, jpeg 만 업로드 가능)');
		} else {
			file = $('#vCertification').prop("files")[0];
			blobURL = window.URL.createObjectURL(file);
			$('#vGet').attr('src', blobURL);
			$('#image_preview').slideDown(); //업로드한 이미지 미리보기
		   // $(this).slideUp(); //파일 양식 감춤
		}
	}
	/*
	$('#vCertification').on('change', function() {
		ext = $(this).val().split('.').pop().toLowerCase(); //확장자
		if($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
			resetFormElement($(this)); //폼 초기화
			window.alert('이미지 파일이 아닙니다! (gif, png, jpg, jpeg 만 업로드 가능)');
		} else {
			file = $('#vCertification').prop("files")[0];
			blobURL = window.URL.createObjectURL(file);
			$('#vGet').attr('src', blobURL);
			$('#image_preview').slideDown(); //업로드한 이미지 미리보기
		   // $(this).slideUp(); //파일 양식 감춤
		}
	});
*/
	$(function(){

			$('.Account').click( function(){
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

			$('.Payment').click( function(){
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

			$('.V_Certicification').click( function(){
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