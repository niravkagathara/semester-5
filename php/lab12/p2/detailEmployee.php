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
    ?>
    <a href="listEmployee.php">Back</a>
    <table border="1">
        <tr>
            <th>Id</th>
            <td><?php echo $empDetail['Id']; ?></td>
        </tr>
        <tr>
            <th>Name</th>
            <td><?php echo $empDetail['name']; ?></td>
        </tr>
        <tr>
            <th>Department</th>
            <td><?php echo $empDetail['department']; ?></td>
        </tr>
        <tr>
            <th>City</th>
            <td><?php echo $empDetail['city']; ?></td>
        </tr>
    </table>
</body>

</html>