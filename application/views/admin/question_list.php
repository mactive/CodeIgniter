
<div class="container">
<div class="row question_list">

	<?php foreach ($query as $key => $value) {
	# code...
	?>
		<div class="span2">
			<a href="/backend/question/<?=$value['id'] ?>" 
			 	style="background-image:url('<?=$value['thumbnail'] ?>');">
			</a>

			<p class="text-left">ID<?=$value['id'] ?>: <?=$value['title'] ?></p>

		</div>


	<?php } ?>

</div>

</div>