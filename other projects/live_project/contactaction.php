<?php
session_start();
date_default_timezone_set("Asia/Kolkata");	
$sdate=date("Y-m-d");
extract($_POST);
include('connect.php');
$q654="Insert into contactstaff(sender_name, sender_phone, sender_email, queries, staff_email, date, status) values('$sendername','$phone','$email','$queries','$staffname','$sdate','1')";
$r654=mysql_query($q654);

if($r654)
{
echo "<script>alert('Query Sent Successfully...');window.location='api.php?link=home';</script>";
}
?>