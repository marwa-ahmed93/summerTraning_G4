<?php

require 'dbc.php';

$id= $_GET['id'] ;

 $query = "Delete FROM `customers` WHERE id  = $id" ;
 $result =  mysqli_query($connection , $query) ;

// $customer= mysqli_fetch_assoc( $result );
if($result){
    header('location:selectAll.php');
}
?>