<?php
session_start();
const RED_TURNING_INTO_RED = 4;
const RED_TURNING_INTO_GREEN = 3;
const GREEN_TURNING_INTO_RED = 2;
const GREEN_TURNING_INTO_GREEN = 5;

$redCount = $_POST['red'];
$greenCount = $_POST['green'];
$ticks = $_POST['ticks'];

for($i = 0; $i < $ticks; $i++)
{
    $redNew = RED_TURNING_INTO_RED * $redCount + GREEN_TURNING_INTO_RED * $greenCount;
    $greenNew = RED_TURNING_INTO_GREEN * $redCount + GREEN_TURNING_INTO_GREEN * $greenCount;
    $redCount = $redNew;
    $greenCount = $greenNew;
}

$_SESSION['message'] = 'Количество красных бактерий: ' . $redCount . "<br>Количество зеленых бактерий: " . $greenCount;
header('Location: index.php');

