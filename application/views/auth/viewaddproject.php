<div class="main-container  main-cont">
<h2><?php echo $title; ?></h2>
<?php echo form_open_multipart('auth/addproject'); ?>
Name: <input type="text" name="name" /></br />
Image: <input type="file" name="image" /></br />
Status: <select name="status">
	<option value="">-Select Status-</option>
	<option value="current">Current</option>
	<option value="completed">Completed</option>
	</select>
	<input type="submit" value="Submit" />
</div>