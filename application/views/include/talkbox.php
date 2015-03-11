<li class="talkbox"><img src="/application/views/images/main/t01.png" alt="icon_talkboxN" id="chatList" name="chatList">
</li>

<?foreach($bookCount as $k){
		if($k->bookCnt > 0){?>
			<li class="noticebox"><img src="/application/views/images/main/n01n.png" alt="icon_talkboxN" id="noticeList" name="noticeList" onclick='orderBook()'></li>
		<?}else{?>
			<li class="noticebox"><img src="/application/views/images/main/n01.png" alt="icon_talkboxN" id="noticeList" name="noticeList" onclick='orderBook()'></li>
	<?}
}?>
<!-- <li class="noticebox"><img src="/application/views/images/main/n01n.png" alt="icon_talkboxN" id="noticeList" name="noticeList"></li> -->
<?foreach($msgCount as $v){
		if($v->order_user_num != null){?>
			<div id='msgCnt'><?=$v->cnt?></div>
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
				document.getElementById('msgCnt').innerHTML = data;
			}
		});
	}
</script>