<?php

if (isset($_COOKIE['Name'])) {

  echo "Your name is " . $_COOKIE['Name'];
  echo "<br>";
} else {
  echo "Your name is not set.";
  echo "<br>";
}

if (isset($_COOKIE['Age'])) {
  echo "Your age is " . $_COOKIE['Age'];
  echo "<br>";
} else {
  echo "Your age is not set.";
  echo "<br>";
}

if (isset($_COOKIE['Colour'])) {
  echo "Your favourite colour is " . $_COOKIE['Colour'];
} else {
  echo "Your colour is not set.";
}
