<?php
# Variables MUST BE INTEGERS
if (isset($_GET['menu'])) {
  $menu   = (int)$_GET['menu'];
}
if (isset($_GET['clanakid'])) {
  $clanakid   = (int)$_GET['clanakid'];
}

if (isset($_GET['klijentid'])) {
  $klijentid   = (int)$_GET['klijentid'];
}


if (isset($_GET['action'])) {
  $action   = (int)$_GET['action'];
}

# Variables MUST BE STRINGS A-Z
if (!isset($_POST['_action_'])) {
  $_POST['_action_'] = FALSE;
}

if (!isset($menu)) {
  $menu = 1;
}

?>

<!DOCTYPE html>
<html lang="hr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="News site">
  <meta name="author" content="Valentino Filipovic">

  <title>Homepage</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- css -->
  <link href="style.css" rel="stylesheet">

  <style>
    .naslovCentar {
      text-align: center !important;
      width:100%;
      padding: 1%;
    }

    #clanakPomak {
      margin-left: 10px;
      margin-bottom: 10px;
    }

    .slikaclanak {
      width: 100%;
      height: 500px;
      background-repeat: no-repeat;
      background-size: contain;
      float: left;
      margin-top: 15px;
      margin-bottom: 40px;
      background-color: white;
    }

    #izbrisiButton{
    margin-left: 25px;
    margin-top: 50px;
    }
  </style>

</head>

<body>

  <!-- Navigacija -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Online Novine HR</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?menu=14">HNB</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?menu=12">Klijenti</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?menu=7">Registracija</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?menu=8">Prijava</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?menu=9">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?menu=5">Contact</a>
          </li>
          <?php

          # Stop Hacking attempt
          define('__APP__', TRUE);

          # Database connection
          include("dbconn.php");

          session_start();

          if (isset($_SESSION['user']['valid'])) {
            if ($_SESSION['user']['valid'] == 'true') {

              print '<li class="nav-item">
                  <a class="nav-link" href="odjava.php">Odjava</a>
                  </li>';
            }
          }

          ?>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3" id="popisKategorija">

        <!--<h1 class="my-4">Naslov</h1>-->
        <div class="list-group">
          <a href="index.php?menu=1" class="list-group-item">Naslovna stranica</a>
          <a href="index.php?menu=2" class="list-group-item">Vijesti</a>
          <a href="index.php?menu=3" class="list-group-item">Sci/Tech</a>
          <a href="index.php?menu=4" class="list-group-item">Auto</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">
        <div class="row">


          <?php
          # Homepage
          if (!isset($menu) || $menu == 1) {
            include("naslovna.php");
          }

          # News
          else if ($menu == 2) {
            include("news.php");
          }

          # scitech
          else if ($menu == 3) {
            include("scitech.php");
          }

          # auto
          else if ($menu == 4) {
            include("auto.php");
          }

          # Contact
          else if ($menu == 5) {
            include("contact.php");
          }

          # clanak detalji
          else if ($menu == 6) {
            include("clanak.php");
          }

          # Register
          else if ($menu == 7) {
            include("registracija.php");
          }

          # Signin
          else if ($menu == 8) {
            include("prijava.php");
          }

          # Admin webpage
          else if ($menu == 9) {
            include("admin.php");
          }

          # Provjera Registracije
          else if ($menu == 10) {
            include("provjeraRegistracije.php");
          }

          # Dodaj clanak
          else if ($menu == 11) {
            include("dodajClanak.php");
          }

          # klijenti
          else if ($menu == 12) {
            include("klijenti.php");
          }

          #uredi klijenti
          else if ($menu == 13) {
            include("urediKlijent.php");
          }

          #JSON HNB
          else if ($menu == 14) {
            include("jsonHNB.php");
          }

          ?>



        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white"> &copy; Online Novine HR 2020</p>
    </div>
    <!-- /.container -->
  </footer>


</body>

</html>