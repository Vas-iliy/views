<?php
include_once('core/db.php');

function select () {
    $sql = "SELECT * FROM messages ORDER BY time DESC ";
    $data = dbQuery($sql, null);
    $data = $data->fetchAll();

    return $data;
}

function insert ($params) {
    $sql = "INSERT INTO message (login, message) VALUES (:login, :message)";
    $data = dbQuery($sql, $params);

    return true;
}

function massageValidate (&$params) {
    $errors = [];
    $message = mb_strlen($params['message'], 'UTF-8');

    if (mb_strlen($params['login'], 'UTF-8') < 2) {
        $errors[] = 'Имя не короче 2 символов';
    }

    if ($message < 10 || $message > 140) {
        $errors[] = 'Текст не того формата';
    }

    $params['login'] = htmlspecialchars($params['login']);
    $params['message'] = htmlspecialchars($params['message']);

    return $errors;
}