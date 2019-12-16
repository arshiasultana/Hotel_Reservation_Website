<?php
include("config.php");
session_start();
?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- for topbar -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Home Page</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Cardo:700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
    
	
</head>
<body>
<!-- topnav -->
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #C99552;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: black;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav-right {
  float: right;
}
}
</style>
<div class="topnav" id="myTopnav">
  <a href="index.php" class="active">Home</a>
  <a href="about.php">About Us</a>
  <a href="local_attractions.php">Local Attractions</a>
  <a href="shopping.php">Shopping</a>
  <a href="fitness.php">Fitness Center</a>
  <div class="topnav-right">
  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<div id="booking" class="section">
		<div class="section-center">
		<center><h1><font color="white" > Welcome to Arshia's Inn</h1>
						<p>Enjoy a wonderful time in our hotel with a lakeview!</p></font></center>
						<br>
			<div class="container">
			
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
						
							<h1>Make your reservation</h1>
						</div>
						<form action="include.php" method="post">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Check In</span>
										<input name="checkin" class="form-control" type="date" required>
									</div>
									<span class="in-out hidden-xs hidden-sm">&#8652;</span>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Check out</span>
										<input name="checkout" class="form-control" type="date" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">No of rooms</span>
											<input class="form-control" type="number" name="num_rooms" step="1" max="5" min="1" required>

										
										<span class="select-arrow"></span> 
										<p><?php
if(!isset($_SESSION['message'])){
       $view1=" ";
      $_SESSION['message']=$view1;  
   echo $view1;
   
  
}
else{
       $v=$_SESSION['message'];
       echo $v;
      unset($_SESSION['message']);
      session_destroy();
}

?>
 </p> 
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Adults</span>
										<input class="form-control" type="number" name="adults" step="1" max="10" min="1" required>
										
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Children</span>
										<input class="form-control" type="number" name="children" step="1" max="10" min="1" required>
										<!-- <select name="children" class="form-control">
											<option>0</option>
											<option>1</option>
											<option>2</option>
										</select> -->
										<span class="select-arrow"></span>
									</div>
								</div>
								
								<div class="col-md-3">
									<div class="form-btn">
										<button name="submit" onclick="myFunc()" class="submit-btn">Check availability</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		
	</div>
	
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h4>Address:Street no:1,Manhattan,Upper East side,NY</h4>
							<a href="mailto:ArshiasInn@123.com">Email:ArshiasInn@123.com</a>
							<br>
							<a href="tel:123-456-765">Phone:123-457-6789</a><br>
							<p>Direction:
							<a href="http://maps.google.com/?q=Times Square,New York">Click here for directions</a></p>
							<a href="login.php">Admin Panel</a>
						</div>
</div>

</div>
</div>
</div>

	<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</body>
</html>