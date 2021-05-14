<?php

function sum(...$num) {
    $res = 0;
    foreach ($num as $n) {
        $res += $n;
    }
    return $res;
}
$total = sum(2,3);
echo $total."\n";
$total = sum(2,3,4);
echo $total."\n";
$total = sum(2,3,4,5);
echo $total;

?>