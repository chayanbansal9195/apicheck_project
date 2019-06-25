<!DOCTYPE html>
<html>
<head>
<title>KVK Phek</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="layout/styles/main.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/mediaqueries.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="imageslider/slider.css">
<style>
.mySlides1 {display:none;}
.mySlides2 {display:none;}
</style>

</head>
<body class="">
<div class="wrapper row1">
  <header id="header" class="full_width clear">
   <!-- <div id="hgroup">
      <h1><a href="index.html">KRISHI VIGYAN KENDRA PHEK</a></h1>
    </div>
    <div id="header-contact">
      <ul class="list none">
        <li><span class="icon-envelope"></span> <a href="#">info@domain.com</a></li>
        <li><span class="icon-phone"></span> +xx xxx xxxxxxxxxx</li>
      </ul>
    </div>-->
    <table width="100%" style="border:hidden;">
      <tr>
      <td width="20%" rowspan="2" style="border-right-style:hidden;"><a href="index.php"><img src="images/logo.png" width="89" height="60"></a></td>
      <td width="60%" height="45" align="center" style="font-size:32px;"><a href="index.php">KRISHI VIGYAN KENDRA PHEK</a></td>
      <td width="20%" rowspan="2" align="right" style="border-left-style:hidden;"><a href="index.php">Logo</a></td>
      </tr>
      <tr>
        <td align="center" style="font-size:20px;">ICAR - NRCM Porba, Nagaland</td>
      </tr>
      </table>
  </header>
</div>
<?php

include("index_menu.php");



?>
<div class="wrapper row3">
  <div id="container">
    <!-- ################################################################################################ -->
    <div id="homepage" class="clear">
      <div class="one_quarter first">
        <div class="last">
          <h2 style="font-family:'Comic Sans MS', cursive; font-size:24px;">About KVK Phek</h2>
          <ul class="list decimal">
            <li><span style="color:#F90;"><a href="districtprofile.php">District Profile</a></span></li>
            <li><span style="color:#F90;"><a href="vision.php">Vision</a></span></li>
            <li><span style="color:#F90;"><a href="staffdetails.php">Staff</a></span></li>
            <li><span style="color:#F90;"><a href="activities.php">Activities</a></span></li>
            <li><span style="color:#F90;"><a href="publications.php">Publications</a></span></li>
            <li><span style="color:#F90;"><a href="gallery.php">Gallery</a></span></li>
            <li><span style="color:#F90;"><a href="achievements.php">Achievement</a></span></li>
            <li><span style="color:#F90;"><a href="downloads.php">Download</a></span></li>
            <li><span style="color:#F90;"><a href="contactus.php">Contact Us</a></span></li>
            <li><span style="color:#F90;"><a href="rti.php">RTI</a></span></li>
            <li><span style="color:#F90;"><a href="weblinks.php">Weblinks</a></span></li>
          </ul>
        </div>
        <div class="push20">
      <br><br><h2 style="font-family:'Comic Sans MS', cursive; font-size:24px;">Upcoming Activities</h2>
      <table align="center" width="70%" border="5" height="300" style="border-color:#036; border-radius:6px;">
        <tr>
          <td><marquee direction="up" scrollamount="2" scrolldelay="2" onMouseOver="this.stop();" onMouseOut="this.start();" style="height:270px;">
            <?php
  
  date_default_timezone_set("Asia/Kolkata");	
  $sdate=date("Y-m-d");
  $prevdate=date('Y-m-d', strtotime($sdate .'-20 day'));
  include("connect.php");
  $q31="Select * from upcomingactivities order by activity_date desc";
  $r31=mysql_query($q31);
  $count31=mysql_num_rows($r31);
  if($count31>0)
  {
  while($row31=mysql_fetch_array($r31))
  {
	$note=$row31['activity']; 
	$file=$row31['doc_file']; 
	$notdate=$row31['activity_date'];
	if($notdate<$prevdate)
	{
		$new="";
	}
	else
	{
		$new="";
		//$new="<img src='images/new.gif' height='15' width='15'/>";
	}
	echo "&nbsp;&nbsp;<b>*</b><span style='color:blue; font-weight:bold; font-size:13px;'>$new &nbsp;$note</span>";	
  echo "<br/><br/>";
  
  }
  }
  ?>
          </marquee>
          
          </td></tr></table>
      </div>
      </div>
      <!-- ################################################################################################ -->
      <div class="publication">
        <h2 style="font-family:'Comic Sans MS', cursive; font-size:24px;">District Profile</h2>
        <table width="90%" style="border-style:dashed;">
       <tr>
	   <td><li></li></td>
       </tr>
          </table>
        
      </div>
      
      <!-- ################################################################################################ -->
      <div class="one_quarter">
      <div class="push20">
      <h2 style="font-family:'Comic Sans MS', cursive; font-size:24px;">Staff Login</h2>
      <table align="center" width="70%" border="5" style="border-color:#036; border-radius:6px;">
        <tr>
          <td><form class="rnd5" name="a" action="loginAction.php" method="post">
        <div class="form-input clear">
          <label for="ft_author">Login ID <span class="required">*</span><br>
            <input type="text" name="usrname" id="usrname" size="22">
          </label>
          <label for="ft_email">Password <span class="required">*</span><br>
            <input type="password" name="psw" id="psw" size="22">
          </label>
        </div><br>
        <p>
          <input type="submit" value="Submit" class="button small green">
          &nbsp;
          <input type="reset" value="Reset" class="button small red">
        </p>
      </form>
      </td></tr></table>
      </div>
      <div class="push20">
      <br><br><h2 style="font-family:'Comic Sans MS', cursive; font-size:24px;">News & Events</h2>
      <table align="center" width="70%" border="5" height="300" style="border-color:#036; border-radius:6px;">
        <tr>
          <td><marquee direction="up" scrollamount="2" scrolldelay="2" onMouseOver="this.stop();" onMouseOut="this.start();" style="height:270px;">
            <?php
  
  date_default_timezone_set("Asia/Kolkata");	
  $sdate=date("Y-m-d");
  $prevdate=date('Y-m-d', strtotime($sdate .'-20 day'));
  include("connect.php");
  $q31="Select * from newsevent order by date desc";
  $r31=mysql_query($q31);
  $count31=mysql_num_rows($r31);
  if($count31>0)
  {
  while($row31=mysql_fetch_array($r31))
  {
	$note=$row31['news_event']; 
	$file=$row31['doc_file']; 
	$notdate=$row31['date'];
	if($notdate<$prevdate)
	{
		$new="";
	}
	else
	{
		$new="";
		//$new="<img src='images/new.gif' height='15' width='15'/>";
	}
	echo "&nbsp;&nbsp;<b>*</b><span style='color:blue; font-weight:bold; font-size:13px;'>$new &nbsp;$note</span>";	
  echo "<br/><br/>";
  
  }
  }
  ?>
          </marquee>
          
          </td></tr></table>
      </div>
      
      
      
      </div>
      <div class="clear"></div>
      <div class="divider2"></div>
      <!-- ################################################################################################ -->
      <div style="display:block; width:100%; margin:0; padding:0; text-align:left; word-wrap:break-word;">
      <table align="center">
      <tr>
      <td width="33%" style="border:hidden;">
      <h2 style="font-family:'Comic Sans MS', cursive; font-size:24px;">Success Stories</h2>
      <table align="center" width="70%" border="5" height="320" style="border-color:#036; border-radius:6px;">
      <tr><td>
      <div class="w3-display-container" style="max-width:500px; max-height:100px;">
      <?php
	  $query1="Select * from rolloversuccessstories";
	  $result1=mysql_query($query1);
	  while($row1=mysql_fetch_array($result1))
	  {
		  $photos=$row1['photos'];
		  $caption=$row1['caption'];
	  ?>
  		<img class="mySlides1 w3-animate-top" src="rollover/<?php echo $photos; ?>" style="width:660px; height:250px; position:relative;">
        <div class="w3-display-bottomleft w3-small w3-padding-8 w3-teal mypSlides1" style="width:100%; height:56px;">
<?php echo $caption ?>
</div>
        <?php
	  }
		?>
	  </div>
      
      </td></tr>
      </table>
      </td>
      
      <td width="34%" style="border:hidden;">
      <h2 style="font-family:'Comic Sans MS', cursive; font-size:24px;">Farmers Innovations</h2>
      <table align="center" width="70%" border="5" height="320" style="border-color:#036; border-radius:6px;">
      <tr><td>
      
      <div class="w3-display-container" style="max-width:500px; max-height:100px;">
      <?php
	  $query1="Select * from rolloverfarmersinnovation";
	  $result1=mysql_query($query1);
	  while($row1=mysql_fetch_array($result1))
	  {
		  $photos=$row1['photos'];
		  $caption=$row1['caption'];
	  ?>
  		<img class="mySlides2 w3-animate-bottom" src="rollover/<?php echo $photos; ?>" style="width:660px; height:250px">
<div class="w3-display-bottomleft w3-small w3-padding-8 w3-teal mypSlides2" style="width:100%; height:56px;"><?php echo $caption ?></div>
        <?php
	  }
		?>
	  </div>
      
      </td></tr>
      </table>
      </td>
      
      <td width="33%" style="border:hidden;">
      <h2 style="font-family:'Comic Sans MS', cursive; font-size:24px;">Advisories</h2>
      <table align="center" width="70%" border="5" height="320" style="border-color:#036; border-radius:6px;">
      <tr><td>
      
      <marquee direction="up" scrollamount="2" scrolldelay="2" onMouseOver="this.stop();" onMouseOut="this.start();" style="height:270px;">
            <?php
  
  $query3="Select * from rolloveradvisories order by date desc";
  $result3=mysql_query($query3);
  $count3=mysql_num_rows($result3);
  if($count3>0)
  {
  while($row3=mysql_fetch_array($result3))
  {
	$advisories=$row3['details']; 
	echo "&nbsp;&nbsp;<b>*</b><span style='color:blue; font-weight:bold; font-size:13px;'>&nbsp;$advisories</span>";	
  echo "<br/><br/>";
  
  }
  }
  ?>
          </marquee>
      
      </td></tr>
      </table>
      </td>
      
      </tr>
      </table>
      </div>
      <div class="divider2"></div>
      <div style="display:block; width:100%; margin:0; padding:0; text-align:left; word-wrap:break-word;">
      <iframe src="https://maps.google.com/maps?q=25.618564, 94.329677&z=14&output=embed&iwloc=0" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- Footer -->
<!--<div class="wrapper row2">
  <div id="footer" class="clear">
    Empty
  </div>
</div>-->
<div class="wrapper row4">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2018 - KVK Phek, Porba, Nagaland<br>
Email-kvkphek@gmail.com
</p>
  </div>
</div>
<!-- Scripts -->
<script src="https://code.jquery.com/jquery-latest.min.js"></script>
<script src="https://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>
<script>window.jQuery || document.write('<script src="layout/scripts/jquery-latest.min.js"><\/script>\
<script src="layout/scripts/jquery-ui.min.js"><\/script>')</script>
<script>jQuery(document).ready(function($){ $('img').removeAttr('width height'); });</script>
<script src="layout/scripts/jquery-mobilemenu.min.js"></script>
<script src="layout/scripts/custom.js"></script>
<script>
var myIndex1 = 0;
var myIndex2 = 0;
carousel1();
carousel2();

function carousel1() {
    var i;
    var x = document.getElementsByClassName("mySlides1");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex1++;
    if (myIndex1 > x.length) {myIndex1 = 1}    
    x[myIndex1-1].style.display = "block";  
    setTimeout(carousel1, 3000);
}

function carousel2() {
    var j;
    var y = document.getElementsByClassName("mySlides2");
    for (j = 0; j < y.length; j++) {
       y[j].style.display = "none";  
    }
    myIndex2++;
    if (myIndex2 > y.length) {myIndex2 = 1}    
    y[myIndex2-1].style.display = "block";  
    setTimeout(carousel2, 3200);
}


var mypIndex1 = 0;
var mypIndex2 = 0;
pcarousel1();
pcarousel2();

function pcarousel1() {
    var i;
    var x = document.getElementsByClassName("mypSlides1");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex1++;
    if (myIndex1 > x.length) {myIndex1 = 1}    
    x[myIndex1-1].style.display = "block";  
    setTimeout(pcarousel1, 3000);
}

function pcarousel2() {
    var j;
    var y = document.getElementsByClassName("mypSlides2");
    for (j = 0; j < y.length; j++) {
       y[j].style.display = "none";  
    }
    myIndex2++;
    if (myIndex2 > y.length) {myIndex2 = 1}    
    y[myIndex2-1].style.display = "block";  
    setTimeout(pcarousel2, 3200);
}

</script>
</body>
</html>