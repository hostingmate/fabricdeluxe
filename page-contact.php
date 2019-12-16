			<?php get_header(); ?>
			<section id="content" class="container-fluid no-gutters my-5">
				<div class="row" id="content_main">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-12 col-lg-6 text-center my-5">
								<!-- MAP -->
								<div id="map" style="height:500px; box-shadow: 0 4px 6px rgba(50,50,93,.11), 0 1px 3px rgba(0,0,0,.08); border-radius:1rem;"></div>
							    <script>
							    	function initMap() {
							    		var myLatLng = new google.maps.LatLng(-37.805000, 144.902950);

										var map = new google.maps.Map(document.getElementById( 'map' ), {
											zoom: 17,
											center: myLatLng
										});

										var marker = new google.maps.Marker({
											position: myLatLng,
											map: map,
											icon: 'https://storage.googleapis.com/fabric-deluxe-official/2019/08/3acc8a77-pin.png'
										});
									}
							    </script>
							    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkS_8dx5dZ2hmrUth4TnGknFwwPp2do5M&callback=initMap" async defer></script>
							</div>
							<div class="col-12 col-lg-6 text-center my-5">
								<!-- OPENING HOURS -->
								<h4>Opening Hours</h4>
								<table class="table table-borderless">
									<tbody>
										<tr>
											<td class="w-50 text-right font-weight-bold">TUE, WED, SAT</td>
											<td class="w-50 text-left">10am - 5pm</td>
										</tr>
										<tr>
											<td class="w-50 text-right font-weight-bold">THUR, FRI</td>
											<td class="w-50 text-left">10am - 6pm</td>
										</tr>
										<tr>
											<td class="w-50 text-right font-weight-bold">SUN, MON</td>
											<td class="w-50 text-left">CLOSED</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="row align-items-center">
							<div class="col-12 col-lg-6 text-center my-5">
								<!-- CONTACT DETAILS -->
								<div class="p-3">
									<h4><i class="fal fa-envelope-open-text" style="font-size:1.5rem; margin-right:0.5rem;"></i>Email Us</h4>
									<a href="mailto:info@fabricdeluxe.com">info@fabricdeluxe.com</a>
								</div>

								<div class="p-3">
									<h4><i class="fal fa-map-marker" style="font-size:1.5rem; margin-right:0.5rem;"></i>Visit Us</h4>
									<a href="">47 Napier Street, Footscray VIC 3011</a>
								</div>

								<div class="p-3">
									<h4><i class="fal fa-phone-office" style="font-size:1.5rem; margin-right:0.5rem;"></i>Call Us</h4>
									<a href="tel:+61396876895">(+61)3 9687 6895</a>
								</div>
							</div>
							<div class="col-12 col-lg-6 text-center my-5">
								<!-- CONTACT FORM -->
								<h4 class="text-left"><i class="fal fa-edit" style="font-size:1.5rem; margin-right:0.5rem;"></i>Get In Touch</h4>
								<?php echo do_shortcode( '[contact-form-7 id="11353" title="Contact Us"]' ); ?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<?php get_footer(); ?>