<?php
for ($i = 1; $i < 31; $i++){
  if ($i % 15 === 0) {
    echo 'FizzBuzz';
    echo "<br>";
  } elseif ($i % 3 === 0) {
    echo 'Fizz';
    echo "<br>";
  } elseif ($i % 5 === 0) {
    echo 'Buzz';
    echo "<br>";
  } else {
    echo $i;
    echo "<br>";
  }
}
?>