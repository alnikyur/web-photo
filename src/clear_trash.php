<?php

require_once 'functions.php';

clearTrash($_GET['delete_all'], $_GET['delete'],'./trash/', true);