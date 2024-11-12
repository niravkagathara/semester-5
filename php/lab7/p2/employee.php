<!DOCTYPE html>
<html>

<head>
    <title>employee Registration Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container">
        <h1>employee Registration Form</h1>
        <form action="employeeConntroller.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="email">employee Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="department">department</label>
                <input type="text" name="department" id="department" required>
            </div>
            <div class="form-group">
                <label for="mobile no">mobile no</label>
                <input type="text" name="mobile" id="mobile" required>
            </div>
            <div class="form-group">
                <label for="gender">gender</label>
                <input type="radio" name="gender" value="male" id="gender" required>male
                <input type="radio" name="gender" id="gender" value="female" required>female
            </div>
            <div class="form-group">
                <input type="submit" name="Submit">
            </div>
        </form>
    </div>
</body>

</html>