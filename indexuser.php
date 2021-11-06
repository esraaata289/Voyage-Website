<!DOCTYPE html>
<?php 
session_start();
if(!isset($_SESSION['SEusername']))
   {
      include "index.php";
       die();
   }
   else
   {
   
   
   
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Dorne - Directory &amp; Listing Template</title>

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=EB+Garamond:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">
    
      <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css_slider/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css_slider/animate.css">
    
    <link rel="stylesheet" href="css_slider/owl.carousel.min.css">
    <link rel="stylesheet" href="css_slider/owl.theme.default.min.css">
    <link rel="stylesheet" href="css_slider/magnific-popup.css">

    <link rel="stylesheet" href="css_slider/aos.css">

    <link rel="stylesheet" href="css_slider/ionicons.min.css">

    <link rel="stylesheet" href="css_slider/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css_slider/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css_slider/flaticon.css">
    <link rel="stylesheet" href="css_slider/icomoon.css">
    <link rel="stylesheet" href="css_slider/style.css">

</head>

<body>
    <!-- Preloader -->
   

    <!-- ***** Search Form Area ***** -->
    <div class="dorne-search-form d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>
                    <form  method="post">
                        <input type="search" name="txtsearch" id="search" placeholder="Search Your Desire Destinations or Events">
                        <input type="submit" name="search" class="d-none" value="submit">
                    </form>
                    <?php 
                    if(isset($_POST['search']))
                    {
                        $search=$_POST['txtsearch'];
                        header("location:search.php?search=$search");
                    }


                  ?>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <!-- Nav -->
                        <div class="collapse navbar-collapse" id="dorneNav">
                            <ul class="navbar-nav mr-auto" id="dorneMenu">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Explore <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="index.html">Home</a>
                                        <a class="dropdown-item" href="explore.html">Explore</a>
                                        <a class="dropdown-item" href="listing.html">Listing</a>
                                        <a class="dropdown-item" href="single-listing.html">Single Listing</a>
                                        <a class="dropdown-item" href="contact.html">Contact</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listings <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                        <a class="dropdown-item" href="index.html">Home</a>
                                        <a class="dropdown-item" href="explore.html">Explore</a>
                                        <a class="dropdown-item" href="listing.html">Listing</a>
                                        <a class="dropdown-item" href="single-listing.html">Single Listing</a>
                                        <a class="dropdown-item" href="contact.html">Contact</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                            </ul>
                            <!-- Search btn -->
                            <div class="dorne-search-btn">
                                <a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i> Search</a>
                            </div>
                            <!-- Signin btn -->
                            <div class="dorne-search-btn">
                     <?php
                         
                         $ss=$_SESSION['SEusername'];
                          echo(' <h5 style="color:white;margin-right: 10px;padding: 10px;">Hi : '.$ss.'</h5>');

                         }
                     ?>
                  </div>
                          
                     <div class="dorne-signin-btn">
                     
                      <div class="dropdown">
                        <button onclick="myFunction()" class="dropbtn" style="background-color: #7643ea;"><i class="fa fauser-circle fa-5x"></i> My Account <span class="fa fa-caret-down"></span></button>
                          <div id="myDropdown" class="dropdown-content">
                            <a data-toggle="modal" href="#exampleModal1"><i class="fa fa-pencil fa-fw"></i> Edit Profile</a>
                            <a data-toggle="modal" href="#exampleModalCenter"><i class="fa fa-trash-o fa-fw"></i> Delete</a>
                            <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Log Out</a>
                            
                          </div>
                        </div>
                     </div>
                          
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    
                           
        
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Catagory Area Start ***** -->
    <section class="home-slider owl-carousel">
          <?php 
		   include "connection.php";
		   $sql="select * from advertising where end_date >= CURDATE()";
		   $qry=mysqli_query($conn,$sql);
		    while($row = mysqli_fetch_assoc($qry)) 
		      {
			  
		      ?>
     

      <div class="slider-item" style="background-image: url('advert/<?php echo($row['advert_no']) ?>.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ">
              <h1 class="mb-3"><?php echo($row['title']) ?></h1> 
                <h4 style="color:white;"><?php echo($row['details']) ?></h4>
                <li><a href="<?php echo($row['URL']) ?>" target="_blank" style="font-size:40px;"><i class="fa fa-arrow-right" aria-hidden="true"></i> Vist Us </a></li>
            </div>
              
              
          </div>
        </div>
      </div>
        <?php } ?>
    </section>
    <section class="dorne-catagory-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="all-catagories">
                        <div class="row">
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.2s">
                                    <div class="catagory-content">
                                        <img src="img/core-img/icon-1.png" alt="">
                                        <a href="#">
                                            <h6>Hotels</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.4s">
                                    <div class="catagory-content">
                                        <img src="img/core-img/icon-2.png" alt="">
                                        <a href="#">
                                            <h6>Restaurants</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.6s">
                                    <div class="catagory-content">
                                        <img src="img/core-img/icon-3.png" alt="">
                                        <a href="#">
                                            <h6>Shopping</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.8s">
                                    <div class="catagory-content">
                                        <img src="img/core-img/icon-4.png" alt="">
                                        <a href="#">
                                            <h6>Beauty &amp; Spa</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="1s">
                                    <div class="catagory-content">
                                        <img src="img/core-img/icon-5.png" alt="">
                                        <a href="#">
                                            <h6>Cinema</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Catagory Area End ***** -->

    <!-- ***** About Area Start ***** -->
    
    <section class="dorne-about-area section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-content text-center">
                        <h2>Discover your city with <br><span>Dorne</span></h2>
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce quis tempus elit. Sed efficitur tortor neque, vitae aliquet urna varius sit amet. Ut rhoncus, nunc nec tincidunt volutpat, ex libero.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area End ***** -->

    <!-- ***** Editor Pick Area Start ***** -->
    <section class="dorne-editors-pick-area bg-img bg-overlay-9 section-padding-100" style="background-image: url(img/bg-img/hero-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <span></span>
                        <h4>Cities you must see</h4>
                        <p>Editor’s pick</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="single-editors-pick-area wow fadeInUp" data-wow-delay="0.2s">
                        <img src="img/bg-img/editor-1.jpg" alt="">
                        <div class="editors-pick-info">
                            <div class="places-total-destinations d-flex">
                                <a href="#">New York</a>
                                <a href="#">1643 Destinations</a>
                            </div>
                            <div class="add-more">
                                <a href="#">+</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-editors-pick-area wow fadeInUp" data-wow-delay="0.4s">
                        <img src="img/bg-img/editor-2.jpg" alt="">
                        <div class="editors-pick-info">
                            <div class="places-total-destinations d-flex">
                                <a href="#">Barcelona</a>
                                <a href="#">943 Destinations</a>
                            </div>
                            <div class="add-more">
                                <a href="#">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-editors-pick-area wow fadeInUp" data-wow-delay="0.6s">
                        <img src="img/bg-img/editor-3.jpg" alt="">
                        <div class="editors-pick-info">
                            <div class="places-total-destinations d-flex">
                                <a href="#">paris</a>
                                <a href="#">243 Destinations</a>
                            </div>
                            <div class="add-more">
                                <a href="#">+</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
    
    

     <section class="dorne-features-events-area bg-img bg-overlay-9 section-padding-100-50" >
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                      
                        <h4>Featured Countries</h4>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                 <?php 
               
		   set_time_limit(0);
		   $sql=" select * from country ";
		   $qry=mysqli_query($conn,$sql);
		    while($row = mysqli_fetch_assoc($qry)) 
		      {
			  
		      ?>
            <div class="col-12 col-lg-6">
                    <div class="single-editors-pick-area wow fadeInUp" data-wow-delay="0.4s">
                        <img src="country/<?php echo($row['country_no']) ?>.jpg" alt="">
                        <div class="editors-pick-info">
                            <div class="places-total-destinations d-flex">
                                <a href="#"><?php echo($row['country_name']) ?></a>
                                <a href="citybefore.php?CountryNo=<?php echo($row['country_no']) ?>">Discover More</a>
                            </div>
                            <div class="feature-favourite add-more">
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div> 
                        </div>
                       
                    </div>
                </div>
                <?php } ?>
            </div>
           
        </div>
    </section>
    <!-- ***** Features Events Area End ***** -->

    <!-- ***** Clients Area Start ***** -->
    <div class="dorne-clients-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="clients-logo d-md-flex align-items-center justify-content-around">
                        <img src="img/clients-img/1.png" alt="">
                        <img src="img/clients-img/2.png" alt="">
                        <img src="img/clients-img/3.png" alt="">
                        <img src="img/clients-img/4.png" alt="">
                        <img src="img/clients-img/5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
     
    
    
    
    
    
    <!-- ***** Clients Area End ***** -->

    <!-- ****** Footer Area Start ****** -->
    <footer class="dorne-footer-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-md-flex align-items-center justify-content-between">
                    <div class="footer-text">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                    <div class="footer-social-btns">
                        <a href="#"><i class="fa fa-linkedin" aria-haspopup="true"></i></a>
                        <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-haspopup="true"></i></a>
                        <a href="#"><i class="fa fa-facebook" aria-haspopup="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
     <script>
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
    </script>

    <!-- ****** Footer Area End ****** -->
     <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    
    
    <script src="js/form-validation.js"></script>
    <!-- Responsiveslides -->
    <script src="js/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: false,
                pager: true,
                nav: false,
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
    <!-- // Responsiveslides -->
	 <!-- stats -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();

    </script>
    <!-- //stats -->

    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>

    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>

</body>

</html>