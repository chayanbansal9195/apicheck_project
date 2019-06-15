<?php
$classname=$_GET['carrylink'];
include('dbConfig.php');
if($classname=='all'){
	$sql = mysqli_query($con, "select * from multidata");
	}
	else
$sql = mysqli_query($con, "select * from multidata where class='$classname'");

?>

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