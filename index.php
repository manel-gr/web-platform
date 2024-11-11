<?php

// DIR est une constante "magique" de PHP qui contient le chemin du dossier courant
$ROOT = __DIR__;

// DS contient le slash des chemins de fichiers, c'est-à-dire '/' sur Linux et '' sur Windows
$DS = DIRECTORY_SEPARATOR;

$controleur_default = "candidat" ;

if(!isset($_REQUEST['controller']))
                //$controller récupère $controller_default;
                $controller=$controleur_default;
            else 
                // recupère l'action passée dans l'URL
                $controller = $_REQUEST['controller'];


switch ($controller) {
            case "company" :
            // {$var} pour concaténer les chaînes de caractères 
                require ("{$ROOT}{$DS}controller{$DS}controllerCompany.php");
                break;

            case "candidat" :
                require ("{$ROOT}{$DS}controller{$DS}controllerCandidat.php");
                break;

            case "default" :
                require ("{$ROOT}{$DS}controller{$DS}controllerCandidat.php");
                break;
}
?>


