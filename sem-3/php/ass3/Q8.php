<?php
if (isset($_POST['submit'])) {
    setcookie("font", $_POST['font']);
    setcookie("color", $_POST['color']);
    setcookie("bg", $_POST['bg']);
    echo "Preferences saved! Refresh to apply.";
}
?>

<form method="post">
    Font Size: <input type="text" name="font"><br>
    Text Color: <input type="text" name="color"><br>
    Background: <input type="text" name="bg"><br>
    <input type="submit" name="submit" value="Save">
</form>

<?php
if (isset($_COOKIE['font'])) {
    echo "<div style='font-size:{$_COOKIE['font']};
                      color:{$_COOKIE['color']};
                      background:{$_COOKIE['bg']}'>
            This is customized text!
          </div>";
}
?>
