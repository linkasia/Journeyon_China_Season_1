<div id="mypublicWrap">
<form name="profileUploadfrm" id="profileUploadfrm" method='post' enctype="multipart/form-data" action="/index.php/mypage/mypage_M/profileModify">
	<?foreach($user as $v){?>
	<!-- 왼쪽 프로필 사진 영역 -->
	<aside id="leftAside">
		<div class="profileImgDiv">
			<div class="bandDiv">
				<span>Jeon Hyo Sung</span>
			</div>
			<img src="<?=$v->face_img_path?>" alt="profile" class="profileImg" id="leftProfileImg">
		</div>
		<div class="profileTxt">
			<p>来自 ________</p>
			<p>V认证 : 有</p> <!-- Yes（有）/ No (没有) -->
			<p>导游认证 : 没有</p>
			<p>加入年份 : 2004</p>
		</div>
	</aside>



	<!-- 여기서부터 오른쪽 박스 -->

	<div id="rightDiv">
		<div id="introduceSelf">
			<p class="headline">个人档案</p>
			<p class="subheadline">让其他使用者更了解你，请填上你的详细资料。</p>
			<!-- <button class="btn btn-primary" id="editProfile">Edit your profile</button> -->
		</div>

		<div id="profileQuestion">
			<button type="submit" class="btn btn-info" id="saveProfile" name="saveProfile">保存更改</button>
			<button class="btn btn-warning" id="cancelSave">取消</button>
			<div class="profilepicAdd" id="profilepicAdd">
				<span class="glyphicon glyphicon-plus plus"></span>
				<img src="<?=$v->face_img_path?>" alt="" class="uploadImg" id="profileImg">
			</div>

			<div class="name1">
				<div class="leftSection">
					<p class="rightAlign">What is your Name?</p>
				</div>
				<div class="rightSection">
<<<<<<< HEAD
						<input type="file" class="form-control2 text" id="inputImage"  name="inputImage" value="<?=$v->face_img_path?>" placeholder="选择">
=======
						<input type="file" class="form-control2 text" id="inputImage"  name="inputImage">
						<input type="text" class="form-control2 text" id="hiddenImagePath"  name="hiddenImagePath" value="<?=$v->face_img_path?>">
>>>>>>> origin/Development
				</div>
			</div>

			<div class="name1">
				<div class="leftSection">
					<p class="rightAlign">What is your Name?</p>
				</div>
				<div class="rightSection">
						<input type="text" class="form-control2 text" id="inputName"  name="inputName" value="<?=$v->Name_cn_en?>">
				</div>
			</div>

			<div class="gender2">
				<div class="leftSection"><p class="rightAlign">What is your Gender?</p></div>
				<div class="rightSection">
					<!-- <input type="text" class="form-control2" id="inputGender"> -->
					<div class="male">
						<label>
							<input type="radio" name="optionsRadios1" id="optionsRadios1" value="0001" onclick="radioMaleChang()" <?if($v->gender_code == "0001"){?>checked <?}?>> Male
						</label>
					</div>
					<div class="female">
						<label>
							<input type="radio" name="optionsRadios2" id="optionsRadios2" value="0002" onclick="radioFemaleChang()" <?if($v->gender_code == "0002"){?>checked <?}?>>	Female
						</label>
					</div>
					<input type="hidden" id="hiddenGerder"  name="hiddenGerder" value="0001">

				</div><!-- gender2 end -->
			</div>
			<div class="birthday3">
				<div class="leftSection"><p class="rightAlign">What is your Birthday?</p></div>
				<div class="rightSection">
					<label for="birth"></label>
					<input type="date" class="form-control2 text" id="birth" name="birth" value="<?=$v->birthday?>">
				</div>
			</div>

			<div class="live4">
				<div class="leftSection"><p class="rightAlign">What is your country?</p></div>
				<div class="rightSection">

					<select class="form-control" id="inputCountry" name="inputCountry" onChange="comboChange()">
						<option value="">--Select--</option>
						<?foreach($countryList as $k){?>
							<option value="<?=$k->class?>,<?=$k->CODE?>" <? if( $v->live_area_code.",".$v->live_country_code == $k->class.",".$k->CODE ) {?> selected <?}?>  ><?=$k->code_nm?></option>
						<?}?>
					</select>
					<input type="hidden" id="hiddenClass"  name="hiddenClass" value = "<?=$v->live_area_code?>">
					<input type="hidden" id="hiddenCode"  name="hiddenCode" value = "<?=$v->live_country_code?>">
				</div>
			</div>

			<div class="live5">
				<div class="leftSection"><p class="rightAlign">Now, where do you live?</p></div>
				<div class="rightSection" id="choiceCity" name="choiceCity">
					<?$city = $this->main_i->choiceCityList($v->live_area_code,$v->live_country_code); ?>
						<select class="form-control" data-style="" id="selectCity" name="selectCity">
							<option value = "">-- Select --</option>
							<?foreach($city as $k){?>
								<option value = "<?=$k->code?>"  <?if($k->code == $v->live_city_code){?> selected <?}?>><?=$k->code_nm?></option>
							<?}?>
						</select>
				</div>
			</div>

			<div class="city5">
				<div class="leftSection"><p class="rightAlign">Since, How long do you live in that City?</p></div>
				<div class="rightSection"><input type="text" class="form-control2 text" id="howlongCity"  name="howlongCity" value="<?=$v->live_country_year?>"></div>
			</div>
			<div class="phone13">
				<div class="leftSection"><p class="rightAlign">Phone Number</p></div>
				<div class="rightSection">
					<input type="text" class="form-control2 text" id="countryNumber"  name="countryNumber" placeholder="Country Number" value="<?=$v->phone_num_country?>">
					<input type="text" class="form-control2 text" id="phoneNumber"  name="phoneNumber" placeholder="Phone Number" value="<?=$v->phone_num_user?>">
				</div>
			</div>

			<div class="occupation6">
				<div class="leftSection"><p class="rightAlign">What is your Occupation</p></div>
				<div class="rightSection"><input type="text" class="form-control2 text" id="inputOccupation" name="inputOccupation" value="<?=$v->job?>"></div>
			</div>

			<div class="detail8">
				<div class="leftSection"><p class="rightAlign">Would you tell me more detail about your occupatin active or education active?</p></div>
				<div class="rightSection"><textarea class="form-control2 text" id="inputJobDetail" name="inputJobDetail" ><?=$v->job_detail?></textarea></div>
			</div>
			<div class="education7">
				<div class="leftSection"><p class="rightAlign">Education</p></div>
				<div class="rightSection"><input type="text" class="form-control2 text" id="textEducation"  name="textEducation"  value="<?=$v->education?>"></div>
			</div>
			<div class="fluent9">
				<div class="leftSection"><p class="rightAlign">What is your Fluent in</p></div>
				<div class="rightSection">
					<select class="form-control languageSelect" id="Language1" name="Language1">
					<?foreach($langList as $k){?>
						<option value="<?=$k->code?>" <?if($k->code == $v->lang1_code){?> selected <?}?> ><?=$k->code_nm?></option>
					<?}?>
					</select>
					<select class="form-control languageSelect" id="Language2"  name="Language2">
					<?foreach($learnList as $k){?>
						<option value="<?=$k->code?>" <?if($k->code == $v->lang1_skill){?> selected <?}?> ><?=$k->code_nm?></option>
					<?}?>>
					</select>
					<select class="form-control languageSelect" id="Language3"  name="Language3">
						<?foreach($langList as $k){?>
						<option value="<?=$k->code?>" <?if($k->code == $v->lang2_code){?> selected <?}?> ><?=$k->code_nm?></option>
					<?}?>
					</select>
					<select class="form-control languageSelect" id="Language4"  name="Language4">
						<?foreach($learnList as $k){?>
						<option value="<?=$k->code?>" <?if($k->code == $v->lang2_skill){?> selected <?}?> ><?=$k->code_nm?></option>
					<?}?>>
					</select>
					<select class="form-control languageSelect" id="Language5"  name="Language5">
						<?foreach($langList as $k){?>
						<option value="<?=$k->code?>" <?if($k->code == $v->lang3_code){?> selected <?}?> ><?=$k->code_nm?></option>
					<?}?>
					</select>
					<select class="form-control languageSelect" id="Language6"  name="Language6">
						<?foreach($learnList as $k){?>
						<option value="<?=$k->code?>"  <?if($k->code == $v->lang3_skill){?> selected <?}?> ><?=$k->code_nm?></option>
					<?}?>>
					</select>
				</div>
			</div>

			<div class="interesting11">
				<div class="leftSection"><p class="rightAlign">What is your interesting in thes days?</p></div>
				<div class="rightSection"><textarea class="form-control" name="inputInteresting" id="inputInteresting" cols="30" rows="10"><?=$v->interesting1?></textarea></div>
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
			<div class="QQ14">
				<div class="leftSection"><p class="rightAlign">QQ ID</p></div>
				<div class="rightSection"><input type="text" class="form-control2 text" id="publicQQ" name="publicQQ" value="<?=$v->messenger_qq?>"></div>
			</div>
			<div class="Weixin15">
				<div class="leftSection"><p class="rightAlign">Weixing ID</p></div>
				<div class="rightSection"><input type="text" class="form-control2 text" id="publicWeixin" name="publicWeixin"  value="<?=$v->messenger_weixin?>"></div>
			</div>
			<button class="btn btn-info" id="saveProfileBottom">Save</button>
			<button class="btn btn-warning" id="cancelSaveBottom">Cancel</button>
		</div>
	</div>
</div><!-- mypublicWrap -->
<?}?>
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
			document.getElementById('choiceCity').innerHTML =data;
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


$(function(){

	$('#profileUploadfrm').ajaxForm();

	$(function(){
		$('#profileUploadfrm').ajaxForm({
			success: function(data){
				alert(data);
				//document.getElementById('test').innerHTML=data;
				if(data == "" || data ==null){
					alert("수정되었습니다.");
				}else{
					$("#profileImg").attr("src",data);
					$("#leftProfileImg").attr("src",data);
					$("#profileMenu").attr("src",data);
					alert("수정되었습니다.");
				}
			}
		});
	});

});

</script>