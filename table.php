
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
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="ckeditor/plugins/lite/lite-interface.js"></script>
<form method="post" action="ckeditaction.php">
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
                    <input class="form-control" type="text" name="title" placeholder="title" >
                </td>
                </tr><tr>
                <td>
                   <textarea id="dtls" name="dtls" cols="30" rows="10"></textarea>
                </td>
            </tr><br>
            
            <tr>
                <td colspan="3" align="center"><button type="submit" class="btn btn-success">Submit</button></td>
                
            </tr>
        </table>
    </form>


    <script src="" async defer></script>
</body>
<script type="text/javascript">
CKEDITOR.replace('dtls',{
		width: "900px",
        height: "300px"
        }
	);
	
		
    </script>
</html>