<?php

$method = $_GET['delete_all'];
$delete = $_GET['delete'];
$path = './trash/';
if (isset($delete)) {
    unlink($path.$delete);
}

if (isset($method)) {
    $dirs = scandir('./trash');
    $path = './trash/';
    foreach ( $dirs as $item) {
        if ($item != '.' AND $item != '..') {
            echo "<br>$path$item";
            unlink($path.$item);
        }
    }
}

header( "refresh:1;url=show_trash.php" );