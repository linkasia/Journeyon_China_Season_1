<div id="noticeboardWrap" class="">

	<div id="titleBox" class="tac">
		<h3 class="pageTitle">Notice Board</h3>
		<h4 class="textGrey tac mb60">궁금하신게 있다면 글을 남겨 주세요</h4>
	</div>
<form action="/index.php/admin/adminMenu/adminInsertNotice" method="post">
	<div id="writeForm">
			<fieldset>
				<div class="controls1 mb20">
					<div id="leftDiv2">
						<select class="form-control" id="inputHeader" name="inputHeader">
						<?foreach($headList as $v){?>
							<option value="<?=$v->code?>" >[<?=$v->code_nm?>] </option>
						<?}?>
						</select>
					</div>
					<div id="rightDiv2">
						<input type="text" class="form-control input-xlarge" id="subject" name="subject" placeholder="게시물 제목을 써주세요.">
					</div>
				</div>

				<div class="controls">
					<textarea name="ir1" id="ir1" rows="10" cols="100" style="width:100%; height:412px; min-width:610px; display:none;"></textarea>
					<!-- <p>
						<input type="button" onclick="pasteHTML();" value="본문에 내용 넣기" />
						<input type="button" onclick="showHTML();" value="본문 내용 가져오기" />
						<input type="button" onclick="submitContents(this);" value="서버로 내용 전송" />
						<input type="button" onclick="setDefaultFont();" value="기본 폰트 지정하기 (궁서_24)" />
					</p> -->
					<?//$this->load->view('admin/adminNotice_write_html');?>
					<!-- <textarea class="input-xlarge form-control" id="contents" name="contents" rows="15" placeholder="내용을 입력해 주세요"></textarea> -->
				</div>

				<div id="btnDiv">
				<?
					if(@$this->session->userdata['logged_in'] == TRUE)
					{
						if($this->session->userdata['email'] == "admin@linkasia.co.kr"){?>
					<button class="btn btn-info" id="write_btn1" name="write_btn1" onclick="submitContents(this);">저장</button>
						<?}
					}?>
					<button class="btn btn-danger" id="write_btn2" name="write_btn2">취소</button>
				</div>
			</fieldset>
	</div>
</div>
</form>
<div id='test'>
</div>
<script type="text/javascript">
	var oEditors = [];

	// 추가 글꼴 목록
	//var aAdditionalFontSet = [["MS UI Gothic", "MS UI Gothic"], ["Comic Sans MS", "Comic Sans MS"],["TEST","TEST"]];

	nhn.husky.EZCreator.createInIFrame({
		oAppRef: oEditors,
		elPlaceHolder: "ir1",
		sSkinURI: "/application/views/admin/SmartEditor2Skin.html",
		htParams : {
			bUseToolbar : true,				// 툴바 사용 여부 (true:사용/ false:사용하지 않음)
			bUseVerticalResizer : true,		// 입력창 크기 조절바 사용 여부 (true:사용/ false:사용하지 않음)
			bUseModeChanger : true,			// 모드 탭(Editor | HTML | TEXT) 사용 여부 (true:사용/ false:사용하지 않음)
			//aAdditionalFontList : aAdditionalFontSet,		// 추가 글꼴 목록
			fOnBeforeUnload : function(){
			//alert("완료!");
			}
		}, //boolean
		fOnAppLoad : function(){
			//예제 코드
			//oEditors.getById["ir1"].exec("PASTE_HTML", ["로딩이 완료된 후에 본문에 삽입되는 text입니다."]);
		},
		fCreator: "createSEditor2"
	});

	function pasteHTML() {
		var sHTML = "<span style='color:#FF0000;'>이미지도 같은 방식으로 삽입합니다.</span>";
		oEditors.getById["ir1"].exec("PASTE_HTML", [sHTML]);
	}

	function showHTML() {
		var sHTML = oEditors.getById["ir1"].getIR();
		alert(sHTML);
	}

	function submitContents(elClickedObj) {
		oEditors.getById["ir1"].exec("UPDATE_CONTENTS_FIELD", []);	// 에디터의 내용이 textarea에 적용됩니다.

		// 에디터의 내용에 대한 값 검증은 이곳에서 document.getElementById("ir1").value를 이용해서 처리하면 됩니다.

		try {
			elClickedObj.form.submit();
		} catch(e) {}
	}

	function setDefaultFont() {
		var sDefaultFont = '궁서';
		var nFontSize = 24;
		oEditors.getById["ir1"].setDefaultFont(sDefaultFont, nFontSize);
	}

	$(function(){
		/*
		$('#write_btn1').click( function(){
			var _head = $('#inputHeader').val();
			var _subject = $('#subject').val();
			var _contents = $('#contents').val();

			$.ajax({
				type:"POST" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ head:_head, subject:_subject, contents:_contents },
				url:"/index.php/admin/adminMenu/adminInsertNotice",
				success: function (data){
					document.getElementById('noticeboardWrap').innerHTML =data;
				}
			});
		});
*/
		$('#write_btn2').click( function(){
			location.href = "/index.php/admin/adminMenu/adminNotice";
		});
	});


</script>
