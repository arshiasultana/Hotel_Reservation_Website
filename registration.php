<?php
include("config.php");
session_start();
if(isset($_POST['submit'])){
    $name=$_POST['username'];
    $password=$_POST['password'];
 
 $s="SELECT * FROM admin where name= '$name'";
 $result=$db->prepare($s); 
 $result->execute();
 $num=$result->fetchColumn();



$query = "INSERT INTO admin(name,password)
VALUES(:name,:password)";

if($num==1){
    echo "username Already taken";}
    else{

$statement=$db->prepare($query);
$statement->bindValue(':name',$name);
$statement->bindValue(':password',$password);
// $statement->bindValue(':num_rooms',$num_rooms);
// $statement->bindValue(':adults',$adults);
// $statement->bindValue(':children',$children);
$statement->execute();
echo "registered";

    }

}

?>





<!-- <html>
<head>
<title>Registration</title>
</head>
<body>
<form method="post" action="">
<label>Username:
<input type="text" name="username" ></label><br>
<label>Password:
<input type="password" name="password"></label><br>

<button name="submit" value="submit">Submit</button>

</html> -->


<!-- //session_start();

//include("config.php");

// $price=$_POST['price'];
// $_SESSION['price']=$_POST['price'];
// echo $_SESSION['price'];
// echo $price;
// echo"hi"; -->

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
							<h1>Register as a admin.</h1>
						</div>
						<form action="registration.php" method="post">
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