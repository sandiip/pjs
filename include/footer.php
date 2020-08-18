		<!-- Footer
		============================================= -->
		<footer id="footer" class="bg-color dark">
			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap">
					<div class="row">

						<div class="col-lg-5 col-md-3 col-6">
							<a href="index.html"><img src="demos/assets/images/logo-footer.png" alt="Logo Footer" height="80"></a>
							<!-- <p class="text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, nesciunt excepturi dolor. Animi, voluptate.</p> -->
						</div>

						<div class="col-lg-2 col-md-3 col-6">
							<div class="widget clearfix">

								<h3 class="ls0 h5 mb-4">Features</h3>

								<ul class="list-unstyled iconlist ml-0">
									<li class="mb-2"><a href="#" class="text-white-50">Home</a></li>
									<li class="mb-2"><a href="#" class="text-white-50">About Us</a></li>
									<li class="mb-2"><a href="#" class="text-white-50">Citizen Participation</a></li>
									<li class="mb-2"><a href="#" class="text-white-50">Contact</a></li>
									<li class="mb-2"><a href="#" class="text-white-50">FAQs</a></li>
									<li class="mb-2"><a href="#PJS-video" class="text-white-50">Video</a></li>
								</ul>

							</div>
						</div>
						<div class="col-lg-2 col-md-3 col-6">
							<div class="widget clearfix">

								<h3 class="ls0 h5 mb-4">Connect With Us</h3>

								<ul class="list-unstyled iconlist ml-0">
									<li class="mb-2"><a href="#" class="text-white-50">Facebook</a></li>
									<li class="mb-2"><a href="#" class="text-white-50">Instagram</a></li>
									<li class="mb-2"><a href="#" class="text-white-50">Twitter</a></li>
									<!-- <li class="mb-2"><a href="#" class="text-white-50">Email</a></li> -->
								</ul>

							</div>
						</div>
						 

						<div class="col-lg-3 col-md-4">
							<div class="widget clearfix">

								<h3 class="ls0 h5 mb-4">Address:</h3>

								<div>
									<address class="font-primary">
									Nirman Bhawan<br>
									Rajpath Area, Central Secretariat,<br>
									 New Delhi, 110001<br>
									</address>
									<h3 class="mb-3"><a href="tel:+01273123456" class="text-white"><i class="icon-call mr-1 position-relative" style="font-size: 22px; top:2px;"></i> 011 2306 1913</a></h3>
								</div>

							</div>
						</div>
					</div>

				</div>
			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights" class="center dark">
				<div class="container">

					<div class="row">
						<div class="col-12">
							<p class="mb-2 text-white-50">Copyrights &copy; 2020 All Rights  </p>
							<div class="copyright-links text-white-50"><a href="#" class="text-white-50">Terms of Use</a> / <a href="#" class="text-white-50">Privacy Policy</a></div>
						</div>
					</div>

				</div>
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>

	<!-- For Countdown -->
	<script src="js/components/moment.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>

	<!-- Timeline script
	============================================= -->
	<script src="js/timeline.min.js"></script>
	<script src="js/timeline.prod.min.js"></script>

	<!-- wezard form -->
	<!-- <script src="js/jquery.js"></script> -->
	<script src="js/jquery.steps.min.js"></script>
	
	<script src="https://code.highcharts.com/maps/highmaps.js"></script>
	<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
	<script src="https://code.highcharts.com/mapdata/countries/in/custom/in-all-disputed.js"></script>
     

	<script>


		// Owl Carousel Scripts
		jQuery(window).on( 'pluginCarouselReady', function(){
			$('#oc-teachers').owlCarousel({
				items: 1,
				margin: 30,
				nav: true,
				navText: ['<i class="icon-line-arrow-left"></i>','<i class="icon-line-arrow-right"></i>'],
				dots: false,
				smartSpeed: 300,
				autoplay:true,
				loop:true,
				stagePadding: 60,
				responsive:{
					768: { stagePadding: 100, margin: 30, items: 1 },
					991: { stagePadding: 100, margin: 40, smartSpeed: 400, items: 2 },
					1200: { stagePadding: 100, margin: 40, smartSpeed: 400, items: 2}
				},
			});
		});

		//Current Week
		Date.prototype.getWeek = function(start) {
			//Calcing the starting point
			start = start || 0;
			var today = new Date(this.setHours(0, 0, 0, 0));
			var day = today.getDay() - start;
			var date = today.getDate() - day;

			// Grabbing Start/End Dates
			var StartDate = new Date(today.setDate(date));
			var EndDate = new Date(today.setDate(date + 6));
			return [StartDate, EndDate];
		}
		var Dates = new Date().getWeek();
		$("#week-details").text(Dates[0].toLocaleDateString() + ' - '+ Dates[1].toLocaleDateString());


		// timeline
		jQuery('.timeline').timeline({
			mode: 'horizontal',
			visibleItems: 5
			});

				// wizard form
				$("#example-embed").steps({
			headerTag: "p",
			bodyTag: "section",
			transitionEffect: "fade"
		});



		


					// map
	
		var data = [
			['madhya pradesh', 20],
			['uttar pradesh', 1],
			['karnataka', 2],
			['nagaland', 3],
			['bihar', 4],
			['lakshadweep', 5],
			['andaman and nicobar', 6],
			['assam', 7],
			['west bengal', 8],
			['puducherry', 9],
			['daman and diu', 10],
			['gujarat', 11],
			['rajasthan', 12],
			['dadara and nagar havelli', 13],
			['chhattisgarh', 14],
			['tamil nadu', 15],
			['chandigarh', 16],
			['punjab', 17],
			['haryana', 18],
			['andhra pradesh', 19],
			['maharashtra', 20],
			['himachal pradesh', 21],
			['meghalaya', 22],
			['kerala', 23],
			['telangana', 24],
			['mizoram', 5],
			['tripura', 10],
			['manipur', 4],
			['arunanchal pradesh', 10],
			['jharkhand', 29],
			['goa', 25],
			['nct of delhi', 12],
			['odisha', 11],
			['jammu and kashmir', 10],
			['sikkim', 34],
			['uttarakhand', 22]
		];

		// Create the chart
		Highcharts.mapChart('Map-container', {
			chart: {
				map: 'countries/in/custom/in-all-disputed'
			},

			title: {
				text: '<b style=" color: #2d59a5; font-weight: bold;">Progress of Pey Jal Survekshan</b>'
			},

			subtitle: {
				text: 'Data depicts number of participant cities in the Pey Jal Survekshan survey'
			},

			mapNavigation: {
				enabled: true,
				buttonOptions: {
					verticalAlign: 'bottom'
				}
			},

			colorAxis: {
				min: 0
			},

			series: [{
				data: data,
				name: 'Random data',
				states: {
					hover: {
						color: '#BADA55'
					}
				},
				dataLabels: {
					enabled: true,
					format: '{point.name}'
				}
			}]
		});

	

	</script>

</body>
</html>