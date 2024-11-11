<?php
@include '../config/conf.php';
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon " type="x-icon" href="../image/title1.png">
<title>jobHunt | we make change</title>
<link rel="stylesheet" href="../css/navbar.css">

<link rel="stylesheet" href="../css/stylecompany.css">
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
            <a href="formcompany.php ">offre d'emplois</a>

            <a href=" #"><i id="user" class="fa-regular fa-user"></i> </a>
        </nav>
    </header>

    <section>
        <div id="section1">
            <h1>Looking for?</h1></br>

            <form id="search" method="post">
                <div class="look">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="search" name="search" placeholder="Find your next employee">

                </div>
        </div>
        </form>
       
    </section>
    <!---------------------------------------->
    <section id="blockcard">
        <div class="block">
            <div class="row modif">
                <div class="para ">
                    <h2 class="fw-bolder">2954</h2>
                    <p class="card-text">Job offers</p>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-box-archive"></i>
                </div>

            </div>
            <div class="row">
                <div class="para">
                    <h2 class="fw-bolder">800</h2>
                    <p class="card-text">Companies</p>
                </div>
                <div class="icon">
                    <i class="fa-sharp fa-solid fa-briefcase"></i>
                </div>
            </div>
            <div class="row modify">
                <div class="para ">
                    <h2 class="fw-bolder">1700</h2>
                    <p class="card-text">Talents</p>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-user-plus"></i>
                </div>
            </div>
        </div>
    </section>
<!--------------------------------------->

<div class="wrapper">
      <i id="left" class="fa-solid fa-angle-left"></i>
      <ul class="carousel">
        <li class="card">
          <div class="img"><img src="../image/img4.jpg" alt="img" draggable="false"></div>
          <h2>Ahmed Wefi</h2>
          <span>Sales Manager</span>
        </li>
        <li class="card">
          <div class="img"><img src="../image/img6.jpg" alt="img" draggable="false"></div>
          <h2>Mariem Rezgui</h2>
          <span>Web Developer</span>
        </li>
        <li class="card">
          <div class="img"><img src="../image/img5.jpg" alt="img" draggable="false"></div>
          <h2>Malek jandoubi </h2>
          <span>Online Teacher</span>
        </li>
        <li class="card">
          <div class="img"><img src="../image/img7.jpg" alt="img" draggable="false"></div>
          <h2>Makrem Beji</h2>
          <span>Freelancer</span>
        </li>
        <li class="card">
          <div class="img"><img src="../image/img8.jpg" alt="img" draggable="false"></div>
          <h2>Khaled Kouki</h2>
          <span>Bank Manager</span>
        </li>
        <li class="card">
          <div class="img"><img src="../image/img9.jpg" alt="img" draggable="false"></div>
          <h2>Maha Ben Ali</h2>
          <span>App Designer</span>
        </li>
      </ul>
      <i id="right" class="fa-solid fa-angle-right"></i>
    </div>


 

<!-------------------------------------------------------------------->
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
    <script src="../javascript/jsprofilcompany.js"></script>
</body>