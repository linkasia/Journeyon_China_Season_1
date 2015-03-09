		<div class="profileWrap1">
			<div class="title3"> <!-- 라인 들어가는 타이틀 city부분 복제 -->
				<div class="underline">V认证</div>
			</div>
			<div class="vcertiWrap1">
				<p class="vtitle">个人资料验证</p>
				<iframe class="company_intro" width="620" height="360" src="//www.youtube.com/embed/JbGvVyCJCSM?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
			</div>
			<?if(count($certicification) == 0){?>
				<div class="vcertiWrap2">
					<p class="vtitle">个人身份验证流程</p>
					<div class="circle bluegloss" style="margin-left: 50px;"><span>申请接受中</span></div>
					<div class="circle"><span>确认中 </span></div>
					<div class="circle"><span>资料不足</span></div>
					<div class="circle"><span>认证完成</span></div>
					<img src="/application/views/images/mypage/icon_arrow01.png" alt="" class="arrow1">
					<img src="/application/views/images/mypage/icon_arrow01.png" alt="" class="arrow2">
					<img src="/application/views/images/mypage/icon_arrow01.png" alt="" class="arrow3">
				</div>

				<form name="frmVCertification" id="frmVCertification" method='post' enctype="multipart/form-data" action="/index.php/mypage/myPage_M/vCertification">
					<div class="vcertiWrap3">
						<p class="vtitle">个人身份验证资料</p>
						<p class="ID_t">身份证</p>
						<div class="ID_imgdiv">
							<span class="glyphicon  glyphicon-plus" aria-hidden="true"></span>
							<span class="id_s">上传身份证</span>
						</div>
						<input type='file' id='vCertification' name='vCertification'>
						<input type='submit' id='vUpload' name='vUpload' value='인증 신청'>
					</div>
				</form>


			<?}else{
				foreach($certicification as $v){?>
				<div class="vcertiWrap2">
					<p class="vtitle">个人身份验证流程</p>
					<div class="circle bluegloss" style="margin-left: 50px;"><span>申请接受中</span></div>
					<?if($v->certicifi_type_code == "0006"){?>
						<div class="circle bluegloss"><span>确认中 </span></div>
					<?}else{?>
						<div class="circle"><span>确认中 </span></div>
					<?}?>
					<?if($v->certicifi_type_code == "0004"){?>
						<div class="circle bluegloss"><span>资料不足</span></div>
					<?}else{?>
						<div class="circle"><span>资料不足</span></div>
					<?}?>
					<?if($v->certicifi_type_code == "0001"){?>
						<div class="circle bluegloss"><span>认证完成</span></div>
					<?}else{?>
						<div class="circle"><span>认证完成</span></div>
					<?}?>

					<img src="/application/views/images/mypage/icon_arrow01.png" alt="" class="arrow1">
					<img src="/application/views/images/mypage/icon_arrow01.png" alt="" class="arrow2">
					<img src="/application/views/images/mypage/icon_arrow01.png" alt="" class="arrow3">
				</div>

				<form name="frmVCertification" id="frmVCertification" method='post' enctype="multipart/form-data" action="/index.php/mypage/myPage_M/vCertification">
					<div class="vcertiWrap3">
						<p class="vtitle">个人身份验证资料</p>
						<p class="ID_t">身份证</p>
						<div class="ID_imgdiv">
							<img src='<?=$v->img_path?>' id='vGet' id='vGet' />
							<!--span class="glyphicon  glyphicon-plus" aria-hidden="true"></span-->
							<span class="id_s">上传身份证</span>
						</div>

						<input type='file' id='vCertification' name='vCertification'>
						<!-- <div class="file-upload">
							<label for="file-upload" class="file-uploadLabel">Upload file</label><!-- fileUpload -->
							<input type="file" class="filestyle btn btn-info" id="vCertification" name="vCertification" data-icon="false">
						</div> -->
						<!-- <input type='file' id='vCertification' name='vCertification'> -->
						
						<?if($v->certicifi_type_code != "0001"){?>
							<input type='submit' id='vUpload' name='vUpload' value='인증 신청'>
						<?}?>
					</div>
				</form>
				<?}
			}?>
			 <p class="posa_text3">Upload</p>

			<!-- <div class="file-upload">
				<label for="file-upload" class="file-uploadLabel">Upload file</label>fileUpload				<input type="file" class="filestyle btn btn-info" id="file-upload" name="file-upload" data-icon="false">
			</div> -->

		</div><!-- profileWrap1 -->