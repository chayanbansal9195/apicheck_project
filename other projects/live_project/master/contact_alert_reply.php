<style>
.textbox
{
width:70%;
height:34px;
padding:6px 12px;
font-size:14px;
line-height:1.42857143;
color:#555;
background-color:#fff;
background-image:none;
border:1px solid #ccc;
border-radius:4px;
-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);
box-shadow:inset 0 1px 1px rgba(0,0,0,.075);
-webkit-transition:border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
-o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;
transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s
}
</style> 
<br />
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4><i class="fa fa-user fa-fw"></i>Give Reply</h4>
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
				extract($_GET);
				$query007="Select * from contactstaff where slno='$carryval'";
				$result007=mysql_query($query007);
				$count007=mysql_num_rows($result007);
				if($count007>0)
				{
				while($row007=mysql_fetch_array($result007))
				{
					$name=$row007['sender_name'];
					$phone=$row007['sender_phone'];
					$email=$row007['sender_email'];
					$queries=$row007['queries'];
					$reply=$row007['reply'];
				}
				}
				else
				{
					$phone='';
					$reply='';
				}
				
            ?>
          <form name="a" action="master/contact_reply_action.php" method="post"> 
          <input type="hidden" name="slno" id="slno" value="<?php echo $carryval; ?>" />
          <input type="hidden" name="login" id="login" value="<?php echo $login; ?>" />
            <table width="43%"  border="0" align="center">
            <tr>
                <td width="258" height="51"><span style="font-size:1vw;"><em>Name:</em></span></td>
               <td><input type="text" name="name" id="name" readonly="readonly" value="<?php echo $name; ?>" class="textbox"></td>
              </tr>
              <tr>
                <td width="258" height="51"><span style="font-size:1vw;"><em>Phone:</em></span></td>
                <td width="392"><input type="text" name="phone" id="phone" readonly="readonly" value="<?php echo $phone; ?>" class="textbox">
                </td>
              </tr>
              <tr>
                <td width="258" height="51"><span style="font-size:1vw;"><em>Email:</em></span></td>
                <td width="392"><input type="text" name="email" id="email" readonly="readonly" value="<?php echo $email; ?>" class="textbox">
                </td>
              </tr>
           <tr>
                <td width="258" height="51"><span style="font-size:1vw;"><em>Queries:</em></span></td>
                <td width="392"><textarea name="activity" id="activity" cols="45" rows="5" readonly="readonly" style="width:70%;padding:6px 12px;font-size:14px;line-height:1.42857143;color:#555;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075);-webkit-transition:border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;-o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s"><?php echo $queries; ?></textarea>
                </td>
              </tr>
              <tr>
                <td width="258" height="51"><span style="font-size:1vw;"><em>Reply Text:</em></span></td>
                <td width="392"><textarea name="reply" id="reply" required="required" cols="45" rows="5" style="width:70%;padding:6px 12px;font-size:14px;line-height:1.42857143;color:#555;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075);-webkit-transition:border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;-o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s"><?php echo $reply; ?></textarea>
                </td>
              </tr>
              
              </table>
            <table width="43%"  border="0" align="center"  >
              <tr>
                <td width="40%" height="63">&nbsp;</td>
                <td width="60%">
                <input type="reset" value="Reset" class="btn btn-danger" />&nbsp;<input type="submit" value="Send" class="btn btn-success"  />
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
