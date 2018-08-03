<?php


/*function check_file($file) {
    $allowed_ext = ['image/jpg', 'image/jpeg', 'image/png', 'image/gif'];
    if (!in_array($file, $allowed_ext)) {
        return ['err' => 1];
    }
    else {
        return true;
    }

}

function get_extension($file_name) {
    $ext = explode('/', $file_name);
    $ext = array_pop($ext);
    return strtolower($ext);
}

function fileType ($file) {
    $exp = explode('/', $file);
    return $exp;
}*/

$name = $_FILES['files']['name'];
$photo = $_FILES['files']['type'];


/*$check = check_file($photo);

if ($check['err'] == 1) {
    echo "Not allowed ext";
}
elseif ($check == true) {
    echo "OK";
    $img_src = $_POST['img_src'];

//$uploaddir = "./dirs/$img_src/";
    $uploaddir = 'images/';

    $uploadfile = $uploaddir . basename($_FILES['files']['tmp_name']);

    move_uploaded_file($_FILES['files']['tmp_name'], $uploadfile);
    rename();
//print_r($_FILES);

    header( "refresh:1;url=test.php" );
}*/

$img_src = $_POST['img_src'];

//$uploaddir = "./dirs/$img_src/";
$uploaddir = 'images/';

$uploadfile = $uploaddir . basename($_FILES['files']['tmp_name']);

move_uploaded_file($_FILES['files']['tmp_name'], $uploadfile);
rename();
//print_r($_FILES);

header( "refresh:1;url=test.php" );