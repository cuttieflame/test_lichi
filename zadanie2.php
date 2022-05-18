<?php
function func($num) {

    $digits = str_split($num);
    $seq = 1;

    for($i=1; $i<count($digits); $i++) {
        if ($digits[$i] == ($digits[$i - 1] + 1)) $seq++;
        else $seq = 1;
    }

    return $seq > 2;
}
$sum = 0;
for ($n=1; $n<=10000; $n++) {
    if (func($n)) $sum += $n;
}
printf("Sum:$sum");