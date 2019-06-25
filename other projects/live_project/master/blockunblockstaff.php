<?php
session_start();
extract($_GET);
include('../connect.php');
$qry="Select * from login where id='$id'";
$rsl=mysql_query($qry);
while($rw=mysql_fetch_array($rsl))
{
	$status=$rw['status'];
}
if($status=='1')
{
$q654="Update login set status='0' where id='$id'";
$r654=mysql_query($q654);
if($r654)
{
$_SESSION['DELUSER_suc']="User Successfully Unblocked...";
header("location:../api.php?link=0STFETR");
}
}
else
{
$q654="Update login set status='1' where id='$id'";

$r654=mysql_query($q654);
if($r654)
{
$_SESSION['DELUSER_suc']="User Successfully Blocked...";
header("location:../api.php?link=0STFETR");
}
}
?>