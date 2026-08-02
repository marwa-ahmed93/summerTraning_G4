<?php
session_start();
$id = $_GET['id'];
require 'dbc.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$money = $_POST['money'];
$city = $_POST['city'];
$country = $_POST['country'];


$query = "Update customers set 
`first_name`= '$first_name',
`last_name` ='$last_name' ,
`email` = '$email',
`gender` = '$gender',
`money` =  '$money',
`city` = '$city',
`country` = '$country' 
WHERE id = $id
" ; 



 $result =   mysqli_query($connection , $query);

if($result){
    header('location:selectAll.php');
}




}

