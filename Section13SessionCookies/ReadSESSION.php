<?php


session_start();

if (isset($_SESSION['name'])) {

  echo "Name: " . $_SESSION['name'];
  echo "<br>";
} else {
  echo "No session is set";
  echo "<br>";
}

if (isset($_SESSION['age'])) {
  echo "Age: " . $_SESSION['age'];
} else {
  echo "Age not set.";
}
