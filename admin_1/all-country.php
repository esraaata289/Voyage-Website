<?php
session_start();
if(isset($_SESSION['SEusername'])&& ($_SESSION['SEusername']!="Admin")){

    header( 'Location: ../index.php');
    die();
}
?>


<?php include"changed.html"?>
<!doctype html>
<html class="no-js" lang="en">
<head>
   
    
    </head>
<body>
     <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                <input type="text" id="divOfPs" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            
                                            <li><span class="bread-blod">All Countries</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    
     <div class="courses-area">
            <div class="container-fluid">
                <div class="row">
                          <?php 
             include"../connection.php";  
		   set_time_limit(0);
		   $sql=" select * from country";
		   $qry=mysqli_query($conn,$sql);
		    while($row = mysqli_fetch_assoc($qry)) 
		      {
			  
		      ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12"  data-filter="true" data-input="#divOfPs">
                        <div class="courses-inner res-mg-b-30">
                            <div class="courses-title">
                                <a href="#"><img src="../country/<?php echo($row['country_no']) ?>.jpg" alt=""></a>
                                <h2><?php echo($row['country_name']) ?></h2>
                            </div>
                <div class="courses-alaltic">
                    <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span><?php echo($row['num_visits']) ?> Visits</span>
                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
                                
                 </div>
                    <div class="product-buttons">
                        <a href="city.php?CountryNo=<?php echo($row['country_no']) ?>" class="button-default cart-btn">Discover More</a>
                    </div>
                            
                        </div>
                    </div>
                    <?php } ?>
                </div>
         </div>
    </div>
    
    
    </body>


</html>