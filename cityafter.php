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
                        header("location:search_after.php?search=$search");
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
    
    
        <div class="dorne-search-form d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>
                    <form method="post">
                        <input type="search" name="txtsearch" id="search" placeholder="Search Your Desire Destinations or Events">
                        <input type="submit" name="search" class="d-none" value="submit">
                    </form>
               <?php 
                    if(isset($_POST['search']))
                    {
                        $search=$_POST['txtsearch'];
                        header("location:search_cityafter.php?search=$search&CountryNo=$_GET[CountryNo]");
                    }

                  ?>
                </div>
            </div>
        </div>
    </div>
    
        <section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(img/bg-img/hero-1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
           
                </div>
            </div>
        </div>
    </section>
       <section class="dorne-features-destinations-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading dark text-center">
                        
                        <h4>Recent Destinations</h4>
                        
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="features-slides owl-carousel">
                        <!-- Single Features Area -->
             <?php 
		    include"connection.php";
		   $sql=" select * from city  where country_no='$_GET[CountryNo]' LIMIT 5";
		   $qry=mysqli_query($conn,$sql);
		    while($row = mysqli_fetch_assoc($qry)) 
		      {
			  
		      ?>
                        <div class="single-features-area">
                            <img src="city/<?php echo($row['cityno']) ?>.jpg" alt="">
                            <!-- Price -->
                            <div class="price-start">
                                
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5><?php echo($row['cityname']) ?></h5>
                                      <div class="places-total-destinations d-flex">
                               
                                <a href="placeafter.php?CountryNo=<?php echo($row['country_no']) ?>&&CityNo=<?php echo($row['cityno']) ?>">Discover More</a>
                            </div>
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