
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
    <div class="container" align="center" >
    <form action="lnkaction.php" method="post" >
        <table border="5px" class="table table-light bg-dark" style="color:yellow;font-size:20px;margin-top:-100px">
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