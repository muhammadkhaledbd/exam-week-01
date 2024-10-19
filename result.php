<?php

function studentResult($sub1, $sub2, $sub3, $sub4, $sub5)
{
    // Mark range validation using switch-case
    switch (true) {
        case !($sub1 >= 0 && $sub1 <= 100):
        case !($sub2 >= 0 && $sub2 <= 100):
        case !($sub3 >= 0 && $sub3 <= 100):
        case !($sub4 >= 0 && $sub4 <= 100):
        case !($sub5 >= 0 && $sub5 <= 100):
            echo "Mark range is invalid.\n";
            return;
    }

    // Check for failure using switch-case
    switch (true) {
        case $sub1 < 33 && $sub1 >= 0:
        case $sub2 < 33 && $sub1 >= 0:
        case $sub3 < 33 && $sub1 >= 0:
        case $sub4 < 33 && $sub1 >= 0:
        case $sub5 < 33 && $sub1 >= 0:
            echo "The student has failed.\n";
            return;
    }

    // Calculate total and average marks
    $totalMarks = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
    $averageMarks = $totalMarks / 5;

    // Determine the grade using switch-case
    switch (true) {
        case $averageMarks >= 80 && $averageMarks <= 100:
            $grade = "A+";
            break;
        case $averageMarks >= 70 && $averageMarks < 80:
            $grade = "A";
            break;
        case $averageMarks >= 60 && $averageMarks < 70:
            $grade = "A-";
            break;
        case $averageMarks >= 50 && $averageMarks < 60:
            $grade = "B";
            break;
        case $averageMarks >= 40 && $averageMarks < 50:
            $grade = "C";
            break;
        case $averageMarks >= 33 && $averageMarks < 40:
            $grade = "D";
            break;
        default:
            $grade = "F";
            break;
    }

    // Output the result
    echo "Total Marks: $totalMarks\n <br>";
    echo "Average Marks: $averageMarks\n <br>";
    echo "Grade: $grade\n";
}


$sub1 = 100;
$sub2 = 80;
$sub3 = 80;
$sub4 = 80;
$sub5 = 80;

studentResult($sub1, $sub2, $sub3, $sub4, $sub5);
