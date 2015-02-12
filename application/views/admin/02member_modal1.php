<?foreach($vInfo as $v){?>
<div class="modalDiv1 mb20">
	<h4>Apply Date : <?=$v->creat_date?></h4>
	<!--h4>Tel : 86-013-2013-4125</h4-->
</div>

<div class="modalDiv2 mb20">
<h4>Pic</h4>
	<div id="membermodalPic" class="mb10">
		<img src="<?=$v->img_path?>" alt="">
	</div>
	<button class="btn btn-primary" style="margin-left: 516px;" onclick="vAppove('<?=$v->certicification_seq?>','<?=$v->user_num?>')">승인</button>
</div>

<div class="modalDiv3">
	<textarea name="" id="banTextarea" cols="30" rows="10" class="mb10"><?=$v->excuse?></textarea>
	<button class="btn btn-warning" style="margin-left: 516px;" onclick="vUnAppove('<?=$v->certicification_seq?>','<?=$v->user_num?>')">반려</button>
</div>
<?}?>