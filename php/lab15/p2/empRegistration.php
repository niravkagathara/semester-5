<!DOCTYPE html>
<html>

<head>
    <title>Employee Registration Form</title>
</head>

<body>
    <form action="con_employeeRegistration.php" method="POST">
        <table>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>department</td>
                <td>:</td>
                <td><input type="text" name="department"></td>
            </tr>
            <tr>
                <td>city</td>
                <td>:</td>
                <td><input type="text" name="city"></td>
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