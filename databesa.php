<?php

session_start();
$conn = mysqli_connect("localhost"," root","");
mysqli_select_db($conn,"test");

if($conn){
    die("connceted sucssfull");

}
?>