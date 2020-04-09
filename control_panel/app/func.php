<?php
require_once("/var/www/html/delionir/mysql/conn.php");
require_once("/var/www/html/delionir/sms.php");


function cookie_to_session($conn,$userid){
    $sql="SELECT * FROM admin WHERE admin.id='$userid'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $_SESSION['userid']=$userid;
    }
}


?>