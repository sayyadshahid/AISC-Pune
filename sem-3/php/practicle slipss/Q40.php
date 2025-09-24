<!-- A college has given roll number to each student, The roll number is six digit number
  where first two digits are faculty(B.Sc., BCA, BA) third digit is year (Ist(1), IInd(2) 
  and IIIrd(3)) and last three digit are actual number. Write PHP script to accept a number and
   print faculty, year and roll number of student. -->

<?php
$roll = "BC1234"; // Example 6-digit roll number

$facultyCode = substr($roll, 0, 2);
$yearCode = substr($roll, 2, 1);
$number = substr($roll, 3);

// Determine Faculty
if ($facultyCode == "BS") {
    $faculty = "B.Sc.";
} elseif ($facultyCode == "BC") {
    $faculty = "BCA";
} else {
    $faculty = "BA";
}

// Determine Year
if ($yearCode == "1") {
    $year = "1st Year";
} elseif ($yearCode == "2") {
    $year = "2nd Year";
} else {
    $year = "3rd Year";
}

// Display Result
echo "Faculty: $faculty<br>";
echo "Year: $year<br>";
echo "Roll Number: $number";
?>
