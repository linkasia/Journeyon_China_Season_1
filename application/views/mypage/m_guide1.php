		<div class="profileWrap1">
			<div class="title1">
				<div class="underline">微导认证申请</div>
			</div>  <!-- 라인 들어가는 타이틀 city부분 복제 -->

			<div id="guideRequestWrap">
				<div class="guideRequestWrapinner mb40">

				<?if(count($gGuide) == 0) {?>

				<div class="guideProcess">
					<div class="processWrap">
						<p class="sub_title">个人身份验证流程</p>
						<div class="circle whitegloss" style="margin-left: 50px;"><p>申请接受中</p></div>
						<div class="circle whitegloss"><p>确认中</p></div>
						<div class="circle whitegloss"><p>资料不足<br><span>2014-12-21</span></p></div>
						<div class="circle whitegloss"><p>认证完成<br><span>2014-12-21</span></p></div>
						<img src="/application/views/images/mypage/icon_arrow01.png" alt="arrow" class="arrow1">
						<img src="/application/views/images/mypage/icon_arrow01.png" alt="arrow" class="arrow2">
						<img src="/application/views/images/mypage/icon_arrow01.png" alt="arrow" class="arrow3">
					</div><!-- processWrap end -->

				<hr>

					<div id="guideData">
						<p class="sub_title">个人身份验证资料</p>
						<div class="dataView">
							<?foreach($profileCnt as $v){?>
							<p>完成度 : <?=$v->cnt?>%</p>
							<a href="/index.php/mypage/myPage_M/mypublic?userNum=<?=$this->session->userdata['num']?>" class="btn btn-default">前往个人页面编辑个人资料</a>
							<input type='hidden' id='hiddenPer' name='hiddenPer' value='<?=$v->cnt?>'>
							<?}?>

							<!--p>SNS 연동 : 미완료</p><span class="btn btn-info" id="snsModify">연동하러 가기</span-->
						</div><!-- dataView End -->
						<span class="btn btn-info" id="request" onclick="InsertGuide()">申请认证</span>
					</div><!-- guideData end -->
					<?}else{
					foreach($gGuide as $k){?>
					<div class="guideProcess">
						<div class="processWrap">
							<p class="sub_title">个人身份验证流程</p>
							<div class="circle bluegloss3" style="margin-left: 50px;"><p>申请接受中</p></div>
							<?if($k->certicifi_type_code == "0005"){?>
								<div class="circle bluegloss3"><p>确认中</p></div>
								<div class="circle whitegloss"><p>资料不足<br><span></span></p></div>
								<div class="circle whitegloss"><p>认证完成<br><span></span></p></div>
							<?}?>

							<?if($k->certicifi_type_code == "0004"){?>
								<div class="circle bluegloss3"><p>确认中</p></div>
								<div class="circle redgloss3"><p>资料不足<br><span><?=$k->modify_date?></span></p></div>
								<div class="circle whitegloss"><p>认证完成<br><span></span></p></div>
							<?}?>

							<?if($k->certicifi_type_code == "0001"){?>
								<div class="circle bluegloss3"><p>确认中</p></div>
								<div class="circle bluegloss3"><p>资料不足<br><span><?=$k->modify_date?></span></p></div>
								<div class="circle bluegloss3"><p>认证完成<br><span><?=$k->modify_date?></span></p></div>
							<?}?>
							<img src="/application/views/images/mypage/icon_arrow01.png" alt="arrow" class="arrow1">
							<img src="/application/views/images/mypage/icon_arrow01.png" alt="arrow" class="arrow2">
							<img src="/application/views/images/mypage/icon_arrow01.png" alt="arrow" class="arrow3">
						</div><!-- processWrap end -->
					<?if($k->certicifi_type_code == "0004"){?>
						<!-- bootstrap alert dismissing -->
						<div class="alert alert-warning alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<strong>原因：</strong><?=$k->excuse?>
						</div>
					</div><!-- guideProcess end -->
					<?}?>


						<div id="guideData">
							<p class="sub_title">个人身份验证资料</p>
							<div class="dataView">
							<?foreach($profileCnt as $v){?>
								<p>完成度 : <?=$v->cnt?>%</p><a href="/index.php/mypage/myPage_M/mypublic?userNum=<?=$this->session->userdata['num']?>" class="btn btn-default">前往个人页面编辑个人资料</a>
								<input type='hidden' id='hiddenPer' name='hiddenPer' value='<?=$v->cnt?>'>
							<?}?>

								<!--p>SNS 연동 : 미완료</p><span class="btn btn-info" id="snsModify">연동하러 가기</span-->
							</div>
							<?if($k->certicifi_type_code == "0004"){?>
								<span class="btn btn-info" id="request" onclick="InsertGuide()">申请认证</span>
							<?}?>
						</div><!-- guideData end -->
						<?if($k->certicifi_type_code == "0001"){?>
					</div>
				</div><!-- guideRequestWrapinner End -->
				<?if(count($pgGuide) == 0){?>
				<div class="guideRequestWrapinner mb40">
				<div class="guidePro">
					<div class="processWrap">
						<p class="sub_title">专业微导游认证</p>

						<div class="circle bluegloss3" style="margin-left: 50px;"><p>申请接受中</p></div>
						<div class="circle whitegloss"><p>确认中</p></div>
						<div class="circle whitegloss"><p>资料不足<br><span></span></p></div>
						<div class="circle whitegloss"><p>认证完成<br><span></span></p></div>
						<img src="/application/views/images/mypage/icon_arrow01.png" alt="arrow" class="arrow1">
						<img src="/application/views/images/mypage/icon_arrow01.png" alt="arrow" class="arrow2">
						<img src="/application/views/images/mypage/icon_arrow01.png" alt="arrow" class="arrow3">
					</div><!-- processWrap end -->

					<!-- bootstrap alert dismissing -->
					<div class="alert alert-warning alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<strong>原因：</strong>所需资料未填妥。
					</div>
				</div><!-- guidePro end -->

				<form name="frmPGCertification" id="frmPGCertification" method='post' enctype="multipart/form-data" action="/index.php/mypage/myPage_M/pgCertification">
				<div class="picUpload" id='picUpload' name='picUpload'>
					<img src="/application/views/images/mypage/1394446070_firefox.png">
					<span class="glyphicon glyphicon-plus plus"></span>
				</div>
				<input type='submit' class="btn btn-info" id="Registration" name="Registration" value="申请认证">

				<div class="" id='addDiv'>
					<input type='hidden' name="hiddenDivId" id="hiddenDivId" class="form-control" value="addDiv">
				</div>

				<div class="file-upload3">
					<label for="inputImage" class="file-uploadLabel"><!-- <span class="glyphicon  glyphicon-plus" aria-hidden="true"></span> --></label>
					<input type="file" class="" id="inputProguide" name="inputProguide" data-icon="false" onchange="imgChang();">

					<input type="hidden" class="form-control2 text" id="hiddenImagePath"  name="hiddenImagePath" value="">
					<input type="hidden" class="form-control2 text" id="hiddenMode"  name="hiddenMode" value="">
				</div>
				</form>
			</div><!-- guideRequestWrap end -->
			<?}else{
				foreach($pgGuide as $j){?>
				<div class="guideRequestWrapinner mb40">
				<div class="guidePro">
					<div class="processWrap">
						<p class="sub_title">专业微导游认证</p>

						<div class="circle bluegloss3" style="margin-left: 50px;"><p>申请接受中</p></div>
							<?if($j->certicifi_type_code == "0005"){?>
								<div class="circle bluegloss3"><p>确认中</p></div>
								<div class="circle whitegloss"><p>资料不足<br><span></span></p></div>
								<div class="circle whitegloss"><p>认证完成<br><span></span></p></div>
							<?}?>

							<?if($j->certicifi_type_code == "0004"){?>
								<div class="circle bluegloss3"><p>确认中</p></div>
								<div class="circle redgloss3"><p>资料不足<br><span><?=$k->modify_date?></span></p></div>
								<div class="circle whitegloss"><p>认证完成<br><span></span></p></div>
							<?}?>

							<?if($j->certicifi_type_code == "0001"){?>
								<div class="circle bluegloss3"><p>确认中</p></div>
								<div class="circle bluegloss3"><p>资料不足<br><span><?=$k->modify_date?></span></p></div>
								<div class="circle bluegloss3"><p>认证完成<br><span><?=$k->modify_date?></span></p></div>
							<?}?>
							<img src="/application/views/images/mypage/icon_arrow01.png" alt="arrow" class="arrow1">
							<img src="/application/views/images/mypage/icon_arrow01.png" alt="arrow" class="arrow2">
							<img src="/application/views/images/mypage/icon_arrow01.png" alt="arrow" class="arrow3">
						</div><!-- processWrap end -->
					<?if($j->certicifi_type_code == "0004"){?>
						<!-- bootstrap alert dismissing -->
						<div class="alert alert-warning alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<strong>原因：</strong><?=$k->excuse?>
						</div>
					</div><!-- guideProcess end -->
					<?}?>

				<form name="frmPGCertification" id="frmPGCertification" method='post' enctype="multipart/form-data" action="/index.php/mypage/myPage_M/pgCertification">
				<div class="picUpload" id='picUpload' name='picUpload'>
					<img src="<?=$j->img_path?>">
					<span class="glyphicon glyphicon-plus plus"></span>
				</div>
				<?if($j->certicifi_type_code == "0004"){?>
				<input type='submit' class="btn btn-info" id="Registration" name="Registration" value="申请认证">
				<?}?>
				<div class="" id='addDiv'>
					<input type='hidden' name="hiddenDivId" id="hiddenDivId" class="form-control" value="addDiv">
				</div>

				<div class="file-upload3">
					<label for="inputImage" class="file-uploadLabel"><!-- <span class="glyphicon  glyphicon-plus" aria-hidden="true"></span> --></label>
					<input type="file" class="" id="inputProguide" name="inputProguide" data-icon="false" onchange="imgChang();">

					<input type="hidden" class="form-control2 text" id="hiddenImagePath"  name="hiddenImagePath" value="">
					<input type="hidden" class="form-control2 text" id="hiddenMode"  name="hiddenMode" value="">
				</div>
				</form>
			</div><!-- guideRequestWrap end -->
			<?}
			}?>
			</div>
			<?}?>
		</div><!-- profileWrap1 -->
<?}
}?>

<div id='test'></div>