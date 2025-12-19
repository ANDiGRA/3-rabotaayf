<?php

declare(strict_types=1);

function thirdMax(array $nums): int
{
    $uniqueNums = array_unique($nums);
    rsort($uniqueNums);

    if (count($uniqueNums) < 3) {
        return max($uniqueNums);
    } else {
        return $uniqueNums[2];
    }
}

$numbers = [5, 1, 9, 4, 7, 2, 9, 10, 3, 6, 8, 10];

echo "Третье максимальное число: " . thirdMax($numbers);
