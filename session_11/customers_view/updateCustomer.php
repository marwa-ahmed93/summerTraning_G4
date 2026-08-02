
<?php

require 'dbc.php';
$id= $_GET['id'] ;
 $query = "SELECT * FROM `customers` WHERE id  = $id" ;
 $result =  mysqli_query($connection , $query) ;

$customer= mysqli_fetch_assoc( $result );



include('layout/head.php');
include('layout/nav.php');



?>



<form action="handleUpdate.php?id=<?= $customer['id'] ; ?> " method="post" class="w-75 m-auto my-3">


 <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">first_name</label>
    <input type="text" name="first_name" value="<?php echo $customer['first_name'] ;?> " class="form-control" id="exampleInputPassword1">
  </div>


   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">last_name</label>
    <input type="text" name="last_name" value="<?php echo $customer['last_name'] ;?> " class="form-control" id="exampleInputPassword1">
  </div>

   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email"  value="<?php echo $customer['email'] ;?> " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">gender</label>
    <input type="text" name="gender" value="<?php echo $customer['gender'] ;?> " class="form-control" id="exampleInputPassword1">
  </div>



 
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">money</label>
    <input type="text" name="money" value="<?php echo $customer['money'] ;?> " class="form-control" id="exampleInputPassword1">
  </div>

    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">city</label>
    <input type="text" name="city" value="<?php echo $customer['city'] ;?> " class="form-control" id="exampleInputPassword1">
  </div>

    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">country</label>
    <input type="text" name="country" value="<?php echo $customer['country'] ;?> " class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</body>
</html>