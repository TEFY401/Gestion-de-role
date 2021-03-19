<?php
    if(isset($_POST['deconnecter'])){
        session_destroy();
        header('Location: identificateur.php');
    }