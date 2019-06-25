<!DOCTYPE html>

<html>



<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

.menubar {

overflow: hidden;

background-color: #1b4f1f;

font-family: Arial, Helvetica, sans-serif;

}

.menubar a {

float: left;

font-size: 16px;

color: white;

text-align: center;

padding: 14px 16px;

text-decoration: none;

}



.menubar a:hover, .dropdown1:hover .dropbtn1 {

background-color: #161402;

}

.alert:hover
{
}
</style>


<div class="menubar">

<a href="index.php">Home</a>

<a href="agronomy.php">Agronomy</a>

<a href="animalscience.php">Animal Science</a>

<a href="horticulture.php">Horticulture</a>

<a href="plantprotection.php">Plant Protection</a>

<a href="homescience.php">Home Science</a>

<a href="soilscience.php">Soil Science</a>

<a href="farm.php">Farm</a>

<a href="ict.php">ICT</a>
<div style="text-align:right; float:right; vertical-align:top; font-size: 16px; color: white; padding: 6px 10px; text-decoration: none;" class="col-sm-2">
<input type="search" placeholder="Search" onfocus="this.placeholder = '';" onblur="if (this.placeholder == '') {this.placeholder = 'Search';}" id="search" size="16" style="width:80%;height:34px;padding:6px 12px;font-size:14px;line-height:1.42857143;color:#555;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075);-webkit-transition:border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;-o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s">&nbsp;<i class="fa fa-search" onClick="searchdownload();"></i>
</div>
</div>
<script type="text/javascript">
function searchdownload()
 {
	 	 var srch=document.getElementById('search').value;
         window.open("searchdownloads.php?srch="+srch,"_self");
		 
	}
     
</script>

