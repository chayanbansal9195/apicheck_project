<?php
session_start();
if (isset($_SESSION['LOGIN'])){
	
	unset ($_SESSION['LOGIN']);
	
}
header('location: index.php');
?>