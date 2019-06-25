<?php
session_start();
extract($_POST);
include("../connect.php");
if (!empty($_POST['checkdelete'])) {
foreach($_POST['checkdelete'] as $v) {
$del_id = $v;
$q31="select * from newspaperpublication where slno='$del_id'";
$r31=mysql_query($q31);
while($row31=mysql_fetch_array($r31))
{
$filename=$row31['doc_file'];	
}
$q45="delete from newspaperpublication where slno='$del_id'";
$r45=mysql_query($q45);
unlink("../upload_docs/$filename");
}
}
if($r45)
{
$_SESSION['DELUSER_suc']="Successfully Deleted...";
header("location:../api.php?link=0NWSPBLCTN");
}
?>