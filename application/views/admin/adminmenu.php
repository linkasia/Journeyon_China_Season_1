<div id="adminWrap">
	<aside id="leftmenuWrap" class="mt20 mr20">
		<span class="list-group-item active" id='admin'>Admin Menu</span>
		<!--span class="list-group-item" id='adminMain'>Main</span-->
		<span class="list-group-item" id='adminMember'>Member</span>
		<span class="list-group-item" id='adminProduct'>Product</span>
		<span class="list-group-item" id='adminBook'>Book</span>
		<span class="list-group-item" id='adminNotice'>Notice</span>
		<span class="list-group-item" id='adminBoard'>Board</span>
	</aside><!-- leftmenuWrap end -->
	<div id='adminrightWrap'>
	<?

		$mode = $_REQUEST['mode'];

		if($mode==2){
			$data['productList']=$this->adminProcess->productAppovList();
			$this->load->view('admin/03Product',$data);
		}else{
			$data['member']=$this->adminProcess->memberList();
			$this->load->view('admin/02Member',$data);
		}
	?>
	</div>
</div>



<script type="text/javascript">
	$(function(){
		$('#adminMain').click( function(){
			$.ajax({
				type:"POST" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ },
				url:"/index.php/admin/adminMenu/mainMenu",
				success: function (data){
					//alert(data);
					document.getElementById('adminrightWrap').innerHTML =data;
				}
			});
		});

		$('#adminMember').click( function(){
			$.ajax({
				type:"POST" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ },
				url:"/index.php/admin/adminMenu/mainMember",
				success: function (data){
					//alert(data);
					document.getElementById('adminrightWrap').innerHTML =data;
				}
			});
		});

		$('#adminProduct').click( function(){
			$.ajax({
				type:"POST" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ },
				url:"/index.php/admin/adminMenu/mainProduct",
				success: function (data){
					//alert(data);
					document.getElementById('adminrightWrap').innerHTML =data;
				}
			});
		});

		$('#adminBook').click( function(){
			$.ajax({
				type:"POST" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ },
				url:"/index.php/admin/adminMenu/mainBook",
				success: function (data){
					//alert(data);
					document.getElementById('adminrightWrap').innerHTML =data;
				}
			});
		});

		$('#adminNotice').click( function(){
			$.ajax({
				type:"POST" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ },
				url:"/index.php/admin/adminMenu/mainNotice",
				success: function (data){
					//alert(data);
					document.getElementById('adminrightWrap').innerHTML =data;
				}
			});
		});

		$('#adminBoard').click( function(){
			$.ajax({
				type:"POST" ,
				dataType:"text",
				contentType:"application/x-www-form-urlencoded; charset=UTF-8",
				data:{ },
				url:"/index.php/admin/adminMenu/mainBoard",
				success: function (data){
					//alert(data);
					document.getElementById('adminrightWrap').innerHTML =data;
				}
			});
		});
	});

	function Vget(key){
		$.ajax({
			type:"POST" ,
			dataType:"text",
			contentType:"application/x-www-form-urlencoded; charset=UTF-8",
			data:{ user_num:key },
			url:"/index.php/admin/adminMenu/memberVget",
			success: function (data){
				document.getElementById('modalVget').innerHTML =data;
			}
		});
	}

	//V인증승인
	function vAppove(key,userNum){
		$.ajax({
			type:"POST" ,
			dataType:"text",
			contentType:"application/x-www-form-urlencoded; charset=UTF-8",
			data:{ user_num:userNum, appovekey : key, banTextarea:null },
			url:"/index.php/admin/adminMenu/memberVgetAppove",
			success: function (data){
				location.href = "/index.php/admin/adminMenu/mainTotalMenu?mode=";
			}
		});
	}

	//V인증반려
	function vUnAppove(key,userNum){
		var _banTextarea = $('#banTextarea').val();
		$.ajax({
			type:"POST" ,
			dataType:"text",
			contentType:"application/x-www-form-urlencoded; charset=UTF-8",
			data:{ user_num:userNum, appovekey : key, banTextarea:_banTextarea },
			url:"/index.php/admin/adminMenu/memberVgetUnAppove",
			success: function (data){
				location.href = "/index.php/admin/adminMenu/mainTotalMenu?mode=";
			}
		});
	}

	function Pget(key){
		$.ajax({
			type:"POST" ,
			dataType:"text",
			contentType:"application/x-www-form-urlencoded; charset=UTF-8",
			data:{ user_num:key },
			url:"/index.php/admin/adminMenu/memberPget",
			success: function (data){

				document.getElementById('modalPget').innerHTML =data;
			}
		});
	}

	function profileChk(num)
	{
		window.open("/index.php/mypage/myPage_M/mypublic?userNum="+num+"",'', '');
	}

	//P인증승인
	function gAppove(key,userNum){
		$.ajax({
			type:"POST" ,
			dataType:"text",
			contentType:"application/x-www-form-urlencoded; charset=UTF-8",
			data:{ user_num:userNum, appovekey : key, banTextarea:null },
			url:"/index.php/admin/adminMenu/memberPgetAppove",
			success: function (data){
				location.href = "/index.php/admin/adminMenu/mainTotalMenu?mode=";
			}
		});
	}

	//V인증반려
	function gUnAppove(key,userNum){
		var _banTextarea = $('#banTextarea').val();
		$.ajax({
			type:"POST" ,
			dataType:"text",
			contentType:"application/x-www-form-urlencoded; charset=UTF-8",
			data:{ user_num:userNum, appovekey : key, banTextarea:_banTextarea },
			url:"/index.php/admin/adminMenu/memberPgetUnAppove",
			success: function (data){
				//alert(data);
				location.href = "/index.php/admin/adminMenu/mainTotalMenu?mode=";
			}
		});
	}

	function PGget(key){
		$.ajax({
			type:"POST" ,
			dataType:"text",
			contentType:"application/x-www-form-urlencoded; charset=UTF-8",
			data:{ user_num:key },
			url:"/index.php/admin/adminMenu/memberPGget",
			success: function (data){

				document.getElementById('modalPGget').innerHTML =data;
			}
		});
	}

	//PG인증승인
	function pgAppove(key,userNum){
		$.ajax({
			type:"POST" ,
			dataType:"text",
			contentType:"application/x-www-form-urlencoded; charset=UTF-8",
			data:{ user_num:userNum, appovekey : key, banTextarea:null },
			url:"/index.php/admin/adminMenu/memberPggetAppove",
			success: function (data){
				location.href = "/index.php/admin/adminMenu/mainTotalMenu?mode=";
			}
		});
	}

	//PG인증반려
	function pgUnAppove(key,userNum){
		var _banTextarea = $('#banTextarea').val();
		$.ajax({
			type:"POST" ,
			dataType:"text",
			contentType:"application/x-www-form-urlencoded; charset=UTF-8",
			data:{ user_num:userNum, appovekey : key, banTextarea:_banTextarea },
			url:"/index.php/admin/adminMenu/memberPggetUnAppove",
			success: function (data){
				//alert(data);
				location.href = "/index.php/admin/adminMenu/mainTotalMenu?mode=";
			}
		});
	}

	function productAppov(productKey){
		$.ajax({
			type:"POST" ,
			dataType:"text",
			contentType:"application/x-www-form-urlencoded; charset=UTF-8",
			data:{ product_num:productKey },
			url:"/index.php/admin/adminMenu/productAppove",
			success: function (data){
				location.href = "/index.php/admin/adminMenu/mainTotalMenu?mode=2";
			}
		});
	}

	function productUnAppov(productKey,userNum){
		$.ajax({
			type:"POST" ,
			dataType:"text",
			contentType:"application/x-www-form-urlencoded; charset=UTF-8",
			data:{ product_num:productKey,user_num : userNum },
			url:"/index.php/admin/adminMenu/productUnAppove",
			success: function (data){
				location.href = "/index.php/admin/adminMenu/mainTotalMenu?mode=2";
			}
		});
	}


	//상품미리보기
	function proviewSales(salesNum){
		var popUrl = "/index.php/city/country/proviewSales?salesNum="+salesNum;
		var popOption = "width=680, height=900, resizable=no, scrollbars=no, status=no;";
		window.open(popUrl,"",popOption);

	}
</script>