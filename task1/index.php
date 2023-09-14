echo
1-echo is a statement i.e used to display the output. it can be used with parentheses echo or without parentheses echo.

<?php
$name="John";
echo $name;
//or        
echo ($name);
?>

2-echo can pass multiple string separated as ( , )

<?php
$name = "John";
$profile = "PHP Developer";
$age = 25;
echo $name , $profile , $age, " years old";
?>

3-echo doesn't return any value
(check return type)
<?php
//$name = "John";
//$ret =  echo $name;
//when we run the program it show error,because echo has no return type.  
?>

4-echo is faster then print


print

1-using print can doesn't pass multiple argument

<?php
$name = "John";
$profile = "PHP Developer";
$age = 25;
//print $name , $profile , $age, " years old"; 
//As we run this program it show some error. It means multiple argument are not allow in print .
?>

2-print always return 1

<?php
$name = "John";
$ret =  print $name;
//To test it returns or not
echo $ret;
?>

3-it is slower than echo

____________________________________________________________________________________________________________________________
<br>
task 2
<br>

<?php


$firstName = "ahmed";

$lastName  = "salah";

echo 'my fullname is '. $firstName .'   '. $lastName . ' and my age is 25';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>


























