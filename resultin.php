<?php
$student = [
    'id' => '62314',
    'name' => 'John D Smith',
    'class' => 'First-A',
    'gender' => 'Female'
];

$subjects = [
    ['code' => '1101', 'name' => 'Math', 'mark' => 85],
    ['code' => '1102', 'name' => 'English', 'mark' => 88],
    ['code' => '1103', 'name' => 'Science', 'mark' => 90]
];

$average = array_sum(array_column($subjects, 'mark')) / count($subjects);

include 'resultsheet.php';
?>
