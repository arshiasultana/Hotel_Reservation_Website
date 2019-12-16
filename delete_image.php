<?php
include("config.php");
session_start();
// header("location:update_image.php");
if(isset($_POST['delete']))
{
$image_id=filter_input(INPUT_POST,'image_id',FILTER_VALIDATE_INT);
echo $image_id;

//DELETE IMAGE FROM THE DATABASE

if($image_id!= false){
    $query="DELETE FROM images WHERE imageID=:image_id";
    $statement=$db->prepare($query);
    $statement->bindValue(':image_id',$image_id);
    $statement->execute();
    
    header("location:update_image.php");
    $view="Room Deleted from Database";
    $_SESSION['message']=$view;
}
// else{
//     echo "not deleted";
// }
}
?>