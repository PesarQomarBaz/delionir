<?php

function admin_info($conn,$id){
    $sql="SELECT id,phone_number,email,name,family,admin_profile_image_path FROM admin WHERE id='$id'";
    $result=mysqli_query($conn,$sql);
    $admin_info=[];
    if(mysqli_num_rows($result)==1){
        while ($res=mysqli_fetch_assoc($result)){
            $admin_info['id']=$res['id'];
            $admin_info['phone_number']=$res['phone_number'];
            $admin_info['email']=$res['email'];
            $admin_info['name']=$res['name'];
            $admin_info['family']=$res['family'];
            $admin_info['admin_profile_image_path']=$res['admin_profile_image_path'];
        }
    }
   return $admin_info;
}

function addrestaurant(){

}