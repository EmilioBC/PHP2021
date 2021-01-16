<?php

////////// FOR LOOPS ////////////

// for ($i = 2; $i <= 20; $i += 2) {
//   echo $i . "<br>";
// }

////////// WHILE LOOPS /////////////

// $i = 1;

// while ($i <= 10) {
//   echo $i . "<br>";
//   $i++;
// }

////////// CHALLENGE MULTIPLE BY 6. //////////
// echo "For Loop Multiply by 6. <br> ";
// for ($i = 1; $i <= 10; $i++) {
//   echo $i * 6 . "<br>";
// }

// echo "<br>";
// echo "While Loop Multiply by 6. <br>";

// $j = 1;

// while ($j <= 10) {
//   echo $j * 6 . "<br>";
//   $j++;
// }


///////////////// FIZZ BUZZ CHALLENGE /////////

for ($i = 1; $i <= 100; $i++) {

  if ($i % 3 == 0  && $i % 5 == 0) {
    echo "FIZZBUZZ <br>";
  } else if ($i % 3 == 0) {
    echo "FIZZ <br>";
  } else if ($i % 5 == 0) {
    echo "BUZZ <br>";
  } else {
    echo $i . "<br>";
  }
}
