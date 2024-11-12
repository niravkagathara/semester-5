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
    ?>
    <form action="con_editStudent.php" method="Post">
        <input type="hidden" name="id" value="<?php echo $stuDetail['Id']; ?>">
        <table>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td>
                    <input type="text" name="name" value="<?php echo
                                                            $stuDetail['name'] ?>">
                </td>
            </tr>
            <tr>
                <td>rollno</td>
                <td>:</td>
                <td>
                    <input type="text" name="rollno" value="<?php echo
                                                                $stuDetail['rollno'] ?>">
                </td>
            </tr>
            <tr>
                <td>subject</td>
                <td>:</td>
                <td>
                    <input type="text" name="subject" value="<?php echo
                                                            $stuDetail['subject'] ?>">
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