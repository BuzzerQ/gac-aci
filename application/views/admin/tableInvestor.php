<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
    <!-- <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url(); ?>assets/img/apple-icon.png"> -->
    <link rel="icon" type="image/png" href="<?= base_url(); ?>assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   Gemesin Asia Charts
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="<?= base_url(); ?>assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
    <!-- Plugin for tinymce  -->
    <script src="<?= base_url(); ?>assets/js/plugins/tinymce.min.js"></script>
    <!-- Plugin for jquery  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>

<body class="">
  <div class="wrapper ">

    <div class="main-panel">
      <!-- Navbar -->
      <!-- End Navbar -->
      <div class="content">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">assignment</i>
                        </div>
                        <h4 class="card-title">Daftar Coach</h4>
                    </div>
                    <div class="card-body">
                        <div class="material-datatables">
                            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Investor Code</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Status</th>
                                        <th>Jumlah Investor</th>
                                        <th>Info</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Investor Code</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Status</th>
                                        <th>Jumlah Investor</th>
                                        <th>Info</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                   <?php 
                                      $no=1;
                                      foreach ($investor as $i) : ?> 
                                      <tr>
                                          <td><?= $no++ ?></td>
                                          <td><?= $i['id']; ?></td>
                                          <td><?= $i['nama']; ?></td>
                                          <td><?= $i['phone']; ?></td>
                                              <?php $status = $this->db->get_where('status_investor', ['id' => $i['status']])->row_array(); ?>
                                          <td><?= $status['nama']; ?> </td>
                                          <td><?= $i['jumlah_investor']; ?></td>
                                          <td>
                                          <div class="dropdown">
                                                  <a class="btn btn-rose btn-round" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons">favorite"</i>
                                                      REFERRAL 
                                                  </a>
                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                      <a class="dropdown-item btn-danger"  data-toggle="modal" data-target="#batalRsv">Investor : <?= $i['jumlah_investor']; ?></a>
                                                      <a class="dropdown-item btn-warning" href="#">Ambasador</a>
                                                      <a class="dropdown-item btn-success" href="#">Coach</a>
                                                      <a class="dropdown-item btn-info" href="#">National Coach</a>
                                                      <a class="dropdown-item btn-gold" href="#">International Coach</a>
                                                  </div>
                                              </div>
                                          </td>
                                      </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end content-->
                </div>
                <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
        </div>
        <!-- end row -->
    </div>
    </div>
  </div>
  
  <!--   Core JS Files   -->
  <script src="<?= base_url(); ?>assets/js/core/jquery.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/core/popper.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="<?= base_url(); ?>assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="<?= base_url(); ?>assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="<?= base_url(); ?>assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="<?= base_url(); ?>assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="<?= base_url(); ?>assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="<?= base_url(); ?>assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="<?= base_url(); ?>assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="<?= base_url(); ?>assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="<?= base_url(); ?>assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="<?= base_url(); ?>assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="<?= base_url(); ?>assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?= base_url(); ?>assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="<?= base_url(); ?>assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="<?= base_url(); ?>assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?= base_url(); ?>assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url(); ?>assets/js/material-dashboard.js?v=2.1.0" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?= base_url(); ?>assets/demo/demo.js"></script>
  <!-- Plugin for the Modal  -->
  <script src="<?= base_url(); ?>assets/js/plugins/bootstrap-modal.js"></script>

  
  <script>
    $(document).ready(function() {
      $('#datatables').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
          [10, 25, 50, -1],
          [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
          search: "_INPUT_",
          searchPlaceholder: "Search records",
        }
      });

      var table = $('#datatable').DataTable();

      // Edit record
      table.on('click', '.edit', function() {
        $tr = $(this).closest('tr');
        var data = table.row($tr).data();
        alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
      });

      // Delete a record
      table.on('click', '.remove', function(e) {
        $tr = $(this).closest('tr');
        table.row($tr).remove().draw();
        e.preventDefault();
      });

      //Like record
      table.on('click', '.like', function() {
        alert('You clicked on Like button');
      });
    });
  </script>
</body>
<!-- Modal Batal Aktivitas-->
<div class="modal fade" id="batalRsv" tabindex="-1" role="dialog" aria-labelledby="batalAktivitasTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card card-signup card-plain">
                <div class="modal-header">
                    <div class="card-header card-header-primary text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="material-icons">clear</i>
                        </button>
                        <h4 class="card-title">Investor</h4>
                    </div>
                </div>
                <div class="card-body">
                        <div class="material-datatables">
                            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Investor Code</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Status</th>
                                        <th>Jumlah Investor</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Investor Code</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Status</th>
                                        <th>Jumlah Investor</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                   <?php 
                                      $queryInvestor = "SELECT * FROM `investor` WHERE `id_coach`='GAC20010001' ";
                                      $investor2 = $this->db->query($queryInvestor)->result_array();
                                      $no=1;
                                      foreach ($investor2 as $iv) : ?> 
                                      <tr>
                                          <td><?= $no++ ?></td>
                                          <td><?= $iv['id']; ?></td>
                                          <td><?= $iv['nama']; ?></td>
                                          <td><?= $iv['phone']; ?></td>
                                              <?php $status = $this->db->get_where('status_investor', ['id' => $iv['status']])->row_array(); ?>
                                          <td><?= $status['nama']; ?> </td>
                                          <td><?= $iv['jumlah_investor']; ?></td>
                                          <!-- <td>
                                          <div class="dropdown">
                                                  <a class="btn btn-rose btn-round" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons">favorite"</i>
                                                      REFERRAL 
                                                  </a>
                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                      <a class="dropdown-item btn-danger"  data-toggle="modal" data-target="#batalRsv">Investor : <?= $i['jumlah_investor']; ?></a>
                                                      <a class="dropdown-item btn-warning" href="#">Ambasador</a>
                                                      <a class="dropdown-item btn-success" href="#">Coach</a>
                                                      <a class="dropdown-item btn-info" href="#">National Coach</a>
                                                      <a class="dropdown-item btn-gold" href="#">International Coach</a>
                                                  </div>
                                              </div>
                                          </td> -->
                                      </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

</html>