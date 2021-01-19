<?php

if (isset($_POST['count'])) {

  $textBox = $_POST['textBox'];
  $spaces = $_POST['spaces'];


  if ($spaces == "noSpace") {
    ctype_graph($textBox);
  } else {
    strlen($textBox);
  }

  echo "The string is " . $spaces . " characters long.";
  echo "<br>";
}
?>

<form action="index.php" method="POST">
  <input type="text" name="textBox">;
  Count spaces<input type="radio" name="spaces" value="yesSpace">;
  Don't Count spaces<input type="radio" name="spaces" value="noSpace">;
  <input type="submit" name="count" value="count">;
</form>