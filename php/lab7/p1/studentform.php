<!DOCTYPE html>
<html>

<head>
    <title>Student Registration Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Student Registration Form</h1>
        <form action="studentController.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="course">Course:</label>
                <input type="text" name="course" id="course" required>
            </div>
            <div class="form-group">
                <label for="city">city</label>
                <input type="text" name="city" id="city" required>
            </div>
            <div class="from-gourp">
                <label for="subject">subject</label>
                <select name="subject">
                    <option value="java">java</option>
                    <option value="C">C</option>
                    <option value="javascript">javascript</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" name="Submit">
            </div>
        </form>
    </div>
</body>

</html>