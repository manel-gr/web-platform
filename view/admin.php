<?php
require_once('../config/Conf.php');

function maConnexion() {
    $dsn = "mysql:host=" . Conf::getHostname() . ";dbname=" . Conf::getDatabase();
    $user = Conf::getLogin();
    $password = Conf::getPassword();
    
    try {
        $bdd = new PDO($dsn, $user, $password);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $bdd;
    } catch (PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
        exit;
    }
}

function verifyAdmin($bdd, $name, $email, $password) {
    $hashed_password = ($password); // Utilisation de MD5 à des fins de démonstration uniquement
    $admin_check_query = "SELECT * FROM admin WHERE name = :name AND email = :email AND password = :password";
    $stmt_admin = $bdd->prepare($admin_check_query);
    $stmt_admin->execute([':name' => $name, ':email' => $email, ':password' => $hashed_password]);

    return $stmt_admin->rowCount() > 0;
}
?>
