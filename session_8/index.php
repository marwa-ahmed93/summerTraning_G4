<?php
session_start();
////////////////////GET/ //////////////////////
// $GLOBALS  //get
// echo "<pre>";
// print_r($_GET);

// echo $_GET['name'];
// echo "<br>";

// echo $_GET['email'];
// echo "<br>";

// echo $_GET['password'];
// echo "<br>";

/////////////////////  POST ///////////////////////////
// echo "<pre>";
// print_r($_POST);



// if(isset($_POST['submit'])){

// $username = $_POST['name'] ;
// $email = $_POST['email'] ;
// $password = $_POST['password'] ;

// echo $_POST['name'];
// echo "<br>";

// echo $_POST['email'];
// echo "<br>";

// echo $_POST['password'];
// echo "<br>";


///////////////// Cookies  ////////////////
// setcookie('username',$username , time()+60);
// setcookie('email',$email , time()+60);
// echo  $_COOKIE['username'];
// echo  $_COOKIE['email'];


////////////////// Sessions //////////////////
// $_SESSION['username'] = $username;
// $_SESSION['email'] = $email;

// }
// else{
//     echo "login first";
//   ?>

<!-- // <a href="form.php">Login</a> -->
 <?php
// }


///////////////////////// Files   /////////////////////////////////////

// print_r($_POST);
// echo "<pre>";
// print_r($_FILES);


// echo $_FILES['image']['name'];

// $image = $_FILES['image'];

// $image_name  = $image['name']  ;
// $tmp_name = $image['tmp_name'];

// $ext = pathinfo($image_name  ,PATHINFO_EXTENSION );

// $new_name = uniqid().".".$ext;


// move_uploaded_file($tmp_name ,$new_name);
?>
<!-- <img src="<?php 
// echo $new_name 
?>" alt=""> -->

<?php

///////////////////////////// Filter  //////////////////////////

/**
 * filter input
 * filter var
 */

// $email = "ahmed@gmail.com";
// echo filter_var($email ,FILTER_VALIDATE_EMAIL );

// $num = 10;
//  echo filter_var($num , FILTER_VALIDATE_INT,['options' => [ 'min_range'=> 15   , 'max_range'=>45]]);


// $user_name = "Mohamed";
  
// echo  filter_var($user_name , FILTER_VALIDATE_REGEXP,['options'=> ['regexp' => '/^[A-Z][a-z]{3,8}$/' ]]);


/////////////////////////////////////////////////////////////////

require "validate.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
$username = $_POST['username'];
$errors = [];

foreach($validates as $validate_name=>$validate_value){
 $value = filter_input(INPUT_POST ,$validate_name , $validate_value['filters'],$validate_value['my_options']) ;

if(empty($_POST[$validate_name])){
    $errors[$validate_name] = "You must Fill ".$validate_name;
}
elseif($value == false){
    $errors[$validate_name] = $validate_value['error'];
}

if($errors){
    $_SESSION['errors'] = $errors;
    header('location:form.php');
    exit();
}


}
$_SESSION['username'] = $username ;
header('location:welcome.php');
exit();

}