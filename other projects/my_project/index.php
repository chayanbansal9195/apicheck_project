<!DOCTYPE html>
<html>

<head>
    <title>Image Check</title>
</head>

<body>
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
	 text-decoration:none;
   }
   /* Number text (1/3 etc) */
   .numbertext {
     color: #f2f2f2;
     font-size: 12px;
     padding: 8px 12px;
     position: absolute;
     top: 0;
   }
   .uploadby {
     color: #f2f2f2;
     font-size: 8px;
     padding: 30px 12px;
	 position: absolute;
	 text-transform:capitalize;
     top: 0;
   }
   .occasion {
     color: #f2f2f2;
     font-size: 8px;
     padding: 65px 12px;
	 position: absolute;
	 text-transform:capitalize;
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
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="album" placeholder="album name"><br><br>
        <input type="file" name="files[]" multiple><br><br>
        <input type="submit" name="submit" value="UPLOAD">
    </form>
    <?php
    include 'dbConfig.php';
    if(isset($_POST['submit'])){
        $filename = $_FILES['files']['name'];
        $countfiles = count($filename);
        $tmpname = $_FILES['files']['tmp_name'];
        $album = $_POST['album'];
        mysqli_query($con, "Insert into album_name(album)values('$album')");
        for ($i = 0; $i < $countfiles; $i++) {
            $name = $filename[$i];
            $tmp =   $tmpname[$i];
            echo $name;
            move_uploaded_file($tmp, "uploads/$name");
            mysqli_query($con, "Insert into images(file_name,album)values('$name','$album')");
        }
    }
    ?>
   
        <?php
        $sql = mysqli_query($con, "select * from album_name");
        
        ?>
        
        <form action="#" method="post">
        <select name="album_nm" id="">
         <?php while($data = mysqli_fetch_array($sql)){?>
             <option value="<?php echo $data[1]?>"><?php echo $data[1]?></option>
             <?php }?>
         </select>
         <input type="submit" name="submit_data" value="submit">
        </form>
        
        <?php
        if(isset($_POST['submit_data'])){
            include "dbConfig.php";
            $album_nm=$_POST['album_nm'];
            $sql1=mysqli_query($con,"select * from images where album='$album_nm'");
            
        
        
?>
 <?php 
 $n=0;
 while($data_img = mysqli_fetch_array($sql1))
 {
	$n++; 
	 ?>
 
<img src="uploads/<?php echo $data_img['file_name']?>" style="max-width:60px;" title="<?php echo $n; ?>"  onclick='openModal();currentSlide(<?php echo $n; ?>)'>
<?php }?>
        <?php }?>
        
        
<div id="myModal" class="modal gallery"> <span class="close cursor" onClick="closeModal()">&times;</span>
  <div class="modal-content gallery">
  
  <?php
  $sql2=mysqli_query($con,"select * from images where album='$album_nm'");
   while($data_img1 = mysqli_fetch_array($sql2))
   {
  ?>
  <div class="mySlides">
  <a class="prevl" onClick="plusSlides(-1)">&#10094;</a>
  <img src="uploads/<?php echo $data_img1['file_name']?>" style="width:auto" alt="" height="500">
   <a class="nextl" onClick="plusSlides(1)">&#10095;</a>
  </div>
  <?php
   }
  ?>
  
</div>
</div>
<script>

document.onkeydown = function(e) {
    switch (e.keyCode) {
        case 37:
            $('.prevl').trigger('click');
            break;
        case 39:
             $('.nextl').trigger('click');
            break;
    }
};
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

</body>

</html>