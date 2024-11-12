<!DOCTYPE html>
<html>

<head>
    <title>List of Students</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>roll no</th>
            <th>Delete</th>
        </tr>
        <?php
        include_once "./classes/student.php";
        $s = new student();
        $stuArray = $s->getAllStudents();
        foreach ($stuArray as $key => $value) {
        ?>
            <tr>
                <td>
                    <?php echo $value['name']; ?>
                </td>
                <td>
                    <?php echo $value['rollno']; ?>
                </td>
                <td>
                    <a href="con_deleteStudent.php?id= <?php echo $value['Id']; ?>">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>