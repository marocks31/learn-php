<?php

$result = 1 < 3; //true
echo $result == true;

// 1 is true/on
// 0 is false/off no output in PHP
// == equality 
// = assigning 

$first_name = "Sam";
$last_name = "Snakecase";

if ($first_name == "Carter" || $last_name == "Camelcase") {
  echo "The first condition is true.";
} else if ($first_name == "Sarah" && $last_name == "Snakecase" ) {
  echo "The second condition is true.";
} else {
  echo "The conditions are false.";
}