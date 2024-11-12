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
            <th>edit</th>
            <th>know more</th>
        </tr>
        <?php
        include_once "./student.php";
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
                    <a href="editStudent.php?id= <?php echo $value['Id']; ?>">Edit</a>
                </td>
                <td>
                    <a href="detailStudent.php?id= <?php echo $value['Id']; ?>">know more</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>