<?php
echo "sad";
require_once("../../../mysql/conn.php");
require_once("../../../sms.php");


// gerftan shomare va check kardan un va age dorost bod ersal trialpass
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (
        isset($_POST['phone']) && $_POST['phone'] != '' &&
        isset($_POST['work']) && $_POST['work'] === 'sendsms'
    ) {
        sendsmsbp($conn, $_POST['phone']);
    } elseif
    (
        isset($_POST['phone']) && $_POST['phone'] != '' &&
        isset($_POST['work']) && $_POST['work'] === 'loginbp' &&
        isset($_POST['trialpass']) && $_POST['trialpass'] != ''
    ) { 
        loginbp($conn, $_POST['phone'], $_POST['trialpass']);
    }
}


function sendsmsbp($conn, $number)
{
    $sql = "SELECT * FROM admin where phone_number='$number'";
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0) {
        $random_int = random_int(12345, 98765);
        $trial_pass = hash("sha256", $random_int);
        $update_trial_pass = "UPDATE admin SET trialpass='$trial_pass' WHERE phone_number='$number' ";
        $query2 = mysqli_query($conn, $update_trial_pass);
        $send = send("$number", "$random_int");
        $status = '';
        $date_send = '';
        $message_id = '';
        foreach ($send as $items) {
            $status = $items->status;
            $date_send = $items->date;
            $message_id = $items->messageid;
        }
        $update_date_trial_pass = "UPDATE admin SET datetrialpass='$date_send' WHERE phone_number='$number'";
        $query3 = mysqli_query($conn, $update_date_trial_pass);

        $result = array("status" => $status, 'msg' => 'پیام به سرویس کاوه نگار منتقل شد', 'date' => gmdate('m/d/Y H:i:s', $date_send), 'message_id' => $message_id);
    } else {
        $result = array("status" => 0, 'msg' => "ba shomare mored nazar sabte nam anjam nashode ast");
    }
    echo json_encode($result);

}

function loginbp($conn, $number, $trial_pass)
{
    $trial_pass = hash("sha256", $trial_pass);
    $sql = "SELECT * FROM admin WHERE phone_number='$number' AND trialpass='$trial_pass'";
    $query = mysqli_query($conn, $sql);

    if (mysqli_num_rows($query) > 0) {
        $user_id = mysqli_fetch_assoc($query)['id'];
        $sql1 = "UPDATE admin SET trialpass=null , datetrialpass=null WHERE phone_number='$number'";
        mysqli_query($conn, $sql1);
        $status = 1;
        $_SESSION['userid'] = $user_id;
        $result = array("status" => $status, 'msg' => 'رمز یک بار مصرف صحیح می باشد', 'userid' => $user_id);
        setcookie('userid', $user_id, time() + (86400 * 30), "/");
    } else {
        $status = -1;
        $result = array("status" => $status, 'msg' => 'رمز یک بار مصرف صحیح نمی باشد');
    }
    echo json_encode($result);

}

//function checklogin($conn, $userid)
//{
//    $sql = "SELECT id FROM admin WHERE id='$userid'";
//    $query = mysqli_query($conn, $userid);
//    $result = mysqli_num_rows($query);
//    if ($result > 0) {
//        $_SESSION['userid'] = $userid;
//    }else{
//        $_SE
//    }
//}
