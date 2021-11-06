<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Voyage </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="keywords" content="Delicious Food Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css_div/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css_div/style.css" type="text/css" media="all" />
<!--// css -->
<link rel="stylesheet" href="css_div/lightbox.css">  
<link rel="stylesheet" href="css_div/owl.carousel.css" type="text/css" media="all">
<link href="css_div/owl.theme.css" rel="stylesheet">
<!-- font-awesome icons -->
<link href="css_div/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<!-- //font -->

    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ani.css">
       
      

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

   
      
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js_div/jquery-1.11.1.min.js"></script>
    
<script src="js_div/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<script>
$(document).ready(function() { 
	$("#owl-demo").owlCarousel({
 
		autoPlay: 3000, //Set AutoPlay to 3 seconds
		autoPlay:true,
		items : 4,
		itemsDesktop : [640,5],
		itemsDesktopSmall : [414,4]
 
	});
	
}); 
</script>
      
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
   
      <div class="container">

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index_after.html" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
            <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
            
              
 
          </ul>
            <div class="dropdown" class="collapse navbar-collapse" id="ftco-nav">
                  <button class="btn btn-primary " type="button" data-toggle="dropdown" >My Account
                  <span class="caret"></span></button>
                  <ul class="dropdown-menu" class="navbar-nav ml-auto">
                    <li><a href="edit.php">Edit Profile</a></li>
                    <li><a href='logout.php'>Log Out</a></li>
                      <li><a href="unsubscribe.php">Unsubscribe</a></li>

                  </ul>
           </div>
               
        
            
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
   
    
    <!-- END slider -->

    <div class="ftco-section-search"  style="height:110px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12 tabulation-search">
            <div class="element-animate">
         
            </div>
          </div>
        </div>
      </div>
    </div>
      
      <form method="post">
       <div class="team jarallax" id="team" style="margin-top:20px;">
		<div class="container">
			<div class="w3-welcome-heading team-heading">
				<h3>Search Results... </h3>
			</div>
			<div class="agile_team_grids">
           <?php 
		   set_time_limit(0);
           include"connection.php";
		   $sql=" select * from city where cityname like '%$_GET[search]%'  and  country_no='$_GET[CountryNo]'";
		   $qry=mysqli_query($conn,$sql);
		    while($row = mysqli_fetch_assoc($qry)) 
		      {
			  
		      ?>
				<div class="col-md-3 agile_team_grid" >
					<div class="view w3-agile-view">
						<img src="city/<?php echo($row['cityno']) ?>.jpg" width="600px" height="400px" alt=" " class="img-responsive" />
						
							<h4><?php echo($row['cityname']) ?></h4>
                        <div class="w3lmask">
                            <h5><p> If You Want To Know  More About <span style="color:black"><?php echo($row['cityname']) ?></span> Enter   From Here..... </p></h5>
							<div class="social">
								<ul>
                                    <li><a href="placebefore.php?CountryNo=<?php echo($row['country_no']) ?>&&CityNo=<?php echo($row['cityno']) ?>"><i class="fa fa-arrow-right" aria-hidden="true"></i> </a></li>
									
								</ul>
							</div>
						</div>
					</div>
				</div>
                <?php } ?>
				
				
				
				<div class="clearfix"> </div>
              
                
			</div>
		</div>
	</div>
      </form>
      
      
      
      
      
      
      
      
      
      
      
      
<script src="js_div/jarallax.js"></script>
	<script src="js_div/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script src="js_div/responsiveslides.min.js"></script>
	<script type="text/javascript" src="js_div/move-top.js"></script>
	<script type="text/javascript" src="js_div/easing.js"></script>
	<!-- here stars scrolling icon -->
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
	<!-- //here ends scrolling icon -->
	<!-- Tabs-JavaScript -->
	<script src="js_div/owl.carousel.js"></script> 
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
</body>
  </html>