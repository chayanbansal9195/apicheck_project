<?php
  $user=$_SESSION['LOGIN'];
?>
<br />
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4><i class="fa fa-key fa-fw"></i> Change Your Password</h4>
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
          <form action="changpasswordAction.php" method="post" >
           <input type="hidden" id="user" name="user" size="20" value="<?php echo $user;?>" />
          <table width="677" height="149" border="0" align="center" >
            <tr>
              <td width="193" height="34"><span style="font-size:1vw;"><em>Old Password:</em></span></td>
              <td width="383"><input type="password" id="oldpass" name="oldpass" size="20" class="form-control" placeholder="Old Password" required /></td>
            </tr>
            <tr>
              <td height="37"><span style="font-size:1vw;"><em>New Password:</em></span></td>
              <td><input type="password" id="newpass" name="newpass" size="20" class="form-control" placeholder="New Password" required/></td>
            </tr>
            <tr>
              <td height="30"><span style="font-size:1vw;"><em>Confirm Password:</em></span></td>
              <td><input type="password" id="cpass" name="cpass" size="20" class="form-control" placeholder="Confirm Password" required/></td>
            </tr>
            <tr>
              <td height="37">&nbsp;</td>
              <td>
              <button type="submit" class="btn btn-success"><i class="fa fa-key fa-fw"></i> Change Pass</button> 
              <button type="reset" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Reset</button>
              </td>
            </tr>
          </table>
          </form>
        </div>
        <!-- .panel-body -->
    </div>
    <!-- /.panel -->
</div>
