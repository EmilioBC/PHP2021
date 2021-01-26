<?php

session_start();

if (isset($_SESSION['hits'])) {

  $_SESSION['hits']++;
  echo "You have visited this page " . $_SESSION['hits'] . " times";
} else {
  $_SESSION['hits'] = 1;
  echo "This is the forst time you visited this page.";
}
