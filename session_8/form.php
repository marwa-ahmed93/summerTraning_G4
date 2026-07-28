<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
 <!-- <form method="post" action="index.php" class="w-75 m-auto my-3">

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">userName</label>
    <input type="text" name="name" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form> -->








 <!-- <form method="post" action="index.php" enctype="multipart/form-data" class="w-75 m-auto my-3">

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Upload Image</label>
    <input type="file" name="image" class="form-control" id="exampleInputPassword1">
  </div>



  <button type="submit" name="submit" class="btn btn-primary">Upload</button>
</form> -->

<?php 
session_start();
if(isset($_SESSION['errors'])){
foreach($_SESSION['errors'] as $error){
?>

<div class="alert alert-danger">
   <?php echo $error ."<br>"; ?> 
  </div>

<?php


}
unset($_SESSION['errors']);
}

?>
<form method="post" action="index.php" class="w-75 m-auto my-3">
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">user_name</label>
    <input type="text" name="username" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Age</label>
    <input type="number" name="age" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>




</body>
</html>