<?php
function findSum($a, $b){
    $x =$a;
    $y = $b;
    $z = $x + $y;
    echo $z;
}
findSum(5, 10);

echo "<br>";
//////////

function setHeight($hight = 50){
    echo "The height is : $hight <br>";
}
setHeight(350);
setHeight(); 

////

function sum($x, $y){
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "15 + 20 = " . sum(15, 20) . "<br>";
echo "25 + 30 = " . sum(25, 30) . "<br>";

/////

function add_five(&$value){
    $value += 5;
}

$num = 2;
add_five($num);
echo $num; 
echo "<br>";

///////

function sumMyNumbers(...$x){
    $n = 0;
    $len = count($x);
    echo "len is $len <br>";
    for($i=0; $i<$len; $i++){
        echo "i is $i <br>";
        $n += $x[$i];
        echo "n is $n <br>";
    }
    return $n;
}
$a = sumMyNumbers(2, 3, 4, 5, 6, 7, 0, 8, 9, 10);
echo "The sum is $a";

?>


