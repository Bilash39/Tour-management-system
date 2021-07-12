<?php 

$conn= mysqli_connect('localhost','root','','batch-478');

session_start();

$email= $_POST['email'];
$password= $_POST['password'];
$password= md5($password);

$sql= "SELECT* FROM adminreg WHERE email= '$email'  AND password= '$password' "; 
$result= mysqli_query($conn,$sql);
$rowcount=mysqli_num_rows($result);
if ($rowcount==1) {
	header('location: display1.php');
}


else{
    header('location:login.php');

	$_SESSION['err_login']="true";
}

 ?>






