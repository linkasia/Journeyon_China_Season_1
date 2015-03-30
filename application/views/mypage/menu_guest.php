<?$this -> load ->view('/include/headerimg')?>

<div id="guestWrap">
	<aside id="leftmenuWrap">
		<span class="list-group-item active2">旅行者主页</span></span>
		<span role="presentation" class="list-group-item active" id='guestHome'><a href="#guestHome" data-toggle="tab" class="guestHome"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;&nbsp;使用方法</span></a>
		<span role="presentation" class="list-group-item" id='guestBucket'><a href="#guestBucket" data-toggle="tab" class="guestBucket"><span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span>&nbsp;&nbsp;我的收藏</span></a>
		<span role="presentation" class="list-group-item" id='guestReservation'><a href="#guestReservation" data-toggle="tab" class="guestReservation"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;&nbsp;我的预约&nbsp;&nbsp;</span></a>
		<span role="presentation" class="list-group-item" id='guestBuy'><a href="#guestBuy" data-toggle="tab" class="guestBuy"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;&nbsp;我的记录&nbsp;&nbsp;</span></a>
		<!-- <span role="presentation" class="list-group-item" id='guestCancel'><a href="#guestCancel" data-toggle="tab" class="guestCancel"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>&nbsp;&nbsp;取消行程 &nbsp;&nbsp;</span></a> -->
	</aside><!-- leftmenuWrap end -->


	<div id="rightWrap">
		<?
		$mode = $_REQUEST['mode'];

		if($mode == 2){
			$data['reservation'] = $this->myModify->myReservationPage($this->session->userdata['num']);
			$this->load->view("/mypage/m_guest2",$data);
		}else{
			$this->load->view("/mypage/m_guest0");
		}
		?>
	</div><!-- rightWrap end -->
	<div id='test'>
	</div>
</div><!-- guestWrap end -->



<script type="text/javascript">

	function goChatList(){
		location.href = "<?=site_url('auth/chat_List'); ?>";
	}

	//예약 키생성
	function insertBookNum(num,contents){
		document.getElementById('hiddenBookNum').value=num;
		//document.getElementById('cancelComment').value=contents;

		$.ajax({
			type:"POST" ,
			dataType:"text",
			contentType:"application/x-www-form-urlencoded; charset=UTF-8",
			data:{ hiddenBookNum:num },
			url:"/index.php/mypage/myPage_M/cancelDetailBook",
			success: function (data){
				document.getElementById('cancelDetail').innerHTML = data;
			}
		});
	}

	//예약취소
	function cancelBook(){
		var _hiddenBookNum = $('#hiddenBookNum').val();
		var _cancelBookText = $('#cancelComment').val();
		$.ajax({
			type:"POST" ,
			dataType:"text",
			contentType:"application/x-www-form-urlencoded; charset=UTF-8",
			data:{ hiddenBookNum:_hiddenBookNum, cancelBookText:_cancelBookText },
			url:"/index.php/mypage/myPage_M/cancelBook",
			success: function (data){
				//alert(data);
				location.href = "/index.php/mypage/myPage_M/myguest?mode=2";
			}
		});
	}

	function myBucketList(a,b){
		$.ajax({
			type:"POST" ,
			dataType:"text",
			contentType:"application/x-www-form-urlencoded; charset=UTF-8",
			data:{ sClass: a , code  : b},
			url:"/index.php/mypage/myPage_M/myBuyProduct",
			success: function (data){
				document.getElementById('listWrap').innerHTML =data;
			}
		});
	}

	function changeProduct(a, b){
		$.ajax({
			type:"POST" ,
			dataType:"text",
			contentType:"application/x-www-form-urlencoded; charset=UTF-8",
			data:{ sClass : a , code : b },
			url:"/index.php/mypage/myPage_M/myBuyProduct",
			success: function (data){
				alert(data);
				document.getElementById('listWrap').innerHTML =data;
			}
		});
	}

	function detail_page(num)
	{
		location.href = "<?=site_url('City/country/Detailcity_search?salesNum="+num+"&mode='); ?>";
	}

	$(function(){

		$('.guestHome').click( function(){
			$.ajax({
				type:"POST" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ },
				url:"/index.php/mypage/myPage_M/myGuestHome",
				success: function (data){
					//alert(data);
					document.getElementById('rightWrap').innerHTML =data;
				}
			});
		});

		$('.guestBucket').click( function(){
			$.ajax({
				type:"POST" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ },
				url:"/index.php/mypage/myPage_M/myGuestAdmin",
				success: function (data){
					//alert(data);
					document.getElementById('rightWrap').innerHTML =data;
				}
			});
		});

		$('.guestReservation').click( function(){
			$.ajax({
				type:"POST" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ },
				url:"/index.php/mypage/myPage_M/myGuestItemAdmin",
				success: function (data){
					//alert(data);
					document.getElementById('rightWrap').innerHTML =data;
				}
			});
		});

		$('.guestBuy').click( function(){
			$.ajax({
				type:"POST" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ },
				url:"/index.php/mypage/myPage_M/myGuestSalesAdmin",
				success: function (data){
					//alert(data);
					document.getElementById('rightWrap').innerHTML =data;
				}
			});
		});

		$('.guestCancel').click( function(){
			$.ajax({
				type:"POST" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ },
				url:"/index.php/mypage/myPage_M/myGuestCancelAdmin",
				success: function (data){
					document.getElementById('rightWrap').innerHTML =data;
				}
			});
		});
	});


</script>