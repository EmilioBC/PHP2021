<?php


if (isset($_POST['submit'])) {

  $myName = $_POST['myName'];
  $myAge = $_POST['myAge'];
  $myColour = $_POST['myColour'];

  setcookie('Name', $myName, time() + 600);
  setcookie('Age', $myAge, time() + 600);
  setcookie('Colour', $myColour, time() + 600);
}
