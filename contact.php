<!DOCTYPE html>
<html lang="uk">
	<head>
		<title>Asana - Contact</title>
		<!-- Header Meta start -->
			
			<?php
				
				//Including header meta here
				include 'includes/common/template_header_navigation.php';
			?>
			
			<!-- Meta End -->
	</head>
<body class="contact">
	
			<!-- Navigation menu and Logo start -->
			
			<?php
				
				//Including header navigation here
				include 'includes/common/template_header_navigation.php';
			?>
			<!-- Navigation End -->
			
		</div>
	</header>
	<section class="container">
		<div class="pageHeader" style="background-image: url(images/content/bg-parallax2.jpg);">
			<h1>you are welcome</h1>
		</div>
		<div class="ourContact">
			<div class="wrapper clear">
				<div class="contactGallery">
					<ul>
						<li><img src="images/content/gallery.jpg" alt=""></li>
						<li><img src="images/content/story.jpg" alt=""></li>
					</ul>
					
				</div>
				<div class="contactInfo">
					<h3>Contact</h3>
					<p><i class="contactPhone"></i> 023 8301 4721</p>
					<p><i class="contactEmail"></i> hello@highseastudio.com</p>
					<p><i class="contactLocation"></i> 350 5th Ave, New York, <br> NY 10118, United States</p>
				</div>
			</div>
		</div>
		<div class="locationMap">
			<!-- Map -->
			<script type="text/javascript">
			    // AgroMix style
			      var Asana = [
			          { "featureType": "road.highway", "stylers": [ { "visibility": "off" } ]
			        },{ "featureType": "landscape", "stylers": [ { "visibility": "off" } ]
			        },{ "featureType": "transit", "stylers": [ { "visibility": "off" } ]
			        },{ "featureType": "poi", "stylers": [ { "visibility": "off" } ]
			        },{ "featureType": "poi.park", "stylers": [ { "visibility": "on" } ]
			        },{ "featureType": "poi.park", "elementType": "labels", "stylers": [ { "visibility": "off" } ]
			        },{ "featureType": "poi.park", "elementType": "geometry.fill", "stylers": [ { "color": "#d3d3d3" }, { "visibility": "on" } ]
			        },{ "featureType": "poi.medical", "stylers": [ { "visibility": "off" } ]
			        },{ "featureType": "poi.medical", "stylers": [ { "visibility": "off" } ]
			        },{ "featureType": "road", "elementType": "geometry.stroke", "stylers": [ { "color": "#cccccc" } ]
			        },{ "featureType": "water", "elementType": "geometry.fill", "stylers": [ { "visibility": "on" }, { "color": "#cecece" } ]
			        },{ "featureType": "road.local", "elementType": "labels.text.fill", "stylers": [ { "visibility": "on" }, { "color": "#808080" } ]
			        },{ "featureType": "administrative", "elementType": "labels.text.fill", "stylers": [ { "visibility": "on" }, { "color": "#808080" } ]
			        },{ "featureType": "road", "elementType": "geometry.fill", "stylers": [ { "visibility": "on" }, { "color": "#fdfdfd" } ]
			        },{ "featureType": "road", "elementType": "labels.icon", "stylers": [ { "visibility": "off" } ]
			        },{ "featureType": "water", "elementType": "labels", "stylers": [ { "visibility": "off" } ]
			        },{ "featureType": "poi", "elementType": "geometry.fill", "stylers": [ { "color": "#d2d2d2" } ]
			        }
			      ];
			      function initialize() {

			        // Declare new style
			        var AsanastyledMap = new google.maps.StyledMapType(Asana, {name: "Asana"});

			        // Declare Map options
			        var mapOptions = {
			        	//center: new google.maps.LatLng(<?php echo $aPostCustom['uni_coordinates'][0] ?>),
			        	//zoom: <?php echo $aPostCustom['uni_zoom'][0] ?>,
			        	center: new google.maps.LatLng(41.404182, 2.199451),
	        			zoom: 14,
			        	scrollwheel: false,
			        	mapTypeControl:false,
		                streetViewControl: false,
		                panControl:false,
		                rotateControl:false,
		                zoomControl:true
			        };

			        // Create map
			        var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

			        // Setup skin for the map
			        map.mapTypes.set('Asana_style', AsanastyledMap);
			        map.setMapTypeId('Asana_style');

		            //add marker
		            //var marker_icon = "<?php echo get_stylesheet_directory_uri().'/images/marker.svg' ?>";
		            var marker_icon = "images/marker.svg";
		            //var myLatLng = new google.maps.LatLng(<?php echo $aPostCustom['uni_coordinates'][0] ?>);
		            var myLatLng = new google.maps.LatLng(41.404182, 2.199451);
		            var beachMarker = new google.maps.Marker({
		                position: myLatLng,
		                map: map,
		                icon: marker_icon
		            });

			      }
			      google.maps.event.addDomListener(window, 'load', initialize);
			    </script>

				<div class="location-map">
					<div class="map" id="map-canvas"></div>
				</div>
		</div>
	</section>
	
	<footer id="footer" class="clear">
		<div class="footerSocial clear">
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-instagram"></i></a>
			<a href="#"><i class="fa fa-pinterest"></i></a>
		</div>
		<ul class="footerMenu clear">
			<li><a href="#">Classes</a></li>
			<li><a href="#">Events</a></li>
			<li><a href="#">Shop</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
		<div class="footerSubscribe">
			<form>
				<input class="" type="text" name="" size="20" value="" placeholder="Your email">
				<input class="btnSubscribe" type="submit" value="Subscribe">
			</form>
		</div>
		<div class="copyright">
			<p>Copyright &copy; 2015. Asana All rights reserved</p>
		</div>
	</footer>
	<!-- Mobile Navigation start -->
			
			<?php
				
				//Including mobile navigation here
				include 'includes/common/template_mobile_navigation.php';
			?>
			
			<!-- Navigation End -->
</body>
</html>