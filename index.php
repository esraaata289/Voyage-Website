 <?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Voyage</title>

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
                        <a class="navbar-brand" href="index.php"><img src="img/core-img/logo.png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <!-- Nav -->
                        <div class="collapse navbar-collapse" id="dorneNav">
                            <ul class="navbar-nav mr-auto" id="dorneMenu">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index_.php">Home <span class="sr-only">(current)</span></a>
                                </li>
                               
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="explor.php">Explore</a>
                                </li>
                            </ul>
                            <!-- Search btn -->
                            <div class="dorne-search-btn">
                                <a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i> Search</a>
                            </div>
                            <!-- Signin btn -->
                            <div class="dorne-signin-btn">
                                <a data-toggle="modal" href="#exampleModal"><i class="fas fa-unlock-alt"></i> Sign in  </a>
                            </div>
                             <div class="dorne-signin-btn">
                                <a data-toggle="modal" href="#exampleModal1"><i class="fas fa-arrow-circle-right"></i> Register  </a>
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
                                            <h6>Countries</h6>
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
                                            <h6>Cities</h6>
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
                                            <h6>Restaurants</h6>
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
                                            <h6>Hotels</h6>
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
                                            <h6>Transports</h6>
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
                        <h2>Discover your city with <br><span>Voyage</span></h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.

                        A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
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
                       
                        <h4> Top Countries That have most Visitors you can see </h4>
                       
                    </div>
                </div>
            </div>

            <div class="row">
                      <?php 
               
		 // set_time_limit(0);
		 //  $sql=" select * from maxvisit LIMIT 4 ";
		  // $qry=mysqli_query($conn,$sql);
		  //  while($row = mysqli_fetch_assoc($qry)) 
		   //   {
			  
		      ?>
               <!-- <div class="col-12 col-lg-6">
                     <div class="single-editors-pick-area wow fadeInUp" data-wow-delay="0.4s">
                        <img src="country/<?php// echo($row['country_no']) ?>.jpg" style=" width: 500px; height: 250px;" alt="">
                        <div class="editors-pick-info">
                            <div class="places-total-destinations d-flex">
                                <a href="#"><?php //echo($row['country_name'])?></a>
                                <a href="#"><?php //echo($row['visits'])?> <span>Visits</span></a>
                            </div>
                            <div class="add-more">
                                <a href="#">+</a>
                            </div>
                        </div>
                    </div>
                </div> !-->
              <?php //}?>
                </div>
            </div>
        
    </section>
  
    
    

     <section class="dorne-features-events-area bg-img bg-overlay-9 section-padding-100-50" >
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                      
                        <h4>Recent Countries</h4>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                 <?php 
               
		   set_time_limit(0);
		   $sql=" select * from country LIMIT 4 ";
		   $qry=mysqli_query($conn,$sql);
		    while($row = mysqli_fetch_assoc($qry)) 
		      {
			  
		      ?>
            <div class="col-12 col-lg-6">
                    <div class="single-editors-pick-area wow fadeInUp" data-wow-delay="0.4s">
                        <img src="country/<?php echo($row['country_no']) ?>.jpg" style=" width: 500px; height: 250px;" alt="">
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
 
     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label  class="col-form-label">Username</label>
                            <input type="text" class="form-control" placeholder="Enter Your Username " name="txtusername"  >
                        </div>
                        <div class="form-group">
                            <label  class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Enter Your Password " name="txtpassword"  >
                        </div>
                        <div class="right-w3l">
                            <input type="submit" name="submit" class="form-control serv_bottom" value="Login">
            
                        </div>
                       
           <?php
              if(isset($_POST["submit"]) && !empty($_POST["txtusername"]) && !empty($_POST["txtpassword"]))
             {
                 
                 $username=$_POST["txtusername"];
                 $password=$_POST["txtpassword"];
                 $db=new connection();
                 $query=$db->search("select * from user where username='$username' and password='$password'");
                 if($query!="1")
                 {
                        if($username=="Admin")
                          header('Location:index.php');
                        else 
                    echo("<script> alert('Invalid username or password')</script>");
                     
                 }
                 else
                 {
                    
                     
                    
                     $_SESSION['SEusername']=$username;
                      if($username=="Admin")
                             echo("<script> window.open('admin_1/index.php','_parent')</script>");
                        else
                     echo("<script> window.open('index_after.php','_parent')</script>");
                 }
				 
             }
            
            
            ?>
          
                        <div class="row sub-w3l my-3">
                            <div class="col sub-agile">
                                 <a href="forget_pass.php" class="text-secondary">Forgot Password?</a>
                            </div>
                          
                        </div>
                       <p class="text-center text-secondary">Don't have an account?
                            <a href="#exampleModal1" data-toggle="modal"  class="text-dark font-weight-bold">
                                Register Now</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
     <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                         <div class="form-group">
                            <label  class="col-form-label">Name</label>
                            <input type="text" class="form-control" placeholder="Enter Your Name " name="txtname"  required value="<?php echo isset($_POST['txtname'])?$_POST['txtname']:''?>">
                        </div>
                        <div class="form-group">
                            <label  class="col-form-label">Username</label>
                            <input type="text" class="form-control" placeholder="Enter Your Username " name="txtusername"  required value="<?php echo isset($_POST['txtusername'])?$_POST['txtusername']:''?>">
                        </div>
                        <div class="form-group">
                            <label  class="col-form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Enter Your Email " name="txtemail" required  value="<?php echo isset($_POST['txtemail'])?$_POST['txtemail']:''?>">
                        </div>
                        <div class="form-group">
                            <label  class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Enter Your Password " name="txtpassword" required value="<?php echo isset($_POST['txtpassword'])?$_POST['txtpassword']:''?>">
                        </div>
                          <div class="form-group">
                            <label class="col-form-label">Phone</label>
                            <input type="text" class="form-control" placeholder="Enter Your Phone " name="txtphone"  required value="<?php echo isset($_POST['txtphone'])?$_POST['txtphone']:''?>">
                        </div>
                          <div class="form-group">
                            <select class="form-control buttom" name="txtcountry"> 
                                <option value="" >Select Country</option selected="selected">
                                    <option value="Oman"  <?php  if(isset($_POST['txtcountry']) && $_POST['txtcountry']=="Oman")  echo('selected="selected"'); ?> > Oman</option>
                                
                                    <option value="Austuralia" <?php  if(isset($_POST['txtcountry']) && $_POST['txtcountry']=="Austuralia")  echo ('selected="selected"'); ?> > Austuralia</option>
                                
                                    <option value="America" <?php  if(isset($_POST['txtcountry']) && $_POST['txtcountry']=="America")  echo ('selected="selected"'); ?> > America</option>
                                
                                    <option value="Dobai" <?php  if(isset($_POST['txtcountry']) && $_POST['txtcountry']=="Dobai")  echo ('selected="selected"');  ?> > Dobai</option>
                                
                                    <option value="Egypt" <?php  if(isset($_POST['txtcountry']) && $_POST['txtcountry']=="Egypt")  echo ('selected="selected"'); ?> > Egypt</option>
                                
                                    <option value="Canada" <?php  if(isset($_POST['txtcountry']) && $_POST['txtcountry']=="Canada")  echo ('selected="selected"'); ?> > Canada</option>
                                
                                    <option value="Srilanka" <?php  if(isset($_POST['txtcountry']) && $_POST['txtcountry']=="Srilanka")  echo ('selected="selected"'); ?> > Srilanka</option>
                            </select>
                        </div>
                        <div class="sub-w3l">
                            <div class="sub-agile">
                                <input type="checkbox"  value="">
                                <label  class="mb-3">
                                    <span></span>I Accept to the Terms & Conditions</label>
                            </div>
                        </div>
                        <div class="right-w3l">
                            <input type="submit" name="register" class="form-control serv_bottom" value="Register">
                        </div>
                    </form>
          
                </div>
            </div>
        </div>
    </div>
              <?php

   if(isset($_POST["register"]))
  {
      
     $db=new connection();
       $insert= "insert into user values('$_POST[txtusername]','$_POST[txtpassword]','$_POST[txtemail]','$_POST[txtcountry]','$_POST[txtname]','$_POST[txtphone]' )";
       $add=$db->RunDb($insert);
		
		if($add=="ok")
		{
				 echo("<script> alert('user has been created : please login'); </script>");
				 echo "<script> window.open('index.php','_parent')</script>";
		}
		
			
		else if(strpos($add,'PRIMARY')==true)
		   echo("<script>alert(' sorry this username exist :) ');</script>");
		else
			echo ($add);
				
			}
			 
   
                    
    ?>  
    
    
    
    
    
    
    <!-- ***** Clients Area End ***** -->

    <!-- ****** Footer Area Start ****** -->
    <footer class="dorne-footer-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-md-flex align-items-center justify-content-between">
                    <div class="footer-text">
                        <p>
                            
Copyright &copy;<script>document.write(new Date().getFullYear());</script>>

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
    
    
  <script src="js_slider/jquery.min.js"></script>
  <script src="js_slider/jquery-migrate-3.0.1.min.js"></script>
  <script src="js_slider/popper.min.js"></script>
  <script src="js_slider/bootstrap.min.js"></script>
  <script src="js_slider/jquery.easing.1.3.js"></script>
  <script src="js_slider/jquery.waypoints.min.js"></script>
  <script src="js_slider/jquery.stellar.min.js"></script>
  <script src="js_slider/owl.carousel.min.js"></script>
  <script src="js_slider/jquery.magnific-popup.min.js"></script>
  <script src="js_slider/aos.js"></script>
  <script src="js_slider/jquery.animateNumber.min.js"></script>
  <script src="js_slider/bootstrap-datepicker.js"></script>
  <script src="js_slider/jquery.timepicker.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js_slider/google-map.js"></script>
  <script src="js_slider/main.js"></script>
</body>

</html>