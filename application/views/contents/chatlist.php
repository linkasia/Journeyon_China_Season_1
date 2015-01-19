<div id="chatlistWrap">
	<div class="title2"> <!-- 라인 들어가는 타이틀 city부분 복제 -->
		<div class="underline">Chatlist</div>
	</div>
	<?foreach( $chatList as $v ) {?>
	<div class="chatlistDiv">
		<div class="chat1">
			<input type="checkbox" id="chatCheckbox">
			<div class="chatimgDiv"><img src="<?=$v->face_img_path?>" alt="" class="img-circle" id="chatImg"></div>
			<p class="lastChat"><span class="txt_blue"><?=$v->Name_cn_en?></span>님과 마지막 상담 <span><?=$v->create_time?></span></p>
			<p class="chatText" onclick="detailChat('<?=$v->chat_num?>')"><?=$v->content?></p>
		</div>
	</div><!-- chatlistDiv 이게 반복됨 -->
	<input type="hidden" id="hiddenProduct" name="hiddenProduct" value='<?=$v->product_num?>' >
	<?}?>
	<button class="btn btn-info" id="selectAll">전체선택</button>
	<button class="btn btn-warning" id="selectAll">선택삭제</button>
</div><!-- chatlistWrap -->

<script type="text/javascript">
	//채팅 디테일
	function detailChat(key)
	{
		var _productNum = $('#hiddenProduct').val();
		$.ajax({
			type:"POST" ,
			dataType:"text",
			contentType:"application/x-www-form-urlencoded; charset=UTF-8",
			data:{ chatNum : key, productNum:_productNum},
			url:"/index.php/city/country/startDeatilChating",
			success: function (data){
				document.getElementById('chatlistWrap').innerHTML = data;
			}
		});
	}

	//send 버튼 클릭시
	function sendChat(){
		var _chatNum = $('#hiddenChatNum').val();
		var _productNum = $('#hiddenProductNum').val();
		var _contents = $('#chatInput').val();
		var _userNum = $('#hiddenUserNum').val();
		var _loginNum = $('#hiddenUserNum').val();
		var _url = "";
		if(_userNum != _loginNum)
		{
			_url ="/index.php/city/country/insertMainChating";
		}else{
			_url ="/index.php/city/country/insertSubChating";
		}

		$.ajax({
			type:"POST" ,
			dataType:"text",
			contentType:"application/x-www-form-urlencoded; charset=UTF-8",
			data:{ chatNum : _chatNum, productNum:_productNum, contents:_contents},
			url: _url,
			success: function (data){
				document.getElementById('chatlistWrap').innerHTML = data;
			}
		});

	}

</script>