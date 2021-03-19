<?php
    include('connexion.php');

    $modifie ="UPDATE utilisateurs SET 
        nom= '{$_POST['nom']}',
        prenom= '{$_POST['prenom']}',
        email= '{$_POST['email']}',
        mot_de_passe= '{$_POST['password']}',
        role= '{$_POST['fonction']}' WHERE id= {$_GET['id']}";

    if($pdo->exec($modifie)){
        header('Location: administrateur.php');
    }