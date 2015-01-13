<select class="form-control" data-style="" id="selectCity" name="selectCity">
	<option value = "">-- Select --</option>
	<?foreach($city as $k){?>
		<option value = "<?=$k->code?>" ><?=$k->code_nm?></option>
	<?}?>
</select>