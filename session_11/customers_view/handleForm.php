<?php
session_start();

require 'dbc.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$money = $_POST['money'];
$city = $_POST['city'];
$country = $_POST['country'];


$query = "INSERT INTO customers(`first_name`,`last_name`,`email`,`gender`,`money`,`city`,`country`)
VALUES('$first_name','$last_name','$email','$gender','$money','$city','$country')";

 $result =   mysqli_query($connection , $query);

 if($result){
    echo "inserted successfully";
    $_SESSION['username'] = $first_name ;
    header('location:index.php');
    exit();
 }else{
      header('location:createCustomer.php');
    exit();
 }





}

