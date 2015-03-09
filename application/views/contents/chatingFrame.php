	<?foreach($SendList as $v){
			if($v->user_num != $this->session->userdata['num']) {?>
			<input type='hidden' id='hiddenNum' name='hiddenNum' value='<?=$v->user_num?>'>
				<div id="youChat">
					<span id="youchatID"><?=$v->Name_cn_en?><span id="youchatDate"><?=$v->create_time?></span></span>
					<div id="chatImg" class="chatImg">
						<img src="<?=$v->face_img_path?>" alt="" class="profile_image img-circle">
						<img src="<?=$v->ref1?>" alt="nation_flagImage" class="flag_image">
						<?if($v->v_get_code == "0001"){?>
							<img src="/application/views/images/main/img22_vmark.png" alt="" class="vmark_image">
						<?}?>
					</div>
					<img src="/application/views/images/contents/chatarrow_left.png" alt="" class="chatarrow1">
					<div class="youchatBox"><p><?=$v->content?></p></div>
				</div><!-- youChat end -->
		<?}else{?>
		<input type='hidden' id='hiddenOrderNum' name='hiddenOrderNum' value='<?=$v->user_num?>'>
				<div id="meChat">
				<span id="mechatID"><?=$v->Name_cn_en?><span id="mechatDate"><?=$v->create_time?></span></span>
				<div id="chatImg" class="chatImg">
					<img src="<?=$v->face_img_path?>" alt="" class="profile_image img-circle">
					<img src="<?=$v->ref1?>" alt="nation_flagImage" class="flag_image">
					<?if($v->v_get_code == "0001"){?>
						<img src="/application/views/images/main/img22_vmark.png" alt="" class="vmark_image">
					<?}?>
				</div>
				<img src="/application/views/images/contents/chatarrow_right.png" alt="" class="chatarrow2">
				<div class="mechatBox"><p><?=$v->content?></p></div>
			</div>
		<?}?>
		<?foreach($salesCity as $k){ ?>
			<input type='hidden' id='hiddenUserNum' name='hiddenUserNum' value='<?=$k->user_num?>'>
			<input type='hidden' id='hiddenLoginNum' name='hiddenLoginNum' value='<?=$this->session->userdata['num']?>'>
		<?}?>
	<input type='hidden' id='hiddenChatNum' name='hiddenChatNum' value='<?=$v->chat_num?>'>
	<input type='hidden' id='hiddenProductNum' name='hiddenProductNum' value='<?=$v->product_num?>'>
	<?}?>


 <script type="text/javascript">

	$(document).ready(function () {
		setInterval("dpTime()",2000);
	});

	function dpTime(){

		var _chatNum = $('#hiddenChatNum').val();
		var _productNum = $('#hiddenProductNum').val();

		$.ajax({
			type:"POST" ,
			dataType:"text",
			contentType:"application/x-www-form-urlencoded; charset=UTF-8",
			data:{ chatNum : _chatNum, productNum:_productNum},
			url: "/index.php/city/country/dpTimeChating",
			success: function (data){
				//alert(data);
				document.getElementById('realCht').innerHTML = data;
			}
		});
	}
</script>