<?php
if (isset($_POST["submit"])) {
    $uploadDir = "./img/"; // Specify the directory where you want to save the uploaded profile pictures
    $newProfilePicture = $_FILES["new_profile_picture"];
    // Check if a file was uploaded
    if ($newProfilePicture["error"] === UPLOAD_ERR_OK) {
        $uploadFile = $uploadDir . basename($newProfilePicture["name"]);

        // Check if the uploaded file is an image
        $imageFileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));
        if (in_array($imageFileType, ["jpg", "jpeg", "png", "gif"])) {
            // Move the uploaded file to the specified directory
            if (move_uploaded_file($newProfilePicture["tmp_name"], $uploadFile)) {
                // Update the profile picture path in your database or storage
                // For this example, we'll just display the new image
                echo "<div class='container'>
                        <h2>My Profile</h2>
                        <div class='profile-picture'>
                        <img src='$uploadFile' alt='Profile Picture' id='profile-image'>
                        </div>
                        <p>Profile picture updated successfully.</p>
                    </div>";
            } else {
                echo "Error uploading the file.";
            }
        } else {
            echo "Invalid file format. Please upload a valid image.";
        }
    } else {
        echo "Error uploading the file.";
    }
}
