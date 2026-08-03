<?php


// class Car{

// public $color ;

// public function move(){
//     echo "move";
// }

// }

// $car =  new car;
// $car->color = "RED";
// $car->move();



// function calc(){

// }
// calc();



/////////////////////////////  1-inherit //////////////////////////////

// class Animal{
//    public $color ;
//    public $age;
//    public $name;

//    public function makeSound(){
//     echo "how how";
//    }

   
//    public function eat(){
//     echo "Eating Now";
//    }
// }


// class Dog extends Animal{
//   public function play(){
//     echo "play";
//   }
// }
// // $dog = new Dog ;
// // $dog->makeSound();



// class German{

// }

// class Cat{
   
// }

//////////////////////////  trait /////////////////////////////


// trait Animal{
//    public $color ;
//    public $age;
//    public $name;

//    public function makeSound(){
//     echo "how how";
//    }

   
//    public function eat(){
//     echo "Eating Now";
//    }
// }


// trait Dog{
//   public function play(){
//     echo "play";
//   }
 
// }





// class German{
// use Animal;
// use Dog;
// }

// $g= new German;
// $g->makeSound();
// $g->play();




// class Cat{
   
// }


////////////////////////////////////  2-Abstract  //////////////////////////////////////////

/**
 * abstract method
 * abstract class
 */

// abstract class Animal{
//   public $name ; 
//   public function eat(){
//     echo "eat";
//   }
//  abstract public function makeSound();
// }

// class Dog extends Animal{
// #[Override]
// 	public function makeSound()
//   {
//     echo "how how";
//   }
// }

/////EX

// abstract class PaymentGateway{

// abstract public function pay($amount);
// }

// class paypal extends PaymentGateway{
//   #[Override]
//   public function pay($amount)
//   {
//      echo "with paypal ".$amount;
//   }
// }

// class stripe extends PaymentGateway{
//   #[Override]
//   public function pay($amount)
//   {
//      echo "with stripe ".$amount;
//   }
// }

// // $gateway = new paypal ;
// // $gateway->pay(10000);
// // new paypal->pay(1000);


// function proccessPayment($gateway , $amount){
//   echo $gateway->pay($amount);
// }

// proccessPayment( new paypal , 2000);
// echo "<br>";
// proccessPayment( new stripe ,8000);











///////////////////////////////////////  const  ///////////////////////////////////////////////

// class User{
//   const ROLE = "user";
//   public $name ;
//   public function getRole(){
//     $this->name ;
//    return User::ROLE;
//   }
// }






///////////////////////////////////////////////// 3-Encapsulation     ////////////////////////////////////////////
/**access modifier
 * 
 * 1-public
 * 2-private
 * 3-protected
 * 
 */

// class Animal{
//   protected $name ;
// public function getname()  {
//   echo $this->name  = "lion";
// }

// }
// $a = new Animal ;

// echo $a->name  = 'lion';

//Ex

// class BankAccount
// {

//   private $balance;

//   public function setBalance($balance)
//   {
//     $this->balance = $balance;
//   }

//   public function getBalance()
//   {
//     return $this->balance;
//   }
// }

// $account = new BankAccount ;


// echo $account->getBalance() . "<br>";
//  $account->setBalance(2000);

//  echo $account->getBalance() . "<br>";








/////////////////////////////////////////////     Final   //////////////////////////////////////////////////////

//  class Animal{
// final public function makeSound(){

// }

// }
// class Dog extends Animal{
// #[Override]  //poly
// 	public function makeSound()
//   {
//     return parent::makeSound();
//   }
// }




////////////////////////////////////////////    4-polymorphism   /////////////////////////////////////////////////////////
/**
 * Override
 * overloading
 */

//  class Animal{
//  public function makeSound(){

// }
// public function eat($a , $b){

// }

// }
// class Dog extends Animal{
// #[Override]  //poly
// 	public function makeSound()
//   {
//     return parent::makeSound();
//   }
// public function eat($a=1 , $b=2 , $f=4){  //overloading

// }

// }


//////////////////////////////////////////////// Interface     ////////////////////////////////////////////////////////

// interface PaymentMethod{

//   public function paypal();
//   public function stripe();
// }

// interface move{

// }


// class Paypal implements PaymentMethod , move{
//  public function paypal(){}
//   public function stripe(){}
// }


/**    class    abstract    interface           */


//////////////////////////////////////// Method cahning  ///////////////////////////////////
// $x = 10 ;
// $x += 20 ;

// class Calculator{

// private $result = 0 ;

// public function sum($a , $b){
//   $this->result = $a + $b ;
//  return $this ;
// }

// public function sub($a){
//   $this->result -= $a  ;
//  return $this ;
//  }


// public function mult($a ){
//   $this->result *= $a  ;
//  return $this ;
// }


// public function div($a){
//   $this->result /= $a ;
//   return $this ;
// }

// public function result(){
//   echo $this->result;
// }

// }

// $calc = new Calculator ;
// $calc->sum(5,5)->sub(20)->mult(50)->div(2)->result();
// // echo '<br>';
// // $calc->sub(5,5);
// // echo '<br>';

// // $calc->mult(5,5);
// // echo '<br>';

// // $calc->div(5,5);
// // echo '<br>';



//////////////////////////////////////     Name Space     ////////////////////////////////////

// include('User.php');   //User
// use Customer\User;


// include('admin/test.php');   //User
// use Admin\User  as admin;



// //user
// $user = new User ;
// $user->role();

// //admin
// // $user = new User ;
// // $user->role();


// $user = new admin ;
// $user->role();



//////////////////////////////////////////// PDO   /////////////////////////////////////

//* 1 

// $connection =  mysqli_connect('localhost', 'root', '', 'nti_online_g4');

// $query = "SELECT * FROM `employees`";
// $result =  mysqli_query($connection, $query);
// $data =  mysqli_fetch_all($result, MYSQLI_ASSOC);
// echo "<pre>";
// print_r($data);


///2 
// $connection = new mysqli('localhost', 'root', '', 'nti_online_g4');
// $query = "SELECT * FROM `employees`";
// $result =   $connection->query($query);
// $data  = $result->fetch_all(MYSQLI_ASSOC);
// echo "<pre>";
// print_r($data);


//3  php data object
// $dsn  = new PDO(dsn:"mysql:host=localhost;dbname=nti_online_g4", username:'root',password:'');
// $query = "SELECT * FROM `employees`";
// $result =   $dsn->query($query);
// $data  = $result->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($data);


//insert 

// $dsn  = new PDO(dsn:"mysql:host=localhost;dbname=nti_online_g4", username:'root',password:'');

// $insertQuery = "INSERT INTO departments(`name`) VALUES(:name)";
//          $result = $dsn->prepare($insertQuery);  //1

//       $depName = "sales";
//       //  $result->bindParam(':name' , $depName);

//          $result->execute(params:['name' => 'manager']);  //1





////////////////////////////////////////////////////////////////////