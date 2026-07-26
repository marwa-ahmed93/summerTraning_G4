<?php


// echo "hello" ;

// int x = '5' ;

// $x = 10;
// echo gettype($x);
// echo "<br>";

// $x = "marwa";
// echo gettype($x);
// echo "<br>";

// $x = [];
// echo gettype($x);
// echo "<br>";

// $x = 10 + '10';  //20
// $y = (int) "marwa" + 20; 

// $gender = 'male';
// $age = 20;
// if ($gender == 'female') {

//     echo "done";

//     if ($age  > 15) {
//         echo "you can register";
//     }
// }

// elseif ($gender == "male") {
//     echo "hello ";
// } else {
//     echo "not valid";
// }


// $x =10 ;
// $y = '10';

// if($x === $y){
//     echo "equal";
// }
// else{
//     echo "not equal";
// }


$age = 20;
$gender = 'male';
// if($age >15 && $gender == 'male'){
//  echo "true ";
// }
// else{
//     echo "not equal";
// }

// if($age >15 ||  $gender == 'female'){
//   echo "true ";  
// }
// else{
//         echo "not equal";
// }



// if($age >15 xor  $gender == 'male'){
//   echo "true ";  
// }
// else{
//         echo "not equal";
// }



////////////////////// switch ///////////////////////////
$day = 9;
// if ($day == 1) {
//     echo "saturday";
// } elseif ($day == 2) {
//     echo "sunday";
// } elseif ($day == 3) {
//     echo "monday";
// } elseif ($day == 4) {
//     echo "thrathday";
// } elseif ($day == 5) {
//     echo "wenthday";
// } elseif ($day == 6) {
//     echo "tuthday";
// } elseif ($day == 7) {
//     echo "friday";
// } else {
//     echo "not valid day";
// }

// switch ($day) {

//     case 1:
//         echo "saturday";
//         break;

//     case 2:
//         echo "sunday";
//         break;

//     case 3:
//         echo "monday";
//         break;

//     case 4:
//         echo "thrathday";
//         break;

//     case 5:
//         echo "wenthday";
//         break;

//     case 6:
//         echo "tuthday";
//         break;

//     case 7:
//         echo "friday";
//         break;


//     default:
//         echo "not valid";
// }

/**DRY */
// $fruit = 'tomato';

// switch ($fruit) {

//     case 'apple':
//     case 'orange':
//     case  'mango':
//         echo "this is a fruit";
//         break;

//     case 'carrot':
//     case 'tomato':
//         echo "this is a vegetable";
//         break;


//     default:
//         echo "not valid value";
// }

// 19%10 =>9
// ** 2**2
// $x = 2**2 ;
// echo $x;
// $x = 5;
// $x += 1;                // $x +1 ;
// echo $x;




/////////////// increments ///////////////////
/**
 * post-increments   $i++
 * pre-increments   ++$i 
 */
// $i=5;
// echo $i++ ."<br>";
// echo $i ;


// $i=5;
// echo ++$i ."<br>";
// echo $i ;


// $i =5; 
// //    5   +  2=7     7  =>14
// $y = $i++  + 2  + ++$i;
// echo ($y);  //14

// $a = 10;
// $b = $a ;

// echo $a."<br>" ;  // 10

// echo $b."<br>" ; //10



// $a = 10;
// $b = $a++ ;

// echo $a."<br>" ;  // 11

// echo $b."<br>" ; //10



// $a = 10;
// $b = ++$a ;

// echo $a."<br>" ;  // 11

// echo $b."<br>" ; //11


// $x = 6;
// //    6     4 10  7  17 3 20  9   =>29
// $y = $x++ + 4 + $x++ + 3  +  ++$x ;
// echo $y;









///////////////////////////////  loop   ///////////////////////
/**
 * for 
 * while
 * do while
 */
// echo 'Hello';
// echo 'Hello';
// echo 'Hello';
// echo 'Hello';
// echo 'Hello';
// echo 'Hello';
// echo 'Hello';
// echo 'Hello';
// echo 'Hello';
// echo 'Hello';
// echo 'Hello';
// echo 'Hello';
// echo 'Hello';
// echo 'Hello';
// echo 'Hello';
// echo 'Hello';
// echo 'Hello';
// echo 'Hello';
// echo 'Hello';
// echo 'Hello';
// echo 'Hello';
// echo 'Hello';


///////////////////////////// for  //////////////////////////
// for( $i=10 ; $i > 0 ; $i-- ){
//     echo "Hi <br>".$i;
// }


// for(  ;   ;  ){
//     echo "hi";
// }


// for($i=0 ; $i <= 10 ; $i++){
//     echo $i;
// } 


///////////////////  while /////////////////////////////


// $i = 0 ;
// while($i <= 10 ){
//       echo $i;
//       $i++;
// }


// $correctPin  = 1278 ;
// $enterPin = null;

// while($correctPin != $enterPin ){
//     echo "please enter your pin";
//     $enterPin = 1278 ;
// }


//////////////////////// do while ////////////////////////

// $age  = 18;
// while($age >20){
//     echo "hello";
// }

// do{
//    echo "hello";  
// }while($age >20);


/////////////////////// two words////////////////////////
/**
 * break
 * continue
 */

// 1=>50     1234 Boom 6789 Boom 11 12 13 14 Boom  


// for ($i = 1; $i <= 50; $i++) {

//     if ($i % 5 == 0) {
//         echo "BOOM <br>";
//         continue;
//     }
//     echo $i . "<br>";
// }



//////////////////////////// Array  /////////////////////////////
/**
 * index array 
 */
// $student1 = 'ahmed';
// $student2 = "yasser";
// $student3 = "malik";


// $students = [];

// $students = array();
// echo gettype($students);



//index array  start from zero
//            0          1          2       3          4     5     6
// $students = ['ahmed', 'mohmaed' , 'zain' , 'yasser' ,true ];
// echo "<pre>";
// var_dump($students);
// echo $students[0];
// echo $students[1];
// echo $students[2];
// echo $students[3];
// echo $students[4];

// $students[] = "malik";

// echo "<pre>";
// print_r($students);

// for($i=0 ; $i<  count($students)  ; $i++){
//     echo $students[$i]."<br>";
// }


// echo count($students);  start from one




////////////////  foreach  ///////////

// foreach($students as $student){
//   echo $student ."<br>" ;
// }



/////////////////// 2-ِAssoc Array   /////////////

// $persons = [
//     "name" => "ahmed" ,
//     "age" =>  28 ,
//     "gender" => "male"
// ];
// // echo "<pre>";
// // print_r($persons);
// // echo $persons['name'];
// // echo $persons['age'];
// // echo $persons['gender'];

// foreach($persons as $key=>$value){
//     echo "the $key is: " .$value."<br>" ;
// }



/////////////////// 2-multi dimensions Array   /////////////


// $students =[
// //  0      1       2    
//  ['ahmed',27 , 'male'],  //  0
//  ['mohamed',18 , 'male'],  // 1
//  ['mona',20 , 'female']   //2

// ];
// echo "<pre>";
// print_r($students[2][1]);

// $students =[
//             // 0     1     2
//     'a' => ['ahmed',27 , 'male'],
//     'b' => ['mohamed',18 , 'male'],
//     'c' =>['mona',20 , 'female'] 
// ];
// print_r($students['b'][0]);


// $students =[
            
//   'a' => ['name'=>'mona' , 'age'=> 20 , 'gender'=> 'female'],
//   'b' => ['name'=>'nour' , 'age'=> 18 , 'gender'=> 'female'],
//   'c' => ['name'=>'mody' , 'age'=> 14 , 'gender'=> 'male']
// ];
// // print_r($students['b']['name']);
// foreach($students as $key=>$value){
// //     echo "<pre>";
// //   print_r($key);
// foreach($value as $v){
//     echo $v ."<br>";
// }

// }








////////////////////////// pass by value bass by reference  ///////////////////////////
$x = 10;
echo $x ."<br>";  //10

$y = &$x ;
echo $y ."<br>";  //10


$x = 20;

echo $x ."<br>";  //20

echo $y ."<br>";  //10