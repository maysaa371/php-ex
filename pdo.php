<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "firstdatabase";

try {

    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // set the PDO error mode to exception
    // echo "Connected Successfully";
    echo "sucessful";
} catch(PDOException $e) {

    echo "Connection Failed" .$e->getMessage();
}

?>