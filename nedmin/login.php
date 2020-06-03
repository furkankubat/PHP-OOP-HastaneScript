<?php
session_start();
if (isset($_SESSION['admins'])) 
{
  header("Location:index.php");
  exit;
}

require_once 'netting/class.crud.php';
$db=new crud();

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

  <title>Admin Login</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  <style type="text/css">
    .a {
      background: url(dimg/images/bg.jpg) no-repeat center center fixed;
      background-size: cover;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
    }

    body {
      overflow: hidden;
    }

  </style>


</head>

<body class="login-img3-body a">

  <div class="container">

    <?php 

    // echo "<pre>";
    // print_r(json_decode(@$_COOKIE['adminsLogin']));
    // echo "</pre>";

    if (isset($_COOKIE['adminsLogin'])) {
      $login = json_decode($_COOKIE['adminsLogin']);
    }

    if (isset($_POST['admins_login'])) {

      $sonuc = $db->adminsLogin(htmlspecialchars($_POST['admins_username']),htmlspecialchars($_POST['admins_pass']),$_POST['remember_me']);

      if ($sonuc['status']) {

        header("Location:index.php");
        exit;

      }  else { ?>

        <div class="alert alert-danger text-center">Bilgilerinizi Kontrol Ediniz...</div>

      <?php }

    }


    ?>

    <form class="login-form" action="" method="post">
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>

        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" class="form-control" 
          <?php 
          if (isset($_COOKIE['adminsLogin'])) 
          {
            echo 'value="'.$login->admins_username.'"';
          } else {
            echo 'placeholder="Kullanıcı Adı"';
          }
          ?>
          name="admins_username">
        </div>

        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control" 
          <?php 
          if (isset($_COOKIE['adminsLogin'])) 
          {
            echo 'value="'.$login->admins_pass.'"';
          } else {
            echo 'placeholder="Şifre"';
          }
          ?>
          name="admins_pass">
        </div>

        <label class="checkbox">
          <input type="checkbox"
          <?php 
          if (isset($_COOKIE['adminsLogin'])) 
          {
            echo 'checked';
          }
          ?>
          name="remember_me"> Beni Hatırla

        </label>

        <button class="btn btn-primary btn-lg btn-block" name="admins_login" type="submit">Giriş Yap</button>


        <!-- Kaydol Kısmı <button class="btn btn-info btn-lg btn-block" type="submit">Signup</button> -->       
      </div>
    </form>
    <div class="text-right">

    </div>
  </div>


</body>

</html>
