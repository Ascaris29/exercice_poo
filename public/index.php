<?php

require('../vendor/autoload.php');

if (isset($_GET["view"])){

    $viewName = $_GET["view"];
    $viewFile = '../src/views/'.$viewName.'.php';
    if (is_file($viewFile)) {
        require($viewFile);
    } else {
        die("view not found");
    }
} else {
    die("view not found");
}

