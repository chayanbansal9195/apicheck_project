    <?php
	$gtvalue=$_GET['dte'];
	$extract=explode('^',$gtvalue);
	$discipline=$extract[0];
	$year=$extract[1];
	include('../connect.php');
      $sl=1;
        if($discipline!='' && $year=='0000')
	  {
		  $find_user="SELECT * from fldactivities where discipline='$discipline'";
	  }
	  if($discipline=='' && $year!='0000')
	  {
		  $find_user="SELECT * from fldactivities where activity_date Like '$year%'";
	  }
	  if($discipline!='' && $year!='0000')
	  {
       $find_user="SELECT * from fldactivities where discipline='$discipline' and activity_date Like '$year%'";
	  }
        $find_user_run=mysql_query($find_user);
          $count_user=mysql_num_rows($find_user_run);
          if ($count_user>0) {
	?>
    <br />
<div class="col-lg-12">
  <div class="panel panel-default">
    <div class="panel-body">
    <form name="ab" method="post" action="master/deletefldentry.php">
    <table class="table table-striped table-hover" width="100%">
      <thead>
        <tr>
          <th width="8%" style="text-align:center">SL. NO.</th>
          <th width="17%" style="text-align:center">Discipline</th>
          <th width="42%" style="text-align:center">FLD</th>
         <th width="12%" style="text-align:center">Date</th>
         <th width="12%" style="text-align:center">Download</th>
         <th style="text-align:center">Edit</th>
          <th width="9%" style="text-align:center">Action</th>
        </tr>
      </thead>
      <tbody>
    <?php
            while ($row=mysql_fetch_array($find_user_run)) {
			 $act_id=$row['slno'];
			 $discipline=$row['discipline'];
			 $activity=$row['fld'];
			 $file=$row['doc_file'];
			 $date=$row['activity_date'];
			?>
            <tr>
            <td align="center"><?php echo $sl; ?></td>
            <td align="center"><?php echo $discipline; ?></td>
            <td align="center"><span style="text-transform:capitalize"><?php echo $activity; ?></span></td>
            <td align="center"><span style="text-transform:capitalize"><?php echo $date; ?></span></td>
            <td align="center"><?php if($file==''){}else { ?>
  <a href="upload_docs/<?php echo $file; ?>" target="_blank"><img src="images/pdf.gif"/></a> <?php } ?></td>
  <td align="center"><a href="api.php?link=0FLDEDT&id=<?php echo $act_id; ?>"><img src="images/edit.png" width="30" height="30" /></a></td>
            <td align="center"><input type="checkbox" name="checkdelete[]" id="checkdelete" value="<?php echo $act_id; ?>" /></td>
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
<style type="text/css">
    .ui-autocomplete {
            max-height: 200px;
            overflow-y: auto;
            /* prevent horizontal scrollbar */
            overflow-x: hidden;
            /* add padding to account for vertical scrollbar */
            padding-right: 20px;
        }
</style>
                        <script type="text/javascript">
$( document ).ready(function() {
    $('#date').datepicker({
        format:'yyyy-mm-dd',
        autoclose: true,
        todayHighlight:true,
        startView:'month'
    });
	 
});
    </script>