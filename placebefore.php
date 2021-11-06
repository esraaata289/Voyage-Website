<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>voyage</title>

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

</head>
    <body>
       
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
                                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                </li>
                              
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="explor.php">Explore</a>
                                </li>
                            </ul>
                            <!-- Search btn -->
                          
                            <!-- Signin btn -->
                            <div class="dorne-signin-btn">
                                <a data-toggle="modal" href="#exampleModal"><i class="fas fa-unlock-alt"></i> Sign in  </a>
                            </div>
                             <div class="dorne-signin-btn">
                                <a data-toggle="modal" href="#exampleModal1"><i class="fas fa-arrow-circle-right"></i> Register  </a>
                            </div>
                            
                            <!-- Add listings btn -->
                            
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
        <section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(img/bg-img/hero-1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
           
                </div>
            </div>
        </div>
    </section>
       
       <section class="dorne-features-destinations-area">
            
      <div style="margin-top:10px; margin-bottom:50px;text-align:center; ">
      <input type="text" placeholder="enter your Days that you will spend ..." style=" width:20%; height:50px; " >
          <input type="submit" name="calc" data-toggle="modal" data-target="#exampleModal2" value="Budget" style="height:50px; background-color:#7643ea; color:#f5f5f5; width:130px;">
 
      </div>
  
                            
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading dark text-center">
                        
                        <h4>Recent destinations</h4>
                        
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="features-slides owl-carousel">
                         <?php 
		   include"connection.php";
		   $sql=" select * from places where cityno='$_GET[CityNo]' ";
		   $qry=mysqli_query($conn,$sql);
		    while($row = mysqli_fetch_assoc($qry)) 
		      {
			  
		      ?>
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                            <img src="place/<?php echo($row['place_no']) ?>.jpg" alt="">
                            <!-- Price -->
                            <div class="price-start">
                               
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5><?php echo($row['place_name']) ?></h5>
                                    
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                           
                        </div>
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                          
                        </div>
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                          
                        </div>
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </section>
    <!-- ***** Features Restaurant Area End ***** -->

    <!-- ***** Features Events Area Start ***** -->
    <section class="dorne-features-events-area bg-img bg-overlay-9 section-padding-100-50" style="background-image: url(img/bg-img/hero-3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        
                        <h4>Nearby Hotels</h4>
                        
                    </div>
                </div>
            </div>

            <div class="row">
               <?php 
		   
		   $sql=" select * from hotels where cityno='$_GET[CityNo]' ";
		   $qry=mysqli_query($conn,$sql);
		    while($row = mysqli_fetch_assoc($qry)) 
		      {
			  
		      ?>
              
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.7s">
                        <div class="feature-events-thumb">
                            <img src="hotel/<?php echo($row['hotel_no']) ?>.jpg" alt="">
                            <div class="date-map-area d-flex">
                                <a href="#">26 Nov</a>
                                <a href="#"><img src="img/core-img/map.png" alt=""></a>
                            </div>
                        </div>
                        <div class="feature-events-content">
                            <h5><?php echo($row['hotel_name']) ?></h5>
                            
                            <p><?php echo($row['details']) ?></p>
                        </div>
                        <div class="feature-events-details-btn">
                            <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    
        <section class="dorne-features-events-area bg-img bg-overlay-9 section-padding-100-50" style="background-image: url(img/bg-img/hero-3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        
                        <h4>Nearby Restaurants</h4>
                        
                    </div>
                </div>
            </div>

            <div class="row">
                 <?php 
		   
		   $sql=" select * from restaurant where cityno='$_GET[CityNo]' ";
		   $qry=mysqli_query($conn,$sql);
		    while($row = mysqli_fetch_assoc($qry)) 
		      {
			  
		      ?>
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.7s">
                        <div class="feature-events-thumb">
                            <img src="restaurant/<?php echo($row['restaurant_no']) ?>.jpg" alt="">
                            <div class="date-map-area d-flex">
                                <a href="#">26 Nov</a>
                                <a href="#"><img src="img/core-img/map.png" alt=""></a>
                            </div>
                        </div>
                        <div class="feature-events-content">
                            <h5><?php echo($row['restaurant_name']) ?></h5>
                            
                            <p><?php echo($row['details']) ?></p>
                        </div>
                        <div class="feature-events-details-btn">
                            <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModal2Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
        <h4 style="text-align:center;">Please Login First!</h4>
          
      </div>
      </div>
      </div>
      </div>
        
        
        
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
                    echo("<script> alert('Invalid username or password')</script>");
                     
                     
                 else
                 {
                    
                     
                      session_start();
                     $_SESSION['SEusername']=$username;
					// echo($_SESSION['SEusername']);
                     
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script>
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
    </body>
</html>