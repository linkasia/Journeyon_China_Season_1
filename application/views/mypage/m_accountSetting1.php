		<div class="accountDetail">
			<div class="title2"> <!-- 라인 들어가는 타이틀 city부분 복제 -->
				<div class="underline">Account Detail</div>
			</div>
			<div class="email">
				<span class="email-f1">E-mail</span>
				<span class="email-f2"><?=$this->session->userdata['email']?></span>
				<span class="email-f3"><a href="#" data-toggle="modal" data-target="#myModal1">Change your E-Mail</a></span>

					<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog2">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
									<h4 class="modal-title" id="myModalLabel">Email Change</h4>
								</div><!-- modal-header 닫힘 -->
								<div class="modal-body2">
									  <div id='content'>
											<span class="presentemail1">Present E-mail</span><span class="presentemail2"><?=$this->session->userdata['email']?></span><br>
											<span class="presentemail3">New E-Mail</span><input type="textbox" class="presentemail4" id='newMail' name='newMail'><br>
											<span id='sendMail' name='sendMail' style='cursor:pointer'><ins><font color='#62b8ef'>메일발송</font></ins></span>
											<span class="presentemail5">Password</span><input type="password" class="presentemail6" id='mailPass' name='mailPass'><br>
											<span class="presentemail7">Confirm number</span><input type="text" class="presentemail8" id='confirmNum' name='confirmNum'><br>
											<input type="text" id='hiddenNum' name='hiddenNum'>

									  </div>
								</div><!-- modal-body 닫힘 -->
								<div class="modal-footer">
									<button type="button" class="btn btn-primary" id="Email" name="Email">Confirm New E-mail</button>
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div><!-- modal-footer 닫힘 -->
							</div><!-- modal-content 닫힘 -->
						</div><!-- modal-dialog 닫힘 -->
					</div><!-- modal fade Overveiw 끝 -->

			</div><!-- email end -->
			<div class="password">
				<span class="password-f1">Password</span>
				<span class="password-f2"><a href="#" data-toggle="modal" data-target="#myModal2">Change your password</a></span>

					<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog2">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
									<h4 class="modal-title" id="myModalLabel">Password Change</h4>
								</div><!-- modal-header 닫힘 -->
								<div class="modal-body2">
									  <div id='content'>
											<span class="overviewpw-f1">Present Password</span><input type="password" class="overviewpw-f2" id='oldPass' name='oldPass'><br>
											<span class="overviewpw-f3">New Password</span><input type="password" class="overviewpw-f4" id='newPass' name='newPass'><br>
											<span class="overviewpw-f5">Password</span><input type="password" class="overviewpw-f6" id='againPass' name='againPass'>
									  </div>
								</div><!-- modal-body 닫힘 -->
								<div class="modal-footer">
									<button type="button" class="btn btn-primary" id='changePass'>Confirm New Password</button>
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div><!-- modal-footer 닫힘 -->
							</div><!-- modal-content 닫힘 -->
						</div><!-- modal-dialog 닫힘 -->
					</div><!-- modal fade Overveiw 끝 -->

			</div><!-- password end -->
		</div><!-- accountDetail end -->

		<div class="basicInformation">
			<div class="title2"> <!-- 라인 들어가는 타이틀 city부분 복제 -->
				<div class="underline">Basic Information</div>
			</div>
			<div class="grew">
				<span class="grewup">Grew up in</span><span><?=$this->session->userdata['country_nm']?> </span><!--span>/City</span--><br>
				<span class="grewup-f1"><a href="#" data-toggle="modal" data-target="#myModal4">Change your Country <!-- & City --> </a></span>
				<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog2">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
								<h4 class="modal-title" id="myModalLabel">Basic Information Change</h4>
							</div><!-- modal-header 닫힘 -->
							<div class="modal-body2">
								<div id='content'>

									<div class="selectParent countrySelect">
										<select class="select_option" id='countrySelect' name='countrySelect'>
										<?foreach($countryList as $v){?>
											<option value="<?=$v->class?>,<?=$v->CODE?>"><?=$v->code_nm?></option>
										<?}?>
										</select>
									</div>

									<!--div class="selectParent citySelect">
										<select class="select_option" id='citySelect' name='citySelect'>
											<option value="Beijing">Beijing</option>
											<option value="volvo">volvo</option>
											<option value="volvo">volvo</option>
											<option value="volvo">volvo</option>
											<option value="volvo">volvo</option>
											<option value="volvo">volvo</option>
										</select>
									</div-->

								</div>
							</div><!-- modal-body 닫힘 -->
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" id='changeCountry'>Confirm Change your Country</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div><!-- modal-footer 닫힘 -->
						</div><!-- modal-content 닫힘 -->
					</div><!-- modal-dialog 닫힘 -->
				</div><!-- modal fade Overveiw 끝 -->
			</div><!-- div.grew end -->
		</div><!-- basic information end -->


<!-- 임시로 막아 놓음 -->
		<!-- <a href="#" class="deactive" data-toggle="modal" data-target="#myModal3"><button class="btn btn-danger">Deactivate your</button></a>
		<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog3">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<h4 class="modal-title" id="myModalLabel">Confirmation</h4>
					</div><!-- modal-header 닫힘 -->
					<!--
					<div class="modal-body2">
						  <div id='content'>
								<p>한번 비활성화되면 다시 살릴 수 없습니다. 개인정보를 제외한 나머지 정보들은 사이트에 지속 남아있습니다.
								정말로 지우겠습니까?<br>
								<button class="btn btn-danger btn-no">No, 아니 다시 생각해보니 안지울래요.</button><br>
								<button class="btn btn-info btn-yes">Yes, 다음에 좋은 기회에 다시 봐요.</button>
								</p>
						  </div>
					</div><!-- modal-body 닫힘 -->
					<!--
					<div class="modal-footer">
						<button type="button" class="btn btn-primary">Confirm</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div><!-- modal-footer 닫힘 -->
					<!--
				</div><!-- modal-content 닫힘 -->
				<!--
			</div><!-- modal-dialog 닫힘 -->
			<!--
		</div><!-- modal fade Overveiw 끝 -->
<div id='test'>

</div>
			<script type="text/javascript">
				$(function(){

					$('#sendMail').click( function(){
						var _selnum = document.getElementById('newMail').value;
						var _mode = "mailChange";

						 document.getElementById('hiddenNum').value="";
						var _ran = "";
						for(var i =0; i<6; i++){
							_ran += Math.ceil(Math.random() * 9);
						}
						document.getElementById('hiddenNum').value=_ran;
						$.ajax({
							type:"POST" ,
							dataType:"text",
							contentType:"application/x-www-form-urlencoded; charset=UTF-8",
							data:{selnum: _selnum,  mode:_mode,ran:_ran},
							url:"/index.php/auth/sendmail",
							success: function (data){
								alert("인증메일을 전송하였습니다!");
							}
						});
					});

					$('#Email').click( function(){
						var pass = "<?=$this->session->userdata['password']?>";
						var _selnum = document.getElementById('newMail').value;
						if( $('#confirmNum').val() == ""  ||  $('#confirmNum').val() == null )
						{
							alert("인증번호가 비어있습니다.!")
						}else{
							if( $('#hiddenNum').val() != $('#confirmNum').val()){
								alert("인증번호가 다릅니다 확인 메일을 확인해 주세요.!");
							}else if ( $('#mailPass').val()  != pass ){
								alert("password 가 다릅니다");
							}else{
								$.ajax({
									type:"POST" ,
									dataType:"text",
									contentType:"application/x-www-form-urlencoded; charset=UTF-8",
									data:{selnum: _selnum},
									url:"/index.php//mypage/myPage_M/mailChange",
									success: function (data){
										alert("email이 변경되었습니다 다시 로그인 해주세요");
										location.href = "/index.php/member/memberJoin/logout";
									}
								});

							}
						}
					});

					$('#changePass').click( function(){
						var pass = "<?=$this->session->userdata['password']?>";
						if( pass != $('#oldPass').val() ){
							alert("기존 password 가 틀립니다.");
						}else if( $('#newPass').val() == "" || $('#newPass').val() ==null){
							alert("newpassword 가 빈칸입니다.");
						}else if($('#againPass').val() == "" || $('#againPass').val() == null ){
							alert("password 가 빈칸입니다.");
						}else if( $('#newPass').val() != $('#againPass').val() ){
							alert("New Password 와 password가 일치하지 않습니다");
						}else{
							$.ajax({
								type:"POST" ,
								dataType:"text",
								contentType:"application/x-www-form-urlencoded; charset=UTF-8",
								data:{newPass: $('#newPass').val()},
								url:"/index.php//mypage/myPage_M/changePassword",
								success: function (data){
									alert("password가 변경되었습니다 다시 로그인 해주세요");
									location.href = "/index.php/member/memberJoin/logout";
								}
							});
						}
					});

					$('#changeCountry').click( function(){
						var _countrySelectClass = $('#countrySelect').val().substring(0,4);
						var _code = $('#countrySelect').val().substring(5,9);

						$.ajax({
							type:"POST" ,
							dataType:"text",
							contentType:"application/x-www-form-urlencoded; charset=UTF-8",
							data:{countrySelectClass:_countrySelectClass, code:_code},
							url:"/index.php//mypage/myPage_M/changeCountry",
							success: function (data){
								alert("Country가 변경되었습니다 다시 로그인 해주세요");
								location.href = "/index.php/member/memberJoin/logout";
							}
						});
					});
				});
			</script>