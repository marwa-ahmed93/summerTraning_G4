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
    


 <!-- <form action="handleForm.php" method="post" class="w-75 m-auto" >

 <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="text" name="name"  class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form> -->


 <!-- <form action="handleForm.php" method="post" class="w-75 m-auto" >

 <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Number one</label>
    <input type="number" name="num1"  class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Number two</label>
    <input type="number" name="num2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Choose operators</label>

<select name="operators" id="" class="form-control" >
  <option value="+">+</option>
  <option value="-">-</option>
  <option value="*">*</option>
  <option value="/">/</option>
</select>
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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


 <form action="handleForm.php" method="post" class="w-75 m-auto" >

 <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="text" name="name" 
     value="<?php if(isset($_COOKIE['username'] )) echo $_COOKIE['username'] ;?>" class="form-control" id="exampleInputPassword1">
  </div>


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password"
    value="<?php if(isset($_COOKIE['password'] )) echo $_COOKIE['password'] ;?>" class="form-control" id="exampleInputPassword1">
  </div>


  <div class="mb-3 form-check">
    <input type="checkbox" name="remember-me" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember me</label>
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form> 

</body>
</html>