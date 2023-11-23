<?php



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $un = $_POST['user'];
    $pw = $_POST['pass'];
    $cpw = $_POST['cpass'];
    $em = $_POST['em'];
    if (isset($_POST['ty'])) {
        $type = $_POST['ty'];
    }
    if (isset($_POST['ge'])) {
        $gender = $_POST['ge'];
    }

    $all_errors = [];





    if (empty($un)) {
        $all_errors['un_empty'] =  'Username cannot be empty.';
    }

    if (strlen($un) < 5 || strlen($un) > 20) {
        $all_errors['un_strLen'] =  'Username must be between 5 and 20 characters long.';
    }

    if (!preg_match('/^[a-zA-Z0-9_]+$/', $un)) {
        $all_errors['un_match'] =  'Username can only contain letters, numbers, and underscores.';
    }



    if (empty($pw)) {

        $all_errors['pw_empty'] = 'Password cannot be empty.';
    }

    if (strlen($pw) < 8) {
        $all_errors['pw_strlen'] = 'Password must be at least 8 characters long.';
    }

    if (!preg_match('/^[a-zA-Z0-9_]+$/', $pw)) {
        $all_errors['pw_match'] = 'Password can only contain letters, numbers, and underscores.';
    }

    if ($pw !== $cpw) {
        $all_errors['pw_match'] = 'Passwords do not match.';
    }



    if (empty($em)) {
        $all_errors['em_empty'] = 'Email cannot be empty.';
    }

    if (!filter_var($em, FILTER_VALIDATE_EMAIL)) {
        $all_errors['em_invalid'] = 'Invalid email format.';
    }

    if (empty($type)) {
        $all_errors['type_empty'] =  'Type must be chosen.';
    }

    if (empty($gender)) {
        $all_errors['gender_empty'] =  'Gender must be chosen.';
    }
}


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
    <?php if (!empty($all_errors)) : ?>
        <?php foreach ($all_errors as $error) : ?>

            <div class="alert alert-info">
                <?= $error ?>
            </div>

        <?php endforeach ?>
    <?php endif ?>

    <form method="post" action="users.php">
        <label>Username</label>
        <input type="text" placeholder="Username" id="username" name="user">

        <label for="email">Email</label>
        <input type="text" placeholder="Email" id="email" name="em">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="pass">

        <label for="co-password">Confirm Password</label>
        <input type="password" placeholder="Confirm Password" id="co-password" name="cpass">

        <label>User Type</label>
        <input type="radio" value="admin" name="ty"><span class="spn-radio">Admin</span>
        <input type="radio" value="user" name="ty"><span class="spn-radio">User</span>

        <label>Gender</label>
        <input type="radio" value="male" name="ge"><span class="spn-radio">Male</span>
        <input type="radio" value="female" name="ge"><span class="spn-radio">Female</span>

        <button type="submit">Register</button>
    </form>
</body>

</html>