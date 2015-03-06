<?echo ":::::::::::>>>".count($msgCount);
foreach($msgCount as $v){?>
	<div id="alertM"><i>您有<?=$v->chat_cnt?>条新短消息！.</i></div>
<?}?>

 <script type="text/javascript">

	$(document).ready(function () {
		setInterval("dpRealTime()",1000);
	});

	function dpRealTime(){
		$.ajax({
			type:"POST" ,
			dataType:"text",
			contentType:"application/x-www-form-urlencoded; charset=UTF-8",
			data:{ },
			url: "/index.php/city/country/realTimeMsg",
			success: function (data){
				//alert(data);
				document.getElementById('alertM').innerHTML = data;
			}
		});
	}
</script>