<?php 
/**
 * Convert array to string
 * Count Vowels
 * Reverse strings
 */

$strings = ["Hello", "World", "PHP", "Programming"];
function php_string($strings){
  // loop through $strings array
  foreach($strings as $string){

  $vowels = array('a','e','i','o','u');
  $vowels_counter = 0;

  // loop throught each element of the array
  for($i = 0; $i < strlen($string); $i++) {

    // check for vowels
    if(in_array(strtolower($string[$i]), $vowels)) {
        $vowels_counter++;
    }

  }
  // Out put
  printf("Original String: %s, Vowel Count: %d, Reversed String: %s", $string, $vowels_counter, strrev($string));
  echo PHP_EOL;

  }
}

