<?php


function calculate($num1, $num2)
{
  $add = $num1 + $num2;
  $subtract = $num1 - $num2;
  return [$add, $subtract];
}

$results = calculate(3, 2);

echo $results[0];
echo "<br>";
echo $results[1];
