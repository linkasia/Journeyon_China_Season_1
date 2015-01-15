		<div class="profileWrap1">
			<img src="/application/views/images/mypage/img_guide1.png" alt="guide_image">
				<div class="guideimgBand">
					<span class="guide_txt">Local Guide가 되보세요~?</span>
					<span class="guide_next">
					<span class="glyphicon glyphicon-chevron-right"></span>  로컬 가이드 알아보러가기</span>
				</div>
			<div class="title1">
				<div class="underline">基本信息</div>
			</div>  <!-- 라인 들어가는 타이틀 city부분 복제 -->
			
			<div id="guideRequestWrap">
				<div class="guideProcess">
					<div class="processWrap">
						<p class="sub_title">Identify Verification Process</p>
						<div class="circle whitegloss" style="margin-left: 60px;"><p>접수중</p></div>
						<div class="circle whitegloss"><p>심사중</p></div>
						<div class="circle whitegloss"><p>반려<br><span>2014-12-21</span></p></div>
						<div class="circle whitegloss"><p>인증완료<br><span>2014-12-21</span></p></div>
						<img src="/application/views/images/mypage/icon_arrow01.png" alt="arrow" class="arrow1">
						<img src="/application/views/images/mypage/icon_arrow01.png" alt="arrow" class="arrow2">
						<img src="/application/views/images/mypage/icon_arrow01.png" alt="arrow" class="arrow3">
					</div><!-- processWrap end -->

					<!-- bootstrap alert dismissing -->
					<div class="alert alert-warning alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<strong>Warning!</strong> 반려일시 반려 사유가 나타납니다.
					</div>
				</div><!-- guideProcess end -->

				<hr>

				<div id="guideData">
					<p class="sub_title">Identify Verification Data</p>
					<div class="dataView">
						<p>Profile 작성 : 70%</p><span class="btn btn-info" id="profileModify">작성하러 가기</span>

						<p>SNS 연동 : 미완료</p><span class="btn btn-info" id="snsModify">연동하러 가기</span>
					</div>
					<span class="btn btn-primary" id="request">신청하기</span>
				</div><!-- guideData end -->

				<hr>

				<div class="guidePro">
					<div class="processWrap">
						<p class="sub_title">Pro Guide Card</p>
						<div class="circle whitegloss" style="margin-left: 60px;"><p>접수중</p></div>
						<div class="circle whitegloss"><p>심사중</p></div>
						<div class="circle whitegloss"><p>반려<br><span>2014-12-21</span></p></div>
						<div class="circle whitegloss"><p>등록 완료<br><span>2014-12-21</span></p></div>
						<img src="/application/views/images/mypage/icon_arrow01.png" alt="arrow" class="arrow1">
						<img src="/application/views/images/mypage/icon_arrow01.png" alt="arrow" class="arrow2">
						<img src="/application/views/images/mypage/icon_arrow01.png" alt="arrow" class="arrow3">
					</div><!-- processWrap end -->

					<!-- bootstrap alert dismissing -->
					<div class="alert alert-warning alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<strong>Warning!</strong> 반려일 시 반려 사유가 나옵니다.
					</div>

				</div><!-- guidePro end -->

				<div class="picUpload" id='addDiv' data-toggle="modal" data-target="#myModal6" id='#myModal6' name='#myModal6'>
					<img src="">
					<span class="glyphicon glyphicon-plus plus"></span>
				</div>
				<button class="btn btn-primary" id="Registration" name="Registration">등록하기</button>


				<div class="" id='addDiv'>
					<input type='hidden' name="hiddenDivId" id="hiddenDivId" class="form-control" value="addDiv">
				</div>
				<form name="imgUploadfrm" id="imgUploadfrm" method='post' enctype="multipart/form-data" action="/index.php/city/country/imgUpload">
				<input type="hidden" id="hiddenProductNum" name="hiddenProductNum" value="" >

				<!-- 위에 사진을 누르면 여기서부터 overview가 시작됨 data-toggle 과 id로 연동 작동 -->
				<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog2">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
								<h4 class="modal-title" id="myModalLabel">Picture Upload</h4>
							</div><!-- modal-header 닫힘 -->

							<div class="modal-body2">
								<input type="file" class="filestyle" id="fileUpload" name="fileUpload" data-icon="false">
								<p class="txt_blue captionTitle">Picture Caption - Please introduce your picture</p>
								<input type='hidden' name="hiddenId" id="hiddenId" class="form-control" value="">
								<input type='text' name="pictureTitle" id="pictureTitle" class="form-control">
								<textarea name="pictureCaption" id="pictureCaption" rows="3"></textarea>
							</div><!-- modal-body 닫힘 -->

							<div class="modal-footer">
								<button type="submit" class="btn btn-info" id="imgUpload" name="imgUpload">Upload</button>
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							</div><!-- modal-footer 닫힘 -->

						</div><!-- modal-content 닫힘 -->
					</div><!-- modal-dialog 닫힘 -->
				</div><!-- modal fade Overveiw 끝 -->
				</form>

			</div><!-- guideRequestWrap end -->
		</div><!-- profileWrap1 -->


