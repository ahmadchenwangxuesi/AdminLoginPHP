<?php

$db_host = "localhost";
$db_user = "paceusagans";
$db_pass = "google@365%";
$db_name = "paceusagans";

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}
