<?php
include_once ('core/arr.php');
$cname = $_GET['c'] ?? 'index';
$patch = "controllers/$cname.php";
if (file_exists($patch)) {
    include_once ($patch);
} else {
    include ('views/errors/v_404.php');
}

