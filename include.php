<html>

<?php
include("config.php");
session_start();
$checkin=$_POST['checkin'];
$checkout=$_POST['checkout'];
$num_rooms=(int)$_POST['num_rooms'];
$adults=(int)$_POST['adults'];
$children=(int)$_POST['children'];
$_SESSION['checkin']=$_POST['checkin'];
$_SESSION['checkout']=$_POST['checkout'];
$_SESSION['num_rooms']=$_POST['num_rooms'];
$_SESSION['adults']=$_POST['adults'];
$_SESSION['children']=$_POST['children'];

$total_persons=$adults+$children;
// echo $total_persons;
if(($total_persons>4) && ($num_rooms<2)){
    $view="Error: You must select atleast two rooms ";
    $_SESSION['message']=$view;
    header('location:index.php');
}

else{
    header('location:rooms_available.php');
}

?>
</html>