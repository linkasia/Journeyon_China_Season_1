<?
$scountry = $_REQUEST['scountry'];
$countryList = $_REQUEST['countryList'];
$cityList = $_REQUEST['cityList'];
?>
<div id="contents_wrap1"> <!-- 컨텐츠 영역 나중에 include -->
	<div id="contents_wrapcenter"> <!-- 가운데로 가로값 줘서 가운데 정렬시키는 wrap -->


		<!-- left_box.php로 뺀 자리 -->

		<aside id="aside_wrap"> <!-- 좌측 정렬 부분 감싸는 영역 -->

			<div class="div_box1">
				<div class="div_box1-1">
					<div class="nation1"><img src="/application/views/images/left_menu/icon02_city.PNG" alt="">
						<p class="stitle">国家</p>
					</div>
					<?foreach($choiceCountry as $v){?>
					<div class="selectDiv"><span id='valueCountry'><?=$v->code_nm?></span>
						<span id='change_button' name='change_button'><img src="/application/views/images/left_menu/check_box.png" alt=""  onclick="countryList()"></span>
					</div>
					<?}?>

				<!-- 여기서부터 나라선택 박스 시작 -->
					 <div class="nation_list" name="nation_list" id="nation_list">
								<?foreach($country as $v){
									if($v->class == "0001" && $v->CODE == "0001"){?>
										<div class="nation-column1">
											<p class="big_p"><b>亚洲</b></p>
											<p><b>东亚</b></p>
											<ul>
												<?foreach($country as $k){
													if($k->class =='0001'){?>
													<li onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"><img src="<?=$k->ref1?>" onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"> <?=$k->code_nm?></li>
												<?}
												}?>
											</ul>
											<p class="small_p"><b>南亚</b></p>
											<ul>
												<?foreach($country as $k){
													if($k->class =='0002'){?>
													<li onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"><img src="<?=$k->ref1?>" onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"> <?=$k->code_nm?></li>
												<?}
												}?>
											</ul>
										</div>
										<div class="nation-column2">
											<p class="small_pp"><b>东南亚</b></p>
											<ul>
												<?foreach($country as $k){
													if($k->class =='0003'){?>
													<li onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"><img src="<?=$k->ref1?>" onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"> <?=$k->code_nm?></li>
												<?}
												}?>
											</ul>
											<p class="small_p"><b>西亚</b></p>
											<ul>
												<?foreach($country as $k){
													if($k->class =='0004'){?>
													<li onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"><img src="<?=$k->ref1?>" onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"> <?=$k->code_nm?></li>
												<?}
												}?>
											</ul>
										</div>

									<?}else if($v->class == "0005" && $v->CODE == "0001"){?>
										<div class="nation-column3">
											<p class="big_p"><b>美洲</b></p>
											<p><b>北美洲</b></p>
											<ul>
												<?foreach($country as $k){
													if($k->class =='0005'){?>
													<li onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"><img src="<?=$k->ref1?>" onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"> <?=$k->code_nm?></li>
												<?}
												}?>
											</ul>
											<p class="small_p"><b>南美洲</b></p>
											<ul>
												<?foreach($country as $k){
													if($k->class =='0006'){?>
													<li onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"><img src="<?=$k->ref1?>" onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"> <?=$k->code_nm?></li>
												<?}
												}?>
											</ul>
										</div>

									<?}else if($v->class == "0007" && $v->CODE == "0001"){?>
										<div class="nation-column4">
											<p class="big_p"><b>欧洲</b></p>
											<p><b>北欧</b></p>
											<ul>
												<?foreach($country as $k){
													if($k->class =='0007'){?>
													<li onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"><img src="<?=$k->ref1?>" onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"> <?=$k->code_nm?></li>
												<?}
												}?>
											</ul>
											<p><b>东欧</b></p>
											<ul>
												<?foreach($country as $k){
													if($k->class =='0008'){?>
													<li onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"><img src="<?=$k->ref1?>" onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"> <?=$k->code_nm?></li>
												<?}
												}?>
											</ul>
											<p><b>西欧</b></p>
											<ul>
												<?foreach($country as $k){
													if($k->class =='0009'){?>
													<li onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"><img src="<?=$k->ref1?>" onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"> <?=$k->code_nm?></li>
												<?}
												}?>
											</ul>
										</div>

									<?}else if($v->class == "0010" && $v->CODE == "0001"){?>
										<div class="nation-column5">
											<p class="small_pp"><b>南欧</b></p>
											<ul>
												<?foreach($country as $k){
													if($k->class =='0010'){?>
													<li onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"><img src="<?=$k->ref1?>" onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"> <?=$k->code_nm?></li>
												<?}
												}?>
											</ul>
											<p><b>中欧</b></p>
											<ul>
												<?foreach($country as $k){
													if($k->class =='0011'){?>
													<li onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"><img src="<?=$k->ref1?>" onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"> <?=$k->code_nm?></li>
												<?}
												}?>
											</ul>
										</div>
									<?}else if($v->class == "0012" && $v->CODE == "0001"){?>
										<div class="nation-column6">
											<p class="big_p"><b>大洋洲</b></p>
											<p><b>南欧</b></p>
											<ul>
												<?foreach($country as $k){
													if($k->class =='0012'){?>
													<li onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"><img src="<?=$k->ref1?>" onclick="selecCountry('<?=$k->class?>','<?=$k->CODE?>')"> <?=$k->code_nm?></li>
												<?}
												}?>
											</ul>
										</div>
										<?}?>
								<?}?>
						</div> <!-- div.nation_list 끝 -->
				</div><!-- div_box 1-1 끝 -->

				<div class="div_box1-2">
					<div class="nation2"><img src="/application/views/images/left_menu/icon01_country.PNG" alt="">
						<p class="stitle">City</p>
					</div>
					<div class="selectParent">
						<select class="select_option"  onChange="selectCity(this)" id='cityList' name='cityList'>
						<?foreach($countryCityList as $v){?>
							<option value='<?=$v->CODE?>' <?if( $v->CODE == $cityList){?>selected <?}?>><?=$v->code_nm?></option>
						<?}?>
						</select>
					</div>
				</div>

			</div>



			<div class="div_box2"> <!-- 현지인 & V인증마크 영역 -->
				<ul class="local"><img src="/application/views/images/left_menu/icon03_guide.PNG" alt=""><p class="stitle">导游特征</p>

					<?$i=0;
					foreach($guideType as $v){?>
					<li>
						<input type="checkbox" name="checkboxG<?=$i?>[]" id="checkboxG<?=$i?>" class="css-checkbox" />
						<label for="checkboxG<?=$i?>" class="css-label">
							<div class="round_box"><img src="<?=$v->ref1?>" alt=""><?=$v->code_nm?></div>
							<input type='hidden' value='<?=$v->class?>' id='hiddenClass<?=$i?>' name='hiddenClass<?=$i?>' />
							<input type='hidden' value='<?=$v->code?>' id='hiddenCode<?=$i?>' name='hiddenCode<?=$i?>' />
						</label>
					</li>
					<?$i++;
					}?>
				</ul>

				<!-- 성별 선택 옮겨온 부분 -->
				<ul class="gender"><img src="/application/views/images/left_menu/icon07_gender.PNG" alt=""><p class="stitle">性别</p>
				<?foreach($sexual as $v){?>
					<li>
						<input type="checkbox" name="checkboxG<?=$i?>" id="checkboxG<?=$i?>" class="css-checkbox"/>
						<label for="checkboxG<?=$i?>" class="css-label">
							<div class="round_box"><img src="<?=$v->ref1?>" alt=""><?=$v->code_nm?></div>
							<input type='hidden' value='<?=$v->class?>' id='hiddenClass<?=$i?>' name='hiddenClass<?=$i?>' />
							<input type='hidden' value='<?=$v->code?>' id='hiddenCode<?=$i?>' name='hiddenCode<?=$i?>' />
						</label>
					</li>

				<?$i++;
				}?>
				</ul>

				<ul class="vmark"><img src="/application/views/images/left_menu/icon04_vmark.PNG" alt=""><p class="stitle">V. 认证</p>
					<?foreach($guide as $v){?>
					<li>
						<input type="checkbox" name="checkboxG<?=$i?>" id="checkboxG<?=$i?>" class="css-checkbox"/>
						<label for="checkboxG<?=$i?>" class="css-label">
							<div class="round_box"><img src="<?=$v->ref1?>" alt=""><?=$v->code_nm?></div>
							<input type='hidden' value='<?=$v->class?>' id='hiddenClass<?=$i?>' name='hiddenClass<?=$i?>' />
							<input type='hidden' value='<?=$v->code?>' id='hiddenCode<?=$i?>' name='hiddenCode<?=$i?>' />
						</label>
					</li>
					<?$i++;
					}?>
				</ul>
			</div>


			<div class="div_box3"> <!-- Favorite 영역 -->
				<ul class="favorite"><img src="/application/views/images/left_menu/icon05_type.PNG" alt=""><p class="stitle">经验类型</p>
				<?foreach($theme as $v){?>
					<li>
						<input type="checkbox" name="checkboxG<?=$i?>" id="checkboxG<?=$i?>" class="css-checkbox"/>
						<label for="checkboxG<?=$i?>" class="css-label">
							<div class="round_box"><img src="<?=$v->ref1?>" alt=""><?=$v->code_nm?></div>
							<input type='hidden' value='<?=$v->class?>' id='hiddenClass<?=$i?>' name='hiddenClass<?=$i?>' />
							<input type='hidden' value='<?=$v->code?>' id='hiddenCode<?=$i?>' name='hiddenCode<?=$i?>' />
						</label>
					</li>
				<?$i++;
				}?>
				</ul>

				<ul class="recommanded"><img src="/application/views/images/left_menu/icon06_recomanded.PNG" alt=""><p class="stitle">推荐</p>
				<?foreach($recommend as $v){?>
					<li>
						<input type="checkbox" name="checkboxG<?=$i?>" id="checkboxG<?=$i?>" class="css-checkbox"/>
						<label for="checkboxG<?=$i?>" class="css-label">
							<div class="round_box"><img src="<?=$v->ref1?>" alt=""><?=$v->code_nm?></div>
							<input type='hidden' value='<?=$v->class?>' id='hiddenClass<?=$i?>' name='hiddenClass<?=$i?>' />
							<input type='hidden' value='<?=$v->code?>' id='hiddenCode<?=$i?>' name='hiddenCode<?=$i?>' />
						</label>
					</li>
				<?$i++;
				}?>
				<input type='hidden' value=<?=$i?> id='hiddenNum' name='hiddenNum' />
				</ul>
			</div>


			<!--<div class="div_box4">
				<ul class="gender"><img src="/application/views/images/left_menu/icon07_gender.PNG" alt=""><p class="stitle">性别</p>
				<?foreach($sexual as $v){?>
					<li>
						<input type="checkbox" name="checkboxG5" id="checkboxG5" class="css-checkbox"/>
						<label for="checkboxG5" class="css-label">
							<div class="round_box"><img src="<?=$v->ref1?>" alt=""><?=$v->code_nm?></div>
						</label>
					</li>
				<?}?>
				</ul>
			</div> -->

		</aside><!-- 왼쪽 메뉴 끝 -->



		<section id="section_wrap"> <!-- 여기서부터 우측 감싸는 영역 -->

			<div class="2button">
				<button id="select1" type="image" class="btn btn-primary">微旅行</button>
				<button id="select2" class="btn btn-primary">点评</button>
			</div><!-- 버튼 2개 넣을 곳 -->


			<!-- 우측컨텐츠 right_contents.php 로 뺀 영역 -->



			<?
				$data['salesCountry']= $this->country_M->salesCountry($scountry,$countryList,null);
			?>

			<div id='viewContents' name='viewContents'><?$this->load->view("/contents/frm_city",$data);?></div>


		</section> <!-- 우측 감싸는 section 닫음 -->
<div id='test'>
</div>
	</div> <!-- contents_wrap center 주는거 닫음 -->
</div> <!-- contents_wrap1 닫음  -->

<script type="text/javascript">

	//콤보박스 변경시
	function selectCity(obj){
		var _co="<?=$scountry?>";
		var _ci="<?=$countryList?>";
		var _guideType="";
		var _temCode = ""
		var _genderCode="";
		var _recommend="";
		var _guide="";

		$.ajax({
			type:"GET" ,
			dataType:"text",
			contentType:"application/x-www-form-urlencoded; charset=UTF-8",
			data:{scountry: _co , countryList:_ci, guideType:_guideType, genderCode:_genderCode, temCode:_temCode, recommend:_recommend, guide:_guide, selectCityList:obj.value },
			url:"/index.php/city/country/searchCountry",
			success: function (data){
				document.getElementById('viewContents').innerHTML =data;
			}
		});

		//alert(obj.value);
	}

	//상세페이지
	function detail_page(num)
	{
		location.href = "<?=site_url('City/country/Detailcity_search?salesNum="+num+"&mode='); ?>";
	}

	function selecCountry(country,city)
	{
		location.href = "<?=site_url('City/country/city_search?scountry="+country+"&countryList="+city+"&cityList='); ?>";
	}

	function countryList()
	{
		document.getElementById('nation_list').style.display='block'
		document.getElementById('change_button').innerHTML ="<img src='/application/views/images/left_menu/check_box.png' alt=''  onclick='changeList()'>"
	}

	function changeList()
	{
		document.getElementById('nation_list').style.display='none'
		document.getElementById('change_button').innerHTML ="<img src='/application/views/images/left_menu/check_box.png' alt=''  onclick='countryList()'>"
	}


	$(function(){

		//메인 이미지 변경
		$("#header_wrap").css("height","350px");
		$("#header_wrap").css("background-image","url(/application/views/images/main/bg02.png)");

		//헤더텍스트 높낮이 변경 padding
		$("#headerText").css("padding-top","108px");

		$('#checkboxG0').click( function(){
			var _co="<?=$scountry?>";
			var _ci="<?=$countryList?>";
			var _guideType="";
			var _temCode = ""
			var _genderCode="";
			var _recommend="";
			var _guide="";
			for(var i=0; i < $('#hiddenNum').val(); i++)
			{

				if( $('#checkboxG'+i).is(":checked") == true )
				{
						if( $('#hiddenClass'+i).val() == "0011"){
							_guideType += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0012" ){
							_temCode += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0013" ){
							_recommend += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0010" ){
							_guide += $('#hiddenCode'+i).val();
						}else if( $('#hiddenClass'+i).val() == "0002" ){
							_genderCode += $('#hiddenCode'+i).val()+",";
						}
				}
			}
			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{scountry: _co , countryList:_ci, guideType:_guideType, genderCode:_genderCode, temCode:_temCode, recommend:_recommend,guide:_guide, selectCityList: null },
				url:"/index.php/city/country/searchCountry",
				success: function (data){
					//document.getElementById('test').innerHTML = data;
					document.getElementById('viewContents').innerHTML =data;
				}
			});
		});
		$('#checkboxG1').click( function(){
			var _co="<?=$scountry?>";
			var _ci="<?=$countryList?>";
			var _guideType="";
			var _temCode = ""
			var _genderCode="";
			var _recommend="";
			var _guide="";
			for(var i=0; i < $('#hiddenNum').val(); i++)
			{

				if( $('#checkboxG'+i).is(":checked") == true )
				{
						if( $('#hiddenClass'+i).val() == "0011"){
							_guideType += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0012" ){
							_temCode += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0013" ){
							_recommend += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0010" ){
							_guide += $('#hiddenCode'+i).val();
						}else if( $('#hiddenClass'+i).val() == "0002" ){
							_genderCode += $('#hiddenCode'+i).val()+",";
						}
				}
			}
			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{scountry: _co , countryList:_ci, guideType:_guideType, genderCode:_genderCode, temCode:_temCode, recommend:_recommend,guide:_guide, selectCityList: null },
				url:"/index.php/city/country/searchCountry",
				success: function (data){
					//alert(data);
					document.getElementById('viewContents').innerHTML =data;
				}
			});
		});
		$('#checkboxG2').click( function(){
			var _co="<?=$scountry?>";
			var _ci="<?=$countryList?>";
			var _guideType="";
			var _temCode = ""
			var _genderCode="";
			var _recommend="";
			var _guide="";
			for(var i=0; i < $('#hiddenNum').val(); i++)
			{

				if( $('#checkboxG'+i).is(":checked") == true )
				{
						if( $('#hiddenClass'+i).val() == "0011"){
							_guideType += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0012" ){
							_temCode += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0013" ){
							_recommend += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0010" ){
							_guide += $('#hiddenCode'+i).val();
						}else if( $('#hiddenClass'+i).val() == "0002" ){
							_genderCode += $('#hiddenCode'+i).val()+",";
						}
				}
			}
			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{scountry: _co , countryList:_ci, guideType:_guideType, genderCode:_genderCode, temCode:_temCode, recommend:_recommend,guide:_guide, selectCityList: null },
				url:"/index.php/city/country/searchCountry",
				success: function (data){
					//alert(data);
					document.getElementById('viewContents').innerHTML =data;
				}
			});
		});
		$('#checkboxG3').click( function(){
			var _co="<?=$scountry?>";
			var _ci="<?=$countryList?>";
			var _guideType="";
			var _temCode = ""
			var _genderCode="";
			var _recommend="";
			var _guide="";
			for(var i=0; i < $('#hiddenNum').val(); i++)
			{

				if( $('#checkboxG'+i).is(":checked") == true )
				{
						if( $('#hiddenClass'+i).val() == "0011"){
							_guideType += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0012" ){
							_temCode += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0013" ){
							_recommend += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0010" ){
							_guide += $('#hiddenCode'+i).val();
						}else if( $('#hiddenClass'+i).val() == "0002" ){
							_genderCode += $('#hiddenCode'+i).val()+",";
						}
				}
			}
			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{scountry: _co , countryList:_ci, guideType:_guideType, genderCode:_genderCode, temCode:_temCode, recommend:_recommend,guide:_guide, selectCityList: null },
				url:"/index.php/city/country/searchCountry",
				success: function (data){
					//alert(data);
					document.getElementById('viewContents').innerHTML =data;
				}
			});
		});
		$('#checkboxG4').click( function(){
			var _co="<?=$scountry?>";
			var _ci="<?=$countryList?>";
			var _guideType="";
			var _temCode = ""
			var _genderCode="";
			var _recommend="";
			var _guide="";
			for(var i=0; i < $('#hiddenNum').val(); i++)
			{

				if( $('#checkboxG'+i).is(":checked") == true )
				{
						if( $('#hiddenClass'+i).val() == "0011"){
							_guideType += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0012" ){
							_temCode += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0013" ){
							_recommend += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0010" ){
							_guide += $('#hiddenCode'+i).val();
						}else if( $('#hiddenClass'+i).val() == "0002" ){
							_genderCode += $('#hiddenCode'+i).val()+",";
						}
				}
			}
			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{scountry: _co , countryList:_ci, guideType:_guideType, genderCode:_genderCode, temCode:_temCode, recommend:_recommend,guide:_guide, selectCityList: null },
				//url:"http://163.180.73.62/index.php/city/country/searchCountry",
				url:"/index.php/city/country/searchCountry",
				success: function (data){
					//alert(data);
					document.getElementById('viewContents').innerHTML =data;
				}
			});
		});

		$('#checkboxG5').click( function(){
			var _co="<?=$scountry?>";
			var _ci="<?=$countryList?>";
			var _guideType="";
			var _temCode = ""
			var _genderCode="";
			var _recommend="";
			var _guide="";
			for(var i=0; i < $('#hiddenNum').val(); i++)
			{

				if( $('#checkboxG'+i).is(":checked") == true )
				{
						if( $('#hiddenClass'+i).val() == "0011"){
							_guideType += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0012" ){
							_temCode += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0013" ){
							_recommend += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0010" ){
							_guide += $('#hiddenCode'+i).val();
						}else if( $('#hiddenClass'+i).val() == "0002" ){
							_genderCode += $('#hiddenCode'+i).val()+",";
						}
				}
			}
			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{scountry: _co , countryList:_ci, guideType:_guideType, genderCode:_genderCode, temCode:_temCode, recommend:_recommend,guide:_guide, selectCityList: null },
				//url:"http://163.180.73.62/index.php/city/country/searchCountry",
				url:"/index.php/city/country/searchCountry",
				success: function (data){
					//alert(data);
					document.getElementById('viewContents').innerHTML =data;
				}
			});
		});
		$('#checkboxG6').click( function(){
			var _co="<?=$scountry?>";
			var _ci="<?=$countryList?>";
			var _guideType="";
			var _temCode = ""
			var _genderCode="";
			var _recommend="";
			var _guide="";
			for(var i=0; i < $('#hiddenNum').val(); i++)
			{

				if( $('#checkboxG'+i).is(":checked") == true )
				{
						if( $('#hiddenClass'+i).val() == "0011"){
							_guideType += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0012" ){
							_temCode += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0013" ){
							_recommend += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0010" ){
							_guide += $('#hiddenCode'+i).val();
						}else if( $('#hiddenClass'+i).val() == "0002" ){
							_genderCode += $('#hiddenCode'+i).val()+",";
						}
				}
			}
			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{scountry: _co , countryList:_ci, guideType:_guideType, genderCode:_genderCode, temCode:_temCode, recommend:_recommend,guide:_guide, selectCityList: null },
				url:"/index.php/city/country/searchCountry",
				success: function (data){
					//alert(data);
					document.getElementById('viewContents').innerHTML =data;
				}
			});
		});
		$('#checkboxG7').click( function(){
			var _co="<?=$scountry?>";
			var _ci="<?=$countryList?>";
			var _guideType="";
			var _temCode = ""
			var _genderCode="";
			var _recommend="";
			var _guide="";
			for(var i=0; i < $('#hiddenNum').val(); i++)
			{

				if( $('#checkboxG'+i).is(":checked") == true )
				{
						if( $('#hiddenClass'+i).val() == "0011"){
							_guideType += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0012" ){
							_temCode += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0013" ){
							_recommend += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0010" ){
							_guide += $('#hiddenCode'+i).val();
						}else if( $('#hiddenClass'+i).val() == "0002" ){
							_genderCode += $('#hiddenCode'+i).val()+",";
						}
				}
			}
			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{scountry: _co , countryList:_ci, guideType:_guideType, genderCode:_genderCode, temCode:_temCode, recommend:_recommend,guide:_guide, selectCityList: null },
				url:"/index.php/city/country/searchCountry",
				success: function (data){
					//alert(data);
					document.getElementById('viewContents').innerHTML =data;
				}
			});
		});
		$('#checkboxG8').click( function(){
			var _co="<?=$scountry?>";
			var _ci="<?=$countryList?>";
			var _guideType="";
			var _temCode = ""
			var _genderCode="";
			var _recommend="";
			var _guide="";
			for(var i=0; i < $('#hiddenNum').val(); i++)
			{

				if( $('#checkboxG'+i).is(":checked") == true )
				{
						if( $('#hiddenClass'+i).val() == "0011"){
							_guideType += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0012" ){
							_temCode += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0013" ){
							_recommend += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0010" ){
							_guide += $('#hiddenCode'+i).val();
						}else if( $('#hiddenClass'+i).val() == "0002" ){
							_genderCode += $('#hiddenCode'+i).val()+",";
						}
				}
			}
			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{scountry: _co , countryList:_ci, guideType:_guideType, genderCode:_genderCode, temCode:_temCode, recommend:_recommend,guide:_guide, selectCityList: null },
				url:"/index.php/city/country/searchCountry",
				success: function (data){
					document.getElementById('viewContents').innerHTML =data;
				}
			});
		});
		$('#checkboxG9').click( function(){
			var _co="<?=$scountry?>";
			var _ci="<?=$countryList?>";
			var _guideType="";
			var _temCode = ""
			var _genderCode="";
			var _recommend="";
			var _guide="";
			for(var i=0; i < $('#hiddenNum').val(); i++)
			{

				if( $('#checkboxG'+i).is(":checked") == true )
				{
						if( $('#hiddenClass'+i).val() == "0011"){
							_guideType += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0012" ){
							_temCode += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0013" ){
							_recommend += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0010" ){
							_guide += $('#hiddenCode'+i).val();
						}else if( $('#hiddenClass'+i).val() == "0002" ){
							_genderCode += $('#hiddenCode'+i).val()+",";
						}
				}
			}
			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{scountry: _co , countryList:_ci, guideType:_guideType, genderCode:_genderCode, temCode:_temCode, recommend:_recommend,guide:_guide, selectCityList: null },
				url:"/index.php/city/country/searchCountry",
				success: function (data){
					//alert(data);
					document.getElementById('viewContents').innerHTML =data;
				}
			});
		});
		$('#checkboxG10').click( function(){
			var _co="<?=$scountry?>";
			var _ci="<?=$countryList?>";
			var _guideType="";
			var _temCode = ""
			var _genderCode="";
			var _recommend="";
			var _guide="";
			for(var i=0; i < $('#hiddenNum').val(); i++)
			{

				if( $('#checkboxG'+i).is(":checked") == true )
				{
						if( $('#hiddenClass'+i).val() == "0011"){
							_guideType += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0012" ){
							_temCode += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0013" ){
							_recommend += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0010" ){
							_guide += $('#hiddenCode'+i).val();
						}else if( $('#hiddenClass'+i).val() == "0002" ){
							_genderCode += $('#hiddenCode'+i).val()+",";
						}
				}
			}
			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{scountry: _co , countryList:_ci, guideType:_guideType, genderCode:_genderCode, temCode:_temCode, recommend:_recommend,guide:_guide, selectCityList: null },
				url:"/index.php/city/country/searchCountry",
				success: function (data){
					//alert(data);
					document.getElementById('viewContents').innerHTML =data;
				}
			});
		});
		$('#checkboxG11').click( function(){
			var _co="<?=$scountry?>";
			var _ci="<?=$countryList?>";
			var _guideType="";
			var _temCode = ""
			var _genderCode="";
			var _recommend="";
			var _guide="";
			for(var i=0; i < $('#hiddenNum').val(); i++)
			{

				if( $('#checkboxG'+i).is(":checked") == true )
				{
						if( $('#hiddenClass'+i).val() == "0011"){
							_guideType += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0012" ){
							_temCode += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0013" ){
							_recommend += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0010" ){
							_guide += $('#hiddenCode'+i).val();
						}else if( $('#hiddenClass'+i).val() == "0002" ){
							_genderCode += $('#hiddenCode'+i).val()+",";
						}
				}
			}
			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{scountry: _co , countryList:_ci, guideType:_guideType, genderCode:_genderCode, temCode:_temCode, recommend:_recommend,guide:_guide, selectCityList: null },
				url:"/index.php/city/country/searchCountry",
				success: function (data){
					//alert(data);
					document.getElementById('viewContents').innerHTML =data;
				}
			});
		});
		$('#checkboxG12').click( function(){
			var _co="<?=$scountry?>";
			var _ci="<?=$countryList?>";
			var _guideType="";
			var _temCode = ""
			var _genderCode="";
			var _recommend="";
			var _guide="";
			for(var i=0; i < $('#hiddenNum').val(); i++)
			{

				if( $('#checkboxG'+i).is(":checked") == true )
				{
						if( $('#hiddenClass'+i).val() == "0011"){
							_guideType += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0012" ){
							_temCode += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0013" ){
							_recommend += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0010" ){
							_guide += $('#hiddenCode'+i).val();
						}else if( $('#hiddenClass'+i).val() == "0002" ){
							_genderCode += $('#hiddenCode'+i).val()+",";
						}
				}
			}
			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{scountry: _co , countryList:_ci, guideType:_guideType, genderCode:_genderCode, temCode:_temCode, recommend:_recommend,guide:_guide, selectCityList: null },
				url:"/index.php/city/country/searchCountry",
				success: function (data){
					//alert(data);
					document.getElementById('viewContents').innerHTML =data;
				}
			});
		});
		$('#checkboxG13').click( function(){
			var _co="<?=$scountry?>";
			var _ci="<?=$countryList?>";
			var _guideType="";
			var _temCode = ""
			var _genderCode="";
			var _recommend="";
			var _guide="";
			for(var i=0; i < $('#hiddenNum').val(); i++)
			{

				if( $('#checkboxG'+i).is(":checked") == true )
				{
						if( $('#hiddenClass'+i).val() == "0011"){
							_guideType += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0012" ){
							_temCode += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0013" ){
							_recommend += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0010" ){
							_guide += $('#hiddenCode'+i).val();
						}else if( $('#hiddenClass'+i).val() == "0002" ){
							_genderCode += $('#hiddenCode'+i).val()+",";
						}
				}
			}
			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{scountry: _co , countryList:_ci, guideType:_guideType, genderCode:_genderCode, temCode:_temCode, recommend:_recommend,guide:_guide, selectCityList: null },
				url:"/index.php/city/country/searchCountry",
				success: function (data){
					//alert(data);
					document.getElementById('viewContents').innerHTML =data;
				}
			});
		});
		$('#checkboxG14').click( function(){
			var _co="<?=$scountry?>";
			var _ci="<?=$countryList?>";
			var _guideType="";
			var _temCode = ""
			var _genderCode="";
			var _recommend="";
			var _guide="";
			for(var i=0; i < $('#hiddenNum').val(); i++)
			{

				if( $('#checkboxG'+i).is(":checked") == true )
				{
						if( $('#hiddenClass'+i).val() == "0011"){
							_guideType += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0012" ){
							_temCode += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0013" ){
							_recommend += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0010" ){
							_guide += $('#hiddenCode'+i).val();
						}else if( $('#hiddenClass'+i).val() == "0002" ){
							_genderCode += $('#hiddenCode'+i).val()+",";
						}
				}
			}
			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{scountry: _co , countryList:_ci, guideType:_guideType, genderCode:_genderCode, temCode:_temCode, recommend:_recommend,guide:_guide, selectCityList: null },
				url:"/index.php/city/country/searchCountry",
				success: function (data){
					//alert(data);
					document.getElementById('viewContents').innerHTML =data;
				}
			});
		});
		$('#checkboxG15').click( function(){
			var _co="<?=$scountry?>";
			var _ci="<?=$countryList?>";
			var _guideType="";
			var _temCode = ""
			var _genderCode="";
			var _recommend="";
			var _guide="";
			for(var i=0; i < $('#hiddenNum').val(); i++)
			{

				if( $('#checkboxG'+i).is(":checked") == true )
				{
						if( $('#hiddenClass'+i).val() == "0011"){
							_guideType += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0012" ){
							_temCode += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0013" ){
							_recommend += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0010" ){
							_guide += $('#hiddenCode'+i).val();
						}else if( $('#hiddenClass'+i).val() == "0002" ){
							_genderCode += $('#hiddenCode'+i).val()+",";
						}
				}
			}
			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{scountry: _co , countryList:_ci, guideType:_guideType, genderCode:_genderCode, temCode:_temCode, recommend:_recommend,guide:_guide, selectCityList: null },
				url:"/index.php/city/country/searchCountry",
				success: function (data){
					//alert(data);
					document.getElementById('viewContents').innerHTML =data;
				}
			});
		});
		$('#checkboxG16').click( function(){
			var _co="<?=$scountry?>";
			var _ci="<?=$countryList?>";
			var _guideType="";
			var _temCode = ""
			var _genderCode="";
			var _recommend="";
			var _guide="";
			for(var i=0; i < $('#hiddenNum').val(); i++)
			{

				if( $('#checkboxG'+i).is(":checked") == true )
				{
						if( $('#hiddenClass'+i).val() == "0011"){
							_guideType += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0012" ){
							_temCode += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0013" ){
							_recommend += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0010" ){
							_guide += $('#hiddenCode'+i).val();
						}else if( $('#hiddenClass'+i).val() == "0002" ){
							_genderCode += $('#hiddenCode'+i).val()+",";
						}
				}
			}
			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{scountry: _co , countryList:_ci, guideType:_guideType, genderCode:_genderCode, temCode:_temCode, recommend:_recommend,guide:_guide, selectCityList: null },
				url:"/index.php/city/country/searchCountry",
				success: function (data){
					//alert(data);
					document.getElementById('viewContents').innerHTML =data;
				}
			});
		});
		$('#checkboxG17').click( function(){
			var _co="<?=$scountry?>";
			var _ci="<?=$countryList?>";
			var _guideType="";
			var _temCode = ""
			var _genderCode="";
			var _recommend="";
			var _guide="";
			for(var i=0; i < $('#hiddenNum').val(); i++)
			{

				if( $('#checkboxG'+i).is(":checked") == true )
				{
						if( $('#hiddenClass'+i).val() == "0011"){
							_guideType += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0012" ){
							_temCode += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0013" ){
							_recommend += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0010" ){
							_guide += $('#hiddenCode'+i).val();
						}else if( $('#hiddenClass'+i).val() == "0002" ){
							_genderCode += $('#hiddenCode'+i).val()+",";
						}
				}
			}
			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{scountry: _co , countryList:_ci, guideType:_guideType, genderCode:_genderCode, temCode:_temCode, recommend:_recommend,guide:_guide, selectCityList: null },
				url:"/index.php/city/country/searchCountry",
				success: function (data){
					//alert(data);
					document.getElementById('viewContents').innerHTML =data;
				}
			});
		});
		$('#checkboxG18').click( function(){
			var _co="<?=$scountry?>";
			var _ci="<?=$countryList?>";
			var _guideType="";
			var _temCode = ""
			var _genderCode="";
			var _recommend="";
			var _guide="";
			for(var i=0; i < $('#hiddenNum').val(); i++)
			{

				if( $('#checkboxG'+i).is(":checked") == true )
				{
						if( $('#hiddenClass'+i).val() == "0011"){
							_guideType += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0012" ){
							_temCode += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0013" ){
							_recommend += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0010" ){
							_guide += $('#hiddenCode'+i).val();
						}else if( $('#hiddenClass'+i).val() == "0002" ){
							_genderCode += $('#hiddenCode'+i).val()+",";
						}
				}
			}
			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{scountry: _co , countryList:_ci, guideType:_guideType, genderCode:_genderCode, temCode:_temCode, recommend:_recommend,guide:_guide, selectCityList: null },
				url:"/index.php/city/country/searchCountry",
				success: function (data){
					//alert(data);
					document.getElementById('viewContents').innerHTML =data;
				}
			});
		});
		$('#checkboxG19').click( function(){
			var _co="<?=$scountry?>";
			var _ci="<?=$countryList?>";
			var _guideType="";
			var _temCode = ""
			var _genderCode="";
			var _recommend="";
			var _guide="";
			for(var i=0; i < $('#hiddenNum').val(); i++)
			{

				if( $('#checkboxG'+i).is(":checked") == true )
				{
						if( $('#hiddenClass'+i).val() == "0011"){
							_guideType += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0012" ){
							_temCode += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0013" ){
							_recommend += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0010" ){
							_guide += $('#hiddenCode'+i).val();
						}else if( $('#hiddenClass'+i).val() == "0002" ){
							_genderCode += $('#hiddenCode'+i).val()+",";
						}
				}
			}
			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{scountry: _co , countryList:_ci, guideType:_guideType, genderCode:_genderCode, temCode:_temCode, recommend:_recommend,guide:_guide, selectCityList: null },
				url:"/index.php/city/country/searchCountry",
				success: function (data){
					//alert(data);
					document.getElementById('viewContents').innerHTML =data;
				}
			});
		});
		$('#checkboxG20').click( function(){
			var _co="<?=$scountry?>";
			var _ci="<?=$countryList?>";
			var _guideType="";
			var _temCode = ""
			var _genderCode="";
			var _recommend="";
			var _guide="";
			for(var i=0; i < $('#hiddenNum').val(); i++)
			{

				if( $('#checkboxG'+i).is(":checked") == true )
				{
						if( $('#hiddenClass'+i).val() == "0011"){
							_guideType += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0012" ){
							_temCode += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0013" ){
							_recommend += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0010" ){
							_guide += $('#hiddenCode'+i).val();
						}else if( $('#hiddenClass'+i).val() == "0002" ){
							_genderCode += $('#hiddenCode'+i).val()+",";
						}
				}
			}
			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{scountry: _co , countryList:_ci, guideType:_guideType, genderCode:_genderCode, temCode:_temCode, recommend:_recommend,guide:_guide, selectCityList: null },
				url:"/index.php/city/country/searchCountry",
				success: function (data){
					//alert(data);
					document.getElementById('viewContents').innerHTML =data;
				}
			});
		});
		$('#checkboxG21').click( function(){
			var _co="<?=$scountry?>";
			var _ci="<?=$countryList?>";
			var _guideType="";
			var _temCode = ""
			var _genderCode="";
			var _recommend="";
			var _guide="";
			for(var i=0; i < $('#hiddenNum').val(); i++)
			{

				if( $('#checkboxG'+i).is(":checked") == true )
				{
						if( $('#hiddenClass'+i).val() == "0011"){
							_guideType += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0012" ){
							_temCode += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0013" ){
							_recommend += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0010" ){
							_guide += $('#hiddenCode'+i).val();
						}else if( $('#hiddenClass'+i).val() == "0002" ){
							_genderCode += $('#hiddenCode'+i).val()+",";
						}
				}
			}
			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{scountry: _co , countryList:_ci, guideType:_guideType, genderCode:_genderCode, temCode:_temCode, recommend:_recommend,guide:_guide, selectCityList: null },
				url:"/index.php/city/country/searchCountry",
				success: function (data){
					//alert(data);
					document.getElementById('viewContents').innerHTML =data;
				}
			});
		});

		$('#checkboxG22').click( function(){
			var _co="<?=$scountry?>";
			var _ci="<?=$countryList?>";
			var _guideType="";
			var _temCode = ""
			var _genderCode="";
			var _recommend="";
			var _guide="";
			for(var i=0; i < $('#hiddenNum').val(); i++)
			{

				if( $('#checkboxG'+i).is(":checked") == true )
				{
						if( $('#hiddenClass'+i).val() == "0011"){
							_guideType += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0012" ){
							_temCode += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0013" ){
							_recommend += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0010" ){
							_guide += $('#hiddenCode'+i).val();
						}else if( $('#hiddenClass'+i).val() == "0002" ){
							_genderCode += $('#hiddenCode'+i).val()+",";
						}
				}
			}
			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{scountry: _co , countryList:_ci, guideType:_guideType, genderCode:_genderCode, temCode:_temCode, recommend:_recommend,guide:_guide, selectCityList: null },
				url:"/index.php/city/country/searchCountry",
				success: function (data){
					//alert(data);
					document.getElementById('viewContents').innerHTML =data;
				}
			});
		});

		$('#checkboxG23').click( function(){
			var _co="<?=$scountry?>";
			var _ci="<?=$countryList?>";
			var _guideType="";
			var _temCode = ""
			var _genderCode="";
			var _recommend="";
			var _guide="";
			for(var i=0; i < $('#hiddenNum').val(); i++)
			{

				if( $('#checkboxG'+i).is(":checked") == true )
				{
						if( $('#hiddenClass'+i).val() == "0011"){
							_guideType += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0012" ){
							_temCode += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0013" ){
							_recommend += $('#hiddenCode'+i).val()+",";
						}else if( $('#hiddenClass'+i).val() == "0010" ){
							_guide += $('#hiddenCode'+i).val();
						}else if( $('#hiddenClass'+i).val() == "0002" ){
							_genderCode += $('#hiddenCode'+i).val()+",";
						}
				}
			}
			$.ajax({
				type:"GET" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{scountry: _co , countryList:_ci, guideType:_guideType, genderCode:_genderCode, temCode:_temCode, recommend:_recommend,guide:_guide, selectCityList: null },
				url:"/index.php/city/country/searchCountry",
				success: function (data){
					//alert(data);
					document.getElementById('viewContents').innerHTML =data;
				}
			});
		});
	});
</script>