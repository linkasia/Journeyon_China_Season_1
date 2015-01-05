<select class="selectpicker" data-style="btn-info" id="selectCity">
	<option value = "">-- Select --</option>
	<?foreach($city as $v){?>
		<option value = "<?=$v->code?>"><?=$v->code_nm?></option>
	<?}?>
</select>