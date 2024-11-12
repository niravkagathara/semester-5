<?php 
session_start();
if($_SESSION["username"]=="student"){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="welcome-container">
        <h2>Welcome, <?php echo $_SESSION["username"]; ?></h2>
        <p>This is your private page.</p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
<?php 
}else{
    header("Location:login.php");
}
?>