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
      </div>
      <!-- ################################################################################################ -->
      <div class="contact_staff">
        <article class="push20">
        <h2 style="font-family:'Comic Sans MS', cursive; font-size:24px;">Contact Us</h2>
        <table width="100%" border="0" style="border:hidden;">
        <tr>
        <td width="57%" style="border-right-style:hidden;">
        <form name="a" action="contactaction.php" method="post">
          <table width="100%" style="border-color:#036; border-radius:6px; font-size:16px;" border="0">
          <tr bgcolor="#e0e0e0">
          <td width="32%" height="38" style="border-right-style:hidden;"><strong>Name of Staff:</strong></td>
          <td width="68%">
          <select name="staffname" id="staffname" style="height:30px; font-size:16px;" onChange="showstaff();">
          <option value="">--Select--</option>
          <?php
		  include("connect.php");
        $query007="Select * from login where role='1' and status='0'";
		$result007=mysql_query($query007);
		while($row007=mysql_fetch_array($result007))
		{
			$staffname=$row007['name'];
			$email=$row007['loginid'];
		?>
        <option value="<?php echo $email; ?>"><?php echo $staffname; ?></option>
        <?php
		}
		?>
          </select>
          </td>
          </tr>
           <tr bgcolor="#FFFFFF">
          <td height="38" style="border-right-style:hidden;"><strong>Query:</strong></td>
          <td><textarea name="queries" id="queries" cols="4" rows="4" required></textarea></td>
          </tr>
		  <tr bgcolor="#e0e0e0">
          <td height="38" style="border-right-style:hidden;"><strong>Name:</strong></td>
          <td><input type="text" name="sendername" id="sendername" required size="22" style="height:26px; width:300px; font-size:16px;"></td>
          </tr>
          <tr bgcolor="#FFFFFF">
          <td height="38" style="border-right-style:hidden;"><strong>Phone:</strong></td>
          <td><input type="text" name="phone" id="phone" size="22" style="height:26px; width:300px; font-size:16px;"></td>
          </tr>
          <tr bgcolor="#e0e0e0">
          <td height="38" style="border-right-style:hidden;"><strong>Email:</strong></td>
          <td><input type="text" name="email" id="email" size="22" required style="height:26px; width:300px; font-size:16px;"></td>
          </tr>
          <tr bgcolor="#FFFFFF">
          <td style="border-right-style:hidden;">&nbsp;</td>
          <td>
          <input type="submit" value="Submit" class="button small green">
          &nbsp;
          <input type="reset" value="Reset" class="button small red">
          </td>
          </tr>
          </table>
          </form>
          </td>
          <td width="43%">
          <div id="viewdetails"></div>
          </td>
          </tr>
          </table>
        </article>
        
      </div>
      
      <!-- ################################################################################################ -->
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
<script type="text/javascript">
function showstaff()
 {
	 	 var smail=document.getElementById('staffname').value;
		//alert(year);
		 var httpx;
        
                       
                      if(window.XMLHttpRequest){
                      httpx=new XMLHttpRequest();
            
                         }
                        else{
                       httpx=new ActiveXObject("Microsoft.XMLHTTP");
            
                        }
                           httpx.open("GET","contactstaff_ajax.php?smail="+smail,true);
                          httpx.onreadystatechange=function(){
                          if(httpx.readyState==4 && httpx.status==200)
                           {
              
                               document.getElementById("viewdetails").innerHTML=httpx.responseText;
                            }
                        }	
      
                          httpx.send(null);
	}
     
</script>
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