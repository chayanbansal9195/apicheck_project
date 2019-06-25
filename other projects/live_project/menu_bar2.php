<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><head>
<link href="cssmenu/helper.css" media="screen" rel="stylesheet" type="text/css" />

<!-- Beginning of compulsory code below -->

<link href="cssmenu/dropdown.css" media="screen" rel="stylesheet" type="text/css" />
<link href="cssmenu/default.advanced.css" media="screen" rel="stylesheet" type="text/css" />

<!-- / END -->

</head>



<!-- Beginning of compulsory code below -->
<?php if ($_SESSION['ROLE']=='0') { ?>

<ul id="nav" class="dropdown dropdown-horizontal">
	<li><a href="?link=home">Home</a></li>
    <li><a href="?link=gallery">District Profile</a></li>
    <li><a href="?link=0STFETR">Staff</a></li>
    <li><a href="?link=0ACTVTS">Activities</a></li>
    <li><a href="?link=view_announcement">Publications</a></li>
	<li class="dir">Photo
		<ul>
			<li class="first"><a href="?link=0PHUPLD">Upload</a></li>
             <li class="last"><a href="?link=0VWPHT">View</a></li>
		</ul>
	</li>
    <li><a href="?link=0ACHVMNTETR">Achievement</a></li>
    <li><a href="?link=0NWSVNT">News & Events</a></li>
	<li><a href="?link=0DOWNLD">Download</a></li>
    <li><div style="text-align:right; float:right;" class="col-sm-2">
<?php include('contact_alert.php'); ?>
</div></li>
<?php } ?>

</html>