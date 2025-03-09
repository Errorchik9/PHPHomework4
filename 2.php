<?php
function idnum(int $num): bool
{
    if ($num < 2) {
        return false;
    }
    $sum = 1;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $sum += $i;
            if ($i != $num / $i) {
                $sum += $num / $i;
            }
        }
    }
    return $sum == $num;
}

function isnum(array $arr): ?int
{
    foreach ($arr as $num) {
        if (idnum($num)) {
            return $num;
        }
    }
    return null;
}

$arr = [6, 12, 28, 496, 8128, 33550336, 123, 456];
$idnum = isnum($arr);
if ($idnum !== null) {
    echo "Найдено идеальное число: " . $idnum;
} else {
    echo "Идеальное число не найдено.";
}