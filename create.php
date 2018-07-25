<?php

require_once './config.php';

$create = $_POST['create'];

echo $create;

if (!file_exists('images')) {
    mkdir('images');
}

mkdir("images/$create/");