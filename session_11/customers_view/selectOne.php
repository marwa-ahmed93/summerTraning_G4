<?php

require 'dbc.php';
$id= $_GET['id'] ;
 $query = "SELECT * FROM `customers` WHERE id  = $id" ;
 $result =  mysqli_query($connection , $query) ;

$customer= mysqli_fetch_assoc( $result );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><?php echo $customer['first_name'] ?> </h2>
    <h2><?php echo $customer['last_name'] ?> </h2>
    <h2><?php echo $customer['email'] ?> </h2>
    <h2><?php echo $customer['gender'] ?> </h2>
</body>
</html>