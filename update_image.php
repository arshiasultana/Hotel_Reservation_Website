<?php
include("config.php");

session_start();
?>
<html>
<head>
<title>Add/Delete image</title>
<style>
p{
  color:#FF0000;
  font-size:35px;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align:center;
  color:#fff;
  padding:10px;
  border-color:white;
  background-color: #6b9fd2;

}

.bg-image{
 /* The image used */
 background-image: url("admin.png");
  
  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}


/* body{
  
  background-image:url('pic.png');
} */

.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.5); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: left;
}
.button{
  position:absolute;
  top:0;
  right:0;
  background-color:white; /* Green */
  border: none;
  color: black;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 10px 10px;
  cursor: pointer;
  border-radius:4px;

}
</style>
</head>
<body>
<div class="bg-image"></div>

<div class="bg-text">
<h1>Add Image</h1>

<form action="add_image.php" method="post" enctype="multipart/form-data">
<label>Description</label>
<input type="text" name="description" required><br><br>
<label>Price per night</label>
<input type="text" name="ppn" required><br><br>
<label>image </label>
<input id="image" type="file" name="image"  accept="*/image"><br><br>
<button type= "submit" name="submit">Add to Database</button>
<button class="button" onclick="window.location.href='index.php';">Logout</button>
<center><p><?php
if(!isset($_SESSION['message'])){
       $view1="  ";
      $_SESSION['message']=$view1;  
   echo $view1;
   
}
else{
       $v=$_SESSION['message'];
       echo $v;
      unset($_SESSION['message']);
      session_destroy();
}

?></p></center>
</form>

<?php
//query for selecting and displaying the contents in images table   
$query = 'SELECT * from images ORDER BY imageID';
$stmt=$db->prepare($query);
$stmt->execute();
$img=$stmt->fetchAll();
?>
<h1>Update/Delete Rooms</h1>
<table width="100%">
<tr>
<th>Description</th>
<th>Price Per Night</th>
<th>Image</th>
<th>Update</th>
<th>Delete</th>
</tr>
<?php foreach ($img as $pic):
echo "<tr> <form action='update.php' method='post' enctype='multipart/form-data'>";
echo "<td><input type='text' name='desc' value='".$pic['description']."'></td>";
echo "<td>$<input type='text' name='ppn' value='".$pic['ppn']."'></td>";
echo "<input type='hidden' name='image_id' value='".$pic['imageID']."'>";
echo "<td><img src='images/".$pic['image']."' height=60 width=60></td>";
echo "<td><input type='submit' value='Update'></td>";
echo "</form>";
?>

<td><form action="delete_image.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="image_id" value="<?php echo $pic['imageID'];?>">
<input type="submit" name="delete" value="Delete">
</form></td>
</tr>
<?php
endforeach;

?>





</table>

</div>
</body>
</html>