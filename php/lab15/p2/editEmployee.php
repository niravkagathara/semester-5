<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once "./classes/employee.php";
    $s = new employee();
    $empDetail = $s->getEmployeeById($_GET['id']);
    $resObj = json_encode($empDetail);
    $resObj = json_decode($resObj, true);
    $data = $resObj['data'];
    ?>
    <form action="con_editEmployee.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $data['Id']; ?>">
        <table>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><input type="text" name="name" value="<?php echo 
$data['name']?>"></td>
            </tr>
            <tr>
                <td>department</td>
                <td>:</td>
                <td><input type="text" name="department" value="<?php echo 
$data['department']?>"></td>
            </tr>
            <tr>
                <td>city</td>
                <td>:</td>
                <td><input type="text" name="city" value="<?php echo 
$data['city']?>"></td>
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