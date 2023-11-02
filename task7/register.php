<?php
session_start();

// require_once "data.php";



// if($_SERVER['REQUEST_METHOD'] == 'POST') {
//     foreach($data as $k => $user) {
//         if($_POST['uname'] == $user['name'] && $_POST['ups'] == $user['ups'] &&$_POST['uem'] == $user['em']) {
//             header('location:login.php');
//         }
//     }
// }

if(isset($_POST['uem']) && isset($_POST['uname']) && isset($_POST['ups'])) {
$um = $_POST['uname'];
$ps = $_POST['ups'];
$em = $_POST['uem'] ;

$_POST['uem'] = "name@gmail.com";
$all_errors = [];
$flag = 0 ;

    if(!empty($um) ){
    if(strlen($um) >= 7 ){
        if(preg_match('/Eng/',$um)) {
            $flag++;
    }else{
        $all_errors['un_Eng'] = 'plz use Eng keyword';
    }

}else{
    $all_errors['un_lenght'] = 'min lenght =7';
    }

}else{
    $all_errors['un_username'] = 'plz enter username';
    }

if(!empty($ps)) {

    if(strlen($ps) >= 8) {

        if(preg_match('@[1-9]@', $ps)) {
            $flag++ ; 
        
        } else {
            $all_errors['ps_alpha'] = 'plz use [1-9] keyword on password ';
        }

    } else {
        $all_errors['ps_length'] = 'plz enter password min len = 8';
    }

} else {
    $all_errors['ps_empty'] = 'plz enter password ';
}

if(!empty($em)) {
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if(!preg_match("/^[a-zA-Z-' ]*$/",$em)) {
            $flag++ ; 
    
        } else {
            $all_errors['em_keyword'] = 'Only letters and white space allowed ';
        }
    
    } else {
        $all_errors['em_format'] = ' write a valid email address.';
    }

} else {
    $all_errors['em_empty'] = 'plz enter email adress ';
}
if(empty($all_errors) && $flag == 3) {
    header('location:login.php');
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
        <div class="alert alert-danger">
            <?= $error ?>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

<form method="post" action="" id="loginForm">
    <input type="text" name="uname"> username
    <input type="text" name="upw" value=""> password
    <input type="email" name="em" /> Email
</form>
<button form="loginForm">Login</button>



</body>
</html>