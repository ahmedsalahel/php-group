<?php
/**
 * string data type
 * integer data type
 * float data type
 * Boolean data type
 * null data type 
 */



// string data type
$x = "Hello";
echo $x , gettype ($x);
var_dump($x);
print_r ($x);

echo "<br>";

#
$y = 88 ; 
echo $y , gettype($y);
var_dump($y);
print_r ($y);

echo "<br>";

//float data type
$a = 10.50 ;
echo $a , gettype($a);
var_dump($a);
print_r ($a);

echo "<br>";

#Boolean data type
$h = true ;
echo $h , gettype($h);
var_dump($h);
print_r ($h);

echo "<br>";

// null data type
$s = null;
echo $s , gettype($s);
var_dump($s);
print_r($s);
echo "<br>";

/* This is a multiline PHP
comment. None of this
will be shown to the user. */
echo "This message will be printed to the user.";

echo "<br>";

$FirstName = 'Ahmed';
$LastName  = 'Salah';
define('POST' , 3305 );

//echo POST

function test (){
global $FirstName;
echo "<br>";
echo $FirstName;
//echo $LastName;  will not be shown  // Declare a global variable called $LastName
echo POST ;
}
test();

echo "<br>";

//Variable variables 
$A  = 'php';
$$A = 'language';
echo "$$A";
echo "<br>";
echo " ${$A}";
echo "<br>";
echo  "{$$A}";
echo "<br>";
echo  $$A;

?>