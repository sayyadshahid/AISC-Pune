<?php
$roll = "BC25123"; 
$faculty = substr($roll, 0, 2);
$year = substr($roll, 2, 1);
$number = substr($roll, 3);

echo "Faculty: $faculty<br>";

switch($year) {
    case '1': echo "Year: 1st Year<br>"; break;
    case '2': echo "Year: 2nd Year<br>"; break;
    case '3': echo "Year: 3rd Year<br>"; break;
    default: echo "Year: Invalid<br>";
}

echo "Student Number: $number";
?>
