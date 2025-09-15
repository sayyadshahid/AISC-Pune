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
        $length = 0;

        // First find length manually
        while (isset($str[$length])) {
            $length++;
        }

         
        $reverse = "";
        for ($i = $length - 1; $i >= 0; $i--) {
            $reverse .= $str[$i];
        }

        echo "<div class='result'>Original: $str </div>";
        echo "<div class='result'>Reversed: $reverse </div>";
    }
    ?>
</body>
</html>
