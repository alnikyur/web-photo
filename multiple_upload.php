<?php

$tmp_file = $_FILES['files']['tmp_name'];
$unique_file_name =  md5_file($tmp_file['0']);

for ($i=0; $i<=count($_FILES['files']['name']); $i++) {
    $uploadDir = './images/';
    $uploadFile = $uploadDir.basename($_FILES['files']['name'][$i]);
    copy($_FILES['files']['tmp_name'][$i], $uploadFile);
}
