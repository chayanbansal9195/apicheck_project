<?php

session_start();

date_default_timezone_set("Asia/Kolkata");

  include "class/class_url_routes.php";

  if(isset($_SESSION['LOGIN'])){

    //If API doesnot get any Link Redirect to its Home page page.

    if(isset($_REQUEST['link'])){

      $get_link = ($_REQUEST['link']!='')?$_REQUEST['link']:'000';

     

      //Taking New object of Page_url class.

      $url_get = new page_url();

      //send $get_link to Class "page_url" function  get_page().

     $row=$url_get->get_page($get_link);

    }else{

      

      header("Location:404.html");

      die();

    }

    //If not login throw a error message with Not Login.

  }else{

    header("location:index.php");

    die();

  }

  include('connect.php');

?>

<!DOCTYPE html>

<html lang="en">

  <!-- <?php

  //session_start();

   // if(!isset($_SESSION['LOGIN'])){

    //  echo "Access Denied. You must log in to view this page.";

      //die();

   // }else{

   // include('connect.php');

   //}

  ?> -->

  <!-- 

    JK AVTAR PROJECT

    THATAL PROJECT - 22/09/2016

    -->

<head>



    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">

    <meta name="author" content="">



    <title>KVK Phek - <?php echo $url_get->page_title; ?></title>

    <!-- FAVICON -->

    <link rel="shortcut icon" href="images/favicon.ico"> 

    <!-- Bootstrap Core CSS -->

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">



    <!-- MetisMenu CSS -->

    <link href="bootstrap/css/metisMenu.min.css" rel="stylesheet">



    <!-- Custom CSS -->

    <link href="bootstrap/css/sb-admin-2.css" rel="stylesheet">



    <!-- Custom Fonts -->

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS  -->

    <link href="bootstrap/custom.css" rel="stylesheet">

    <?php echo $url_get->css_require; ?>



    <!-- jQuery -->

    <script src="bootstrap/js/jquery-2.2.4.min.js"></script>

    

    <!-- Bootstrap Core JavaScript -->

    <script src="bootstrap/js/bootstrap.min.js"></script>



    <!-- Custom Theme JavaScript -->

    <script src="bootstrap/js/sb-admin-2.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->

    <style>

       @font-face {

      font-family: 'Montserrat';

      font-style: normal;

      font-weight: 400;

      src: local('Montserrat-Regular'), url(bootstrap/fonts/google_font.woff2) format('woff2');

      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;

    }

    @font-face {

    font-family: 'Dancing Script';

    font-style: normal;

    font-weight: 400;

    src: local('Dancing Script'), local('DancingScript'), url(bootstrap/fonts/dancing_script.woff2) format('woff2');

    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;

    }

      body{

        font-family: 'Montserrat', sans-serif;

      }

      .navbar-brand{

        font-family: 'Dancing Script', cursive;

        font-size: 25px;

      }

    </style>

</head>



<body>

<!-- For Busy or Loading Image -->

<!-- <div class="se-pre-con"></div> -->



    <div id="wrapper" >

        <!-- Navigation -->

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; ">

           

            <div class="navbar-header" >

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" >

                    <span class="sr-only">Toggle navigation</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                </button>

                 <img src="img/logo.png" height="40px" width="30px" style="max-width:100px; margin-top: 7px;">

                <a class="navbar-brand" href="?link=home">KVK Phek</a>

            </div>

            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right" >

                <span class="hidden-sm hidden-xs pull-left date-style"><?php 

                    $day = date("l");

                    $today = date("F j, Y ");

                    echo " <b>$day &nbsp; $today</b>"; ?>

                </span>

                <!-- /.dropdown -->

                <li class="dropdown" >

                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">

                        <i class="fa fa-user fa-fw"></i> <?php echo ucfirst($_SESSION['USER_NAME']);?> <i class="fa fa-caret-down"></i>

                    </a>

                    <ul class="dropdown-menu dropdown-user" >

                        <li><a href="?link=home"><i class="fa fa-user fa-fw"></i> <?php echo ucfirst($_SESSION['USER_NAME']);?></a>

                        </li>

                        <li><a href="?link=0CHNGPASS"><i class="fa fa-gear fa-fw"></i> Change Password</a>

                        </li>

                        <li class="divider"></li>

                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>

                        </li>

                    </ul>

                    <!-- /.dropdown-user -->

                </li>

                <!-- /.dropdown -->

            </ul>

            <!-- /.navbar-top-links --><!-- /.navbar-static-side -->

            

        </nav>

<?php

include("menu_bar.php");



?>

        <!-- Page Content -->

       <?php echo $url_get->page_cat_title; 

                          //echo $url_get->page_url;

                          include $url_get->page_url;

                        ?>

                    </div>

                    <!-- /.col-lg-12 -->

                </div>

                <!-- /.row -->

            </div>

            <!-- /.container-fluid -->

        </div>

        <!-- /#page-wrapper -->



    </div>

    <!-- /#wrapper -->









    <!-- Metis Menu Plugin JavaScript -->

    <script src="bootstrap/js/metisMenu.min.js"></script>



   <!--  <script src="bootstrap/js/modernizr.js"></script>

    <script src="bootstrap/js/loadImg.js"></script> -->

    <?php echo $url_get->js_require; ?>

    

    <script>

    $(document).ready(function(){

        $('[data-toggle="tooltip"]').tooltip();

        $('[data-toggle="popover"]').popover()

      $("#hide" ).click(function() {

     

        if ( $(this).attr( "value" ) == 'hide' ) {

         //alert('Button class is Hide');

         $('.sidebar').slideUp(500);

         $('#page-wrapper').css({'margin':'0 0 0 20px'});

         $(this).attr('value', 'show');

        } else {

          //alert('Button Class is Show');

         $('.sidebar').slideDown(500);

         $('#page-wrapper').css({'margin':'0 0 0 250px'});

          $(this).attr('value', 'hide');

        }

      });

    });

    </script>



</body>



</html>

