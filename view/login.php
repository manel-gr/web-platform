<?php
require_once('../config/Conf.php');
require_once('../controller/erreur.php');
require_once('../view/admin.php');

session_start();

$bdd = maConnexion();

if (isset($_POST['submit'])) {
    // Récupérer les données soumises par le formulaire
    $name = ($_POST["name"]);
    $email = $_POST["email"];
    $password = $_POST["password"];
    $hashed_password = ($password); 
    // Vérifier si l'utilisateur est administrateur
    if (verifyAdmin($bdd, $name, $email, $password)) {
        header("Location: ../index.php");
        exit;
    }

    // Vérifier si l'utilisateur est enregistré en tant que company
    $select_company = "SELECT * FROM company WHERE name = :name AND email = :email AND password = :password";
    $stmt_company = $bdd->prepare($select_company);
    $stmt_company->execute([':name' => $name, ':email' => $email, ':password' => $hashed_password]);

    // Vérifier si l'utilisateur est enregistré en tant que candidat
    $select_candidat = "SELECT * FROM candidat WHERE name = :name AND email = :email AND password = :password";
    $stmt_candidat = $bdd->prepare($select_candidat);
    $stmt_candidat->execute([':name' => $name, ':email' => $email, ':password' => $hashed_password]);

    if ($stmt_company->rowCount() > 0) {
        // L'utilisateur est enregistré en tant que company
        $type_user = "company";
        header('Location: ../view/company.php');
        exit;
    } elseif ($stmt_candidat->rowCount() > 0) {
        // L'utilisateur est enregistré en tant que candidat
        $type_user = "candidat";
        header('Location: ../view/candidat.php');
        exit;
    } else {
        // L'utilisateur n'est pas enregistré dans les tables company ou candidat
        $type_user = "undefined";
    }

    // Vérifier si l'utilisateur est déjà enregistré dans la table user
    $select_existing_user = "SELECT * FROM user WHERE name = :name AND email = :email";
    $stmt_existing_user = $bdd->prepare($select_existing_user);
    $stmt_existing_user->execute([':name' => $name, ':email' => $email]);

    if ($stmt_existing_user->rowCount() > 0) {
        // L'utilisateur est déjà enregistré dans la table "user"
        $user_data = $stmt_existing_user->fetch(PDO::FETCH_ASSOC);
        if ($user_data['type_user'] === "candidat") {
            header('Location: ../view/candidat.php');
            exit;
        } elseif ($user_data['type_user'] === "company") {
            header('Location: ../view/company.php');
            exit;
        }
    } else {
        if ($type_user !== "undefined") {
            // Insérer l'utilisateur dans la table "user"
            $insert_user_query = "INSERT INTO user (name, email, password, type_user) VALUES (:name, :email, :password, :type_user)";
            $stmt_insert = $bdd->prepare($insert_user_query);
            $result = $stmt_insert->execute([':name' => $name, ':email' => $email, ':password' => $hashed_password, ':type_user' => $type_user]);

            if ($result) {
                // Redirection en fonction du type d'utilisateur
                if ($type_user === "candidat") {
                    header('Location: ../view/candidat.php');
                } elseif ($type_user === "company") {
                    header('Location: ../view/company.php');
                }
                exit;
            } else {
                $error_message = "Erreur lors de l'insertion de l'utilisateur.";
            }
        } else {
            // L'utilisateur n'est ni candidat ni company
            $error_message = "Vous devez créer un compte pour accéder. <a href='../view/form.php'>Inscrivez-vous ici</a>.";
        }
    }

    if (!empty($error_message)) {
        echo "<script>showError(\"$error_message\");</script>";
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon " class="iconn" type="x-icon" href="../image/title1.png">
    <title>jobHunt | we make change </title>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/stylelogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
  <header class="header">
        <a href="#" class="logo">jobHunt</a>
        <nav class="navbar">
            <a href="acceuil.php #home" class="active">Home</a>
            <a href="acceuil.php #about">About</a>
            <a href="acceuil.php #contact">Contact</a>
            <a href="#" class="log">Login</a>
          <a href="acceuil.php #login" class="sign">SignUp</a>
          
        </nav>
    </header>
     <section id="loginn">
            <div class="loginn">
                <h1>Login</h1>
                <form id="formlogin" action=" " method="post">
                    <label for="name">Name*</label>
                    <input type="text" id="name" name="name" placeholder="your name" required>
        
                    <label for="email">Email*</label>
                    <input type="email" id="email" name="email"  placeholder="your email" required>
                    <label for="passwrd">Password*</label>
                    <input type="password"id="passwrd" name="password" placeholder="your password" required>
                   <!-- <button type="submit" class="buttonloginn" name="-valider" onclick="return form_verify()"  >Login</button>-->
                    <input type="submit" name="submit" class="buttonloginn" value="login">

                </form>
            </div>
        
    </section>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="list">
                    <h4>company</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">our services</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">affiliate program</a></li>
                    </ul>
                </div>
                <div class="list">
                    <h4>Candidate</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">login</a></li>
                        <li><a href="#">Job Seeker </a></li>
                        
                    </ul>
                </div>
                
                <div class="list">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i  class="fa-brands fa-twitter"></i>></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <h4>realiser par   </h4>
                        <p> manel garmmachi G6<br> ranim cherif G6 </p>
                    </div>
                </div>
            </div>
        </div>
   </footer>
   <script src="../javascript/login.js"></script>
</body>
</html>