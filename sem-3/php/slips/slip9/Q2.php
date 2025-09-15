<!DOCTYPE html>
<html>
<head>
    <title>Day of Week Finder</title>
</head>
<body>
    <h2>Find Day of the Week</h2>

    <form method="post" action="">
        Enter a Date: <input type="date" name="date" required>
        <input type="submit" name="submit" value="Find Day">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $date = $_POST['date'];

        
        $timestamp = strtotime($date);

       
        $dayOfWeek = date("l", $timestamp);  

        echo "<h3>Date Entered: $date</h3>";
        echo "<h3>Day of the Week: $dayOfWeek</h3>";
    }
    ?>
</body>
</html>
