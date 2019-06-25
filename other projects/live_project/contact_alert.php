<?php
date_default_timezone_set("Asia/Kolkata");
$sdate=date("Y-m-d");
$login=$_SESSION['LOGIN'];
if($_SESSION['ROLE']=='1')
{

$qry22="select * from contactstaff where status='1' and staff_email='$login'";
$rsl22=mysql_query($qry22);
$count22=mysql_num_rows($rsl22);

	   if($count22>0)
         {
         ?>
          <a href="api.php?link=0CNTCTALRT" style="text-decoration:none;" title="Article Alert">
            <i class="fa fa-bullhorn fa-fw"></i><span class="badge"><?php echo $count22;?></span>
        </a>
      <?php
       }
       else
       {
       }
      ?>
<?php
}
?>
      