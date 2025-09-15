<!-- Q1. Write PHP Script to check whether a specific word/substring exists in a string. -->

<!DOCTYPE html>
<html>
<head>
    <title>Check Substring</title>
</head>
<body>
    <h2>Check if a Word Exists in a String</h2>

    <form method="post" action="">
        Enter String: <input type="text" name="mainString" required><br><br>
        Enter Word to Search: <input type="text" name="word" required><br><br>
        <input type="submit" name="submit" value="Check">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $mainString = $_POST['mainString'];
        $word = $_POST['word'];

        // Check if the word exists
        if (strpos($mainString, $word) !== false) {
            echo "<h3>The word '$word' exists in the string.</h3>";
        } else {
            echo "<h3>The word '$word' does NOT exist in the string.</h3>";
        }
    }
    ?>
</body>
</html>
