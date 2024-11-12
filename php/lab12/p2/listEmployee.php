<!DOCTYPE html>
<html>

<head>
    <title>List of employee</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>department</th>
            <th>edit</th>
            <th>know more</th>
        </tr>
        <?php
        include_once "./classes/employee.php";
        $e = new Employee();
        $stuArray = $e->getAllEmployees();
        foreach ($stuArray as $key => $value) {
        ?>
            <tr>
                <td>
                    <?php echo $value['name']; ?>
                </td>
                <td>
                    <?php echo $value['department']; ?>
                </td>
                <td>
                    <a href="editEmployee.php?id= <?php echo $value['Id']; ?>">Edit</a>
                </td>
                <td>
                    <a href="detailEmployee.php?id= <?php echo $value['Id']; ?>">know  more</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>