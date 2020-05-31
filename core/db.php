<?php
 function dbConnection () {
     static $connection;
     if ($connection === null) {
         $connection = new PDO('mysql:host=localhost; dbname=views; charset=UTF8', 'root', 'root',
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