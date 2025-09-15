<!-- Q1. Write PHP script to display reverse number using sticky form -->

<body>
    <form method="POST">
        <label>Enter a Number:</label>
        <input type="number" name="num" value="<?php if(isset($_POST['num'])) echo $_POST['num']; ?>" required>
        <br><br>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if(isset($_POST['submit'])){
        $num = $_POST['num'];

        // reverse the number
        $rev = strrev($num);

        echo "<h3>Original Number: $num</h3>";
        echo "<h3>Reversed Number: $rev</h3>";
    }
    ?>
</body>
