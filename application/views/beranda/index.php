<!--

 =========================================================
  Paper Kit 2 PRO - v2.3.0
 =========================================================

  Product Page: https://www.creative-tim.com/product/paper-kit-2-pro
  Copyright 2019 Creative Tim (https://www.creative-tim.com)

  Coded by Creative Tim

 =========================================================

  The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->

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
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
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
              Trider 
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
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('auth/login'); ?>">
              Log-In
            </a>
          </li>
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
  <div class="section-space"></div>
  <div class="section section-header cd-section" id="headers">
    <!--     *********     HEADER 3      *********      -->
    <div class="header-1">
    <div class="space-top"></div>
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute">
      <div class="space-top"></div>
        <div class="container">
          <a class="navbar-brand mb-0 mt-4" href="#">GAC  Training Programs</a>
        </div>
      </nav>
      <div class="page-carousel">
        <div class="filter"></div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <div class="page-header" style="background-image: url('<?= base_url(); ?>assets/img/nusantara.png')">
              
                <!-- <div class="filter"></div> -->
                <div class="content-center">
                  <div class="container">
                    <div class="row">
                    <div class="col-md-11 ml-auto mr-auto text-center">
                        <!-- <div class="card-image">
                            <img class="img" src="<?= base_url(); ?>assets/img/logo-banner.png" />
                        </div> -->
                        </br>
                        <div style="margin-top: 350px">
                          <h2><b>GEMESIN ASIA CHARTS</b></h2>
                          <h5><b>Belajar Pasar Modal dari yang Ahli Dibidangnya</b></h5>
                        </div>
                        <!-- <h5><i>Projek Investasi dan Inovasi untuk Pengembangan Ekonomi Inklusif yang Berkelanjutan</i></h5>
                        <br />
                        <h5>Program pengembangan keahlian tenaga kerja di sektor industri makanan dan minuman untuk para Leader, Expert atau Spesialis dan Produksi yang berfokus pada kompetensi menuju industri 4.0</h5>
                        <br /> -->
                        <div class="buttons">
                          <a href="<?= base_url(); ?>#overviews" class="btn btn-danger btn-round btn-lg" data-scroll="true" data-id="#overviews">
                            Baca Selengkapnya
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="page-header" style="background-image: url('<?= base_url(); ?>assets/img/beatiful-volcanoes.jpg')">
                <div class="filter"></div>
                <div class="content-center">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-7 ml-auto text-right">
                        <h2 class="title">Tujuan GAC</h2>
                        <h5>Mensupport Program Pemerintah “YUK NABUNG SAHAM” Untuk Peningkatan Kesejahteraan Masyarakat Indonesia</h5>
                        <h5>Memberikan Edukasi Agar Masyarakat Indonesia Memiliki Kemampuan Mengelola Keuangan Dengan Cerdas & Terhindar dari Investasi Bodong</h5>
                        <h5>Menciptakan Masyarakat Indonesia Yang Mampu Memiliki Pendapatan Melalui Pasar Modal Indonesia</h5>
                        <br />
                        <div class="buttons">
                          <a href="whatsapp://send?text=https://https://gac-asi.com/" class="btn btn-neutral btn-link btn-lg">
                            <i class="fa fa-share-alt"></i> Bagikan
                          </a>
                          <a href="<?= base_url(); ?>#contactus" class="btn btn-success btn-round btn-lg" data-scroll="true" data-id="#contact-us">
                            <i class="fa fa-rocket"></i> Daftar
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Membuat Animasi Slide -->
            <div class="carousel-item">
              <div class="page-header" style="background-image: url('<?= base_url(); ?>assets/img/gedung.png')">
                <div class="filter"></div>
                <div class="content-center">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-10 ml-auto mr-auto text-center">
                        <h2 class="title">"YUK NABUNG SAHAM"</h2>
                        <h5>Kita Suport Program Pemerintah.!</h5>
                        <h5>Sejahterakan Masyarakat.!</h5>
                        <h5>Membangun Negeri.!</h5>
                        <br />
                        <h6></h6>
                        <!-- <div class="card-image">
                            <img class="img" src="<?= base_url(); ?>assets/img/logo-brand.png" />
                        </div> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a class="left carousel-control carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="fa fa-angle-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="fa fa-angle-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    <!--     *********    END HEADER 3      *********      -->
  </div>
  <div class="section section-feature cd-section" id="overviews">
    <!--     *********     OVERVIEWS 1      *********      -->
    <div class="features-1">
      <div class="container">
        <div class="row">
          <div class="col-md-10 ml-auto mr-auto text-center text-dark">
            <h2 class="title">Kelas Edukasi untuk semua Kalangan</h2>
            <h5 class="description text-dark">Gemesin Asia Charts yang sudah berjalan beberapa tahun ini diperuntukkan untuk kalian-kalian yang ingin mengenal Pasar Modal lebih jauh dengan dibimbing oleh profesional yang sudah ahli dibidang pasar modal secara langsung di dalam kelas secara tatap muka..</h5>
          </div>
        </div>
        <div class="space-top"></div>
        <div class="row">
          <div class="col-md-4">
            <div class="info">
              <div class="icon icon-danger">
                <i class="nc-icon nc-settings-gear-65"></i>
              </div>
              <div class="description">
                <h4 class="info-title">KENAPA MEMILIH KAMI?</h4>
                <h5><b>Karena Kami Ahlinya</b></h5>
                <p><b>Pengajar Sekolah Pasar Modal adalah pelaku-pelaku Pasar Modal yang sudah bergelut di dunia pasar modal bertahun-tahun dan merupakan ahli dibidangnya.</b></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info">
              <div class="icon icon-success">
                <i class="nc-icon nc-bulb-63"></i>
              </div>
              <div class="description">
                <h4 class="info-title">VISI KAMI</h4>
                <h5><b>Edukasi Pasar Modal</b></h5>
                <p><b>Menjadi sarana Informasi dan Edukasi yang benar serta meningkatkan awareness kepada semua kalangan baik pelaku, pengamat, dan khalayak umum.</b></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info">
              <div class="icon icon-info">
                <i class="nc-icon nc-ruler-pencil"></i>
              </div>
              <div class="description">
                <h4 class="info-title">YANG KAMI LAKUKAN</h4>
                <h5><b>Mengenalkan Pasar Modal</b></h5>
                <p><b>Dengan adanya Sekolah Pasar Modal yang terbuka untuk umum, diharapkan dapat menjadi salah satu sarana untuk mengenalkan dunia pasar modal.</b></p>
              </div>
            </div>
          </div>
        </div>
          <div class="card card-plain card-blog mt-5">
            <div class="row">
                <div class="col-md-7 text-right">
                  <h3 style="font-weight: 400">GEMESIN ASIA CHARTS</h3>
                  <p>Belajar Pasar Modal dari yang Ahli di Bidangnya</p>
                </div>
                <div class="col-md-5">
                  <iframe height="280" width="420" src="https://www.youtube.com/embed/TI5tgdAcoPc?autoplay=1" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
      </div>
    </div>
    <!--     *********    END OVERVIEWS 1      *********      -->
  </div>
  <div class="section section-blog cd-section" id="fasilitas">
    <!--     *********     BLOGS 1      *********      -->
    <div class="section section-blog cd-section" id="fasilitas">
    <!--     *********     BLOGS 1      *********      -->
    <div class="blog-1" id="blog-1">
    <div class="pricing-3 section-image" style="background-image: url('<?= base_url(); ?>assets/img/sections//mnc-tower2.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-md-10 ml-auto mr-auto">
            <h2 class="title text-center">Fasilitas Edukasi yang Menyenangkan</h2>
            <br />
            <div class="card card-plain card-blog">
              <div class="row">
                <div class="col-md-7">
                  <div class="card-body">
                  <h6 class="card-category text-danger">Kenapa Memilih Kami?</h6>
                    <h3 class="card-title">
                      Karena Kami Ahlinya
                    </h3>
                    <p class="card-description">
                    Pengajar Sekolah Pasar Modal adalah pelaku-pelaku Pasar Modal yang sudah bergelut di dunia pasar modal bertahun-tahun dan merupakan ahli dibidangnya.
                    </p>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="card-image">
                    <img class="img" src="<?= base_url(); ?>assets/img/sections/profil1.jpg" />
                  </div>
                </div>
              </div>
            </div>
            <div class="card card-plain card-blog">
              <div class="row">
                <div class="col-md-5">
                  <div class="card-image">
                    <img class="img" src="<?= base_url(); ?>assets/img/sections/profil1.jpg" />
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="card-body">
                  <h6 class="card-category text-primary">Training Kit</h6>
                    <h3 class="card-title">
                      Training kit yang sesuai dengan kondisi plant produksi
                    </h3>
                    <p class="card-description">
                    Menjadi sarana Informasi dan Edukasi yang benar serta meningkatkan awareness kepada semua kalangan baik pelaku, pengamat, dan khalayak umum.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--     *********    END BLOGS 1      *********      -->
    
    <!--     *********    END BLOGS 3      *********      -->
  </div>
  <div class="section section-pricing cd-section" id="programs">
    <!--     *********    PROGRAMS 3     *********      -->
    <div class="pricing-3 section-image" style="background-image: url('<?= base_url(); ?>assets/img/sections/training-pics.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-md-9 ml-auto mr-auto text-center">
            <h2 class="title">Pilih kelas yang paling cocok untuk anda</h2>
            <h5 class="description">Pelajari silabus lengkap untuk setiap kelas training yang tersedia. kami akan mengkonfirmasinya dengan hasil pretest anda.</h5>
</br>
</br>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 ml-auto mr-auto">
            <div class="card card-pricing">
              <div class="card-body">
                <h4 class="card-category">BASIC</h4>
                <div class="card-icon">
                  <i class="nc-icon nc-hat-3"></i>
                </div>
                <p class="card-description">
                Belajar PLC dari dasar, komunikasi antara software dan PLC.
                </p>
                <ul>
                  <li><i class="fa fa-check" aria-hidden="true"></i> Introduction of PLC Family</li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> PLC Composition</li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> Feature & Function of PLC</li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> System Configuration</li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> Basic Programming</li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> Programming tools (Practice)</li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> Application Examples</li>
                </ul>
                <div class="card-footer">
                  <a href="#" class="btn btn-info btn-round card-link" data-toggle="modal" data-target="#basicModal">Selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 mr-auto">
            <div class="card card-pricing">
              <div class="card-body">
                <h4 class="card-category">INTERMEDIATE</h4>
                <div class="card-icon">
                  <i class="nc-icon nc-tap-01"></i>
                </div>
                <p class="card-description">
                Instruksi-instruksi PLC lanjutan menggunakan Human Machine Interface.
                </p>
                <ul>
                  <li><i class="fa fa-check" aria-hidden="true"></i> Introduction of Modular PLC</li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> System Configuration</li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> Human Machine Interface</li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> Screen designing using HMI</li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> Intermediate Programming</li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> Programming tools (Practice)</li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> Application Examples</li>
                </ul>
                <div class="card-footer">
                  <a href="#" class="btn btn-info btn-round card-link" data-toggle="modal" data-target="#intermediateModal">Selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 mr-auto">
            <div class="card card-pricing" data-background="color" data-color="blue">
              <div class="card-body">
                <h3 class="card-category"><b>ADVANCE</b></h3>
                <div class="card-icon">
                  <i class="nc-icon nc-trophy"></i>
                </div>
                <p class="card-description">
                Membuat program PLC dari awal untuk sebuah projek.
                </p>
                <ul>
                  <li><i class="fa fa-check" aria-hidden="true"></i> Introduction of PLC with special I/O</li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> System Configuration using special I/O</li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> Addressing & Memory Allocation using special I/O</li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> Advance Programming for special I/O</li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> Programming tools (Practice)</li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> Application Examples</li>
                </ul>
                <div class="card-footer">
                  <a href="#" class="btn btn-neutral btn-round card-link" data-toggle="modal" data-target="#advanceModal">Selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 mr-auto">
            <div class="card card-pricing">
              <div class="card-body">
                <h5 class="card-category">ADVANCE NETWORKING</h5>
                <div class="card-icon">
                  <i class="nc-icon nc-spaceship"></i>
                </div>
                <p class="card-description">
                Menghubungkan PLC dengan perangkat kontrol lainnya.
                </p>
                <ul>
                  <li><i class="fa fa-check" aria-hidden="true"></i> Communication & Networking System</li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> Compo Net System, CC-Link & Ethernet System</li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> System Configuration using Networking</li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> Application Examples</li>
                </ul>
                <div class="card-footer">
                  <a href="#" class="btn btn-info btn-round card-link" data-toggle="modal" data-target="#networkModal">Selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--     *********    END PROGRAMS 3      *********      -->
  </div>
  <div class="section section-team cd-section" id="traiders">
    <!--     *********    TEAM 3     *********      -->
    <div class="team-3">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
            <h2 class="title">Trider Berpengalaman di Bidangnya</h2>
            <h5 class="description">Dengan dibantu oleh Trider yang handal membuat pengalaman belajar anda lebih mudah.</h5>
          </div>
        </div>
        <div class="space-top"></div>
        <div class="row">
          <div class="col-md-4">
            <div class="card card-profile card-plain">
              <div class="card-avatar">
                <a href="#avatar">
                  <img src="./assets/img/faces/whs.png" alt="...">
                </a>
              </div>
              <div class="card-body">
                <a href="#paper-kit">
                  <div class="author">
                    <h4 class="card-title">Wahyu Hidayat Santoso</h4>
                    <h6 class="card-category text-muted">Trider</h6>
                  </div>
                </a>
                <!-- <p class="card-description text-center">
                  Teamwork is so important that it is virtually impossible for you to reach the heights of your capabilities or make the money that you want without becoming very good at it.
                </p> -->
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-profile card-plain">
              <div class="card-avatar">
                <a href="#avatar">
                  <img src="./assets/img/faces/bry.png" alt="...">
                </a>
              </div>
              <div class="card-body">
                <a href="#paper-kit">
                  <div class="author">
                    <h4 class="card-title">Bryan</h4>
                    <h6 class="card-category text-muted">Trider</h6>
                  </div>
                </a>
                <!-- <p class="card-description text-center">
                  A group becomes a team when each member is sure enough of himself and his contribution to praise the skill of the others. No one can whistle a symphony. It takes an orchestra to play it.
                </p> -->
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-profile card-plain">
              <div class="card-avatar">
                <a href="#avatar">
                  <img src="./assets/img/faces/hlm.png" alt="...">
                </a>
              </div>
              <div class="card-body">
                <a href="#paper-kit">
                  <div class="author">
                    <h4 class="card-title">Helmi Wibowo</h4>
                    <h6 class="card-category text-muted">Trider</h6>
                  </div>
                </a>
                <!-- <p class="card-description text-center">
                  The strength of the team is each individual member. The strength of each member is the team. If you can laugh together, you can work together, silence isn’t golden, it’s deadly.
                </p> -->
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-profile card-plain">
              <div class="card-avatar">
                <a href="#avatar">
                  <img src="./assets/img/faces/iks.png" alt="...">
                </a>
              </div>
              <div class="card-body">
                <a href="#paper-kit">
                  <div class="author">
                    <h4 class="card-title">Iksan Santoso</h4>
                    <h6 class="card-category text-muted">Trider</h6>
                  </div>
                </a>
                <!-- <p class="card-description text-center">
                  Great teams do not hold back with one another. They are unafraid to air their dirty laundry. They admit their mistakes, their weaknesses and their concerns without fear of reprisal.
                </p> -->
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-profile card-plain">
              <div class="card-avatar">
                <a href="#avatar">
                  <img src="./assets/img/faces/ife.png" alt="...">
                </a>
              </div>
              <div class="card-body">
                <a href="#paper-kit">
                  <div class="author">
                    <h4 class="card-title">Irvan Febrinata</h4>
                    <h6 class="card-category text-muted">Trider</h6>
                  </div>
                </a>
                <!-- <p class="card-description text-center">
                  Great teams do not hold back with one another. They are unafraid to air their dirty laundry. They admit their mistakes, their weaknesses and their concerns without fear of reprisal.
                </p> -->
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-profile card-plain">
              <div class="card-avatar">
                <a href="#avatar">
                  <img src="./assets/img/faces/cpa.png" alt="...">
                </a>
              </div>
              <div class="card-body">
                <a href="#paper-kit">
                  <div class="author">
                    <h4 class="card-title">Choiril Pamungkas</h4>
                    <h6 class="card-category text-muted">Trider</h6>
                  </div>
                </a>
                <!-- <p class="card-description text-center">
                  Great teams do not hold back with one another. They are unafraid to air their dirty laundry. They admit their mistakes, their weaknesses and their concerns without fear of reprisal.
                </p> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--     *********    END TEAM 3      *********      -->
  </div>
  <div class="section section-contactus cd-section" id="contact-us">
     <!--     *********    CONTACT US 1     *********      -->
     <div class="contactus-1 section-image" style="background-image: url('<?= base_url(); ?>assets/img/sections/mnc-tower2.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-md-12 ml-auto mr-auto">
            <div class="card card-contact no-transition">
              <h3 class="card-title text-center">Daftar Sekarang!</h3>
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
                        <p> Fida
                          <br> <a href="https://wa.me/6282282107470?text=Hai%20mawan,%20mau%20tanya-tanya%20GAC-Gemesin Asia Charts%20dong?%20" target="_blank">+62 822-8210-7470</a>
                          <br> Sen - Jum, 7:30-16:30
                        </p>
                          </br>
                        <!-- <p> Wahyu Hidayat santoso
                          <br> <br> <a href="https://wa.me/6285768218924?text=Hai%20wahyu,%20mau%20tanya-tanya%20training%20dong?%20" target="_blank">+62 857-6821-8924</a>
                          <br> Sen - Jum, 7:30-16:30
                        </p> -->
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-mb-2 mr-auto">
                  <form role="form" id="contact-form" method="post"  action="<?= base_url('beranda/daftar'); ?>">
                    <div class="card-body">
                      <div class="form-group label-floating">
                          <label class="control-label">Id Coach*</label>
                          <input type="text" id="id_coach" name="id_coach" class="form-control" placeholder="GAC-000000" required="true" />
                        </div>
                      <div class="form-group label-floating">
                          <label class="control-label">Nik*</label>
                          <input type="text" id="nik" name="nik" class="form-control" placeholder="Nik KTP" required="true" />
                        </div>
                      <div class="form-group label-floating">
                        <label class="control-label">Nama*</label>
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Lengkap" required="true" />
                      </div>
                      <div class="form-group label-floating">
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
                      </div>
                      <!-- <div class="form-group label-floating">
                        <label class="control-label">Tanggal Lahir*</label>
                        <div class="input-group date">
                          <input type="text" id="tanggal_lahir" name="tanggal_lahir" class="form-control datetimepicker" placeholder="Tanggal Lahir" required="true" />
                          <div class="input-group-append">
                            <span class="input-group-text">
                              <span class="glyphicon glyphicon-calendar"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                            </span>
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
  <nav id="cd-vertical-nav">
    <ul>
      <li>
        <a href="#headers" data-number="1">
          <span class="cd-dot"></span>
          <span class="cd-label">Beranda</span>
        </a>
      </li>
      <li>
        <a href="#overviews" data-number="2">
          <span class="cd-dot"></span>
          <span class="cd-label">overview</span>
        </a>
      </li>
      <li>
        <a href="#fasilitas" data-number="3">
          <span class="cd-dot"></span>
          <span class="cd-label">Fasilitas</span>
        </a>
      </li>
      <li>
        <a href="#programs" data-number="4">
          <span class="cd-dot"></span>
          <span class="cd-label">Program</span>
        </a>
      </li>
      <li>
        <a href="#traiders" data-number="5">
          <span class="cd-dot"></span>
          <span class="cd-label">Trider</span>
        </a>
      </li>
      <li>
        <a href="#contact-us" data-number="8">
          <span class="cd-dot"></span>
          <span class="cd-label">Daftar</span>
        </a>
      </li>
    </ul>
  </nav>
   <!-- basic modal -->
  <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-hidden="false">
    <div class="modal-dialog modal-basic">
      <div class="modal-content">
        <div class="modal-header no-border-header text-center">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h3 class="modal-title">Materi Basic PLC</h3>
        </div>
        <div class="modal-body">
        <div class="row">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th>Materi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center">1</td>
                  <td>Introduction to PLC Family</td>
                </tr>
                <tr>
                  <td class="text-center">2</td>
                  <td>PLC Composition: Hardware, Software and Wiring</td>
                </tr>
                <tr>
                  <td class="text-center">3</td>
                  <td>System Configuration of PLC</td>
                </tr>
                <tr>
                  <td class="text-center">4</td>
                  <td>Function, Characteristic & Feature of PLC</td>
                </tr>
                <tr>
                  <td class="text-center">5</td>
                  <td>Addressing & I/O Allocation</td>
                </tr>
                <tr>
                  <td class="text-center">6</td>
                  <td>Basic Instruction: AND, OR, NOT, NAND & NOR</td>
                </tr>
                <tr>
                  <td class="text-center">7</td>
                  <td>Ladder Diagram</td>
                </tr>
                <tr>
                  <td class="text-center">8</td>
                  <td>Programming tools (Practice)</td>
                </tr>
                <tr>
                  <td class="text-center">9</td>
                  <td>Basic Programming: Timer, Counter, Set/Reset, Keep & Ditu/Difd</td>
                </tr>
                <tr>
                  <td class="text-center">10</td>
                  <td>Application Example (Connect to Sensor, Push button. etc)</td>
                </tr>
                <tr>
                  <td class="text-center">11</td>
                  <td>Electro Pneumatic</td>
                </tr>
                <tr>
                <td></td>
                <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
        </div>
        <div class="modal-footer no-border-footer"></div>
      </div>
    </div>
  </div>
   <!-- intermediate modal -->
   <div class="modal fade" id="intermediateModal" tabindex="-1" role="dialog" aria-hidden="false">
    <div class="modal-dialog modal-basic">
      <div class="modal-content">
        <div class="modal-header no-border-header text-center">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h3 class="modal-title">Materi Intermediate PLC</h3>
        </div>
        <div class="modal-body">
        <div class="row">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th>Materi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center">1</td>
                  <td>Introduction to Modular PLC</td>
                </tr>
                <tr>
                  <td class="text-center">2</td>
                  <td>PLC Composition: Hardware, Software & Wiring</td>
                </tr>
                <tr>
                  <td class="text-center">3</td>
                  <td>System Configuration of PLC (High Speed Input)</td>
                </tr>
                <tr>
                  <td class="text-center">4</td>
                  <td>Addressing & I/O Allocation</td>
                </tr>
                <tr>
                  <td class="text-center">5</td>
                  <td>Intermediate Programming and Operation of Programming tools</td>
                </tr>
                <tr>
                  <td class="text-center">6</td>
                  <td>Human Machine Interface (HMI)/Touchscreen</td>
                </tr>
                <tr>
                  <td class="text-center">7</td>
                  <td>Function, Characteristic & Feature of HMI</td>
                </tr>
                <tr>
                  <td class="text-center">8</td>
                  <td>Setup & Integration to PLC</td>
                </tr>
                <tr>
                  <td class="text-center">9</td>
                  <td>Basic screen designing using HMI programming tools</td>
                </tr>
                <tr>
                  <td class="text-center">10</td>
                  <td>Screen Upload/Download</td>
                </tr>
                <tr>
                  <td class="text-center">11</td>
                  <td>Application Examples</td>
                </tr>
                <tr>
                <td></td>
                <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
        </div>
        <div class="modal-footer no-border-footer"></div>
      </div>
    </div>
  </div>
   <!-- Advance modal -->
   <div class="modal fade" id="advanceModal" tabindex="-1" role="dialog" aria-hidden="false">
    <div class="modal-dialog modal-basic">
      <div class="modal-content">
        <div class="modal-header no-border-header text-center">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h3 class="modal-title">Materi Advance PLC</h3>
        </div>
        <div class="modal-body">
        <div class="row">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th>Materi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center">1</td>
                  <td>PLC Composition: Hardware, Software and Wiring using I/O</td>
                </tr>
                <tr>
                  <td class="text-center">2</td>
                  <td>System Configuration of PLC using special I/O</td>
                </tr>
                <tr>
                  <td class="text-center">3</td>
                  <td>Function, Characteristic & Feature of special I/O</td>
                </tr>
                <tr>
                  <td class="text-center">4</td>
                  <td>Addressing & I/O Allocation of special I/O</td>
                </tr>
                <tr>
                  <td class="text-center">5</td>
                  <td>Basic Programming realated to special I/O</td>
                </tr>
                <tr>
                  <td class="text-center">6</td>
                  <td>Servo Motor</td>
                </tr>
                  <td class="text-center">7</td>
                  <td>Application Example</td>
                </tr>
                <tr>
                <td></td>
                <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
        </div>
        <div class="modal-footer no-border-footer"></div>
      </div>
    </div>
  </div>
   <!-- Network modal -->
   <div class="modal fade" id="networkModal" tabindex="-1" role="dialog" aria-hidden="false">
    <div class="modal-dialog modal-basic">
      <div class="modal-content">
        <div class="modal-header no-border-header text-center">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h3 class="modal-title">Materi Network PLC</h3>
        </div>
        <div class="modal-body">
        <div class="row">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th>Materi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center">1</td>
                  <td>Communication & Networking System</td>
                </tr>
                <tr>
                  <td class="text-center">2</td>
                  <td>Device Net System, Controller Link System</td>
                </tr>
                <tr>
                  <td class="text-center">3</td>
                  <td>Compo Net System, CC Link, Ethernet System & Application</td>
                </tr>
                <tr>
                  <td class="text-center">4</td>
                  <td>System Configuration of PLC using Network Module</td>
                </tr>
                <tr>
                  <td class="text-center">5</td>
                  <td>Addressing & Memory Allocation of Networking Module</td>
                </tr>
                <tr>
                  <td class="text-center">10</td>
                  <td>Application Example</td>
                </tr>
                <tr>
                <td></td>
                <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
        </div>
        <div class="modal-footer no-border-footer"></div>
      </div>
    </div>
  </div>
  <!-- END MODALS  -->
  <footer class="footer footer-black  footer-white ">
    <div class="container">
      <div class="row">
        <nav class="footer-nav">
          <ul>
            <li>
              <a href="#" target="_blank">PT Fida Sinergi Asia</a>
            </li>
          </ul>
        </nav>
        <div class="credits ml-auto">
          <span class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="fa fa-heart heart"></i> by Fida Digitalization Team.
          </span>
        </div>
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="<?= base_url(); ?>assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="<?= base_url(); ?>assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?= base_url(); ?>assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="<?= base_url(); ?>assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?= base_url(); ?>assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="<?= base_url(); ?>assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="<?= base_url(); ?>assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="<?= base_url(); ?>assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
  <!--	Plugin for Datetimepicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="<?= base_url(); ?>assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Vertical nav - dots -->
  <script src="<?= base_url(); ?>assets/demo//vertical-nav.js" type="text/javascript"></script>
  <!--  Photoswipe files -->
  <script src="<?= base_url(); ?>assets/js/plugins/photo_swipe/photoswipe.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/plugins/photo_swipe/photoswipe-ui-default.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/plugins/photo_swipe/init-gallery.js"></script>
  <!--  for Jasny fileupload -->
  <script src="<?= base_url(); ?>assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url(); ?>assets/js/paper-kit.js?v=2.3.0" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!--  Plugin for presentation page - isometric cards  -->
  <script src="<?= base_url(); ?>assets/js/plugins/presentation-page/main.js"></script>
  <!--  Plugin for Sweet Alert -->
<script src="<?= base_url(); ?>assets/js/plugins/sweetalert2.js"></script>
<script src="<?= base_url(); ?>assets/js/plugins/sweet-alert.js"></script>
  <script>
    $(document).ready(function() {
      if (window_width >= 768) {
        $(window).on('scroll', pk.checkScrollForPresentationPage);
      }

      var checker = document.getElementById('check');
      var sendbtn = document.getElementById('submit');
        sendbtn.disabled = true;
        // when unchecked or checked, run the function
        checker.onchange = function() {
            if (this.checked) {
                sendbtn.disabled = false;
            } else {
                sendbtn.disabled = true;
            }
        }

        $('.datetimepicker').datetimepicker({
        format: 'DD-MM-YYYY',
        icons: {
            time: "fa fa-clock-o",
            date: "fa fa-calendar",
            up: "fa fa-chevron-up",
            down: "fa fa-chevron-down",
            previous: 'fa fa-chevron-left',
            next: 'fa fa-chevron-right',
            today: 'fa fa-screenshot',
            clear: 'fa fa-trash',
            close: 'fa fa-remove'
          }
        });

        $('#email').change(function(){
          var email = $('#email').val();
          if(email != ''){
            $.ajax({
              url: "<?php echo base_url(); ?>beranda/checkEmail",
              method: "POST",
              data: {email:email},
              success: function(data){
                $('#email_result').html(data);
            }
          });
          }
        });

      // Javascript method's body can be found in assets/js/core/partials/_demo-object.js
      demo.initContactUsMap2();
    });
  </script>
</body>

</html>