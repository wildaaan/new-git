<!DOCTYPE html>
<html ng-app>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
<script src="dist/js/bootstrap.min.js" type="text/javascript"></script>

</head>
<body>

		<div class="container">


<div class="page-header">
<h3 class="text-danger">Hello Developere</h3>
</div>

<div class="col-md-4 col-md-offset-4">

		<form action="control/reg.php" method="post">
				
		<input type="hidden" name="id">

		<div class="form-group">
		<label>Email</label>
		<input type="email" name="email" class="form-control input-md" ng-model="mail" placeholder="Masukan Email" required>
		</div>


				<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control input-md" placeholder="Masukan Username"  requried>
				</div>

				<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control input-md" placeholder="Masukan Password" required>
				</div>


				<div align="center">
				<input type="submit" class="btn btn-primary" value="Login"> 
				</div>
		</form>


</div>

</div>








</body>
</html>