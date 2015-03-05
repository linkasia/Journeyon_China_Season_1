<?foreach($msgCount as $v){?>
	<div id="alertM"><i>您有<?=$v->chat_cnt?>条新短消息！.</i></div>
<?}?>

 <script type="text/javascript">

	$(document).ready(function () {
		setInterval("dpTime()",1000);
	});

	function dpTime(){
		var _chatNum = $('#hiddenChatNum').val();
		var _productNum = $('#hiddenProductNum').val();

		$.ajax({
			type:"POST" ,
			dataType:"text",
			contentType:"application/x-www-form-urlencoded; charset=UTF-8",
			data:{ chatNum : _chatNum, productNum:_productNum},
			url: "/index.php/city/country/realTimeMsg",
			success: function (data){
				//alert(data);
				document.getElementById('alertM').innerHTML = data;
			}
		});
	}
</script>