<!DOCTYPE html>
<html>

<head>
    <title>Employee Detail</title>
</head>

<body>
    <?php
    include_once "./classes/employee.php";
    $s = new employee();
    $empDetail = $s->getEmployeeById($_GET['id']);
    $resObj = json_encode($stuDetail);
    $resObj = json_decode($resObj, true);
    $data = $resObj['data'];
    ?>
    <a href="listEmployee.php">Back</a>
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
            <th>Department</th>
            <td><?php echo $data['department']; ?></td>
        </tr>
        <tr>
            <th>City</th>
            <td><?php echo $data['city']; ?></td>
        </tr>
    </table>
</body>

</html>