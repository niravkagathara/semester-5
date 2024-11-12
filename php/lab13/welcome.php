<?php 
    session_start();
    if(isset($_COOKIE['username'])){
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>welcome <?php echo $_COOKIE['username']; ?></h1>
    <form action="con_logout.php">
        <input type="submit" name="submit" value="logout">
    </form>
</body>
</html>
        <?php
    }
    else{
        header('Location:login.php');
    }

?>