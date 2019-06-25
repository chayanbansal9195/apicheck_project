  <br />
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4><i class="fa fa-user fa-fw"></i>Edit Action Plan</h4>
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
				extract($_GET);
				include('connect.php');
				$find_user="SELECT * from actionplan where slno='$id'";
				$find_user_run=mysql_query($find_user);
				while ($row=mysql_fetch_array($find_user_run)) {
			 $act_id=$row['slno'];
			 $activity=$row['action'];
			 $file=$row['doc_file'];
				}
            ?>
          <form name="a" action="master/actionplaneditaction.php" method="post" enctype="multipart/form-data"> 
          <input type="hidden" name="slno" id="slno" value="<?php echo $act_id; ?>" />
            <table width="43%"  border="0" align="center">
           <tr>
                <td width="258" height="51"><span style="font-size:1vw;"><em>Action:</em></span></td>
                <td width="392"><textarea name="activity" id="activity" cols="45" rows="5" style="width:70%;padding:6px 12px;font-size:14px;line-height:1.42857143;color:#555;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075);-webkit-transition:border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;-o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s"><?php echo $activity; ?></textarea>
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
