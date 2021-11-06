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
    
     <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st" >
                           
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Coutries Details</a></li>
                                
                            </ul>
                           
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad addcoursepro">
                                                    <form  method="post" enctype="multipart/form-data"> 
                                                        <?php

                                                            include"../connection.php";
                                                            $db=new Connection();
                                                            $row=$db->GetData("select max(country_no)+1 from country");                     
                                                            //$row = mysqli_fetch_assoc($result);                
                                                            $cno=$row['max(country_no)+1'];

                                       if(isset($_POST['submit']) )
                                        {
                                            $db=new Connection();
                                            $insert="insert into country values('$_POST[txtcountryno]','$_POST[txtcountryname]','$_POST[txtvisits]')";
                                            $add= $db->rundb($insert);
                                            if($add=="ok")
                                            {
                                              
                                                $dir="../country/";
                                                $image=$_FILES['upload']['name'];
                                                $temp_name=$_FILES['upload']['tmp_name'];

                                                $dno=$_POST['txtcountryno'];

                                                if($image!="")
                                                {
                                                    $fdir= $dir.$dno.".jpg";
                                                    move_uploaded_file($temp_name, $fdir);
                                                }
                                                echo("<script>alert('Country has been Added successful')</script>");
                                            }
                                            else {
                                                echo($add);
                                            }
                                            
                                       }

                                            
                               ?>

                                                        
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="txtcountryno" type="text" class="form-control" placeholder="Country No"  value="<?php echo($cno) ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="txtcountryname" type="text" class="form-control" placeholder="Country Name">
                                                                </div>
                                                               
                                                               <div class="form-group">
                                                                    <input name="txtvisits" type="text" class="form-control" placeholder="Visits">
                                                                </div>
                                                             <div class="form-group">
                                                                   
                                                                    <input name="upload" type="file" class="form-control" >
                                                                </div>
                                                                
                                                            </div>
                                                            
                                                        </div>
                                                             
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                
                                                                <div class="payment-adress">
                                                                    
                                                                    <button  style="margin-right: 700px;" name="submit" type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                                                                       
                                                                </div>
                                                                    
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                                
                        </div>
                            
                    </div>
                </div>
            </div>
        </div>
        		
    
    
    </body>


</html>