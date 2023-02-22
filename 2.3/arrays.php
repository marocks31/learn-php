<?php

//old way PHP 3 and below:
// $gemstones = array("Ruby", "Sapphire", "Opal");

$gemstones = ["Ruby", "Sapphire", "Opal"];
print_r($gemstones); //function to print contents of array

echo $gemstones[0];

if (isset($gemstones[6])) {
  echo $gemstones[6];
} else {
  echo "Gemstone does not exist.";
}

//associative array
$gemstones2 = [
  "red" => "Ruby",
  "blue" => "Sapphire",
  "multi" => "Opal"
];

echo $gemstones2["multi"];
if (isset($gemstones2["blue"])) {
  echo $gemstones2["blue"];
} else {
  echo "Gemstone does not exist.";
}