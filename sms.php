<?php
require  'vendor/autoload.php';

function send($receptor,$message){
    try{
        $sender = "10009002000200";
        $receptor = "$receptor";
        $message = "$message ";
        $api = new \Kavenegar\KavenegarApi("744D554B67536B2B47485130354E72754D67546F67417A6266716438624173597A476354656A376F7A48553D");
        $result=$api->Send($sender,$receptor,$message);
        if($result){
            return $result;
        }
    }
    catch(\Kavenegar\Exceptions\ApiException $e){
        // در صورتی که خروجی وب سرویس 200 نباشد این خطا رخ می دهد
        echo $e->errorMessage();
    }
    catch(\Kavenegar\Exceptions\HttpException $e){
        // در زمانی که مشکلی در برقرای ارتباط با وب سرویس وجود داشته باشد این خطا رخ می دهد
        echo $e->errorMessage();
    }
}