<select class="form-control" data-style="" id="selectCity">
	<option value = "">-- Select --</option>
	<?foreach($city as $v){?>
		<option value = "<?=$v->code?>"><?=$v->code_nm?></option>
	<?}?>
</select>