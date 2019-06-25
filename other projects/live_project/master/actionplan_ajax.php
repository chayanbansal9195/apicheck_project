<?php
	$gtvalue=$_GET['dte'];
	$extract=explode('^',$gtvalue);
	$fdate=$extract[0];
	$tdate=$extract[1];
	include('../connect.php');
      $sl=1;
        $find_user="SELECT * from actionplan where date>='$fdate' and date<='$tdate'";
        $find_user_run=mysql_query($find_user);
          $count_user=mysql_num_rows($find_user_run);
          if ($count_user>0) {
	?>
    <br />
<div class="col-lg-12">
  <div class="panel panel-default">
    <div class="panel-body">
    <form name="ab" method="post" action="master/deleteactionplan.php">
    <table class="table table-striped table-hover" width="100%">
      <thead>
        <tr>
          <th width="8%" style="text-align:center">SL. NO.</th>
          <th width="44%" style="text-align:center">Action</th>
         <th width="18%" style="text-align:center">Date</th>
         <th width="17%" style="text-align:center">Download</th>
         <th style="text-align:center">Edit</th>
          <th width="14%" style="text-align:center">Action</th>
        </tr>
      </thead>
      <tbody>
    <?php
            while ($row=mysql_fetch_array($find_user_run)) {
			 $news_id=$row['slno'];
			 $news=$row['action'];
			 $file=$row['doc_file'];
			 $date=$row['date'];
			?>
            <tr>
            <td align="center"><?php echo $sl; ?></td>
            <td align="center"><span style="text-transform:capitalize"><?php echo $news; ?></span></td>
            <td align="center"><span style="text-transform:capitalize"><?php echo $date; ?></span></td>
            <td align="center"><?php if($file==''){}else { ?>
  <a href="upload_docs/<?php echo $file; ?>" target="_blank"><img src="images/pdf.gif"/></a> <?php } ?></td>
   <td align="center"><a href="api.php?link=0ACPEDT&id=<?php echo $news_id; ?>"><img src="images/edit.png" width="30" height="30" /></a></td>
            <td align="center"><input type="checkbox" name="checkdelete[]" id="checkdelete" value="<?php echo $news_id; ?>" /></td>
            </tr>
            <?php
              $sl++;
            }
		  ?>
      </tbody>
      <tr><td colspan="6" align="center"><input type="submit" value="Delete" class="btn btn-danger" /></td></tr>
    </table>
    </form>
    </div>
  </div>
</div>    
    <?php
		  }
      ?>