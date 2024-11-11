<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout d'un candidat</title>
    <!-- Inclure le CSS de Bootstrap depuis un CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Ajout d'un candidat</h1>
                </div>
                <div class="card-body">
                    <form method="POST" action="index.php?controller=candidat&action=created">
                        <div class="mb-3">
                            <label for="id" class="form-label">ID :</label>
                            <input type="text" name="id" id="id" class="form-control" required/>
                        </div>
                        <div class="mb-3">
                            <label for="n" class="form-label">Nom :</label>
                            <input type="text" name="n" id="n" class="form-control" required/>
                        </div>
                        <div class="mb-3">
                            <label for="p" class="form-label">Prénom :</label>
                            <input type="text" name="p" id="p" class="form-control" required/>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email :</label>
                            <input type="email" name="email" id="email" class="form-control" required/>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe :</label>
                            <input type="text" name="password" id="password" class="form-control" required/>
                        </div>
                        <div class="mb-3">
                            <label for="num" class="form-label">Numéro de téléphone :</label>
                            <input type="text" name="num" id="num" class="form-control" required/>
                        </div>
                        <div class="mb-3">
                            <label for="date_de_naissance" class="form-label">Date de naissance :</label>
                            <input type="date" name="date_de_naissance" id="date_de_naissance" class="form-control" required/>
                        </div>
                        <div class="mb-3">
                            <label for="location_candidat" class="form-label">Localisation :</label>
                            <input type="text" name="location_candidat" id="location_candidat" class="form-control" required/>
                        </div>
                        <div class="mb-3">
                            <label for="ID_user" class="form-label">ID utilisateur :</label>
                            <input type="text" name="ID_user" id="ID_user" class="form-control" required/>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">Créer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-VkeT4g5S3d7El18NE3b6XN4CzCkkXue06A5FYlgTrL2F0uHS5eF+E1msDYfF7hXg" crossorigin="anonymous"></script>

