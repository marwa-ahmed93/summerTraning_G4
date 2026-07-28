<?php
session_start();

// echo "Welcome ".$_SESSION['username'] ;


// echo  $x ;   //Warning


// include ('test.php');
// echo 10 ;


/**syntax error */

// echo "hello" ;
// echo "hello" 


// echo "welcome";

/**       fatal error     */
// function calc(){

// }
// function calc(){
    
// }

// echo "marwa"+"ahmed";

// echo "hi";
// require "test.php";

//include ('test.php');






















// include_once ('test.php');

// echo "html" , "css" , "js" ,"bootstrab" ;
// print("html"  );
////////////////////////////////////////////////////////
/**         Files              */

// readfile('test.txt');

/**
 * readfile(fileName)
 * fopen(filename , mode) => read write apind
 */
// $file = fopen('test.txt','r') ; 
// echo fread($file , filesize('test.txt')/2);
// fclose($file);

// $file = fopen('test.txt','w') ; 
// echo fwrite($file , "html css js frontend deeveloper");
// fclose($file);


// $file = fopen('test.txt','a') ; 
// echo fwrite($file , "html css js frontend deeveloper");
// fclose($file);


$file = fopen('test.txt','r') ; 
//echo fgets($file);

while($line = fgets($file) ){
    echo $line ."<br>";
}