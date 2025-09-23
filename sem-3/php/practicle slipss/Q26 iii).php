<?php
 

// Retrieve student info and marks from cookies
$name = $_COOKIE['name'];
$class = $_COOKIE['class'];
$address = $_COOKIE['address'];

$python = $_COOKIE['python'];
$php = $_COOKIE['php'];
$st = $_COOKIE['st'];
$pract1 = $_COOKIE['pract1'];
$project = $_COOKIE['project'];

// Calculate total and percentage
$total = $python + $php + $st + $pract1 + $project;
$percentage = ($total / 500) * 100; // Assuming each subject is out of 100
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mark Sheet</title>
</head>
<body>
    <h2>Mark Sheet</h2>
    <p><strong>Name:</strong> <?php echo $name; ?></p>
    <p><strong>Class:</strong> <?php echo $class; ?></p>
    <p><strong>Address:</strong> <?php echo $address; ?></p>

    <h3>Marks:</h3>
    <ul>
        <li>Python: <?php echo $python; ?></li>
        <li>PHP: <?php echo $php; ?></li>
        <li>ST: <?php echo $st; ?></li>
        <li>Pract1: <?php echo $pract1; ?></li>
        <li>Project: <?php echo $project; ?></li>
    </ul>

    <p><strong>Total:</strong> <?php echo $total; ?>/500</p>
    <p><strong>Percentage:</strong> <?php echo $percentage; ?>%</p>
</body>
</html>
