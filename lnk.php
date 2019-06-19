
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>multi data</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
<script type="text/javascript">
  function addrow() {
  var table = document.getElementById("mytable");
  var rowno = parseInt(document.getElementById("norows").value);
  var erow = parseInt(document.getElementById("totalrow").value);
  for (var i = 1; i <= rowno; i++)
  {
  var trow = erow + i;
  var row = table.insertRow(trow);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);

  cell1.innerHTML = '<input class="form-control" type="name" name="name[]" placeholder="name">';
  cell2.innerHTML = '<input type="number" class="form-control" name="class[]" placeholder="class">';
  cell3.innerHTML = '<input type="number" class="form-control" name="rollno[]" placeholder="roll number" id="">';
  }
  document.getElementById("totalrow").value = trow;
}
</script>
    <div class="container" align="center" >
    <form action="lnkaction.php" method="post" >
    <input type="hidden" name="totalrow" id="totalrow" value="4" />
    <table width="95%" align="center"  border="0" style="border-collapse: collapse; font-size: 14px;" name="tble" >
<tr>
<td align="right" width="100%">
Add&nbsp; <input type="text" id="norows" maxlength="3" style="width:60px; text-align:center;" value="1" onfocus="this.select();" />&nbsp; Row(s) 
&nbsp;<button type="button" style="border-radius:30px;" class="btn btn-info btn-sm" onclick="addrow();">Go</button>
</td>
</tr>
</table>

        <table border="5px" id="mytable" class="table table-light bg-dark" style="color:yellow;font-size:20px;margin-top:-100px">
            <tr>
                <th class="text-center">
                    Name
                </th>
                <th class="text-center">
                    Class
                </th>
                <th class="text-center">
                    rollno
                </th>
            </tr><br>
            
            <tr>
                <td>
                    <input class="form-control" type="name" name="name[]" placeholder="name" onchange="evechng(1);">
                </td>
                <td>
                    <input type="number" class="form-control" name="class[]" placeholder="class">
                </td>
                <td>
                    <input type="number" class="form-control" name="rollno[]" placeholder="roll number" id="">
                </td>
                <input type="hidden" id="row1" name="row1" value="1" disabled> 
            </tr><br>
            <tr>
                <td>
                    <input class="form-control" type="name" name="name[]" placeholder="name">
                </td>
                <td>
                    <input type="number" class="form-control" name="class[]" placeholder="class">
                </td>
                <td>
                    <input type="number" class="form-control" name="rollno[]" placeholder="roll number" id="">
                </td>
            </tr> <br>
            <tr>
                <td>
                    <input class="form-control" type="name" name="name[]" placeholder="name">
                </td>
                <td>
                    <input type="number" class="form-control" name="class[]" placeholder="class">
                </td>
                <td>
                    <input type="number" class="form-control" name="rollno[]" placeholder="roll number" id="">
                </td>
            </tr> <br>
            <tr>
                <td>
                    <input class="form-control" type="name" name="name[]" placeholder="name">
                </td>
                <td>
                    <input type="number" class="form-control" name="class[]" placeholder="class">
                </td>
                <td>
                    <input type="number" class="form-control" name="rollno[]" placeholder="roll number" id="">
                </td>
            </tr> <br>
            <tr>
                <td colspan="3" align="center"><button type="submit" class="btn btn-success">Submit</button></td>
                
            </tr>
        </table>
    </form>
</div>

    <script src="" async defer></script>
</body>

</html>