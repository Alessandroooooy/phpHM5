<?php

//Сделать константу с числом 5. В цикле от одного до ста посчитать все числа, которые делятся на 5.
if(define('FIVE',5)) {
    for($i = 5; $i <= 100; $i = $i + 5) {
        echo $i.' ';
    }   
}

echo PHP_EOL;

if(defined('FIVE')) {
    echo "Константа уже создана";
}

echo PHP_EOL;

//Написать программу подсчета суммы всех простых чисел вплоть до сотого по счету простого числа. 
//Константа - количество подсчитываемых простых чисел.

$lst = array();
$k = "prime";
for($i = 2; $i<100; $i++) {
  for($j = 2; $j < $i; $j++) {
    if(($i % $j) == 0) {
      $k="no prime";
      break;
    } 
  }
  if ($k == "prime"){
    $lst[] = $i; 
  }
  $k = "prime"; 
}

define('PRIME_NUMBER',25);
echo PRIME_NUMBER."numbers";
echo PHP_EOL;
foreach ($lst as $list) echo $list." ";