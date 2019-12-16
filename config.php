<?php

    $dsn = 'mysql:host=localhost;dbname=ArshiaSultanaDatabase';
    $Username = 'arshiasultana';
    $Password = 'arshiasultanapass';
    try{
        $db = new PDO($dsn,$Username,$Password);
     
    //    echo"connected";
    }catch(PDOException $e) {
        $error_message = $e->getmessage();
        echo "dont know";
        include('database_error.php');
        exit();
    }
  
?>