<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	  <link rel="stylesheet" type="text/css" href="css/style.css">
	  <link rel="stylesheet" type="text/css" href="css/style1.css">

	  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
	  rel="stylesheet">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	  <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">

	  
</head>
<body onload="myFunction()">

<!-- *******************Preloader starts ************************ -->	

	<div id="loader"></div>

<!-- *******************Preloader ends ************************ -->	
<!-- *******************Pop up starts ************************ -->	
	<div id="popUpMain" style="display: none">
		<div id="popup">
			<h2 id="newsHeading">Subscribe to our Newsletter</h2>
			<input type="email" name="" id="emailId" value="" placeholder="user@gmail.com">
			<br/>
			<button class="submitId">Subscribe</button>
			<button class="submitId">No Thanks</button>
		</div>
	</div>
<!-- *******************Pop up ends ************************ -->	

	<div class="header" id="topheader">
	  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
	  	<div class="container text-uppercase p-2">
		  <a class="navbar-brand font-wight-bold text-white" href="#">RahulTechnical</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav ml-auto text-uppercase">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#servicediv">Service</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#pricingdiv">Price</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#newsletter">About</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#contactid">Contact</a>
		      </li>      
		    </ul>
		  </div>
		 </div>
		</nav>
		<section class="header-section">
			<div class="center-div">
				<h1 class="font-weight-bold">We are The Web Developer</h1>
				<p>We Create The Wold Best Website. </p>
				<div class="header-buttons">
					<a href="#newsletter">AboutUs </a>
					<a href="#contactid">ContactUs </a>	
				</div>
			</div>
		</section>
	</div>

	
	<!-- *******************  Header Part End ***********************-->

	<!-- 		******************** three extra div starts ***************** -->
		
	<section class="header-extradiv" data-aos="fade-up">
		<div class="container">
			<div class="row">
				<div class="extra-div col-lg-4 col-md-4 col-12">
					<a href="#"><i class="fa-3x fa fa-desktop" aria-hidden="true"></i></a>
					<h2>EASY TO USE</h2>
					<p>The next generation of our icon library + toolkit is coming with more icons, more styles, more services, and more awesome. </p>
				</div>
				<div class="extra-div col-lg-4 col-md-4 col-12">
					<a href=""><i class="fa-3x fa fa-trophy" aria-hidden="true"></i></a>
					<h2>AWESOME DESIGN</h2>
					<p>The next generation of our icon library + toolkit is coming with more icons, more styles, more services, and more awesome. </p>
				</div>
				<div class="extra-div col-lg-4 col-md-4 col-12">
					<a href="#"><i class="fa-3x fa fa-magic" aria-hidden="true"></i></a>
					<h2>EASY TO CUSTOMIZE</h2>
					<p>The next generation of our icon library + toolkit is coming with more icons, more styles, more services, and more awesome. </p>
				</div>
			</div>
		</div>		

	</section>
	<!-- 		******************** three extra div ends ***************** -->
	<!-- 		******************** our team  section start ***************** -->
	<!-- 
	<section class="our_team">
		<div class="container wrapper">
			<div class="section-header">	
				<h2>Our Team</h2>
				<div class="line"></div>
				<p>Meet Our Talented Team Members</p>
			</div>
			
			<div class="container">
				<div class="row">
					<div class="">
					<div class="project col-lg-4 col-md-3 col-12">
					  <div class="project__card">
						<a href="" class="project__image"><img src="4.jpeg" alt=""></a>
						<div class="project__detail">
						  <h2 class="project__title"><a href="#">Anand</a></<h></h>2>
						  <small class="project__category"><a href="#">Python Dev</a></small>
						</div>
					  </div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</section>
 -->


	<!-- ******************** our team  section start ***************** -->
	<!-- 		******************** offer section start ***************** -->

	<section class="service-offers" id="servicediv" data-aos="fade-up">
		<div class="container heading text-center" data-aos="fade-up">
			<h1 class="text-center font-weight-bold">WHAT DO WE OFFERS</h1>
			<P class="text-center">The next generation of our icon library + toolkit is coming with more icons</P>
		</div>

		<div class="container" data-aos="fade-up">
			<div class="row">
				<div class="col-lg-6 col-10 offset-1 offset-lg-0">
					<div class="names my-3">
						<h1>HTML</h1>
						<div class="progress w-75">
						<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 95%">95%</div>
						</div>
					</div>
					<div class="names my-3">
						<h1>CSS</h1>
						<div class="progress w-75">
						<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 75%">75%</div>
						</div>
					</div>
					<div class="names my-3">
						<h1>JAVASCRIPT</h1>
						<div class="progress w-75">
						<div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 70%">70%</div>
						</div>
					</div>
					<div class="names my-3">
						<h1>REACTJS</h1>
						<div class="progress w-75">
						<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width:50%">50%</div>
						</div>
					</div>

					<div class="names my-3">
						<h1>NODEJS</h1>
						<div class="progress w-75">
						<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 80%">80%</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6 col-md-12 col-12 service-div">
					<div class="row">
						<div class="col-lg-2 col-2 service-icons">
							<i class="fa-3x fa fa-desktop" aria-hidden="true"></i>
						</div>
						<div class="col-lg-10 col-10">
							<h2>Website Development</h2>
							<p>The next generation of our icon library + toolkit is coming with more icons</p>
						</div>
						<div class="col-lg-2 col-2 service-icons">
							<i class="fa-3x fa fa-wifi" aria-hidden="true"></i>
						</div>
						<div class="col-lg-10 col-10">
							<h2>Digital Marketing</h2>
							<p>The next generation of our icon library + toolkit is coming with more icons</p>
						</div><div class="col-lg-2 col-2 service-icons">
							<i class="fa-3x fa fa-phone" aria-hidden="true"></i>
						</div>
						<div class="col-lg-10 col-10">
							<h2>Support 24/7</h2>
							<p>The next generation of our icon library + toolkit is coming with more icons</p>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>				
	<!-- 		******************** offer section end ***************** -->
	
	<!-- ************** project done starts ******************* -->

	<section class="project-work">
		<div class="container heading text-center" data-aos="fade-up">
			<h1 class="text-center font-weight-bold">MORE THAN 2,000 WEBSITE CREATED</h1>
		</div>
		<div class="container project-works d-flex justify-content-around align-items-center text-center" data-aos="fade-up">
			<div>
				<h1 class="count">	15,00 </h1>
					<p>CMS Installation</p>
			</div>
			
			<div>
				<h1 class="count">	7,00</h1>
					<p>Awards won</p>
			</div>

			<div>
				<h1 class="count"> 5,00 </h1>
					
					<p>Happy Clients</p>
			</div>

			<div>
				<h1 class="count"> 2,00 </h1>
					
					<p>Working On</p>
			</div>
		</div>
		
	</section>

	<!-- ************** project done ends ******************* -->

	<!-- ************** Our Pricing Starts ******************* -->


	<section class="pricing" id="pricingdiv" data-aos="fade-up">
		<div class="container heading text-center" data-aos="fade-up">
			<h1 class="text-center font-weight-bold text-white">Our Best Pricing</h1>
		</div>
		<div class="container" data-aos="fade-up">
			<div class="row">
				<div class="col-lg-4 col-12">
					<div class="card text-center">
  						<div class="card-header">BASIC</div>
  						<div class="card-body">
  							<li>$<span class="money">20</span>/Website</li>
  							<li>Responsive Website</li>
  							<li>Domain Name Free</li>
  							<li>Mobile Friendly</li>
  							<li>Webmail Support</li>
  							<li>Customer Support 24/7</li>
  						</div>
  						<div class="card-footer"><a href="#">Purchase</a>
  						</div>
					</div>	
				</div>

				<div class="col-lg-4 col-12 card-second">
					<div class="card text-center">
  						<div class="card-header">STANDARD</div>
  						<div class="card-body">
  							<li>$<span class="money">40</span>/Website</li>
  							<li>Responsive Website</li>
  							<li>Domain Name Free</li>
  							<li>Mobile Friendly</li>
  							<li>Webmail Support</li>
  							<li>Customer Support 24/7</li>
  						</div>
  						<div class="card-footer"><a href="#">Purchase</a>
  						</div>
					</div>
				</div>

				<div class="col-lg-4 col-12">
					<div class="card text-center">
  						<div class="card-header">UNLIMITED</div>
  						<div class="card-body">
  							<li>$<span class="money">60</span>/Website</li>
  							<li>Responsive Website</li>
  							<li>Domain Name Free</li>
  							<li>Mobile Friendly</li>
  							<li>Webmail Support</li>
  							<li>Customer Support 24/7</li>
  						</div>
  						<div class="card-footer"><a href="#">Purchase</a>
  						</div>
					</div>
				</div>
		
			</div>	
		</div>
	</section>

	<!-- ************** Our Pricing ends ******************* -->

	<!-- ************** Happy Clients starts ******************* -->


	<section class="happyclients">
		<div class="container heading text-center" data-aos="fade-up">
			<h1 class="text-center font-weight-bold">OUR HAPPY CLIENTS</h1>
			<p>Our Satisfied Customer Says</p>
		</div>

		<div id="demo" class="carousel slide" data-ride="carousel" data-aos="fade-up">

		  <!-- Indicators -->
		  <ul class="carousel-indicators">
		    <li data-target="#demo" data-slide-to="0" class="active"></li>
		    <li data-target="#demo" data-slide-to="1"></li>
		    <li data-target="#demo" data-slide-to="2"></li>
		  </ul>

		  <!-- The slideshow -->
		  <div class="carousel-inner container">
		    <div class="carousel-item active">
		      <div class="row">
		      	<div class="col-lg-4 col-md-4 col-12">
		      		<div class="box">
		      			<a href=""><img src="images/c.jpg" class="img-fluid img-thumbnail"></a>
		      			<p class="m-4">mg-fluid img-thumbnail mg-fluid img-thumbnail mg-fluid img-thumbnail mg-fluid img-thumbnailmg-fluid img-thumbnail mg-fluid img-thumbnail</p>
		      			<h1>Rahul Kumar</h1>
		      			<h2>Web Developer</h2>
		      		</div>
		      	</div>
		      	<div class="col-lg-4 col-md-4 col-12">
		      		<div class="box">
		      			<a href=""><img src="images/c.jpg" class="img-fluid img-thumbnail"></a>
		      			<p class="m-4">mg-fluid img-thumbnail mg-fluid img-thumbnail mg-fluid img-thumbnail mg-fluid img-thumbnailmg-fluid img-thumbnail mg-fluid img-thumbnail</p>
		      			<h1>Rahul Kumar</h1>
		      			<h2>Web Developer</h2>
		      		</div>
		      	</div>
				<div class="col-lg-4 col-md-4 col-12">
		      		<div class="box">
		      			<a href=""><img src="images/c.jpg" class="img-fluid img-thumbnail"></a>
		      			<p class="m-4">mg-fluid img-thumbnail mg-fluid img-thumbnail mg-fluid img-thumbnail mg-fluid img-thumbnailmg-fluid img-thumbnail mg-fluid img-thumbnail</p>
		      			<h1>Rahul Kumar</h1>
		      			<h2>Web Developer</h2>
		      		</div>
		      	</div>

		      </div>
		    </div>
		    <div class="carousel-item">
		      
		      <div class="row">
		      	<div class="col-lg-4 col-md-4 col-12">
		      		<div class="box">
		      			<a href=""><img src="images/c.jpg" class="img-fluid img-thumbnail"></a>
		      			<p class="m-4">mg-fluid img-thumbnail mg-fluid img-thumbnail mg-fluid img-thumbnail mg-fluid img-thumbnailmg-fluid img-thumbnail mg-fluid img-thumbnail</p>
		      			<h1>Rahul Kumar</h1>
		      			<h2>Web Developer</h2>
		      		</div>
		      	</div>
		      	<div class="col-lg-4 col-md-4 col-12">
		      		<div class="box">
		      			<a href=""><img src="images/c.jpg" class="img-fluid img-thumbnail"></a>
		      			<p class="m-4">mg-fluid img-thumbnail mg-fluid img-thumbnail mg-fluid img-thumbnail mg-fluid img-thumbnailmg-fluid img-thumbnail mg-fluid img-thumbnail</p>
		      			<h1>Rahul Kumar</h1>
		      			<h2>Web Developer</h2>
		      		</div>
		      	</div>
				<div class="col-lg-4 col-md-4 col-12">
		      		<div class="box">
		      			<a href=""><img src="images/c.jpg" class="img-fluid img-thumbnail"></a>
		      			<p class="m-4">mg-fluid img-thumbnail mg-fluid img-thumbnail mg-fluid img-thumbnail mg-fluid img-thumbnailmg-fluid img-thumbnail mg-fluid img-thumbnail</p>
		      			<h1>Rahul Kumar</h1>
		      			<h2>Web Developer</h2>
		      		</div>
		      	</div>

		      </div>

		     </div>
		    <div class="carousel-item">
		  
		      <div class="row">
		      	<div class="col-lg-4 col-md-4 col-12">
		      		<div class="box">
		      			<a href=""><img src="images/c.jpg" class="img-fluid img-thumbnail"></a>
		      			<p class="m-4">mg-fluid img-thumbnail mg-fluid img-thumbnail mg-fluid img-thumbnail mg-fluid img-thumbnailmg-fluid img-thumbnail mg-fluid img-thumbnail</p>
		      			<h1>Rahul Kumar</h1>
		      			<h2>Web Developer</h2>
		      		</div>
		      	</div>
		      	<div class="col-lg-4 col-md-4 col-12">
		      		<div class="box">
		      			<a href=""><img src="images/c.jpg" class="img-fluid img-thumbnail"></a>
		      			<p class="m-4">mg-fluid img-thumbnail mg-fluid img-thumbnail mg-fluid img-thumbnail mg-fluid img-thumbnailmg-fluid img-thumbnail mg-fluid img-thumbnail</p>
		      			<h1>Rahul Kumar</h1>
		      			<h2>Web Developer</h2>
		      		</div>
		      	</div>
				<div class="col-lg-4 col-md-4 col-12">
		      		<div class="box">
		      			<a href=""><img src="images/c.jpg" class="img-fluid img-thumbnail"></a>
		      			<p class="m-4">mg-fluid img-thumbnail mg-fluid img-thumbnail mg-fluid img-thumbnail mg-fluid img-thumbnailmg-fluid img-thumbnail mg-fluid img-thumbnail</p>
		      			<h1>Rahul Kumar</h1>
		      			<h2>Web Developer</h2>
		      		</div>
		      	</div>

		      </div>
		      </div>
		  </div>

			  <!-- Left and right controls -->
			  <a class="carousel-control-prev" href="#demo" data-slide="prev">
			    <span class="carousel-control-prev-icon"></span>
			  </a>
			  <a class="carousel-control-next" href="#demo" data-slide="next">
			    <span class="carousel-control-next-icon"></span>
			  </a>

		</div>
	</section>


<!-- ************** Happy Clients ends ******************* -->

<!-- ************** ContactUs starts ******************* -->



	<section class="contactus" id="contactid" data-aos="fade-up">
		<div class="container heading text-center" data-aos="fade-up">
			<h1 class="text-center font-weight-bold">CONTACT US</h1>
			<p>We're Here To Help And Answer Any Question You </p>
		</div>
		<div class="container" data-aos="fade-up">
			<dir class="row">
				<div class="col-lg-8 col-md-8 col-10 offset-lg-2 offset-md-2 offset-1">

					<form action="">
					  <div class="form-group">
					    <input type="text" class="form-control" placeholder="Enter username"
					     id="username" autocomplete="off" required>
					  </div>

					  <div class="form-group">
					    <input type="email" class="form-control" placeholder="Enter Email" 
					    id="email" autocomplete="off" required>
					  </div>

					  <div class="form-group">
					    <input type="text" class="form-control" placeholder="Enter Mobile" 
					    id="email" autocomplete="off" required>
					  </div>

					  <div class="form-group">
						<textarea class="form-control" rows="4" id="comment" placeholder="Enter Your Message"autocomplete="off"></textarea>
						</div>	

					  <div class="d-flex justify-content-center form-button">	
					  <button type="submit" class="btn btn-primary">Submit</button>
					  </div>
					</form>						
				</div>
			</dir>
		</div>
	</section>


<!-- ************** ContactUs ends ******************* -->

<!-- ************** Newsletter starts ******************* -->

	<section class="newsletter" id="newsletter">
		<div class="container heading text-center" data-aos="fade-up">
			<h1 class="text-center font-weight-bold">SUBSCRIBE TO OUR NEWSLETTER</h1>
		</div>
		<div class="container" data-aos="fade-up">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-12">
					<div class="input-group mb-3">
					    <input type="text" class="form-control news-input" placeholder="Your Email">
					    <div class="input-group-append">
					      <span class="input-group-text">subscribe</span>
					    </div>
					</div>	
				</div>
			</div>
		</div>

	</section>



<!-- ************** Newsletter ends ******************* -->
<!-- *************** Google map Start ****************** -->

<div id="map" data-aos="fade-up"></div>
		<script>
			function initMap(){
				var location = {lat: 25.463117, lng: 81.869452};
				var map = new google.maps.Map(document.getElementById("map"),{
					zoom: 16,
					center: location
				});
				var marker = new google.maps.Marker({
					position: location,
					map: map 
				});
			}
		</script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRgZ3Z_ype4TyM30xSdyWHfyay1ZdAlf4&callback=initMap"></script>



<!-- *************** Google map end ****************** -->

<!-- ************** Footer starts ******************* -->
	
	<footer class="footersection" id="footerdiv" data-aos="fade-up"!>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12 footer-div">
					<div>
						<h3>ABOUT RAHULTECHNICAL</h3>
						<P>
							We have created some responsive W3.CSS templates for you to use.
							You are free to modify, save, share, and use them in all your projects.
						</P>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-12 footer-div text-center">
					<div>
						<h3>NAVIGATION</h3>
						<li><a href="#">Home</a></li>
						<li><a href="#servicediv">Services</a></li>
						<li><a href="#pricingdiv">Price</a></li>
						<li><a href="#newsletter">About</a></li>
					</div>
				</div>

				<div class="col-lg-4 col-md-12 col-12 footer-div">
					<div>
						<h3>NEWSLETTER</h3>
						<P>
							We have created some responsive W3.CSS templates for you to use.
							You are free to modify, save, share, and use them in all your projects.
						</P>

						<div class="container newsletter-main">
							<div class="row">
								<div class="col-lg-12 col-12">
									<div class="input-group mb-3">
									    <input type="text" class="form-control news-input" placeholder="Your Email">
									    <div class="input-group-append">
									      <span class="input-group-text">subscribe</span>
									    </div>
									</div>	
								</div>
							</div>
						</div>


					</div>
				</div>
			</div>
				<div class="mt-5 text-center">
					<p>Copyright @2020 All rights Reserved | This Template made with 
						love to by RahulTechnical</p>
				</div>
				
		</div>
	</footer>

				<div class="scrolltop float-right">
					<i class="fa fa-arrow-up" onclick="topFnct()" onclick="topFunction()" id="myBtn"></i>
				</div>
			

<!-- ************** Footer ends ******************* -->



	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous"></script>





	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="js/script.js"></script>
	  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous"></script>
	  <script type="text/javascript" src="jquery-1.12.1.min.js"></script>
	  <script type="text/javascript" src="jquery.hover3d.js"></script>
	  <script type="text/javascript" src="custome.js"></script>  
		 
<!-- **************  our aos data   ********************* -->
	  <script>
	    AOS.init({
	    	 offset: 200,
	    	 duration: 700,
	    });
	  </script>

 

<!-- **************  our aos data   ********************* -->
<!-- **************  our waypoints data   ********************* -->

<script>


// var waypoint = new Waypoint({
//   element: document.getElementById('px-offset-waypoint'),
//   handler: function(direction) {
//     notify('I am 20px from the top of the window')
//   },
//   offset: 20 
// })

$(docement).ready(function(){
	$('.offer_animate').waypoint(function(direction){
		$('.offer_animate').addClass('animated zoomIn')
	})
});

</script>



</body>
</html>