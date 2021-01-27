<?php

if (isset($_POST['submit'])) {

  $word = $_POST['word'];

  $revWord = strrev($word);

  if ($word == $revWord) {
    echo $word . " is a palindrome word.";
  } else {
    echo $word . " is NOT a palindrome word.";
  }
}
