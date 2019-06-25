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
<style type="text/css">
.row > .column {
     padding: 0 8px;
   }
   .row:after {
     content: "";
     display: table;
     clear: both;
   }
   .column {
     float: left;
     width: 25%;
   }
   /* The Modal (background)*/ 
   .modal.gallery {
     display: none;
     position: fixed;
     z-index: 1000;
     padding-top: 100px;
     left: 0;
     top: 0;
     width: 100%;
     height: 100%;
     overflow: auto;
     background-color:rgba(0,0,0,0.9);
   }
   /* Modal Content */
   .modal-content.gallery {
     position: relative;
     background-color: #fefefe;
     margin: auto;
     padding: 0;
     width: 90%;
     max-width: 1200px;
   }
   /* The Close Button */
   .close {
     color: white;
     position: absolute;
     top: 10px;
     right: 25px;
     font-size: 35px;
     font-weight: bold;
   }
   .close:hover, .close:focus {
     color: #999;
     text-decoration: none;
     cursor: pointer;
   }
   .mySlides {
	 background-color:#000;
     display: none;
   }
   /* Next & previous buttons */
   .prevl, .nextl {
     cursor: pointer;
     position: absolute;
     top: 50%;
     width: auto;
     padding: 16px;
     margin-top: -50px;
     color: white;
     font-weight: bold;
     font-size: 20px;
     transition: 0.6s ease;
     border-radius: 0 3px 3px 0;
     user-select: none;
     -webkit-user-select: none;
   }
   /* Position the "next button" to the right */
   .nextl {
     right: 0;
     border-radius: 3px 0 0 3px;
   }
   /* On hover, add a black background color with a little bit see-through*/
   .prevl:hover, .nextl:hover {
     background-color: rgba(0, 0, 0, 0.8);
   }
   /* Number text (1/3 etc) */
   .numbertext {
     color: #f2f2f2;
     font-size: 12px;
     padding: 8px 12px;
     position: absolute;
     top: 0;
   }
   .caption-container {
     text-align: center;
     background-color: black;
     padding: 2px 16px;
     color: white;
   }
   img.demo {
     opacity: 0.6;
   }
   .active, .demo:hover {
     opacity: 1;
   }
   img.hover-shadow {
     transition: 0.3s
   }
   .hover-shadow:hover {
     box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
   }
   .glyphicon {
	margin-right: 4px !important; /*override
}
.pagination .glyphicon {
	margin-right: 0px !important; /*override*/
}
/*//////////////*/
</style>
<style type="text/css">
  #caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
  }
  .modal-content-img, #caption { 
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
  }
  .close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
  }

  .close:hover,
  .close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
  }
  @media only screen and (max-width: 700px){
    .modal-content-img {
      width: 100%;
    }
  }
</style>

<body>
<script>
function bigImg(x) {
    x.style.height = "10vw";
    x.style.width = "13vw";
}

function normalImg(x) {
    x.style.height = "9vw";
    x.style.width = "12vw";
}

$(document).keydown(function(event) { 
  					if (event.keyCode == 27 || event.keyCode == 32 ) { 
   					 $('#myModal').hide();
 					 }
					});
</script>
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
<?php
include('connect.php');
$ecode=$_GET['carrylink'];

$query007="Select * from eventphotos where event_code='$ecode'";
$result007=mysql_query($query007);
$count=mysql_num_rows($result007);

$query="Select * from eventphotos where event_code='$ecode'";
$result=mysql_query($query);
while($row=mysql_fetch_array($result))
{
	$ename=$row['event_name'];
}
?>
<table width="100%">
<tr bgcolor="#59004a">
<td style="color:white; font-size:18px;" align="center"><strong><?php echo $ename; ?></strong></td>
</tr>
</table>
<br>
    <table align="center" style="width:auto;">
    
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
	$photo1=$rows007['event_photos'];
	$id=$rows007['id'];
	?>
    <td align="center" style="border-style:hidden;">
    <table style="border-style:hidden;" align="left">
    <tr>
    <td height="28">
     <?php echo "<img src='eventphoto/$photo1' style='width:12vw; height:9vw;' onclick='openModal();currentSlide($c)' class='hover-shadow' onmouseover='bigImg(this)' onmouseout='normalImg(this)' />";?>
    </td>
    </tr>
    </table><br /><br />
    
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
<div id="myModal" class="modal gallery"> <span class="close cursor" onClick="closeModal()">&times;</span>
  <div class="modal-content gallery">
    
  <?php
  $qry007="Select * from eventphotos where event_code='$ecode'";
$rsl007=mysql_query($qry007);
$cnt007=mysql_num_rows($rsl007);
$p=0;
$cl=0;
while($rw007=mysql_fetch_array($rsl007))
{
	$photosl=$rw007['event_photos'];
	$p++;
	$cl++;
  ?>
  <div class="mySlides">
      <div class="numbertext"><?php echo $p.'/'.$cnt007; ?></div>
      <center><img src="eventphoto/<?php echo $photosl; ?>"  height="500" style="width:auto;"/></center></div>
      <?php
}
?>

                    <a class="prevl" onClick="plusSlides(-1)">&#10094;</a> <a class="nextl" onClick="plusSlides(1)">&#10095;</a>
                   <!-- <div class="caption-container">
                      <p id="caption"></p>
                    </div>
                    <div class="column"> <img class="demo cursor" src="eventphoto/<?php echo $photosl; ?>"  width="240" height="130" style="width:100%" onclick="currentSlide(<?php echo $cl; ?>)" alt="">                   
</div>-->
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
<script>
                  function openModal() {
                    document.getElementById('myModal').style.display = "block";
                  }

                  function closeModal() {
                    document.getElementById('myModal').style.display = "none";
                  }

                  var slideIndex = 1;
                  showSlides(slideIndex);

                  function plusSlides(n) {
                    showSlides(slideIndex += n);
                  }

                  function currentSlide(n) {
                    showSlides(slideIndex = n);
                  }

                  function showSlides(n) {
                    var i;
                    var slides = document.getElementsByClassName("mySlides");
                    var dots = document.getElementsByClassName("demo");
                    var captionText = document.getElementById("caption");
                    if (n > slides.length) {slideIndex = 1}
                      if (n < 1) {slideIndex = slides.length}
                        for (i = 0; i < slides.length; i++) {
                          slides[i].style.display = "none";
                        }
                        for (i = 0; i < dots.length; i++) {
                          dots[i].className = dots[i].className.replace(" active", "");
                        }
                        slides[slideIndex-1].style.display = "block";
                        dots[slideIndex-1].className += " active";
                        captionText.innerHTML = dots[slideIndex-1].alt;
                      }
                      $(function () {
                        $(".demo1").bootstrapNews({
                          newsPerPage: 3,
                          autoplay: true,
                          pauseOnHover:true,
			 //pauseOnPagerHover: 0
       direction: 'up',
       newsTickerInterval: 4000,
       onToDo: function () {
        console.log(this);
      }
    });
                      });

                      $('ul.nav li.dropdown').hover(function() {
                        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
                      }, function() {
                        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
                      });
// Get the modal


// Get the image and insert it inside the modal - use its "alt" text as a caption
function mdDisplay(that){
  var modal = document.getElementById('myModal_no');
  var img = that;
  var modalImg = document.getElementById("img01");
  var captionText = document.getElementById("caption");
  // img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = that.src;
    captionText.innerHTML = that.alt;
  // }

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() { 
    modal.style.display = "none";
  }
}
$(document).ready(function(){
  $('#myModal_no').click(function(){
    $(this).css('display','none');
  });
});
</script>
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