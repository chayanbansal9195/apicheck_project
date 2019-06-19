<?php
date_default_timezone_set("Asia/Kolkata");
$sdate=date('Y-m-d');
$stime=date('h-m-s');
$sdatetime=$sdate.' '.$stime;
extract($_POST);
include('dbConfig.php');
$query="Insert into ckeditor(title, details, datetime) values('$title','$dtls','$sdatetime')";
$r=mysqli_query($con, $query);

header('location:api.php?link=TABVIE');
?>