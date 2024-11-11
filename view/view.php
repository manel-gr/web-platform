<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title><?php echo $pagetitle; ?></title>
</head>
<body>
<?php
require_once($ROOT.$DS."view".$DS."header.php");

// détermine le chemin de la vue en fonction du controller qu'on utilise
$filepath = $ROOT.$DS."view".$DS.$controller.$DS;

// détermine le nom du fichier
$filename = "view".ucfirst($view).ucfirst($controller).'.php'; 


require_once($filepath.$filename);

require_once($ROOT.$DS."view".$DS."footer.php");
?>
</body>
</html>