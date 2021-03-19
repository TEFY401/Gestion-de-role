<?php
    if(session_id() == "")
    session_start();
    include('connexion.php');

    $selection = $pdo->query("SELECT * FROM utilisateurs WHERE email = '{$_POST['email']}'");
    $select= $selection->fetch();
    if($select){
            if($_POST['password'] == $select['mot_de_passe']){
                $_SESSION['admin'] = $select['role'] == 'admin' ? 1 : 0;
                include('administrateur.php');
                die();

            }else{
                echo "<script> alert('Ce mot de passe est incorrecte!') </script>";
                include('identificateur.php');
                die();
            }

        }
        
    