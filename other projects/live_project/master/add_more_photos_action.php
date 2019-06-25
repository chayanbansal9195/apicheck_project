<?php
extract($_POST);
session_start();
date_default_timezone_set("Asia/Kolkata");
$syear=date("Y");
$smonth=date("m");
$sdate=date("Y-m-d");
$stime=date("H:i:s");
$sdatetime=$sdate.' '.$stime;
$s_time=date("hiS");
$s_date=date("mjY");
$totalfile=0;
$sizemb=0;
include("../connect.php");

function compressImage($source_image, $compress_image) {
$image_info = getimagesize($source_image);
if ($image_info['mime'] == 'image/jpeg') {
$source_image = imagecreatefromjpeg($source_image);
imagejpeg($source_image, $compress_image, 20);
} elseif ($image_info['mime'] == 'image/gif') {
$source_image = imagecreatefromgif($source_image);
imagegif($source_image, $compress_image, 20);
} elseif ($image_info['mime'] == 'image/png') {
$source_image = imagecreatefrompng($source_image);
imagepng($source_image, $compress_image, 6);
}
return $compress_image;
}
foreach($_FILES['photo']['tmp_name'] as $key=>$tmp_name)
{

	$file_type_error = '';
if($_FILES['photo']['name'][$key]) {
$upload_dir = "../eventphoto/";
if (($_FILES["photo"]["type"] == "image/gif") ||
($_FILES["photo"]["type"][$key] == "image/jpeg") ||
($_FILES["photo"]["type"][$key] == "image/png") ||
($_FILES["photo"]["type"][$key] == "image/pjpeg")) {
	$joinfile=$s_date.$s_time.$key.'^'.$_FILES['photo']['name'][$key];
$extract=explode('^',$joinfile);
$exjoin1=$extract[0];
$exjoin2=$extract[1];
$path = $_FILES['photo']['name'][$key];
$ext = pathinfo($path, PATHINFO_EXTENSION);
$file_name=$exjoin1 .'.' .$ext;
$extension = end((explode(".", $file_name)));

////////////////////crop/////////////////////////////////////

define ("MAX_SIZE","400");
$uploadedfile = $_FILES['photo']['tmp_name'][$key];
 
$filename = stripslashes($_FILES['photo']['name'][$key]);
if($ext=="jpg" || $ext=="jpeg" || $ext=="JPG" )
{
$uploadedfile = $_FILES['photo']['tmp_name'][$key];
$src = imagecreatefromjpeg($uploadedfile);
}
else if($ext=="png")
{
$uploadedfile = $_FILES['photo']['tmp_name'][$key];
$src = imagecreatefrompng($uploadedfile);
}
 
list($width,$height)=getimagesize($uploadedfile);
if($height>$width)
{
$newwidth=900;
$newheight=1280;
}
if($width>$height)
{
$newwidth=1280;
$newheight=820;
}
echo $newheight;
echo $newwidth;
$tmp=imagecreatetruecolor($newwidth,$newheight);
 
imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,
 
$width,$height);
 
$mainfile = "../eventphoto/KVK". $file_name;
$finalfile= "KVK". $file_name;
imagejpeg($tmp,$mainfile,20);
 
imagedestroy($src);
imagedestroy($tmp);
/////////////////////////////////////////////////////////////



$upload_file = $upload_dir.$file_name;

$q21="Insert into eventphotos(event_code, event_name, event_photos, date, datetime, login) values('$ecode','$event','$finalfile','$sdate','$sdatetime','$login')";
$r21=mysql_query($q21);
$_SESSION['UPLSUC']="Successfully Uploaded...";
header("location:../api.php?link=0VWPHT");

} 
else {
$file_type_error = "Upload only jpg or gif or png file type";
}
}
}
?>