<script>
function FileDetails() {

        // GET THE FILE INPUT.
        var fi = document.getElementById('photo');

        // VALIDATE OR CHECK IF ANY FILE IS SELECTED.
        if (fi.files.length > 0) {

            // THE TOTAL FILE COUNT.
            var tf = fi.files.length;
document.getElementById('fp').value=tf;
            // RUN A LOOP TO CHECK EACH SELECTED FILE.
            
        }
    }

function FileDetails() {

        var fi = document.getElementById('photo');

        if (fi.files.length > 0) {

            document.getElementById('fp').innerHTML =
                'Total Files: <b>' + fi.files.length + '</b></br >';

            for (var i = 0; i <= fi.files.length - 1; i++) {

                var fname = fi.files.item(i).name;      // THE NAME OF THE FILE.
                var fsize = fi.files.item(i).size;      // THE SIZE OF THE FILE.
			}
					if(fsize>2097152)
 { 
 alert('File Size Cannot Be More Than 2MB');
 document.getElementById('photo').focus();
 return false;
}

return true;
        }
    }
</script>
<br />
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">
            <h4><i class="fa fa-image fa-fw"></i>Add More Photos</h4>
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
				
				if (isset($_SESSION['UPLSUC'])) {
                 //echo "<span class='alert alert-success'>".$success."</span>";
                echo '<div class = "alert alert-success alert-dismissable">
                    <button type = "button" class = "close" data-dismiss = "alert" aria-hidden = "true">
                    &times;
                    </button>'.$_SESSION['UPLSUC'].'
                    </div>';
                unset($_SESSION['UPLSUC']);
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
include('connect.php');
$query="Select * from eventphotos where event_code='$code' and login='$login'";
$result=mysql_query($query);
while($row=mysql_fetch_array($result))
{
	$ename=$row['event_name'];
}
?>
<center><h3><span style="color:red;">Event Name- <?php echo $ename ?></span></h3></center><br />
<form name="a" method="post" action="master/add_more_photos_action.php" enctype="multipart/form-data" onSubmit="return FileDetails();">
<input type="hidden" name="login" id="login" value="<?php echo $login; ?>" />
<input type="hidden" name="event" id="event" value="<?php echo $ename; ?>" />
<input type="hidden" name="ecode" id="ecode" value="<?php echo $code; ?>" />
            <table width="57%"  border="0" align="center">
            <tr>
           <td width="263" height="60"><span style="font-size:1.4vw;"><em>Upload Photos:</em></span></td>
             <td width="459"><input type="file" name="photo[]" id="photo" multiple="multiple" required="required" accept="image/*" />
             <!--<input type="hidden" name="fileno" id="fp" />-->
<!--<span style="color:red; font-size:11px;">File Size Cannot be More Than 2MB</span>-->
             </td></tr>
    <!--<tr><td colspan="2">&nbsp;</td><td valign="top">

</td></tr>-->
    <tr><td height="38" colspan="3" align="center"><input type="submit" value="Save" class="btn btn-success">
</td></tr>
    </table>
</form>
</div></div></div>