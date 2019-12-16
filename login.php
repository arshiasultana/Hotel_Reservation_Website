
<?php
session_start();
include("config.php");

// $price=$_POST['price'];
// $_SESSION['price']=$_POST['price'];
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
							<h1>Welcome to the admin panel.</h1>
						</div>
						<form action="admin_validation.php" method="post">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Username</span>
										<input name="username" class="form-control" type="text" required>
									</div>
									<!-- <span class="in-out hidden-xs hidden-sm">&#8652;</span> -->
								</div>
                                
								
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Password</span>
                                        <input name="password" class="form-control" type="password" required>
										
									</div>
								</div>
								

								<div class="col-md-3">
									<div class="form-btn">
										<button name="submit" class="submit-btn">Submit</button>

                                    </div><br>
                                    <a href="registration.php">Click here to register as an admin</a><br>
								</div>
							</div>
						</form>
						<p><?php
if(!isset($_SESSION['message'])){
       $view1=" You must Login to access the Admin Panel. ";
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
			</div>
		</div>
	</div>



</body>
</html>