<?php

/*
 *Upload file
 */
function uploadFiles ($uploaddir, $filetmpname, $refresh = true) {
    $uploadfile = $uploaddir.basename($_FILES['files']['name']);
    move_uploaded_file($filetmpname, $uploadfile);
    if ($refresh == true) {
        header( "refresh:1;url=test.php" );
    }
}

/**
 * Upload multiple files
 *
 * @param string $uploaddir    Dir to upload files with trailing slash
 * @param array $tmp_file      Array from $_FILES['name']['tmp_name']
 * @param bool $refresh        If set in true - refresh page in 1 second
 *                             otherwise - without refresh.
 */
function multipleUploadFiles ($uploaddir, $tmp_file, $refresh = true) {
    for ($i=0; $i<=count($_FILES['files']['name']); $i++) {
        $unique_file_name =  md5_file($tmp_file[$i]);
        $uploadFile = $uploaddir.$unique_file_name.'.jpg';
        copy($_FILES['files']['tmp_name'][$i], $uploadFile);
    }
    if ($refresh == true) {
        header( "refresh:1;url=test.php" );
    }
}

/*
 *Create directory
 */
function createDir ($dirname) {
    if (!file_exists('images')) {
        mkdir('images');
    }
    mkdir("images/$dirname");
}

/*
 *Show files in trash
 */
function showTrash () {
    $dirs = scandir('./trash');
    foreach ($dirs as $item) {
        if ($item != '.' AND $item != '..') {
            $result[] = $item;
        }
    }
    return json_encode($result);
}

/*
 *Delete files to trash
 */
function deleteToTrash ($filename, $refresh = true) {
    rename("./images/$filename", "./trash/$filename");
    if ($refresh == true) {
        header( "refresh:1;url=test.php" );
    }
}

/*
 *Delete files from trash (not recoverable)
 */
function clearTrash ($all_delete, $sing_delete, $trashpath, $refresh = true) {
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