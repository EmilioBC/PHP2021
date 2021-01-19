<?php

if (isset($_POST)) {

  $temperature = $_POST['temperature'];
  $degrees = $_POST['degrees'];


  if ($degrees == "C") {
    echo "The Temperature is " . $temperature . $degrees;
    echo "<br>";
    echo "The conversion to Farenheit is " . ($temperature - 32) * 5 / 9 . " Farenheit";
  }

  if ($degrees == "F") {
    $farToCel = $temperature * 9 / 5 + 32;
    echo "The Temperature is " . $temperature . $degrees;
    echo "<br>";
    echo "The conversion to Celsius is " . $farToCel . " Celsius";
  }

  echo "<br>";
  echo "<br>";
}


?>

<form action="index.php" method="POST">
  <input type="text" name="temperature" value="">
  Celsius<input type="radio" name="degrees" value="C">
  Farenheit<input type="radio" name="degrees" value="F">
  <input type="submit" name="submit" value="submit">
</form>