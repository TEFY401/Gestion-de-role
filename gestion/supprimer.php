<?php
    include('connexion.php');

    $supprimer= "DELETE FROM utilisateurs WHERE id = {$_GET['id']}";
    if($pdo->exec($supprimer)){
        header('Location: administrateur.php');
    }