<?php
$massages = select();
$pageTitle = 'Chat';
$pageContent = template('v_index', ['massages' => $massages]);



