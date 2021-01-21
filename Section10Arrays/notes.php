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