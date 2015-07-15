<?php
session_start();
include 'config.php';

$username = mysql_real_escape_string($_GET['username']);
$password = mysql_real_escape_string($_GET['password']);

$username = md5($username);
$password = md5($password);


$sql = "SELECT id FROM user WHERE username='$username' and password='$password'";

$q = mysql_query($sql);

$data = mysql_num_rows($q);



if($data == 1){
	$_SESSION['username'] = $username;
	header('location:../home.php');
}
else{
	header('location:error.php');
}
?>