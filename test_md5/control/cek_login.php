<?php
session_start();

$logged_in = false;

if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
	header('location:index.php');
}
else{
	$logged_in = true;
}


?>