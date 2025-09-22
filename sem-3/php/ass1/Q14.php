<!-- Write a PHP program to display reverse number, accept value from user. -->

<body>

    <form method="post">
        <input type="number" name="n1">
        <button type="submit" name="submit">submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $n1 = $_POST['n1'];
        $rev = 0;
        $og = $n1;
       while($n1 >0){
       $digi = $n1 % 10;
       $rev = $rev * 10 + $digi;
       $n1 = (int) ( $n1 / 10);
       }

       echo $og  ;
       echo $rev  ;
    }

    ?>
</body>