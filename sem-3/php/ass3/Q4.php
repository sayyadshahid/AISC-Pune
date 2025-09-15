<?php
if (!isset($_COOKIE['count'])) {
    $count = 1;
} else {
    $count = $_COOKIE['count'] + 1;
}
setcookie("count", $count, time() + (60 * 5));

echo "This page has been accessed $count times.";
?>
