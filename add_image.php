<?php

//including data base connection file
include("config.php");
session_start();

$msg="";

//if the form is submitted
if(isset($_POST['submit']))
{
//getting the values from form
$description=$_POST['description'];
$ppn=$_POST['ppn'];
$image=$_FILES['image']['name'];
$tmp_dir=$_FILES['image']['tmp_name'];
$imageSize=$_FILES['image']['size'];
$upload_dir='images/';
$imgExt= strtolower(pathinfo($image,PATHINFO_EXTENSION));
$valid_extensions=array('jpeg','jpg','png','gif','pdf');
$picProfile=rand(1000,1000000).".".$imgExt;
move_uploaded_file($tmp_dir,$upload_dir.$picProfile);

//query to insert the content in database

$statement=$db->prepare('INSERT INTO images(description,ppn,image) VALUES(:description,:ppn,:image)');
$statement->bindValue(':description',$description);
$statement->bindValue(':ppn',$ppn);
$statement->bindValue(':image',$picProfile);
$statement->execute();
$user=$statement->fetch();
header('location:update_image.php');
//passing message
//if the image is posted display a message "posted"
    $view="Room Added in Database";
    $_SESSION['message']=$view;
}
    else{
  //if the image is not posted display a message "not posted"
    header('location:update_image.php');
    $view="Error: Room not Added to the database ";
    $_SESSION['message']=$view;
}



?>