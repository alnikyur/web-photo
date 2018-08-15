<?php

require_once 'functions.php';

uploadFiles('./images/', $_FILES['files']['tmp_name']);

//multipleUploadFiles('./images/', $_FILES['files']['tmp_name']);