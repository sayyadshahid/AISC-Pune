<!-- 4.	Write a script to keep track of number of times the web page has been accessed.(Use $_COOKIE[ ] )  -->

<?php 
$cookie_name = "count";

if (isset(($_COOKIE[$cookie_name]))){
    $count = $_COOKIE[$cookie_name] + 1;

}else{
    $count = 1;
}

setcookie($cookie_name, $count, time() + (300),'/');
?>

<body>
    
<h1><?php echo $count; ?></h1>
</body>