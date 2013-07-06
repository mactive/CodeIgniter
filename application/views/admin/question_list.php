<div class="row question_list pl_20px">

	<?php foreach ($query as $key => $value) {
	# code...
	?>
		<div class="span2">
			<a href="/backend/question/<?=$value['id'] ?>" 
			 	style="background:url('<?=$value['thumbnail'] ?>');">
			</a>

			<?=$value['title'] ?>

		</div>


	<?php } ?>

</div>