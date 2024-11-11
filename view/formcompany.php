<?php
require_once("../config/conf.php");
require_once('../controller/erreur.php');

// Vérifie si des données ont été soumises via le formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère les données du formulaire et échappe les caractères spéciaux
    $title = $_POST['title'];
    $company = $_POST['company'];
    $description = $_POST['description'];
    $experience = $_POST['experience'];

    // Connexion à la base de données
    $conn = new mysqli(Conf::getHostname(), Conf::getLogin(), Conf::getPassword(), Conf::getDatabase());

    // Vérifie la connexion
    if ($conn->connect_error) {
        die("Échec de la connexion : " . $conn->connect_error);
    }

    // Prépare la requête SQL avec des paramètres liés
    $sql = "INSERT INTO offres_emploi (title, company, description, experience) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Vérifie si la préparation de la requête a réussi
    if ($stmt) {
        // Lie les valeurs des paramètres
        $stmt->bind_param("ssss", $title, $company, $description, $experience);

        // Exécute la requête
        if ($stmt->execute()) {
            $error_message = "Offre soumise avec succès.";
        } else {
            $error_message = "Erreur lors de l'insertion de l'offre : " . $stmt->error;
        }

        // Ferme la déclaration
        $stmt->close();
    } else {
        $error_message = "Erreur lors de la préparation de la requête.";
    }

    // Ferme la connexion
    $conn->close();
} else {
    $error_message = "Tous les champs du formulaire sont obligatoires.";
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout d'une offre d'emploi</title>
    <!-- Inclure le CSS de Bootstrap depuis un CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Ajout d'une offre d'emploi</h1>
                </div>
                <div class="card-body">
                    <?php if (!empty($error_message)) { ?>
                        <div class="alert alert-<?php echo isset($conn) && $conn->query($sql) === TRUE ? 'success' : 'danger'; ?>" role="alert">
                            <?php echo $error_message; ?>
                        </div>
                    <?php } ?>
                    <form method="POST" action="<?php echo isset($_SERVER["PHP_SELF"]) ? htmlspecialchars($_SERVER["PHP_SELF"]) : ''; ?>">
                        <div class="mb-3">
                            <label for="title" class="form-label">Titre :</label>
                            <input type="text" name="title" id="title" class="form-control" required/>
                        </div>
                        <div class="mb-3">
                            <label for="company" class="form-label">Entreprise :</label>
                            <input type="text" name="company" id="company" class="form-control" required/>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description :</label>
                            <textarea name="description" id="description" class="form-control" rows="5" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="experience" class="form-label">Expérience requise :</label>
                            <input type="text" name="experience" id="experience" class="form-control" required/>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">Ajouter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</
