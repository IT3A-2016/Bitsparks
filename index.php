<?php
session_start();
include_once('php/dbconnect.php');
?>
<!DOCTYPE html>
<html lang="en">
<!--Head tag (Start)-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="FAITH Examination Scheduling System">
  <meta name="author" content="Bitsparks">
  <title>FAITH Examination Scheduling System</title>

  <!--CSS > Bootstrap Core tags-->
  <link rel = "stylesheet" type = "text/css" href = "theme/css/bootstrap.min.css">

  <!--CSS > Theme Core tag-->
  <link rel = "stylesheet" type = "text/css" href="theme/css/theme/theme.css">
  <link href="theme/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
</head>
<!--Body tag (Start)-->
<body id="page-top" class="index">
  <!-- Navigation -->
  <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="#page-top">
          <img style="max-width:150px; margin-top: -15px;" src="admin/images/faithlogo.png">
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="hidden">
            <a href="#page-top"></a>
          </li>
          <li class="page-scroll">
            <a href="#about">About</a>
          </li>
          <li class="page-scroll">
            <a href="login.php" class="portfolio-link">
              USER: Log In
            </a>
          </li>
          <li class="page-scroll">
            <a href="admin/index.php" class="portfolio-link">
              ADMIN: Log In
            </a>
          </li>
          <li class="page-scroll">
            <a href="register.php" class="portfolio-link">
              SIGN UP
            </a>
          </li>
          <li class="page-scroll">
            <a href="#faith">About FAITH</a>
          </li>
          <li class="page-scroll">
            <a href="#contact">CONTACT US</a>
          </li>
          <!--List: page-scroll Ending-->
        </ul><!--Unordered List Ending-->
      </div><!-- Navbar-collapse Ending -->
    </div><!-- Container-fluid Ending-->
  </nav><!-- Navigation Ending -->
  <!-- Header -->

  <header style = "background-image: url('admin/images/background.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <img class="img-responsive" src="admin/images/faithlogo.png" alt="Image not available yet">
          <div class="intro-text">
            <span class="name">FAITH: Examination Scheduling System</span>
            <span class="skills">Bitsparks - Software System Development</span>
          </div><!--Div-intro-text Ending-->
        </div><!--Div-col-lg-12 Ending-->
      </div><!--Div-row Ending-->
    </div><!--Div-container Ending-->
  </header><!--Header Ending-->

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2>ABOUT</h2>
          <hr class="code-primary">
          <div class = "row">
            <div class = "col-lg-12 text center">
              <p><b>Examination scheduling</b> or planning is a very crucial activity for any education and training institutes to conduct end-of-term examination which helps to optimize use of campuses rooms, time slot and total exam duration and also the organized schedule form. Currently most of institutes including FAITH are doing their exam schedule manually which is COSTLY and ERROR-PRONE because of manual scheduling. Exam course overlapping, which means an irregular student has more than one exam schedule in a certain time period, is a frequent incident for a term exam routine which is very challenging to avoid in manual scheduling. Manual exam scheduling requires long time and high amount of effort to produce. For helping and reduce the risk of error prones, an automated examination scheduling system is an alternative way to lessen the error prones in every examination schedule in FAITH.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section  class="success" id="faith">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2>ABOUT FAITH</h2>
            <hr class="code-light">
            <div class = "row">
              <div class = "col-lg-12 text center">
                <p>First Asia Institute of Technology and Humanities is an institution of higher learning and research located in the City of Tanauan in Batangas. FAITH is envisioned to be a premier educational organization in the high-growth region south of Metro Manila. It aims to contribute to the humane and holistic development of the Filipino nation and the individual by training and producing graduates who are technologically skilled, well-rounded and competent, as well as grounded on Christian humanistic values.

FAITH is committed to the pursuit of a culture of academic excellence and social and environmental awareness in the community it serves and to actively undertake research in science, technology, and the humanities. The school offers K-to12 and college level education.</p>
              </div>
              <div class="col-lg-8 col-lg-offset-2 text-center">
                <a href="http://www.firstasia.edu.ph/About_faith.php" class="btn btn-lg btn-outline">
                  <i class="fa fa-book"></i> Go to FAITH Website
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="contact">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2>Contact US</h2>
              <hr class="code-primary">
            </div>
          </div>
          <center>
          <div class="row">
            <div class="col-lg-6">
              <h3>Email us on gmail: </h3>
              <h5>bitsparks2k17@gmail.com</h5>
              <h5>For feedbacks and questions</h5>
            </div>
            <div class="col-lg-6">
              <h3>Contact us on github: </h3>
              <h5>Account: Pash0107</h5>
              <h5>Developer: FAITH Examination Scheduling System</h5>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <h3>Find us on facebook: </h3>
              <h5>Account: Bitsparks 2k17</h5>
              <h5>For feedbacks and questions</h5>
            </div>
            <div class="col-lg-6">
              <h3>Follow us on Instagram: </h3>
              <h5>Account: Bitsparks</h5>
              <h5>Course: Information Technology: System Development</h5>
            </div>
        </center>
        </div>
      </section>

    <!-- Footer -->
    <footer class="text-center">
      <div class="footer-above">
        <div class="container">
          <div class="row">
            <div class="footer-col col-md-4">
              <h3>Location</h3>
              <p>2 President Laurel Highway
                <br>Tanauan City, Batangas</p>
              </div>
              <div class="footer-col col-md-4">
                <h3>Like or Follow us</h3>
                <ul class="list-inline">
                  <li>
                    <a href="https://www.facebook.com" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="https://www.github.com" class="btn-social btn-outline"><i class="fa fa-fw fa-github"></i></a>
                  </li>
                  <li>
                    <a href="https://www.twitter.com" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="https://www.google.com" class="btn-social btn-outline"><i class="fa fa-fw fa-google"></i></a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com" class="btn-social btn-outline"><i class="fa fa-fw fa-instagram"></i></a>
                  </li>
                </ul>
              </div>
              <div class="footer-col col-md-4">
                <h3>About FAITH: Examination Scheduling System</h3>
                <p>An Automated Examination Scheduler</p>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-below">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                Copyright &copy; Bitsparks: FAITH Examination Scheduling System 2016-2017
              </div>
            </div>
          </div>
        </div>
      </footer>


      <!-- Additional Settings -->
      <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
          <i class="fa fa-chevron-up"></i>
        </a>
      </div>
      <!--script tags-->
      <script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script type = "text/javascript" src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script type = "text/javascript" src = "theme/js/index.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
      <script type = "text/javascript" src = "theme/js/theme.js"></script>

    </body><!--Body Ending-->
    </html><!-- HTML Ending -->
