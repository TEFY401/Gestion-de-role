<?php if(session_id() == "")
     session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Gestion d'utilisateurs</title>
</head>
<body>
   
    <h2>Gestion d'utilisateurs</h2>
    <div class="d-flex justify-content-end">
<?php if(isset($_SESSION['admin']) && $_SESSION['admin'] == 1): ?>
      <h4 class="mr-2"><a href="ajouterUtilisateur.php">Ajouter</a></h4>
<?php endif ?> 
    </div>
    

        <table class="table text-center">
            <thead class="thead-dark">
                <tr class="text-center">
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Email</th>
    <?php if(isset($_SESSION['admin']) && $_SESSION['admin'] == 1): ?>
                    <th scope="col">Password</th>
    <?php endif ?>
                    <th scope="col">Rôle</th>
    <?php if(isset($_SESSION['admin']) && $_SESSION['admin'] == 1): ?>
                    <th scope="col">Operations</th>
    <?php endif ?>
                </tr>
            </thead>
            <tbody>
            <?php include('connexion.php');
                $all=$pdo->query('SELECT * FROM utilisateurs');
                while($tout = $all->fetch()){ ?>
                <tr>
                    <td><?php echo $tout['nom']; ?></td>
                    <td><?php echo $tout['prenom']; ?></td>
                    <td><?php echo $tout['email']; ?></td>
    <?php if(isset($_SESSION['admin']) && $_SESSION['admin'] == 1): ?>
                    <td><?php echo $tout['mot_de_passe']; ?></td>
    <?php endif ?>
                    <td><?php echo $tout['role']; ?></td>
    <?php if(isset($_SESSION['admin']) && $_SESSION['admin'] == 1): ?>
                    <td>
                        <a href="modificationdonne.php?id=<?= $tout['id'];?>" class="btn btn-sm btn-info">Modifier</a>
                        <a href="supprimer.php?id=<?= $tout['id'];?>" class="btn btn-sm btn-danger">Supprimer</a>
                    </td>
    <?php endif ?>
                </tr>
                <?php } ?>
            </tbody>
        </table>

            <a href="identificateur.php" class="d-flex mr-2 justify-content-end">Se déconnecter</a>
       
</body>
</html>