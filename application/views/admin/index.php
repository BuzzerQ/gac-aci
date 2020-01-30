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
              <h3 class="title card-header" style="font-weight: 600;color:#fff">ADMIN DASHBOARD</h3>
            </div>
            <div style="margin-top: 100px">
              <div class="row">
                <div class="col-md-12">
                  <h4 style="font-weight: 600;margin-bottom: 10px">Member Stat</h4>            
                </div>
                
                <div class="col-md-4">
                  <div class="card">
                    <div class="card-header btn-primary" style="font-weight: 600;color:#fff">INVESTOR</div>
                    <div class="card-body">
                      <?php 
                          $today = date('d');
                          $bulan = date('m');
                          $tahun = date('Y');
                          $this->db->where('year(tgl_daftar)',$tahun);
                          $this->db->where('month(tgl_daftar)',$bulan);
                          $this->db->where('status', '1');
                          $investor_cus = $this->db->get('investor');
                      ?>
                      <?= $investor_cus->num_rows(); ?>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card">
                    <div class="card-header btn-primary" style="font-weight: 600;color:#fff">AMBASSADOR</div>
                    <div class="card-body">
                    00
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card">
                    <div class="card-header btn-primary" style="font-weight: 600;color:#fff">COACH</div>
                    <div class="card-body">
                    <?php 
                          $today = date('d');
                          $bulan = date('m');
                          $tahun = date('Y');
                          $this->db->where('year(tgl_daftar)',$tahun);
                          $this->db->where('month(tgl_daftar)',$bulan);
                          $this->db->where('status', '3');
                          $t_coach = $this->db->get('investor');
                      ?>
                      <?= $t_coach->num_rows(); ?>
                    </div>
                  </div>
                </div>


                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header btn-primary" style="font-weight: 600;color:#fff">COACH NAT</div>
                    <div class="card-body">
                    00
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header btn-primary" style="font-weight: 600;color:#fff">COACH INT</div>
                    <div class="card-body">
                    00
                    </div>
                  </div>
                </div>

                <!-- FINANCE -->
                <div class="col-md-12">
                  <h4 style="font-weight: 600;margin-bottom: 10px">Finance All Stat</h4>
                </div>          
                
                <div class="col-md-3">
                  <div class="card">
                    <div class="card-header btn-success" style="font-weight: 600;color:#fff">Income</div>
                    <div class="card-body">
                    00
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

                <!-- FINANCE -->
                <div class="col-md-12">
                  <h4 style="font-weight: 600;margin-bottom: 10px">Finance Today Stat</h4>
                </div>          
                
                <div class="col-md-3">
                  <div class="card">
                    <div class="card-header btn-warning" style="font-weight: 600;color:#fff">Income</div>
                    <div class="card-body">
                    00
                    </div>
                  </div>    
                </div>

                <div class="col-md-3">
                  <div class="card">
                    <div class="card-header btn-warning" style="font-weight: 600;color:#fff">Pay Bonus</div>
                    <div class="card-body">
                    00
                    </div>
                  </div>    
                </div>

                <div class="col-md-3">
                  <div class="card">
                    <div class="card-header btn-warning" style="font-weight: 600;color:#fff">Profit</div>
                    <div class="card-body">
                    00
                    </div>
                  </div>    
                </div>

                <div class="col-md-3">
                  <div class="card">
                    <div class="card-header btn-warning" style="font-weight: 600;color:#fff">Percentage</div>
                    <div class="card-body">
                    00
                    </div>
                  </div>    
                </div>

                <!-- Statistic -->
                <div class="col-md-12">
                  <h4 style="font-weight: 600;margin-bottom: 10px">Statistic</h4>
                </div>          
                
                <div class="col-md-3">
                  <div class="card">
                    <div class="card-header btn-danger" style="font-weight: 600;color:#fff">Posting Today</div>
                    <div class="card-body">
                    00
                    </div>
                  </div>    
                </div>

                <div class="col-md-3">
                  <div class="card">
                    <div class="card-header btn-danger" style="font-weight: 600;color:#fff">Posting Today</div>
                    <div class="card-body">
                    00
                    </div>
                  </div>    
                </div>

                <div class="col-md-3">
                  <div class="card">
                    <div class="card-header btn-danger" style="font-weight: 600;color:#fff">Auto Upgrade</div>
                    <div class="card-body">
                    00
                    </div>
                  </div>    
                </div>

                <div class="col-md-3">
                  <div class="card">
                    <div class="card-header btn-danger" style="font-weight: 600;color:#fff">New Coach</div>
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
                  <a href="<?= base_url('admin/daftar/')?>">
                    <div class="card">
                      <div class="card-body">
                        <i class=" 	fa fa-plus "style="font-size:36px;color:red"></i>
                        <p style="font-weight: 600;font-size: 12px">ADD INVESTOR</p>
                      </div>
                    </div>
                  </a>    
                </div>

                <div class="col-md-3">
                  <a href="<?= base_url('admin/daftarCoach/')?>">
                    <div class="card">
                      <div class="card-body">
                        <i class=" 	fa fa-plus "style="font-size:36px;color:green"></i>
                        <p style="font-weight: 600;font-size: 12px">ADD COACH</p>
                      </div>
                    </div>
                  </a>    
                </div>

                <div class="col-md-3">
                  <a href="<?= base_url('admin/daftarInvestor/')?>">
                    <div class="card">
                      <div class="card-body">
                         <i class="fa fa-group"style="font-size:36px;color:blue"></i>
                        <p style="font-weight: 600;font-size: 12px">TOTAL COACH</p>
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
                        <i class="fas fa-wallet fa-5x"></i>
                        <p style="font-weight: 600;font-size: 12px">COMPANY PROFIT</p>
                      </div>
                    </div>
                  </a>    
                </div>

                <div class="col-md-3">
                  <a href="">
                    <div class="card">
                      <div class="card-body">
                        <i class="fas fa-user-check fa-5x"></i>
                        <p style="font-weight: 600;font-size: 12px">ACTIVE MEMBER</p>
                      </div>
                    </div>
                  </a>    
                </div>

                <div class="col-md-3">
                  <a href="">
                    <div class="card">
                      <div class="card-body">
                        <i class="fas fa-business-time fa-5x"></i>
                        <p style="font-weight: 600;font-size: 12px">TOTAL MEMBER BNS</p>
                      </div>
                    </div>
                  </a>    
                </div>

                <div class="col-md-3">
                  <a href="">
                    <div class="card">
                      <div class="card-body">
                        <i class="fas fa-code-branch fa-5x"></i>
                        <p style="font-weight: 600;font-size: 12px">CHANGE TREE</p>
                      </div>
                    </div>
                  </a>    
                </div>

                <div class="col-md-3">
                  <a href="">
                    <div class="card">
                      <div class="card-body">
                        <i class="fas fa-archive fa-5x"></i>
                        <p style="font-weight: 600;font-size: 12px">RECAPT BONUS</p>
                      </div>
                    </div>
                  </a>    
                </div>

                <div class="col-md-3">
                  <a href="">
                    <div class="card">
                      <div class="card-body">
                        <i class="fas fa-exchange-alt fa-5x"></i>
                        <p style="font-weight: 600;font-size: 12px">TRANSFER PIN</p>
                      </div>
                    </div>
                  </a>    
                </div>

                <div class="col-md-3">
                  <a href="">
                    <div class="card">
                      <div class="card-body">
                        <i class="fas fa-comments-dollar fa-5x"></i>
                        <p style="font-weight: 600;font-size: 12px">LIFETIME ACHIEVEMENT</p>
                      </div>
                    </div>
                  </a>    
                </div>

                
                <div class="col-md-3">
                  <a href="">
                    <div class="card">
                      <div class="card-body">
                        <i class="fas fa-comments-dollar fa-5x"></i>
                        <p style="font-weight: 600;font-size: 12px">LIFETIME ACHIEVEMENT</p>
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