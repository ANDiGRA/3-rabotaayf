<?php

declare(strict_types=1);
function calculateAverage(array $grades): float
{
    return array_sum($grades) / count($grades);
}
function isExcellentStudent(array $student): bool
{
    return calculateAverage($student['grades']) >= 4.0;
}

function printStudentAverage(array $student): void
{
    $average = calculateAverage($student['grades']);
    echo $student['name'] . ": " . number_format($average, 2) . "\n";
}

$students = [
    ['name' => 'Никита', 'age' => 17, 'grades' => [5, 4, 5]],
    ['name' => 'Дима', 'age' => 17, 'grades' => [3, 4, 2]],
    ['name' => 'Данил', 'age' => 17, 'grades' => [4, 5, 5]],
];

foreach ($students as $student) {
    if (isExcellentStudent($student)) {
        printStudentAverage($student);
    }
}
