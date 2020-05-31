<?php

function extractFields ($target, $fields) {
    $arr = [];
    foreach ($fields as $field ) {
        $arr[$field] = trim($target[$field]);
    }

    return $arr;
}

function checkNameDir ($patch) {

    $name = scandir($patch);
    if ($name) {
        return true;
    } else {
        return false;
    }
}