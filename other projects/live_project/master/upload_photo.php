<script>
$(document).ready(function () {
  //called when key is pressed in textbox
  $("#event").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 32 && (e.which < 48 || e.which > 57) && (e.which < 65 || e.which > 90) && (e.which < 97 || e.which > 122)) {
        //display error message
        $("#errcharacter").html("Alphabets Only Please !!!").show().fadeOut("slow");
               return false;
    }
   });
});

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
<style>
.textbox
{
width:100%;
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
transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
.textarea
{
width:100%;
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
transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
</style>
<br />
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4><i class="fa fa-image fa-fw"></i>Upload Photos</h4>
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
            ?>
          <form name="a" method="post" action="master/upload_photo_action.php" enctype="multipart/form-data" 
onsubmit="return FileDetails();">
<input type="hidden" name="user" id="user" value="<?php echo $login; ?>" />
            <table border="0" align="center">
           <tr>
                <td width="263" height="51"><span style="font-size:1.4vw;"><em>Album Name:</em></span></td>
                <td width="459"><input type="text" id="event" name="event" size="20" class="textbox" placeholder="Enter Album Name" required="required" autocomplete="off" onChange="changerole();"/>
                </td>
              </tr>
             <tr>
             <td width="263" height="60"><span style="font-size:1.4vw;"><em>Upload Photos:</em></span></td>
             <td width="459"><input type="file" name="photo[]" id="photo" multiple="multiple" required="required" accept="image/*" />
             <!--<input type="hidden" name="fileno" id="fp" />-->
<!--<span style="color:red; font-size:11px;">File Size Cannot be More Than 2MB</span>-->
             </td>
             </tr>
              <tr>
                <td width="263" height="63">&nbsp;</td>
                <td width="459">
                <input type="submit" class="btn btn-success"> 
              <input type="reset" class="btn btn-danger">
              <!--<div class="form-group form-inline">
<span style="color:red; font-size:11px;">You Can Add Upto 30 Images For An Event.</span>
</div>-->
                </td>
              </tr>
            </table>
          </form>
            
        </div>
        <!-- .panel-body -->
    </div>
    <!-- /.panel -->
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
