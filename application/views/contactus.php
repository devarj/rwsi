<?php include('header.php'); ?>
	<!-- End Header -->
	<div class="main-container  main-cont">
		<div class="margin50"></div>
		<div class="uk-grid">
			<div class="uk-width-medium-2-3  margin30">
				<div id="map-canvass" style="height:430px;width:100%;"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3862.686192958878!2d120.99429002777255!3d14.502695397731374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sph!4v1442516588411" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
				<div class="margin30"></div>
				<div class="am-text-ul nopad"></div>
				<div class="margin30"></div>
				<div class="uk-grid uk-grid-medium">
					<div class="uk-width-small-1-3">
						<img src="<?php echo base_url();?>assets/img/logo.png" alt="">
					</div>
					<div class="uk-width-small-2-3">
						<div class="thmp">
							
						</div>
					</div>
				</div>
			</div>
			<div class="uk-width-medium-1-3">
			<form class="uk-form" name="myform" action="http://mailengine.88db.com.ph/" method="POST">
			<?php
				if(isset($_GET['success'])){
					if($_GET['success'] == 1){
			?>	
				<div class="uk-alert uk-alert-success">Message Successfully Sent!</div>
			<?php
				}
			}
			?>	
					<div class="uk-form-row">
                        <label class="uk-form-label">Full Name:</label>
                        <div class="uk-form-controls">
                            <input class="cont-form" type="text" name="Name"   required />
                        </div>
                    </div>
					<div class="uk-form-row">
                        <label class="uk-form-label">Address:</label>
                        <div class="uk-form-controls">
                            <input class="cont-form" type="text" name="Address"  required/>
                        </div>
                    </div>
					<div class="uk-form-row">
                        <label class="uk-form-label">E-mail Address:</label>
                        <div class="uk-form-controls">
                            <input class="cont-form" type="text" name="Email"  required/>
                        </div>
                    </div>
					<div class="uk-form-row">
                        <label class="uk-form-label">Contact Number:</label>
                        <div class="uk-form-controls">
                            <input class="cont-form" type="text" name="Phone"  required/>
                        </div>
                    </div>
					<div class="uk-form-row">
                        <label class="uk-form-label">Subject:</label>
                        <div class="uk-form-controls">
                            <input class="cont-form" type="text" name="Subject" required />
                        </div>
                    </div>
					<div class="uk-form-row">
                        <label class="uk-form-label">Message:</label>
                        <div class="uk-form-controls">
                            <textarea id="" rows="4" class="cont-form" name="Message" required></textarea>
                        </div>
                    </div>
                    <div class="margin30"></div>
                    <button type="submit" class="uk-button contact-btn">Submit</button>

                	<!-- Editable Value Only -->
				    <input type="hidden" name="Subject" value="Roof and Wall Savers"/>
				    <input type="hidden" name="sendTo" value="ferolinoreynan@gmail.com"/> <!-- This is the receipent of the email -->
					
					
				    <input type="hidden" name="ccTo" value=""/>
				    <input type="hidden" name="bcTo" value=""/>
					<!--
					BC and CC
				    <input type="hidden" name="ccTo[]" value=""/>-- if multiple CC add [] in input name else if not Remove the []
				    <input type="hidden" name="ccTo[]" value=""/>
					-->
				    <input type="hidden" name="redirect" value="http://taurus.zoom.ph/~roofandw/contact-us"/> <!-- The location after sending the email. -->
					<!-- Editable Value Only -->
				</form>	
				</div>
			</div>
		</div>
	</div><!-- End Main-container -->
	<div class="margin100"></div>
	
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script>
		function initialize() {
			var mapCanvas = document.getElementById('map-canvas');
			var myLatlng = new google.maps.LatLng(14.610725, 121.027812);
			var mapOptions = {
				center: myLatlng,
				zoom: 15,
				scaleControl: false,
				scrollwheel: false,
				disableDoubleClickZoom: true,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			}
			var map = new google.maps.Map(mapCanvas, mapOptions)
			var marker = new google.maps.Marker({
				position: myLatlng,
				map: map
			});
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>

	<script type="text/javascript">
		$(function(){
			$('.contactus').addClass('uk-active');
		})
		document.title = "Contact Us";
	</script>

<?php include('footer.php'); ?>