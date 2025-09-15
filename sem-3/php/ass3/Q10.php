<?php
session_start();

if (isset($_POST['login'])) {
    if ($_POST['username'] == "admin" && $_POST['password'] == "1234") {
        $_SESSION['loggedin'] = true;
    } else {
        echo "Invalid login";
        session_destroy();
    }
}
?>

<?php if (isset($_SESSION['loggedin'])): ?>
    <form method="post">
        Name: <input type="text" name="name"><br>
        City: <input type="text" name="city"><br>
        Mobile: <input type="text" name="mobile"><br>
        <input type="submit" value="Submit">
    </form>
<?php endif; ?>
