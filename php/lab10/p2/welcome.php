<?php
if (!isset($_COOKIE["username"])) {
    header("Location: login.php");
    exit();
}
$username = $_COOKIE["username"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>

<body>
    <div class="container">
        <h2>Welcome, <?php echo $username; ?>!</h2>
        <p>This is the protected content. You are logged in.</p>
        <a href="logout.php">Logout</a>
    </div>
</body>

</html>