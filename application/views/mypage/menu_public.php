<div id="mypublicWrap">

	<!-- 왼쪽 프로필 사진 영역 -->
	<aside id="leftAside">
		<div class="profileImgDiv">
			<div class="bandDiv">
				<span>Jeon Hyo Sung</span>
			</div>
			<img src="/application/views/images/main/profile02.jpg" alt="profile" class="profileImg" id="profileImg">
		</div>
		<div class="profileTxt">
			<p>From Korea</p>
			<p>V certifi : Yes</p>
			<p>Guide active : Yes</p>
			<p>Member since 2014</p>
		</div>
	</aside>



	<!-- 여기서부터 오른쪽 박스 -->
	<form name="profileUploadfrm" id="profileUploadfrm" method='post' enctype="multipart/form-data" action="/index.php/mypage/mypage_M/profileModify">
	<div id="rightDiv">
		<div id="introduceSelf">
			<p class="headline">Introduce Your Self</p>
			<p class="subheadline">This is pre-chat with your members</p>
			<!-- <button class="btn btn-primary" id="editProfile">Edit your profile</button> -->
		</div>
		<div id="profileQuestion">
			<button class="btn btn-info" id="saveProfile">Save</button>
			<button class="btn btn-warning" id="cancelSave">Cancel</button>
			<div class="profilepicAdd" id="profilepicAdd">
				<span class="glyphicon glyphicon-plus plus"></span>
				<img src="/application/views/images/main/profile02.jpg" alt="profile" class="uploadImg" id="profileImg">
			</div>
			<div class="name1">
				<div class="leftSection">
					<p class="rightAlign">What is your Name?</p>
				</div>
				<div class="rightSection">
						<input type="text" class="form-control2 text" id="inputName"  name="inputName">
				</div>
			</div>

			<div class="gender2">
				<div class="leftSection"><p class="rightAlign">What is your Gender?</p></div>
				<div class="rightSection">
					<!-- <input type="text" class="form-control2" id="inputGender"> -->
					<div class="male">
						<label>
							<input type="radio" name="optionsRadios1" id="optionsRadios1" value="0001" onclick="radioMaleChang()" checked> Male
						</label>
					</div>
					<div class="female">
						<label>
							<input type="radio" name="optionsRadios2" id="optionsRadios2" value="0002" onclick="radioFemaleChang()">	Female
						</label>
					</div>
					<input type="hidden" id="hiddenGerder"  name="hiddenGerder">

				</div><!-- gender2 end -->
			</div>
			<div class="birthday3">
				<div class="leftSection"><p class="rightAlign">What is your Birthday?</p></div>
				<div class="rightSection">
					<label for="birth"></label>
					<input type="date" value="1985-01-01" class="form-control2 text" id="birth" name="birth">
				</div>
			</div>

			<div class="live4">
				<div class="leftSection"><p class="rightAlign">What is your country?</p></div>
				<div class="rightSection">
					<select class="form-control" id="inputCountry" name="inputCountry" onChange="comboChange()">
						<option value="">--Select--</option>
						<?foreach($countryList as $v){?>
							<option value="<?=$v->class?>,<?=$v->CODE?>"><?=$v->code_nm?></option>
						<?}?>
					</select>
					<input type="hidden" id="hiddenClass"  name="hiddenClass">
					<input type="hidden" id="hiddenCode"  name="hiddenCode">
				</div>
			</div>

			<div class="live5">
				<div class="leftSection"><p class="rightAlign">Now, where do you live?</p></div>
				<div class="rightSection" id="selectCtiy" name="selectCtiy">
					<?
						$data="";
						$this->load->view("/contents/comboCity",$data);?>
				</div>
			</div>

			<div class="city5">
				<div class="leftSection"><p class="rightAlign">Since, How long do you live in that City?</p></div>
				<div class="rightSection"><input type="text" class="form-control2 text" id="howlongCity"  name="howlongCity"></div>
			</div>
			<div class="occupation6">
				<div class="leftSection"><p class="rightAlign">What is your Occupation</p></div>
				<div class="rightSection"><input type="text" class="form-control2 text" id="inputOccupation" name="inputOccupation"></div>
			</div>
			<div class="detail8">
				<div class="leftSection"><p class="rightAlign">Would you tell me more detail about your occupatin active or education active?</p></div>
				<div class="rightSection"><textarea class="form-control2 text" id="inputJobDetail" name="inputJobDetail"></textarea></div>
			</div>
			<div class="education7">
				<div class="leftSection"><p class="rightAlign">Education</p></div>
				<div class="rightSection"><input type="text" class="form-control2 text" id="inputEducation" name=id="inputEducation"></div>
			</div>
			<div class="fluent9">
				<div class="leftSection"><p class="rightAlign">What is your Fluent in</p></div>
				<div class="rightSection">
					<select class="form-control languageSelect" id="Language1" name="Language1">
					<?foreach($langList as $v){?>
						<option value="<?=$v->code?>"><?=$v->code_nm?></option>
					<?}?>
					</select>
					<select class="form-control languageSelect" id="Language2"  name="Language2">
					<?foreach($learnList as $v){?>
						<option value="<?=$v->code?>"><?=$v->code_nm?></option>
					<?}?>>
					</select>
					<select class="form-control languageSelect" id="Language3"  name="Language3">
						<?foreach($langList as $v){?>
						<option value="<?=$v->code?>"><?=$v->code_nm?></option>
					<?}?>
					</select>
					<select class="form-control languageSelect" id="Language4"  name="Language4">
						<?foreach($learnList as $v){?>
						<option value="<?=$v->code?>"><?=$v->code_nm?></option>
					<?}?>>
					</select>
					<select class="form-control languageSelect" id="Language5"  name="Language5">
						<?foreach($langList as $v){?>
						<option value="<?=$v->code?>"><?=$v->code_nm?></option>
					<?}?>
					</select>
					<select class="form-control languageSelect" id="Language6"  name="Language6">
						<?foreach($learnList as $v){?>
						<option value="<?=$v->code?>"><?=$v->code_nm?></option>
					<?}?>>
					</select>
				</div>
			</div>

			<div class="interesting11">
				<div class="leftSection"><p class="rightAlign">What is your interesting in thes days?</p></div>
				<div class="rightSection"><textarea class="form-control" name="inputInteresting" id="inputInteresting" cols="30" rows="10"></textarea></div>
			</div>
			<div class="keyword12">
				<div class="leftSection"><p class="rightAlign">Please let me know you keyword</p></div>
				<div class="rightSection">
					<select class="form-control languageSelect keyword" id="keyword1" name="keyword1">
						<option value=""></option>
					</select>
					<select class="form-control languageSelect keyword" id="keyword2" name="keyword2">
						<option value=""></option>
					</select>
					<select class="form-control languageSelect keyword" id="keyword3" name="keyword3">
						<option value=""></option>
					</select>
				</div>
			</div>
			<button class="btn btn-info" id="saveProfileBottom">Save</button>
			<button class="btn btn-warning" id="cancelSaveBottom">Cancel</button>
		</div>
	</div>
</div><!-- mypublicWrap -->
</form>

<script type="text/javascript">

function comboChange(){
	var _countrySelectClass = $('#inputCountry').val().substring(0,4);
	var _code = $('#inputCountry').val().substring(5,9);
	document.getElementById('hiddenClass').value = _countrySelectClass;
	document.getElementById('hiddenCode').value = _code;

	$.ajax({
		type:"GET" ,
		dataType:"text",
		contentType:"application/x-www-form-urlencoded; charset=UTF-8",
		data:{ countrySelectClass: _countrySelectClass, code:_code},
		url:"/index.php/city/country/changeCity",
		success: function (data){
			document.getElementById('selectCtiy').innerHTML =data;
		}
	});
}

function radioMaleChang(){
	if( $('#optionsRadios1').is(":checked") == true){
		$('#optionsRadios2').attr("checked",false);
		document.getElementById('hiddenGerder').value= $('#optionsRadios1').val();
	}
}

function radioFemaleChang(){
	if( $('#optionsRadios2').is(":checked") == true){
		$('#optionsRadios1').attr("checked",false);
		document.getElementById('hiddenGerder').value= $('#optionsRadios2').val();
	}
}

$('#profileUploadfrm').ajaxForm();

$(function(){
		$('#profileUploadfrm').ajaxForm({
			success: function(data){
				alert(data);
			}
		});
	});


</script>