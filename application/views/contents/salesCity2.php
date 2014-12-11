<?
//$regUser = "";
foreach($salesCityQnA as $v){

?>
			<div class="reply"><!-- 질문 부분 -->
				<div class="profile_pic">
					<img src="<?=$v->face_img_path?>" alt="" class="img-circle profile_image">
					<img src="<?=$v->country_flog?>" alt="" class="flag_image">
					<?if($v->v_get_code == "0001"){?>
						<img src="/application/views/images/main/img22_vmark.PNG" alt="" class="vmark_image">
					<?}?>
				</div>
				<div class="reply_textQnA"><span class="reply_id"><?=$v->Name_cn_en?> : </span><?=$v->content?>
				<br><span class="time_log"><?=$v->create_date?></span>
				<br><span class="addReply">add a comment</span>
				</div>
			</div>
			
			<div class="reply"><!-- 답변 달리는 부분 -->
				<img src="/application/views/images/contents/reply.png" alt="" class="reply_arrow">
				<div class="profile_pic_answer">
					<img src="<?=$v->face_img_path?>" alt="" class="img-circle profile_image">
					<img src="<?=$v->country_flog?>" alt="" class="flag_image">
					<?if($v->v_get_code == "0001"){?>
						<img src="/application/views/images/main/img22_vmark.PNG" alt="" class="vmark_image">
					<?}?>
				</div>
				<div class="reply_text_answerQnA"><span class="reply_id"><?=$v->Name_cn_en?>： </span><?=$v->content?>
				<br><span class="time_log"><?=$v->create_date?></span>
				<br><span class="addReply">add a comment</span>
				</div>
			</div>
<?}?>
			<div class="typingBox">
				<div class="profile_pic">
					<img src="/application/views/images/main/profile01.jpg" alt="" class="img-circle profile_image">
					<img src="/application/views/images/left_menu/flag03_usa.png" alt="" class="flag_image">
					<img src="/application/views/images/main/img22_vmark.PNG" alt="" class="vmark_image">
				</div>
					<textarea name="typingArea" id="" cols="30" rows="10" class="typingArea"></textarea>
					<button class="btn btnQna">上传</button>
			</div>