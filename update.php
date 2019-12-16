<?php
include("config.php");
session_start();
// echo "hi";

$image_id=filter_input(INPUT_POST,'image_id',FILTER_VALIDATE_INT);
// echo $image_id;

$desc=$_POST['desc'];
$ppn=$_POST['ppn'];
 
// echo $desc;
$q="UPDATE images SET description='$desc', ppn='$ppn' WHERE imageID='$image_id'";
$statement=$db->prepare($q);
// $statement->bindValue(':imageID',$image_id);
// $statement->bindValue(':desc',$desc);
// $statement->bindValue(':ppn',$ppn);
$statement->execute();
header('location:update_image.php');
//passing message
//if the image is posted display a message "posted"
    $view="Updated in Database";
    $_SESSION['message']=$view;


?>
