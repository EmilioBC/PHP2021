<?php

$suits = ["clubs", "diamonds", "hearts", "spades"];

$randomSuits = array_rand($suits);

$cards = ["Ace", 2, 3, 4, 5, 6, 7, 8, 9, 10, "Jack", "Queem", "King"];

$randomCard = array_rand($cards);


echo "Your card is " . $cards[$randomCard] . " " . $suits[$randomSuits];
