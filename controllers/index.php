<?php
include_once('model/massages.php');

$massages = select();
$pageTitle = 'Chat';

foreach ($massages as $massage) {
    $mas .= $massage['login'] . ' Оставил сообщение: ' . $massage['massage'] . "<br>";
}

$pageContent = template('v_index', ['message' => $mas]);



