<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "php_image";

// Create database connection
$con =mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

if(!$con){
    echo "error";
}
