<?php
extract($_POST);
session_start();
include("../connect.php");
$remarks = str_replace("'","\'", $remarks);
$q213="Insert into documentaryfilm(link, remarks, date, login) values('$ulink','$remarks','$date','$login')";
$r213=mysql_query($q213);
if($r213)
{
$_SESSION['HOUSE_suc']="Successfully Uploaded...";
header("location:../api.php?link=0DCMNTRYFL");
}
else
{
$_SESSION['HOUSE_err']="Error...";
header("location:../api.php?link=0DCMNTRYFL");
}
?>