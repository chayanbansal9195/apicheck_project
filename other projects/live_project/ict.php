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
<td style="color:white; font-size:18px;" align="center"><strong>ICT</strong></td>
</tr>
</table>
<table width="100%" border="0" style="border-style:hidden;">
<tr>
<td width="50%" align="left" style="border-right-style:hidden;">
<table width="100%" border="0" style="border-style:dashed;">
<tr>
<td style="border-bottom-style:ridge;"><b><span style="color:#8c0075; font-size:16px;">Planned Activities</span></b></td>
</tr>
<?php
$trainq="Select * from trainingactivities where discipline='ICT' limit 3";
$trainr=mysql_query($trainq);
$trainc=mysql_num_rows($trainr);
if($trainc>0)
{
?>
<tr>
<td><b><span style="color:#102009;">Training</span></b></td>
</tr>
<?php
while($trainrow=mysql_fetch_array($trainr))
{
	$traindisci=$trainrow['discipline'];
	$training=$trainrow['training'];
	$trainfile=$trainrow['doc_file'];
?>
<tr>
<td><li><?php if($trainfile!='') { ?>
  <a href="upload_docs/<?php echo $trainfile; ?>" target="_blank" style="color:inherit;"><?php echo $training; ?></a> <?php } else { echo $training; } ?></li></td>
</tr>
<?php
}
?>
<tr>
<td align="right"><a href="moretraining.php?link=<?php echo $traindisci; ?>" style="color:#8c0075;">Read More...</a></td>
</tr>
<?php
}
$oftq="Select * from oftactivities where discipline='ICT' limit 3";
$oftr=mysql_query($oftq);
$oftc=mysql_num_rows($oftr);
if($oftc>0)
{
?>
<tr>
<td><b><span style="color:#102009;">OFT</span></b></td>
</tr>
<?php
while($oftrow=mysql_fetch_array($oftr))
{
	$oftdisci=$oftrow['discipline'];
	$oft=$oftrow['oft'];
	$oftfile=$oftrow['doc_file'];
?>
<tr>
<td><li><?php if($oftfile!='') { ?>
  <a href="upload_docs/<?php echo $oftfile; ?>" target="_blank" style="color:inherit;"><?php echo $oft; ?></a> <?php } else { echo $oft; } ?></li></td>
</tr>
<?php
}
?>
<tr>
<td align="right"><a href="moreoft.php?link=<?php echo $oftdisci; ?>" style="color:#8c0075;">Read More...</a></td>
</tr>
<?php
}
$fldq="Select * from fldactivities where discipline='ICT' limit 3";
$fldr=mysql_query($fldq);
$fldc=mysql_num_rows($fldr);
if($fldc>0)
{
?>
<tr>
<td><b><span style="color:#102009;">FLD</span></b></td>
</tr>
<?php
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
<tr>
<td align="right"><a href="morefld.php?link=<?php echo $flddisci; ?>" style="color:#8c0075;">Read More...</a></td>
</tr>
<?php
}
$extraq="Select * from extratraining where discipline='ICT' limit 3";
$extrar=mysql_query($extraq);
$extrac=mysql_num_rows($extrar);
if($extrac>0)
{
?>
<tr>
<td><b><span style="color:#102009;">Training to Extra Functionaries</span></b></td>
</tr>
<?php
while($extrarow=mysql_fetch_array($extrar))
{
	$extradisci=$extrarow['discipline'];
	$extraining=$extrarow['training'];
	$extrafile=$extrarow['doc_file'];
?>
<tr>
<td><li><?php if($extrafile!='') { ?>
  <a href="upload_docs/<?php echo $extrafile; ?>" target="_blank" style="color:inherit;"><?php echo $extraining; ?></a> <?php } else { echo $extraining; } ?></li></td>
</tr>
<?php
}
?>
<tr>
<td align="right"><a href="moreextraactivities.php?link=<?php echo $extradisci; ?>" style="color:#8c0075;">Read More...</a></td>
</tr>
<?php
}
$exemq="Select * from exempfarmers where discipline='ICT' limit 3";
$exemr=mysql_query($exemq);
$exemc=mysql_num_rows($exemr);
if($exemc>0)
{
?>
<tr>
<td><b><span style="color:#102009;">Exemplenary Farmers</span></b></td>
</tr>
<?php
while($exemrow=mysql_fetch_array($exemr))
{
	$exemdisci=$exemrow['discipline'];
	$exemactivity=$exemrow['activity'];
	$exemfile=$exemrow['doc_file'];
?>
<tr>
<td><li><?php if($exemfile!='') { ?>
  <a href="upload_docs/<?php echo $exemfile; ?>" target="_blank" style="color:inherit;"><?php echo $exemactivity; ?></a> <?php } else { echo $exemactivity; } ?></li></td>
</tr>
<?php
}
?>
<tr>
<td align="right"><a href="moreexemplenaryfarmers.php?link=<?php echo $exemdisci; ?>" style="color:#8c0075;">Read More...</a></td>
</tr>
<?php
}
?>
</table>
</td>
<td width="50%">
<table width="100%" border="0" style="border-style:dashed;">
<tr>
<td style="border-bottom-style:ridge;"><b><span style="color:#8c0075; font-size:16px;">Publications</span></b></td>
</tr>
<?php
$apq="Select * from actionplan limit 3";
$apr=mysql_query($apq);
$apc=mysql_num_rows($apr);
if($apc>0)
{
?>
<tr>
<td><b><span style="color:#102009;">Action Plan</span></b></td>
</tr>
<?php
while($aprow=mysql_fetch_array($apr))
{
	$apaction=$aprow['action'];
	$apfile=$aprow['doc_file'];
?>
<tr>
<td><li><?php if($apfile!='') { ?>
  <a href="upload_docs/<?php echo $apfile; ?>" target="_blank" style="color:inherit;"><?php echo $apaction; ?></a> <?php } else { echo $apaction; } ?></li></td>
</tr>
<?php
}
?>
<tr>
<td align="right"><a href="moreactionplan.php" style="color:#8c0075;">Read More...</a></td>
</tr>
<?php
}
$arq="Select * from annualreport limit 3";
$arr=mysql_query($arq);
$arc=mysql_num_rows($arr);
if($arc>0)
{
?>
<tr>
<td><b><span style="color:#102009;">Annual Reports</span></b></td>
</tr>
<?php
while($arrow=mysql_fetch_array($arr))
{
	$arreport=$arrow['remarks'];
	$arfile=$arrow['doc_file'];
?>
<tr>
<td><li><?php if($arfile!='') { ?>
<a href="upload_docs/<?php echo $arfile; ?>" target="_blank" style="color:inherit;"><?php echo $arreport; ?></a> <?php } else { echo $arreport; } ?></li></td>
</tr>
<?php
}
?>
<tr>
<td align="right"><a href="moreannualreport.php" style="color:#8c0075;">Read More...</a></td>
</tr>
<?php
}
$arzq="Select * from zoneannualreport limit 3";
$arzr=mysql_query($arzq);
$arzc=mysql_num_rows($arzr);
if($arzc>0)
{
?>
<tr>
<td><b><span style="color:#102009;">Annual Reports of Zone</span></b></td>
</tr>
<?php
while($arzrow=mysql_fetch_array($arzr))
{
	$arzreport=$arzrow['remarks'];
	$arzfile=$arzrow['doc_file'];
?>
<tr>
<td><li><?php if($arzfile!='') { ?>
  <a href="upload_docs/<?php echo $arzfile; ?>" target="_blank" style="color:inherit;"><?php echo $arzreport; ?></a> <?php } else { echo $arzreport; } ?></li></td>
</tr>
<?php
}
?>
<tr>
<td align="right"><a href="morezoneannualreport.php" style="color:#8c0075;">Read More...</a></td>
</tr>
<?php
}
$orq="Select * from otherreport limit 3";
$orr=mysql_query($orq);
$orc=mysql_num_rows($orr);
if($orc>0)
{
?>
<tr>
<td><b><span style="color:#102009;">Other Reports</span></b></td>
</tr>
<?php
while($orrow=mysql_fetch_array($orr))
{
	$orheading=$orrow['heading'];
	$orfile=$orrow['doc_file'];
?>
<tr>
<td><li><?php if($orfile!='') { ?>
  <a href="upload_docs/<?php echo $orfile; ?>" target="_blank" style="color:inherit;"><?php echo $orheading; ?></a> <?php } else { echo $orheading; } ?></li></td>
</tr>
<?php
}
?>
<tr>
<td align="right"><a href="moreotherreport.php" style="color:#8c0075;">Read More...</a></td>
</tr>
<?php
}
$techq="Select * from technicalbook limit 3";
$techr=mysql_query($techq);
$techc=mysql_num_rows($techr);
if($techc>0)
{
?>
<tr>
<td><b><span style="color:#102009;">Technical Books</span></b></td>
</tr>
<?php
while($techrow=mysql_fetch_array($techr))
{
	$techheading=$techrow['heading'];
	$techfile=$techrow['doc_file'];
?>
<tr>
<td><li><?php if($techfile!='') { ?>
  <a href="upload_docs/<?php echo $techfile; ?>" target="_blank" style="color:inherit;"><?php echo $techheading; ?></a> <?php } else { echo $techheading; } ?></li></td>
</tr>
<?php
}
?>
<tr>
<td align="right"><a href="moretechnicalbooks.php" style="color:#8c0075;">Read More...</a></td>
</tr>
<?php
}
$rsq="Select * from researchpaper limit 3";
$rsr=mysql_query($rsq);
$rsc=mysql_num_rows($rsr);
if($rsc>0)
{
?>
<tr>
<td><b><span style="color:#102009;">Research Papers</span></b></td>
</tr>
<?php
while($rsrow=mysql_fetch_array($rsr))
{
	$rsheading=$rsrow['heading'];
	$rsfile=$rsrow['doc_file'];
?>
<tr>
<td><li><?php if($rsfile!='') { ?>
  <a href="upload_docs/<?php echo $rsfile; ?>" target="_blank" style="color:inherit;"><?php echo $rsheading; ?></a> <?php } else { echo $rsheading; } ?></li></td>
</tr>
<?php
}
?>
<tr>
<td align="right"><a href="moreresearchpapers.php" style="color:#8c0075;">Read More...</a></td>
</tr>
<?php
}
$artclq="Select * from articlejournal limit 3";
$artclr=mysql_query($artclq);
$artclc=mysql_num_rows($artclr);
if($artclc>0)
{
?>
<tr>
<td><b><span style="color:#102009;">Articles in Popular Journals</span></b></td>
</tr>
<?php
while($artclrow=mysql_fetch_array($artclr))
{
	$artclheading=$artclrow['heading'];
	$artclfile=$artclrow['doc_file'];
?>
<tr>
<td><li><?php if($artclfile!='') { ?>
  <a href="upload_docs/<?php echo $artclfile; ?>" target="_blank" style="color:inherit;"><?php echo $artclheading; ?></a> <?php } else { echo $artclheading; } ?></li></td>
</tr>
<?php
}
?>
<tr>
<td align="right"><a href="morearticles.php" style="color:#8c0075;">Read More...</a></td>
</tr>
<?php
}
$newsq="Select * from newspaperpublication limit 3";
$newsr=mysql_query($newsq);
$newsc=mysql_num_rows($newsr);
if($newsc>0)
{
?>
<tr>
<td><b><span style="color:#102009;">Newspaper Publications</span></b></td>
</tr>
<?php
while($newsrow=mysql_fetch_array($newsr))
{
	$newsheading=$newsrow['heading'];
	$newsfile=$newsrow['doc_file'];
?>
<tr>
<td><li><?php if($newsfile!='') { ?>
  <a href="upload_docs/<?php echo $newsfile; ?>" target="_blank" style="color:inherit;"><?php echo $newsheading; ?></a> <?php } else { echo $newsheading; } ?></li></td>
</tr>
<?php
}
?>
<tr>
<td align="right"><a href="morenewspapers.php" style="color:#8c0075;">Read More...</a></td>
</tr>
<?php
}
$folderq="Select * from folder limit 3";
$folderr=mysql_query($folderq);
$folderc=mysql_num_rows($folderr);
if($folderc>0)
{
?>
<tr>
<td><b><span style="color:#102009;">Folders</span></b></td>
</tr>
<?php
while($folderrow=mysql_fetch_array($folderr))
{
	$folderheading=$folderrow['heading'];
	$folderfile=$folderrow['doc_file'];
?>
<tr>
<td><li><?php if($folderfile!='') { ?>
  <a href="upload_docs/<?php echo $folderfile; ?>" target="_blank" style="color:inherit;"><?php echo $folderheading; ?></a> <?php } else { echo $folderheading; } ?></li></td>
</tr>
<?php
}
?>
<tr>
<td align="right"><a href="morefolders.php" style="color:#8c0075;">Read More...</a></td>
</tr>
<?php
}
$ebookq="Select * from ebook limit 3";
$ebookr=mysql_query($ebookq);
$ebookc=mysql_num_rows($ebookr);
if($ebookc>0)
{
?>
<tr>
<td><b><span style="color:#102009;">E-books</span></b></td>
</tr>
<?php
while($ebookrow=mysql_fetch_array($ebookr))
{
	$ebookheading=$ebookrow['heading'];
	$ebookfile=$ebookrow['doc_file'];
?>
<tr>
<td><li><?php if($ebookfile!='') { ?>
  <a href="upload_docs/<?php echo $ebookfile; ?>" target="_blank" style="color:inherit;"><?php echo $ebookheading; ?></a> <?php } else { echo $ebookheading; } ?></li></td>
</tr>
<?php
}
?>
<tr>
<td align="right"><a href="moreebook.php" style="color:#8c0075;">Read More...</a></td>
</tr>
<?php
}
$dfq="Select * from documentaryfilm limit 3";
$dfr=mysql_query($dfq);
?>
<tr>
<td><b><span style="color:#102009;">Documentary Films</span></b></td>
</tr>
<?php
$dfq="Select * from documentaryfilm limit 3";
$dfr=mysql_query($dfq);
$dfc=mysql_num_rows($dfr);
if($dfc>0)
{
while($dfrow=mysql_fetch_array($dfr))
{
	$dfvideos=$dfrow['link'];
	$dfremarks=$dfrow['remarks'];
?>
<tr>
<td><li><a href="<?php echo $dfvideos; ?>" target="_blank" style="color:inherit;"><?php echo $dfremarks; ?></a></li></td>
</tr>
<?php
}
?>
<tr>
<td align="right"><a href="moredocfilms.php" style="color:#8c0075;">Read More...</a></td>
</tr>
<?php
}
?>
</table>
</td>
</tr>
<tr>
<td width="50%" align="left" style="border-right-style:hidden;">
<?php
$achieveq="Select * from achievements limit 3";
$achiever=mysql_query($achieveq);
$achievec=mysql_num_rows($achiever);
if($achievec>0)
{
?>
<table width="100%" border="0" style="border-style:dashed;">
<tr>
<td style="border-bottom-style:ridge;"><b><span style="color:#8c0075; font-size:16px;">Achievements</span></b></td>
</tr>
<?php
while($achieverow=mysql_fetch_array($achiever))
{
 	$achieveheading=$achieverow['heading'];
	$achievefile=$achieverow['doc_file'];
?>
<tr>
<td><li><?php if($achievefile!='') { ?>
  <a href="upload_docs/<?php echo $achievefile; ?>" target="_blank" style="color:inherit;"><?php echo $achieveheading; ?></a> <?php } else { echo $achieveheading; } ?></li></td>
</tr>
<?php
}
?>
<tr>
<td align="right"><a href="moreachievements.php" style="color:#8c0075;">Read More...</a></td>
</tr>
</table>
<?php
}
?>
</td>
<td width="50%" align="left" style="border-right-style:hidden;">
<?php
$upaq="Select * from upcomingactivities where discipline='ICT' limit 3";
$upar=mysql_query($upaq);
$upac=mysql_num_rows($upar);
if($upac>0)
{
?>
<table width="100%" border="0" style="border-style:dashed;">
<tr>
<td style="border-bottom-style:ridge;"><b><span style="color:#8c0075; font-size:16px;">Upcoming Activities</span></b></td>
</tr>
<?php
while($uparow=mysql_fetch_array($upar))
{
	$updisci=$uparow['discipline'];
 	$upactivity=$uparow['activity'];
	$upafile=$uparow['doc_file'];
?>
<tr>
<td><li><?php if($upafile!='') { ?>
  <a href="upload_docs/<?php echo $upafile; ?>" target="_blank" style="color:inherit;"><?php echo $upactivity; ?></a> <?php } else { echo $upactivity; } ?></li></td>
</tr>
<?php
}
?>
<tr>
<td align="right"><a href="moreupcomingactivities.php?link=<?php echo $updisci; ?>" style="color:#8c0075;">Read More...</a></td>
</tr>
</table>
<?php
}
?>
</td>
</tr>
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