<div id="productWrapAll">

	<div class="productWrap">
		<div class="productDiv1">
			<p class="productTitle">国家 & 城市</p>
			<select class="form-control" data-style="" data-size="6" id="selectCountry" onChange="choiceCountry()">
				<option value = "">-- 选择 --</option>
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
			<p class="productTitle">个性题目></p>
			<form>
				<div class="productTitleDiv">
					<input type="text" class="form-control2" id="productTitle" placeholder="">
				</div>
			</form>
		</div><!-- Div2 end -->

		<div class="productDiv3">
			<p class="productTitle">Picture</p>
			<?
			for($i=0; $i < 5; $i++){
			if( $i <= 3){?>
			<div class="picUpload" id='addDiv<?=$i?>'>
				<img src="" data-toggle="modal" data-backdrop="static" data-target="#myModal5" id='pic<?=$i?>' name='pic<?=$i?>' onclick="valChange('<?=$i?>')">
				<span class="glyphicon glyphicon-picture pic_icon_img" id='picImg<?=$i?>' name='picImg<?=$i?>'></span>
				<span class="glyphicon glyphicon-remove remove" onclick="removeImg('<?=$i?>')"></span>
			</div>
			<?}else{?>
			<div class="" id='addDiv<?=$i?>' onclick="addImgBox('<?=$i?>')">
				<div class="picUpload" onclick="addImgBox('<?=$i?>')">
					<span class="glyphicon glyphicon-plus plus"></span>
					<img src="" alt="">
				</div>
				<input type='hidden' name="hiddenDivId" id="hiddenDivId" class="form-control" value="addDiv<?=$i?>">
			</div>
			<?}
			}?>
				<form name="imgUploadfrm" id="imgUploadfrm" method='post' enctype="multipart/form-data" action="/index.php/city/country/imgUpload">

					<input type="hidden" id="hiddenProductNum" name="hiddenProductNum" value="<?=$maxProduct?>" >
					<!-- 위에 사진을 누르면 여기서부터 overview가 시작됨 data-toggle 과 id로 연동 작동 -->
					<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog2">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
									<h4 class="modal-title" id="myModalLabel">Picture Upload</h4>
								</div><!-- modal-header 닫힘 -->
								<div class="modal-body2">

								<!--div class="fileinput fileinput-new" data-provides="fileinput">
									<div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
									<div>
										<span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
										<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
									</div>
								</div-->
									<div id="UploadPreviewDiv"><img src="" alt="" id="UploadPreviewImg"></div>
									<input type="file" class="filestyle btn btn-info" id="fileUpload" name="fileUpload" data-icon="false" placeholder="파일 업로드">
									<span id="posa_pictureupload" name="fileUpload">Upload</span>
									<!-- button class="btn btn-default" id="posa_imagecheckbtn" >Image Check</button -->
									<p class="txt_blue captionTitle">Picture Caption - Please introduce your picture</p>
									<input type='hidden' name="hiddenId" id="hiddenId" class="form-control" value="">
									<input type='text' name="pictureTitle" id="pictureTitle" class="form-control" placeholder="Picture Title">
									<textarea name="pictureCaption" id="pictureCaption" rows="3" class="form-control" placeholder="사진 설명"></textarea>
								</div><!-- modal-body 닫힘 -->
								<div class="modal-footer">
									<button type="submit" class="btn btn-info" id="imgUpload" name="imgUpload">Save</button>
									<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								</div><!-- modal-footer 닫힘 -->
							</div><!-- modal-content 닫힘 -->
						</div><!-- modal-dialog 닫힘 -->
					</div><!-- modal fade Overveiw 끝 -->
				</form>

			<!--div class="picUpload" onclick="addImgBox('<?=$k?>')">
				<span class="glyphicon glyphicon-plus plus"></span>
				<img src="" alt="">
			</div-->

		</div><!-- Div3 end -->

		<div class="productDiv4">
			<p class="productTitle">详细内容 - <span>（请填写300字以上的详细介绍）</span></p>
			<textarea class="productTextarea" id='productContents' rows="3"></textarea>
		</div><!-- Div4 end -->

		<div class="productDiv5">
			<p class="productTitle">价格</p><!-- 가격 -->
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
		<input type='hidden' value='<?=$i?>' id='hiddenNum' name='hiddenNum' />
		<div class="productDiv8">
			<p class="productTitle">时间</p><!-- 시간 -->
			<input type="text" class="form-control2" id="timeSet" placeholder="小时">
<!--
			<select class="selectpicker" data-style="btn-info" data-size="6" id="selectTime">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
			</select>
-->
		</div><!-- Div8 end -->

		<div class="productDiv9">
			<p class="productTitle">见面地点</p>
			<img src="/application/views/images/contents/map.png" alt="">
			<input type="text" class="form-control2" id="meetPlace" placeholder="请列明见面地点和位置">
		</div><!-- Div9 end -->

		<div class="productDiv10">
			<p class="productTitle">费用包括</p>
			<textarea name="include" id="include"></textarea>
		</div><!-- Div10 end -->

		<div class="productDiv11">
			<p class="productTitle">费用不包括</p>
			<textarea name="notinclude" id="notinclude"></textarea>
		</div><!-- Div11 end -->

		<div class="productDiv12">
			<p class="productTitle">其他事項</p>
			<textarea name="etc" id="etc"></textarea>
		</div><!-- Div12 end -->

		<input type="button" id="saveProduct" name="saveProduct" value="确定" class="btn btn-primary">
		<input type="button" id="cancelProduct" name="cancelProduct" value="取消" class="btn btn-warning">

	</div><!-- productWrap -->

	<div class="productInfo">
		<p class="txt_blue">注意事项</p>
		<p>Journey On!卓尼致力营造安全和谐的平台，与大家一起推广微旅游文化。<br><br>
			我们支持独特性高的旅游信息，不鼓励侵权行为。<br>
			发布违规内容和照片的用户可能会被限制使用权限。<br>
			禁止发布以下类型的内容（部分）：<br>
			含有裸露或色情元素的内容<br>
			含有违法活动的内容<br>
			含有宣传组织/个人企业的内容<br>
			含有侵犯他人知识产权的内容<br>
		</p>
	</div>
</div><!-- productWrap en -->

<script type="text/javascript">

	$('#fileUpload').on('change', function() {
		ext = $(this).val().split('.').pop().toLowerCase(); //확장자
		if($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
            resetFormElement($(this)); //폼 초기화
            window.alert('이미지 파일이 아닙니다! (gif, png, jpg, jpeg 만 업로드 가능)');
        } else {
            file = $('#fileUpload').prop("files")[0];
            blobURL = window.URL.createObjectURL(file);
            $('#UploadPreviewImg').attr('src', blobURL);
            $('#image_preview').slideDown(); //업로드한 이미지 미리보기
           // $(this).slideUp(); //파일 양식 감춤
        }
	});
/*
	$('#image_preview a').bind('click', function() {
        //resetFormElement($('#fileUpload')); //전달한 양식 초기화
        $('#fileUpload').slideDown(); //파일 양식 보여줌
        $(this).parent().slideUp(); //미리 보기 영역 감춤
        return false; //기본 이벤트 막음
    });

	function resetFormElement(e) {
        e.wrap('<form>').closest('form').get(0).reset();
        //리셋하려는 폼양식 요소를 폼(<form>) 으로 감싸고 (wrap()) ,
        //요소를 감싸고 있는 가장 가까운 폼( closest('form')) 에서 Dom요소를 반환받고 ( get(0) ),
        //DOM에서 제공하는 초기화 메서드 reset()을 호출
        e.unwrap(); //감싼 <form> 태그를 제거
    }
*/
	function removeImg(key){
		var _imgPath = document.getElementById('pic'+key).src;
		var _product_num =  $('#hiddenProductNum').val();
		var _hiddenId =  $('#hiddenId').val();
		$.ajax({
			type:"GET" ,
			dataType:"text",
			contentType:"application/x-www-form-urlencoded; charset=UTF-8",
			data:{ imgPath: _imgPath, product_num:_product_num,hiddenId:_hiddenId},
			url:"/index.php/city/country/imgDelete",
			success: function (data){
				$("#pic"+key).attr("src","");
				document.getElementById("picImg"+key).style.display= "block";
			}
		});
	}

	//var cnt = 0;
	//var priceCnt=0;
	function lengCheck(i){
		var cnt = 0;
		for(var k = 0; $('#hiddenNum').val() > k; k++){
			if( k <= 12){
				if($('#checkboxG'+k).prop("checked") == true){
					cnt++;
				}
			}
		}
		if(cnt > 3){
			alert("3개 이상등록하실 수 없습니다.");
			$('#checkboxG'+i).attr("checked",false);
		}

		/*
		if(cnt >= 3){
			alert("3개 이상등록하실 수 없습니다.");
			$('#checkboxG'+i).attr("checked",false);
			if(cnt != 3){
				cnt--;
			}
		}else{
			cnt++;
		}
		*/
	}

	function priceCheck(i){
		var priceCnt=0;
		for(var k = 13; $('#hiddenNum').val() > k; k++){
			if($('#checkboxG'+k).prop("checked") == true){
				priceCnt++;
			}

		}
		if(priceCnt > 2){
			alert("2개 이상등록하실 수 없습니다.");
			$('#checkboxG'+i).attr("checked",false);
		}

		/*
		if(priceCnt >= 2){
			alert("2개 이상등록하실 수 없습니다.");
			$('#checkboxG'+i).attr("checked",false);
			if(priceCnt != 2){
				priceCnt--;
			}
		}else{
				priceCnt++;
		}
		*/
	}

	function addImgBox(key)
	{
		var divHtml = "";
		divHtml +="<div class='picUpload' id='addDiv4'>";
		divHtml +="<img src='' data-toggle='modal' data-target='#myModal5' id='pic4' name='pic4' onclick='valChange(4)'>";
		divHtml +="<span class='glyphicon glyphicon-picture pic_icon_img' id='picImg4'></span>";
		divHtml += "<span class='glyphicon glyphicon-remove remove'></span>";
		divHtml +="</div>";

		document.getElementById('addDiv4').innerHTML=divHtml;

	}
	function valChange(i)
	{
		document.getElementById('hiddenId').value=i;
		document.getElementById('fileUpload').value= "";
		document.getElementById('pictureTitle').value= "";
		document.getElementById('pictureCaption').value= "";
		$('#UploadPreviewImg').attr('src', '');
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

	$('#imgUploadfrm').ajaxForm();
	$(function(){

		$('#imgUploadfrm').ajaxForm({
			success: function(data){
				var key=$('#hiddenId').val();
				$("#pic"+key).attr("src",data);
				$('#myModal5').modal('toggle');
				document.getElementById("picImg"+key).style.display= "none";
			}
		});
	});

	//저장버튼 클릭시 업데이트
	$('#saveProduct').click( function(){
		var _selectCountry = $('#selectCountry').val();
		var _selectClassCountry = _selectCountry.substring(0,4);
		var _selectCodeCountry = _selectCountry.substring(5,9);
		var _selectCity = $('#selectCity').val();
		var _product_num = $('#hiddenProductNum').val();
		var _productTitle = $('#productTitle').val();
		var _productContents = $('#productContents').val();
		var _onePrice = $('#1Price').val();
		var _timeSet = $('#timeSet').val();
		var _meetPlace = $('#meetPlace').val();
		var _include = $('#include').val();
		var _notinclude = $('#notinclude').val();
		var _etc = $('#etc').val();

		var _theme="";
		var _priceMember="";
		for(var k= 0; k < "<?=$i?>"; k++){
			if($('#checkboxG'+k).is(":checked") == true){
				if(k <12){
					_theme +=	$('#hiddenCode'+k).val()+",";
				}else{
					_priceMember  +=	$('#hiddenCode'+k).val()+",";
				}
			}
		}
		var _theme1 = _theme.substring(0,4);
		var _theme2 = _theme.substring(5,9);
		var _theme3 = _theme.substring(10,14);
		var _priceMember1 = _priceMember.substring(0,4);
		var _priceMember2 = _priceMember.substring(5,9);

		var _product_num = $('#hiddenProductNum').val();
		$.ajax({
			type:"GET" ,
			dataType:"text",
			contentType:"application/x-www-form-urlencoded; charset=UTF-8",
			data:{ product_num: _product_num, productTitle:_productTitle, productContents:_productContents, onePrice:_onePrice, timeSet:_timeSet, meetPlace:_meetPlace, include:_include, notinclude:_notinclude, etc:_etc, theme1:_theme1, theme2:_theme2, theme3:_theme3, priceMember1:_priceMember1, priceMember2:_priceMember2, selectClassCountry:_selectClassCountry, selectCodeCountry:_selectCodeCountry, selectCity:_selectCity },
			url:"/index.php/city/country/updateProduct",
			success: function (data){
				//document.getElementById('test').innerHTML=data;
				location.href = "/index.php/mypage/myPage_M/myguide?mode=0";
			}
		});
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
				location.href = "/index.php/mypage/myPage_M/myguide?mode=0";
			}
		});
	});
});


//새로 고침 키 막기
document.onkeydown = function(e)
{
	key = (e) ? e.keyCode : event.keyCode;
	ctrl = (e) ? e.ctrlKey  : event.ctrlKey;

	if( (ctrl == true && (key == 78 || key == 82)) || key==116)
	{
		if(e)
		{
			e.preventDefault();
		}
		else
		{
			event.keyCode = 0;
			event.returnValue = false;
		}
	}
}

</script>