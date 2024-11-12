<?php
if (isset($_COOKIE["username"])) {
    header("Location: welcome.php");
    exit();
}
// Static user credentials for demonstration purposes
$demousername = "student";
$demouserpass = "student";
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    // Replace with your actual username and password validation logic
    if ($username === $demousername && $password === $demouserpass) {
        setcookie("username", $username, time() + 3600); // Set a cookie for 1 hour
        header("Location: welcome.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <h2>Login</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit" name="login">Login</button>
        </form>
    </div>
</body>

</html>