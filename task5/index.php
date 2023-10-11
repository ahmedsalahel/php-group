<?php

//1. Write a function to calculate the factorial of a number (a non-negative integer). The function accepts the number as an argument.

function factorial($number) {

    if ($number < 0) {
        return "Error";
    }

    if ($number == 0) {
        return 1;
    }
    

    return $number * factorial($number - 1);
}

$number = 5;
$result = factorial($number);
echo  $result;



echo "<br>";



//2. Write a function to reverse any inputs you give ( if you give it ahmed it return demha ).

function Reverse($name){ 
    return strrev($name); 
} 
$name = "ahmed"; 
echo Reverse($name) ;

echo "<br>";




// 3. search on recursive function and make an example

function display($num) {    
    if($num<=5){    
        echo "$num <br/>";    
        display($num+1);    
    }  
}    
display(1);    

echo "<br>";



//4. Write a PHP script to get the first word of a sentence


$value = "hello my name is ahmed ";

echo strtok($value, " "); 





echo "<br>";

//5. Write a PHP script to generate simple random password from a given string (password will be from => '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz')

function random_password( $length ) {

    $Random_Pass = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
    return substr(str_shuffle($Random_Pass),0,$length);

}

echo random_password(15);


echo "<br>";


//6. Write a PHP script that displays 1 2 3 4 5 6 7 8 9 10 numbers on one line

for ($i = 1; $i <= 10; $i++) {
    echo $i . ' ';
}


?>








