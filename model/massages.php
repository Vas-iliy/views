<?php

function select () {
    $sql = "SELECT login,massage FROM massages ORDER BY time DESC ";
    $data = dbQuery($sql, null);
    $data = $data->fetchAll();

    return $data;
}

function insert ($params) {
    $sql = "INSERT INTO massages (login, massage) VALUES (:login, :message)";
    $data = dbQuery($sql, $params);
    if ($data) {
        return true;
    } else {
        return false;
    }


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