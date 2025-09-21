<!-- 1) PHP program to display grades of students -->

<?php
$marks = 85;

if ($marks >= 90) {
    echo "Grade: A+";
} elseif ($marks >= 75) {
    echo "Grade: A";
} elseif ($marks >= 60) {
    echo "Grade: B";
} elseif ($marks >= 45) {
    echo "Grade: C";
} else {
    echo "Grade: Fail";
}
?>
