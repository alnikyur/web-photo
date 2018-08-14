<?php

require_once 'functions.php';

//uploadFiles('images/', $_FILES['files']['tmp_name'], true);
//multipleUploadFiles('images/', $_FILES['files']['tmp_name'], true);

/*$tmp_file = $_FILES['files']['tmp_name'];
$unique_file_name =  md5_file($tmp_file['0']);

for ($i=0; $i<=count($_FILES['files']['name']); $i++) {
    $uploadDir = './images/';
    $uploadFile = $uploadDir.basename($_FILES['files']['name'][$i]);
    copy($_FILES['files']['tmp_name'][$i], $uploadFile);
}*/

$tmp_file = $_FILES['files']['tmp_name'];
$unique_file_name =  md5_file($tmp_file['0']);

for ($i=0; $i<=count($_FILES['files']['name']); $i++) {
    $unique_file_name =  md5_file($tmp_file[$i]);
    $uploadDir = './images/';
    $uploadFile = $uploadDir.$unique_file_name.'.jpg';
    copy($_FILES['files']['tmp_name'][$i], $uploadFile);
}