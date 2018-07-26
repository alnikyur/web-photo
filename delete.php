<?php

//echo $_GET['delete'];

$img_name = $_GET['delete'];
$tmp_name = 'tmp';

$src = './images';
$dst = './trash';

rename("$src/$img_name", "$dst/$tmp_name.$img_name");

header( "refresh:1;url=test.php" );