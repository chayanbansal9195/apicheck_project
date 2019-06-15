<?php
extract($_POST);
include('dbConfig.php');
$i = 0;
foreach ($name as $val) {
    if ($val != '') {

        $sql=mysqli_query($con,"select * from multidata where name = '$val'");
        if($data=mysql_num_rows($sql)>0)
        {
            continue;
        }
        else{
			
			if($class[$i]=='' && $rollno[$i]==''){

			}
        $query = "Insert into multidata(name, class, rollno) value('$val','$class[$i]','$rollno[$i]')";
        $result = mysqli_query($con, $query);
        
        }
    }
	$i++;
}
header('location:api.php?link=lnkdis');
?>