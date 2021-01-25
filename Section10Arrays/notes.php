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




echo "______________CHALLENGE ISBN CHECKER ____________________";

if (isset($_POST["submit"])) {

  $isbn = $_POST["isbn"];

  if (mb_strlen($isbn) === 10) {
    echo "Enter";

    $splitNumbers = str_split($isbn);
    echo "<pre>";
    print_r($splitNumbers);

    $addNumbers = 0;

    for ($i = 0; $i <= 9; $i++) {
      $splitTimes = $splitNumbers[$i] * ($i + 1);
      $addNumbers += $splitTimes;
      $modulus = $addNumbers / 11;

      echo "<pre>";
      print_r($splitTimes);
      echo "<br>";
      echo "<br>";
    }
    echo ("Add numbers is: " . $addNumbers);
    echo "<br>";
    echo "<br>";

    if (is_int($modulus) === true) {
      echo "This is a VALID ISBN number";
    } else {
      echo "This is NOT a VALID ISBN number";
    }

    echo "<br>";
  } else {
    echo "Must be 10 digits";
  }
}

echo "<br>";
echo "<br>";

?>

<form action="" method="POST">
  ISBN number-<input type="number" name="isbn" value="isbn">
  <input type="submit" name="submit" value="submit">
</form>



echo "------------------ MIND YOUR LANGUAGE -------------";

if (isset($_POST["submit"])) {

$textBox = $_POST["textBox"];
echo $textBox;

$badWords = ["shit", "cunt", "fuck"];

foreach ($badWords as $badWord) {
$textBox = str_replace($badWord, "*****", $textBox);
}
echo $textBox;
}
echo "<br>";
echo "<br>";

?>

<form action="" method="POST">
  Text box<input type="text" name="textBox">
  <input type="submit" name="submit" value="submit">
</form>


echo "---------------- SORT ------------"

$names = array("Jay", "Beth", "RJ", "Liam");

rsort(($names));

echo "<ol>";

  foreach ($names as $name) {
  echo "<li>" . $name . "</li>";
  }

  echo "</ol>";



echo "---------------- EXPLODE AND IMPLODE ------------------"

$string = "John, Sarah, Ken, Bart, Amy";

$names = explode(", ", $string);

echo "
<pre>";
print_r($names);

$imploded = implode("|", $names);

echo $imploded;



echo "------------------------- INSERT ARRAYS --------------------"

$cities = ["London", "Paris"];

echo "<pre>";
print_r($cities);

array_push($cities, "New York", "Berlin");

print_r($cities);

array_unshift($cities, "Amsterdam", "Dublin");

print_r($cities);

array_unshift($cities, "Manila");

print_r($cities);



echo " -------------- AOUND THE WORLD CHALLENGE -------------------";

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



echo "---------------Remove First and Last Elements-----------------"

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



echo " ---------------- SLICE -----------------------------------"

echo "<pre>";

$letters = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "o", "p", "q"];

$result = array_slice($letters, 5);

print_r($result);

$result = array_slice($letters, 0, 5);

print_r($result);

$result = array_slice($letters, -5, 5);

print_r($result);



echo "---------------- CHALLENGE Getting hot in here! ----------------"

$t = [
  32.3, 31.3, 28.2, 29.3, 29.7, 29.9, 28.7, 28.4, 30.5, 30.5, 31.7, 30.6, 29.4, 32.0,
  36.2, 31.3, 32.8, 33.3, 32.9, 28.8, 30.8, 28.0, 25.9, 30.8, 32.4, 32.0, 31.3, 25.2,
  29.1, 28.6, 30.6
];

$sum = array_sum($t);

$number = count($t);

$average = $sum / $number;

echo "The average temperature is " . round($average, 1) .  "℃";
echo "<br>";

sort($t);

$lowest = array_splice($t, 0, 5);
$lowest = implode("℃, ", $lowest);

echo "The 5 lowest temperature are " . $lowest . "℃";
echo "<br>";

$highest = array_splice($t, -5, 5);
$highest = implode("℃, ", $highest);

echo "The 5 highest temperature are " . $highest .  "℃";