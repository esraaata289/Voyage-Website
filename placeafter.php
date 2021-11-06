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
    <link href="style_1.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">
     

</head>

<body>
    <!-- Preloader -->
   

    <!-- ***** Search Form Area ***** -->
 

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
                                    <a class="nav-link" href="index_after.php">Home <span class="sr-only">(current)</span></a>
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
          <input type="submit" name="calc" data-toggle="modal" data-target="#exampleModalLong" value=" Your Budget" style="height:50px; background-color:#7643ea; color:#f5f5f5; width:130px;">
 
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
        
        
            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Edit Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                    <form action="#" method="post">
        <?php
    
                    
                    $ss=$_SESSION['SEusername'];
                    $db=new connection();
                    $result=$db->getdata("select * from user where username='$ss' ");
                     $user=$result['username'];
                     $pass=$result['password'];
                     $email=$result['email'];
                     $coun=$result['country'];
                     $name=$result['name'];
                     $phone=$result['phone'];                    
     
             
   if(isset($_POST["submit"]))
  {
       
      $db=new connection();
       $insert= "update user set password='$_POST[txtpassword]',email='$_POST[txtemail]',country='$_POST[txtcountry]',name='$_POST[txtname]',
        phone='$_POST[txtphone]' where 
        username= '$_POST[txtusername]'";
       $add=$db->RunDb($insert);

if($add=="ok")
{
         echo("<script> alert('user has been updated'); </script>");
         echo "<script> window.open('index_after.php','_parent')</script>";
}
else if(strpos($add,'uphone')==true)
   echo("<script>alert(' sorry this phone exist :) ');</script>");
    
else if(strpos($add,'PRIMARY')==true)
   echo("<script>alert(' sorry this username exist :) ');</script>");
else
    echo ($add);
        
    }
     
   
                    
    ?> 
        
                         <div class="form-group">
                            <label  class="col-form-label">Name</label>
                            <input type="text" class="form-control" placeholder="Enter Your Name " name="txtname"  required value="<?php echo ($name)?>">
                        </div>
                        <div class="form-group">
                            <label  class="col-form-label">Username</label>
                            <input type="text" class="form-control" placeholder="Enter Your Username " name="txtusername" readonly required value="<?php echo ($user)?>">
                        </div>
                        <div class="form-group">
                            <label  class="col-form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Enter Your Email " name="txtemail" required  value="<?php echo ($email)?>">
                        </div>
                        <div class="form-group">
                            <label  class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Enter Your Password " name="txtpassword" required value="<?php echo ($pass)?>">
                        </div>
                          <div class="form-group">
                            <label class="col-form-label">Phone</label>
                            <input type="text" class="form-control" placeholder="Enter Your Phone " name="txtphone"  required value="<?php echo ($phone)?>">
                        </div>
                          <div class="form-group">
                             
               <select class="form-control buttom" name="txtcountry"> ">
              <option value="<? php echo($coun)?>" selected="selected" ><?php echo($coun)?></option>
                    <option value="Oman"  <?php  if(isset($_POST['txtcountry']) && $_POST['txtcountry']=="Oman")  echo('selected="selected"'); ?>> Oman</option>
                    <option value="Austuralia"  <?php  if(isset($_POST['txtcountry']) && $_POST['txtcountry']=="Austuralia")  echo ('selected="selected"'); ?>> Austuralia</option>
                    <option value="America"  <?php  if(isset($_POST['txtcountry']) && $_POST['txtcountry']=="America")  echo ('selected="selected"'); ?>> America</option>
                    <option value="Dobai"  <?php  if(isset($_POST['txtcountry']) && $_POST['txtcountry']=="Dobai")  echo ('selected="selected"');  ?>> Dobai</option>
                    <option value="Egypt"  <?php  if(isset($_POST['txtcountry']) && $_POST['txtcountry']=="Egypt")  echo ('selected="selected"'); ?>> Egypt</option>
                    <option value="Canada"  <?php  if(isset($_POST['txtcountry']) && $_POST['txtcountry']=="Canada")  echo ('selected="selected"'); ?>> Canada</option>
                    <option value="Srilanka"  <?php  if(isset($_POST['txtcountry']) && $_POST['txtcountry']=="Srilanka")  echo ('selected="selected"'); ?>> Srilanka</option>
              </select>
                        </div>
                      
                        <div class="right-w3l">
                            <input type="submit" name="submit" class="form-control serv_bottom" value="Update">
                        </div>
                    </form>
          
                </div>
            </div>
        </div>
    </div>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" > Delete Window </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p style="font-size:20px;">Are You Sure Delete Your Account ?! </p>
      </div>
         
      <div class="modal-footer">
          <form method="post">
        <button type="submit" name="delete" class="btn btn-secondary" data-dismiss="modal" style="background-color:red;">Close</button>
        <button type="submit" name="delete" class="btn btn-primary" style="background-color:green;">Delete</button>
            
        <?php
                           
                               if(isset($_POST["delete"]))
                              {

 							 
               				   $session=$_SESSION['SEusername'];
                                  $db=new connection();
                                  $delete= "delete from user where username='$session'";      
                                  $add=$db->delete($delete);

                            if($add=="ok")
                            
                                    echo("<script> window.open('index.php','_parent')</script>");
                             
							  }
                            if(isset($_POST['no']))
                            
                               echo("<script> window.open('index_after.php','_parent')</script>"); 
                            
    
               ?>

        </form>
      </div>
     
    </div>
        
  </div>
</div>
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 600px;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" style="font-size:40px; color:white; "> Budget Window</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="font-size:20px; color:white; ">
        <section>
   
            <div class="row">
              <div>
			<div >
			<h4 style="color:white;text-align:center; margin-bottom:20px;"> Your Averages Per Day For One Person !!</h4>
					 <div class="row">
					
                          
                 <?php 
		   
		   $sql=" select * from city_budget where cityno='$_GET[CityNo]' ";
		   $qry=mysqli_query($conn,$sql);
		    while($row = mysqli_fetch_assoc($qry)) 
		      {
                         
		      ?>
                         <form action="" method="post">
                         <div class="form-group">
						<div class="form-wrapper" style="margin-right: 30px; margin-left: 30px;">
							<label for="" style="color:white;width:250px;"><?php echo($row['budget_name']) ?></label>
							<input type="text" class="form-control" readonly value="<?php echo($row['cost']) ?>">
						</div>
                         		
					</div>
                      
                             </form>
                 <?php }?>
                        
				
                    </div>
				
			</div>
		</div>
            </div>
       
    </section>
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