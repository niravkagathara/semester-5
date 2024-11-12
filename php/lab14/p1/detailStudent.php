<!DOCTYPE html>
<html>

<head>
    <title>Student Detail</title>
</head>

<body>
    <?php
    include_once "./classes/student.php";
    $s = new student();
    $stuDetail = $s->getStudentById($_GET['id']);
    ?>
    <a href="listStudents.php">Back</a>
    <table border="1">
        <tr>
            <th>Id</th>
            <td><?php echo $stuDetail['Id']; ?></td>
        </tr>
        <tr>
            <th>Name</th>
            <td><?php echo $stuDetail['name']; ?></td>
        </tr>
        <tr>
            <th>rollno</th>
            <td><?php echo $stuDetail['rollno']; ?></td>
        </tr>
        <tr>
            <th>subject</th>
            <td><?php echo $stuDetail['subject']; ?></td>
        </tr>
    </table>
</body>

</html>