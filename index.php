<?php
include_once ('core/system.php');
/*$cname = $_GET['c'] ?? 'index';
$patch = "controllers/$cname.php";
if (file_exists($patch) && checkNameDir($cname)) {
    include_once ($patch);
} else {
    include ('views/errors/v_404.php');
}*/

$http = template('base/v_main', [
    'title' => 'Test title',
    'content' => 'Test content'
]);

