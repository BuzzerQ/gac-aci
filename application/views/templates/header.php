<!DOCTYPE html>
<html lang="en">
<?php date_default_timezone_set('asia/jakarta'); ?>
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url(); ?>assets/img/logo-gac.jpg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Gemesin Asia Charts</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

     <!-- Bootstrap core CSS     -->
    <link href="<?= base_url(); ?>assets/css/das/bootstrap.min.css" rel="stylesheet" />

    <!--  Paper Dashboard core CSS    -->
    <link href="<?= base_url(); ?>assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?= base_url(); ?>assets/css/demo.css" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?= base_url(); ?>assets/css/themify-icons.css" rel="stylesheet">

    <!-- CSS Files -->
  <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/css/paper-kit.css?v=2.3.0" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/font-awesome-5/css/fontawesome-all.min.css'" rel="stylesheet" />

    <!-- Ajax Jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
</head>

  <!-- Ajax Jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body class="sections-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top nav-down">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" data-scroll="true" data-id="#headers" href="<?= base_url(); ?>#headers">
          <img src="<?= base_url(); ?>assets/img/logo-gac.jpg" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" data-nav-image="<?= base_url(); ?>assets/img/blurred-image-1.jpg" data-color="orange">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" data-scroll="true" data-id="#overviews" href="<?= base_url(); ?>#overviews">
              Overview
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-scroll="true" data-id="#fasilitas" href="<?= base_url(); ?>#fasilitas">
              Fasilitas 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-scroll="true" data-id="#programs" href="<?= base_url(); ?>#programs">
              Program 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-scroll="true" data-id="#traiders" href="<?= base_url(); ?>#traiders">
              Traider 
            </a>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: #fff;color: grey;border: 0px solid;margin-top: 18px">
                Investor
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Pendaftaran</a>
                <a class="dropdown-item" href="#">Konfirmasi Pembayaran</a>
              </div>
            </div>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>pretest">
              Log-In
            </a>
          </li> -->
          <li class="nav-item">
            <a class="btn btn-round btn-primary" data-scroll="true" data-id="#contact-us" href="<?= base_url(); ?>#contactus">
              <i class="nc-icon nc-send"></i> DAFTAR
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->