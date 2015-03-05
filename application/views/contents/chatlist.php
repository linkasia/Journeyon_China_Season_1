<div id="chatlistWrap">
	<div class="title2"> <!-- 라인 들어가는 타이틀 city부분 복제 -->
		<div class="underline">留言记录</div>
	</div>
	<?foreach( $chatList as $v ) {?>
		<?if($v->create_time > $v->dateSet){?>
			<div class="chatlistDiv">
				<div class="chat1">
					<!-- input type="checkbox" id="chatCheckbox" name="chatCheckbox" value="<?=$v->chat_num?>" -->
					<div class="chatimgDiv"><img src="<?=$v->face_img_path?>" alt="" class="img-circle" id="chatImg"></div>
					<p class="lastChat">与<span class="txt_blue"><?=$v->Name_cn_en?></span>的最后交谈记录<span>&nbsp;&nbsp;<?=$v->create_time?></span></p>
					<p class="chatText" onclick="detailChat('<?=$v->chat_num?>')"><?=$v->content?></p>
				</div>
			</div><!-- chatlistDiv 이게 반복됨 -->
			<input type="hidden" id="hiddenProduct" name="hiddenProduct" value='<?=$v->product_num?>' >
		<?}else{?>
			<div class="chatlistDiv">
				<div class="chat1">
					<!-- input type="checkbox" id="chatCheckbox" name="chatCheckbox" value="<?=$v->chat_num?>" -->
					<div class="chatimgDiv"><img src="<?=$v->order_face?>" alt="" class="img-circle" id="chatImg"></div>
					<p class="lastChat">与<span class="txt_blue"><?=$v->order_Name_cn_en?></span>的最后交谈记录<span>&nbsp;&nbsp;<?=$v->dateSet?></span></p>
					<p class="chatText" onclick="detailChat('<?=$v->chat_num?>')"><?=$v->reply?></p>
				</div>
			</div><!-- chatlistDiv 이게 반복됨 -->
			<input type="hidden" id="hiddenProduct" name="hiddenProduct" value='<?=$v->product_num?>' >
		<?}
	}?>
	<span><font color="red"><b>* 채팅내용은 90일 후 자동 삭제 됩니다. </b></font></span>
	<!--button class="btn btn-info" id="selectAll" onclick="selectCheck()">全部选择</button>
	<button class="btn btn-warning" id="deleteCheck"  name="deleteCheck" onclick="deleteChat()">删除</button -->
</div><!-- chatlistWrap -->

<script type="text/javascript">
	//90후 채팅 자동 삭제
	chat_delete();
	function chat_delete(){
		$.ajax({
			type:"GET" ,
			dataType:"text",
			contentType:"application/x-www-form-urlencoded; charset=UTF-8",
			data:{ },
			url:"/index.php/city/country/deleteChat",
			success: function (data){
				//document.getElementById('viewContents').innerHTML = data;
			}
		});
	}
/*
	function deleteChat(){
		var key =  document.getElementsByName("chatCheckbox");
		for(var i=0; i < key.length; i++){
			if(key[i].checked == true){
				alert(key[i].value);
			}
		}
	}
*/
	//채팅 디테일
	function detailChat(key)
	{
		var _productNum = $('#hiddenProduct').val();
		location.href = "/index.php/city/country/startDetailChating?key="+key+"&num="+_productNum+"";
	}
/*
	//체크선택
	function selectCheck(){
		var search = document.getElementsByName("chatCheckbox");
		var check = 0;
		for(var i=0; i < search.length; i++){
			if(search[i].checked == true){
				check++;
			}
		}

		if(check < search.length){
			for(var i =0; i < search.length; i++){
				search[i].checked=true;
			}
		}else{
			for(var i =0; i < search.length; i++){
				search[i].checked=false;
			}
		}
	}
*/
</script>