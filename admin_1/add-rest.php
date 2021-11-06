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
                            <div class="breadcome-list single-page-breadcome">
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
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>restaurants List</h4>
                            <div class="add-product">
                                <a href="#">Add restaurant or restaurants</a>
                            </div>
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                        <th>No</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        
                                        <th>Favourits</th>
                                        <th>Setting</th>
                                    </tr>
                                                <?php 
                                             include"connection.php";  
                                           set_time_limit(0);
                                           $sql=" select * from restaurant";
                                           $qry=mysqli_query($conn,$sql);
                                            while($row = mysqli_fetch_assoc($qry)) 
                                              {

                                              ?>
                                    <tr>
                                        <td><?php echo($row['restaurant_no']) ?></td>
                                        <td><img src="restaurant/<?php echo($row['restaurant_no']) ?>.jpg" /></td>
                                        <td><?php echo($row['restaurant_name']) ?></td>
                                        
                                        <td>Html, Css</td>
                                        
                                        <td>
                                            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                  
                                    
                                   
                                </table>
                            </div>
                            <div class="custom-pagination">
								<ul class="pagination">
									<li class="page-item"><a class="page-link" href="#">Previous</a></li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">Next</a></li>
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    
    
    </body>


</html>