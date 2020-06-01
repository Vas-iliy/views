<?php
include_once('model/massages.php');
include_once ('core/arr.php');
include_once ('core/system.php');
$massages = select();
$pageTitle = 'Chat';
$pageContent = template('v_index', ['massages' => $massages]);



