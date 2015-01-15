		<div class="profileWrap1">
			<?php $this -> load ->view('/mypage/serviceWindow2'); ?>
			
			<div class="title1">
				<div class="underline">취소관리</div>
			</div>  <!-- 라인 들어가는 타이틀 city부분 복제 -->
			<div class="btn-group sortGroup" role="group" aria-label="" id="cancelsortGroup1">
				<button type="button" class="btn btn-info" id="cancelsort1" name="cancelsort1">전체보기</span></button>
				<button type="button" class="btn btn-info" id="cancelsort2" name="cancelsort2">구매자 취소<span id="sortNumber1" name="sortNumber1">(40)</span></button>
				<button type="button" class="btn btn-info" id="cancelsort3" name="cancelsort3">판매자 취소<span id="sortNumber2" name="sortNumber2">(20)</span></button>
			</div>
			<div class="btn-group sortGroup" role="group" aria-label="" id="cancelsortGroup2">
				<button type="button" class="btn btn-info" id="cancelsort1" name="cancelsort1">최근정렬</button>
				<button type="button" class="btn btn-info" id="cancelsort1" name="cancelsort2">과거정렬</button>
				<button type="button" class="btn btn-info" id="cancelsort1" name="cancelsort3">기간선택</button>
			</div>

			<!---------------- 상품 반복시작 ------------------->
			<div class="cancelList">
				<input type="checkbox" id="cancelCheckbox" name="cancelCheckbox">
				<div class="titlediv">
					<span class="salestitle" id="salestitle" name="salestitle">一座古典与时尚融合的非常好的城市。最为惊喜的各大博物馆，一座古典与时尚融合的非常好的城市。最为惊喜的各大博物馆最为惊喜的各大博物馆最为惊喜的各大博物馆</span>
				</div><!-- titlediv 닫음 -->
				<div class="banddiv whitegloss">
					<span class="bandtitle" id="bandtitle" name="bandtitle">취소일자 : 2014-5-25</span>
					<span class="bandtitle2" id="bandtitle2" name="bandtitle2">취소자 : 구매자</span>
					<span class="bandtitle3" id="bandtitle3" name="bandtitle3">취소사유 : 구매변심</span>
					<img src="/application/views/images/main/profile02.jpg" alt="profile_image" class="img-circle profile_image">
					<img src="/application/views/images/flag/01korea.png" alt="flag_image" class="flag_image">
					<img src="/application/views/images/main/img22_vmark.PNG" alt="vmark_image" class="vmark_image">
				</div><!-- banddiv 닫음 -->
				<textarea class="form-control" name="cancelReason" id="cancelReason"></textarea>
				<div id="statusText"><p>협의취소</p></div>
			</div><!-- cancelList 닫음, 이 박스가 반복됨-->

			<!---------------- 상품 반복시작 ------------------->
			<div class="cancelList">
				<input type="checkbox" id="cancelCheckbox" name="cancelCheckbox">
				<div class="titlediv">
					<span class="salestitle" id="salestitle" name="salestitle">一座古典与时尚融合的非常好的城市。最为惊喜的各大博物馆，一座古典与时尚融合的非常好的城市。最为惊喜的各大博物馆最为惊喜的各大博物馆最为惊喜的各大博物馆</span>
				</div><!-- titlediv 닫음 -->
				<div class="banddiv whitegloss">
					<span class="bandtitle" id="bandtitle" name="bandtitle">취소일자 : 2014-5-25</span>
					<span class="bandtitle2" id="bandtitle2" name="bandtitle2">취소자 : 구매자</span>
					<span class="bandtitle3" id="bandtitle3" name="bandtitle3">취소사유 : 구매변심</span>
					<img src="/application/views/images/main/profile03.jpg" alt="profile_image" class="img-circle profile_image">
					<img src="/application/views/images/flag/01korea.png" alt="flag_image" class="flag_image">
					<img src="/application/views/images/main/img22_vmark.PNG" alt="vmark_image" class="vmark_image">
				</div><!-- banddiv 닫음 -->
				<textarea class="form-control" name="cancelReason" id="cancelReason"></textarea>
				<div id="statusText"><p>일방취소</p></div>
			</div><!-- cancelList 닫음, 이 박스가 반복됨-->

			<!---------------- 상품 반복시작 ------------------->
			<div class="cancelList">
				<input type="checkbox" id="cancelCheckbox" name="cancelCheckbox">
				<div class="titlediv">
					<span class="salestitle" id="salestitle" name="salestitle">一座古典与时尚融合的非常好的城市。最为惊喜的各大博物馆，一座古典与时尚融合的非常好的城市。最为惊喜的各大博物馆最为惊喜的各大博物馆最为惊喜的各大博物馆</span>
				</div><!-- titlediv 닫음 -->
				<div class="banddiv whitegloss">
					<span class="bandtitle" id="bandtitle" name="bandtitle">취소일자 : 2014-5-25</span>
					<span class="bandtitle2" id="bandtitle2" name="bandtitle2">취소자 : 구매자</span>
					<span class="bandtitle3" id="bandtitle3" name="bandtitle3">취소사유 : 판매변경</span>
					<img src="/application/views/images/main/profile04.jpg" alt="profile_image" class="img-circle profile_image">
					<img src="/application/views/images/flag/01korea.png" alt="flag_image" class="flag_image">
					<img src="/application/views/images/main/img22_vmark.PNG" alt="vmark_image" class="vmark_image">
				</div><!-- banddiv 닫음 -->
				<textarea class="form-control" name="cancelReason" id="cancelReason"></textarea>
				<div id="statusText"><p>일방취소</p></div>
			</div><!-- cancelList 닫음, 이 박스가 반복됨-->

			<nav class="paginationNav">
				<ul class="pagination pagination-sm" id="pmPagination" name="pmPagination">
					<li>
						<a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a>
					</li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li>
					<a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a>
					</li>
				</ul>
			</nav>

			<button class="btn" id="allSelect" name="allSelect">전체선택</button>
			<button class="btn" id="deleteSelect" name="deleteSelect">선택삭제</button>

		</div><!-- profileWrap1 -->
