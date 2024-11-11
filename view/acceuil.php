
    <?php
@include '../config/config.php';
if(isset($_POST['submit']) )
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon " type="x-icon" href="../image/title1.png">
    <title>jobHunt | we make change</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/navbar.css">


    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header class="header">
        <a href="#" class="logo">jobHunt</a>
        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
            
            <a href="login.php" class="log">Login</a>
            <a href="#login" class="sign">SignUp</a>
        </nav>
    </header>
    <section id="home">
        <div class="aceuil">
            <div class="text">
                <h1>Unleash your potential, find freelance success effortlessly.</h1>
                <p><br>Are you a company on the lookout for your next star employees? Perhaps you're a <br><br> recent
                    graduate ready to kickstart your career journey? Are you someone <br><br> navigating a career change
                    or seeking fresh opportunities?. <br><br>
                    Job Hunt is the starting point for you. Dive into a world of possibilities, where<br><br> companies
                    meet talent, and job seekers find their perfect match.<br><br></p>
                <button type="button" class="button"><a href="#login">learn more</a></button>
            </div>
            <div class="image">

            </div>
        </div>
    </section>
    <section id="about">
        <div class="hero">
            <div class="aboutus">
                <h2>Welcome to JobHunt, where we make change !</h2>
                <hr align="center">
                <br>
                <p>Who are we?<br>
                    At Job Hunt, we go beyond just listing jobs. We're matchmakers, connecting companies with talented
                    individuals to create meaningful partnerships. Our goal is to help people find satisfying careers
                    and businesses build their dream teams. Join us as we simplify the job search process and make
                    positive changes happen!</p>
                <button class="btn" id="loginButton"><a href="#login">get started</a></button>
            </div>
            <div class="photo">
                <img src="../image/img3.jpg">
            </div>
            <div>
            </div>
    </section>
    <section id="contact">
        <div class="contactt">
            <h1>Contact Us</h1>
            <form id="form">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="enter your name                " required>
                <span id="username"></span>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="enter votre address" required>
                <span id="text"></span>
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" placeholder="enter youe message" required></textarea>
                <span id="msg"></span>
                <button type="button" class="buttonform">Submit</button>
            </form>
        </div>
    </section>
    </section>
   <section id="login">
        <div class="login">
            <div class="areyou">
                <h2>Are you looking to?</h2>
                <button type="button" class="buttonseek"> <a href="form.php">Find jobs</a></button>
                <button type="button" class="buttoncomp"> <a href="login.php">Hire talent</a></button>
                <div class="other">


                    <p>Already have an account?</p>
                    <button type="button" class="buttonlogin"><a href="login.php">Login</a> </button>
                </div>
            </div>

        </div>
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
                        <a href="#"><i class="fa-brands fa-twitter"></i>></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <h4>realiser par </h4>
                        <p> Manel Garmmachi G6<br><br> Ranim Cherif G6 </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="../javascript/acceuil.js"></script>
</body>

</html>