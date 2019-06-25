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
     <td width="20%" style="border-right-style:hidden;"><a href="index.php"><img src="images/logo.png" width="89" height="60"></a></td>
      <td width="60%" align="center" style="font-size:32px;"><a href="index.php">KRISHI VIGYAN KENDRA PHEK</a></td>
      <td width="20%" align="right" style="border-left-style:hidden;"><a href="index.php">Logo</a></td>
      </tr>
      </table>
    </div>
  </header>
</div>
<?php

include("index_menu.php");

include("connect.php");

?>
<div class="wrapper row3">
  <div id="container" style="min-height:600px;">
<table width="100%">
<tr bgcolor="#59004a">
<td style="color:white; font-size:18px;" align="center"><strong>Pictures</strong></td>
</tr>
</table>
<?php
date_default_timezone_set("Asia/Kolkata");
$syear=date("Y");
$query007="Select * from eventphotos where date Like '$syear%' group by event_code asc order by event_name asc";
$result007=mysql_query($query007);
$count007=mysql_num_rows($result007);
?>
<table width="100%" border="0" style="border-style:hidden;">
<?php
		$c=0;
		$cols=4;
	do
	{
		?>
        <tr>
        <?php
		for($i=0;$i<=$cols;$i++)
	  {	
	$rows007=mysql_fetch_array($result007);
	$c++;
	if($rows007)
	{
	$ename=$rows007['event_name'];
	$ecode=$rows007['event_code'];
	$photo=$rows007['event_photos'];

	?>
    <td align="center" style="border-style:hidden;">
    <table style="border-style:hidden;" align="left">
    <tr>
    <td height="28">
     <a href="picturesopen.php?carrylink=<?php echo $ecode; ?>"><img src="eventphoto/<?php echo $photo; ?>" style="width:15vw; height:11vw;" class="hover-shadow" onmouseover="bigImg(this)" onmouseout="normalImg(this)" /></a>
</td></tr>
						<tr><td><a href="picturesopen.php?carrylink=<?php echo $ecode; ?>"><?php echo $ename; ?></a>
				</td></tr>
     
    </table>
</td>
    <?php
	}
	  }
	  ?>
      </tr>
      <?php
	} while($rows007);
	?>
</table>
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
function showdetails()
 {
	 	 var year=document.getElementById('year').value;
		//alert(year);
		 var httpx;
        
                       
                      if(window.XMLHttpRequest){
                      httpx=new XMLHttpRequest();
            
                         }
                        else{
                       httpx=new ActiveXObject("Microsoft.XMLHTTP");
            
                        }
                           httpx.open("GET","achievements_ajax.php?year="+year,true);
                          httpx.onreadystatechange=function(){
                          if(httpx.readyState==4 && httpx.status==200)
                           {
              
                               document.getElementById("viewdetails").innerHTML=httpx.responseText;
                            }
                        }	
      
                          httpx.send(null);
	}
     
</script>
</body>
</html>