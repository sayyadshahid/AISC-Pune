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
      
        $str2 = strrev($str);

        if($str == $str2){

            echo "<div class='result'>Reversed: this is palidrom </div>";
        }else{
            echo "<div class='result'>Reversed: this is not palidrom </div>";

        }
       
    }
    ?>
</body>
</html>
