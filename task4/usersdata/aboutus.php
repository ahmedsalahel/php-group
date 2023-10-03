<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>thi is header</h1>    
<?php

require_once "data.php";


foreach($stateList['CA'] as $key => $country ){
echo "<br>";
echo  $key . " Refers to " . $country . "\n"; 

}


?>
<h1>this is footer</h1>
</body>
</html>