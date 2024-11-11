<?php
@include '../php/config.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
  .error-message {
    position: fixed;
    top: 20px;
    left: 50%;
    transform: translateX(-50%);
    background-color: #ff5722; /* Orange */
    color: #fff; /* Texte en blanc */
    padding: 15px 20px; /* Espacement intérieur du message */
    border-radius: 8px; /* Coins arrondis */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Ombre légère */
    display: none; /* Le message est initialement caché */
    z-index: 9999; /* Assurez-vous que le message s'affiche au-dessus du contenu */
    text-align: center; /* Centrage du texte */
    font-size: 16px; /* Taille de la police */
    font-weight: bold; /* Texte en gras */
    animation: slideIn 0.5s ease-in-out; /* Animation d'apparition */
}

@keyframes slideIn {
    0% { top: -100px; opacity: 0; } /* Début de l'animation : hors de l'écran et invisible */
    100% { top: 20px; opacity: 1; } /* Fin de l'animation : position fixe et entièrement visible */
}

.error-message.show {
    display: block; /* Affiche le message */
}

    </style>
</head>
<body>

<div id="error-message" class="error-message"></div>

<!-- Votre contenu HTML ici -->

<script>
    function showError(message) {
        var errorMessage = document.getElementById("error-message");
        errorMessage.innerHTML = message;
        errorMessage.style.display = "block";
        setTimeout(function() {
            errorMessage.style.display = "none";
        }, 5000); // Le message disparaîtra automatiquement après 5 secondes
    }
</script>

</body>
</html>
