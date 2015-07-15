<?php

session_start();
include 'config.php';

$id = $_POST['id'];
$email = $_POST['email'];
$username = $_POST['username'];
$password =$_POST['password'];

$username = md5($password);
$password = md5($password);



$sql = mysql_query("insert into user values('$id','$email','$username','$password')");

if($sql){
	echo"register success,if page not redirect , click <a href='../index.php'>HERE</a>";
	echo"<meta http-equiv='refresh' content='4; url=../index.php'>";
}

?>