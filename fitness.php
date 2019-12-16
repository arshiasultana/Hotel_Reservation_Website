<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fitness Center</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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

<div class="container">
  <h2>Fitness Center</h2>
  <h4><p>The Next Level in Hotel Fitness Facilities
Guests’ expectations when it comes to hotel gyms have changed . </p></h4>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="1.png" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3>Cardio</h3>
          <p>Start your days with exercise</p>
        </div>
      </div>

      <div class="item">
        <img src="2.png" alt="pool" style="width:100%;">
        <div class="carousel-caption">
          <h3>Swimming Pool</h3>
          <p>Swimming for an active mind</p>
        </div>
      </div>
    
      <div class="item">
        <img src="3.png" alt="Yoga" style="width:100%;">
        <div class="carousel-caption">
          <h3>Yoga</h3>
          <p>Yoga for a peaceful Mind</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div><br>
<h4><p>We recently introduced a pool cardio and resistance bag that includes water dumb bells and bar bells and resistance padding for legs. Also, we put in a cross-training room that includes TRX equipment, kettle bells, balance boards, stretch and resistance bands, exercise balls, medicine balls, dead lift bar, weights and heavy bags</p>
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
