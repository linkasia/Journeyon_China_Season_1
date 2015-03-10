		<div class="profileWrap1">

			<?
				$data['date'] = $this->myModify->myReservationPage($this->session->userdata['num']);
				$this -> load ->view('/mypage/servicewindow1',$data);
			?>

			<div class="title9">
				<div class="underline">我的预约</div>
			</div>  <!-- 라인 들어가는 타이틀 city부분 복제 -->

		<!---------------- 상품 반복시작 ------------------->
			<?foreach($reservation as $v){?>
			<div class="salesList">
				<input type="checkbox" id="salesCheckbox" name="salesCheckbox">
				<div class="titlediv">
					<span class="salestitle" id="salestitle" name="salestitle"><a href='/index.php/City/country/Detailcity_search?salesNum=<?=$v->product_num?>&mode='><?=$v->title?></a></span>
				</div><!-- titlediv 닫음 -->
				<div class="banddiv whitegloss">
					<span class="bandtitle" id="bandtitle" name="bandtitle"><!--最近联系 : 2014. 6. 9--></span><span class="bandtitle2" id="bandtitle2" name="bandtitle2">预约日期 : <?=$v->book_Start_date?> ~ <?=$v->book_End_date?></span>
					<img src="<?=$v->face_img_path?>" alt="profile_image" class="img-circle profile_image">
					<img src="<?=$v->ref1?>" alt="flag_image" class="flag_image">
					<?if($v->v_get_code == "0001"){?>
						<img src="/application/views/images/main/img22_vmark.PNG" alt="vmark_image" class="vmark_image">
					<?}?>
				</div><!-- banddiv 닫음 -->
				<div class="stepdiv">
					<div class="stepImage">
						<?if($v->order_type_code == "0004"){?>
							<img src="/application/views/images/mypage/icon_sale01.png" alt="sale_icon_image" class="icon_sale01" id="icon_sale01" onclick="goChatList()">
							<img src="/application/views/images/mypage/icon_arrow01.png" alt="sale_icon_image" class="icon_arrow01" id="icon_arrow01">
							<img src="/application/views/images/mypage/icon_sale02g.png" alt="sale_icon_image" class="icon_sale02g" id="icon_sale02g">
							<img src="/application/views/images/mypage/icon_arrow01g.png" alt="sale_icon_image" class="icon_arrow02g" id="icon_arrow02g">
							<img src="/application/views/images/mypage/icon_sale03g.png" alt="sale_icon_image" class="icon_sale03g" id="icon_sale03g">
							<img src="/application/views/images/mypage/icon_arrow01g.png" alt="sale_icon_image" class="icon_arrow03" id="icon_arrow03g">
							<img src="/application/views/images/mypage/icon_sale04g.png" alt="sale_icon_image" class="icon_sale04g" id="icon_sale04g">
						<?}else if($v->order_type_code == "0003"){?>
							<img src="/application/views/images/mypage/icon_sale01.png" alt="sale_icon_image" class="icon_sale01" id="icon_sale01">
							<img src="/application/views/images/mypage/icon_arrow01.png" alt="sale_icon_image" class="icon_arrow01" id="icon_arrow01">
							<img src="/application/views/images/mypage/icon_sale02.png" alt="sale_icon_image" class="icon_sale02" id="icon_sale02">
							<img src="/application/views/images/mypage/icon_arrow01.png" alt="sale_icon_image" class="icon_arrow02" id="icon_arrow02">
							<img src="/application/views/images/mypage/icon_sale03g.png" alt="sale_icon_image" class="icon_sale03g" id="icon_sale03g">
							<img src="/application/views/images/mypage/icon_arrow01g.png" alt="sale_icon_image" class="icon_arrow03g" id="icon_arrow03g">
							<img src="/application/views/images/mypage/icon_sale04g.png" alt="sale_icon_image" class="icon_sale04g" id="icon_sale04g">
						<?}else if($v->order_type_code == "0002"){?>
							<img src="/application/views/images/mypage/icon_sale01.png" alt="sale_icon_image" class="icon_sale01" id="icon_sale01">
							<img src="/application/views/images/mypage/icon_arrow01.png" alt="sale_icon_image" class="icon_arrow01" id="icon_arrow01">
							<img src="/application/views/images/mypage/icon_sale02.png" alt="sale_icon_image" class="icon_sale02" id="icon_sale02">
							<img src="/application/views/images/mypage/icon_arrow01.png" alt="sale_icon_image" class="icon_arrow02" id="icon_arrow02">
							<img src="/application/views/images/mypage/icon_sale03.png" alt="sale_icon_image" class="icon_sale03" id="icon_sale03">
							<img src="/application/views/images/mypage/icon_arrow01.png" alt="sale_icon_image" class="icon_arrow03" id="icon_arrow03">
							<img src="/application/views/images/mypage/icon_sale04g.png" alt="sale_icon_image" class="icon_sale04g" id="icon_sale04g">
						<?}else{?>
							<img src="/application/views/images/mypage/icon_sale01.png" alt="sale_icon_image" class="icon_sale01" id="icon_sale01">
							<img src="/application/views/images/mypage/icon_arrow01.png" alt="sale_icon_image" class="icon_arrow01" id="icon_arrow01">
							<img src="/application/views/images/mypage/icon_sale02.png" alt="sale_icon_image" class="icon_sale02" id="icon_sale02">
							<img src="/application/views/images/mypage/icon_arrow01.png" alt="sale_icon_image" class="icon_arrow02" id="icon_arrow02">
							<img src="/application/views/images/mypage/icon_sale03.png" alt="sale_icon_image" class="icon_sale03" id="icon_sale03">
							<img src="/application/views/images/mypage/icon_arrow01.png" alt="sale_icon_image" class="icon_arrow03" id="icon_arrow03">
							<img src="/application/views/images/mypage/icon_sale04.png" alt="sale_icon_image" class="icon_sale04" id="icon_sale04">
						<?}?>
					</div><!-- stepImage 닫음 -->
					<div class="stepText">
						<span class="step1">咨询中</span>
						<span class="step2">预定成功</span>
						<span class="step3">服务结束</span>
						<span class="step4">已付款</span>
					</div>

					<div class="absoluteDiv">
						<!-- <span>价格</span><br> -->
						<a href="#" class="btn btn-default mt10" id="guidePriceBtn" name="guidePriceBtn">价格 : <?=$v->fixed_fee?>元</a><br>
						<span class="btn btn-danger mt10" id="guidePruductCancelBtn" data-toggle="modal" data-backdrop="static" data-target="#myModal" onclick="insertBookNum('<?=$v->book_num?>','<?=$v->cancel_text?>')">取消交易</span>
						<?if($v->order_type_code == "0005"){?>
							<div id="cancelAlertBox" class="alert alert-danger mt20">취소</div>
						<?}?>
					</div>
				</div><!-- stepdiv 닫음 -->
			</div><!-- salesList 닫음, 이 박스가 반복됨-->
			<?}?>


			<!-- Modal 여기서부터 Overview 박스 시작 -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							<h4 class="modal-title" id="myModalLabel">예약 취소하기</h4>
						</div><!-- modal-header 닫힘 -->
						<input type='hidden' id='hiddenBookNum' name='hiddenBookNum' value="">
						<div id='cancelDetail'>

						</div>
					</div><!-- modal-content 닫힘 -->
				</div><!-- modal-dialog 닫힘 -->
			</div><!-- modal fade Overveiw 끝 -->

			<!--nav class="paginationNav">
				<ul class="pagination pagination-sm" id="pmPagination" name="pmPagination">
					<li>
						<a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a>
					</li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li>
					<a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a>
					</li>
				</ul>
			</nav-->

			<div id="btnBox">
				<button class="btn btn-info" id="allSelect" name="allSelect">选择全部</button>
				<button class="btn btn-danger" id="deleteSelect" name="deleteSelect">删除</button>
			</div>

		</div><!-- profileWrap1 -->


		<script type="text/javascript">
			function goChatList(){
				alert("AA");
			}
		</script>