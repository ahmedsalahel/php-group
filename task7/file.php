<?php

var_dump($_FILES);
$all_errors = [];
$allowed_ext = ['png' , 'jpg' , 'jpeg'];

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_FILES["my_images"])) {

        $count = count($_FILES["my_images"]["name"]);

        if($_FILES['my_images']['error'][0] != 4) {
            
            $file = $_FILES['my_images'];
            $nam = $file['name'];
            $tmp_name = $file['tmp_name'];
            $size = $file["size"] ;
            $doc_root = $_SERVER['DOCUMENT_ROOT'] . '/php-group/task7/uploads/';

            for($i = 0 ; $i < $count ; $i++) {
            $expload = explode('.', $nam[$i]);
            $end = end($expload);
            $ext = strtolower($end);
            
            if($size[$i] < 2097152) {
                if(in_array($ext, $allowed_ext)){
                    move_uploaded_file($tmp_name[$i], $doc_root . 'profile/' . uniqid() . $nam[$i]);
            }
        } else {
            $all_errors["file_size$i"] = "chplz check you file size max 3 miga ";
        }
    }
        } else {
            $all_errors ["empty_file"] = 'please choose file' ;  
        }


}

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
    <form method="post" enctype="multipart/form-data">


<input multiple type="file" name="my_images[]">
<button>submit</button>
    </form>
</body>
</html>