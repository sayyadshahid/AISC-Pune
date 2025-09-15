<!-- Q1. Write PHP program to print multiplication table, take input from user. -->

<body>
    <form method="POST">
        <label>Enter a Number:</label>
        <input type="number" name="num" required> <br><br>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if(isset($_POST['submit'])){
        $num = $_POST['num'];

        echo "<h3>Multiplication Table of $num</h3>";

        for($i = 1; $i <= 10; $i++){
            $result = $i * $num;
            echo "$num x $i = $result <br>";
        }
    }
    ?>
</body>
