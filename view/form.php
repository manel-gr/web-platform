<?php
@include '../config/conf.php';
@include '../controller/erreur.php';
if(isset($_POST['submit'])) {
    // Récupérer les données soumises par le formulaire
    $name = $_POST["name"];
    $family_name = $_POST["family_name"];
    $email = $_POST["email"];
    $password =  $_POST["password"];
    $num = $_POST["num"];
    $date_de_naissance = $_POST["date_de_naissance"];
    $location_candidat = $_POST["location_candidat"];

    // Vérification des champs et insertion dans la base de données
    $error_message = ""; // Initialiser le message d'erreur

    if (empty($name)||empty($family_name) || empty($email) || empty($password) || empty($num) || empty($date_de_naissance) || empty($location_candidat)) {
        $error_message = "Veuillez remplir tous les champs.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = "L'adresse email est invalide.";
    } elseif (strlen($password) < 8) {
        $error_message = "Le mot de passe doit contenir au moins 8 caractères.";
    } elseif (!preg_match("/^[0-9]*$/", $num)) {
        $error_message = "Le numéro de téléphone est invalide.";
    } else {
        // Récupérer les informations de connexion à la base de données depuis la classe Conf
        $hostname = Conf::getHostname();
        $database = Conf::getDatabase();
        $login = Conf::getLogin();
        $password_conf = Conf::getPassword();

        // Établir une connexion à la base de données
        $conn = mysqli_connect($hostname, $login, $password_conf, $database);

        // Vérifier la connexion
        if (!$conn) {
            $error_message = "Erreur lors de la connexion à la base de données : " . mysqli_connect_error();
        } else {
            // Vérifier si l'email est déjà utilisé
            $email_check_query = "SELECT * FROM candidat WHERE email='$email' LIMIT 1";
            $result_email_check = mysqli_query($conn, $email_check_query);

            if (!$result_email_check) {
                $error_message = "Erreur lors de la vérification de l'email.";
            } else {
                $candidate = mysqli_fetch_assoc($result_email_check);
                if ($candidate) { // Si un candidat avec cet email existe déjà
                    $error_message = "Un compte avec cet email existe déjà.";
                } else {
                    // Insertion dans la table candidat
                    $insert_query = "INSERT INTO candidat (name,family_name, email, password, num, date_de_naissance, location_candidat)
                                     VALUES ('$name','$family_name', '$email', '$password', '$num', '$date_de_naissance', '$location_candidat')";

                    $insert_result = mysqli_query($conn, $insert_query);

                    if ($insert_result) {
                        $error_message = "Inscription réussie avec succès !";
                    } else {
                        $error_message = "Erreur lors de l'inscription.";
                    }
                }
            }

            // Fermer la connexion à la base de données
            mysqli_close($conn);
        }
    }

    // Afficher le message d'erreur
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
    <link rel="shortcut icon " type="x-icon" href="../image/title1.png">
    <title>jobHunt | we make change</title>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/styleform.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     

</head>
<body>
    <header class="header">
        <a href="#" class="logo">jobHunt</a>
        <nav class="navbar">
            <a href="acceuil.php #home" class="active">Home</a>
            <a href="acceuil.php  #about">About</a>
            <a href="acceuil.php #contact">Contact</a>
            <a href="#" class="log">Login</a>
          <a href="acceuil.php #login" class="sign">SignUp</a>
        </nav>
    </header>
    <section id="createac1">
        <div class="createacc1">
            <h1>Create an account</h1>
            <form id="form1" action=" " method="post">
                <label for="name">Name*</label>
                <input type="text" id="name" name="name" placeholder="enter your name" required>
                <di class="messageErreur"></di>
                <label for="name">family name*</label>
                <input type="text" id="name" name="family_name" placeholder="enter your familyname" required>
                <di class="messageErreur"></di>


                <label for="email">Email*</label>
                <input type="email" id="email" name="email" placeholder="enter your email" required>
                <di class="messageErreur"></di>
                

                <label for="passwrd">password:</label>
                <input type="password"id="passwrd" name="password" placeholder="enter your password" required>

                

                <label>Phone number* </label>
                <input type="tel" id="nbr" name="num" placeholder="enter your number" >

                 <label>date of birth*</label>
                 <input type="date" id="date de naissance" name="date_de_naissance" placeholder="enter your date of birth" >

                 <label id="location">location*</label>
                 <!--<select name="pays" name="location_candidat">
                    <option>tunisia</option>
                    <option>USA</option>
                    <option>Canada</option>
                    <option>France</option>
                    <option>Algeria</option>
                    <option>Morocco</option>

                 </select>-->
                 <input type="texte" id="location" name="location_candidat" placeholder="enter your location" required>

                <div>
                <!-- <button type="submit" class="buttonform1" name="submit"  ><a href="candidat.php" onclick="return form_verify()">Create Account</a></button>-->
                 <input type="submit" class="buttonform1"  name="submit" value="register now">
              <?php ?>
            </div>


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
   <script src="../javascript/form.js"></script>
</body>
</html>