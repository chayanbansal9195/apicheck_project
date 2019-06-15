<?php
extract ($_POST);

include "dbConfig.php";

// delete data

if(isset($_POST['del']))
{
foreach($check as $val){

    $sql = mysqli_query($con,"delete from multidata where slno='$val'");

}
header ('location:api.php?link=lnkdis');
}

// update data

if(isset($_POST['upd']))
{
    $i=0;
    foreach($check as $val){
      $query="update multidata set name='$name[$i]', class='$class[$i]', rollno = '$rollno[$i]' where slno='$val'";
        $sql = mysqli_query($con,$query);
    $i++;
    }
    header ('location:api.php?link=lnkdis');
}
