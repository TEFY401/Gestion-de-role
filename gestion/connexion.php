<?php
    try{
        $pdo= new PDO("mysql:dbname=gestion;host=localhost",'root','');
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        echo 'Error'.$e->getMessage();
    }