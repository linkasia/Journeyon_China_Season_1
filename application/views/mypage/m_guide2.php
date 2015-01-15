		<div class="profileWrap1">
			<img src="/application/views/images/mypage/img_guide1.png" alt="guide_image">
			<div class="guideimgBand">
				<span class="guide_txt" id="guide_txt" name="guide_txt">James님 당신의 경험을 등록해보세요~~~!</span>
				<span class="guide_next" id="guide_next" name="guide_next">
					<span class="glyphicon glyphicon-chevron-right"></span>  로컬 가이드 알아보러가기
				</span>
			</div>

			<div class="title2">
				<div class="underline">Product Management</div>
			</div>  <!-- 라인 들어가는 타이틀 city부분 복제 -->


			<div class="pmWrap">
				<a href="/index.php/City/country/productUpload" class="btn btn-info product-upload" id='productUpload' name='productUpload'>Guide 상품 올리러가기</a>
				<ul class="nav nav-tabs">
				  <li role="presentation" class="active" id="nav-tab1"><a href="">판매중</a></li>
				  <li role="presentation"id="nav-tab2"><a href="">등록중</a></li>
				  <li role="presentation" id="nav-tab3"><a href="">판매중지</a></li>
				</ul>
				
				<?php $this -> load ->view('/mypage/m_guide2_tab1'); ?><!-- Tab영역 불러오기 -->
				<?php $this -> load ->view('/mypage/m_guide2_tab2'); ?><!-- Tab영역 불러오기 -->				
				<?php $this -> load ->view('/mypage/m_guide2_tab3'); ?><!-- Tab영역 불러오기 -->	

			</div><!-- pmWrap 끝 -->
		</div><!-- profileWrap1 -->
