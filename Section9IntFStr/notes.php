<?php

$sentence = "This is a sentence.";
$length = strlen($sentence);
echo "The length of this sentence is " . $length;

echo "<br>";

$words = str_word_count($sentence);
echo "The number of words is " . $words;
