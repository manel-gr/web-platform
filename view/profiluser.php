<?php
@include '../config/conf.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon " type="x-icon" href="../image/title1.png">
    <title>jobHunt | we make change</title>
    
    <link rel="stylesheet" href="../css/styleprofileuser.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>

<body>
   
    <section>
        <nav>
            <div class="navbar-top">
                <div class="title">
                    <h1>Your account</h1>
                </div>
                <div class="navbar1">
                    <a href="candidat.php">Home</a>
                    <a href="">Opportunities</a>

                    <div class="logout">
                    <a href="login.php"><i class="fa fa-sign-out-alt fa-2x" ></i></a> 
                    </div>
                   

                </div>
            </div>




        </nav>
    </section>

    <section>
        <nav>

        <div class="sidenav">
            <div class="profile">
                <img src="../image/img.gif" alt="" width="100" height="100">

                <div class="name">
                    Username
                </div>
                <div class="job">
                    Job Position
                </div>
            </div>


            <div class="sidenav-url">
                <div class="url">

                    <a href="#account-general">General</a>
                    <hr align="center">
                    <a href="#account-info">Info</a>
                    <hr align="center">
                </div>
                <div class="url">
                    <a href="#account-social-links">Social links</a>

                    <hr class="kh" align="center">
                </div>
            </div>
        </div>
        </nav>
    </section>

    <section id="account-general" >
        <div class="main">
            <h2>GENERAL</h2>
            <div class="card">
                <div class="card-body">
                    <i class="fa fa-pen fa-xs edit"></i>
                    <table>
                        <tbody>
                            <tr>
                                <td> Name</td>
                                <td>:</td>
                                <td class="placeholderstyle"> What's your Name?</td>

                            </tr>
                            <tr>
                                <td>E-mail</td>
                                <td>:</td>
                                <td class="placeholderstyle">What's your E-mail ?</td>
                            </tr>
                            <tr>
                                <td>Phone number</td>
                                <td>:</td>
                                <td class="placeholderstyle">What's your Phone number? </td>
                            </tr>
                            <tr>
                                <td>Age</td>
                                <td>:</td>
                                <td class="placeholderstyle">What's your Age? </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>


    </section>



    <section id="account-info" >
        <div class="main">
            <h2>INFO</h2>
            <div class="card">
                <div class="card-body">
                    <i class="fa fa-pen fa-xs edit"></i>
                    <table>
                        <tbody>
                            <tr>
                                <td> <label class="">
                                        Upload CV</label></td>
                                <td>:</td>
                                <td> <input type="file"></td>
                            </tr>
                            <tr>
                                <td>Job position</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Level of education</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Motivation letter</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Skills</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Experiences</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


    </section>





    <section id="account-social-links">

        <div class="main">
            <h2>SOCIAL LINKS</h2>
            <div class="card">
                <div class="card-body">
                    <i class="fa fa-pen fa-xs edit"></i>
                    <table>
                        <tbody>
                            <tr>
                                <td>LinkedIn</td>
                                <td>:</td>
                                <td class="placeholderstyle">drop your LinkedIn link</td>
                            </tr>
                            <tr>
                                <td>Facebook</td>
                                <td>:</td>
                                <td class="placeholderstyle">drop your Facebook link</td>
                            </tr>
                            <tr>
                                <td>GetHub</td>
                                <td>:</td>
                                <td class="placeholderstyle">drop your GetHub link</td>
                            </tr>
                            <tr>
                                <td>Other</td>
                                <td>:</td>
                                <td class="placeholderstyle">drop your Other links</td>
                            </tr>
                            <tr>

                        </tbody>
                    </table>
                </div>
            </div>



        </div>
    </section>

</body>

</html>