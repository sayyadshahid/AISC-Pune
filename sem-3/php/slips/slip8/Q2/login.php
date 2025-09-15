<?php
session_start();

if (isset($_POST['login'])) {
    $u = $_POST['username'] ?? '';
    $p = $_POST['password'] ?? '';

    if ($u === 'admin' && $p === '1234') {
        $_SESSION['loggedin'] = true;

        // choose ONE style:
        // Fixed window (recommended for assignments):
        $_SESSION['deadline'] = time() + 60;   // 60 seconds to finish next form

        // Rolling window (alternative):
        // $_SESSION['start_time'] = time();

        header('Location: details.php');
        exit;
    } else {
        $err = 'Invalid username or password';
    }
}
?>

<html>

<body>
    <h2>Login</h2>
    <form method="post">
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <button type="submit" name="login">Login</button>
    </form>
</body>

</html>