<?php 
session_start();

require_once 'setconfig.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Furkan KUBAT Admin</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  <link rel="stylesheet" href="css/ozel.css">

  <!-- Animasyon -->
  <link rel="stylesheet" type="text/css" href="css/animasyon.css">

  <!-- CKEDITOR -->
  <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>


  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
      ======================================================= -->
    </head>

    <body>
      <!-- container section start -->
      <section id="container" class="">
        <!--header start-->

        <header class="header dark-bg">
          <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
          </div>

          <!--logo start-->
          <a href="index.php" class="logo">Furkan <span class="lite">KUBAT</span></a>
          <!--logo end-->

          <div class="top-nav notification-row">
            <!-- notificatoin dropdown start-->
            <ul class="nav pull-right top-menu">




              <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                  <span class="profile-ava">
                    <img width="28" height="35" alt="" src="dimg/admins/<?php echo $_SESSION['admins']['admins_file'] ?>">
                  </span>
                  <span class="username"><?php echo $_SESSION['admins']['admins_namesurname']; ?></span>
                  <b class="caret"></b>
                </a>

                <ul class="dropdown-menu extended logout">

                  <div class="log-arrow-up"></div>

                  <li class="eborder-top">
                    <a href="#"><i class="icon_profile"></i> <?php echo $_SESSION['admins']['admins_namesurname']; ?></a>
                  </li>

                  <li>
                    <a href="logout.php"><i class="icon_key_alt"></i>Güvenli Çıkış</a>
                  </li>




                </ul>
              </li>
              <!-- user login dropdown end -->
            </ul>
            <!-- notificatoin dropdown end-->
          </div>
        </header>
        <!--header end-->
