<div class="content">
  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
<!-- BODY -->
<div class="section-space"></div>
<?php date_default_timezone_set('asia/jakarta'); ?>
  <div class="section section-feature cd-section" id="overviews">
    <div class="features-1">
      <div class="container">
        <div class="row">
          <div class="col-md-10 ml-auto mr-auto text-center text-dark">
            <div class="container-fluid btn-primary">
              <h3 class="title card-header" style="font-weight: 600;color:#fff">MEMBER AREA</h3>
              <div class="card-body">
                <?= $investor['nama']; ?>
              </div>
            </div>
            <div style="margin-top: 100px">
              <div class="row">
                <div class="col-md-12">
                  <h4 style="font-weight: 600;margin-bottom: 10px">Member Refferal</h4>            
                </div>
                
                <div class="col-md-4">
                  <div class="card">
                    <div class="card-header btn-primary" style="font-weight: 600;color:#fff">GRADE 1</div>
                    <div class="card-body">
                      <?php 
                          // $today = date('d');
                          // $bulan = date('m');
                          // $tahun = date('Y');
                          // $this->db->where('year(tgl_daftar)',$tahun);
                          // $this->db->where('month(tgl_daftar)',$bulan);
                          // $this->db->where('grade1');
                          // $this->db->where('id', $investor['id']);
                          // $investor_cus = $this->db->get('investor');
                      ?>
                      <?= $investor['grade1']; ?>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card">
                    <div class="card-header btn-primary" style="font-weight: 600;color:#fff">GRADE 2</div>
                    <div class="card-body">
                      <?= $investor['grade2']; ?>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card">
                    <div class="card-header btn-primary" style="font-weight: 600;color:#fff">GRADE 3</div>
                    <div class="card-body">
                      <?= $investor['grade3']; ?>
                    </div>
                  </div>
                </div>


                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header btn-primary" style="font-weight: 600;color:#fff">GRADE 4</div>
                    <div class="card-body">
                      <?= $investor['grade4']; ?>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header btn-primary" style="font-weight: 600;color:#fff">GRADE 5</div>
                    <div class="card-body">
                      <?= $investor['grade5']; ?>
                    </div>
                  </div>
                </div>

                <div class="col-md-4" style="margin-right:auto;margin-left:auto">
                  <div class="card">
                    <div class="card-header btn-primary" style="font-weight: 600;color:#fff">Total Investor</div>
                    <div class="card-body">
                      <?= $investor['jumlah_investor']; ?>
                    </div>
                  </div>
                </div>

                <!-- FINANCE -->
                <div class="col-md-12">
                  <h4 style="font-weight: 600;margin-bottom: 10px">Finance</h4>
                </div>          
                
                <div class="col-md-3">
                  <div class="card">
                    <div class="card-header btn-success" style="font-weight: 600;color:#fff">Income</div>
                    <div class="card-body">
                        <?= $investor['pendapatan']; ?>
                    </div>
                  </div>    
                </div>

                <div class="col-md-3">
                  <div class="card">
                    <div class="card-header btn-success" style="font-weight: 600;color:#fff">Tunjangan Coach</div>
                    <div class="card-body">
                        <?= $investor['tunjanganCoach']; ?>
                    </div>
                  </div>    
                </div>

                <div class="col-md-3">
                  <div class="card">
                    <div class="card-header btn-success" style="font-weight: 600;color:#fff">Pay Bonus</div>
                    <div class="card-body">
                    00
                    </div>
                  </div>    
                </div>

                <div class="col-md-3">
                  <div class="card">
                    <div class="card-header btn-success" style="font-weight: 600;color:#fff">Profit</div>
                    <div class="card-body">
                    00
                    </div>
                  </div>    
                </div>

                <div class="col-md-3">
                  <div class="card">
                    <div class="card-header btn-success" style="font-weight: 600;color:#fff">Percentage</div>
                    <div class="card-body">
                    00
                    </div>
                  </div>    
                </div>

                <!-- MENU -->
                <div class="col-md-12">
                  <h4 style="font-weight: 600;margin-bottom: 10px">Menu</h4>
                </div> 

                <div class="col-md-3">
                  <a href="<?= base_url('member/daftar/')?>">
                    <div class="card">
                      <div class="card-body">
                        <i class=" 	fa fa-plus "style="font-size:36px;color:red"></i>
                        <p style="font-weight: 600;font-size: 12px">ADD INVESTOR</p>
                      </div>
                    </div>
                  </a>    
                </div>

                <div class="col-md-3">
                  <a href="<?= base_url('admin/daftarInvestor/')?>">
                    <div class="card">
                      <div class="card-body">
                         <i class="fa fa-group"style="font-size:36px;color:blue"></i>
                        <p style="font-weight: 600;font-size: 12px">REFFERAL MEMBER</p>
                      </div>
                    </div>
                  </a>    
                </div>

                <div class="col-md-3">
                  <a href="">
                    <div class="card">
                      <div class="card-body">
                        <i class="fa fa-address-card"style="font-size:36px" ></i>
                        <p style="font-weight: 600;font-size: 12px">MEMBER BONUS</p>
                      </div>
                    </div>
                  </a>    
                </div>

                <div class="col-md-3">
                  <a href="">
                    <div class="card">
                      <div class="card-body">
                        <i class="fa fa-address-card"style="font-size:36px" ></i>
                        <p style="font-weight: 600;font-size: 12px">TUNJANGAN</p>
                      </div>
                    </div>
                  </a>    
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>

</html>