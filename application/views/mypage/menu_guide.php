<div id="guideWrap">
	<aside id="leftmenuWrap">
		<span class="list-group-item active2">微导主页</span>
		<span role="presentation" class="list-group-item" id='guideHome'><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;&nbsp;<a href="#guideHome" data-toggle="tab">关于微导</a></span>
		<span role="presentation" class="list-group-item" id='guideR'><span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span>&nbsp;&nbsp;<a href="#guideR" data-toggle="tab">微导认证申请</a></span>
		<span role="presentation" class="list-group-item" id='itemAdmin'><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;&nbsp;<a href="#itemAdmin" data-toggle="tab">微旅程管理</a>&nbsp;&nbsp;</span>
		<span role="presentation" class="list-group-item" id='salesAdmin'><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;&nbsp;<a href="#salesAdmin" data-toggle="tab">订单交易管理&nbsp;&nbsp;</a></span>
		<!--span class="list-group-item" id='cancelAdmin'><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>&nbsp;&nbsp;订单取消管理&nbsp;&nbsp;</span-->
	</aside><!-- leftmenuWrap end -->



	<div id="rightWrap">
		<?
			$mode = $_REQUEST['mode'];
			if($mode == "1"){
				$this->load->view('mypage/m_guide1');
			}else if($mode == "2"){
				$data['reservation'] = $this->myModify->myReservationPage($this->session->userdata['num']);
				$data['mode']="";
				$this->load->view('mypage/m_guest2', $data);
			}else if($mode == "3"){
				$update['stateCode'] = $this->myModify->updateBookView($this->session->userdata['num']);
				$data['reservation'] = $this->myModify->mySellPage($this->session->userdata['num']);
				$this->load->view('mypage/m_guide3', $data);
			}else{
				$this->load->view("/mypage/m_guide0");
			}
		?>
	</div><!-- rightWrap end -->

</div><!-- guideWrap end -->

<script type="text/javascript">
	function proviewSales(salesNum){
		var popUrl = "/index.php/city/country/proviewSales?salesNum="+salesNum;
		var popOption = "width=780, height=900, resizable=no, scrollbars=no, status=no;";
		window.open(popUrl,"",popOption);

	}

	function sales(){
		$.ajax({
			type:"POST" ,
			dataType:"text",
			contentType:"application/x-www-form-urlencoded; charset=UTF-8",
			data:{ },
			url:"/index.php/mypage/myPage_M/salesPage",
			success: function (data){
				document.getElementById('product_tab').innerHTML =data;
			}
		});
	}

	function registring(){
		$.ajax({
			type:"POST" ,
			dataType:"text",
			contentType:"application/x-www-form-urlencoded; charset=UTF-8",
			data:{ },
			url:"/index.php/mypage/myPage_M/registringPage",
			success: function (data){
				document.getElementById('product_tab').innerHTML =data;
			}
		});
	}

	function goChatList(){
		location.href = "<?=site_url('auth/chat_List'); ?>";
	}

	function stop(){
		$.ajax({
			type:"POST" ,
			dataType:"text",
			contentType:"application/x-www-form-urlencoded; charset=UTF-8",
			data:{ },
			url:"/index.php/mypage/myPage_M/stopPage",
			success: function (data){
				document.getElementById('product_tab').innerHTML =data;
			}
		});
	}

	function productModify(key){
		//location.href = "/index.php/City/country/productUpdate?maxProduct="+key+"";
	}

	function productStop(key){
		$.ajax({
			type:"POST" ,
			dataType:"text",
			contentType:"application/x-www-form-urlencoded; charset=UTF-8",
			data:{ productNum:key },
			url:"/index.php/mypage/myPage_M/salesStop",
			success: function (data){
				//alert(data);
				location.href = "/index.php/mypage/myPage_M/myguide?mode=2";
			}
		});
	}

	function productDelete(key){
		$.ajax({
			type:"POST" ,
			dataType:"text",
			contentType:"application/x-www-form-urlencoded; charset=UTF-8",
			data:{ productNum:key },
			url:"/index.php/mypage/myPage_M/salesDelete",
			success: function (data){
				if(data =="fail"){
					alert("가이드 예약이 있는 상품입니다. 삭제 실패");
				}else{
					location.href = "/index.php/mypage/myPage_M/myguide?mode=2";
				}
			}
		});
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
				location.href = "/index.php/mypage/myPage_M/myguide?mode=3";
			}
		});
	}

	$(function(){
		$('#guideHome').click( function(){
			$.ajax({
				type:"POST" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ },
				url:"/index.php/mypage/myPage_M/myGuideHome",
				success: function (data){
					//alert(data);
					document.getElementById('rightWrap').innerHTML =data;
				}
			});
		});

		$('#guideR').click( function(){
			$.ajax({
				type:"POST" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ },
				url:"/index.php/mypage/myPage_M/myGuideAdmin",
				success: function (data){
					//alert(data);
					document.getElementById('rightWrap').innerHTML =data;
				}
			});
		});

		$('#itemAdmin').click( function(){
			$.ajax({
				type:"POST" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ },
				url:"/index.php/mypage/myPage_M/myItemAdmin",
				success: function (data){
					//alert(data);
					document.getElementById('rightWrap').innerHTML =data;
				}
			});
		});

		$('#salesAdmin').click( function(){
			$.ajax({
				type:"POST" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ },
				url:"/index.php/mypage/myPage_M/mySalesAdmin",
				success: function (data){
					//alert(data);
					document.getElementById('rightWrap').innerHTML =data;
				}
			});
		});

		$('#cancelAdmin').click( function(){
			$.ajax({
				type:"POST" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ },
				url:"/index.php/mypage/myPage_M/myCancelAdmin",
				success: function (data){
					document.getElementById('rightWrap').innerHTML =data;
				}
			});
		});

	});
</script>