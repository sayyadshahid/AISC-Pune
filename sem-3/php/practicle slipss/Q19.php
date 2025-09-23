<!-- 10) File Upload and Display Info (using $_FILES) -->
<!DOCTYPE html>
<html>
<body>
<form method="post" enctype="multipart/form-data">
    Select file: <input type="file" name="myfile">
    <input type="submit" value="Upload">
</form>

<?php
if ($_FILES) {
    $file = $_FILES['myfile'];
    echo "File Name: " . $file['name'] . "<br>";
    echo "File Type: " . $file['type'] . "<br>";
    echo "File Size: " . $file['size'] . " bytes<br>";
    echo "Temporary Location: " . $file['tmp_name'];
}
?>
</body>
</html>
