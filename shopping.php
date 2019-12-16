<html>
<head>
<title>Shopping</title>
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
  <a href="shopping.php" class="active">Shopping</a>
  <a href="fitness.php">Fitness Center</a>
  <div class="topnav-right">
  </div>
  
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<h2>The Top Shopping Streets and Neighborhoods in New York City</h2>
<p>Here’s a rundown of New York’s most interesting shopping scenes, with highlights of each to give you a feel for the neighborhood.</p><br>
<h3>Times Square & the Theater District</h3>
<img src="tsquare.png" height=200 width=300>


<p>You won’t find much in the heart of Times Square to entice the serious shopper. West 47th Street between Fifth and Sixth avenues is the city’s famous Diamond District;

You’ll also notice a wealth of electronics stores throughout the neighborhood, many perpetually trumpeting GOING OUT OF BUSINESS sales. These joints have been going out of business since the Stone Age—but one thing’s certain, just like a real out-of-business store, you won’t be able to return a lemon camera you bought there. Better to stick with buying souvenir trinkets and T-shirts at these joints. Electronics are more wisely purchased at B&H for real bargains with set prices—and legitimate warranties.
<br>
<h3>Lower Manhattan & the Financial District</h3>
<img src="fdist.png" height=200 width=300>

<p>The mother of all discount department stores is Century 21, across Church Street from the World Trade Center site. New inventory flows in literally all day, as do throngs of customers. Despite its often elbow-to-elbow aisles, the store is worth a visit—just aim to go on a weekday morning to take advantage of its bargains before the crowds appear.<br>
<br>
<h3>Chinatown</h3>
<img src="chinatown.png" height=200 width=300>


<p>Don’t expect to find the bargain of a lifetime on Chinatown’s crowded streets, but there’s always great browsing. The fish and herbal markets along Canal, Mott, Mulberry, and Elizabeth streets are fun for their bustle and exotica—as well as for the handful of Italian joints still hanging on from the Little Italy days. Dispersed among them (especially along Canal), you’ll find a mind-boggling collection of knockoff sunglasses, handbags, fragrances, shoes, and watches. It can be a fun browse, but quality is questionable, and usually so are the sellers—and remember to bargain before busting out your wallet! (Also, skip the bootleg perfumes and software—these are stolen goods, and you will be disappointed with the product.) I’d steer clear of electronics altogether, but if you must buy, at least open the package before exchanging money to make sure you’re not buying a brick in a name-brand box.
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