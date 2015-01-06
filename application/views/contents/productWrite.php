<div id="productWrapAll">
	<div class="productWrap">
		<div class="productDiv1">
			<p class="productTitle">国家 & 城市</p>
			<select class="selectpicker" data-style="btn-info" data-size="6" id="selectCountry" onChange="choiceCountry()">
				<option value = "">-- Select --</option>
				<?foreach($country as $v){?>
					<option onclick="" value = "<?=$v->class?>,<?=$v->CODE?>"><?=$v->code_nm?></option>
				<?}?>
			</select>

			<div id="selectCtiy" name="selectCtiy">
				<?
				$data="";
				$this->load->view("/contents/comboCity",$data);?>
			</div>
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
				<form name="imgUpload" id="imgUpload" method='post' enctype="multipart/form-data" action="/index.php/city/country/imgUpload?product_num=0000000001">
				<!-- 위에 사진을 누르면 여기서부터 overview가 시작됨 data-toggle 과 id로 연동 작동 -->
				<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog2">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
								<h4 class="modal-title" id="myModalLabel">Picture Upload</h4>
							</div><!-- modal-header 닫힘 -->
							<div class="modal-body2">
								<input type="file" class="filestyle" id="fileUpload" name="fileUpload" data-icon="false">
								<p class="txt_blue captionTitle">Picture Caption - Please introduce your picture</p>
								<textarea name="pictureCaption" id="pictureCaption" rows="3"></textarea>
							</div><!-- modal-body 닫힘 -->
							<div class="modal-footer">
								<input type="submit" class="btn btn-info" id="imgUpload" name="imgUpload" value="Upload">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							</div><!-- modal-footer 닫힘 -->
						</div><!-- modal-content 닫힘 -->
					</div><!-- modal-dialog 닫힘 -->
				</div><!-- modal fade Overveiw 끝 -->
				</form>


			<div class="picUpload">
				<span class="glyphicon glyphicon-remove remove"></span>
				<img id="insertImg1" src="" alt="">
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
<!--
				<span class="ml">Group</span>
				<input type="text" class="form-control2" id="gPrice" placeholder="">
				<span>元</span>
-->
			</div>
		</div><!-- Div5 end -->

		<div class="productDiv6">
			<p class="productTitle">经验类型</p>
			<div class="themeWrap">
				<ul class="favorite">
					<? $i=0;
					foreach($theme as $v){?>
					<li>
						<input type="checkbox" name="checkboxG<?=$i?>" id="checkboxG<?=$i?>" class="css-checkbox" onclick="lengCheck('<?=$i?>')"/>
						<label for="checkboxG<?=$i?>" class="css-label">
							<div class="round_box"><img src="<?=$v->ref1?>" alt=""><?=$v->code_nm?></div>
							<input type='hidden' value='<?=$v->code?>' id='hiddenCode<?=$i?>' name='hiddenCode<?=$i?>' />
						</label>
					</li>
					<?$i++;
					}?>
				</ul>
			</div>
		</div><!-- Div6 end -->

		<div class="productDiv7">
			<p class="productTitle">推荐</p>
			<div class="recmdWrap">
				<ul class="favorite">
					<?foreach($recommend as $v){?>
					<li>
						<input type="checkbox" name="checkboxG<?=$i?>" id="checkboxG<?=$i?>" class="css-checkbox" onclick="priceCheck('<?=$i?>')"/>
						<label for="checkboxG<?=$i?>" class="css-label">
							<div class="round_box"><img src="<?=$v->ref1?>" alt=""><?=$v->code_nm?></div>
							<input type='hidden' value='<?=$v->code?>' id='hiddenCode<?=$i?>' name='hiddenCode<?=$i?>' />
						</label>
					</li>
					<?$i++;
					}?>
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
		<?foreach($maxProduct as $v){?>
		<input type="hidden" id="hiddenProductNum" name="hiddenProductNum" value="<?=$v->product_num?>" >
		<?}?>

		<input type="button" id="saveProduct" name="saveProduct" value="save">
		<input type="button" id="cancelProduct" name="cancelProduct" value="cancle">

	</div><!-- productWrap -->

	<div class="productInfo">
		<span class="txt_blue">Information</span>
	</div>
</div><!-- productWrap en -->

<script type="text/javascript">
	var cnt = 0;
	var priceCnt=0;
	function lengCheck(i){
		if(cnt >= 3){
			alert("3개 이상등록하실 수 없습니다.");
			$('#checkboxG'+i).attr("checked",false);
		}else{
			cnt++;
		}
	}

	function priceCheck(i){
		if(priceCnt >= 2){
			alert("2개 이상등록하실 수 없습니다.");
			$('#checkboxG'+i).attr("checked",false);
		}else{
			priceCnt++;
		}
	}

	function choiceCountry(){
		var _countrySelectClass = $('#selectCountry').val().substring(0,4);
		var _code = $('#selectCountry').val().substring(5,9);
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



$(function(){

	//저장버튼 클릭시 업데이트
	$('#saveProduct').click( function(){
		var _product_num = $('#hiddenProductNum').val();
		var _theme="";

		for(var k= 0; k < "<?=$i?>"; k++){
			if($('#checkboxG'+k).is(":checked") == true){
				_theme +=	$('#hiddenCode'+k).val()+",";
			}
		}

		//alert("<?=$i?>");
		alert(_theme);
		/*
		var _product_num = $('#hiddenProductNum').val();
		$.ajax({
			type:"GET" ,
			dataType:"text",
			contentType:"application/x-www-form-urlencoded; charset=UTF-8",
			data:{ product_num: _product_num},
			url:"/index.php/city/country/updateProduct",
			success: function (data){
				alert(data);
				//location.href = "<?=site_url('/mypage/myPage_M/myguide'); ?>";
			}
		});
		*/
	});


	//취소버튼 클릭시 임시 데이터 삭제
	$('#cancelProduct').click( function(){
		var _product_num = $('#hiddenProductNum').val();
		$.ajax({
			type:"GET" ,
			dataType:"text",
			contentType:"application/x-www-form-urlencoded; charset=UTF-8",
			data:{ product_num: _product_num},
			url:"/index.php/city/country/deleteProduct",
			success: function (data){
				location.href = "<?=site_url('/mypage/myPage_M/myguide'); ?>";
			}
		});
	});
/*
	$("#imgUpload").click( function(){
		$.ajax({
			type:"POST" ,
			dataType:"text",
			contentType:"application/x-www-form-urlencoded; charset=UTF-8",
			data:{ product_num: _product_num},
			url:"/index.php/city/country/imgUpload",
			success: function (data){
				//location.href = "<?=site_url('/mypage/myPage_M/myguide'); ?>";
			}
		});
/*
	$(document).read(function(){
		function readURL(input){
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#insertImg1').attr('src', e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
			}
		}

		uploadUrl: "' . Url::to(['/site/file-upload']) . '"
		maxFileCount: 10,
		overwriteInitial: false,
		initialPreview: [
			'<img src="/images/examples/Desert.jpg " class="file-preview-image">',
			'<img src="/images/examples/Jellyfish.jpg " class="file-preview-image">',
		],
		initialPreviewConfig: [
			{caption: "Desert.jpg", width: "120px", url:"/site/file-delete", key:1},
			{caption: "Jellyfish.jpg", width: "120px", url:"/site/file-delete", key:2}
		],
*/
	});

});
</script>