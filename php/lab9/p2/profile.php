<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Profile Page</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h2>My Profile</h2>
        <div class="profile-picture">
            <img src=" Image.url" alt="Profile Picture" id="profile-image">
        </div>
        <form action="upload.php" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="file">Select a file:</label>
                <input type="file" name="new_profile_picture" id="ew-profile-picture" required accept="image/*">
            </div>
            <button type="submit" name="submit">Change Profile Picture</button>
        </form>
    </div>
</body>

</html>