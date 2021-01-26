<?php
echo "<pre>";

$cities = ["London", "New York", "Paris", "Amsterdam", "Berlin"];
// print_r($cities);
foreach ($cities as $city) {
  echo $city;
  echo "<br>";
}

echo "<br>";
echo "<br>";

$students = ["Jay" => 37, "Beth" => 34, "RJ" => 6, "LJ" => 5];
// print_r($students);

foreach ($students as $student => $age) {
  echo $student . ' is ' . $age . ' years old';
  echo "<br>";
}
