<?php

//old way PHP 3 and below:
// $gemstones = array("Ruby", "Sapphire", "Opal");

$gemstones = ["Ruby", "Sapphire", "Opal"];
print_r($gemstones); //function to print contents of array

echo $gemstones[0]; //print Ruby value

if (isset($gemstones[6])) { //check if key exists, expected output 'gem doesn't exist'
  echo $gemstones[6]; //it doesn't
} else {
  echo "Gemstone does not exist."; //expected output
}

//associative array
$gemstones2 = [
  "red" => "Ruby",
  "blue" => "Sapphire",
  "multi" => "Opal"
];

echo $gemstones2["multi"]; //Multi has the value of Opal, print Opal
if (isset($gemstones2["blue"])) { //check if key exists
  echo $gemstones2["blue"]; //if blue key exists prit Sapphire
} else {
  echo "Gemstone does not exist."; 
}

//expected outcome: "Sapphire"