<?php
$username  = 'ahmed salah';
$password = '123456';
$flag =0;

$users_data =[
['username' => 'ahmed salah', 'password'=>'123456'],
['username' => 'mohamed ahmed', 'password'=>'55446'],
['username' => 'mostafa moahmed', 'password'=>'123789'],
['username' => 'hossam mohamed', 'password'=>'789456'],

];

foreach($users_data as $user){

    if($user['username'] == $username && $user['password'] == $password ){

        $flag= 1;
}
    
}
    if($flag=1){
        echo "The user already exists<br>";
    }else{
        echo "user is not found <br>";
    }
    





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
    <P>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
        </P>

        <p>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </p>

        <section>
            <button type="submit">Login</button>
        </section>

    </form>
</body>
</html>