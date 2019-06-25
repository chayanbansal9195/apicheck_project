<?php
include('connect.php');
$smail=$_GET['smail'];
		$query007="Select * from staff where email='$smail'";
		$result007=mysql_query($query007);
		while($row007=mysql_fetch_array($result007))
{
	$name=$row007['name'];
	$qualification=$row007['qualification'];
	$designation=$row007['designation'];
	$photo=$row007['photo'];
	$email=$row007['email'];
}
		?>
          <table width="90%" border="0" align="right" style="color:black;">
          <tr bgcolor="#c3f4c8">
          <td width="49%" rowspan="3" style="border-right-style:hidden;"><img src="staff_photo/<?php echo $photo ?>" style="height:100px;" width="63" /></td>
          <td width="51%" valign="middle">&nbsp;</td>
          </tr>
          <tr bgcolor="#c3f4c8">
            <td valign="middle"><strong><?php echo $name; ?></strong></td>
          </tr>
          <tr bgcolor="#c3f4c8">
            <td valign="middle">&nbsp;</td>
          </tr>
          
          <tr bgcolor="#FFFFFF">
          <td height="39" style="border-right-style:hidden;">Qualification</td>
          <td><?php echo $qualification; ?></td>
          </tr>
          
          <tr bgcolor="#c3f4c8">
          <td height="39" style="border-right-style:hidden;">Designation</td>
          <td><?php echo $designation; ?></td>
          </tr>
          
          <tr bgcolor="#FFFFFF">
          <td height="39" style="border-right-style:hidden;">E-mail</td>
          <td><?php echo $email; ?></td>
          </tr>
          </table>
