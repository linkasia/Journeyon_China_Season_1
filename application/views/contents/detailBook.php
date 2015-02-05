<?foreach($salesCity as $v){?>
<input type="hidden" class="form-control2" id="hiddenProduct" name="hiddenProduct" value="<?=$v->product_num?>">
<input type="hidden" class="form-control2" id="hiddenRegisterNum" name="hiddenRegisterNum" value="<?=$v->user_num?>">
<div id="detailBookWrap">
	<div class="titleDiv">
		<div class="titleimgDiv">
			<img src="<?=$v->img_path?>" class="titleImg" alt="" id="productTitleImg" name="productTitleImg">
		</div>
		<div class="productDiv">
			<div>
				<div class="productImg">
					<img src="<?=$v->face_img_path?>" alt="" class="profile_image img-circle" id="productProfile" name="productProfile">
					<img src="<?=$v->country_img?>" alt="nation_flagImage" class="flag_image" id="productFlag" name="productFlag">
					<?if($v->v_get_code == "0001"){?>
						<img src="/application/views/images/main/img22_vmark.png" alt="" class="vmark_image" id="vmark_image" name="vmark_image">
					<?}?>
					<span id="guideName" name="guideName"><?=$v->Name_cn_en?> 가이드</span>
				</div>
			</div>
			<p id="productTitle"><?=$v->title?></p><br>
			<div class="dateinputDiv">
				<p>여행 희망일</p>
				<input type="text" class="form-control2" id="startDate" name="startDate" value="<?=str_replace(" ","",$sDate)?>" readonly>
				<p>~</p>
				<input type="text" class="form-control2" id="endDate" name="endDate" value="<?=str_replace(" ","",$eDate)?>" readonly>
			</div>
		</div>
	</div>

	<div class="infoDiv1">
		<p>여행자 정보</p>
		<p>인원 수</p><input type="" class="form-control" id="personInput" name="personInput"><br>
		<?if($v->user_num == $loginUser){?>
		<p>금액</p><input type="" class="form-control" id="moneyInput" name="moneyInput" value='0'><span> 元</span><br>
		<?}else{?>
			<p>금액</p><input type="" class="form-control" id="moneyInput" name="moneyInput" value='' readonly><span> 元</span><br>
		<?}?>
		<p>휴대폰 정보<span class="s">예약 확정 후 가이드와 연락할 때 쓰일 예정입니다.</span></p>
		<select class="form-control" id="countryCode" name="countryCode">
			<?foreach($countryNum as $v){?>
				<option value="<?=$v->code?>"><?=$v->code_nm?> <?=$v->code_description?></option>
			<?}?>
		</select>
		<input type="text" class="form-control phoneInput" id="phoneInput" name="phoneInput">
	</div>
	<div class="infoDiv2">
		<p class="p">요청사항</p>
		<textarea class="form-control" name="" id="producttextArea" name="producttextArea" cols="30" rows="10"></textarea>
	</div>
<?}?>
	<!-- bootstrap alert dismissing -->
	<div class="alert alert-warning alert-dismissible" role="alert" id="infoDiv3">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<span class="glyphicon glyphicon-bullhorn"></span>  24시간 내에 가이드가 진행 가능 여부를 알려드립니다. 진행 가능할 경우 즉시 예약이 확정되며, 불가능할 경우 예약취소 및 환불됩니다.
	</div>
	<button id="productSave" name="productSave" class="btn btn-info" onclick="productSave()">저장하기</button>
</div>

<script type="text/javascript">
	//상품저장
	function productSave(){
		var _hiddenProduct =$('#hiddenProduct').val();
		var _hiddenRegisterNum =$('#hiddenRegisterNum').val();
		var _sDate = $('#startDate').val();
		var _eDate = $('#endDate').val();
		var _personInput =$('#personInput').val();
		var _countryCode =$('#countryCode').val();
		var _phoneInput =$('#phoneInput').val();
		var _producttextArea =$('#producttextArea').val();

		$.ajax({
			type:"POST" ,
			dataType:"text",
			contentType:"application/x-www-form-urlencoded; charset=UTF-8",
			data:{ hiddenProduct :_hiddenProduct, hiddenRegisterNum:_hiddenRegisterNum, sDate : _sDate, eDate:_eDate, personInput:_personInput, countryCode:_countryCode, phoneInput:_phoneInput, producttextArea:_producttextArea},
			url:"/index.php/city/country/insertBookingDate",
			success: function (data){
				location.href = "/index.php/mypage/myPage_M/myguest?mode=2";
			}
		});
	}
</script>