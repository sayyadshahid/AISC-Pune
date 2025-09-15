<?php
$meanFunc = function($arr) {
    $sum = 0;
    foreach ($arr as $n) {
        $sum += $n;
    }
    return $sum / count($arr);
};

$numbers = [10, 20, 30, 40, 50];
echo "Mean = " . $meanFunc($numbers);
?>
