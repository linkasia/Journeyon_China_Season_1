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
						<input type="text" class="form-control2 text" id="inputName">
				</div>
			</div>

			<div class="gender2">
				<div class="leftSection"><p class="rightAlign">What is your Gender?</p></div>
				<div class="rightSection">
					<!-- <input type="text" class="form-control2" id="inputGender"> -->
					<div class="male">
						<label>
							<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> Male
						</label>
					</div>
					<div class="female">
						<label>
							<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">	Female
						</label>
					</div>

				</div><!-- gender2 end -->			
			</div>
			<div class="birthday3">
				<div class="leftSection"><p class="rightAlign">What is your Birthday?</p></div>
				<div class="rightSection">
					<label for="birth"></label>
					<input type="date" value="1985-01-01" class="form-control2 text" id="birth">
				</div>			
			</div>
			<div class="live4">
				<div class="leftSection"><p class="rightAlign">Now, where do you live?</p></div>
				<div class="rightSection"><input type="text" class="form-control2 text" id="inputLive"></div>			
			</div>
			<div class="city5">
				<div class="leftSection"><p class="rightAlign">Since, How long do you live in that City?</p></div>
				<div class="rightSection"><input type="text" class="form-control2 text" id="inputCity"></div>			
			</div>
			<div class="occupation6">
				<div class="leftSection"><p class="rightAlign">What is your Occupation</p></div>
				<div class="rightSection"><input type="text" class="form-control2 text" id="inputEducation">	</div>			
			</div>
			<div class="education7">
				<div class="leftSection"><p class="rightAlign">Education</p></div>
				<div class="rightSection"><input type="text" class="form-control2 text" id="inputEducation"></div>			
			</div>
			<div class="detail8">
				<div class="leftSection"><p class="rightAlign">Would you tell me more detail about your occupatin active or education active?</p></div>
				<div class="rightSection"><textarea class="form-control2 text" id="inputDetail"></textarea></div>			
			</div>
			<div class="fluent9">
				<div class="leftSection"><p class="rightAlign">What is your Fluent in</p></div>
				<div class="rightSection">
					<input type="text" class="form-control2 text" id="inputFluent1">
					<input type="text" class="form-control2 text" id="inputFluent2">
					<input type="text" class="form-control2 text" id="inputFluent3">
	
				</div>			
			</div>
			<div class="learing10">
				<div class="leftSection"><p class="rightAlign">Language I’m Learing</p></div>
				<div class="rightSection">
					<input type="text" class="form-control2 text" id="inputLearing1">
					<input type="text" class="form-control2 text" id="inputLearing2">
					<input type="text" class="form-control2 text" id="inputLearing3">
				</div>
			</div>
			<div class="interesting11">
				<div class="leftSection"><p class="rightAlign">What is your interesting in thes days?</p></div>
				<div class="rightSection"><input type="text" class="form-control2 text" id="inputInteresting"></div>			
			</div>
			<div class="keyword12">
				<div class="leftSection"><p class="rightAlign">Please let me know you keyword</p></div>
				<div class="rightSection">
					<input type="text" class="form-control2 text" id="inputKeyword1">
					<input type="text" class="form-control2 text" id="inputKeyword2">
					<input type="text" class="form-control2 text" id="inputKeyword3">
				</div>			
			</div>
			<button class="btn btn-info" id="saveProfileBottom">Save</button>
			<button class="btn btn-warning" id="cancelSaveBottom">Cancel</button>
		</div>
	</div>
</div><!-- mypublicWrap -->

