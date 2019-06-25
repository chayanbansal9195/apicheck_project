<?php
session_start();
include('connect.php');
if ($_SERVER['REQUEST_METHOD']=='POST') {	
	extract($_POST);
	if($newpass!=$cpass){
		echo "<script>alert('Confirm Password Doesnot Match');window.location='api.php?link=0CHNGPASS';</script>";
		echo "Password Not match";
		die();
	}
	$query="select * from login where loginid='$user' and password='$oldpass'";
	$query_run=mysql_query($query);
	if (mysql_num_rows($query_run)==1) {
		$update_query="update login set password='$newpass' where loginid='$user'";
		if ($update_query_run=mysql_query($update_query)) {
			echo "<script>alert('Password Successfully Changed');window.location='api.php?link=0CHNGPASS';</script>";
		}else{
			echo "<script>alert('Unable to Change Password');window.location='api.php?link=0CHNGPASS';</script>";
		}
	}else{
		echo "<script>alert('Old Password Incorrect');window.location='api.php?link=0CHNGPASS';</script>";
		die();
	}
}
?>