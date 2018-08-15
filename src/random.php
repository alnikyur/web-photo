<?php

$files = array_diff(scandir('./images'), array('.', '..'));
   $rand_keys = array_rand($files);
   $arr = $files[$rand_keys];
   echo "<img width='100' height='100' src=./images/$arr/>";

?>

<br><a href="javascript:window.location.reload()">Сгенерить фотку</a>