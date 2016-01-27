<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/uikit.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/animate.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/components/slideshow.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/components/slidenav.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/components/slider.css" />

	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/components/slideshow.almost-flat.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/components/slideshow.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/components/slidenav.min.css">


	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/media-queries.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/ar-style.css">
	<!-- links -->


	<!-- scripts -->
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/uikit.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/components/slideshow.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/components/slider.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/components/lightbox.min.js"></script>


	<script type="text/javascript" src="<?php echo base_url()?>assets/js/core/offcanvas.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/components/toggle.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/instaslider.jquery.js"></script>

	<!-- scripts -->

</head>
<body>
<?php
	if($login == true){
?>
<div class="uk-clearfix">
		<div class="main-nav">
		<div class="main-container">
			<nav class="uk-navbar custom-nav uk-hidden-small">
			    <ul class="uk-navbar-nav">
			        <li class="home"><a href="<?php echo base_url('auth/cpanel');?>">Home</a></li>
			        <li class="whyus"><a href="<?php echo base_url('auth/products');?>">Products</a></li>
			        <li class="aboutus"><a href="<?php echo base_url('auth/projects');?>">Projects</a></li>
			        <!--<li class="contactus"><a href="<?php echo base_url('auth/banner');?>">Banner</a></li>-->
			    </ul>
			</nav>
			<nav class="uk-navbar bg-white custom-nav2 uk-visible-small">
                <a href="#my-id" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas=""></a>
                <div class="uk-navbar-flip">
                   <!-- SEARCH BAR OR ICON HERE -->
                </div>
                <div class="uk-navbar-content uk-navbar-center">
                	<a href="index.php"><img class="logo-center" src="<?php echo base_url();?>assets/img/rwsi-logo.png" alt="Roof and Wall Saver, Inc." /></a>
            	</div>
            </nav>
		</div>
	</div>
</div>


<div id="my-id" class="uk-offcanvas">
    <div class="uk-offcanvas-bar">
        <ul class="uk-nav uk-nav-offcanvas uk-nav-parent-icon" data-uk-nav="{multiple: true}">
          <li class="uk-nav-header offcanv-header uk-text-center">
            <img class="logo-offcanv" src="<?php echo base_url()?>assets/img/logo.png" alt="Roof and Wall Saver, Inc." />
          </li>
          <li><a href="<?php echo base_url();?>"><i class="uk-icon-home offcanv-icon"></i>Home</a></li>
          <li><a href="<?php echo base_url('why-us');?>"><i class="uk-icon-question offcanv-icon"></i>Products</a></li>
          <li><a href="<?php echo base_url('about-us');?>"><i class="uk-icon-exchange offcanv-icon"></i>Projects</a></li>
          <li><a href="<?php echo base_url('contact-us');?>"><i class="uk-icon-phone offcanv-icon"></i>Banner</a></li>
      </ul>
    </div>
</div>

<?php
	}
?>



