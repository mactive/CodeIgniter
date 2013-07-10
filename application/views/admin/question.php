<div class="container ">

	<p>
		<a class="btn btn-large btn-primary" href="/backend/question/update/<?=$id?>">Edit</a>
		<a class="btn btn-large btn-danger" href="/backend/question/delete/<?=$id?>">Delete</a>
	</p>


	<table class="table table-striped">

	<?php foreach ($query as $key => $value) {
	# code...
	?>
		<tr>
			<td width="200"><?=$key ?></td>
			<td>
				<?php if ($key == "thumbnail" || $key == "image" ): ?>

					<img class="img-rounded" src="<?=$value?>">

				<?php elseif($key == 'answer'): ?>

						
						<?php foreach ($value as $k => $val): ?>
							<h5><?=$k?>: 
							<?=$val?></h5>
						<?php endforeach ?>
						
					</dd>

				<?php else: ?>
				  	<?=$value ?>

				<?php endif ?>

			</td>
		</tr>	
	<?php } ?>

	</table>
</div>