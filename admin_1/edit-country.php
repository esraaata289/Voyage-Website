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
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                <input type="text" id="myInput"  placeholder="Search..." class="search-int form-control">
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
           <form method="post" enctype="multipart/form-data"> 
         
        <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Countries List</h4>
                            <div class="add-product">
                                <a href="add-country.php">Add  Country or Countries</a>
                                
                            </div>
                         
                            
                            <div class="asset-inner">
                                <table >
                                  <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Visits</th>
                                        <th>Favourits</th>
                                        <th>Setting</th>
                                    </tr>
                                    </thead> 
                                                <?php 
                                               include"../connection.php"; 
                                           set_time_limit(0);
                                           $sql=" select * from country";
                                           $qry=mysqli_query($conn,$sql);
                                            while($row = mysqli_fetch_assoc($qry)) 
                                              {
                                       
                                              ?>
                                    <tbody id="myTable">
                                    <tr>
                                        <td><?php echo($row['country_no']) ?><input type="hidden"  name="txtcountryno" value="<?php echo($row['country_no']) ?>"/></td>
                                        <td><img src="../country/<?php echo($row['country_no']) ?>.jpg" /></td>
                                        <td><?php echo($row['country_name']) ?><input type="hidden"  name="txtcountryno" value="<?php echo($row['country_name']) ?>"/></td>
                                        <td><?php echo($row['num_visits']) ?><input type="hidden"  name="txtcountryno" value="<?php echo($row['num_visits']) ?>"/></td>
                                        <td>Html, Css</td>
                                        
                                        <td>
                                            <button  title="Edit"  name="<?php echo($row['country_no']).'edit' ?>" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                            <button  title="Trash"  class="pd-setting-ed" type="submit" name="<?php echo($row['country_no']).'delete' ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                          <?php 
                                       //delete        
                                               
                                 if(isset($_POST[$row['country_no']."delete"]) )
                                        {
                                            $db=new Connection();
                                            $st="delete from country where country_no='$row[country_no]'";
                                            $add= $db->rundb($st);
                                            if($add=="ok")
                                            {
                                             
                                                echo("<script>alert('Country has been deleted successful')</script>");
                                            }
                                            else 
                                            {
                                                echo($add);
                                            }
                                        }
                                      //edit
                                
                                    ?>
                                    <?php } ?>
                                    </tbody>
                                 
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
               </form>
               <form method="post" enctype="multipart/form-data">
                 
                                
               </form> 
                       
                         
                                
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

    </body>


</html>