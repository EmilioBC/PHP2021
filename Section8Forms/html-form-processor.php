<?php

// echo "<pre>";
// print_r($_POST);

if (isset($_POST)) {

  $surname = $_POST['surname'];

  $gender = $_POST['gender'];

  echo "Your surname is " . $surname . " and your gender is " . $gender;

  echo "<br>";
  echo "<br>";
}



?>


<form action="index.php" method="POST">
  <input type="text" name="surname" value="Jay">
  Male<input type="radio" name="gender" value="male">
  Female<input type="radio" name="gender" value="female">
  <input type="submit" name="submit" value="submit">
</form>