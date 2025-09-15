<!DOCTYPE html>
<html>
<head>
    <title>String Operations</title>
</head>
<body>
    <form method="POST">
        Enter First String: <input type="text" name="str1" required>
        <br><br>
        Enter Second String: <input type="text" name="str2" required>
        <br><br>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $str1 = $_POST['str1'];
        $str2 = $_POST['str2'];

        
        if ($str1 == $str2) {
            echo "Using '==': Strings are equal<br>";
        } else {
            echo "Using '==': Strings are NOT equal<br>";
        }
 
        if ($str1 === $str2) {
            echo "Using '===': Strings are identical (value & type)<br>";
        } else {
            echo "Using '===': Strings are NOT identical<br>";
        }

        
        $result = $str1 . $str2;
        echo "After appending: " . $result;
    }
    ?>
</body>
</html>
