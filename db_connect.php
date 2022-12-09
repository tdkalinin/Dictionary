<?php
    try{
        $db = new PDO("mysql:host=localhost;dbname=test", "root", "");
    }
    catch(PDOException $e){
        echo "Ошибка подключения к БД! {$e->getMessage()}";
    }
?>