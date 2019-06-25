<?php
extract($_POST);
session_start();
include("../connect.php");
$q213="Insert into videos(video, remarks, date, login) values('$video','$remarks','$date','$login')";
$r213=mysql_query($q213);
if($r213)
{
$_SESSION['HOUSE_suc']="Successfully Uploaded...";
header("location:../api.php?link=0VDOSUP");
}
else
{
$_SESSION['HOUSE_err']="Error...";
header("location:../api.php?link=0VDOSUP");
}
?>