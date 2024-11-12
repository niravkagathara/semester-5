<!DOCTYPE html>
<html>

<head>
    <title>List of Students</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Roll no</th>
            <th>Name</th>
            <th>Details</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        include_once "./classes/student.php";
        $s = new student();
        $stuArray = $s->getAllStudent();
        $resObj = json_encode($stuArray);
        $resObj = json_decode($resObj, true);
        $data = $resObj["data"];
        foreach ($data as $key => $value) {
        ?>
            <tr>
                <td>
                    <?php echo $value['rollno']; ?>
                </td>
                <td>
                    <?php echo $value['name']; ?>
                </td>
                <td>
                    <a href="detailStudent.php?id=
<?php echo $value['Id']; ?>">Know more...</a>
                </td>
                <td>
                    <a href="editStudent.php?id=
<?php echo $value['Id']; ?>">Edit</a>
                </td>
                <td>
                    <a onclick="return confirm('Are you sure you want to delete?');" href="con_deleteStudent.php?id=
<?php echo $value['Id']; ?>">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>

