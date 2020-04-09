<?php
session_start();
date_default_timezone_set("Asia/Tehran");
$conn = mysqli_connect("localhost", "root", "arman1815", "delionir");
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
