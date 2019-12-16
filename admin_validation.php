<?php
session_start();
include("config.php");


$name=$_POST['username'];
$password=$_POST['password'];
$stmt = $db->prepare("SELECT * FROM admin WHERE name ='$name'");
$stmt->execute();
$user = $stmt->fetch();

// echo $user['password'];
// echo $password;
// if ($user && password_verify($password, $user['password']))
$fname=$user['name'];
// $lname=$user['lastName'];
$_SESSION['fname']=$fname;
// $_SESSION['lname']=$lname;

if($password==$user['password'])
{
    header('location:update_image.php');
   
   
    // session_destroy();
} else {

    header('location:login.php');
   
    $view="Error: Invalid credential, you must correctly login to view this site. ";
    $_SESSION['message']=$view;

}

 
 ?>