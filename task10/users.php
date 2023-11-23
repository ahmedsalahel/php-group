<?php


$myconnect = mysqli_connect('localhost', 'root', '', 'hr_db');

$all_users = 'SELECT id, username, email, password , type , gender FROM users ';

$show = mysqli_query($myconnect, $all_users);


$q = "INSERT INTO users (id, username, email, password, type, gender) 
VALUES ('',  '$_POST[user]' ,  '$_POST[em]'  ,  '$_POST[pass]' ,   '$_POST[ty]' ,   '$_POST[ge]'  )";

$ex = mysqli_query($myconnect, $q);

header('location:register.php');
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
                <th scope="col">username</th>
                <th scope="col">email</th>
                <th scope="col">password</th>
                <th scope="col">type</th>
                <th scope="col">gender</th>
            </tr>
        </thead>
        <tbody>


            <?php while ($row = mysqli_fetch_array($show)) : ?>
                <tr>
                    <th scope="row"><?= $row['id'] ?></th>
                    <td><?= $row['username'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['password'] ?></td>
                    <td><?= isset($row['ty']) ? $row['ty'] : '' ?></td>
                    <td><?= isset($row['ge']) ? $row['ge'] : '' ?></td>
                </tr>
            <?php endwhile ?>

        </tbody>
    </table>



</body>

</html>