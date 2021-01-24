<?php

if (isset($_POST["submit"])) {

  $textBox = $_POST["textBox"];
  $textBox = strtolower($textBox);

  $badWords = ["cunt", "fuck", "bitch", "shit"];

  foreach ($badWords as $badWord) {
    $textBox = str_replace($badWord, "******", $textBox);
  }
  echo $textBox;
}



?>

<form action="" method="POST">
  Text Box<input type="text" name="textBox">
  <input type="submit" name="submit" value="submit">
</form>