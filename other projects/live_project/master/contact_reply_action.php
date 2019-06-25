<?php
extract($_POST);
session_start();
date_default_timezone_set("Asia/Kolkata");
$sdate=date("Y-m-d");
$stime=date("H:i:s");
$sdatetime=$sdate.' '.$stime;
include("../connect.php");
$query007="Update contactstaff set reply='$reply', reply_date='$sdate' where slno='$slno'";
$result007=mysql_query($query007);

if($result007)
{
	
	$mailto="$email"; 

    $subject = "KVK Phek";

    $from="$login";     

    $message_body = "$reply\nRegards KVK Phek.";

    mail($mailto,$subject,$message_body,"From:".$from);

$_SESSION['REPLY_suc']="Email Sent Successfully...";
header("location:../api.php?link=0CNTCTALRT");
}
?>