<?php
/**
 * Encapsulation
 * inherit
 * poly
 * abstract
 */




// class Car{
  
// public $model ;
// public $color;
// public $speed ;


// public function __construct($model , $color , $speed)
// {
//   echo "hi";
//    $this->model = $model ;
//     $this->color = $color ;
//     $this->speed = $speed ;
// }

// public function drive(){
//     // echo "start drive";
//     echo "the model is: $this->model and car color is: $this->color and speed is: $this->speed km/h";
// }
 
// public function engine(){
//     // echo "start engine";
   
// }


// public function __destruct()
// {
// echo  "finish";
// }

// }

// $car =   new Car("toyota",'black',120) ;
// //echo gettype($car); //object
// echo "<br>";
// echo $car->model = "BMW <br>";
// echo $car->color = "Red <br>";
// echo $car->speed =  120 ."km/h". "<br>";

// $car->drive();
// echo "<br>";
// // $car->engine();










////////////////////////////////////  inherit  //////////////////////////////////////////


class Animal{

    public $name ;
    public $age ;
    public $color ;

    public function __construct($name)
    {
    echo "hello";
    $this->name = $name;
    }

    public function makeSound(){
        echo "meow meow";
    }

    public function eat(){
        echo "eat";
    }

}



class Dog extends Animal{
    #[Override]
    public function __construct()
    {
        parent::__construct($name='lion');
    }
    #[Override]
    public function makeSound()
    {
        echo "how how";
    }
    public function play(){
        echo "paly";
    }
}
$dog = new Dog();
$dog->makeSound();
$dog->eat();


// class German extends Dog{}
// $g = new German;
// $g->eat();

echo "<hr>";

// class Cat extends Animal{}
// $cat = new Cat;
// $cat->eat();