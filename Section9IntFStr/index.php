<?php

$string = "This is Sam's apple! <br> Sam said,\"Hello, Colin. How's your new PHP course going?\".<br> Sam's mother ordered a new book called \"ADayinmyLife\" from her local
bookstore.";
echo "<br>";
echo $string;
echo "<br>";
echo "<br>";
$name = "Jone";
$noSam = str_replace("Sam", $name, $string);
echo $noSam;
