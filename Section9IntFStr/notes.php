<?php

$sentence = "This is a sentence.";
$length = strlen($sentence);
echo "The length of this sentence is " . $length;

echo "<br>";

$words = str_word_count($sentence);
echo "The number of words is " . $words;



if (isset($_POST['count'])) {

  $textBox = $_POST['textBox'];
  $spaces = $_POST['spaces'];


  if ($spaces == "noSpace") {
    $lettercount = strlen(str_replace(' ', '', $textBox));
    echo $textBox . ' contains ' . $lettercount . ' letters only and no spaces.';
  } else {
    echo $textBox . " contains " . strlen($textBox) . " characters long including spaces.";
    echo "<br>";
  }
}
echo "<br>";

$string = "John|Sam|Billy|Karen|Ben|Jane|Bob";
echo $string;
echo "<br>";
$newString = str_replace('|', ', ', $string);

echo $newString;

echo "<br>";

$string = "basketball";

$newString = str_shuffle($string);

echo $newString;

echo "<br>";

////////////////// MISSION IMPOSSIBLE CHALLENGE ///////////

$string = "Rafher gung lbh orpbzr snzvyvne jvgu cuc shapgvbaf nf gurl ner rkgerzryl hfrshy.
";

$newString = str_rot13("Rafher gung lbh orpbzr snzvyvne jvgu cuc shapgvbaf nf gurl ner rkgerzryl hfrshy.
");

echo $newString;

?>

<form action="index.php" method="POST">
  <input type="text" name="textBox">;
  Count spaces<input type="radio" name="spaces" value="yesSpace">;
  Don't Count spaces<input type="radio" name="spaces" value="noSpace">;
  <input type="submit" name="count" value="count">;
</form>