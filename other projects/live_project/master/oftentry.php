  <br />
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4><i class="fa fa-user fa-fw"></i>OFT Entry</h4>
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
				echo $login;
				
				?>
          <form name="a" action="master/oftentryentryaction.php" method="post" enctype="multipart/form-data"> 
          <input type="hidden" name="login" id="login" value="<?php echo $login; ?>" />
            <table width="43%"  border="0" align="center">
            <tr>
                <td width="258" height="51"><span style="font-size:1vw;"><em>Discipline:</em></span></td>
               <td><select name="discipline" id="discipline" style="width:70%;padding:6px 12px;font-size:14px;line-height:1.42857143;color:#555;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075);-webkit-transition:border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;-o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s">
                <option value="">--Select--</option>
                <option value="Agronomy">Agronomy</option>
                <option value="Animal Science">Animal Science</option>
                <option value="Horticulture">Horticulture</option>
                <option value="Plant Protection">Plant Protection</option>
                <option value="Home Science">Home Science</option>
                <option value="Soil Science">Soil Science</option>
                <option value="Farm">Farm</option>
                <option value="ICT">ICT</option>
                </select></td>
              </tr>
           <tr>
                <td width="258" height="51"><span style="font-size:1vw;"><em>OFT:</em></span></td>
                <td width="392"><textarea name="activity" id="activity" cols="45" rows="5" style="width:70%;padding:6px 12px;font-size:14px;line-height:1.42857143;color:#555;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075);-webkit-transition:border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;-o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s"></textarea>
                </td>
              </tr>
              
          <tr>
                <td width="258" height="51"><span style="font-size:1vw;"><em>Date:</em></span></td>
                <td width="392"><input type="text" name="date" id="date" required="required" readonly="readonly" style="width:50%;height:34px;padding:6px 12px;font-size:14px;line-height:1.42857143;color:#555;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075);-webkit-transition:border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;-o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s">
                        <i class="glyphicon glyphicon-calendar"></i>
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

    <br />
<div class="col-lg-12">
  <div class="panel panel-default">
    <div class="panel-body">
    <table width="43%"  border="0" align="center">
    <tr>
                <td width="90" height="51"><span style="font-size:1vw;"><em>Discipline:</em></span></td>
               <td width="158"><select name="disci" id="disci" style="width:70%;padding:6px 12px;font-size:14px;line-height:1.42857143;color:#555;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075);-webkit-transition:border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;-o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s">
                <option value="">--Select--</option>
                <option value="Agronomy">Agronomy</option>
                <option value="Animal Science">Animal Science</option>
                <option value="Horticulture">Horticulture</option>
                <option value="Plant Protection">Plant Protection</option>
                <option value="Home Science">Home Science</option>
                <option value="Soil Science">Soil Science</option>
                <option value="Farm">Farm</option>
                <option value="ICT">ICT</option>
                </select></td>
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
        <td width="57"><input type="button" value="View" class="btn btn-primary" onclick="showdetails();" /></td>
              </tr>
    </table>
    </div>
  </div>
</div>

<div id="viewdetails"></div>   

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
<script type="text/javascript">
function showdetails()
 {
	 	 var disci=document.getElementById('disci').value;
		 var year=document.getElementById('year').value;
		 var datastring=disci+'^'+year;
		//alert(datastring);
		 var httpx;
        
                       
                      if(window.XMLHttpRequest){
                      httpx=new XMLHttpRequest();
            
                         }
                        else{
                       httpx=new ActiveXObject("Microsoft.XMLHTTP");
            
                        }
                           httpx.open("GET","master/oftentry_ajax.php?dte="+datastring,true);
                          httpx.onreadystatechange=function(){
                          if(httpx.readyState==4 && httpx.status==200)
                           {
              
                               document.getElementById("viewdetails").innerHTML=httpx.responseText;
                            }
                        }	
      
                          httpx.send(null);
	}
     
</script>