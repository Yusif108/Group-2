<?php

// $city = array("Baku", "Sumqait", "Gence" );

// print_r ($city);

// $city=["Baku", "Sumqait", "Gence"];

// echo $city[0]." ". $city[1]. " ". $city[2];


// echo count($city);

// gettype($city);

// var_dump($city);

// $users = array ("name"=> "Yusif", "surname"=> "Huseynaliyev", "age"=>"30","male","city"=>"Baku", "Binagadi");

// $users[]="test";


// // echo "name: ".$users["name"]. "<br>" . "surname: ".$users["surname"]."<br>";


// print_r ($users);



// $phone= ["samsung"=>["samsung1","samsung2"], "apple"=>["apple1","apple2"] ];

// echo $phone["samsung"][0]."<br>".$phone["apple"][1];



// $cars = ["bmw","tayota","nissan","mercedes"];


// foreach($cars as $car) {
//     echo $car."<br>";
// }



// $cars = ["car1"=>"bmw","tayota","nissan","mercedes"];


// foreach($cars as $keys=>$car) {
//     echo $keys." => ". $car."<br>";
// }


// $computers= ["acer","toshiba","asus"];

// foreach($computers as $computer) {
//     echo $computer."<br>";
// }

// echo count ($computers)."<br>";

// $computers[]="HP";

// $computers[]="lenova";

// echo count ($computers)."<br>";


// $computers[3]="casper";


// echo $computers[3];


// $computers= ["acer","toshiba","asus"];


// //     if (in_array("acer", $computers)){
// //     echo "Hp siyahida var";
// // }       else{
// //     echo "HP siyahida yoxdur";
// // }


// if ($computers[0]=="acer"){
//     echo "yes";
// }
// else{
//     echo "no";
// }









// $ad=["Mustafa","Ramin","Yusif","Ugur", "Ruslan","Ramil"];


// function c($ad){
//     $b=[];
//     foreach ($ad as $value){
//         if (strlen($value)==5) {
//             echo $value;
//             array_push($b,$value);
//         }
//     }
//     return $b;
// }

//     $netice = c($ad);



$students= [
    ["name"=>"Yusif", "qiymet"=>"A"],
    ["name"=>"Ruslan", "qiymet"=>"B"],
    ["name"=>"Ugur", "qiymet"=>"C"],
];


foreach($students as $arr){
    echo $arr["name"]." ".$arr["qiymet"]."<br>";
}
    









?>