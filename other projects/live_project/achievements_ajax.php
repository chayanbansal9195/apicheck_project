<?php
include('connect.php');
$year=$_GET['year'];
		$query007="Select * from achievements where date Like '$year%'";
		$result007=mysql_query($query007);
		$count007=mysql_num_rows($result007);
		if($count007>0)
		{
		?>
          <table width="90%" style="border:hidden;" border="0">
          <tr style="background-color:#1b4f1f; color:white;">
          <td width="55%" style="border-right-style:hidden;">Heading</td>
          <td width="45%">File</td>
          </tr>
<?php
$slno=0;
$c2='#c3f4c8';
$c1='#FFFFFF';
$c=$c1;
while($row007=mysql_fetch_array($result007))
{
	$heading=$row007['heading'];
	$doc_file=$row007['doc_file'];
?>
<tr style="font-size:12px;" bgcolor="<?php echo $c; ?>">
<td style="text-transform:uppercase; border-right-style:hidden;"><?php echo $heading; ?></td>
<td><a href="upload_docs/<?php echo $doc_file; ?>" target="_blank"><img src="images/pdf.gif" width="20" height="21"></a></td>
</tr>
<?php
if($c==$c1)
	$c=$c2;
	else
	$c=$c1;
}
?>
          </table>
          <?php
		}
		else
		{
			echo "<center><span style='color:#1b4f1f; font-size:16px;'>No Details Found...</span></center>";
		}
		  ?>