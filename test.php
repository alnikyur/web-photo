<?php

require_once './config.php';

$dirs = scandir('./images');
$count = count($dirs);

echo "Количество элементов в массиве $count";
?>
<form action="show.php" method="post">
<select name="drop_down" size="1">
    <?php for($i = 2; $i < $count; $i++) { ?>
        <option value="<?php  echo($dirs[$i]); ?>"><?php echo($dirs[$i]); ?></option>
    <?php } ?>
    <input type="submit" value="Delete dir">
</select>
</form>

<form action="create.php" method="POST">
    <input type="text" name="create">
    <input type="submit" value="Create directory">
</form>


<form action="upload.php" enctype="multipart/form-data" method="POST">
    <select name="img_src" size="1">
        <?php for($i = 2; $i < $count; $i++) { ?>
            <option value="<?php  echo($dirs[$i]); ?>"><?php echo($dirs[$i]); ?></option>
        <?php } ?>
    </select>
    <input type="file" name="files">
    <input type="submit">
</form>

<?php

//function create_dir () {
//    $dst = 'dirs';
//    $path_new_dir = $_POST['new_dir'];
//    $file = "./tests.php";
//    mkdir("$dst/$path_new_dir");
//    copy("$file", "$dst/$path_new_dir/index.php");
//}

//function show ($path) {
//    $show = scandir("$path");
//    foreach ( $show as $item) {
//        if ($item != '.' and $item != '..') {
//            echo "<br><a href='$item/index.php'>$item</a>";
//        }
//    }
//}
//create_dir();
//show('dirs');

