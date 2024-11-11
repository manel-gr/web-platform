<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Candidat</title>
    <!-- Inclure le CSS de Bootstrap depuis un CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <h3 class="mb-4">Détails du candidat</h3>
    <table class="table table-hover table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Mot de passe</th>
                <th>Numéro de téléphone</th>
                <th>Date de naissance</th>
                <th>Localisation</th>
                <th>ID utilisateur</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $u->getId(); ?></td>
                <td><?php echo $u->getName(); ?></td>
                <td><?php echo $u->getFamily_name(); ?></td>
                <td><?php echo $u->getEmail(); ?></td>
                <td><?php echo $u->getPassword(); ?></td>
                <td><?php echo $u->getNum(); ?></td>
                <td><?php echo $u->getDate_de_naissance(); ?></td>
                <td><?php echo $u->getLocation_candidat(); ?></td>
                <td><?php echo $u->getID_user(); ?></td>
            </tr>
        </tbody>
    </table>
    <a href="index.php?controller=candidat" class="btn btn-success mt-3">Terminé</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-VkeT4g5S3d7El18NE3b6XN4CzCkkXue06A5FYlgTrL2F0uHS5eF+E1msDYfF7hXg" crossorigin="anonymous"></script>
</body>
</html>
