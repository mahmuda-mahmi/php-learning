<?php
/*
/// for loop
for($x=0; $x<10; $x++){
    echo "The number is $x <br>";
}
*/

//foreach loop on indexed array
$colors = array("red", "green", "blue", "yellow");
foreach($colors as &$x) {
    if($x == "blue") $x = "pink";
}
var_dump($colors);


//foreach loop on associative array
$members = array("John", "Paul", "George", "Ringo");

foreach($members as $key => $value){
    echo "$key = $value <br>";
}


//foreach loop on objects
class Car{
    public $color;
    public $model;
    public function __construct($color, $model){
        $this->color = $color;
        $this->model = $model;
    }
}

$myCar = new Car("red","bmw");

foreach($myCar as $x => $y){
    echo "$x = $y <br>";
}
?>