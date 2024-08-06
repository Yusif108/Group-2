<?php


// function data($name,$lastname, $country){

//     $data="I'm ". $name." ". $lastname. " from ". $country;

//     return $data;

// }
//     echo data("Yusif","Huseynaliyev","Azerbaijan");
    



// trait Loglama{
//     public function log($mesaj) {
//         echo $mesaj;
// }
// }

// class A{
//     use Loglama;
//     public $name;

//     public function __construct($name) {
//         $this->name = $name;
//             $this->log("{$this->name} adli istifadeci yaradildi");
// }
// }

// $a=new A("Yusif");









// abstract class animal{
//     public abstract function eat();
//     public abstract function sound();
// }

// class dog extends animal{
//     public function eat(){
//         echo "dog is eating <br>";
//     }
//     public function sound(){
//         echo "dog is barking <br>";
// }
// }

// class cat extends animal{
//     public function eat(){
//         echo "cat is eating <br>";
//     }
//     public function sound(){
//         echo "cat is mouing <br>";
//     }
// }
// class tiger extends animal{
//     public function eat(){
//         echo "tiger is eating <br>";
//     }
//     public function sound(){
//         echo "tiger is doing noise <br>";
//     }
// }

// $dog=new dog();
// $dog->eat();
// $dog->sound();

// $cat=new cat();
// $cat->eat();
// $cat->sound();

// $tiger=new tiger();
// $tiger->eat();
// $tiger->sound();








/*
class person{
    
    private $phone;
    private $email;
    private $name;

    public function __construct($name, $email, $phone){
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
}
public function getName(){
    return $this->name;
}
public function setName($name){
    return $this->name = $name;
}
public function getEmail(){
    return $this->email;
}
public function setEmail($email){
    return $this->email = $email;
}

public function getPhone(){
    return $this->phone;
}
public function setPhone($phone){
    return $this->phone = $phone;
}

    public function __destruct()
    {
        echo"Sagol {$this->name} <br>";
    }
}


$yusif = new person("Yusif","@gmail", 456789);

echo $yusif->getName();
echo "<br>";
echo $yusif->getEmail();
echo "<br>";
echo $yusif->getPhone();
echo "<br>";

$yusif->setName("Ramil");
$yusif->setEmail("@hjdsnf");
$yusif->setPhone(987656);


echo $yusif->getName();
echo "<br>";
echo $yusif->getEmail();
echo "<br>";
echo $yusif->getPhone();
echo "<br>";


*/







?>