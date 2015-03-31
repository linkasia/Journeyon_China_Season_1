<div class="title"><div class="underline">Q & A</div></div>  <!-- 라인 들어가는 타이틀 city부분 복제 -->
<div class="blueborder2"><span class="glyphicon glyphicon-info-sign bf"></span>  호스트에게 무엇이든 물어보세요</div>
<?
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
				<?if(@$this->session->userdata['logged_in'] == TRUE){
						if($this->session->userdata['num'] == $v->user_num){?>
					<br><span class="addReply" id='add_Reply' onclick="addReply('<?=$v->qna_num?>')"><ins>add a comment</ins></span>
				<?}
				}?>
				</div>
			</div>
			<div id='addReply<?=$v->qna_num?>'> </div>
			<?foreach($salesCityQnA2 as $k){
			if( $v->qna_num == $k->qna_num){?>
				<div class="reply"><!-- 답변 달리는 부분 -->
					<img src="/application/views/images/contents/reply.png" alt="" class="reply_arrow">
					<div class="profile_pic_answer">
						<img src="<?=$k->face_img_path?>" alt="" class="img-circle profile_image">
						<img src="<?=$k->country_flog?>" alt="" class="flag_image">
						<?if($v->v_get_code == "0001"){?>
							<img src="/application/views/images/main/img22_vmark.PNG" alt="" class="vmark_image">
						<?}?>
					</div>
					<div class="reply_text_answerQnA"><span class="reply_id"><?=$k->Name_cn_en?>： </span><?=$k->content?>
					<br><span class="time_log"><?=$k->create_date?></span>
					</div>
				</div>
			<?}
			}
			?>

<?}?>
<?
		if(@$this->session->userdata['logged_in'] == TRUE)
		{
			if($this->session->userdata['email']!=null){
			?>
			<div class="typingBox">
				<div class="profile_pic">
					<img src="<?=$this->session->userdata['face_img_path']?>" alt="" class="img-circle profile_image">
					<img src="<?=$this->session->userdata['country_img']?>" alt="" class="flag_image">
					<?if($this->session->userdata['country_img'] == "0001"){?>
						<img src="/application/views/images/main/img22_vmark.PNG" alt="" class="vmark_image">
					<?}?>
				</div>
					<textarea name="quetionArea" id="quetionArea" cols="30" rows="10" class="typingArea"></textarea>
					<button class="btn btnQna" id="review"name="review" onclick="insertQuetion('<?=$this->session->userdata['num']?>')">上传</button>
			</div>
		<?}
		}?>