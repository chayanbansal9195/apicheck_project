<br />
<div class="col-lg-12">
<div class="panel panel-default">
        <div class="panel-heading">
            <h4><i class="fa fa-image fa-fw"></i>View Photos</h4>
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
        <?php
				if (isset($_SESSION['DElSUC'])) {
                 //echo "<span class='alert alert-success'>".$success."</span>";
                echo '<div class = "alert alert-success alert-dismissable">
                    <button type = "button" class = "close" data-dismiss = "alert" aria-hidden = "true">
                    &times;
                    </button>'.$_SESSION['DElSUC'].'
                    </div>';
                unset($_SESSION['DElSUC']);
                }
				if (isset($_SESSION['UPLSUC'])) {
                 //echo "<span class='alert alert-success'>".$success."</span>";
                echo '<div class = "alert alert-success alert-dismissable">
                    <button type = "button" class = "close" data-dismiss = "alert" aria-hidden = "true">
                    &times;
                    </button>'.$_SESSION['UPLSUC'].'
                    </div>';
                unset($_SESSION['UPLSUC']);
                }
                if (isset($_SESSION['UPLERR'])) {
                //echo "<span class='alert alert-danger'>".$error_insert."</span>";
                echo '<div class = "alert alert-danger alert-dismissable">
                   <button type = "button" class = "close" data-dismiss = "alert" aria-hidden = "true">
                      &times;
                   </button>'.$_SESSION['UPLERR'].'
                </div>';
                unset($_SESSION['UPLERR']);
                }
				$login=$_SESSION['LOGIN'];
            ?>
<?php
date_default_timezone_set("Asia/Kolkata");
$syear=date("Y");
include('connect.php');
$query="Select * from eventphotos where date Like '$syear%' and login='$login' group by event_code asc";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if($count>0)
{
?>
<table class="table table-striped table-hover">
<thead>
        <tr>
          <th width="25" style="text-align:center">SN.</th>
          <th width="61" style="text-align:center">Year</th>
         <th width="65" style="text-align:center">Album Name</th>
         <th width="71" style="text-align:center">Photos</th>
         <th width="94" style="text-align:center">Add More Photos</th>
         <!--<th style="text-align:center">Delete</th>-->
        </tr>
      </thead>
      <tbody>
<?php   
$s=0;
while($rows=mysql_fetch_array($result))
{
	$date=$rows['date'];
	$ename=$rows['event_name'];
	$ecode=$rows['event_code'];
	$photo=$rows['event_photos'];
	$s++;
	$extracty=explode('-',$date);
	$year=$extracty[0];
?>
<tr>
<td align="center"><?php echo $s; ?></td>
<td align="center"><?php echo $year; ?></td>
<td align="center"><a href="?link=0VWUPPHT&carrylink=<?php echo $ecode; ?>"><?php echo $ename; ?></a></td>
<td align="center">
<a href="?link=0VWUPPHT&carrylink=<?php echo $ecode; ?>"><img src="eventphoto/<?php echo $photo; ?>" height="50" width="50" /></a></td>
<td align="center"><a href="?link=0ADMRPH&code=<?php echo $ecode; ?>"><img src="images/addphotos.png" width="52" height="42" id="" /></a></td>
<input type="hidden" name="year1" id="year1" value="<?php echo $year; ?>" />
<!--<td align="center">
<a href="?link=photo_delete&carryid=<?php echo $ecode; ?>^<?php echo $year; ?>"><img src="img/delete.png" width="30" height="30" /></a>
</td>-->
</tr>
<?php
}
?>
</tbody>
</table>
<?php
}
else
{
	echo "<span style='color:red; font-size:16px;'>No Photos Found</span>";
}
?>
</div>
</div>
</div>