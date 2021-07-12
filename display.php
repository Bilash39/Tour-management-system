

<?php 

$conn= mysqli_connect('localhost','root','','batch-478');
session_start();

$sql= "SELECT* FROM registration";
$result=mysqli_query($conn,$sql);


 ?>










<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Display page</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="css/fontawesome.min.css">


</head>
<body>





<div class="container">
<div class="row">
<div class="col-md-12">
	<?php 
if (isset($_SESSION['delete'])) {?>

<div class="alert alert-danger">
	Data delete successfully!!
</div>



<?php }  ?>
	<h1 class="text-center text-info">Display data</h1>
       <table class="table table-bordered table-striped">
       	<tr>
       		<th>SL no</th>
       		<th>Name</th>
       		<th>Email</th>
       		<th>Address</th>
       		<th>Action</th>

       	</tr>


          <?php 
          while ($row=mysqli_fetch_assoc($result)) {?>
          
       


        <tr>
       		<td><?php echo $row['id']; ?></td>
       		<td><?php echo $row['name']; ?></td>
       		<td><?php echo $row['email']; ?></td>
       		<td><?php echo $row['address']; ?></td>
       		<td>
       			<a class="btn btn-info mr-2" href="">view</a>
       			<a class="btn btn-success mr-2" href="">edit</a>
       			<a class="btn btn-danger mr-2" onclick="return confirm('Are you sure?')" href="delete.php ?id=<?=$row['id']?>">delete</a>



       		</td>
       	</tr>
      <?php } ?>     

       </table>

	<a class="btn btn-info" href="index.php">Back to form</a>
</div>
</div>
</div>



<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="bootstrap.min.js"></script>

<?php 
unset($_SESSION['delete']);


 ?>

</body>
</html>
