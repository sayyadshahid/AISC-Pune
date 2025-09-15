<?php

session_start();  

if (empty($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}


$expired = false;
if (isset($_SESSION['deadline'] )&& time() > $_SESSION['deadline'] ){
$expired = true;
}

if($expired){
    session_unset();
    session_destroy();
    echo " login again";
    exit;
}
?>

<body>

    <form method="post" action="details.php">
        <input type="text" name="name" placeholder="enter name " required> <br>
        <input type="text" name="city" placeholder="enter city " required> <br>
        <input type="text" name="number" placeholder="enter number " required> <br>
        <button type="submit" name="submit">submit</button>

    </form>
</body>