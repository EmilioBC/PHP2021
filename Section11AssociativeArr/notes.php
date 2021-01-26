<?php



$students = ["Jay" => 37, "Beth" => 34, "RJ" => 6, "LJ" => 5];

echo "<pre>";
print_r($students);


echo " -------------------- Loop through Associatuve -----------";


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



echo " -------------- CHALLENGE Capital City of Countries -----------------------";

echo "<pre>";

$cities = [
  "Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels",
  "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris",
  "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin",
  "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam",
  "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest",
  "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna",
  "Poland" => "Warsaw"
];

asort($cities);

foreach ($cities as $country => $city) {
  echo "The capital city of " . $country . " is " . $city;
  echo "<br>";
}
