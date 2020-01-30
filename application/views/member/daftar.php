<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url(); ?>assets/img//apple-icon.png">
  <link rel="icon" type="image/png" href="<?= base_url(); ?>assets/img/logo-gac.jpg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    GAC-Gemesin Asia Charts
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/css/paper-kit.css?v=2.3.0" rel="stylesheet" />
  <!-- Ajax Jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
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
  <div class="section section-contactus cd-section" id="contact-us">
  <?php date_default_timezone_set('asia/jakarta'); ?>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
     <!--     *********    CONTACT US 1     *********      -->
     <div class="contactus-1 section-image" style="background-image: url('<?= base_url(); ?>assets/img/sections/Gedung-Logo-MNC.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-md-12 ml-auto mr-auto">
            <div class="card card-contact no-transition">
              <h3 class="card-title text-center">Daftar</h3>
              <div class="row">
                <div class="col-md-4 ml-auto">
                  <div class="card-body">
                    <div class="info info-horizontal">
                      <div class="icon icon-info">
                        <i class="nc-icon nc-pin-3" aria-hidden="true"></i>
                      </div>
                      <div class="description">
                        <h4 class="info-title">PT Fida Sinergi Asia</h4>
                        <p> Jl. Jend. Sudirman No.Kav 25,
                          <br> Jakarta Selatan,
                          <br> Indonesia 16912
                          <br> Telp. +62822-1000-8744 
                        </p>
                      </div>
                    </div>
                    <div class="info info-horizontal">
                      <div class="icon icon-danger">
                        <i class="nc-icon nc-badge" aria-hidden="true"></i>
                      </div>
                      <div class="description">
                        <h4 class="info-title">Pertanyaan?</h4>
                        <h4 class="info-title">Hubungi Kami</h4>
                        <p> fida
                          <br> <a href="https://wa.me/6282282107470?text=Hai%20mawan,%20mau%20tanya-tanya%20GAC-Gemesin Asia Charts%20dong?%20" target="_blank">+62 822-8210-7470</a>
                          <br> Sen - Jum, 7:30-16:30
                        </p>
                          </br>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-mb-2 mr-auto">
                  <form role="form" id="contact-form" method="post"  action="<?= base_url('member/addInvestor'); ?>">
                    <div class="card-body">
                    <div class="form-group label-floating" hidden>
                        <label class="control-label">link_coach*</label>
                        <input type="text" id="link_coach" name="link_coach" class="form-control" value="<?= $investor['link_coach']; ?>"/>
                      </div>
                      <div class="form-group label-floating" hidden>
                        <label class="control-label">ID*</label>
                        <input type="text" id="id" name="id" class="form-control" value="<?= $investor['id']; ?>"/>
                      </div>
                      <div class="form-group label-floating" hidden>
                        <label class="control-label">ID Coach*</label>
                        <input type="text" id="id_coach" name="id_coach" class="form-control" value="<?= $investor['id_coach']; ?>"/>
                      </div>
                      <div class="form-group label-floating" hidden>
                        <label class="control-label">ID Grade1*</label>
                        <input type="text" id="id_grade1" name="id_grade1" class="form-control" value="<?= $investor['id_grade1']; ?>"/>
                      </div>
                      <div class="form-group label-floating" hidden>
                        <label class="control-label">ID Grade2*</label>
                        <input type="text" id="id_grade2" name="id_grade2" class="form-control" value="<?= $investor['id_grade2']; ?>"/>
                      </div>
                      <div class="form-group label-floating" hidden>
                        <label class="control-label">ID Grade3*</label>
                        <input type="text" id="id_grade3" name="id_grade3" class="form-control" value="<?= $investor['id_grade3']; ?>"/>
                      </div>
                      <div class="form-group label-floating" hidden>
                        <label class="control-label">ID Grade4*</label>
                        <input type="text" id="id_grade4" name="id_grade4" class="form-control" value="<?= $investor['id_grade4']; ?>"/>
                      </div>
                      <div class="form-group label-floating" hidden>
                        <label class="control-label">ID Grade5*</label>
                        <input type="text" id="id_grade5" name="id_grade5" class="form-control" value="<?= $investor['id_grade5']; ?>"/>
                      </div>
                    <!-- autocomplete="off" -->
                      <div class="form-group label-floating">
                        <label class="control-label">Nik*</label>
                        <input type="text" id="nik" name="nik" class="form-control" placeholder="Nik KTP" required="true"/>
                      </div>
                      <div class="form-group label-floating">
                        <label class="control-label">Nama*</label>
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Lengkap" required="true" />
                      </div>
                      <!-- <div class="form-group label-floating">
                        <label class="control-label">Gender*</label>
                        <div class="form-inline form-group">
                          <div class="form-check-radio">
                            <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="gender" id="gender1" value="Pria" checked required="true"> Pria
                              <span class="form-check-sign mr-3"></span>
                            </label>
                          </div>
                          <div class="form-check-radio">
                            <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="gender" id="gender2" value="Wanita" required="true"> Wanita
                              <span class="form-check-sign"></span>
                            </label>
                          </div>
                        </div>
                      </div> -->
                      <div class="form-group label-floating">
                        <label class="control-label">Email address*</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required="true" />
                        <p>
                        <span id="email_result"></span>
                      </div>
                      <div class="form-group label-floating">
                        <label class="control-label">No. HP*</label>
                        <div class="input-group">
                          <div class="input-group-append">
                            <span class="input-group-text">+62</span>
                            <span></span>
                          </div>
                          <input type="text" id="phone" name="phone" class="form-control" placeholder="Nomor HP" required="true" />
                          </div>
                          <p>
                      <label class="text-info"><span><i class="fa fa-check-circle-o" aria-hidden="true" data-toggle="popover" data-placement="top" title="Notifikasi via WhatsApp" data-content="Kami menggunakan format '+62' sebagai pengganti '0' (NOL) diawal, kemudian silahkan diikuti nomor selanjutnya tanpa spasi/pemisah, agar kami bisa mengirimkan notifikasi melalui whatsapp kepada anda."></i> Format 62813XXXXXXX </span></label>
                      </div>
                      <div class="form-group label-floating">
                        <label class="control-label"><small>* Wajib diisi</label>
                      </div>
                      <div class="row">
                        <div class="col-md-8">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" id="check" value="" required="true">Saya sudah membaca dengan seksama dan mengerti informasi-informasi di atas terutama untuk silabus dari tiap kelas yang tersedia dan saya sudah memberikan informasi yang benar.
                              <span class="form-check-sign"></span>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <button type="submit" class="btn btn-lg btn-primary pull-right" id="submit">DAFTAR</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--     *********    END CONTACT US 1      *********      -->
  </div>
</body>

</html>