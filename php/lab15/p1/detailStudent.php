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
    $resObj = json_encode($stuDetail);
    $resObj = json_decode($resObj, true);
    $data = $resObj['data'];
    ?>
    <a href="listStudents.php">Back</a>
    <table border="1">
        <tr>
            <th>Id</th>
            <td><?php echo $data['Id']; ?></td>
        </tr>
        <tr>
            <th>Name</th>
            <td><?php echo $data['name']; ?></td>
        </tr>
        <tr>
            <th>rollno</th>
            <td><?php echo $data['rollno']; ?></td>
        </tr>
        <tr>
            <th>subject</th>
            <td><?php echo $data['subject']; ?></td>
        </tr>
    </table>
</body>

</html>