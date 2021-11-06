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
                            <div class="breadcome-list single-page-breadcome" style="height:800px; background-color:f6f8fa30;">
                                <div class="row" >
                                   
                                            <center>
                                            <img src="image.jpg"/>
                                            </center>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
    
    
    </body>


</html>