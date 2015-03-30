
		<div class="accountDetail">
			<div class="title2"> <!-- 라인 들어가는 타이틀 city부분 복제 -->
				<div class="underline">账户变更</div>
			</div>
			
			<div class="blueborder">
				<div class="email">
					<span class="email-f1">电邮</span>
					<span class="email-f2"><?=$this->session->userdata['email']?></span>
					<span class="email-f3"><a href="#" data-toggle="modal" data-target="#myModal1" data-backdrop="static">更改注册电邮</a></span>

						<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog2">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
										<h4 class="modal-title" id="myModalLabel">变更电邮</h4>
									</div><!-- modal-header 닫힘 -->
									<div class="modal-body2">
										  <div id='content'>
												<span class="presentemail1">注册电邮</span><span class="presentemail2"><?=$this->session->userdata['email']?></span><br>
												<span class="presentemail3">新电邮</span><input type="textbox" class="presentemail4 form-control" id='newMail' name='newMail'><br>
												<span id='sendMail' name='sendMail' style='cursor:pointer'><ins><font color='#62b8ef'>发送电邮</font></ins></span>
												<span class="presentemail5">密码</span><input type="password" class="presentemail6 form-control" id='mailPass' name='mailPass'><br>
												<span class="presentemail7">重新输入新密码</span><input type="text" class="presentemail8 form-control" id='confirmNum' name='confirmNum'><br>
												<input type="hidden" id='hiddenNum' name='hiddenNum'>
										  </div>
									</div><!-- modal-body 닫힘 -->
									<div class="modal-footer">
										<button type="button" class="btn btn-primary" id="Email" name="Email">确定</button>
										<button type="button" class="btn btn-danger" data-dismiss="modal">取消</button>
									</div><!-- modal-footer 닫힘 -->
								</div><!-- modal-content 닫힘 -->
							</div><!-- modal-dialog 닫힘 -->
						</div><!-- modal fade Overveiw 끝 -->
				</div><!-- email end -->

				<div class="password">
					<span class="password-f1">密码</span>
					<span class="password-f2"><a href="#" data-toggle="modal" data-target="#myModal2" data-backdrop="static">更改密码</a></span>

						<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog2">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">取消</span></button>
										<h4 class="modal-title" id="myModalLabel">更改密码</h4>
									</div><!-- modal-header 닫힘 -->
									<div class="modal-body2">
										  <div id='content'>
												<span class="overviewpw-f1">目前的密码</span><input type="password" class="overviewpw-f2 form-control" id='oldPass' name='oldPass'><br>
												<span class="overviewpw-f3">新密码</span><input type="password" class="overviewpw-f4 form-control" id='newPass' name='newPass'><br>
												<span class="overviewpw-f5">密码</span><input type="password" class="overviewpw-f6 form-control" id='againPass' name='againPass'>
										  </div>
									</div><!-- modal-body 닫힘 -->
									<div class="modal-footer">
										<button type="button" class="btn btn-primary" id='changePass'> 确定</button>
										<button type="button" class="btn btn-danger" data-dismiss="modal">取消</button>
									</div><!-- modal-footer 닫힘 -->
								</div><!-- modal-content 닫힘 -->
							</div><!-- modal-dialog 닫힘 -->
						</div><!-- modal fade Overveiw 끝 -->

				</div><!-- password end -->
			</div>
		</div><!-- accountDetail end -->




		<div class="basicInformation">
			<div class="title2"> <!-- 라인 들어가는 타이틀 city부분 복제 -->
				<div class="underline">基本资料</div>
			</div>

			<div class="blueborder">
				<div class="grew">
					<span class="grewup">国籍</span><span><?=$this->session->userdata['country_nm']?> </span><!--span>/City</span--><br>
					<span class="grewup-f1"><a href="#" data-toggle="modal" data-target="#myModal4" data-backdrop="static">更改国籍 <!-- & City --> </a></span>
					<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog2">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">取消</span></button>
									<h4 class="modal-title" id="myModalLabel">个人资料变更</h4>
								</div><!-- modal-header 닫힘 -->
								<div class="modal-body2" id="body-height">
									<div id='content'>

										<div class="selectParent countrySelect" id="mypageCountrySelect">
											<select class="select_option form-control" id='countrySelect' name='countrySelect'>
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
									<button type="button" class="btn btn-primary" id='changeCountry'>确定</button>
									<button type="button" class="btn btn-danger" data-dismiss="modal">取消</button>
								</div><!-- modal-footer 닫힘 -->
							</div><!-- modal-content 닫힘 -->
						</div><!-- modal-dialog 닫힘 -->
					</div><!-- modal fade Overveiw 끝 -->
				</div><!-- div.grew end -->
			</div>
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
								alert(data);
								alert("认证号码已发送至新电邮"); // 인증메일을 전송하였습니다.
							}
						});
					});

					$('#Email').click( function(){
						var pass = "<?=$this->session->userdata['password']?>";
						var _selnum = document.getElementById('newMail').value;
						if( $('#confirmNum').val() == ""  ||  $('#confirmNum').val() == null )
						{
							alert("请输入认证号码") // 인증번호가 비어있습니다.
						}else{
							if( $('#hiddenNum').val() != $('#confirmNum').val()){
								alert("认证号码不正确。请确认电邮后再次输入。");  // 인증번호가 다릅니다 확인메일을 확인해주세요
							}else if ( $('#mailPass').val()  != pass ){
								alert("密码不正确"); // 패스워드가 다릅니다.
							}else{
								$.ajax({
									type:"POST" ,
									dataType:"text",
									contentType:"application/x-www-form-urlencoded; charset=UTF-8",
									data:{selnum: _selnum},
									url:"/index.php//mypage/myPage_M/mailChange",
									success: function (data){
										alert("电邮已变更。请重新登入。"); // 이메일이 변경되었습니다 다시 로그인 해 주세요.
										location.href = "/index.php/member/memberJoin/logout";
									}
								});

							}
						}
					});

					$('#changePass').click( function(){
						var pass = "<?=$this->session->userdata['password']?>";
						if( pass != $('#oldPass').val() ){
							alert("密码不正确"); // 기존 패스워드가 틀립니다.
						}else if( $('#newPass').val() == "" || $('#newPass').val() ==null){
							alert("请输入新密码"); // 새로운 패스워드가 입력되지 않았습니다.
						}else if($('#againPass').val() == "" || $('#againPass').val() == null ){
							alert("请输入目前密码"); // 패스워드가 입력되지 않았습니다.
						}else if( $('#newPass').val() != $('#againPass').val() ){
							alert("新密码再次输入不正确。"); // 새로운 패스워드가 일치하지 않습니다.
						}else{
							$.ajax({
								type:"POST" ,
								dataType:"text",
								contentType:"application/x-www-form-urlencoded; charset=UTF-8",
								data:{newPass: $('#newPass').val()},
								url:"/index.php//mypage/myPage_M/changePassword",
								success: function (data){
									alert("密码已变更。请重新登入。"); // password가 변경되었습니다. 다시 로그인해주세요
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
								alert("所在国家已变更。请重新登入"); // 국가가 변경되었습니다. 다시 로그인해주세요
								location.href = "/index.php/member/memberJoin/logout";
							}
						});
					});
				});
			</script>