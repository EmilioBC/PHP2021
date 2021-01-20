<?php



echo "<pre>";

echo "__________________Arrays__________________";

$names = array('John', 'Mary', 'Bob', 'Sally');
print_r($names);

$cities = ['London', 'Paris', 'New York'];
print_r($cities);


$mixed = [true, false, 4, "Jordan"];
print_r($mixed);


echo "____________________Ordered List_______________________";

$names = ['Mary', 'James', 'Micheal', 'Ben'];

echo "<ol>";

foreach ($names as $name) {

  echo "<li>" . $name . "</li>";
}

echo "</ol>";



echo "___________String SPLIT_________________";

$word = "Christmas";

$letters = str_split($word, 4);

echo "<pre>";

print_r($letters);
