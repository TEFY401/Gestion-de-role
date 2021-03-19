<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Modifier</title>
</head>
<body>
    <h1>Modification</h1>

    <div class="row">
        <div class="col-6 mx-auto">
            <form action="modification.php?id=<?= $_GET['id']; ?>" method="post">
                <div class="mb-3">
                    <label class="form-label text-center">Nom</label>
                    <input type="text" class="form-control" name="nom">
                </div>
                <div class="mb-3">
                    <label class="form-label">Prenom</label>
                    <input type="text" class="form-control" name="prenom">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="mb-3">
                    <label class="form-label">Rôle</label>
                    <input type="text" class="form-control" name="fonction">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Modifier</button><a href="administrateur.php" class="btn btn-primary">Retour</a>
            </form>
        </div>
    </div>
    
</body>
</html>