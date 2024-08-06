<?php





// print_r($_GET);


// $x = $_GET["x"];
// $y = $_GET["y"];

// echo $x+$y;




// $x = $_POST["x"];
// $y = $_POST["y"];

// echo $x+$y;






// $a= $_GET["a"];

// $b= $_GET ["b"];

// echo "Welcome"." ".$a." ". $b;






// $x = isset($_GET["x"]) ? $_GET["x"] : null;
// $y = isset($_GET ["y"]) ? $_GET ["y"] : null;

// echo $x+$y;






$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["calc"];
$netice= null;

switch ($z){
    case "+":
        $netice=$x+$y;
        break;
    case "-":
        $netice=$x-$y;
        break;
    case "*":
        $netice=$x*$y;
        break;
    case "/":
        if ($y==0){
            echo "0-a bolmek olmaz";
        }
        else{
            $netice=$x/$y;
        }
        break;
    default:
        echo "emeliyyatda sehv";
}
    echo $netice;



?>