<!DOCTYPE html>
<html>

<head>
    <title>Student Registration Form</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <div class="container">
        <h2>Employee Registration</h2>
        <form method="POST" action="employeeController.php">
            <div class="form-group">
                <label for="EID">EID:</label>
                <input type="text" name="EID" id="EID" required>
            </div>
            <div class="form-group">
                <label for="Department">Department</label>
                <input type="text" name="Department" id="Department" required>
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