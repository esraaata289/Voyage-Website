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
                                                <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            
                                            <li><span class="bread-blod">All Transportations</span>
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
		   include "../connection.php";
		   $sql=" select * from transportion ";
		   $qry=mysqli_query($conn,$sql);
		    while($row = mysqli_fetch_assoc($qry)) 
		      {
			  
		      ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="courses-inner res-mg-b-30">
                            <div class="courses-title">
                                <a href="#"><img src="../trans/<?php echo($row['trans_no']) ?>.jpg" alt=""></a>
                                <h2><?php echo($row['trans_name']) ?></h2>
                            </div>
                            <div class="courses-alaltic">
                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
                                
                                 </div>
                
                             <div class="course-des">
                                <p><span><i class="fa fa-clock"></i></span> <?php echo($row['details']) ?></p>
                                
                            </div>
                  
                            
                        </div>
                    </div>
                    <?php } ?>
                </div>
         </div>
    </div>
   
    
   
    
    
    </body>


</html>