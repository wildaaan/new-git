<!DOCTYPE html>
<?php
include 'control/config.php';
include 'control/cek_login.php';
?>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
</head>
<body>

<div class="container">



		<div class="page-header">
		<a href="control/log_out.php" class="btn btn-danger">Log Out</a>
		</div>
<?php
$username = $_SESSION['username'];

$sql = mysql_query("select * from user where username='$username'");

$data = mysql_fetch_array($sql);
?>


<div class="alert alert-info">
<h3 class="text-muted">Hello : <?php echo $data['username'];?></h3>
</div>



</div>

</body>
</html>