<li class="talkbox"><img src="/application/views/images/main/t01.png" alt="icon_talkboxN" id="chatList" name="chatList">
</li>

<li class="noticebox"><img src="/application/views/images/main/n01n.png" alt="icon_talkboxN" id="noticeList" name="noticeList"></li>
<!-- <li class="noticebox"><img src="/application/views/images/main/n01n.png" alt="icon_talkboxN" id="noticeList" name="noticeList"></li> -->
<?foreach($msgCount as $v){
	if($v->order_user_num != null){?>
<p id="boxcount"><?=$v->cnt?></p>
	<?}?>
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
				document.getElementById('test').innerHTML = data;
				document.getElementById('alertM').innerHTML = data;
			}
		});
	}
</script>