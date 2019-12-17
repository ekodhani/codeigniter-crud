<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/animate/animate.css');?>">
    <!--===============================================================================================-->  
      <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/css-hamburgers/hamburgers.min.css');?>">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/animsition/css/animsition.min.css');?>">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/select2/select2.min.css');?>">
    <!--===============================================================================================-->  
      <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/daterangepicker/daterangepicker.css');?>">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/util.css');?>">
      <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/main.css');?>">
    <!--===============================================================================================-->

    <title><?= $title; ?></title>
  </head>
  <body>
    
    <div class="limiter">
    <div class="container-login100" style="background-image: url('assets/image/bg01.jpg');">
      <div class="wrap-login100">
        <form class="login100-form validate-form" action="<?= base_url('Login/masuk'); ?>" method="post">
          <span class="login100-form-title p-b-34 p-t-27">
            Log in
          </span>
          <?= $this->session->flashdata('message'); ?>

          <div class="wrap-input100 validate-input" data-validate = "Enter username">
            <input class="input100" type="text" name="username" placeholder="Username">
          </div>

          <div class="wrap-input100 validate-input" data-validate="Enter password">
            <input class="input100" type="password" name="password" placeholder="Password">
          </div>

          <div class="container-login100-form-btn">
            <button class="login100-form-btn">
              Login
            </button>
          </div>

        </form>
      </div>
    </div>
  </div>
  

  <div id="dropDownSelect1"></div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>