<script>
function FileDetails() {

        var fi = document.getElementById('photo');

        if (fi.files.length > 0) {

            document.getElementById('fp').innerHTML =
                'Total Files: <b>' + fi.files.length + '</b></br >';

            for (var i = 0; i <= fi.files.length - 1; i++) {

                var fname = fi.files.item(i).name;      // THE NAME OF THE FILE.
                var fsize = fi.files.item(i).size;      // THE SIZE OF THE FILE.
			}
					if(fsize>2097152)
 { 
 alert('File Size Cannot Be More Than 2MB');
 document.getElementById('photo').focus();
 return false;
}

return true;
        }
    }
</script>
<br />
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4><i class="fa fa-image fa-fw"></i>Roll Over for Home Page</h4>
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
        <?php
				if (isset($_SESSION['ROLLHOMEDElSUC'])) {
                 //echo "<span class='alert alert-success'>".$success."</span>";
                echo '<div class = "alert alert-danger alert-dismissable">
                    <button type = "button" class = "close" data-dismiss = "alert" aria-hidden = "true">
                    &times;
                    </button>'.$_SESSION['ROLLHOMEDElSUC'].'
                    </div>';
                unset($_SESSION['ROLLHOMEDElSUC']);
                }
				
				if (isset($_SESSION['ROLLHOMESUC'])) {
                 //echo "<span class='alert alert-success'>".$success."</span>";
                echo '<div class = "alert alert-success alert-dismissable">
                    <button type = "button" class = "close" data-dismiss = "alert" aria-hidden = "true">
                    &times;
                    </button>'.$_SESSION['ROLLHOMESUC'].'
                    </div>';
                unset($_SESSION['ROLLHOMESUC']);
                }
				$login=$_SESSION['LOGIN'];
            ?>
          <form name="a" method="post" action="master/rolloverhomepage_action.php" enctype="multipart/form-data" 
onsubmit="return FileDetails();">
<input type="hidden" name="user" id="user" value="<?php echo $login; ?>" />
            <table border="0" align="center">
             <tr>
             <td width="263" height="60"><span style="font-size:1.4vw;"><em>Upload Photos:</em></span></td>
             <td width="459"><input type="file" name="photo[]" id="photo" multiple="multiple" required="required" accept="image/*" />
             <!--<input type="hidden" name="fileno" id="fp" />-->
<!--<span style="color:red; font-size:11px;">File Size Cannot be More Than 2MB</span>-->
             </td>
             </tr>
              <tr>
                <td width="263" height="63">&nbsp;</td>
                <td width="459">
                <input type="submit" class="btn btn-success"> 
              <input type="reset" class="btn btn-danger">
              <!--<div class="form-group form-inline">
<span style="color:red; font-size:11px;">You Can Add Upto 30 Images For An Event.</span>
</div>-->
                </td>
              </tr>
            </table>
          </form>
            
        </div>
        <!-- .panel-body -->
    </div>
    <!-- /.panel -->
</div>

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
function checkall()
{
var select_all = document.getElementById("select_all"); //select all checkbox
var checkboxes = document.getElementsByClassName("checkbox"); //checkbox items

//select all checkboxes
select_all.addEventListener("change", function(e){
    for (i = 0; i < checkboxes.length; i++) { 
        checkboxes[i].checked = select_all.checked;
    }
});


for (var i = 0; i < checkboxes.length; i++) {
    checkboxes[i].addEventListener('change', function(e){ //".checkbox" change 
        //uncheck "select all", if one of the listed checkbox item is unchecked
        if(this.checked == false){
            select_all.checked = false;
        }
        //check "select all" if all checkbox items are checked
        if(document.querySelectorAll('.checkbox:checked').length == checkboxes.length){
            select_all.checked = true;
        }
    });
}
}

function checkValid(that){
		var lnth=$('.checkstd:checked:not(:disabled)');
		console.log(lnth.length);
		if(lnth.length>40){
			alert('You have exceed the maximum limit of 40 entry. Please Submit the Checked Data ')
			$(that).prop('checked',false);
			return false;
		}
		if($(that).is(":checked")){
			//console.log('checked');
			$(that).parents('td').find('input').not(that).prop('disabled',false);
		}else{
			$(that).parents('td').find('input').not(that).prop('disabled',true);
		}
	}
	
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

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
</header>
<br>
<?php
$query007="Select * from rolloverhome";
$result007=mysql_query($query007);
$count007=mysql_num_rows($result007);
if($count007>0)
{
?>
<div class="col-lg-12">
<div class="panel panel-default">
        <div class="panel-heading">
            <h4><i class="fa fa-image fa-fw"></i>View Photos</h4>
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">	
    
	<?php
include('connect.php');
?>
<form name="a" method="post" action="master/rolloverhomepage_delete_action.php" enctype="multipart/form-data">
<?php
function valid($x,$y){
	$flag=0;
	$qry="SELECT * from rolloverhome where id='$x' AND photos='$y'";
	$rsl=mysql_query($qry) ;
	$nf=mysql_num_rows($rsl);
	return $nf;
}
?>

<table width="98%" align="center">
<tr>
<td>&nbsp;</td>
<td width="11%" colspan="2" align="right"><!--<input type="checkbox" onClick="toggle(this)" /><span style="color:red; font-size:16px;">Select All--><input type="checkbox" id="select_all" onClick="checkall();"/><span style="color:red; font-size:16px;">Select All</span></td>
</tr> 
</table>
<br>
    <table align="center" style="width:auto;">
    
        <?php
		$c=0;
		$cols=5;
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
	$photo1=$rows007['photos'];
	$id=$rows007['id'];
	?>
    <td>&emsp;</td>
    <td align="center">
    <table>
    <tr>
    <td height="28"><div class="panel panel-primary">
     <div class="panel-body"><?php echo "<img src='rollover/$photo1' style='width:12vw; height:9vw;' onclick='openModal();currentSlide($c)' class='hover-shadow' onmouseover='bigImg(this)' onmouseout='normalImg(this)' />";?></div></div>
<center><input type="checkbox" name="checkbox[]" class="checkbox" id=<?php echo $c; ?> <?php $nf=valid($id,$photo1);?> onClick="checkValid(this)" value="<?php echo $id; ?>" /></center>
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
    <center><input type="submit" name="delete" id="button2" value="Delete" class="btn btn-danger"></center>
    </form>
	</div>
<div id="myModal" class="modal gallery"> <span class="close cursor" onClick="closeModal()">&times;</span>
  <div class="modal-content gallery">
    
  <?php
  $qry007="Select * from rolloverhome";
$rsl007=mysql_query($qry007);
$cnt007=mysql_num_rows($rsl007);
$p=0;
$cl=0;
while($rw007=mysql_fetch_array($rsl007))
{
	$photosl=$rw007['photos'];
	$p++;
	$cl++;
  ?>
  <div class="mySlides">
      <div class="numbertext"><?php echo $p.'/'.$cnt007; ?></div>
      <center><img src="rollover/<?php echo $photosl; ?>"  height="500" style="width:auto;"/></center></div>
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
 </div></div></div>
 <?php
}
 ?>
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
