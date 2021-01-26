<?php

if (isset($_POST["submit"])) {

  $number = $_POST["number"];
  $total = 0;
  $i = 1;

  $last4 = substr($number, -4, 4);

  $number = str_split($number);

  $number = array_reverse($number);

  foreach ($number as $digit) {

    if ($i % 2 == 0) {
      $digit *= 2;

      if ($digit > 9) {
        $digit -= 9;
      }
    }

    $total += $digit;

    $i++;
  }

  if ($total % 10 == 0) {
    echo "Your credit card number ending in " . $last4 . " is valid";
  } else {
    echo "Your credit card number ending in " . $last4 . " is invalid";
  }
}


?>

<form action="" method="POST">
  <input type="text" name="number" value="number">
  <input type="submit" name="submit" value="submit">
</form>