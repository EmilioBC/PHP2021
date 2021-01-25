<?php

$t = [
  32.3, 31.3, 28.2, 29.3, 29.7, 29.9, 28.7, 28.4, 30.5, 30.5, 31.7, 30.6, 29.4, 32.0,
  36.2, 31.3, 32.8, 33.3, 32.9, 28.8, 30.8, 28.0, 25.9, 30.8, 32.4, 32.0, 31.3, 25.2,
  29.1, 28.6, 30.6
];

$sum = array_sum($t);

$count = count($t);

$average = $sum / $count;

echo "The average daily temperature is - " . round($average, 1) . "℃";
echo "<br>";

sort($t);

$lowest = array_slice($t, 0, 5);

$lowest = implode("℃, ", $lowest);

$highest = array_slice($t, -5, 5);

$highest = implode("℃, ", $highest);

echo "The top 5 LOWEST temperatures are - " . $lowest;
echo "<br>";
echo "The top 5 HIGHEST temperatures are - " . $highest;
