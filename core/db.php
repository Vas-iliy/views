<?php
 function dbConnection () {
     static $connection;
     if ($connection === null) {
         $connection = new PDO('mysql:host=' . DB_HOST .'; dbname=' . DB_NAME .';charset=UTF8', DB_LOG, DB_PASS,
             [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
     }
     return $connection;
 }

 function dbQuery ($sql, $prams) {
     $connect = dbConnection();
     $data = $connect->prepare($sql);
     $data->execute($prams);

     return $data;
 }