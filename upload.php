<?php

$img_src = $_POST['img_src'];

$uploaddir = "./dirs/$img_src/";

$uploadfile = $uploaddir . basename($_FILES['files']['name']);

move_uploaded_file($_FILES['files']['tmp_name'], $uploadfile);

//print_r($_FILES);

header( "refresh:1;url=test.php" );

echo "<br><a href='test.php'>UPLOAD</a>";
