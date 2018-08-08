
<?php

///require_once './config.php';

$dirs = scandir('./images');
$count = count($dirs);
?>

<html>
<head></head>
<body>

<form action="show_trash.php">
    <input type="submit" value="Показать удаленные файлы">
</form>

<!--<form action="show.php" method="post">-->
<!--<select name="drop_down" size="1">-->
<!--    --><?php //for($i = 2; $i < $count; $i++) { ?>
<!--        <option value="--><?php // echo($dirs[$i]); ?><!--">--><?php //echo($dirs[$i]); ?><!--</option>-->
<!--    --><?php //} ?>
<!--    <input type="submit" value="Delete dir">-->
<!--</select>-->
<!--</form>-->

<div align="center">
    <h1>Создать директорию</h1>
<form action="create.php" method="POST">
    <input type="text" name="create">
    <input type="submit" value="Create directory">
</form>
</div>

<div align="center">
    <h1>Загрузить файл</h1>
<form action="upload.php" enctype="multipart/form-data" method="POST">
<!--    <select name="img_src" size="1">-->
<!--        --><?php //for($i = 2; $i < $count; $i++) { ?>
<!--            <option value="--><?php // echo($dirs[$i]); ?><!--">--><?php //echo($dirs[$i]); ?><!--</option>-->
<!--        --><?php //} ?>
<!--    </select>-->
    <input type="file" name="files" accept="image/gif,image/jpeg,image/jpg,image/png" multiple>
    <input type="submit">
</form>
</div>
</body>
</html>

<?php

//function create_dir () {
//    $dst = 'dirs';
//    $path_new_dir = $_POST['new_dir'];
//    $file = "./tests.php";
//    mkdir("$dst/$path_new_dir");
//    copy("$file", "$dst/$path_new_dir/index.php");
//}

function show ($path) {
    $show = scandir("$path");
    foreach ( $show as $item) {
        if ($item != '.' AND $item != '..' AND is_file("./images/$item")) {
            echo "<img src=./images/$item width='50' height='50'>
            <form action='delete.php' method='GET'>
            <input type='hidden' name='delete' value=$item>
            <input type='submit' value='Delete'>
            </form>";
        }
    }
}


//show('./images');


//scandir('./images');

//for ($img = 2; $img < 10; $img++) {
//    echo "
//<div><img src=./images/$dirs[$img] width='50' height='50'></div>";
//
//}

?>

<style>
/*    *{
        margin: 0px;
        padding: 0px;
    }
    html, body{
        height: 100%;
    }
    body{
        background-color: #ccc;
    }*/

    div {
        /*border: 1px solid lightgray;*/
        margin:10px;
        text-align: center;
        align-content: center;
    }
    #main{
        width: 1500px;
        height: 700px;
        overflow: hidden;
    }
    #main>div{
        width: 200px;
        height: 200px;
        display: inline-block;
    }

</style>
<form action="query.php" method="GET">
<div id="main">
<?php for ($img = 2; $img < $count; $img++) {
    echo "
<div><img src=./images/$dirs[$img] width='200' height='200'><br>
<input type='hidden' name='delete' value=$dirs[$img]>
<input type='submit' value='Delete'>
</div>";

}?>
</div>
</form>

