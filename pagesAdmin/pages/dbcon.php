<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "projetiscamen";


try {
    $conn= new PDO("mysql:host=$servername; dbname=$database; chartset=utf8,", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "connected Successfully";

} catch (PDOException $e) {
    echo "connection failed" .$e->getMessage();
}


?>