<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>File Upload</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h2>File Upload</h2>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="file">Select a file:</label>
                <input type="file" name="file" id="file" required>
            </div>
            <button type="submit" name="submit">Upload</button>
        </form>
    </div>
</body>

</html>