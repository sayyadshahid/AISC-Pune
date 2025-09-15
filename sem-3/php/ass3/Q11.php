<!DOCTYPE html>
<html>
<body>
<form method="post" enctype="multipart/form-data">
    Select file: <input type="file" name="myfile">
    <input type="submit" name="upload" value="Upload">
</form>

<?php
if (isset($_POST['upload'])) {
    $file = $_FILES['myfile'];
    echo "File Name: " . $file['name'] . "<br>";
    echo "File Type: " . $file['type'] . "<br>";
    echo "File Size: " . $file['size'] . " bytes<br>";
    echo "Temp Location: " . $file['tmp_name'];
}
?>
</body>
</html>
