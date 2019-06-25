<br />
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4><i class="fa fa-bullhorn fa-fw"></i>Alert</h4>
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
        <?php
				
				if (isset($_SESSION['REPLY_suc'])) {
                 //echo "<span class='alert alert-success'>".$success."</span>";
                echo '<div class = "alert alert-success alert-dismissable">
                    <button type = "button" class = "close" data-dismiss = "alert" aria-hidden = "true">
                    &times;
                    </button>'.$_SESSION['REPLY_suc'].'
                    </div>';
                unset($_SESSION['REPLY_suc']);
                }
				$login=$_SESSION['LOGIN'];
            ?>
<?php
      $sl=1;
        $find_user="select * from contactstaff where status='1' and staff_email='$login'";
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
          <th style="text-align:center">Phone</th>
         <th style="text-align:center">Email</th>
         <th style="text-align:center">Queries</th>
          <th style="text-align:center">Date</th>
          <th style="text-align:center">Reply</th>
          <th style="text-align:center">Action</th>
        </tr>
      </thead>
      <tbody>
    <?php
            while ($row=mysql_fetch_array($find_user_run)) {
			 $slno=$row['slno'];
			 $sname=$row['sender_name'];
			 $phone=$row['sender_phone'];
			 $email=$row['sender_email'];
			 $queries=$row['queries'];
			 $date=$row['date'];
			?>
            <tr>
            <td align="center"><?php echo $sl; ?></td>
            <td align="center"><span style="text-transform:capitalize"><?php echo $sname; ?></span></td>
            <td align="center"><span style="text-transform:capitalize"><?php echo $phone; ?></span></td>
            <td align="center"><span style="text-transform:capitalize"><?php echo $email; ?></span></td>
            <td align="center"><?php echo $queries; ?></td>
            <td align="center"><?php echo $date; ?></td>
            <td align="center"><a href="api.php?link=0CNTCTRPLY&carryval=<?php echo $slno; ?>"><img src="images/reply.png" width="30" height="30" /></a></td>
            <td align="center"><a href="master/closecontactalert.php?id=<?php echo $slno; ?>">Close</a></td>
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
