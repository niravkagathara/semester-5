<?php
if (isset($_POST["submit"])) {
    $uploadDir = "./img/"; // Specify the directory where you want to save the uploaded files
    $uploadFile = $uploadDir . $_FILES["file"]["name"];
    // Check if the file already exists
    if (file_exists($uploadFile)) {
        echo "File already exists. Please choose a different file.";
    } else {
        // Check file size (you can adjust the maximum file size as needed)
        if ($_FILES["file"]["size"] > 5 * 1024 * 1024) { // 5 MB limit in this example
            echo "File size exceeds the limit. Please choose a smaller file.";
        } else {
            // Upload the file to the specified directory
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $uploadFile)) {
                echo "File is valid and has been uploaded successfully.";
            } else {
                echo "Error uploading the file.";
            }
        }
    }
}
