<?php 

$conn= mysqli_connect('localhost','root','','batch-478');
session_start();

$name= $_POST['name'];
$email= $_POST['email'];
$place= $_POST['place'];
$package= $_POST['package'];


$sql="INSERT INTO booknow VALUES ('','$name','$email','$place','$package')";
if (mysqli_query($conn,$sql)) {
	header('location: index.php');

$_SESSION['booking']="true";

}



 ?>






