<?php
$gtvalue=$_GET['dte'];
	$extract=explode('^',$gtvalue);
	$fdate=$extract[0];
	$tdate=$extract[1];
	include('../connect.php');
      $sl=1;
        $find_user="SELECT * from documentaryfilm where date>='$fdate' and date<='$tdate'";
        $find_user_run=mysql_query($find_user);
          $count_user=mysql_num_rows($find_user_run);
          if ($count_user>0) {
	?>
    <br />
<div class="col-lg-12">
  <div class="panel panel-default">
    <div class="panel-body">
    <form name="ab" method="post" action="master/deletedocumntfilm.php">
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th style="text-align:center">SL. NO.</th>
          <th style="text-align:center">Link</th>
         <th style="text-align:center">Date</th>
         <th style="text-align:center">Remarks</th>
          <th style="text-align:center">Action</th>
        </tr>
      </thead>
      <tbody>
    <?php
            while ($row=mysql_fetch_array($find_user_run)) {
			 $news_id=$row['slno'];
			 $videos=$row['link'];
			 $remarks=$row['remarks'];
			 $date=$row['date'];
			?>
            <tr>
            <td align="center"><?php echo $sl; ?></td>
            <!--<td align="center"><?php 
$embedvideos=str_replace("watch?v=","embed/",$videos);

 ?>       			
 <iframe width="290" height="200"
src="<?php echo $embedvideos; ?>" frameborder="0">
</iframe>
<br/><a href="<?php echo $videos; ?>" target="_blank" style="text-decoration:none;"><?php if($videos!='') { ?><img src="images/you.png" width="80" height="40"/> <?php } ?></a></td>-->
<td align="center"><a href="<?php echo $videos; ?>" target="_blank" style="text-decoration:none;"><?php echo $videos; ?></a></td>

            <td align="center"><span style="text-transform:capitalize"><?php echo $date; ?></span></td>
            <td align="center"><span style="text-transform:capitalize"><?php echo $remarks; ?></span></td>
            <td align="center"><input type="checkbox" name="checkdelete[]" id="checkdelete" value="<?php echo $news_id; ?>" /></td>
            </tr>
            <?php
              $sl++;
            }
		  ?>
      </tbody>
      <tr><td colspan="5" align="center"><input type="submit" value="Delete" class="btn btn-danger" /></td></tr>
    </table>
    </form>
    </div>
  </div>
</div>    
    <?php
		  }
      ?>