<div class="main-container  main-cont">
<h2><?php echo $title; ?> <a href="<?php echo base_url('auth/viewaddproject'); ?>" class="uk-btn">Add</a></h2>
<table class="uk-table" border="1">
									
	<thead>
		<tr>
			<th class="uk-text-center"><h2><strong>ID</strong></h2></th>
			<th class="uk-text-center"><h2><strong>Name</strong></h2></th>
			<th class="uk-text-center"><h2><strong>Image</strong></h2></th>
			<th class="uk-text-center"><h2><strong>Status</strong></h2></th>
			<th class="uk-text-center"><h2><strong>Action</strong></h2></th>
		</tr>
	</thead>
	
	<tbody>
	<?php
		foreach($projects as $proj){
	?>
		<tr>
			<td><?php echo $proj->id; ?></td>
			<td><?php echo $proj->name; ?></td>
			<td>
			<?php
				if($proj->image != ''){
			?>
				<img src="<?php echo base_url('uploads/projects/'.$proj->image); ?>" width="150" height="100" />
			<?php
				}
				else{
			?>
				<img src="<?php echo base_url('assets/img/building.jpg'); ?>" width="150" height="100" />
			<?php
				}
			?>
			</td>
			<td><select name="status" class="status" data-id="<?php echo $proj->id; ?>">
			<option value="">-Select Status-</option>
			<option value="current" <?php echo ($proj->status == 'current') ? 'selected': '';?>>Current</option>
			<option value="completed" <?php echo ($proj->status == 'completed') ? 'selected': '';?>>Completed</option>
			</select></td>
			<td><a href="<?php echo base_url('auth/delete/projects/'.$proj->id); ?>" onClick="return confirm('Are you sure to Delete This?')">Delete</a></td>
		</tr>
	<?php
		}
	?>
	</tbody>
</table>
</div>
<script>
	$(function(){
		$('.status').change(function(){
			var curVal = $(this).val();
			var curID = $(this).attr('data-id');
			if(curVal != ''){
				if(confirm('Are you sure to change this?')){
					window.location.href = "<?php echo base_url('auth/changestatus'); ?>/"+curID+'/'+curVal;
				}	
			}
		});
	});
</script>