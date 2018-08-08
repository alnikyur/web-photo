<?php

function uploadFiles ($uploaddir, $filetmpname, $refresh) {
    $unique_file_name =  md5_file($filetmpname);
    $uploadfile = $uploaddir.$unique_file_name.'.png';
    move_uploaded_file($filetmpname, $uploadfile);
    if ($refresh == true) {
        header( "refresh:1;url=test.php" );
    }
}

function createDir ($dirname) {
    if (!file_exists('images')) {
        mkdir('images');
    }
    mkdir("images/$dirname");
}

function showTrash () {
    $dirs = scandir('./trash');
    $path = './trash';
    $count = count($dirs);
    for ($img = 2; $img < $count; $img++) {
        echo $dirs[$img];
    }
}

function deleteToTrash ($filename, $refresh) {
    rename("./images/$filename", "./trash/$filename");
    if ($refresh == true) {
        header( "refresh:1;url=test.php" );
    }
}

function clearTrash ($all_delete, $sing_delete, $trashpath, $refresh) {
    if (isset($sing_delete)) {
        unlink($trashpath.$sing_delete);
    }
    if (isset($all_delete)) {
        $dirs = scandir($trashpath);
        foreach ( $dirs as $item) {
            if ($item != '.' AND $item != '..') {
                echo "<br>$trashpath$item";
                unlink($trashpath.$item);
            }
        }
    }
    if ($refresh == true) {
        header( "refresh:1;url=test.php" );
    }
}