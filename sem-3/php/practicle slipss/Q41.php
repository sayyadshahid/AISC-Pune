<!-- Write PHP to accept five numbers from the user and write a PHP script to
 find mean of these numbers using Anonymous functions. -->
   
   <?php
    $roll = "BC1234";  

    $facultyCode = substr($roll, 0, 2);
    $yearCode = substr($roll, 2, 1);
    $number = substr($roll, 3);

    $faculty = ($facultyCode == "BS") ? "B.Sc." : (($facultyCode == "BC") ? "BCA" : "BA");
    $year = ($yearCode == "1") ? "1st Year" : (($yearCode == "2") ? "2nd Year" : "3rd Year");

    echo "Faculty: $faculty<br>";
    echo "Year: $year<br>";
    echo "Roll Number: $number";
    ?>

