<!DOCTYPE html>
<html>
<head>
<title>KVK Phek</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="layout/styles/main.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/mediaqueries.css" rel="stylesheet" type="text/css" media="all">


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
    <div style="display:block; width:auto; clear:right;">
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
    </div>
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
          <h2 class="nospace font-large">About KVK Phek</h2>
          <ul class="list decimal">
            <li><a href="districtprofile.php">District Profile</a></li>
            <li><a href="vision.php">Vision</a></li>
            <li><a href="staffdetails.php">Staff</a></li>
            <li><a href="activities.php">Activities</a></li>
            <li><a href="publications.php">Publications</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="achievements.php">Achievement</a></li>
            <li><a href="downloads.php">Download</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
            <li><a href="rti.php">RTI</a></li>
            <li><a href="weblinks.php">Weblinks</a></li>
          </ul>
        </div>
        <div class="push20">
      <br><br><h2 class="footer_title">Upcoming Activities</h2>
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
	if($file!='')
	{  
  echo "&nbsp;&nbsp;<b>*</b><a href='upload_docs/$file' target='_blank' style='text-decoration:none; font-weight:bold; font-size:13px; text-transform:capitalize;'>$new &nbsp;$note</a>";
	}
	else
	{
	echo "&nbsp;&nbsp;<b>*</b><span style='color:blue; font-weight:bold; font-size:13px;'>$new &nbsp;$note</span>";	
	}
  echo "<br/><br/>";
  
  }
  }
  ?>
          </marquee>
          
          </td></tr></table>
      </div>
      </div>
      <!-- ################################################################################################ -->
      <div class="one_half">
        <article class="push20">
        <?php
		extract($_GET);
		$query007="Select * from downloads where details LIKE '%$srch%'";
		$result007=mysql_query($query007);
		$count007=mysql_num_rows($result007);
		if($count007>0)
		{
		?>
          <table width="90%" style="border:hidden;" border="0">
          <tr style="background-color:#1b4f1f; color:white;">
          <td width="55%" style="border-right-style:hidden;">Details</td>
          <td width="45%">File</td>
          </tr>
<?php
$slno=0;
$c2='#c3f4c8';
$c1='#FFFFFF';
$c=$c1;
while($row007=mysql_fetch_array($result007))
{
	$details=$row007['details'];
	$doc_file=$row007['doc_file'];
?>
<tr style="font-size:12px;" bgcolor="<?php echo $c; ?>">
<td style="text-transform:uppercase; border-right-style:hidden;"><?php echo $details; ?></td>
<td><a href="upload_docs/<?php echo $doc_file; ?>" target="_blank"><img src="images/pdf.gif" width="20" height="21"></a></td>
</tr>
<?php
if($c==$c1)
	$c=$c2;
	else
	$c=$c1;
}
?>
          </table>
          <?php
		}
		else
		{
			echo "<center><span style='color:#1b4f1f; font-size:16px;'>No Records Found...</span></center>";
		}
		  ?>
        </article>
        
      </div>
      
      <!-- ################################################################################################ -->
      <div class="one_quarter">
      <div class="push20">
      <h2 class="footer_title">Staff Login</h2>
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
      <br><br><h2 class="footer_title">News & Events</h2>
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
	if($file!='')
	{  
  echo "&nbsp;&nbsp;<b>*</b><a href='upload_docs/$file' target='_blank' style='text-decoration:none; font-weight:bold; font-size:13px; text-transform:capitalize;'>$new &nbsp;$note</a>";
	}
	else
	{
	echo "&nbsp;&nbsp;<b>*</b><span style='color:blue; font-weight:bold; font-size:13px;'>$new &nbsp;$note</span>";	
	}
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
      <h2 class="footer_title">Success Stories</h2>
      <table align="center" width="70%" border="5" height="300" style="border-color:#036; border-radius:6px;">
      <tr><td><img src="images/rollover3.jpg"></td></tr>
      </table>
      </td>
      
      <td width="34%" style="border:hidden;">
      <h2 class="footer_title">Farmers Innovations</h2>
      <table align="center" width="70%" border="5" height="300" style="border-color:#036; border-radius:6px;">
      <tr><td><img src="images/rollover2.png"></td></tr>
      </table>
      </td>
      
      <td width="33%" style="border:hidden;">
      <h2 class="footer_title">Advisories</h2>
      <table align="center" width="70%" border="5" height="300" style="border-color:#036; border-radius:6px;">
      <tr><td><img src="images/rollover1.jpg"></td></tr>
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
</body>
</html>