<html>
<head>
<title>Local Attractions</title>

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



 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="topnav" id="myTopnav">
  <a href="index.php" >Home</a>
  <a href="about.php">About Us</a>
  <a href="local_attractions.php" class="active">Local Attractions</a>
  <a href="shopping.php">Shopping</a>
  <a href="fitness.php">Fitness Center</a>
  <div class="topnav-right">
  </div>
  
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<div class="container">
  <h2>Local Attractions</h2>
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
        <img src="estate.png" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3>Empire State Building</h3>
          <p>NY is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        <img src="bridge.png" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>Brooklyn Bridge </h3>
          <p>Thank you, NY</p>
        </div>
      </div>
    
      <div class="item">
        <img src="tsquare.png" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
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
</div>

</body>
</html>


<h4>This Manhattan hotel is located across the street from Madison Square Garden and Penn Station. The hotel offers access to the adjacent fitness club which includes a gym and a tour desk with ticket services.

Each air-conditioned room at the Hotel Pennsylvania provides cable TV. Guests also have access to a work desk, alarm clock, black-out drapes, iron and hairdryer in every room. The Penn Plaza Collection Rooms are newly renovated.

The Pennsylvania Hotel includes a 24-hour coffee shop. Guests can make transportation reservations and acquire theater tickets at the hotel. Guests will also have access to a safety deposit desk at the front desk, any time of the day.

Times Square is 2,650 feet from Hotel Penn while Museum of Modern Art is 1.2 mi away. The Empire State Building is 2,100 feet away.

This is our guests' favorite part of New York, according to independent reviews.

Couples in particular like the location – they rated it 8.4 for a two-person trip.

We speak your language!</h4>

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