<?php
$myconnect = mysqli_connect('localhost', 'root', '', 'hr_db');

$all_employees = 'SELECT employee_id, CONCAT(first_name, " ", last_name) AS full_name , salary, department_id  FROM employees';

$show = mysqli_query($myconnect, $all_employees);




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">full_name</th>
                <th scope="col">salary</th>
                <th scope="col">department_id</th>
            </tr>
        </thead>
        <tbody>


            <?php while ($row = mysqli_fetch_array($show)) : ?>
                <tr>
                    <th scope="row"><?= $row['employee_id'] ?></th>
                    <td><?= $row['full_name'] ?></td>
                    <td><?= $row['salary'] ?></td>
                    <td><?= $row['department_id'] ?></td>
                </tr>
            <?php endwhile ?>

        </tbody>
    </table>



</body>

</html>