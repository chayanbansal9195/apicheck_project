<?php
session_start();
    if(isset($_SESSION['LOGIN']) && $_SESSION['LOGIN']!=""){
        echo "<script>alert('Already Login.');window.location='api.php?link=home';</script>";
        die();
	}
//// New Login Action 
extract($_POST);
include('connect.php');
$q="select * from login where loginid='$usrname'";
$q_run=mysql_query($q) or die(mysql_error());
$count=mysql_num_rows($q_run);

//start of Count user found number
if ($count>0) {
	while($row=mysql_fetch_array($q_run))  //Fetch User details
	{
		$d_name=$row['name'];
		$d_username=$row['loginid'];
		$d_password=$row['password'];
		$d_role=$row['role'];
		$d_status=$row['status'];
	}
	if($usrname==$d_username && $psw==$d_password)
		{
			$_SESSION['USER_NAME']=$d_name;
			$_SESSION['LOGIN']=$d_username;
			$_SESSION['ROLE']=$d_role;
			$_SESSION['STATUS']=$d_status;
			header("location:api.php?link=home");
	}else{
		$_SESSION['log_error']="Username or Password Do not Match";
		//echo "Username or Password didnot Match";
		header('Location:index.php');
	}
}else{
		$_SESSION['log_error']="Username or Password Do not Match";
		//echo "Username or Password didnot Match";
		header('Location:index.php');
	}
?>
