<?php

if (isset($_POST["submit"])) {

  $textBox = $_POST["textBox"];

  echo $textBox;
}
echo "<br>";
echo "<br>";

?>


<form action="" method="POST">
  Text box<input type="text" name="textBox">
  <input type="submit" name="submit" value="submit">
</form>