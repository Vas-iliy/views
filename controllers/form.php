<?php
if ($_POST['login']) {
    $params = extractFields($_POST, ['login', 'message']);

    $validateErrors = massageValidate($params);

    if (empty($validateErrors)) {
        insert($params);
        header('Location:index.php');
        die();
    }

} else {
    $params = ['login' => '', 'message' => ''];
    $validateErrors = [];
}

$pageTitle = 'Massage';

$pageContent = template('v_form', [
    'validateErrors' => $validateErrors,
    'params' => $params
]);