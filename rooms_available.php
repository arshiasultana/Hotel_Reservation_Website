<html>
<head>
<title>Available rooms
</title>
<style>
body {
  margin:25px;
  background-image: url('/img/background.jpg');}
  
div.polaroid {
  width: 80%;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
}

div.container {
  text-align: center;
  padding: 10px 20px;
}

  .button {
  background-color: #C99552;
  border: none;
  color: white;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 4px;
}

</style>
</head>

<body>
<center><h1>Available Rooms</h1>

<?php
include("config.php");
session_start();
//query for selecting and displaying the contents in images table   
$query = 'SELECT * from images ORDER BY imageID';
$stmt=$db->prepare($query);
$stmt->execute();
$img=$stmt->fetchAll();
?>

<div class="polaroid">
<h3><font color="red">Rooms Available from <?php echo $_SESSION['checkin'];?> to <?php echo $_SESSION['checkout'];?></h3></font>
<?php foreach ($img as $pic):?>

<h3><?php echo $pic['description'];  ?></h3>
<?php echo "<img src='images/".$pic['image']."' style='width:60%' >";?>
<div class="container">
 Price Per Night : $<?php echo $pic['ppn']; ?>
<form method="post" action="conformation.php">
<input type="hidden" name="price" value=<?php echo $pic['ppn']?>>
<input type="hidden" name="desc" value=<?php echo $pic['description']?>>
<input class="button" type="submit" value="select" ></button>
</form>
<?php endforeach;?>
  </div>
</div>
</center>
</body>
</html>






