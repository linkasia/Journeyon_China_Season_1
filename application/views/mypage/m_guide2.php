		<div class="profileWrap1">
			<img src="/application/views/images/mypage/img_guide1.png" alt="guide_image">
			<div class="guideimgBand">
				<span class="guide_txt" id="guide_txt" name="guide_txt">分享您的经验和旅游心得</span>
				<span class="guide_next" id="guide_next" name="guide_next">
					<span class="glyphicon glyphicon-chevron-right"></span>  了解更多关于成为导游
				</span>
			</div>

			<div class="title2">
				<div class="underline">旅游信息管理</div>
			</div>  <!-- 라인 들어가는 타이틀 city부분 복제 -->


			<div class="pmWrap">
				<a href="/index.php/City/country/productUpload" class="btn btn-info product-upload" id='productUpload' name='productUpload'>上传旅游信息</a>
				<ul class="nav nav-tabs">
					<li role="presentation" class="active" id="nav-tab1" onclick="sales()"><a>发放中</a></li>
					<li role="presentation"id="nav-tab2" onclick="registring()"><a>登录中</a></li>
					<li role="presentation" id="nav-tab3" onclick="stop()"><a>终止发放</a></li>
				</ul>
				<div id="product_tab">
					<?
						$data['salesProduct'] =$this->myModify->mySalesList($this->session->userdata['num'],'0001');
						$this -> load ->view('/mypage/m_guide2_tab1', $data);
					?><!-- Tab영역 불러오기 -->
					<?// $this -> load ->view('/mypage/m_guide2_tab2'); ?><!-- Tab영역 불러오기 -->
					<?// $this -> load ->view('/mypage/m_guide2_tab3'); ?><!-- Tab영역 불러오기 -->
				</div>
			</div><!-- pmWrap 끝 -->
		</div><!-- profileWrap1 -->
