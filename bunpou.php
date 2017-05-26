<?php

function fizz_buzz() {
  $num = 1;

while ($num <= 100) {
  if($num % 3 == 0 && $num % 5 == 0){
    echo "fizz_buzz\n";
  }
  else if ($num % 3 == 0){
    echo "Fizz\n";
  }
    else if($num % 5 == 0){
      echo "Buzz\n";
    }
    else{
      echo $num . "\n";
    }

  # code...
  $num = $num + 1;
 }
}

fizz_buzz();


?>