<div class="container ">

	<p>
		<a class="btn btn-large btn-primary" href="/backend/question/view/<?=$id?>">Back</a>
	</p>

<script type="text/javascript">
	$(document).ready(function() {
		$('select[name|=grade]').val('<?=$query['grade']?>');
		$('select[name|=height]').val('<?=$query['height']?>');
		$('select[name|=slice]').val('<?=$query['slice']?>');
		$('select[name|=type]').val('<?=$query['type']?>');
    });
</script>

<form class="form-horizontal" action="/curd/question_update" method="post" enctype="Multipart/form-data">
	<?php foreach ($query as $key => $value) {
	# code...
	?>
		<div class="control-group">
		    <label class="control-label" for="<?=$key ?>"><?=$key ?></label>
		    <div class="controls">

		    	<!-- 问题ID -->
		    	<?php if ($key == 'id'): ?>
		    		<span class="input-normal uneditable-input"><?=$value?></span>
		    		<input type="hidden" name="id" value="<?=$value?>">

		    	<!-- 问题答案可以添加删除 js控制 -->
		    	<?php elseif($key == 'answer'): ?>

					<div id="answer_container">
		    			<?php foreach ($value as $key => $value): ?>
		    			
		    			<div class="input-prepend">
						  <span class="add-on"><?=$key ?></span>
						  <input class="span2" name="answer[]"
						  	type="text" placeholder="Username" value="<?=$value ?>">
						</div>
						<br>
		    			<?php endforeach ?>


		    			<p style="display:none;">
						  <button class="btn btn-small btn-success" type="button">
						  	<i class="icon-plus"></i></button>
						  <button class="btn btn-small" type="button">						  	
						  	<i class="icon-minus"></i></button>
						</p>
		    		</div>


		    	<!-- 问题图片 js控制 -->
		    	<?php elseif($key == 'thumbnail'): ?>

				<a class="btn btn-success" data-target="#thumbnail-item" data-toggle="modal">Upload</a>

				<input type="hidden" id="thumbnail_input" name="thumbnail"  value="<?=$value ?>">

				<img src="<?=$value ?>" class="img-polaroid 200px">

		    	<!-- 大图图片 js控制 -->
		    	<?php elseif($key == 'image'): ?>

				<a class="btn btn-success" data-target="#image-item" data-toggle="modal">Upload</a>

				<input type="hidden" id="image_input" name="image"  value="<?=$value ?>">

				<img src="<?=$value ?>" class="img-polaroid 200px">


		    	<!-- 问题 难度 -->
		    	<?php elseif($key == 'grade'): ?>
		    	<select class="span1" name="grade">
					<option value="easy">easy</option>
					<option value="normal">normal</option>
					<option value="hard">hard</option>
				</select>


		    	<!-- 问题高度 -->
		    	<?php elseif($key == 'height'): ?>
		    	<select class="span1" name="height">
					<option value="480">480</option>
					<option value="640">640</option>
				</select>


		    	<!-- 问题切片 -->
		    	<?php elseif($key == 'slice'): ?>
		    	<select class="span1" name="slice">
					<option value="3">3</option>
					<option value="6">6</option>
				</select>

				<!-- 问题切片 -->
		    	<?php elseif($key == 'type'): ?>
		    	<select class="span1" name="type">
					<option value="car">car</option>
					<option value="other">other</option>
				</select>

		    	<!-- 问题ID -->
				<?php else: ?>

				<input type="text" name="<?=$key?>"  value="<?=$value?>">

		    	<?php endif; ?>

		    </div>
	  	</div>

	<?php } ?>

  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-primary">Submit</button>
      <button type="reset" class="btn">Reset</button>
    </div>
  </div>
</form>


<!-- thumbnail content-->

<div class="modal hide fade" id="thumbnail-item">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">x</button>
        <h3>Upload Thumbnail</h3>
    </div>


    <iframe src="/upyunio/upload_form/thumbnail_input" style="width:100%;height:100px;border:none;">

    </iframe>


    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
    </div>
</div>

<!-- thumbnail content-->

<div class="modal hide fade" id="image-item">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">x</button>
        <h3>Upload Image</h3>
    </div>


    <iframe src="/upyunio/upload_form/image_input" style="width:100%;height:100px;border:none;">

    </iframe>


    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
    </div>
</div>

<!-- ///// -->

</div>