<!DOCTYPE html>
<html>

<head>
    <title>Student Registration Form</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <div class="container">
        <h2>Student Registration</h2>
        <form method="POST" action="studentController.php">
            <div class="form-group">
                <label for="class">Class:</label>
                <input type="text" name="class" id="class" required>
            </div>
            <div class="form-group">
                <label for="sem">Semester:</label>
                <input type="text" name="sem" id="sem" required>
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" name="phone" id="phone" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <input type="submit" value="Register" name="submit">
        </form>
    </div>
</body>

</html>