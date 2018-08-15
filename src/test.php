
<?php

//require_once 'lib/Twig/Autoloader.php';
//Twig_Autoloader::register();
//$loader = new Twig_Loader_Filesystem('templates');


$dirs = scandir('./images');
$count = count($dirs);
?>

<html>
<head></head>
<body>

<form action="show_trash.php">
    <input type="submit" value="Показать удаленные файлы">
</form>

<div align="center">
    <h1>Загрузить файл</h1>
<form action="upload.php" enctype="multipart/form-data" method="POST">
    <input type="file" name="files" accept="image/gif,image/jpeg,image/jpg,image/png" multiple>
    <input type="submit" value="Загрузить">
</form>
</div>
</body>
</html>

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
    /*input[type="submit"] {*/
        /*border: 0;*/
        /*background: url('icons/btn.png') no-repeat center top;*/
        /*width: 120px;*/
        /*height: 35px;*/
    /*}*/

</style>
<form action="query.php" method="POST">
<div id="main">
<?php for ($img = 2; $img < $count; $img++) {
    echo "
<div><img src=./images/$dirs[$img] width='200' height='200'><br>
<input type='text' value=$dirs[$img]/>
<input type='hidden' name='delete' value=$dirs[$img]>
<input type='submit' value='Delete'>
</div>";

}?>
</div>
</form>

