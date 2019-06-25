<?php
$ecode='';
extract($_POST);
session_start();
date_default_timezone_set("Asia/Kolkata");
$sdate=date("Y-m-d");
$syear=date("Y");
$smonth=date("m");
$login=$_SESSION['LOGIN'];
include("../connect.php");
if(isset($_POST['delete']))
{
    $checkbox = $_POST['checkbox'];

for($i=0;$i<count($checkbox);$i++){
	$checkid=$checkbox[$i];
$photo_dir = "../rollover/";
$query="Select * from rolloversuccessstories where id='$checkid'";
$result=mysql_query($query);
while($row=mysql_fetch_array($result))
{
	$photos=$row['photos'];
$file_name=$photos;
$source_image = $photo_dir.$file_name;
unlink($source_image);
}
$q21="Delete from rolloversuccessstories where id='$checkid'";
$r21=mysql_query($q21);	
$_SESSION['ROLLSSDElSUC']="Successfully Deleted...";
header("location:../api.php?link=0ROSUCS");
}
}
?>