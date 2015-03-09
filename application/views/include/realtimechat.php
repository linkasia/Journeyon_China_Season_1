<?foreach($msgCount as $v){
	if($v->order_user_num != null){?>
		<div id="alertM"><i>您有<?=$v->cnt?>条新短消息！.  </i></div>
	<?}?>
<?}?>
<div id='test'></div>
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
				document.getElementById('test').innerHTML = data;
				document.getElementById('alertM').innerHTML = data;
			}
		});
	}
</script>