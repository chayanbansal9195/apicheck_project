<?php
extract($_GET);
include('connect.php');
$flag=0;
$q23="select * from staff where id='$serial'";
$r23=mysql_query($q23) or die();
while($row23=mysql_fetch_array($r23))
{
	$name=$row23['name'];
	$qualification=$row23['qualification'];
	$designation=$row23['designation'];
	$address=$row23['address'];
	$phone_no=$row23['phone_no'];
	$email=$row23['email'];
	$photo=$row23['photo'];
}

?>
<div style='color:#365A52;font-size:20px;font-weight:bold;'><br/><center>Staff Details</center></div>
<body background="images/32.jpg">
<br>
    <fieldset style=" border-radius:5px;">
<legend  ><?php if($photo==''){ echo "<img src='images/profile.png' width='30' height='30'/>"; } else { echo "<img src='staff_photo/$photo' height='100' width='100'/>"; } ?></legend>
        <!--<table width="1148" height="1020" align="center" style="background: rgba(0,0,0,0.08);">-->
        <table width="90%" align="center">
            <tr>
                <td width="203"><strong>Name:</strong></td>
                <td width="449"><?php echo $name; ?></td>

                <td width="176" height="57"><strong>Qualification:</strong></td>
                <td width="307" height="57"><?php echo $qualification; ?></td>
    </tr>
    <tr>
        <td width="203"><strong>Designation:</strong></td>
        <td width="449">
            <?php echo $designation; ?>
      </td>
      <td width="176" height="57"><strong>Address:</strong></td> 
      <td width="307" height="57"><?php echo $address; ?></td> 
</tr>
<tr>
    <td width="203"><strong>Phone No.:</strong></td>
    <td width="449"><?php echo $phone_no; ?></td>

    <td width="176" height="57"><strong>E-Mail ID:</strong></td> 
    <td width="307" height="57"><?php echo $email; ?></td> 
</tr>
</table>
</fieldset>
</body>