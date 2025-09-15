<!DOCTYPE html>
<html>
<body>

<h2>File Upload</h2>

<form method="post" enctype="multipart/form-data">
    Select file to upload: 
    <input type="file" name="uploaded_file" required>
    <br><br>
    <button type="submit" name="submit">Upload</button>
</form>

<?php
if (isset($_POST['submit'])) {
    // Check if file is selected
    if (isset($_FILES['uploaded_file']) && $_FILES['uploaded_file']['error'] == 0) {
        $file = $_FILES['uploaded_file'];
 
        $name     = $file['name'];
        $type     = $file['type'];
        $size     = $file['size'];
        $tmp_name = $file['tmp_name'];
 
        $upload_dir = "uploads/";
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }

        $destination = $upload_dir . basename($name);
        if (move_uploaded_file($tmp_name, $destination)) {
            echo "<h3>File uploaded successfully!</h3>";
            echo "File Name: " . $name . "<br>";
            echo "File Type: " . $type . "<br>";
            echo "File Size: " . $size . " bytes<br>";
            echo "File Path: " . $destination . "<br>";
        } else {
            echo "Error: Failed to move uploaded file.";
        }
    } else {
        echo "Error: No file selected or upload error.";
    }
}
?>

</body>
</html>
