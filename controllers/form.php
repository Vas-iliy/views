<?php
include_once('model/massages.php');
include_once('core/arr.php');


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
foreach ($validateErrors as $error) {
    $er .= $error . "<br>";
}
$pageContent = template('v_form', ['errors' => $er,
    'login' => $params['login'],
    'message' => $params['message']
]);