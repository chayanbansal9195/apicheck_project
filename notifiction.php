<?php
include('dbConfig.php');
$q="Select * from multidata where status=0";
$r=mysqli_query($con, $q);
$cnt=mysqli_num_rows($r);
?>


<a class="nav-link" href="?link=0NOTCSTU"><i class="fa fa-bell"></i><span class="badge"><?php echo $cnt; ?></span></a>