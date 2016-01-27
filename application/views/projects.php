<?php include('header.php'); ?>
	<!-- End Header -->
	<div class="main-container  main-cont">
		<div class="home-text-bottom">
			<div class="hr-red">
				<span class="hl-text"><?php echo ucfirst($title); ?> Projects</span>
			</div>
		</div>
		<div class="uk-grid">
		<?php
			foreach($projects as $proj){
		?>
			<div class="uk-width-small-1-5">
				<div class="am-grid">
				<?php
					if($proj->image != ''){
				?>
					<div class="img" style="background:url('<?php echo base_url('uploads/projects/'.$proj->image);?>') no-repeat center / cover ;"></div>
				<?php
					}
					else{
				?>
					<div class="img" style="background:url('<?php echo base_url('assets/img/building.jpg');?>') no-repeat center / cover ;"></div>
				<?php
					}
				?>
					<div class="am-details">
						<div class="title"><?php echo $proj->name; ?></div>
					</div>
				</div>
			</div>
		<?php
			}
		?>
		</div>


	</div><!-- End Main-container -->
	<div class="margin100"></div>

	<script type="text/javascript">
		$(function(){
			$('.projects').addClass('uk-active');
		})
		document.title = "Roof and Wall Saver, Inc. - Projects";
	</script>

<?php include('footer.php'); ?>