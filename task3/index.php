<?php
    /*/try to do some practice on array
    - Ex1 try to imagine this array and see the result using print_r  ||  var_dump
              try to echo Kansas &  Nova Scotia*/

$countryList = [
    'CA'        => 'Canada',
    'US'        => 'United States'];

$stateList['CA'] = [
    'AB'        => 'Alberta',
    'BC'        => 'British Columbia',
    'AB'        => 'Alberta',
    'BC'        => 'British Columbia',
    'MB'        => 'Manitoba',
    'NB'        => 'New Brunswick',
    'NL'        => 'Newfoundland/Labrador',
    'NS'        => 'Nova Scotia',
    'NT'        => 'Northwest Territories',
    'NU'        => 'Nunavut',
    'ON'        => 'Ontario',
    'PE'        => 'Prince Edward Island',
    'QC'        => 'Quebec',
    'SK'        => 'Saskatchewan',
    'YT'        => 'Yukon'];

$stateList['US'] = [
    'AL'        => 'Alabama',
    'AK'        => 'Alaska',
    'AZ'        => 'Arizona',
    'AR'        => 'Arkansas',
    'CA'        => 'California',
    'CO'        => 'Colorado',
    'CT'        => 'Connecticut',
    'DE'        => 'Delaware',
    'DC'        => 'District of Columbia',
    'FL'        => 'Florida',
    'GA'        => 'Georgia',
    'HI'        => 'Hawaii',
    'ID'        => 'Idaho',
    'IL'        => 'Illinois',
    'IN'        => 'Indiana',
    'IA'        => 'Iowa',
    'KS'        => 'Kansas',
    'KY'        => 'Kentucky',
    'LA'        => 'Louisiana',
    'ME'        => 'Maine',
    'MD'        => 'Maryland',
    'MA'        => 'Massachusetts',
    'MI'        => 'Michigan',
    'MN'        => 'Minnesota',
    'MS'        => 'Mississippi',
    'MO'        => 'Missouri',
    'MT'        => 'Montana',
    'NE'        => 'Nebraska',
    'NV'        => 'Nevada',
    'NH'        => 'New Hampshire',
    'NJ'        => 'New Jersey',
    'NM'        => 'New Mexico',
    'NY'        => 'New York',
    'NC'        => 'North Carolina',
    'ND'        => 'North Dakota',
    'OH'        => 'Ohio',
    'OK'        => 'Oklahoma',
    'OR'        => 'Oregon',
    'PA'        => 'Pennsylvania',
    'RI'        => 'Rhode Island',
    'SC'        => 'South Carolina',
    'SD'        => 'South Dakota',
    'TN'        => 'Tennessee',
    'TX'        => 'Texas',
    'UT'        => 'Utah',
    'VT'        => 'Vermont',
    'VA'        => 'Virginia',
    'WA'        => 'Washington',
    'WV'        => 'West Virginia',
    'WI'        => 'Wisconsin',
    'WY'        => 'Wyoming'
    ];

print_r($countryList);
echo"<br>";
var_dump($countryList);
echo"<br>";
print_r($stateList['CA']);
echo"<br>";
var_dump($stateList['CA']);
echo"<br>";
print_r($stateList['US']);
echo"<br>";
var_dump($stateList['US']);
echo"<br>";
echo $stateList['CA']['NS'];
echo"<br>";
echo $stateList['US']['KS'];
echo"<br>";
//--------------------------------------------------------------------------
/*   - Ex2  try using a builtin function to get max int number system can hold and assign it to $max_int 
try to explain what happen in the following array*/

$max_int = PHP_INT_MAX;
$arr = [];
$arr[1] = 'last name';
$arr[$max_int] = 'this is max of array';
$arr[0] = 'first name';
$arr[] = 'this may be at the last of array'; 
print_r($arr);
//$arr = [];empty array
//$arr[1] = 'last name'; Assigns the value 'last name' to the key 1 in the array
//$arr[$max_int] = 'this is max of array'; Assigns the value 'this is max of array' to the key the maximum integer value ($max_int) [9223372036854775807]
//$arr[0] = 'first name'; Assigns the value 'first name' to the key 0 in the array
//$arr[] =>  Fatal error: Uncaught Error: Cannot add element to the array as the next element => because it's max you can't add another element in the array from [0] to [MAX]

echo "<br>";

//--------------------------------------------------------------------------

/*Ex3  search and use the following array methods ( count , in_array , array_key_exists , array_keys , array_values , array_sum , end , array_rand , array_merge , array_replace , array_shift , array_unshift , array_push , array_pop , array_slice , array_splice )
 make 1 example on each of the following array methods*/

//count (Counts all elements in an array or in a Countable object)
$a['b'] = 1;
$a['c'] = 3;
$a['d'] = 5;
$a['e'] = 6;
var_dump(count($a)); // 4(int)
echo "<br>";

//in_array (Checks if a value exists in an array)
$lang = ['php' , 'c' , 'c++' , 'python'];
if (in_array('php',$lang )) {
    echo "'php' found";
};
echo "<br>";

//array_key_exists ( Checks if the given key or index exists in the array)
$country = ['KSA' => 'Saudi Arabia' , 'US' => 'United States' ];
if(array_key_exists('KSA' , $country ))
{
    echo "'KSA' found ";
};
echo"<br>";

//array_keys (Return all the keys or a subset of the keys of an array)
$array = ['a' => 1, 'b' => 2, 'c' => 3];
print_r(array_keys($array));
echo"<br>";

//array_values (Return all the values of an array)
$A = ["size" => "XL", "color" => "gold"];
print_r(array_values($A));
echo"<br>";

//array_sum ( Calculate the sum of values in an array)
$num = [ 2 , 4 , 6 , 8];
print_r(array_sum($num));
echo"<br>";

//end (Set the internal pointer of an array to its last element)
$fruits = ['apple', 'banana', 'cranberry'];
echo end($fruits);
echo"<br>";

//array_rand (Pick one or more random keys out of an array )
$lan = ['p'=> 'php' , 'c' =>'c' , 'b' =>'c++' , 'y'=>'python'];
print_r(array_rand($lan , 2));
echo"<br>";

//array_merge ( Merge one or more arrays)
$array1 = ['red' , ' blue' , ' green'];
$array2 = [1 , 2 , 3];
// $result = array_merge($array1 , $array2);
// print_r($result);
print_r(array_merge($array1 ,$array2));
echo"<br>";

//array_replace (Replaces elements from passed arrays into the first array)
$base = ["orange", "banana", "apple", "raspberry"];
$replacements = [0 => "pineapple", 4 => "cherry"];
print_r(array_replace($base , $replacements));
echo"<br>";

//array_shift (Shift an element off the beginning of array)
$fr = ["orange", "banana", "apple", "raspberry"];
$fruit = array_shift($fr);
print_r($fr);
echo"<br>";

//array_unshift ( Prepend one or more elements to the beginning of an array)
$q = ["orange","banana"];
array_unshift($q, "apple", "raspberry");
print_r($q);
echo"<br>";

//array_push (Push one or more elements onto the end of array)
$c = ["red", "green"];
array_push($c, "blue", "black");
print_r($c);
echo"<br>";

//array_pop ( Pop the element off the end of array)
$F = ["orange", "banana", "apple", "raspberry"];
print_r(array_pop($F));
echo"<br>";

//array_slice (Extract a slice of the array)
$input = ["a", "b", "c", "d", "e"];
print_r(array_slice($input , 2 ));
echo "<br>";

//array_splice ( Remove a portion of the array and replace it with something else)
$array3 = ['apple', 'banana', 'cherry', 'date'];
$replaced = array_splice($array3, 1, 2, ['grape', 'kiwi']);
print_r($array3);
echo "<br>";


 ?>