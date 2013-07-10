<div class="container ">

	<p>
		<a class="btn btn-large btn-primary" href="/backend/question/update/<?=$id?>">Edit</a>
		<a class="btn btn-large btn-danger" data-target="#delete-item" data-toggle="modal">Delete</a>
	</p>

<!-- thumbnail content-->

<div class="modal hide fade" id="delete-item">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">x</button>
        <h3>Delete Question</h3>
    </div>

    <div class="modal-footer">
    	<a href="/backend/question/delete/<?=$id?>" class="btn btn-danger">YES DELETE</a>
        <a href="#" class="btn" data-dismiss="modal">Close</a>
    </div>
</div>

<!-- ///// -->

	<table class="table table-striped">

	<?php foreach ($query as $key => $value) {
	# code...
	?>
		<tr>
			<td width="200"><?=$key ?></td>
			<td>
				<?php if ($key == "thumbnail" || $key == "image" ): ?>

					<img class="img-rounded max200" src="<?=$value?>">

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