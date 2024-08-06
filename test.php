
<?php


// class Duzbucaq{
//     public $a;
//     public $b;

//     public function P(){
//         return 2*($this->a+$this->b);
//     }

//     public function S(){
//         return ($this->a*$this->b);
//     }
// }
    
//     $duzbucaq= new Duzbucaq;

//     $duzbucaq->a=5;
//     $duzbucaq->b=7;

// echo $duzbucaq->P()."<br>". $duzbucaq->S();







// class Animal{

//     private function drink(){
//         echo "icir";
//     }
//     private function run(){
//         echo "qacir";
//     }
    
// }


// class Dog extends Animal{
//     private function dog1(){
//         echo "silvestr ";
//     }
//     private function dog2(){
//         echo "it2";
//     }
//     public $beat;
// }

// $dog = new Dog;

// echo $dog->dog1().$dog->run()."<br>";









class Car{
    private $model;
    private $name;
    private $year;


    public function __construct ($model, $name, $year){
        $this->model=$model;
        $this->name=$name;
        $this->year=$year;
   }
   public function get(){
    return "{$this->model}
     {$this->name}
    {$this->year}";
    
   }
}

class BMW extends Car{

    public $motor;

public function __construct ($model, $name, $year,$motor){
    parent:: __construct ($model, $name, $year);
        $this->motor=$motor;
    }

public function getir(){
    return $this->motor;
}

public function alldata(){
    return parent::get()."{$this->motor}";
}
}

$car=new BMW("kia","serato","2021","2T");

echo $car->alldata();







?>


