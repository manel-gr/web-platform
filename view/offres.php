<?php
require_once("../config/conf.php");

$conn = new mysqli(Conf::getHostname(), Conf::getLogin(), Conf::getPassword(), Conf::getDatabase());

if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

$sql = "SELECT * FROM offres_emploi";

$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon " type="x-icon" href="../image/title1.png">
    <title>jobHunt | we make change</title>
    <link rel="stylesheet" href="../css/navbar.css">

    <link rel="stylesheet" href="../css/stylecandidat.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header class="header">
        <a href="#" class="logo">jobHunt</a>
        <nav class="navbar">
            <a href="acceuil.php" class="active">Home</a>
            <a href=" acceuil.php #about">About</a>
            <a href="acceuil.php #contact">Contact</a>
            <a href="offres.php ">all offres d'emplois</a>

            <a href=" profiluser.php"><i id="user" class="fa-regular fa-user"></i> </a>
        </nav>
    </header>

    <!-------------------------------------------------->

    <div class="card-list">
        <?php
        if ($result->num_rows > 0) {
            // Afficher chaque offre d'emploi
            while ($row = $result->fetch_assoc()) {
                $imagePath = '../image/developer.jpg'; 
        ?>
                <a href="#" class="card-item">
                    <img src="<?php echo $imagePath; ?>" alt="Card Image">
                    <span class="<?php echo strtolower($row['company']); ?>"><?php echo $row['company']; ?></span>
                    <span class="<?php echo strtolower($row['company']); ?>"><?php echo $row['title']; ?></span>
                    <h3><?php echo $row['description']; ?><br><small><?php echo $row['experience']; ?> experience</small></h3>
                    <div class="arrow">
                        <i class="fas fa-arrow-right card-icon"></i>
                    </div>
                </a>
        <?php
            }
        } else {
            echo "Aucune offre d'emploi trouvée.";
        }
        ?>
    </div>

    <!----------------------------------------------->

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
                        <a href="#"><i class="fa-brands fa-twitter"></i>></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <h4>realiser par </h4>
                        <p> manel garmmachi G6<br> ranim cherif G6 </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>