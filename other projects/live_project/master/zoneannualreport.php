  <br />
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4><i class="fa fa-user fa-fw"></i>Annual Report of Zone</h4>
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
        <?php
				if (isset($_SESSION['DELUSER_suc'])) {
                 //echo "<span class='alert alert-success'>".$success."</span>";
                echo '<div class = "alert alert-success alert-dismissable">
                    <button type = "button" class = "close" data-dismiss = "alert" aria-hidden = "true">
                    &times;
                    </button>'.$_SESSION['DELUSER_suc'].'
                    </div>';
                unset($_SESSION['DELUSER_suc']);
                }
				
				if (isset($_SESSION['HOUSE_suc'])) {
                 //echo "<span class='alert alert-success'>".$success."</span>";
                echo '<div class = "alert alert-success alert-dismissable">
                    <button type = "button" class = "close" data-dismiss = "alert" aria-hidden = "true">
                    &times;
                    </button>'.$_SESSION['HOUSE_suc'].'
                    </div>';
                unset($_SESSION['HOUSE_suc']);
                }
                if (isset($_SESSION['HOUSE_err'])) {
                //echo "<span class='alert alert-danger'>".$error_insert."</span>";
                echo '<div class = "alert alert-danger alert-dismissable">
                   <button type = "button" class = "close" data-dismiss = "alert" aria-hidden = "true">
                      &times;
                   </button>'.$_SESSION['HOUSE_err'].'
                </div>';
                unset($_SESSION['HOUSE_err']);
                }
				$login=$_SESSION['LOGIN'];
            ?>
          <form name="a" action="master/zoneannualreportaction.php" method="post" enctype="multipart/form-data"> 
          <input type="hidden" name="login" id="login" value="<?php echo $login; ?>" />
            <table width="43%"  border="0" align="center">
            <tr>
            <td width="51" height="51"><span style="font-size:1vw;"><em>Year:</em></span></td>
                <td width="167">
                <select name="year" id="year" style="width:70%;padding:6px 12px;font-size:14px;line-height:1.42857143;color:#555;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075);-webkit-transition:border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;-o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s">
        <option value="0000">--Select--</option>
		<option value="2017">2017</option>
		<option value="2018">2018</option>
		<option value="2019">2019</option>
		<option value="2020">2020</option>
		<option value="2022">2022</option>
		<option value="2023">2023</option>
		<option value="2024">2024</option>
		<option value="2025">2025</option>
		<option value="2026">2026</option>
		<option value="2027">2027</option>
		<option value="2028">2028</option>
		<option value="2029">2029</option>
		<option value="2030">2030</option>
        </select>
                </td>
            </tr>
           <tr>
                <td width="258" height="51"><span style="font-size:1vw;"><em>Remarks:</em></span></td>
                <td width="392"><textarea name="remarks" id="remarks" rows="4" style="width:70%;padding:6px 12px;font-size:14px;line-height:1.42857143;color:#555;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075);-webkit-transition:border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;-o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s" required="required"></textarea>
                </td>
              </tr>

              <tr>
                <td width="258" height="44"><span style="font-size:1vw;"><em>Upload File:</em></span></td>
                <td width="392">
                <input type="file" name="doc" id="doc"/>
                </td>
              </tr>
              </table>
            <table width="43%"  border="0" align="center"  >
              <tr>
                <td width="40%" height="63">&nbsp;</td>
                <td width="60%">
                <input type="reset" value="Reset" class="btn btn-danger" />&nbsp;<input type="submit" value="Submit" class="btn btn-success"  />
                </td>
              </tr>
            </table>
          </form>
            
        </div>
        <!-- .panel-body -->
    </div>
    <!-- /.panel -->
</div>
    <?php
      $sl=1;
        $find_user="SELECT * from zoneannualreport";
        $find_user_run=mysql_query($find_user);
          $count_user=mysql_num_rows($find_user_run);
          if ($count_user>0) {
	?>
    <br />
<div class="col-lg-12">
  <div class="panel panel-default">
    <div class="panel-body">
    <form name="ab" method="post" action="master/deletezoneannualreport.php">
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th style="text-align:center">SL. NO.</th>
          <th style="text-align:center">Year</th>
         <th style="text-align:center">Date</th>
         <th style="text-align:center">Remarks</th>
         <th style="text-align:center">Download</th>
          <th style="text-align:center">Action</th>
        </tr>
      </thead>
      <tbody>
    <?php
            while ($row=mysql_fetch_array($find_user_run)) {
			 $news_id=$row['slno'];
			 $year=$row['year'];
			 $file=$row['doc_file'];
			 $date=$row['date'];
			 $remarks=$row['remarks'];
			?>
            <tr>
            <td align="center"><?php echo $sl; ?></td>
            <td align="center"><span style="text-transform:capitalize"><?php echo $year; ?></span></td>
            <td align="center"><span style="text-transform:capitalize"><?php echo $date; ?></span></td>
            <td align="center"><span style="text-transform:capitalize"><?php echo $remarks; ?></span></td>
            <td align="center"><?php if($file==''){}else { ?>
  <a href="upload_docs/<?php echo $file; ?>" target="_blank"><img src="images/pdf.gif"/></a> <?php } ?></td>
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