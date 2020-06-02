<?php

session_start();

function redirect($address) {
    header("Location: $index.php");
}

spl_autoload_register(function($element) {
    
    $collection = explode('\\', $element);

    $newPath = ".";

    foreach($collection as $value) {
        $newPath = $newPath . '/' . $value;
    }

    $newPath = $newPath . '.php';

    include $newPath;
});