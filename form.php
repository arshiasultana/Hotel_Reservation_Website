<?php
include("config.php");
session_start();
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$address=$_POST['address'];
$street_name=$_POST['street_name'];
$city=$_POST['city'];
$state=$_POST['state'];
$phone_number=$_POST['phone_number'];
$email=$_POST['email'];
$checkin=$_SESSION['checkin'];
$checkout=$_SESSION['checkout'];
$num_rooms=(int)$_SESSION['num_rooms'];
$adults=(int)$_SESSION['adults'];
$children=(int)$_SESSION['children'];

$query = "INSERT INTO user(checkin,checkout,num_rooms,adults,children)
VALUES(:checkin,:checkout,:num_rooms,:adults,:children)";

$statement=$db->prepare($query);
$statement->bindValue(':checkin',$checkin);
$statement->bindValue(':checkout',$checkout);
$statement->bindValue(':num_rooms',$num_rooms);
$statement->bindValue(':adults',$adults);
$statement->bindValue(':children',$children);
$statement->execute();


// echo $_SESSION['price'];
// echo $_SESSION['num_rooms'];


// echo $price;
//  echo $final_price;
// echo $fname;
// echo $lname;
// echo $checkin;
// echo $checkout;
// echo $_SESSION['price'];
// header("location:conformation.php");
session_destroy();
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
<!-- topnav -->
<style>
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
}</style>

<!-- <div class="bg-text">hello</div> -->


</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="index.php" >Home</a>
  <a href="about.php">About Us</a>
  <a href="local_attractions.php">Local Attractions</a>
  <a href="shopping.php">Shopping</a>
  <a href="fitness.php" class="active">Fitness Center</a>
  <div class="topnav-right">
  </div>
  
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row"> 
					<div class="booking-form">
						<div class="form-header">
							<h1>Booking Confirmed!</h1><br>

                            <p> Congratulations your Booking is confirmed!! Enjoy your stay at Arshia's Inn.</p>
						</div>
                        </div>
                        </div>
                        </div>

</body>
</html>