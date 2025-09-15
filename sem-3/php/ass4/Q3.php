<html>

<head>
    <title>Reverse String</title>
</head>

<body>
    <form method="post">
        <input type="text" name="inputText" placeholder="Enter text here">
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST["submit"])) {
        $str = $_POST['inputText'];



        // Other string functions
        $rev = strrev($str);
        $lower = strtolower($str);
        $upper = strtoupper($str);
        $trimr = trim($str);
        $ltrimr = ltrim($str);
        $rtrimr = rtrim($str);
        $len = strlen($str);

        echo "<div class='result'>
            1. Reversed (manual): $str2 <br>
            2. Lowercase: $lower <br>
            3. Uppercase: $upper <br>
            4. Trim: $trimr <br>
            5. LTrim: $ltrimr <br>
            6. RTrim: $rtrimr <br>
            7. Length: $len
        </div>";
    }
    ?>
</body>

</html>