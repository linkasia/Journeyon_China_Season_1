<?foreach($review as $v){?>
		<div class="reply">
			<div class="profile_pic">
				<img src="<?=$v->face_img_path?>" alt="" class="img-circle profile_image">
				<img src="<?=$v->country_flog?>" alt="" class="flag_image">
				<?if($v->v_get_code == "0001"){?>
					<img src="/application/views/images/main/img22_vmark.PNG" alt="" class="vmark_image">
				<?}?>
			</div>
			<div class="reply_text"><span class="reply_id"><?=$v->Name_cn_en?> : </span><?=$v->content?>
			<br><span class="time_log"><?=$v->create_date?></span>
			<?if(@$this->session->userdata['logged_in'] == TRUE){
					if($this->session->userdata['num'] == $v->user_num){?>
					<br><span class="addReply" id='add_Reply' onclick="addReviewReply('<?=$v->review_num?>')"><ins>add a comment</ins></span>
				<?}
			}?>
			</div>
		</div>
		<div id='addReviewReply<?=$v->review_num?>'> </div>

		<?foreach($reviewAnswer as $k){
			if( $v->review_num == $k->review_num){?>
				<div class="reply">
					<img src="/application/views/images/contents/reply.png" alt="" class="reply_arrow">
					<div class="profile_pic_answer">
						<img src="<?=$k->face_img_path?>" alt="" class="img-circle profile_image">
						<img src="<?=$k->country_flog?>" alt="" class="flag_image">
						<?if($v->v_get_code == "0001"){?>
							<img src="/application/views/images/main/img22_vmark.PNG" alt="" class="vmark_image">
						<?}?>
					</div>
					<div class="reply_text_answer"><span class="reply_id"><?=$k->Name_cn_en?> : </span><?=$k->content?>
					<br><span class="time_log"><?=$k->create_date?></span>
					</div>
				</div>
			<?}
			}?>
<?}?>
	<?if($orderBook != ""){
			if(count($orderBook) > 0){?>
		<div class="typingBox">
			<div class="profile_pic">
				<img src="<?=$this->session->userdata['face_img_path']?>" alt="" class="img-circle profile_image">
				<img src="<?=$this->session->userdata['country_img']?>" alt="" class="flag_image">
				<?if($this->session->userdata['country_img'] == "0001"){?>
					<img src="/application/views/images/main/img22_vmark.PNG" alt="" class="vmark_image">
				<?}?>
			</div>
				<textarea name="reviewArea" id="reviewArea" cols="30" rows="10" class="typingArea"></textarea>
				<button class="btn btnQna" id="review"name="review" onclick="insertReview('<?=$this->session->userdata['num']?>')">上传</button>
		</div>
	<?}
	}?>