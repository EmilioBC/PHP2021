<?php

if (isset($_POST['submit'])) {

  $isbn = $_POST['isbn'];

  // $isbnLength = strlen($isbn);

  if (strlen($isbn) === 10) {
    echo ("Continue");

    //     $splitNumbers = str_split($isbn);
    //     echo "<pre>";
    //     print_r($splitNumbers);

    //     for ($i = 0; $i < 10; $i += 1) {
    //       $result = $isbnSplit * $i;
    //     }
  }
}
