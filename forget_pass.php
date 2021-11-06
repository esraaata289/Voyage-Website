
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Forget Password</title>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, 
		Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link rel="icon" href="img/core-img/favicon.ico">
    <link href="css_forget/style.css" rel="stylesheet" type="text/css" />
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="css_forget/fontawesome-all.css" rel="stylesheet" />
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- /google fonts-->

</head>


<body>
    <h1></h1>
    <div class=" w3l-login-form">
        <h2>Check UserName</h2>
        <form action="#" method="POST">

            <div class=" w3l-form-group">
                <label>Username:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="txtusername" class="form-control" placeholder="Username" required="required" />
                </div>
            </div>
           
            
            <button type="submit" name="submit" >Check</button>
          <?php
           
            
              if(isset($_POST["submit"]) && !empty($_POST["txtusername"]) )
             {
                 include "connection.php";
                 $username=$_POST["txtusername"];
                 
                 
                 $db=new connection();
                 $query=$db->search("select * from user where username='$username'");
                 if($query!="1")
                     echo("<script> alert('Invalid username ! Try Again ')</script>");
                 else
                 {
                    $result=$db->getdata("select * from user where username='$username' ");
                     $pass=$result['password'];
                     $email=$result['email'];
                     $coun=$result['country'];
                     $name=$result['name'];
                     $phone=$result['phone'];
                     //echo($pass.$email.$coun.$name.$city.$street.$phone);
                     //by mail
                     /*ini_set("SMTP","mail.gmail.com");
                     ini_set("smtp_port","25");
                     $header='From : projectwebsite2019@gmail.com';
                     ml($email,"Forget Password","Your Password is :".$pass,$header);
                     */
                     //by SMS

                    include_once("ViaNettSMS.php");

                    // Declare variables.
                    $Username = "esraaroaa289@gmail.com";
                    $Password = "ognar";
                    $MsgSender = "01234546712";
                    $DestinationAddress = $phone;
                    $Message = "Dear :".$name."Your Password is :".$pass."NTI";

                    // Create ViaNettSMS object with params $Username and $Password
                    $ViaNettSMS = new ViaNettSMS($Username, $Password);
                    try
                    {
                        // Send SMS through the HTTP API
                        $Result = $ViaNettSMS->SendSMS($MsgSender, $DestinationAddress, $Message);
                        // Check result object returned and give response to end user according to success or not.
                        if ($Result->Success == true)
                            $Message = "Message successfully sent!";
                        
                        else
                            $Message = "Error occured while sending SMS<br />Errorcode: " . $Result->ErrorCode . "<br />Errormessage: " . $Result->ErrorMessage;
                    }
                    catch (Exception $e)
                    {
                        //Error occured while connecting to server.
                        $Message = $e->getMessage();
                    }
                   echo("<script>alert('$Message')</script>");
                   echo("<script> window.open('index.php','_parent')</script>");
                     //echo($Message);
                     

                    

              
                     
                     
                 }
             }
            
            
            ?>
          
            
            
        </form>
       
        
    </div>
    

</body>

</html>