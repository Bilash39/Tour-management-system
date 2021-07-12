
<?php 
session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sign-up</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="css/fontawesome.min.css">


</head>
<body>

<div class="container">
<div class="row">
<div class="col-md-12">


	<?php 
if (isset($_SESSION['err_signup'])) {?>

<div class="alert alert-danger">
	password and confirm password din not match!!
</div>



<?php }  ?>

	<h1 class="text-center text-danger">Admin Signup form</h1>
	<form action="adminconfirm_signup.php" method="POST">
		<input class="form-control mt-3" type="text" name="name" placeholder="Name">
		<input class="form-control mt-3" type="email" name="email" placeholder="email">
		<input class="form-control mt-3" type="password" name="password" placeholder="password">
		<input class="form-control mt-3" type="password" name="cpassword" placeholder="confirm password">
		<input class="btn btn-success mt-3" type="submit" value= "signup">
	</form>
	<br><br>
		
</div>
</div>
</div>



<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="bootstrap.min.js"></script>
<?php 
unset($_SESSION['err_signup']);


 ?>


</body>
</html>
