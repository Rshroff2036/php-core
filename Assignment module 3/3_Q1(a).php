<?php

$physics = 99;
$chemistry = 98;
$biology = 59;
$mathematics = 75;
$computer = 28;

$totalMarks = $physics + $chemistry + $biology + $mathematics + $computer;
$percentage = ($totalMarks / 500) * 100;

if ($percentage >= 90) {
    $grade = 'A';
} else if ($percentage >= 80) {
    $grade = 'B';
} else if ($percentage >= 70) {
    $grade = 'C';
} else if ($percentage >= 60) {
    $grade = 'D';
} else if ($percentage >= 50) {
    $grade = 'E';
} else {
    $grade = 'F';
}

echo "Total Marks: $totalMarks<br>";
echo "Percentage: $percentage%<br>";
echo "Grade: $grade<br>";
?>
