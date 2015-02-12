<?foreach($pInfo as $v){?>
	<div class="modalDiv1 mb20">
		<h4>Apply Date <?=$v->creat_date?></h4>
		<h4>James@linkasia.co.kr : <span onclick="profileChk('<?=$v->user_num?>')"><font color="62b8ef"><ins>Profile Check</ins></font></span></h4>
		<!--h4>James@linkasia.co.kr : <a href="">SNS Check</a></h4-->
		<button class="btn btn-primary" style="margin-left: 516px;" onclick="gAppove('<?=$v->certicification_seq?>','<?=$v->user_num?>')">승인</button>
	</div>

	<div class="modalDiv3">
		<textarea name="" id="banTextarea" cols="30" rows="10" class="mb10"><?=$v->excuse?></textarea>
		<button class="btn btn-warning" style="margin-left: 516px;" onclick="gUnAppove('<?=$v->certicification_seq?>','<?=$v->user_num?>')">반려</button>
	</div>
<?}?>