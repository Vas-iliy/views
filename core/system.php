<?php


function checkNameDir ($patch) {
    return preg_match('/[aA-zZ0-9_-]/', $patch);
}

function template ($patch, $vars =[]) {
    $systemParamFullPatch = "views/$patch.php";
    extract($vars);
    ob_start();
    include ($systemParamFullPatch);
    return ob_get_clean();
}

