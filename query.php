<?php

$query = $_GET['delete'];

echo $query;

rename("./images/$query", "./trash/$query");

header( "refresh:1;url=test.php" );