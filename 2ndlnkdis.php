
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Multidata Display</title>
  
</head>
<link href="css/jquery.dataTables.min.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>
<body onLoad="datatable();" >



  <div class="panel panel-default">
    <div class="panel-heading">
      
    </div>
    <div class="panel-body">
      
    </div>
  </div>

  <?php
  include "dbConfig.php";
  $sql = mysqli_query($con, "select * from multidata");

  ?>
 <table border="5px" class="table table-hover table-light bg-secondary container" style="margin-top:30px;" >
<tr>
  <td>
  <select id="classname">
  <option value="all">All</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    
  </select>
  <button onClick="viewStudents();">View</button>
  </td>
  </tr>
 </table>
<div id="viewdetails">
  <table border="5px" class="table table-hover table-light bg-secondary container" style="margin-top:30px;" id="chayan">
  
 
    <thead>
      <tr>
        <th >Sl No</th>
        <th >Name</th>
        <th >Class</th>
        <th >Roll No</th>
      </tr>
    </thead>
    <form action="multidatadel.php" method="post">
      <tbody>

        <?php
        $serial = 0;
        while ($dta = mysqli_fetch_row($sql)) {
          $serial++;
          ?>
          <tr>
            <td><input  type="checkbox" name="check[]" id="chck" value="<?php echo $dta['0'] ?>" onclick="changeve(this);"> <?php echo $serial ?></td>
            <td><input class="form-control" type="text" name="name[]" id="name<?php echo $serial ?>" value="<?php echo $dta['1'] ?>" disabled></td>
            <td><input class="form-control" type="text" name="class[]" id="class<?php echo $serial ?>" value="<?php echo $dta['2'] ?>" disabled></td>
            <td><input class="form-control" type="text" name="rollno[]" id="rollno<?php echo $serial ?>" value="<?php echo $dta['3'] ?>" disabled></td>

          </tr>
        </tbody>
      <?php } ?>
      <tr>
        <td colspan="4" align="center"><button type="submit" name="upd" class="btn btn-warning">Update</button>&nbsp;<button type="submit" name="del" class="btn btn-danger">Delete</button></td>
      </tr>
    </form>
  </table>
</div>
  <script>
    function changeve(that) {

        var lnth=$('#chck:checked:not(:disabled)');
        if(lnth.length>10){

			alert('You have exceed the maximum limit of 25 entry. Please Submit the Checked Data ')

			$(that).prop('checked',false);

			return false;

        }
        	if($(that).is(":checked")){

			//console.log('checked');

			$(that).parents('tr').find('input').not(that).prop('disabled',false);

		}else{

			$(that).parents('tr').find('input').not(that).prop('disabled',true);

		}

	}



function viewStudents(){
  var className=document.getElementById('classname').value;
    //console.log(a);
    var httpx;


    if(window.XMLHttpRequest){
      httpx=new XMLHttpRequest();

    }
    else{
      httpx=new ActiveXObject("Microsoft.XMLHTTP");

    }
    
       httpx.open("GET","2ndlnkdis_Ajax.php?carrylink="+className,true);//ajax engine send an asynchronous call to the server via dis_ajax.php with state_id
       httpx.onreadystatechange=function(){
        if(httpx.readyState==4 && httpx.status==200){

        document.getElementById("viewdetails").innerHTML=httpx.responseText;//place the data in the specified position i.e., in table data dist 
        datatable()

      }

    } 
    httpx.send(null);
    


}


  </script>

</body>

</html>