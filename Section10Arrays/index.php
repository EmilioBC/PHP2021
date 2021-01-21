<?php

if (isset($_POST["submit"])) {

  $isbn = $_POST["isbn"];

  if (mb_strlen($isbn) === 10) {
    echo "Enter";

    $splitNumbers = str_split($isbn);
    echo "<pre>";
    print_r($splitNumbers);

    // $one = $splitNumbers[0] * 1;
    // $two = $splitNumbers[1] * 2;
    // $three = $splitNumbers[2] * 3;
    // $four = $splitNumbers[3] * 4;
    // $five = $splitNumbers[4] * 5;
    // $six = $splitNumbers[5] * 6;
    // $seven = $splitNumbers[6] * 7;
    // $eight = $splitNumbers[7] * 8;
    // $nine = $splitNumbers[8] * 9;
    // $ten = $splitNumbers[9] * 10;

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