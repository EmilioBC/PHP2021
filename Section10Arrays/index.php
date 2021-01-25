<?php
echo "<pre>";

$cities = ["London", "New York", "Amsterdam", "Dublin"];
print_r($cities);
echo "<br>";

$lastCity = array_pop($cities);
echo "The last city is " . $lastCity;

echo "<br>";
echo "<br>";
print_r($cities);

$firstCity = array_shift($cities);
echo "The first city is " . $firstCity;

echo "<br>";
echo "<br>";
print_r($cities);
