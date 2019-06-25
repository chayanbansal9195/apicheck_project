<?php
extract($_POST);
session_start();
date_default_timezone_set("Asia/Kolkata");
$sdate=date("Y-m-d");
$stime=date("H:i:s");
$sdatetime=$sdate.' '.$stime;
include("../connect.php");
$q21="Insert into rolloveradvisories(details, login, date, datetime) values('$advisories','$user','$sdate','$sdatetime')";
$r21=mysql_query($q21);
if($r21)
{
$_SESSION['ROLLADVSUC']="Successfully Uploaded...";
header("location:../api.php?link=0ROADVSR");
}
?>