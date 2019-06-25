<?php
session_start();
extract($_GET);
include('../connect.php');
$q654="Update contactstaff set status='0' where slno='$id'";
$r654=mysql_query($q654);
if($r654)
{
$_SESSION['DELUSER_suc']="Alert Closed Successfully...";
header("location:../api.php?link=0CNTCTALRT");
}
?>