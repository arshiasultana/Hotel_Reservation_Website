<?php
session_start();
include("config.php");

$price=$_POST['price'];
$desc=$_POST['desc'];
$_SESSION['desc']=$_POST['desc'];
$desc=$_SESSION['desc'];
$_SESSION['price']=$_POST['price'];
$price=(int)$_SESSION['price'];
$checkin=$_SESSION['checkin'];
$checkout=$_SESSION['checkout'];
$num_rooms=(int)$_SESSION['num_rooms'];
$adults=$_SESSION['adults'];
$children=$_SESSION['children'];

// echo $price;
// echo $num_rooms;

$final_price=$num_rooms*$price;
// echo $num_rooms;
// echo $_SESSION['price'];
// echo $price;
// echo"hi";
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

	
</head>

<body>
<!-- <div style="padding-left:16px">
  <h2>Responsive Topnav Example</h2>
  <p>Resize the browser window to see how it works.</p>
</div> -->
<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
		
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
						<h3>Your Booking Details</h3><br>
			<!-- <h2>Room Type: <?php echo $_SESSION['desc'];?><br> -->
			<h4>Checkin Date : <?php echo $_SESSION['checkin'];?><br>
			Checkout Date : <?php echo $_SESSION['checkout'];?><br>
			<!-- Room: <?php echo $_SESSION['desc'];?><br> -->
			Adults: <?php echo $_SESSION['adults'];?><br>
			Children: <?php echo $_SESSION['children'];?><br>
			Number of rooms : <?php echo $_SESSION['num_rooms'];?><br>
			Total cost for stay period: $ <?php echo $final_price;?></h4><br>
							<h3>Please provide additional details for booking conformation</h3>
						</div>
						<form action="form.php" method="post">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">First Name</span>
										<input name="fname" class="form-control" type="text" required>
									</div>
									<!-- <span class="in-out hidden-xs hidden-sm">&#8652;</span> -->
								</div>
                                
								<div class="col-md-6">
                                
									<div class="form-group">
										<span class="form-label">Last Name</span>
										<input name="lname" class="form-control" type="text" required>
									</div>
								</div>
							</div>
                            
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Address</span>
                                        <input name="address" class="form-control" type="text" required>
										<!-- <select name="num_rooms" class="form-control">
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select> -->
										<!-- <span class="select-arrow"></span> -->
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Street Name</span>
                                        <input name="street_name" class="form-control" type="text" required>
										<!-- <select name="adults" class="form-control">
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
										<span class="select-arrow"></span> -->
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">City</span>
                                        <input name="city" class="form-control" type="text" required>
										<!-- <select name="children" class="form-control">
											<option>0</option>
											<option>1</option>
											<option>2</option>
										</select>
										<span class="select-arrow"></span> -->
									</div>
								</div>
                                <div class="col-md-3">
									<div class="form-group">
										<span class="form-label">State</span>
                                        <input name="state" class="form-control" type="text" required>
										<!-- <select name="children" class="form-control">
											<option>0</option>
											<option>1</option>
											<option>2</option>
										</select>
										<span class="select-arrow"></span> -->
									</div>
								</div>
								<!-- <div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Room Type</span>
										<select name="room_type" class="form-control">
											<option>Single Bedroom</option>
											<option>Double Bedroom</option>
											<option>Triple Bedroom</option>
											<option>Queen Suite</option>
											<option>King Suite</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div> -->
                                <div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Phone Number</span>
										<input name="phone_number" class="form-control" type='tel' pattern="^\d{3}-\d{3}-\d{4}$" required>
									</div>
									<!-- <span class="in-out hidden-xs hidden-sm">&#8652;</span> -->
								</div>
                                
								<div class="col-md-6">
                                
									<div class="form-group">
										<span class="form-label">Email</span>
										<input name="email" class="form-control" type="email" required>
									</div>
								</div>
							</div>

								<div class="col-md-3">
									<div class="form-btn">
										<button name="submit" class="submit-btn">Submit</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


</form>
</body>
</html>