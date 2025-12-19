<?php

declare(strict_types=1);

function calculateAverage(array $grades): float
{
    return array_sum($grades) / count($grades);
}
function hasGrades(array $grades): bool
{
    return count($grades) > 0;
}

$grades = [85, 90, 78, 88, 92, 76, 81, 95, 89, 84];

if (hasGrades($grades)) {
    $average = calculateAverage($grades);
    echo "Средняя оценка студентов: " . number_format($average, 2);
} else {
    echo "Нет данных для вычисления средней оценки.";
}
