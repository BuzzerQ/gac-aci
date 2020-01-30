<div class="content">
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
<div class="section section-feature cd-section" id="overviews">
    <div class="features-1">
      <div class="container">
        <div class="row">
         <div class="col-md-12" style="margin-top:70px">
            <table id="example" class="table table-striped table-bordered" style="width:100%;font-size:12px">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Investor Code</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Direct Refferal</th>
                            <th>Jumlah Refferal Investor</th>
                            <th>Info</th>
                        </tr>
                    </thead>
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
                            <td><?= $i['grade1']; ?></td>
                            <td><?= $i['jumlah_investor']; ?></td>
                            <td>
                            <div class="dropdown">
                                    <a class="btn btn-sm btn-danger dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        REFERRAL 
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item btn-rose"  data-toggle="modal" data-target="#batalRsv">Investor : <?= $i['jumlah_investor']; ?></a>
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
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Investor Code</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Direct Refferal</th>
                            <th>Jumlah Refferal Investor</th>
                            <th>Info</th>
                        </tr>
                    </tfoot>
                </table>
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-feature cd-section" id="overviews">
    <div class="features-1">
      <div class="container">
        <div class="row">
         <div class="col-md-12" style="margin-top:70px">
            <table id="example" class="table table-striped table-bordered" style="width:100%;font-size:12px">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Investor Code</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Direct Refferal</th>
                            <th>Jumlah Refferal Investor</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $no=1;
                        foreach ($refferal as $rf) : ?> 
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $rf['id']; ?></td>
                            <td><?= $rf['nama']; ?></td>
                            <td><?= $rf['phone']; ?></td>
                                <?php $status = $this->db->get_where('status_investor', ['id' => $rf['status']])->row_array(); ?>
                            <td><?= $status['nama']; ?> </td>
                            <td><?= $rf['grade1']; ?></td>
                            <td><?= $rf['jumlah_investor']; ?></td>
                        </tr>
                            <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Investor Code</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Direct Refferal</th>
                            <th>Jumlah Refferal Investor</th>
                        </tr>
                    </tfoot>
                </table>
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


</div>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
        $('[data-toggle="tooltip"]').tooltip(); 
    } );
</script>

<!-- Modal KPI DEPT-->
<!-- Modal -->
<div class="modal fade" id="batalRsv" tabindex="-1" role="dialog" aria-labelledby="batalAktivitasTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card card-signup card-plain">
                <div class="modal-header">
                    <div class="card-header card-header-primary text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="material-icons">clear</i>
                        </button>
                        <h4 class="card-title">ALASAN PEMBATALAN</h4>
                    </div>
                </div>
                <form class="form" method="post" action="<?= base_url('lembur/batal_lembur'); ?>">
                    <div class="modal-body">
                        <input type="text" class="form-control disabled" name="id">
                        <textarea rows="2" class="form-control" name="catatan" id="catatan" placeholder="Keterangan Pembatalan Lembur" required></textarea>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="submit" class="btn btn-danger">BATALKAN LEMBUR INI!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>