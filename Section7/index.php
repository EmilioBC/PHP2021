<?php

//////// PHP Built in Function //////////

/////// Using PHP.net ////////////////

// $randomNumber = rand(1, 100);

// echo $randomNumber;


//////////// I WIN CHALLENGE /////////////////



// $heads = 0;
// $tails = 0;

// for ($i = 1; $i <= 100; $i++) {
//   $randomNumber = rand(1, 2);
//   if ($randomNumber == 1) {
//     $heads++;
//   } else if ($randomNumber == 2) {
//     $tails++;
//   }
// }
// echo "There were " . $heads . " heads and " . $tails . " tails";


///////// CHALLENGE WHO ATE ALL THE PI //////////////////////

// $radius = 5;
// $areaOfCircle = (pi() * pow($radius, 2));
// echo "Area of a cricle is: " . round($areaOfCircle, 2) . " sq in";


/////////////// DATES /////////////////////////

// date_default_timezone_set("Europe/London");

// echo "The year is " . date("Y");
// echo "<br>";

// $today = date("F j, Y, g:i a");
// echo "Todays date is " . $today;

// echo "<br>";
// echo "The Date today is: " . date('l');


/////////// Dates CHALLENGE ////////////////////


// date_default_timezone_set("Europe/London");

// echo "CARPE DIEM Challenge";
// echo "<br>";
// echo "<br>";
// echo date("l jS F Y");
// echo "<br>";
// echo "echo date('l jS F Y')";
// echo "<br>";
// echo "<br>";
// echo "Today is " . date("l");
// echo "<br>";
// echo "<br>";
// echo date("l jS F Y");
// echo "<br>";
// echo "<br>";
// echo date("Y/ m/ d");
// echo str_repeat('&nbsp;', 50);
// echo ("(Year/Month/Day)");
// echo "<br>";
// echo "<br>";
// echo date("l jS F Y, g:i A");
// echo "<br>";
// echo "<br>";
// //// Leap Year /////
// if (date("L") == 1) {
//   echo date("Y") . " is a Leap Year.";
// } else {
//   echo date("Y") . " Not a Leap Year.";
// }


///////////////// TIME /////////////////////////

// $date = strtotime("next christmas");

// $days = ($date - time()) / 60 / 60 / 24;

// echo ceil($days);


////////// SANTA COUNT DOWN //////////////////

date_default_timezone_set("Europe/London");

$givenDate = strtotime("December 25");
$time = time();
$days = ceil(($givenDate - $time) / 60 / 60 / 24);

echo ($days) . " Days till Santa Claus arrive.";
