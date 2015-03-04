		<div class="profileWrap1">
			<div class="title2">
				<div class="underline">微旅程管理</div>
			</div>  <!-- 라인 들어가는 타이틀 city부분 복제 -->


			<div class="pmWrap">
				<a href="/index.php/City/country/productUpload" class="btn btn-warning product-upload" id='productUpload' name='productUpload'><span class="glyphicon glyphicon-pencil"></span>  上传旅游信息</a>
				<div class="tabbable">
					<ul class="nav nav-tabs">
						<li role="presentation" class="active" id="nav-tab1" onclick="sales()"><a href="#nav-tab1" data-toggle="tab">发放中</a></li>
						<li role="presentation" id="nav-tab2" onclick="registring()"><a href="#nav-tab2" data-toggle="tab">登录中</a></li>
						<li role="presentation" id="nav-tab3" onclick="stop()"><a href="#nav-tab3"data-toggle="tab">终止发放</a></li>
					</ul>
					<div id="product_tab">
						<?
							$data['salesProduct'] =$this->myModify->mySalesList($this->session->userdata['num'],'0001');
							$this -> load ->view('/mypage/m_guide2_tab1', $data);
						?><!-- Tab영역 불러오기 -->
						<?// $this -> load ->view('/mypage/m_guide2_tab2'); ?><!-- Tab영역 불러오기 -->
						<?// $this -> load ->view('/mypage/m_guide2_tab3'); ?><!-- Tab영역 불러오기 -->
					</div>
				</div>

			</div><!-- pmWrap 끝 -->
		</div><!-- profileWrap1 -->
