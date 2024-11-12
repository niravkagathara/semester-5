<!DOCTYPE html>
<html>

<head>
    <title>Student Registration Form</title>
</head>

<body>
    <form action="con_studentRegistration.php" method="POST">
        <table>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Roll No.</td>
                <td>:</td>
                <td><input type="text" name="rollno"></td>
            </tr>
            <tr>
                <td>subject</td>
                <td>:</td>
                <td><input type="text" name="subject"></td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="submit" name="Save">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>