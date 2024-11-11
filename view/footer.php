<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Ajout d'une marge en haut personnalisée */
        .extra-mt {
            margin-top: 100px; /* Vous pouvez ajuster cette valeur selon vos besoins */
        }
        /* Pour le pied de page collant */
        html, body {
            height: 100%;
            margin: 0;
        }
        .wrapper {
            display: flex;
            flex-direction: column;
            min-height: 50vh;
        }
        .content {
            flex: 1;
        }
        .footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 1rem 0;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="content">
            <!-- Votre contenu ici -->
        </div>
        <footer class="footer extra-mt">
            <p>Login de l'admin<br/>&copy; JobHunt 2024</p>
        </footer>
    </div>
</body>
</html>
