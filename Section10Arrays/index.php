<?php

$cities = array("Paris", "New York", "Amsterdam", "Berlin", "London", "Brisabane");
sort($cities);

echo "<ol>";
foreach ($cities as $city) {
  echo "<li>" . $city . "</li>";
}
echo "</ol>";

echo "<br>";

array_push($cities, "Sydney", "Helsinki", "Beijing", "Dublin", "Rome");

sort($cities);

echo "<ol>";

foreach ($cities as $city) {
  echo "<li>" . $city . "</li>";
}


echo "</ol>";
