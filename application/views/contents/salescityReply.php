<div class="reply">
			<div class="profile_pic">
				<img src="/application/views/images/main/profile01.jpg" alt="" class="img-circle profile_image">
				<img src="/application/views/images/left_menu/flag03_usa.png" alt="" class="flag_image">
				<img src="/application/views/images/main/img22_vmark.PNG" alt="" class="vmark_image">
			</div>
			<div class="reply_text"><span class="reply_id">From Regina Paul : </span>世界的瑰宝呀，逛了一天都没看完，太漂亮了，拍了美美的照片，下次还想来呢回复有用 0 世界的瑰宝呀，逛了一天都没看完，太漂亮了，拍了美美的照片，下次还想来呢回复有用 0世界的瑰宝呀，逛了一天都没看完，太漂亮了，拍了美美的照片，下次还想来呢回复有用 0
			</div>
		</div>

		<div class="reply">
			<img src="/application/views/images/contents/reply.png" alt="" class="reply_arrow">
			<div class="profile_pic_answer">
				<img src="/application/views/images/main/profile02.jpg" alt="" class="img-circle profile_image">
				<img src="/application/views/images/left_menu/flag03_usa.png" alt="" class="flag_image">
				<img src="/application/views/images/main/img22_vmark.PNG" alt="" class="vmark_image">
			</div>
			<div class="reply_text_answer"><span class="reply_id">From xiangyu19880319 : </span>世界的瑰宝呀，逛了一天都没看完，太漂亮了，拍了美美的照片，下次还想来呢回复有用 0 世界的瑰宝呀，逛了一天都没看完，太漂亮了，拍了美美的照片，下次还想来呢回复有用 0世界的瑰宝呀，逛了一天都没看完，太漂亮了，拍了美美的照片，下次还想来呢回复有用 0世界的瑰宝呀，逛了一天都没看完，太漂亮了，拍了美美的照片，下次还想来呢回复有用 0 世界的瑰宝呀，逛了一天都没看完，太漂亮了，拍了美美的照片，下次还想来呢回复有用 0世界的瑰宝呀，逛了一天都没看完，太漂亮了，拍了美美的照片，下次还想来呢回复有用 0世界的瑰宝呀，逛了一天都没看完，太漂亮了，
			</div>

		<div class="typingBox">
			<div class="profile_pic">
				<img src="<?=$this->session->userdata['face_img_path']?>" alt="" class="img-circle profile_image">
				<img src="<?=$this->session->userdata['country_img']?>" alt="" class="flag_image">
				<?if($this->session->userdata['country_img'] == "0001"){?>
					<img src="/application/views/images/main/img22_vmark.PNG" alt="" class="vmark_image">
				<?}?>
			</div>
				<textarea name="typingArea" id="quetionArea" cols="30" rows="10" class="typingArea"></textarea>
				<button class="btn btnQna" id="quetion"name="quetion" onclick="insertQuetion('<?=$this->session->userdata['num']?>')">上传</button>
		</div>