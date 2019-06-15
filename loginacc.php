<?php
session_start();
if(isset($_SESSION['uid']) && $_SESSION['uid']!=""){
    echo "<script>alert('Already Login.');window.location='api.php?link=000';</script>";
    die();
}


include ('dbConfig.php');
if(isset($_POST['login'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $query = "Select * from admin where user ='$user' and pass = '$pass'";
    $run = mysqli_query($con,$query);
    $row = mysqli_num_rows($run);
    if($row<1){
        ?>
            <script>alert("Username or password not match!!")</script>
             <script>window.open('index.php','_self');</script> 
        <?php
    }
    else{
        // cookies addition
        if(!empty($_POST['check']))
				{
					setcookie("usrname",$user,time()+ (10 * 365 * 24 * 60 * 60));
					setcookie("psw",$pass,time()+ (10 * 365 * 24 * 60 * 60));
				}
				else
				{
					if(isset($_COOKIE['usrname']))
					{
						setcookie("usrname","");
					}
					if(isset($_COOKIE['psw']))
					{
						setcookie("psw","");
					}
				}


        $data = mysqli_fetch_assoc($run);
        $id = $data['user'];
        $_SESSION['uid']=$id;
       header('location:api.php?link=000');
    }
}
?>