<div class="container ">

	<p>
		<a class="btn btn-large btn-primary" href="/backend/question/update/<?=$id?>">Edit</a>
		<a class="btn btn-large btn-danger" href="/backend/question/delete/<?=$id?>">Delete</a>
	</p>



	<dl class="dl-horizontal">

	<?php foreach ($query as $key => $value) {
	# code...
	?>
		<dt><?=$key ?></dt>

		<?php if ($key == "thumbnail"): ?>

			<dd><img class="img-rounded" src="<?=$value?>"></dd>;

		<?php elseif($key == 'answer'): ?>

			<dl class="dl-horizontal">
				<?php foreach ($value as $k => $val): ?>
					<dt><?=$k?></dt>
					<dd><?=$val?></dd>
				<?php endforeach ?>
				
			</dl>

		<?php else: ?>
		  	<dd><?=$value ?></dd>

		<?php endif ?>

	<?php } ?>
	</dl>
</div>