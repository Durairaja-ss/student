<?php
    $connection = mysqli_connect("localhost","root","");
     $db = mysqli_select_db($connection,"dbstu");
    
     $delete=$_GET['del'];

     $sql= "delete from studentapp where id = '$delete'";

  if(mysqli_query($connection,$sql))
 { 
   echo '<script> location.replace("index.php")</script>';
    }
    else
       {
           echo "Error" . $connection->error;
        } 
      

?>