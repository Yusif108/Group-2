<?php

// class Car{

//     public $name = "BMW";


//     public $color = "red";

//     public $number1;

//     public $number2;



// }


// $car= new Car;

// echo $car->name." ";

// echo $car->color;









// class Person {
//     public $name = "Yusif";
//     public $surname = "Huseynaliyev";

//     public function fullname(){
//         return $this->name." ".$this->surname;
//     }

// }
    

// $person= new Person;
// echo $person->fullname();

// echo $person->name."<br>";
// echo $person->surname;








// class calc{

//     public $number1;
//     public $number2;
//     public function SUM(){

//         return $this->number1+$this->number2;

//     }
// }

//     $calc=new calc;
//     $calc->number1 = 8;
//     $calc->number2 =9;
    
//     echo  $calc->SUM();





// class Person{
// //     public function __destruct(){
  
// //       echo "bitdi <br>";
// //     }
  
  
// //     public function  __construct(){
// //       echo "basladi <br>";
// //     }
// //   }
// //     $person = new Person;









// class Person{
//     public $name;

//     public function  __construct($name, $surname){
//         $this->name = $name;
//         $this->surname = $surname;   
//     }

// }


// $person = new Person ("yusif","huseynaliyev");

// echo $person -> name. "<br>";
// echo $person-> surname;







// class hisse{

//     public $tormoz;

//     public function __construct ($tormoz){
//         $this->tormoz = $tormoz;
//     }

// }

// $hisse=new hisse("tormoz");



// class BMW extends hisse{

// }

// $BMW=new BMW;

// echo $BMW->tormoz;










// class A{
//     const B= "Yusif";
//     public static function C(){
//         echo "Huseynaliyev";
//     }
//     function get(){
//         echo self:: B;
//     }
// }

// echo A::B;
// echo A::C();










// trait A{
//     public function test1(){
//         echo "salam";
//     }
// }

// trait B{public function test2(){
//     echo "salam";
//     }
// }


// class C {
//     use A,B;
// }


// $c= new C;

// $c->test1();
// $c->test2();






// trait A{
//     public function A(){
//         echo "A traiti isleyir"."<br>";
//     } 
// }

// trait B{
//     public function B() {
//         echo "B traiti isleyir";
// }
// }

// class C{
//     use A,B;
// }

// $c= new C;
// $c-> A();
// $c-> B();






?>
