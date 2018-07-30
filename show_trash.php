<?php

$dirs = scandir('./trash');
$path = './trash';
$count = count($dirs);

?>

<a href="test.php">To main page</a>

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
        border: 2px solid lightgray;
        margin:10px;
        text-align: center;
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
<div><img src=./trash/$dirs[$img] width='200' height='200'><br>
<input type='hidden' name='delete' value=$dirs[$img]>
<input type='submit' value='Delete'>
</div>";

        }?>
    </div>
</form>