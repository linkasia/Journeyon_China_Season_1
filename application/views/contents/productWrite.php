<div id="productWrapAll">
	<div class="productWrap">
		<div class="productDiv1">
			<p class="productTitle">国家 & 城市</p>
			<select class="selectpicker" data-style="btn-info" data-size="6" id="selectCountry">
				<option>China</option>
				<option>Ketchup</option>
				<option>Relish</option>
				<option>Tent</option>
				<option>Flashlight</option>
				<option>Toilet Paper</option>
				<option>Mustard</option>
				<option>Ketchup</option>
				<option>Relish</option>
				<option>Tent</option>
				<option>Flashlight</option>
				<option>Toilet Paper</option>
				<option>Mustard</option>
				<option>Ketchup</option>
				<option>Relish</option>
			</select>

			<select class="selectpicker" data-style="btn-info" id="selectCity">
				<option>Beijing</option>
				<option>Ketchup</option>
				<option>Relish</option>
				<option>Tent</option>
				<option>Flashlight</option>
				<option>Toilet Paper</option>
				<option>Mustard</option>
				<option>Ketchup</option>
				<option>Relish</option>
				<option>Tent</option>
				<option>Flashlight</option>
				<option>Toilet Paper</option>
				<option>Mustard</option>
				<option>Ketchup</option>
				<option>Relish</option>
			</select>
		</div><!-- Div1 end -->

		<div class="productDiv2">
			<p class="productTitle">个性题目 - <span>Please Introduce Unique travel plan what you have</span></p>
			<form>
				<div class="productTitleDiv">
					<input type="text" class="form-control2" id="productTitle" placeholder="Title">
				</div>
			</form>
		</div><!-- Div2 end -->

		<div class="productDiv3">
			<p class="productTitle">Picture</p>
			<div class="picUpload">
				<img src="/application/views/images/contents/pic2.jpg" alt="pic2" data-toggle="modal" data-target="#myModal5">
				<span class="glyphicon glyphicon-remove remove"></span>
			</div>

				<!-- 위에 사진을 누르면 여기서부터 overview가 시작됨 data-toggle 과 id로 연동 작동 -->
				<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog2">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
								<h4 class="modal-title" id="myModalLabel">Picture Upload</h4>
							</div><!-- modal-header 닫힘 -->
							<div class="modal-body2">
								<input type="file" class="filestyle" id="fileUpload" data-icon="false">
								<p class="txt_blue captionTitle">Picture Caption - Please introduce your picture</p>
								<textarea name="pictureCaption" id="pictureCaption" rows="3"></textarea>
							</div><!-- modal-body 닫힘 -->
							<div class="modal-footer">
								<button type="button" class="btn btn-info" id="Email" name="Email">Upload</button>
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							</div><!-- modal-footer 닫힘 -->
						</div><!-- modal-content 닫힘 -->
					</div><!-- modal-dialog 닫힘 -->
				</div><!-- modal fade Overveiw 끝 -->


			<div class="picUpload">
				<span class="glyphicon glyphicon-remove remove"></span>
				<img src="/application/views/images/contents/pic1.jpg" alt="">
			</div>

			<div class="picUpload">
				<span class="glyphicon glyphicon-plus plus"></span>
				<span class="glyphicon glyphicon-picture picture"></span>
				<img src="" alt="">
			</div>
			<div class="picUpload">
				<span class="glyphicon glyphicon-plus plus"></span>
				<span class="glyphicon glyphicon-picture picture"></span>
				<img src="" alt="">
			</div>
			<div class="picUpload">
				<span class="glyphicon glyphicon-plus plus"></span>
				<img src="" alt="">
			</div>
		</div><!-- Div3 end -->

		<div class="productDiv4">
			<p class="productTitle">详细内容 - <span>（请详细介绍并超过300自以上）</span></p>
			<textarea class="productTextarea" rows="3"></textarea>
		</div><!-- Div4 end -->

		<div class="productDiv5">
			<p class="productTitle">Price</p>
			<div class="form-group2">
				<span class="ml">1人</span>
				<input type="text" class="form-control2" id="1Price" placeholder="">
			<span>元</span>

			<span class="ml">Group</span>
				<input type="text" class="form-control2" id="gPrice" placeholder="">
				<span>元</span>
			</div>
		</div><!-- Div5 end -->

		<div class="productDiv6">
			<p class="productTitle">经验类型</p>
			<div class="themeWrap">
				<ul class="favorite">
					<li>
						<input type="checkbox" name="checkboxG6" id="checkboxG6" class="css-checkbox"/>
						<label for="checkboxG6" class="css-label">
							<div class="round_box"><img src="" alt=""></div>
							<input type='hidden' value="" name="">
							<input type='hidden' value="" name="">
						</label>
					</li>
					<li>
						<input type="checkbox" name="checkboxG7" id="checkboxG7" class="css-checkbox"/>
						<label for="checkboxG7" class="css-label">
							<div class="round_box"><img src="" alt=""></div>
							<input type='hidden' value="" name="">
							<input type='hidden' value="" name="">
						</label>
					</li>
					<li>
						<input type="checkbox" name="checkboxG8" id="checkboxG8" class="css-checkbox"/>
						<label for="checkboxG8" class="css-label">
							<div class="round_box"><img src="" alt=""></div>
							<input type='hidden' value="" name="">
							<input type='hidden' value="" name="">
						</label>
					</li>
					<li>
						<input type="checkbox" name="checkboxG9" id="checkboxG9" class="css-checkbox"/>
						<label for="checkboxG9" class="css-label">
							<div class="round_box"><img src="" alt=""></div>
							<input type='hidden' value="" name="">
							<input type='hidden' value="" name="">
						</label>
					</li>
					<li>
						<input type="checkbox" name="checkboxG10" id="checkboxG10" class="css-checkbox"/>
						<label for="checkboxG10" class="css-label">
							<div class="round_box"><img src="" alt=""></div>
							<input type='hidden' value="" name="">
							<input type='hidden' value="" name="">
						</label>
					</li>
				</ul>
			</div>
		</div><!-- Div6 end -->


		<div class="productDiv7">
			<p class="productTitle">推荐</p>
			<div class="recmdWrap">
				<ul class="favorite">
					<li>
						<input type="checkbox" name="checkboxG12" id="checkboxG12" class="css-checkbox"/>
						<label for="checkboxG12" class="css-label">
							<div class="round_box"><img src="" alt=""></div>
							<input type='hidden' value="" name="">
							<input type='hidden' value="" name="">
						</label>
					</li>
					<li>
						<input type="checkbox" name="checkboxG13" id="checkboxG13" class="css-checkbox"/>
						<label for="checkboxG13" class="css-label">
							<div class="round_box"><img src="" alt=""></div>
							<input type='hidden' value="" name="">
							<input type='hidden' value="" name="">
						</label>
					</li>
					<li>
						<input type="checkbox" name="checkboxG14" id="checkboxG14" class="css-checkbox"/>
						<label for="checkboxG14" class="css-label">
							<div class="round_box"><img src="" alt=""></div>
							<input type='hidden' value="" name="">
							<input type='hidden' value="" name="">
						</label>
					</li>
				</ul>
			</div>
		</div><!-- Div7 end -->

		<div class="productDiv8">
			<p class="productTitle">Time</p>

			<select class="selectpicker" data-style="btn-info" data-size="6" id="selectTime">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
			</select>

			<select class="selectpicker" data-style="btn-info" id="selectTime2">
				<option value="可调节">可调节</option>
			</select>
		</div><!-- Div8 end -->

		<div class="productDiv9">
			<p class="productTitle">见面地点</p>
			<img src="/application/views/images/contents/map.png" alt="">
			<input type="text" class="form-control2" id="meetPlace" placeholder="만날 장소를 구체적으로 써 주세요">
		</div><!-- Div9 end -->

		<div class="productDiv10">
			<p class="productTitle">费用包括</p>
			<textarea name="" id="include"></textarea>
		</div><!-- Div10 end -->

		<div class="productDiv11">
			<p class="productTitle">费用不包括</p>
			<textarea name="" id="notinclude"></textarea>
		</div><!-- Div11 end -->

		<div class="productDiv12">
			<p class="productTitle">E.T.C</p>
			<textarea name="" id="etc"></textarea>
		</div><!-- Div12 end -->
	</div><!-- productWrap -->

	<div class="productInfo">
		<span class="txt_blue">Information</span>
	</div>
</div><!-- productWrap en -->

<script type="text/javascript">

$(function(){

});
</script>