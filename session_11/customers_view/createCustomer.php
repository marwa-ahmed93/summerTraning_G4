
<?php 
include('layout/head.php');
include('layout/nav.php');
 ?>

<form action="handleForm.php" method="post" class="w-75 m-auto my-3">


 <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">first_name</label>
    <input type="text" name="first_name" class="form-control" id="exampleInputPassword1">
  </div>


   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">last_name</label>
    <input type="text" name="last_name" class="form-control" id="exampleInputPassword1">
  </div>

   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">gender</label>
    <input type="text" name="gender" class="form-control" id="exampleInputPassword1">
  </div>



 
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">money</label>
    <input type="number" name="money" class="form-control" id="exampleInputPassword1">
  </div>

    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">city</label>
    <input type="text" name="city" class="form-control" id="exampleInputPassword1">
  </div>

    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">country</label>
    <input type="text" name="country" class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>



<?php   include('layout/head.php'); ?>
