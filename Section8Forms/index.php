<?php

if (isset($_POST['submit'])) {

  $temperature = $_POST['temperature'];
  $degrees = $_POST['degrees'];


  if ($degrees == "C") {
    $result = round(($temperature - 32) * 5 / 9, 2) . "F";
  } else {
    $result = round($temperature * 9 / 5 + 32, 2) . "C";
  }
  echo "The Temperature is " . $temperature . $degrees;
  echo "<br>";
  echo "The conversion is " . $result;

  echo "<br>";
}


?>

<form action="index.php" method="POST">
  <input type="number" name="temperature" value="">
  Celsius<input type="radio" name="degrees" value="C">
  Farenheit<input type="radio" name="degrees" value="F">
  <input type="submit" name="submit" value="submit">
</form>