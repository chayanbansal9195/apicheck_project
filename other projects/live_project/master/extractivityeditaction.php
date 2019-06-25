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
if($_FILES['doc']['name']!='')
{
$select="select * from extratraining where slno='$slno'";
$qry=mysql_query($select);
while($row=mysql_fetch_array($qry))
{
	$doc=$row['doc_file'];
}
if($doc!='')
{
	unlink("../upload_docs/$doc");
}
$joinfile=$s_date.$s_time.'^'.$_FILES['doc']['name'];
$extract=explode('^',$joinfile);
$exjoin1=$extract[0];
$exjoin2=$extract[1];
$path = $_FILES['doc']['name'];
$ext = pathinfo($path, PATHINFO_EXTENSION);
$file_name="EXTRAIN".$exjoin1 .'.' .$ext;
$extension = end((explode(".", $file_name)));
$target_path = $target_path.$file_name;

if(move_uploaded_file($_FILES['doc']['tmp_name'], $target_path))
{
$q213="update extratraining set training='$activity', doc_file='$file_name' where slno='$slno'";
$r213=mysql_query($q213);
$_SESSION['HOUSE_suc']="Successfully Updated...";
header("location:../api.php?link=0EXTRACTVTS");
}
}
else
{
$q213="update extratraining set training='$activity' where slno='$slno'";
$r213=mysql_query($q213);
$_SESSION['HOUSE_suc']="Successfully Updated...";
header("location:../api.php?link=0EXTRACTVTS");		
}

?>