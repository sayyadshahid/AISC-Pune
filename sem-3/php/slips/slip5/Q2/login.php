<?php
session_start();

if (isset($_POST['login'])) {
    $u = $_POST['username'];
    $p = $_POST['password'];

    if ($u == 'admin' && $p == '12345') {
        $_SESSION['loggedin'] = true;

        $_SESSION['deadline'] = time() + 60;

        header('Location: detailsForm.php');
        exit;
    } else {
        echo "invalid password";
    }
}

?>


<body>
    <form method="post">
        <input type="text" name="username" placeholder="enter user name " required> <br>
        <input type="text" name="password" placeholder="enter password " required><br>
        <button type="submit" name="login">login</button>

    </form>
</body>