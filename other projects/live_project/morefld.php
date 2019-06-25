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
<td style="color:white; font-size:18px;" align="center"><strong>Agronomy</strong></td>
</tr>
</table>
<table width="100%" border="0" style="border-style:dashed;">
<tr>
<td style="border-bottom-style:ridge;"><b><span style="color:#8c0075; font-size:16px;">FLD</span></b></td>
</tr>
<?php
include('connect.php');
$link=$_GET['link'];
$fldq="Select * from fldactivities where discipline='$link'";
$fldr=mysql_query($fldq);
while($fldrow=mysql_fetch_array($fldr))
{
	$flddisci=$fldrow['discipline'];
	$fld=$fldrow['fld'];
	$fldfile=$fldrow['doc_file'];
?>
<tr>
<td><li><?php if($fldfile!='') { ?>
  <a href="upload_docs/<?php echo $fldfile; ?>" target="_blank" style="color:inherit;"><?php echo $fld; ?></a> <?php } else { echo $fld; } ?></li></td>
</tr>
<?php
}
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