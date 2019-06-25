<br />
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4><i class="fa fa-user fa-fw"></i>Staff Registration</h4>
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
				if (isset($_SESSION['Staffedit'])) {
                 //echo "<span class='alert alert-success'>".$success."</span>";
                echo '<div class = "alert alert-success alert-dismissable">
                    <button type = "button" class = "close" data-dismiss = "alert" aria-hidden = "true">
                    &times;
                    </button>'.$_SESSION['Staffedit'].'
                    </div>';
                unset($_SESSION['Staffedit']);
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
          <form name="a" action="master/staffentry_Action.php" method="post" class="form-horizontal" enctype="multipart/form-data" onsubmit="return check(this.form);"> 
            <table width="43%"  border="0" align="center">
           <tr>
                <td width="258" height="51"><span style="font-size:1vw;"><em>Name:</em></span></td>
                <td width="392"><input type="text" id="uname" name="uname" size="20" class="form-control" placeholder="Enter The Name" required="required" autocomplete="off"/>
                </td>
              </tr>
           
           	 <tr>
                <td width="258" height="51"><span style="font-size:1vw;"><em>Qualification:</em></span></td>
                <td width="392"><input type="text" id="qualification" name="qualification" size="20" class="form-control" placeholder="Qualification" required="required" autocomplete="off"/>
                </td>
              </tr>
              
            <tr>
                <td width="258" height="51"><span style="font-size:1vw;"><em>Designation:</em></span></td>
                <td width="392"><input type="text" id="designation" name="designation" size="20" class="form-control" placeholder="Designation" required="required" autocomplete="off"/>
                </td>
              </tr>
              
          <tr>
                <td width="258" height="51"><span style="font-size:1vw;"><em>Address:</em></span></td>
                <td width="392"><textarea id="addr" name="addr" rows="4" size="20" class="form-control" placeholder="Address" required="required" autocomplete="off"></textarea>
                </td>
              </tr>
              
              <tr>
                <td width="258" height="44"><span style="font-size:1vw;"><em>Gender:</em></span></td>
                <td width="392">
                <select name="gender" id="gender" required="required" class="form-control">
                <option value="">--Select--</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                </select>
                </td>
              </tr>
              
             <tr>
                <td width="258" height="51"><span style="font-size:1vw;"><em>Phone No.:</em></span></td>
                <td width="392"><input type="text" id="phone" name="phone" size="20" class="form-control" placeholder="Phone Number" required="required" autocomplete="off"/>
                </td>
              </tr>
              
              <tr>
                <td width="258" height="51"><span style="font-size:1vw;"><em>Email ID:</em></span></td>
                <td width="392"><input type="text" id="email" name="email" size="20" class="form-control" placeholder="Email ID" required="required" autocomplete="off"/>
                </td>
                
              </tr>
              <tr>
                <td width="258" height="51"><span style="font-size:1vw;"><em>Password:</em></span></td>
                <td width="392"><input type="password" id="pass" name="pass" size="20" class="form-control" placeholder="Password" required="required" autocomplete="off"/>
                </td>
              </tr>
              
              <tr>
                <td width="258" height="51"><span style="font-size:1vw;"><em>Confirm Password:</em></span></td>
                <td width="392"><input type="password" id="cpass" name="cpass" size="20" class="form-control" placeholder="Confirm Password" required="required" autocomplete="off"/>
                </td>
              </tr>
              
              <tr>
                <td width="258" height="51"><span style="font-size:1vw;"><em>Photo:</em></span></td>
                <td width="392"><input type="file" name="doc" id="doc" class="form-control"/>
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
<div class="col-lg-12">
  <div class="panel panel-default">
    <div class="panel-body">
    <?php
      $sl=1;
        $find_user="SELECT * from staff";
        $find_user_run=mysql_query($find_user);
        if ($find_user_run) {
          $count_user=mysql_num_rows($find_user_run);
          if ($count_user>0) {
	?>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th style="text-align:center">SL. NO.</th>
          <th style="text-align:center">Name</th>
          <th style="text-align:center">Designation</th>
         <th style="text-align:center">Address</th>
         <th style="text-align:center">Gender</th>
         <th style="text-align:center">Phone No.</th>
          <th style="text-align:center">Email</th>
          <th style="text-align:center">Status</th>
          <th style="text-align:center">Edit</th>
          <th style="text-align:center">Action</th>
        </tr>
      </thead>
      <tbody>
    <?php
            while ($row=mysql_fetch_array($find_user_run)) {
			 $uid=$row['id'];
			 $uname=$row['name'];
			 $designation=$row['designation'];
			 $uaddr=$row['address'];
			 $uphone=$row['phone_no'];
			 $ugender=$row['gender'];
			 $uemail=$row['email'];
			 $query="Select * from login where loginid='$uemail'";
			$result=mysql_query($query);
			while($rows=mysql_fetch_array($result))
			{
				$user_id=$rows['id'];
				$ustatus=$rows['status'];
			}
			?>
            <tr>
            <td align="center"><?php echo $sl; ?></td>
            <td align="center"><span style="text-transform:capitalize"><?php echo $uname; ?></span></td>
            <td align="center"><span style="text-transform:capitalize"><?php echo $designation; ?></span></td>
            <td align="center"><span style="text-transform:capitalize"><?php echo $uaddr; ?></span></td>
            <td align="center"><?php echo $uphone; ?></td>
            <td align="center"><?php echo $ugender; ?></td>
            <td align="center"><?php echo $uemail; ?></td>
            <td align="center"><?php if($ustatus=='1') { echo "Blocked"; } else { echo "Unblocked"; } ?></td>
            <td align="center"><a href="api.php?link=0STFEDT&id=<?php echo $uid; ?>"><img src="images/edit.png" width="30" height="30" /></a></td>
            <td align="center"><a href="master/blockunblockstaff.php?id=<?php echo $user_id; ?>">Bloack/Unblock</a></td>
            </tr>
            <?php
              $sl++;
            }
          }
        }
      ?>
      </tbody>
    </table>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $('#user_id').keypress(function(event){
      if (event.keyCode < 48 || event.keyCode > 57 && event.keyCode < 65 || event.keyCode > 90 && event.keyCode < 97 || event.keyCode > 127) {
          alert('Alpha Numeric Allow Only.');
          event.preventDefault(); 
        }
    });
  });
</script>
<script src="select2/jquery_min.js"></script>
<link rel="stylesheet" type="text/css" href="select2/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="select2/select2.min.css">
 <script src="select2/select2.full.min.js"></script>
 <script src="select2/jquery-ui.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#house').focus();
        var all_code=$('#houseitem').find('option');
        availableTutorials=[];
        $.each(all_code,function(index, el) {
            availableTutorials.push($(el).text())
        });
        $('#house').autocomplete({
            source: availableTutorials,
            select: function( event, ui ) {
                console.log(ui.item.value);
                var selectText=ui.item.value;
                console.log(selectText);
                arrvar=selectText.split("|");
                $('#house').val(arrvar[0].trim());
                return false;
            }
        });
    });
	
	  $(document).ready(function() {
        $('#family').focus();
        var all_code=$('#familyitem').find('option');
        availableTutorials=[];
        $.each(all_code,function(index, el) {
            availableTutorials.push($(el).text())
        });
        $('#family').autocomplete({
            source: availableTutorials,
            select: function( event, ui ) {
                console.log(ui.item.value);
                var selectText=ui.item.value;
                console.log(selectText);
                arrvar=selectText.split("|");
                $('#family').val(arrvar[0].trim());
                return false;
            }
        });
    });
	
	 $(document).ready(function() {
        $('#user').focus();
        var all_code=$('#username').find('option');
        availableTutorials=[];
        $.each(all_code,function(index, el) {
            availableTutorials.push($(el).text())
        });
        $('#user').autocomplete({
            source: availableTutorials,
            select: function( event, ui ) {
                console.log(ui.item.value);
                var selectText=ui.item.value;
                console.log(selectText);
                arrvar=selectText.split("|");
                $('#user').val(arrvar[1].trim());
                return false;
            }
        });
    });
	 function showformdetails()
	 {     
		var disc=document.getElementById('gender').value;
		 
        var httpx;
        
                       
                      if(window.XMLHttpRequest){
                      httpx=new XMLHttpRequest();
            
                         }
                        else{
                       httpx=new ActiveXObject("Microsoft.XMLHTTP");
            
                        }
                           httpx.open("GET","master/showgender_ajax.php?con19="+disc,true);
                          httpx.onreadystatechange=function(){
                          if(httpx.readyState==4 && httpx.status==200)
                           {
              
                               document.getElementById("viewformdetails").innerHTML=httpx.responseText;
                            }
                        }	
      
                          httpx.send(null);
     }
function MakePopup(x) {
          //alert(x);
			mywindow=window.open("master/changerole_popup.php?serial="+x, "Update Section","status=0,location=0,menubar=0,toolbar=0,resizable=0,height=300,width=700");
			mywindow.moveTo(250, 200);
        }
</script>
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
