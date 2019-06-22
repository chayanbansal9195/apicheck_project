

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Multidata Display</title>
  
</head>

<body >
  <div class="panel panel-default">
    <div class="panel-heading">
      
    </div>
    <div class="panel-body">
     <?php
	if (isset($_SESSION['HOUSE_suc'])) {
                 //echo "<span class='alert alert-success'>".$success."</span>";
                echo '<div class = "alert alert-success alert-dismissable">
                    <button type = "button" class = "close" data-dismiss = "alert" aria-hidden = "true">
                    &times;
                    </button>'.$_SESSION['HOUSE_suc'].'
                    </div>';
                unset($_SESSION['HOUSE_suc']);
                }

  include "dbConfig.php";
  $sql = mysqli_query($con, "select * from multidata");

  ?>
  
  <table border="5px" class="table table-hover table-light bg-secondary container" style="margin-top:30px;">
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
            <td><input  type="checkbox" name="check[]" id="chck<?php echo $serial ?>" value="<?php echo $dta['0'] ?>" onclick="changeve(<?php echo $serial ?>);"> <?php echo $serial ?></td>
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
  </div>
  <script>
    function changeve(n) {

      var chcknme = document.getElementById('chck' + n).checked;

      if (chcknme) {
        document.getElementById('name' + n).disabled = false;
        document.getElementById('class' + n).disabled = false;
        document.getElementById('rollno' + n).disabled = false;
      } else {
        document.getElementById('name' + n).disabled = true;
        document.getElementById('class' + n).disabled = true;
        document.getElementById('rollno' + n).disabled = true;
      }
    }
  </script>

</body>

</html>