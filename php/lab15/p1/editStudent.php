<!DOCTYPE html>
<html>

<head>
    <title>Update Student Details</title>
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
    <form action="con_editStudent.php" method="Post">
        <input type="hidden" name="id" value="<?php echo $data['Id']; ?>">
        <table>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td>
                    <input type="text" name="name" value="<?php echo
                                                            $data['name'] ?>">
                </td>
            </tr>
            <tr>
                <td>rollno</td>
                <td>:</td>
                <td>
                    <input type="text" name="rollno" value="<?php echo
                                                                $data['rollno'] ?>">
                </td>
            </tr>
            <tr>
                <td>subject</td>
                <td>:</td>
                <td>
                    <input type="text" name="subject" value="<?php echo
                                                            $data['subject'] ?>">
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <a href="listStudents.php">Cancle</a>
                    <input type="submit" name="Save">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>