<?php

function makeRandomString($max=6) {
    $i = 0; //Reset the counter.
    $possible_keys = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $keys_length = strlen($possible_keys);
    $str = ""; //Let's declare the string, to add later.
    while($i<$max) {
        $rand = mt_rand(1,$keys_length-1);
        $str.= $possible_keys[$rand];
        $i++;
    }
    return $str;
}

$name = $_FILES['files']['name'];

$rand_name = makeRandomString();

$img_src = $_POST['img_src'];

//$uploaddir = "./dirs/$img_src/";
$uploaddir = 'images/';

$uploadfile = $uploaddir . basename($_FILES['files']['tmp_name']);

move_uploaded_file($_FILES['files']['tmp_name'], $uploadfile);
rename();
//print_r($_FILES);

header( "refresh:1;url=test.php" );
