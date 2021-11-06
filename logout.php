<?php


    setcookie("usercook","",time()-1);
    header('location:index.php');
    session_destroy();

    

?>