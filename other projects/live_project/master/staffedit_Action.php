<?php
session_start();
extract($_POST);
include('../connect.php');

$q654="Update staff set name='$uname', qualification='$qualification', designation='$designation', address='$addr', phone_no='$phone', gender='$gender' where email='$email'";
$r654=mysql_query($q654);

$query007="Update login set name='$uname' where loginid='$email'";
$result007=mysql_query($query007);

if($r654 && $result007)
{
$_SESSION['Staffedit']="Updated Successfully...";
header("location:../api.php?link=0STFETR");
}
?>