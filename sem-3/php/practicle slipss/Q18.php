<!-- 9) Multiplication Table (user input) -->
<form method="post">
    Enter a number: <input type="number" name="num">
    <input type="submit" value="Show Table">
</form>

<?php
if ($_POST) {
    $num = $_POST['num'];
    for ($i = 1; $i <= 10; $i++) {
        echo "$num x $i = " . ($num * $i) . "<br>";
    }
}
?>
