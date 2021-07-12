
<?php 
session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Log-in</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="css/fontawesome.min.css">


</head>
<body>

<div class="container">
<div class="row">
<div class="col-md-12">

<?php 
if (isset($_SESSION['err_login'])) {?>

<div class="alert alert-danger">
	Email and Password did not match!!
</div>



<?php }  ?>

	<h1 class="text-center text-info"> Admin Login form</h1>
	<form action="adminlogin_confirm.php" method="POST">
		
		<input class="form-control mt-3" type="email" name="email" placeholder="Email">
		<input class="form-control mt-3" type="password" name="password" placeholder="Password">
		<input class="btn btn-success mt-3" type="submit" value= "login">
	</form>
	<br><br>
		
</div>
</div>
</div>



<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="bootstrap.min.js"></script>
<?php 
unset($_SESSION['err_login']);


 ?>

</body>
</html>
