<!-- Write a PHP program to display factorial number. -->


<body>
    <form method="post">
        <input type="number" name="n1" placeholder="enter a num">
         <button type="submit" name="submit">Submit</button>
    </form>

    <?php

    if (isset($_POST["submit"])) {
        $n1 = $_POST["n1"];

        $fact = 1;
        for ($i = 0; $i <= $n1; $i++) {
            $fact *= $i;
        }
        echo $fact;
    }


    ?>
</body>