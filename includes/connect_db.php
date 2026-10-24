<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);



define("HOSTNAME","localhost");
define("HOST_USER","u949226043_business_user");
define("HOST_PASS","Osama(2004522)@.");
define("DB_NAME","u949226043_business_db");

$conn = mysqli_connect(HOSTNAME,HOST_USER,HOST_PASS,DB_NAME);
if(!$conn){
    die("Connection failed:".mysqli_connect_error(). "Error NO:".mysqli_connect_errno());
} else {
    //echo"Connected";
}
?>