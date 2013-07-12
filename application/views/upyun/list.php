<div class="container ">

	<?php foreach ($list as $key => $value): ?>
		
		<span class='span2'>
			
			<img src="<?=$path?>/t/<?=$value['name']?>!200pxWidth" alt="">
			<?=$value['name']?>
		</span>

	<?php endforeach ?>
	
</div>