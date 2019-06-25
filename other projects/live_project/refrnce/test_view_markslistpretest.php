<?php

include('../mysql_connect.php');

$stateid=$_GET['statid'];

$extract1=explode('^',$stateid);

$cls=$extract1[0];

$sec=$extract1[1];

$sess=$extract1[2];

$exam=$extract1[3];



function valid($x,$y,$z){

	$flag=0;

	$select="SELECT * from `marks_entryboard` where regno='$x' AND sessions='$y' AND exm_type='$z' ";

	$result=mysql_query($select) ;

	$n=mysql_num_rows($result);

	return $n;

}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

if($sec!='')

{	

	$q23="SELECT * FROM student WHERE class='$cls' AND session='$sess' AND section='$sec' AND status='1' order by rollno asc";

	$r23=mysql_query($q23);

}

if($sec=='')

{

	$q32="SELECT * FROM student WHERE class='$cls' AND session='$sess' AND status='1' order by rollno asc";

	$r23=mysql_query($q32);

}

?>

<?php if($sec=='') { ?>

<!--<input class="btn btn-info input-sm" style="margin-top: 8px;" type="button" onclick="rankStudents()" name="" value="Calculate Rank" />--><?php } ?>

<a href="Joydeep_exam/printboardstudentmarksheet.php?cls=<?php echo $cls ?>&sec=<?php echo $sec; ?>&sess=<?php echo $sess; ?>&exam=<?php echo $exam ?>" target="_blank"><input type="button" class="btn btn-info input-sm" style="margin-top: 8px;" value="Print" /></a>



<br/><br/>

<table align="center" width="95%" cellpadding="5" cellspacing="2">



<tr style="text-transform:uppercase; font-size:small;">

<td align="center" colspan="19"><strong>PRAGJYOTIKA ENGLISH SCHOOL</strong></td>

</tr>

<tr style="text-transform:uppercase; font-size:small;">

<td align="center" colspan="19">Exam Name <strong>

<?php

$term=$exam;

if($term=='pt')

{

	echo "Pre Test";

}

else if($term=='ts')

{

	echo "Pre Final Assessment";

}

else if($term=='hs')

{

	echo "HSLC";

}



?></strong> &nbsp; Year <strong><?php echo $sess;?></strong></td>

</tr>

<tr style="text-transform:uppercase; font-size:small;">

<td align="center" colspan="19">Class <strong><?php echo $cls;?></strong> &nbsp; <?php if($sec!='') { ?>Section <strong><?php echo $sec;?></strong><?php } ?></td>

</tr>



</table>



<style type="text/css">

.rotate {

  text-align: center;

  white-space: nowrap;

  vertical-align: middle;

  width: 1.0em;

     -moz-transform: rotate(-90.0deg);  /* FF3.5+ */

       -o-transform: rotate(-90.0deg);  /* Opera 10.5 */

  -webkit-transform: rotate(-90.0deg);  /* Saf3.1+, Chrome */

             filter:  progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083);  /* IE6,IE7 */

         -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083)"; /* IE8 */

         margin-left: -10em;

         margin-right: -10em;

}

.rotate div {

     -moz-transform: rotate(-90.0deg);  /* FF3.5+ */

       -o-transform: rotate(-90.0deg);  /* Opera 10.5 */

  -webkit-transform: rotate(-90.0deg);  /* Saf3.1+, Chrome */

             filter:  progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083);  /* IE6,IE7 */

         -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083)"; /* IE8 */

         margin-left: -10em;

         margin-right: -10em;

}

</style>

<?php 





?>

<input type="hidden" name="cls" value="<?php echo $cls ?>" />

<input type="hidden" name="sec" value="<?php echo $sec ?>" />

<input type="hidden" name="sess"  value="<?php echo $sess ?>" />

<input type="hidden" name="exam"  value="<?php echo $exam ?>" />

<div style="overflow:auto">

<br/><table align="center" width="96%" border="1"  cellpadding="5" cellspacing="2" style=" border-collapse:collapse;font-size:10px;" id="myTable3">

<thead>

<tr style="text-transform:uppercase; font-size:small;">

  <td width="3%" rowspan="3" align="center">SN</td>

  <td width="1%" rowspan="3" align="center"></td>

  <td width="12%" rowspan="3" align="center">Roll</td>

  <td width="12%" rowspan="3" align="center">Reg NO</td>

  <td width="19%" rowspan="3" align="center">Name</td>

  <td width="19%" rowspan="3" align="center">Board Roll No.</td>

  <td colspan="16" align="center" style="font-size:11px">Subjects</td>

  

  <td width="12%" rowspan="3" align="center">TOTAL</td>

  <td width="3%" rowspan="3" align="center">PC</td>

  <td width="3%" rowspan="3" align="center">Rank</td>

<!--<td width="8%" rowspan="3" align="center">Remarks</td>

<td width="3%" rowspan="3" align="center">Div</td>-->

</tr>



<tr style="text-transform:uppercase; font-size:small;">

<td width="3%" colspan="2" align="center" style="font-size:11px">ENG</td>

<td align="center" style="font-size:11px">ASS</td>

<td width="4%" align="center" style="font-size:11px">HINDI</td>

  <td colspan="2" align="center" style="font-size:11px">SCI</td>

  <td colspan="2" align="center" style="font-size:11px">Maths</td>

  <td colspan="2" align="center" style="font-size:11px">SST</td>

    <td colspan="2" width="4%" align="center" style="font-size:11px">ADV MATH</td>

      <td colspan="2" align="center" style="font-size:11px">GEO</td>

  <td colspan="2" align="center" style="font-size:11px">COMP</td>

  

</tr>

<tr style="text-transform:uppercase; font-size:small;">

<td align="center" style="font-size:11px">Written</td>

<td align="center" style="font-size:11px">Oral</td>



<td align="center" style="font-size:11px">&nbsp;</td>



<td align="center" style="font-size:11px">&nbsp;</td>



<td width="9%" height="70" align="center" style="font-size:11px">Written</td>

<td width="4%" align="center" style="font-size:11px">Practical</td>



<td width="4%" align="center" style="font-size:11px">Written</td>

<td width="4%" align="center" style="font-size:11px">Practical</td>



<td width="4%" align="center" style="font-size:11px">Written</td>

<td width="4%" align="center" style="font-size:11px">Practical</td>



<td width="4%" align="center" style="font-size:11px">Written</td>

<td width="4%" align="center" style="font-size:11px">Practical</td>



<td width="3%" align="center" style="font-size:11px">Written</td>

<td width="3%" align="center" style="font-size:11px">Practical</td>



<td width="2%" align="center" style="font-size:11px">Written</td>

<td width="1%" align="center" style="font-size:11px">Practical</td>

</tr>



<tr style="text-transform:uppercase; font-size:small;">

<td colspan="6" align="center">Total Marks</td>

<td align="center">90</td>

<td align="center">10</td>

<td align="center">100</td>

<td align="center">100</td>

<td align="center">90</td>

<td align="center">10</td>

<td align="center">90</td>

<td align="center">10</td>

<td align="center">90</td>

<td align="center">10</td>

<td align="center">90</td>

<td align="center">10</td>

<td align="center"><?php if($exam=='pt') { echo "80"; } else { echo "90"; }?></td>

<td align="center"><?php if($exam=='pt') { echo "20"; } else { echo "10"; }?></td>

<td align="center">80</td>

<td align="center">20</td>

<td align="center" width="6%"><!--600--></td>

<td width="5%">&nbsp;</td>

<td width="5%">&nbsp;</td>

<!--<td width="5%">&nbsp;</td>

<td width="5%">&nbsp;</td>-->

<!--<td width="8%">&nbsp;</td>

--></tr>

</thead>
<?php

$c=0;

$total=0;

$percent=0;

while($row23=mysql_fetch_array($r23))

{

	$name=$row23['name'];	

	$rlno=$row23['rollno'];

	$rgno=$row23['regno'];

	$c++;

	$query1="select * from marks_entryboard where regno='$rgno' and class='$cls' and exm_type='$exam' and sessions='$sess'";

$result1=mysql_query($query1);

$count=mysql_num_rows($result1);





?>

<tr >



<td align="center" width="3%" style="text-transform:uppercase; font-size:12px;"><?php echo $c; ?></td>

<td align="center" style="text-transform:lowercase;"><input type="checkbox" class="checkstd" id=<?php echo $c; ?> <?php $n=valid($rgno,$sess,$exam);?> onclick="checkValid(this); hiLiteRowsClick();"/></td>

<td align="center" style="font-size:12px"><?php echo $rlno; ?></td>

<td align="center" width="6%" style="text-transform:uppercase; font-size:12px;"><?php echo $rgno; ?><input type="hidden" name="rgno[]" value="<?php echo $rgno; ?>" disabled /><input type="hidden" name="rno[]" value="<?php echo $rlno ?>" disabled /></td>

<td align="left" style=" color:<?php  if($n>0) echo 'red'; ?> "><input type="text" size="25" name="name[]" disabled value="<?php echo  $name;?>" style="border:none; background-color:inherit; text-transform:uppercase;" readonly="readonly" /></td>

<?php

$mathstotal=0;

$scitotal=0;

$comptotal=0;

$engtotal=0;

$geototal=0;



if($count>0)

	{

while($rows1=mysql_fetch_array($result1))

{

	$brno=$rows1['brollno'];

	$mathsw=$rows1['mathsw'];

	$mathsp=$rows1['mathsp'];

	$sstw=$rows1['sstw'];
	
	$sstp=$rows1['sstp'];

	$ass=$rows1['ass'];

	$sciw=$rows1['sciw'];

	$scip=$rows1['scip'];

	$compw=$rows1['compw'];

	$compp=$rows1['compp'];

	$hind=$rows1['hind'];

	$geow=$rows1['geow'];

	$geop=$rows1['geop'];

	$admathw=$rows1['admathw'];
	
	$admathp=$rows1['admathp'];

	$engw=$rows1['engw'];

	$engo=$rows1['engo'];

	$rank=$rows1['rank'];

	$remark=$rows1['remarks'];

	$division=$rows1['division'];
////////////////////////////////////////	


if($mathsw!=0)
{
if($mathsw==500)
{
	$mathsw=0;
}
else if($mathsw==1000)
{
	$mathsw='AB';
}
else
{
$mathsw=$mathsw;
}
}
else
{
	$mathsw='';
}
////

if($mathsp!=0)
{
if($mathsp==500)
{
	$mathsp=0;
}
else if($mathsp==1000)
{
	$mathsp='AB';
}
else
{
$mathsp=$mathsp;
}
}
else
{
	$mathsp='';
}
////

if($sstw!=0)
{
if($sstw==500)
{
	$sstw=0;
}
else if($sstw==1000)
{
	$sstw='AB';
}
else
{
$sstw=$sstw;
}
}
else
{
	$sstw='';
}
////

if($sstp!=0)
{
if($sstp==500)
{
	$sstp=0;
}
else if($sstp==1000)
{
	$sstp='AB';
}
else
{
$sstp=$sstp;
}
}
else
{
	$sstp='';
}
////

if($ass!=0)
{
if($ass==500)
{
	$ass=0;
}
else if($ass==1000)
{
	$ass='AB';
}
else
{
$ass=$ass;
}
}
else
{
	$ass='';
}
////

if($sciw!=0)
{
if($sciw==500)
{
	$sciw=0;
}
else if($sciw==1000)
{
	$sciw='AB';
}
else
{
$sciw=$sciw;
}
}
else
{
	$sciw='';
}
////

if($scip!=0)
{
if($scip==500)
{
	$scip=0;
}
else if($scip==1000)
{
	$scip='AB';
}
else
{
$scip=$scip;
}
}
else
{
	$scip='';
}
////

if($compw!=0)
{
if($compw==500)
{
	$compw=0;
}
else if($compw==1000)
{
	$compw='AB';
}
else
{
$compw=$compw;
}
}
else
{
	$compw='';
}
////

if($compp!=0)
{
if($compp==500)
{
	$compp=0;
}
else if($compp==1000)
{
	$compp='AB';
}
else
{
$compp=$compp;
}
}
else
{
	$compp='';
}
////

if($hind!=0)
{
if($hind==500)
{
	$hind=0;
}
else if($hind==1000)
{
	$hind='AB';
}
else
{
$hind=$hind;
}
}
else
{
	$hind='';
}
////

if($geow!=0)
{
if($geow==500)
{
	$geow=0;
}
else if($geow==1000)
{
	$geow='AB';
}
else
{
$geow=$geow;
}
}
else
{
	$geow='';
}
////

if($geop!=0)
{
if($geop==500)
{
	$geop=0;
}
else if($geop==1000)
{
	$geop='AB';
}
else
{
$geop=$geop;
}
}
else
{
	$geop='';
}
////

if($admathw!=0)
{
if($admathw==500)
{
	$admathw=0;
}
else if($admathw==1000)
{
	$admathw='AB';
}
else
{
$admathw=$admathw;
}
}
else
{
	$admathw='';
}
////

if($admathp!=0)
{
if($admathp==500)
{
	$admathp=0;
}
else if($admathp==1000)
{
	$admathp='AB';
}
else
{
$admathp=$admathp;
}
}
else
{
	$admathp='';
}
////

if($engw!=0)
{
if($engw==500)
{
	$engw=0;
}
else if($engw==1000)
{
	$engw='AB';
}
else
{
$engw=$engw;
}
}
else
{
	$engw='';
}
////

if($engo!=0)
{
if($engo==500)
{
	$engo=0;
}
else if($engo==1000)
{
	$engo='AB';
}
else
{
$engo=$engo;
}
}
else
{
	$engo='';
}
////
////////////////////////////////////////////////

/*	$mathstotal=$mathsw+$mathsp;

	$scitotal=$sciw+$scip;

	$comptotal=$compw+$compp;

	$geototal=$geow+$geop;

	$engtotal=$engw+$engo;

		

	$qry007="Update marks_entryboard set mathstotal='$mathstotal', scitotal='$scitotal', comptotal='$comptotal', geototal='$geototal', engtotal='$engtotal' where regno='$rgno' and class='$cls' and exm_type='$exam' and sessions='$sess'";

	$rslt007=mysql_query($qry007);
*/
?>



<td align="center" width="6%" style="text-transform:uppercase; font-size:12px;">



<input type="text" size="8" disabled name="brno[]" id="brno" value="<?php echo $brno; ?>" style="border:none; text-align:center"/>



</td>

<td align="center"><input type="text" size="3" disabled name="engw[]" id="engw" value="<?php echo $engw; ?>" onKeyUp="cal(this)" style="border:none; text-align:center; font-size:12px;"/></td>

<td align="center"><input type="text" size="3" disabled name="engo[]" id="engo" value="<?php echo $engo; ?>" onKeyUp="cal(this)" style="border:none; text-align:center; font-size:12px;"/></td>

<td><input type="text" size="3" disabled name="ass[]" id="ass" value="<?php echo $ass; ?>"  onKeyUp="cal(this)" style="border:none; text-align:center; font-size:12px;"/></td>

<td align="center"><input type="text" size="3" disabled name="hind[]" id="hind" value="<?php echo $hind; ?>" onKeyUp="cal(this)" style="border:none; text-align:center; font-size:12px;"/></td>

<td align="center"><input type="text" size="3" disabled name="sciw[]" id="sciw" value="<?php echo $sciw; ?>"  onKeyUp="cal(this)" style="border:none; text-align:center; font-size:12px;"/></td>

<td align="center"><input type="text" size="3" disabled name="scip[]" id="scip" value="<?php echo $scip; ?>" onKeyUp="cal(this)" style="border:none; text-align:center; font-size:12px;"/></td>

<td align="center"><input type="text" size="3" disabled name="mathsw[]" id="mathsw" value="<?php echo $mathsw; ?>"  onKeyUp="cal(this)" style="border:none; text-align:center; font-size:12px;"/></td>

<td align="center"><input type="text" size="3" disabled name="mathsp[]" id="mathsp" value="<?php echo $mathsp; ?>"  onKeyUp="cal(this)" style="border:none; text-align:center; font-size:12px;"/></td>

<td align="center"><input type="text" size="3" disabled name="sstw[]" id="sstw" value="<?php echo $sstw; ?>"  onKeyUp="cal(this)" style="border:none; text-align:center; font-size:12px;"/></td>

<td align="center"><input type="text" size="3" disabled name="sstp[]" id="sstp" value="<?php echo $sstp; ?>"  onKeyUp="cal(this)" style="border:none; text-align:center; font-size:12px;"/></td>

<td align="center"><input type="text" size="3" disabled name="admathw[]" id="admathw" value="<?php echo $admathw; ?>" onKeyUp="cal(this)" style="border:none; text-align:center; font-size:12px;"/></td>

<td align="center"><input type="text" size="3" disabled name="admathp[]" id="admathp" value="<?php echo $admathp; ?>" onKeyUp="cal(this)" style="border:none; text-align:center; font-size:12px;"/></td>

<td align="center"><input type="text" size="3" disabled name="geow[]" id="geow" value="<?php echo $geow; ?>" onKeyUp="cal(this)" style="border:none; text-align:center; font-size:12px;"/></td>

<td align="center"><input type="text" size="3" disabled name="geop[]" id="geop" value="<?php echo $geop; ?>" onKeyUp="cal(this)" style="border:none; text-align:center; font-size:12px;"/></td>

<td align="center"><input type="text" size="3" disabled name="compw[]" id="compw" value="<?php echo $compw; ?>" onKeyUp="cal(this)" style="border:none; text-align:center; font-size:12px;"/></td>

<td align="center"><input type="text" size="3" disabled name="compp[]" id="compp" value="<?php echo $compp; ?>" onKeyUp="cal(this)" style="border:none; text-align:center; font-size:12px;"/></td>

<?php

$total=$engw+$engo+$ass+$hind+$sciw+$scip+$mathsw+$mathsp+$sstw+$sstp+$admathw+$admathp+$geow+$geop+$compw+$compp;

$q007="Update marks_entryboard set total='$total' where regno='$rgno' and class='$cls' and exm_type='$exam' and sessions='$sess'";

$r007=mysql_query($q007);

?>

<td align="center" width="6%"><input type="text" size="3" disabled name="total[]" id="total" value="<?php echo $total; ?>" style="border:none; text-align:center; font-size:12px;" readonly="readonly"/>

</td>

<td align="center" width="5%" style="font-size:12px;">

<?php

$percent=round($total/600*100,2);

echo $percent;

?>

</td>

<td align="center" width="5%"><input type="text" size="3" disabled name="rank[]" id="rank" value="<?php echo $rank; ?>" style="border:none; text-align:center; font-size:12px;" /></td>

<!--<td align="center" width="5%"><input type="text" size="3" disabled name="remark[]" id="remark" value="<?php echo $remark; ?>" onKeyUp="cal(this)" style="border:none; text-align:center; font-size:12px;"/></td>

<td align="center" width="5%"><input type="text" size="3" disabled name="division[]" id="division" value="<?php echo $division; ?>" onKeyUp="cal(this)" style="border:none; text-align:center; font-size:12px;"/></td>-->

<?php

}

	}

	else

	{

		?>

        <td align="center" width="6%" style="text-transform:uppercase; font-size:12px;">

        <?php

$query007="select * from marks_entryboard where regno='$rgno' and class='$cls' and sessions='$sess'";

$result007=mysql_query($query007);

$count007=mysql_num_rows($result007);

if($count007>0)

{

	while($row007=mysql_fetch_array($result007))

	{

		$brno=$row007['brollno'];

	}

?>

        <input type="text" size="8" disabled name="brno[]" id="brno" value="<?php echo $brno; ?>" style="border:none; text-align:center;"/>

        <?php

}

else

{

		?>

        <input type="text" size="8" disabled name="brno[]" id="brno" value="" style="border:none"/>

        <?php

}

		?>

        

        </td>

        <td align="center"><input type="text" size="3" disabled name="engw[]" id="engw" value="" onKeyUp="cal(this)" style="border:none"/></td>

<td align="center"><input type="text" size="3" disabled name="engo[]" id="engo" value="" onKeyUp="cal(this)" style="border:none"/></td>

<td><input type="text" size="3" disabled name="ass[]" id="ass" value=""  onKeyUp="cal(this)" style="border:none"/></td>

<td align="center"><input type="text" size="3" disabled name="hind[]" id="hind" value="" onKeyUp="cal(this)" style="border:none"/></td>

<td align="center"><input type="text" size="3" disabled name="sciw[]" id="sciw" value=""  onKeyUp="cal(this)" style="border:none"/></td>

<td align="center"><input type="text" size="3" disabled name="scip[]" id="scip" value="" onKeyUp="cal(this)" style="border:none"/></td>

<td align="center"><input type="text" size="3" disabled name="mathsw[]" id="mathsw" value=""  onKeyUp="cal(this)" style="border:none"/></td>

<td align="center"><input type="text" size="3" disabled name="mathsp[]" id="mathsp" value=""  onKeyUp="cal(this)" style="border:none"/></td>

<td align="center"><input type="text" size="3" disabled name="sstw[]" id="sst" value=""  onKeyUp="cal(this)" style="border:none"/></td>

<td align="center"><input type="text" size="3" disabled name="sstp[]" id="sstw" value=""  onKeyUp="cal(this)" style="border:none"/></td>

<td align="center"><input type="text" size="3" disabled name="admathw[]" id="admathw" value="" onKeyUp="cal(this)" style="border:none"/></td>

<td align="center"><input type="text" size="3" disabled name="admathp[]" id="admathp" value="" onKeyUp="cal(this)" style="border:none"/></td>

<td align="center"><input type="text" size="3" disabled name="geow[]" id="geow" value="" onKeyUp="cal(this)" style="border:none"/></td>

<td align="center"><input type="text" size="3" disabled name="geop[]" id="geop" value="" onKeyUp="cal(this)" style="border:none"/></td>

<td align="center"><input type="text" size="3" disabled name="compw[]" id="compw" value="" onKeyUp="cal(this)" style="border:none"/></td>

<td align="center"><input type="text" size="3" disabled name="compp[]" id="compp" value="" onKeyUp="cal(this)" style="border:none"/></td>

<td align="center" width="6%"><input type="text" size="3" disabled name="total[]" id="total" value="" style="background-color:inherit; border:none"/>

</td>

<td align="center" width="5%">&nbsp;</td>

<td align="center" width="5%">&nbsp;</td>

<!--<td align="center" width="5%"><input type="text" size="3" disabled name="remark[]" id="remark" value="" onKeyUp="cal(this)" style="border:none"/></td>

<td align="center" width="5%"><input type="text" size="3" disabled name="division[]" id="division" value="" onKeyUp="cal(this)" style="border:none"/></td>-->

<?php	

    }

?>

</tr>

<?php

}

?>







</table>

</div>

<input type="submit" class="btn btn-default" value="Submit" />