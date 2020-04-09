<?php
require_once ("/var/www/html/delionir/control_panel/config.php");
require_once("/var/www/html/delionir/control_panel/app/func.php");
require_once ("admin/func.php");
if(isset($_COOKIE['userid']) && $_COOKIE['userid']!=''){
    cookie_to_session($conn,$_COOKIE['userid']);
}
if(
    !isset($_SESSION['userid']) || $_SESSION['userid'] == ''
){
    header("location:login/index.php");
    die();
}
if($_SESSION['userid']=='1'){
    header("location:admin/");
}else{
    header("location:restaurant/");
}
