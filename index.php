<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>RentZentric</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Roadster Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery.min.js"> </script>
<!--webfonts-->
 <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
 <link href='//fonts.googleapis.com/css?family=Raleway:400,500' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>

</head>
<body>
	<!--start-home-->
<div id="home" class="header">
		<div class="container">
	     <div class="header-top">
	        <div class="logo">
					<a href="index.php"><h1><span>Rent</span>Zentric</h1></a>
				</div>
					<div class="h-right">
					  <div class="working-hours">
							<div class="working-hours-label">
							WORKING HOURS </div>
							<div class="working-hours-time">
							<span>
							9AM - 8PM </span>
							</div>
							<div class="working-hours-date">
							SU, SAT 9AM - 6PM </div>
					     </div>
						<div class="working-hours phone-number">
							<div class="icon-phone-1 phone-ico"><i class ="glyphicon glyphicon-earphone"></i></div>
							<div class="phone-text">
								<div class="phone-number-label">
								CALL US </div>
								<div class="phone-number-number">
								7559006733 </div>
							 </div>
							 <div class="clearfix"> </div>
						 </div>
						 <div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
					<div class="quate">
									<a href="#" class="hvr-bounce-to-bottom m1">Get a Quote</a>
								</div>
					<span class="menu"></span>
				    <div class="top-menu">
								 
							<ul class="cl-effect-16">
								<li><a class="active" href="index.php" data-hover="HOME">Home</a></li> 
								<li><a href="about.php" data-hover="About">About</a></li>
								<li><a href="contact.php" data-hover="CONTACT">Contact</a></li>
                                <li><a href="login/login4.php" data-hover="Login">Login</a></li>
                                <li><a href="ureg/index.php" data-hover="Login">Register</a></li>
							</ul>
						</div>
							<!--script-for-menu-->
							<script>
							$( "span.menu" ).click(function() {
							  $( ".top-menu" ).slideToggle( "slow", function() {
								// Animation complete.
							  });
							});
						</script>
				<!-- start-search-->
			<div class="clearfix"> </div>
        </div>
			 	<div class="banner">
						<div class="callbacks_container">
						<ul class="rslides callbacks callbacks1" id="slider4">
							<li class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
								<div class="banner-info">
								   <h3>Find Your Dream Car</h3>
								   <p>Find used cars on <span>recent cars</span> page</p>
								</div>
							</li>
							<li class="callbacks1_on" style="display: block; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 500ms ease-in-out;">
								<div class="banner-info">
								  <h3>We Give Best Service</h3>
								  <p>Find used cars on <span>recent cars</span> page</p>
								</div>	
							</li>
							<li class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
								<div class="banner-info">
								   <h3>Find Your Dream Car</h3>
								    <p>Find used cars on <span>recent cars</span> page</p>
								</div>
							</li>
							<li class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
								<div class="banner-info">
								  <h3>We Give Best Service</h3>
								  <p>Find used cars on <span>recent cars</span> page</p>
								</div>	
							</li>
							<li class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
								<div class="banner-info">
								  <h3>RentZentric is simply</h3>
								  <p>Find used cars on <span>recent cars</span> page</p>
								</div>	
							</li>
						</ul>
						</div>
						<!--banner-Slider-->
						<script src="js/responsiveslides.min.js"></script>
						 <script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
						auto: true,
						pager: true,
						nav:false,
						speed: 500,
						namespace: "callbacks",
						before: function () {
						  $('.events').append("<li>before event fired.</li>");
						},
						after: function () {
						  $('.events').append("<li>after event fired.</li>");
						}
						  });

						});
						  </script>

			</div>
		</div>
	</div>
	<!--start-banner-bottom-->
	<!-- welcome-bottom -->
	<div class="welcome-bottom">
		<div class="container">
			<div class="welcome-bottom-banner">
				<h3 class="tittle">Special Services</h3>
				<div class="welcome-bottom-grids">
					<div class="welcome-bottom-grid-left">
						<div class="welcome-bottom-grid-left-g">
							<img src="images/f1.jpg" alt=" " class="img-responsive" />
							<div class="welcome-bottom-grid-left-gpos">
								<h4>RentZentric is Simply</h4>
								<p>RentZentric is a car rental compny provide a best car for rental for periods of time.</p>
								<div class="more">
									<a href="#" class="hvr-bounce-to-bottom m1">More Info...</a>
								</div>
							</div>
						</div>
						<div class="welcome-bottom-grid-left-g">
							<img src="images/f2.jpg" alt=" " class="img-responsive" />
							<div class="welcome-bottom-grid-left-gpos1">
								<h4>Pellentesque mollis</h4>
								<p>Nulla et finibus libero. Suspendisse vitae ex facilisis, ultricies est sed, porta ante. Vivamus tristique luctus lorem, eget dignissim lacus sodales tristique.</p>
								<div class="more">
									<a href="#" class="hvr-bounce-to-bottom m1">More Info...</a>
								</div>
							</div>
						</div>
						<div class="car-text">
							<h5>RentZentric is simply</h5>
							<p>RentZentric is a car rental compny provide a best car for rental and provide a complete solution to our day to day car booking office running needs,it is a unique and innovative product. </p>
						
						</div>
					</div>
					<div class="welcome-bottom-grid-right">
						<div class="car-text">
						<h5>RentZentric is simply</h5>
							<p>RentZentric is a car rental compny provide a best car for rental and provide a complete solution to our day to day car booking office running needs,it is a unique and innovative product. </p>
							
						</div>
						<div class="welcome-bottom-grid-left-g">
							<img src="images/f3.jpg" alt=" " class="img-responsive" />
							<div class="welcome-bottom-grid-left-gpos">
								<h4>Pellentesque mollis</h4>
								<p>Nulla et finibus libero. Suspendisse vitae ex facilisis, ultricies est sed, porta ante. Vivamus tristique luctus lorem, eget dignissim lacus sodales tristique.</p>
								<div class="more">
									<a href="#" class="hvr-bounce-to-bottom m1">More Info...</a>
								</div>
							</div>
						</div>
						<div class="welcome-bottom-grid-left-g">
							<img src="images/f4.jpg" alt=" " class="img-responsive" />
							<div class="welcome-bottom-grid-left-gpos1">
								<h4>Pellentesque mollis</h4>
								<p>Nulla et finibus libero. Suspendisse vitae ex facilisis, ultricies est sed, porta ante. Vivamus tristique luctus lorem, eget dignissim lacus sodales tristique.</p>
								<div class="more">
									<a href="#" class="hvr-bounce-to-bottom m1">More Info...</a>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
<!-- //welcome-bottom -->

<!--start-video-->
    <div class="news" id="news">
	    <div class="container">
			  <h3 class="tittle">Latest News</h3>
			   <div class="news-top">
					<div id="verticalTab" class="resp-vtabs" style="display: block; width: 100%; margin: 0px;"><!-- start vertical Tabs-->
						<ul class="resp-tabs-list">

							<li class="resp-tab-item"><span>MODERN FLEET</span></li>
							<li class="resp-tab-item"><span>Quality Standard</span></li>
							<li class="resp-tab-item"><span>Our Politics</span></li>
							<li class="resp-tab-item"><span>Insurance</span></li>
						</ul>
						<div class="resp-tabs-container">
							<span class="resp-arrow"></span><i class="icon_1"></i>
							<div class="new_posts resp-tab-content">
							   <div class="news-01">
							      <a href="single.html"> <img src="images/n1.jpg" alt=" " class="img-responsive" /></a>
								    <div class="item_info">
														
									  </div>
							   </div>
							</div>
							<span class="resp-arrow"></span><i class="icon_2"></i>
							<div class="new_posts resp-tab-content">
			                   <div class="news-01">
							       <a href="single.html">  <img src="images/n2.jpg" alt=" " class="img-responsive" /></a>
									<div class="item_info">
									    			
									  </div>
							   </div>			
										
								</div>
							<span class="resp-arrow"></span><i class="icon_2"></i>
							<div class="new_posts resp-tab-content">
				              <div class="news-01">
							      <a href="single.html"> <img src="images/n3.jpg" alt=" " class="img-responsive" /></a>
								  <div class="item_info">
									   			
									  </div>
							   </div>
										
							</div>
							<span class="resp-arrow"></span><i class="icon_4"></i>
							  <div class="new_posts resp-tab-content">
							   <div class="news-01">
							     <a href="single.html"> <img src="images/n4.jpg" alt=" " class="img-responsive" /></a>
								 <div class="item_info">
									 			
									  </div>
							   </div>
							  </div>									
						<div class="clearfix"></div>
					</div>
					<script src="js/easyResponsiveTabs.js"></script>
						<script type="text/javascript">
							$(document).ready(function () {
								$('#horizontalTab').easyResponsiveTabs({
									type: 'default', //Types: default, vertical, accordion           
									width: 'auto', //auto or any width like 600px
									fit: true,   // 100% fit in a container
									closed: 'accordion', // Start closed if in accordion view
									activate: function(event) { // Callback function if tab is switched
										var $tab = $(this);
										var $info = $('#tabInfo');
										var $name = $('span', $info);

										$name.text($tab.text());

										$info.show();
									}
								});

								$('#verticalTab').easyResponsiveTabs({
									type: 'vertical',
									width: 'auto',
									fit: true
								});
							});
						</script>
				</div>
			<div class="clearfix"> </div>
		</div>
		</div>
</div>
		<!--//news-->
	<div class="car-bottom">
		  <div class="container">
			  <div class="col-md-6 car-bottom-right">
					<h3>The key maintenance</h3>
					<h4>for your safety <span> on road</span></h4>
					<p>For your safety  we provide a best car for rental with fully setup equipements.</p>
					<div class="morec1">
					  <a href="#" class="hvr-bounce-to-top">More Info...</a>
					</div>
				</div>
					<div class="clearfix"></div>
		  </div>
		</div>

		<!--footer-->
			<div class="footer">
				<div class="container">
					 <div class="footer-inner">
					    <div class="col-md-3 footer-grid">
					       <h3 class="widget-title">Locate Us</h3>
						   <p> <i class="glyphicon glyphicon-map-marker"></i> GS2 Heavenly Plaza<br>
							 Suite No. 509, Kakkanad<br>
							Cochin, India - 682 021</span></p>
							<p class="phone"><i class="glyphicon glyphicon-earphone"></i> 7559006733</p>
							<p><i class="glyphicon glyphicon-envelope"></i> <a href=""> rentzentric@gmail.com</a></p>
			           </div>
					   <!--div class="col-md-3 footer-grid second">
					       <h3 class="widget-title">Customer Services</h3>
						      <ul class="menu-customer-service">
						        <li><a href="#">Toll Free 1-800-carzone</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Customer Care</a></li>
								<li><a href="#">Policies</a></li>
								<li><a href="#">Online Returns</a></li>
								<li><a href="#">My Appointments</a></li>
							  </ul>
			           </div>
					    <div class="col-md-3 footer-grid">
					       <h3 class="widget-title">Customer Information</h3>
						      <ul class="menu-customer-service">
						        <li><a href="#">Toll Free 1-800-carzone</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Customer Care</a></li>
								<li><a href="#">Policies</a></li>
								<li><a href="#">Online Returns</a></li>
								<li><a href="#">My Appointments</a></li>
							  </ul>
			           </div>
					   <div class="col-md-3 footer-grid lost">
					       <h3 class="widget-title">Get in touch!</h3>
						        <p>PO Box 15142 Collins Street<i class="glyphicon glyphicon-map-marker"></i> <br>
								Victoria 2007 London<br>
								Anona Headquarters</span></p>
								<p class="phone">(+00) 0123-456-798 <i class="glyphicon glyphicon-earphone"></i></p>
								<p><a href="mailto:info@example.com">mail@example.com</a> <i class="glyphicon glyphicon-envelope"></i></p>
			           </div>
					   <div class="clearfix"></div>
			         </div>
			    </div>
			</div>
			<div class="copy">
		              <p>© 2016 Roadster. All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a> </p>
		            </div>
			<!--start-smooth-scrolling-->
			<script type="text/javascript">
								jQuery(document).ready(function($) {
									$(".scroll").click(function(event){		
										event.preventDefault();
										$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
									});
								});
								</script>
							<!--start-smoth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>