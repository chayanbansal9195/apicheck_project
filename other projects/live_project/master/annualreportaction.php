<?php
extract($_POST);
session_start();
date_default_timezone_set("Asia/Kolkata");
$sdate=date("Y-m-d");
include("../connect.php");
$remarks = str_replace("'","\'", $remarks);
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
$file_name="ANLREPORT".$exjoin1 .'.' .$ext;
$extension = end((explode(".", $file_name)));
$target_path = $target_path.$file_name;

if(move_uploaded_file($_FILES['doc']['tmp_name'], $target_path))
{
$q213="Insert into annualreport(year, doc_file, remarks, date, datetime, login) values('$year','$file_name','$remarks','$sdate','$sdatetime','$login')";
$r213=mysql_query($q213);
$_SESSION['HOUSE_suc']="Successfully Uploaded...";
header("location:../api.php?link=0ANLRPRT");
}
else
{
$q213="Insert into annualreport(year, doc_file, remarks, date, datetime, login) values('$year','','$remarks','$sdate','$sdatetime','$login')";
$r213=mysql_query($q213);
$_SESSION['HOUSE_suc']="Successfully Uploaded...";
header("location:../api.php?link=0ANLRPRT");
}
?>