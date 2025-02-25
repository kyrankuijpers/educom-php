<?php

  function my_callback($item) {
    return strlen($item);
  }

  $strings = ["apple", "orange", "banana", "coconut"];
  $lengths = array_map("my_callback", $strings);
  $lengths2 = array_map(function($item){ return strlen($item); }, $strings);
  print_r($lengths2);

function exclaim($str) {
  return $str . "! ";
}

function ask($str) {
  return $str . "? ";
}

function printFormatted($str, $format) {
  // Calling the $format callback function
  echo $format($str);
}

// Pass "exclaim" and "ask" as callback functions to printFormatted()
printFormatted("Hello world", "exclaim");
printFormatted("Hello world", "ask");
?>