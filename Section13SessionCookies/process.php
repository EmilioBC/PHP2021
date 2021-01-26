<?php


if (isset($_POST['submit'])) {

  $myName = $_POST['myName'];
  $myAge = $_POST['myAge'];
  $myColour = $_POST['myColour'];

  setcookie('Name', $myName);
  setcookie('Age', $myAge);
  setcookie('Colour', $myColour);
}
