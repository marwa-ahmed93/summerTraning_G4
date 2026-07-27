<?php
session_start();
// print_r($_POST);

// echo $_POST['name']."<br>";
// echo $_POST['email']."<br>";
// echo $_POST['password']."<br>";


// $arr = [
// 'name'=>'ahmed',
// 'email'=> 'ahmed@gmail.com' ,
// 'password' => 'A123456'

// ];

// if(isset($_POST['submit'])){

// $username = $_POST['name'] ;
// $email = $_POST['email'] ;
// $password = $_POST['password'] ;


// if($username == $arr['name'] && $email == $arr['email'] && $password == $arr['password']){
//     echo "enter";
// }
// else{
//     echo "not valid data";
// }
// // echo "Welocme ". $_POST['name']."<br>";
// // echo "Your email is ". $_POST['email']."<br>";
// // echo $_POST['password']."<br>";


// }
// else{
//     echo "please Register first";
// }





///////////////////////////////////////////////////////////

// if (isset($_POST['submit'])) {

//     $num1 = $_POST['num1'];
//     $num2 = $_POST['num2'];
//     $operators = $_POST['operators'];


//     switch ($operators) {

//         case '+':
//             echo  $num1 + $num2;
//             break;

//         case '-':
//             echo  $num1 - $num2;
//             break;

//         case '*':
//             echo  $num1 * $num2;
//             break;

//         case '/':
//             echo  $num1 / $num2;
//             break;

//             default:
//             echo "not valid";
//     }
// }







//////////////////////////////////////////////////
/**
 * session
 * cookies
 */


// if(isset($_POST['submit'])){

//     $username = $_POST['name'];
//     $password = $_POST['password'];


//     //session
//     session_start();
//     $_SESSION['username'] = $username ;
//     $_SESSION['password'] = $password ;
//     // print_r($_SESSION);
//   header('location:welcome.php');
// exit();

//     //cookies

//    if(isset($_POST['remember-me'])
//      && $_POST['remember-me'] == true){
        
//     setcookie('username',$username ,time()+60*60);
//     setcookie('password',$password ,time()+60*60);

//    echo "welcome ". $_COOKIE['username'];
      
//    }
// }








////////////////////////////////////////////////////

if($_SERVER['REQUEST_METHOD'] == 'POST'){


$username = $_POST['name'];
$password  = $_POST['password'];
$errors = [];


if(strlen($username) <3 
|| strlen($username) >12 ){
    $errors[] = "The User name should be between 3 and 12";
}

if(strlen($password) <3 
|| strlen($password) >12 ){
    $errors[] = "The password should be between 3 and 12";
}


if($errors){
$_SESSION['errors'] = $errors;
header('location:form.php');
exit();
}

$_SESSION['username'] = $username ;
header('location:welcome.php');

 

}
else{
    echo "you must login first";
}