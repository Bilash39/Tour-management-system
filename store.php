<?php 

$conn= mysqli_connect('localhost','root','','batch-478');

session_start();

$name= $_POST['name'];
$email= $_POST['email'];
$address= $_POST['address'];


$valid= "SELECT* FROM registration WHERE email='$email'";
$result= mysqli_query($conn,$valid);
$rowcount=mysqli_num_rows($result);
if ($rowcount==1) {
	header('location: index.php');
	$_SESSION['er_message']="true";
}
else{

$sql="INSERT INTO registration VALUES ('','$name','$email','$address')";
if (mysqli_query($conn,$sql)) {
	header('location: index.php');


	$_SESSION['message']="true";
}


}
 ?>






