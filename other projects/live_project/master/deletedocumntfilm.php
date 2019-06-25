<?php
session_start();
extract($_POST);
include("../connect.php");
if (!empty($_POST['checkdelete'])) {
foreach($_POST['checkdelete'] as $v) {
$del_id = $v;
$q45="delete from documentaryfilm where slno='$del_id'";
$r45=mysql_query($q45);
}
}
if($r45)
{
$_SESSION['DELUSER_suc']="Successfully Deleted...";
header("location:../api.php?link=0DCMNTRYFL");
}
?>