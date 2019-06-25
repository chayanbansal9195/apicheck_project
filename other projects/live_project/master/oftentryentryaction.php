<?php
extract($_POST);
session_start();
date_default_timezone_set("Asia/Kolkata");
$sdate=date("Y-m-d");
include("../connect.php");
$activity = str_replace("'","\'", $activity);
$target_path = "../upload_docs/";
$s_time=date("hiS");
$stime=date("H:i:s");
$s_date=date("mjY");
$sdatetime=$sdate.' '.$stime;
//echo $basefile=$_FILES['doc']['name'];

$joinfile=$s_date.$s_time.'^'.$_FILES['doc']['name'];
$extract=explode('^',$joinfile);
$exjoin1=$extract[0];
$exjoin2=$extract[1];
$path = $_FILES['doc']['name'];
$ext = pathinfo($path, PATHINFO_EXTENSION);
$file_name="OFT".$exjoin1 .'.' .$ext;
$extension = end((explode(".", $file_name)));
$target_path = $target_path.$file_name;

if(move_uploaded_file($_FILES['doc']['tmp_name'], $target_path))
{
echo $q213="Insert into oftactivities(discipline, oft, doc_file, activity_date, datetime, login) values('$discipline','$activity','$file_name','$date','$sdatetime','$login')";
$r213=mysql_query($q213);
$_SESSION['HOUSE_suc']="Successfully Uploaded...";
header("location:../api.php?link=0OFTACTVTS");
}
else
{
$q213="Insert into oftactivities(discipline, oft, doc_file, activity_date, datetime, login) values('$discipline','$activity','','$date','$sdatetime','$login')";
$r213=mysql_query($q213);
$_SESSION['HOUSE_suc']="Successfully Uploaded...";
header("location:../api.php?link=0OFTACTVTS");		
}
?>