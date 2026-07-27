<?php 

//////////////////// Functions  reuse code //////////////////////////


function calc($rev=500 , $exp=100 ,$taxesRate=0.14 , $otherExpe=20 ){   //void function
    
$income = $rev - $exp ; 
$incomeWithTaxes = $income*$taxesRate; 
$incomeAfterTaxes =  $income - $incomeWithTaxes  ;
$total = $incomeAfterTaxes - $otherExpe ;
echo $total ;

}

// calc(600 , 200 , 0.14 ,20);
// echo "<br>";


// calc(800 , 300 , 0.14  ,10);
// echo "<br>";


// calc(900 , 200 , 0.14  ,20);
// echo "<br>";


// calc(600 , 100 , 0.14  ,2);
// echo "<br>";

// calc(taxesRate:0.15);
// echo "<br>";




/**
 * Void 
 * Return
 */

// calc(600 , 100 , 0.14  ,2);
// echo "<br>";



// function greeting($name){
//     return "Hello ".$name;
// }
// $name = "ahmed" ;
// $username = greeting($name);
// echo $username ."our World" ;
// $x =10;
// $x =20;


/////////////////////////    Scope     /////////////////////////////////

/**scope
 *1- Global
 *2- Local
 */


//  $x = 10;   //Global

//  {  }  //local

// //  function age($var){
   
// //     $y = 20 ;    //local scope
// //     $y++ ;
// //     echo $y ."<br>";
// //     echo $var;
// //  }

// //  age($x);   //21
// //  echo "<br>";

//  //age();  //21





//  // 2
// //  function age(){
// //    global $x ;
// //     $y = 20 ;    //local scope
// //     $y++ ;
// //     echo $x;
//  //   echo $GLOBALS['x'];
// //     return $y ."<br>";
 
    
// //  }

// //  echo age();   //21
// //  echo "<br>";

// //  echo age();   //21
// //  echo "<br>";

// //  echo age();   //21
// //  echo "<br>";









// /////////////////////////  Super Global Variable //////////////////////////////

// //print_r($GLOBALS);

// // echo $GLOBALS['x'];


// //////////////   Static scope   ///////////////
// function increment(){
//    static $y = 10 ;
//     $y ++ ;
//     echo $y ;
// }
// increment();   //11
// echo "<br>";

// increment();  //12
// echo "<br>";

// increment();  //13
// echo "<br>";

// function trackVisits(){
//     static $count = 0;
//     $count ++ ;
//     echo $count ;
// }

// trackVisits();
// echo "<br>";

// trackVisits();
// echo "<br>";

// trackVisits();
// echo "<br>";

// trackVisits();
// echo "<br>";


/////////////////////  const  //////////////////////

// const NAME = "mohamed";  //Global

// // define('x',10);

// function greeting(){
// echo NAME ; 
// }
// greeting();


// write function that takes an array of numbers and return the total of them

// $arr = [10 ,20 ,50 ,100];  //180


// function sumArray($arr){
//     $sum = 0 ;
//     for($i=0 ; $i<count($arr) ;  $i++){
//         $sum +=$arr[$i];
//     }
//     return $sum ;
// }



/////////////////////////////////////////////////////////////////
/** 
 * Get  => url limit
 * Post  => body
 */








//////////////////////////////////////////////////////////////////////////////////////
/**
 * post 
 * get
 */

// print_r($_GET);

// echo $_GET['name']."<br>";
// echo $_GET['email']."<br>";
// echo $_GET['password']."<br>";




// echo $_POST['name']."<br>";
// echo $_POST['email']."<br>";
// echo $_POST['password']."<br>";








//////////////////////// SERVER /////////////////////////////////
echo "<pre>";
print_r($_SERVER);