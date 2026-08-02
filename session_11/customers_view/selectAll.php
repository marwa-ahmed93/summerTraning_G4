<?php

require 'dbc.php';

 $query = "SELECT * FROM `customers` ORDER BY id DESC" ;
 $result =  mysqli_query($connection , $query) ;

//  $customers =  mysqli_fetch_all($result,MYSQLI_ASSOC) ; 
// echo "<pre>";
//  print_r($customers);

$customer= mysqli_fetch_assoc( $result );
// echo "<pre>";
// print_r($customer);
// die();

 

include('layout/head.php');
include('layout/nav.php');
 
?>



<a class="btn btn-primary m-3" href="createCustomer.php">Create</a>


<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
    <div>
        <table class="table table-striped">
<thead>
    <th>index</th>
    <th>first_name</th>
    <th>last_name</th>
    <th>email</th>
    <th>gender</th>
    <th>money</th>
    <th>city</th>
    <th>country</th>
    <th>Show</th>
    <th>Delete</th>
 
</thead>
<tbody>

    <?php 
    $i = 1;
    // foreach($customers as $customer) {
        while($row =  mysqli_fetch_assoc( $result )){
        ?>
    <tr>
        <td><?= $i++ ?></td>
        <td><?php echo $row['first_name'] ?></td>
        <td><?php echo $row['last_name'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['gender'] ?></td>
        <td><?php echo $row['money'] ?></td>
        <td><?php echo $row['city'] ?></td>
        <td><?php echo $row['country'] ?></td>
        <td><a class="btn btn-warning" href="selectOne.php?id=<?= $row['id'] ?>">Show</a></td>
        <td><a class="btn btn-info" href="updateCustomer.php?id=<?= $row['id'] ?>">Update</a></td>
        <td><a class="btn btn-danger" href="delete.php?id=<?= $row['id'] ?>">Delete</a></td>
       
    
    </tr>
    <?php } ?>
</tbody>

</table>
    </div>
</div>



</div>

</div>

    
<?php 
require 'layout/footer.php';
?>