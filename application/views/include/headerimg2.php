<div id="header_wrap3">
	<div class="bgimgDiv2">
		<!-- <img src="/application/views/images/main/bg08.jpg" alt="" class="innerHeaderimg"> -->
		<!-- <img src="" alt="" id='bakGround' name='bakGround'> -->
		<div class="detailCityTitleCenterWrap">
			<div class="detailCityPostionDiv">

				<div class="detailCityProfile">
					<div class="divType1"><p>"中国人</p></div>
					<div class="divType2"><img src="" alt="" class="img-circle" id='productFace' name='productFace'><p><span  id='productName' name='productName'> </span></p></div>
					<div class="divType1">想介绍</div>
					<?if(@$this->session->userdata['logged_in'] == TRUE){
							if($this->session->userdata['email']!=null){?>
					<div class="divType3"><img src="<?=$this->session->userdata['face_img_path']?>" alt="" class="img-circle"><p><?=$this->session->userdata['Name_cn_en']?></p></div>
					<?}else{?>
					<div class="divType3"><img src="" alt="" class="img-circle"><p>Guest</p></div>
					<?}
				}?>
					<div class="divType4"><img src="" alt="" id='productCountry' name='productCountry'></div>
					<div class="divType1"><p><span  id='productArea' name='productArea'> </span></p></div>
				</div>

				<div class="detailCityType">
					<div class="divLine">
						<div class="divTypeTag">
							<div class="header_tag"><img src="/application/views/images/left_menu/icon33_local.png" alt="" id='productTheme1' name='productTheme1'><span  id='productThemeName1' name='productThemeName1'> </span> Local Experiance</div>
							<div class="header_tag"><img src="/application/views/images/left_menu/icon12_relaxation.PNG" alt="" id='productTheme2' name='productTheme2'><span  id='productThemeName2' name='productThemeName2'> </span>Relaxation</div>
							<div class="header_tag"><img src="/application/views/images/left_menu/icon13_romantic.PNG" alt="" id='productTheme3' name='productTheme3'><span  id='productThemeName3' name='productThemeName3'> </span>Romantic</div>
						</div>
					</div>

					<div class="divLine">
						<div class="divTypeTag">
							<div class="header_tag"><img src="/application/views/images/left_menu/icon22_couple.png" alt=""  id='productRecom1' name='productRecom1'><span  id='productRecomName1' name='productRecomName1'> </span> Couple</div>
							<div class="header_tag"><img src="/application/views/images/left_menu/icon24_friends.png" alt=""  id='productRecom2' name='productRecom2'><span  id='productRecomName2' name='productRecomName2'> </span> Friends</div>
						</div>
					</div>

				</div><!-- detailCityPostionDiv end -->
			</div><!-- detailCityTitleCenterWrap end -->
			<div class="detailCityTitle">
				<div class="divType6"><img src="/application/views/images/main/in1.png" alt=""></div>
				<div class="divTypeTitle"><p><span  id='productTitle' name='productTitle'> </span></p></div>
				<div class="divType6"><img src="/application/views/images/main/in2.png" alt=""></div>
			</div>
		</div>
	</div>
</div>

