<?php
session_start();
extract($_POST);
include('../connect.php');
$query="Select * from staff where email='$email'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if($count>0)
{
echo "<script>alert('User Already Exist...');window.location='../api.php?link=0STFETR';</script>";
}
else
{
if($pass!=$cpass)
{
echo "<script>alert('Confirm Password Doesnot Match With The Password');window.location='../api.php?link=0STFETR';</script>";
}
else
{
date_default_timezone_set("Asia/Kolkata");
$sdate=date("Y-m-d");	
$target_path = "../staff_photo/";
$s_time=date("hiS");
$stime=date("H:i:s");
$s_date=date("mjY");
$sdatetime=$sdate.' '.$stime;
$joinfile=$s_date.$s_time.'^'.$_FILES['doc']['name'];
$extract=explode('^',$joinfile);
$exjoin1=$extract[0];
$exjoin2=$extract[1];
$path = $_FILES['doc']['name'];
$ext = pathinfo($path, PATHINFO_EXTENSION);
$file_name="PHOTO".$exjoin1 .'.' .$ext;
$extension = end((explode(".", $file_name)));
$target_path = $target_path.$file_name;

if(move_uploaded_file($_FILES['doc']['tmp_name'], $target_path))
{
$q654="Insert into staff(name, qualification, designation, address, phone_no, gender, email, photo) values('$uname','$qualification','$designation','$addr','$phone','$gender','$email','$file_name')";
$r654=mysql_query($q654);
}
else
{
$q654="Insert into staff(name, qualification, designation, address, phone_no, gender, email) values('$uname','$qualification','$designation','$addr','$phone','$gender','$email')";
$r654=mysql_query($q654);
}
$query007="Insert into login(name, loginid, password, role, status) values('$uname','$email','$pass','1','0')";
$result007=mysql_query($query007);

if($r654 && $result007)
{
$_SESSION['HOUSE_suc']="Staff Successfully Registered...";
header("location:../api.php?link=0STFETR");
}
}
}
?>