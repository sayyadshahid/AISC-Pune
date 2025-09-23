<!-- 3.	Write a script to keep track of the number of times the web page has been accessed.(Use $_SESSION[ ] )  -->

<?php

session_start();
if(isset($_SESSION['count'])){
    $_SESSION['count']++    ;
}else{
    $_SESSION['count'] = 1;
}
?>

<body>
    <h1>this is a session <?php echo $_SESSION['count']; ?></h1>
</body>