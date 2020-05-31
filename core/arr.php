<?php

function extractFields ($target, $fields) {
    $arr = [];
    foreach ($fields as $field ) {
        $arr[$field] = trim($target[$field]);
    }

    return $arr;
}

function checkNameDir ($patch) {
    $dir = 'controllers';
    $names = scandir($dir);
    foreach ($names as $name) {
        if ($patch == $name) {
            return true;
        }
    }
    return false;
}