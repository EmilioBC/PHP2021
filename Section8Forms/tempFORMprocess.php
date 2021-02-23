<?php

if (isset($_POST['submit'])) {

  $temperature = $_POST['temperature'];
  $degrees = $_POST['degrees'];

  if ($degrees == "celsius") {
    $newtemperature = ($temperature - 32) * 5 / 9;
    $newDegrees = "Farenheit";
  } else {
    $newtemperature = $temperature * 9 / 5 + 32;
    $newDegrees = "Celsius";
  }
  echo ($temperature . " " . $degrees . " is equal to: " . round($newtemperature, 2) . " " . $newDegrees);
}
