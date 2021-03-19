<?php
    include('connexion.php');

            $insertion="INSERT INTO utilisateurs SET 
                nom= '{$_POST['nom']}',
                prenom= '{$_POST['prenom']}',
                email= '{$_POST['email']}',
                mot_de_passe= '{$_POST['password']}',
                role= '{$_POST['fonction']}'
            ";
        if($pdo->exec($insertion)){
            header('Location: administrateur.php');
        }
            