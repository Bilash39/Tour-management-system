
<?php 
session_start();

 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>php-practice</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="css/fontawesome.min.css">
	<link rel="stylesheet" href="css/style.css">



</head>
<body>





<div class="container-fluid">
<div class="row">
<div class="col-md-12">

<?php 
if (isset($_SESSION['message'])) {?>

<div class="alert alert-success">
	Data insert succesfully!!
</div>

<?php }  ?>
<?php 
if (isset($_SESSION['booking'])) {?>

<div class="alert alert-success">
	You booked the package succesfully!! We will reach you via email very soon...
</div>

<?php }  ?>




<?php 
if (isset($_SESSION['er_message'])) {?>

<div class="alert alert-warning">
	Email already exist!! Try another one
</div>



<?php }  ?>

<?php 
if (isset($_SESSION['signup'])) {?>

<div class="alert alert-success">
	Signup successful!!
</div>



<?php }  ?>
<div class="navbar navbar-expand-sm bg-dark navbar-dark">
	<a href="index.php">Travel.com</a>

					        <!-- <a class="nav-link navbar-expand-sm bg-dark navbar-dark" href="index.php">Travel.com</a> -->
					         <ul class="navbar-nav ml-auto">
						        <li class="nav-item"><a class="nav-link" href="signup.php">User Registration</a> </li>

						          <li class="nav-item"><a class="nav-link" href="login.php">User login</a> </li>
						          <li class="nav-item"><a class="nav-link" href="adminsignup.php">Admin Registration</a> </li>
						          <li class="nav-item"><a class="nav-link" href="adminlogin.php">Admin login</a> </li>
						           <li class="nav-item"><a class="nav-link" href="login.php">Packages</a> </li>

						             <!--  <li class="nav-item dropdown">
							            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">District</a> 

						 <div class="dropdown-menu bg-success">
								<a class="dropdown-item" href="">Magura</a>
								<a class="dropdown-item" href="">Jashore</a>
								<a class="dropdown-item" href="">Khulna</a>
								<a class="dropdown-item" href="">Dhaka</a>
								<a class="dropdown-item" href="">Jhenaidah</a>
						</div>

						</li> -->

						<li class="nav-item"><a class="nav-link" href="">Contact us</a> </li>
					  </ul>
					  </div>
                         </div>
                           </div>

<div class="container-fluid">
<div class="row">
<div class="col-md-12">
		<div class="header ">
		<h1>BETTER LIFE, BETTER JOURNEY</h1>
		<p>Adventure start from <span>Travel.com</span></p>

        


	</div>


	<div class="container_left">
		<div class="title_heading">
			<img src="image/sajek.jpg" alt="">
			<h1>Sajek valley</h1>
			<h3> 
<a class="login.php" href="">See packages</a>
			</h3>
			
			<!-- <h3>Title description, <span>April 7, 2014</span> </h3> -->
			<p>Sajek Valley is an emerging tourist spot in Bangladesh situated among the hills of the Kasalong range of mountains in Sajek union, Baghaichhari Upazila in Rangamati District. The valley is 1,476 feet (450 m) above sea level. Sajek valley is known as the Queen of Hills & Roof of Rangamati.</p>
					<h3> 
             <a class="" href="signup.php">Booking now</a>
			    </h3>
			<div class="comment">Comment <Span>0</Span></div>
		</div>

		<div class="blog_entry">
			<img src="image/jaflong.jpg" alt="">
			<h1>Jaflong,Sylhet</h1>
				<h3> 
<a class="login.php" href="">See packages</a>
			</h3>
			<p>Jaflong is a hill station and tourist destination in the Division of Sylhet, Bangladesh. It is located in Gowainghat Upazila of Sylhet District and situated at the border between Bangladesh and the Indian state of Meghalaya, overshadowed by subtropical mountains and rainforests. It is known for its stone collections and is home of the Khasi tribe.</p>
			<h3> 
             <a class="" href="signup.php">Booking now</a>
			    </h3>
			<div class="comment">Comment <Span>2</Span></div>
		</div>
	</div>


	<div class="container_right">
		<div class="myname">
			<img src="image/right.jpeg" alt="">
			<!-- <h2>My Name</h2>
			<p>Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a interest of lorem ipsum and mauris neque quam blog. I want to share my world with you.</p> -->
		</div>

		<div class="popular">
			<div class="p_post">Trending destination</div>
			<div class="popular_item">
				<img src="image/workshop.jpg" alt="">
				<p>Kuakata sea beach</p>
				<p>Patuakhaki</p>
			</div>
			<div class="popular_item">
				<img src="image/gondol.jpg" alt="">
				<p>Saintmartin</p>
				<p>Teknaf</p>
			</div>
			<div class="popular_item">
				<img src="image/skies.jpg" alt="">
				<p>Jaflong</p>
				<p>Sylhet</p>
			</div>
			<div class="popular_item">
				<img src="image/rock.jpg" alt="">
				<p>Sajek valley</p>
				<p>Rangamati</p>
			</div>
		</div>

		<div class="tag_section">
			<div class="tags">DestinationS</div>
			<span class="travel">Khulna</span>
			<span>Sylhet</span>
			<span>Chittagong</span>
			<span>Barishal</span>
			<span>Dhaka</span>
			<span>Cumilla</span>
			<span>Mymensingh</span>
		
		</div>
	</div>
	
	<div class="footer">
		<button class="previous">Previous</button>
		<button class="next">Next>></button>
	</div>
	</div>
</div>
</div>






<!-- 	<h1 class="text-center text-danger"> Database form</h1>
	<form action="store.php" method="POST">
		<input class="form-control mt-3" type="text" name="name" placeholder="Name">
		<input class="form-control mt-3" type="email" name="email" placeholder="email">
		<input class="form-control mt-3" type="text" name="address" placeholder="Address">
		<input class="btn btn-success mt-3" type="submit" value="submit">
	</form>
	<br><br>
	<a class="btn btn-info" href="signup.php">Signup</a>
	<a class="btn btn-warning ml-4" href="login.php">Login</a> -->
		



<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="bootstrap.min.js"></script>
<?php 
unset($_SESSION['message']);
unset($_SESSION['er_message']);
unset($_SESSION['signup']);
unset($_SESSION['booking']);

 ?>
 



</body>
</html>
