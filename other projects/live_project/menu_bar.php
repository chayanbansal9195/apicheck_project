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



.dropdown1 {

float: left;

overflow: hidden;

}



.dropdown1 .dropbtn1 {

font-size: 16px; 

border: none;

outline: none;

color: white;

padding: 14px 16px;

background-color: inherit;

font-family: inherit;

margin: 0;

}



.menubar a:hover, .dropdown1:hover .dropbtn1 {

background-color: red;

}



.dropdown-content1 {

display: none;

position: absolute;

background-color: #f9f9f9;

min-width: 160px;

box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);

z-index: 1;

}



.dropdown-content1 a {

float: none;

color: black;

padding: 12px 16px;

text-decoration: none;

display: block;

text-align: left;

}



.dropdown-content1 a:hover {

background-color: #ddd;

}



.dropdown1:hover .dropdown-content1 {

display: block;

}

.alert:hover
{
}
</style>

<?php

if ($_SESSION['ROLE']=='0') {

?>

<div class="menubar">

<a href="?link=home">Home</a>

<a href="?link=0STFETR">Staff</a>

<div class="dropdown1">

<button class="dropbtn1">Activities 

<i class="fa fa-caret-down"></i>

</button>

<div class="dropdown-content1">

<a href="?link=0OFTACTVTS">OFT</a>

<a href="?link=0FLDACTVTS">FLD</a>

<a href="?link=0TRNACTVTS">Training</a>

<a href="?link=0EXTRACTVTS">Training to Extra Functionaries</a>

<a href="?link=0EXPFRMRACTVTS">Exemplenary Farmers</a>

<a href="?link=0UPCACTVTS">Upcoming Activities</a>

</div>

</div>

<div class="dropdown1">

<button class="dropbtn1">Publications

<i class="fa fa-caret-down"></i>

</button>

<div class="dropdown-content1">

<a href="?link=0ACTNPLAN">Action Plan</a>

<a href="?link=0ANLRPRT">Annual Reports</a>

<a href="?link=0ZNANLRPRT">Annual Reports of Zone</a>

<a href="?link=0OTHRRPRT">Other Report</a>

<a href="?link=0TCHNCLBK">Technical Books</a>

<a href="?link=0RSRCHPPR">Research Papers</a>

<a href="?link=0ARTPJRNL">Articles in Popular Journals</a>

<a href="?link=0NWSPBLCTN">Newspaper Publications</a>

<a href="?link=0FLDRS">Folders</a>

<a href="?link=0EBOOK">E-books</a>

<a href="?link=0DCMNTRYFL">Documentary Films</a>
</div>

</div>

<div class="dropdown1">

<button class="dropbtn1">Gallery 

<i class="fa fa-caret-down"></i>

</button>

<div class="dropdown-content1">

<a href="?link=0PHUPLD">Upload Photo</a>

<a href="?link=0VWPHT">View Photo</a>

<a href="?link=0VDOSUP">Videos</a>

</div>



</div>

<a href="?link=0ACHVMNTETR">Achievement</a>

<a href="?link=0NWSVNT">News & Events</a>

<a href="?link=0DOWNLD">Download</a>

<div class="dropdown1">

<button class="dropbtn1">Roll Over 

<i class="fa fa-caret-down"></i>

</button>

<div class="dropdown-content1">

<a href="?link=0ROHOME">Home Page</a>

<a href="?link=0ROSUCS">Success Stories</a>

<a href="?link=0ROFRMI">Farmers Innovation</a>

<a href="?link=0ROADVSR">Advisories</a>

</div>



</div>

<div style="text-align:right; float:right;" class="col-sm-2">
<?php include('contact_alert.php'); ?>
</div>

</div>

<?php

}
if ($_SESSION['ROLE']=='1') {
?>
<div class="menubar">

<a href="?link=home">Home</a>

<div class="dropdown1">

<button class="dropbtn1">Activities 

<i class="fa fa-caret-down"></i>

</button>

<div class="dropdown-content1">

<a href="?link=0OFTACTVTS">OFT</a>

<a href="?link=0FLDACTVTS">FLD</a>

<a href="?link=0TRNACTVTS">Training</a>

<a href="?link=0EXTRACTVTS">Training to Extra Functionaries</a>

<a href="?link=0EXPFRMRACTVTS">Exemplenary Farmers</a>

<a href="?link=0UPCACTVTS">Upcoming Activities</a>

</div>

</div>

<div class="dropdown1">

<button class="dropbtn1">Publications

<i class="fa fa-caret-down"></i>

</button>

<div class="dropdown-content1">

<a href="?link=0ACTNPLAN">Action Plan</a>

<a href="?link=0ANLRPRT">Annual Reports</a>

<a href="?link=0ZNANLRPRT">Annual Reports of Zone</a>

<a href="?link=0OTHRRPRT">Other Report</a>

<a href="?link=0TCHNCLBK">Technical Books</a>

<a href="?link=0RSRCHPPR">Research Papers</a>

<a href="?link=0ARTPJRNL">Articles in Popular Journals</a>

<a href="?link=0NWSPBLCTN">Newspaper Publications</a>

<a href="?link=0FLDRS">Folders</a>

<a href="?link=0EBOOK">E-books</a>

<a href="?link=0DCMNTRYFL">Documentary Films</a>
</div>

</div>

<div class="dropdown1">

<button class="dropbtn1">Gallery 

<i class="fa fa-caret-down"></i>

</button>

<div class="dropdown-content1">

<a href="?link=0PHUPLD">Upload Photo</a>

<a href="?link=0VWPHT">View Photo</a>

<a href="?link=0VDOSUP">Videos</a>

</div>



</div>

<a href="?link=0ACHVMNTETR">Achievement</a>

<a href="?link=0NWSVNT">News & Events</a>

<a href="?link=0DOWNLD">Download</a>

<a href="?link=0ROADVSR">Advisories</a>

<div style="text-align:right; float:right;" class="col-sm-2">
<?php include('contact_alert.php'); ?>
</div>

</div>

<?php
}
?>





