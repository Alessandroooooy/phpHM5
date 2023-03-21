<?php
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

