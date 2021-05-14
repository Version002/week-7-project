<?php

$arr = [2,3,4,6,7,9,11,20];
$even = array_filter($arr, fn($n) => $n%2==0);
print_r($even);

?>