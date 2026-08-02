<?php

require 'dbc.php';

header('content-type:application/json');

if (!isset($_GET['id'])) {

    echo json_encode(['message' => 'You must send id']);
} else {
    $id = $_GET['id'];
    $query = "SELECT * FROM `customers` WHERE id  = $id";
    $result =  mysqli_query($connection, $query);
     
    if(mysqli_num_rows($result) > 0){
          $customer = mysqli_fetch_assoc($result);
          echo json_encode($customer);
    }
else{
         echo json_encode(['message' => 'No data']);
}

  
}
