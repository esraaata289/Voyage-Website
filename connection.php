 <?php
$conn=mysqli_connect("mysql6001.site4now.net","a49163_webdata","esraa_2891995","db_a49163_webdata");
class connection 
{
    ///insert
    public function RunDb($st)
    {
      $conn=mysqli_connect("mysql6001.site4now.net","a49163_webdata","esraa_2891995","db_a49163_webdata");
        $insert=$st;
        if(!mysqli_query($conn,$insert))
            
           // if(mysql_errno($conn)==1062)
                return mysqli_error($conn);
           // else
            //    return "other error";
            else 
                return "ok";
        
    }
    ////////search
     public function search($st)
    {
      $conn=mysqli_connect("mysql6001.site4now.net","a49163_webdata","esraa_2891995","db_a49163_webdata");
             $insert=$st;
        
            $result= mysqli_query($conn,$insert);
            if(mysqli_num_rows($result)>0)
                return "1";
             else 
                return "no";
        
    }
    ////delete
      public function delete($st)
    {
      $conn=mysqli_connect("mysql6001.site4now.net","a49163_webdata","esraa_2891995","db_a49163_webdata");
        $delete=$st;
        if(!mysqli_query($conn,$delete))
            
           // if(mysql_errno($conn)==1062)
                return mysqli_error($conn);
           // else
            //    return "other error";
            else 
                return "ok";
        
    }
    ///////getdata
      public function getdata($st)
    {
      $conn=mysqli_connect("mysql6001.site4now.net","a49163_webdata","esraa_2891995","db_a49163_webdata");
             $select=$st;
        
            $result= mysqli_query($conn,$select);
            $row=mysqli_fetch_assoc($result);
            return $row;
            
        
    }
}

  ?>