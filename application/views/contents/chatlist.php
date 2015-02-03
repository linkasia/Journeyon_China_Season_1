<div id="chatlistWrap">
	<div class="title2"> <!-- 라인 들어가는 타이틀 city부분 복제 -->
		<div class="underline">留言记录</div>
	</div>
	<?foreach( $chatList as $v ) {?>
	<div class="chatlistDiv">
		<div class="chat1">
			<input type="checkbox" id="chatCheckbox">
			<div class="chatimgDiv"><img src="<?=$v->face_img_path?>" alt="" class="img-circle" id="chatImg"></div>
			<p class="lastChat">与<span class="txt_blue"><?=$v->Name_cn_en?></span>的最后交谈记录<span>&nbsp;&nbsp;<?=$v->create_time?></span></p>
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
		location.href = "/index.php/city/country/startDetailChating?key="+key+"&num="+_productNum+"";
		/*
		$.ajax({
			type:"POST" ,
			dataType:"text",
			contentType:"application/x-www-form-urlencoded; charset=UTF-8",
			data:{ chatNum : key, productNum:_productNum},
			url:"/index.php/city/country/startDeatilChating",
			success: function (data){
				location.href = "/index.php/city/country/startDetailChating?key='"+key+"'&num='"+_productNum+"'";
				//document.getElementById('chatlistWrap').innerHTML = data;
			}
		});
		*/
	}



	function dataAdd(nRow){
		alert(nRow);
	}

	function salesItem(){
		/*
		var _chatNum = $('#hiddenChatNum').val();
		var _productNum = $('#hiddenProductNum').val();
		$.ajax({
			type:"POST" ,
			dataType:"text",
			contentType:"application/x-www-form-urlencoded; charset=UTF-8",
			data:{ productNum:_productNum},
			url: "/index.php/city/country/updateBookingDate",
			success: function (data){
				//alert(data);
				//document.getElementById('chatlistWrap').innerHTML = data;
			}
		});
		*/
	}

</script>