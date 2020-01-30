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
              <h3 class="card-title text-center">Tambahkan Coach</h3>
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
                  <form role="form" id="contact-form" method="post"  action="<?= base_url('admin/addCoach'); ?>">
                    <div class="card-body">
                    <!-- autocomplete="off" -->
                    <div class="form-group label-floating">
                        <label class="control-label">ID Coach*</label>
                        <input type="text" id="id_coach" name="id_coach" class="form-control" placeholder="GACxxxxxx" required="true"/>
                      </div>
                      <div class="form-group label-floating">
                        <label class="control-label">Nik*</label>
                        <input type="text" id="nik" name="nik" class="form-control" placeholder="Nik KTP" required="true"/>
                      </div>
                      <div class="form-group label-floating">
                        <label class="control-label">Nama*</label>
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Lengkap" required="true" />
                      </div>
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

                      <!-- <div class="form-group label-floating">
                        <label class="control-label">Status Grade*</label>
                        <select class="selectpicker" id="Status_grade" name="Status_grade" data-style="btn-primary select-with-transition" title="Pilih" required="true">
                          <option value="1">Grade 1</option>
                          <option value="2">Grade 2</option>
                          <option value="3">Grade 3</option>
                          <option value="4">Grade 4</option>
                          <option value="5">Grade 5</option>
                        </select>
                      </div> -->

                      <div class="form-group label-floating">
                        <label class="control-label">Status Role*</label>
                        <select class="selectpicker" id="status_role" name="status_role" data-style="btn-primary select-with-transition" title="Pilih" required="true">
                          <option value="1">International Coach</option>
                          <option value="2">National Coach</option>
                          <option value="3">Coach</option>
                          <option value="4">Ambassador</option>
                          <option value="5">Investor</option>
                        </select>
                      </div>

                      <div class="form-group label-floating">
                        <label class="control-label">Status Coach*</label>
                        <select class="selectpicker" id="status" name="status" data-style="btn-primary select-with-transition" title="Pilih" required="true">
                          <option value="1">Aktif</option>
                          <option value="2">Non-Aktif</option>
                        </select>
                      </div>

                      <div class="form-group label-floating">
                        <label class="control-label">Tanggal Menjadi Coach*</label>
                        <div class="input-group date">
                          <input type="text" id="tgl_join" name="tgl_join" class="form-control datetimepicker" placeholder="Tanggal Menjadi Coach" required="true" />
                          <div class="input-group-append">
                            <span class="input-group-text">
                              <span class="glyphicon glyphicon-calendar"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                            </span>
                          </div>
                        </div>
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
  </div><!-- END MODALS  -->
  <footer class="footer footer-black  footer-white ">
    <div class="container">
      <div class="row">
        <nav class="footer-nav">
          <ul>
            <li>
              <a href="https://www.winteq-astra.com" target="_blank">PT Fida Sinergi Asia</a>
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