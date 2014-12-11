<div id="mypage_wrap"> <!-- 컨텐츠 영역 나중에 include -->
	<aside class="list-group">
		<span class="list-group-item active">PROFILE MENU<img src="/application/views/images/mypage/icon_a.png" class="icon_profile" alt="profile_icon"> </span>
		<span class="list-group-item">&nbsp;&nbsp;My Profile</span>
		<span class="list-group-item">&nbsp;&nbsp;Chat<!-- <img src="/application/views/images/mypage/icon_b.png" alt=""> --></span>
		<span class="list-group-item">&nbsp;&nbsp;Account<!-- <img src="/application/views/images/mypage/icon_e.png" alt=""> --></span>
		<span class="list-group-item active">Host<img src="/application/views/images/mypage/icon_c.png" class="icon_host" alt="host_icon"></span>
		<span class="list-group-item">&nbsp;&nbsp;Product</span>
		<span class="list-group-item">&nbsp;&nbsp;Sales</span>
		<span class="list-group-item">&nbsp;&nbsp;Cancel</span>
		<span class="list-group-item">&nbsp;&nbsp;Profit</span>
		<span class="list-group-item active">Guest<img src="/application/views/images/mypage/icon_d.png" class="icon_guest" alt="guest_icon"></span>
		<span class="list-group-item">&nbsp;&nbsp;상담리스트</span>
		<span class="list-group-item">&nbsp;&nbsp;I wish</span>
		<span class="list-group-item">&nbsp;&nbsp;Have Been</span>
		<span class="list-group-item">&nbsp;&nbsp;Cancel</span>
	</aside>

	<!-- 여기서 부터 우측영역 -->
	<section id="mypage_rightWrap">
		<?//$this->load->view("/mypage/myprofile");?>
		<?//$this->load->view("/mypage/mypageChat");?>
		<?$this->load->view("/mypage/mypageAccount");?>
	</section>
</div>
