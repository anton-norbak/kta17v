<?php

echo "Hello World!<br/>";

$name= "Anton";

$number = 15;
$number1 = 10.125;



$var = NULL;

$number2 = $number;
$number3 = &$number;

$number = 10;
$sum = $number + $number1;
$sum2 = $number2 + $number1;
$sum3 = $number3 + $number;
$sum4 = $number + $name;

echo "first sum is: ".$sum." and second sum is: ".$sum2."and third sum is ".$sum3."<br>";
echo "Text + number $sum4 <br>";


echo $sum."<br>";
echo "My name is $name";

?>