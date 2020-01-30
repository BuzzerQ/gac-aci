<div class="content">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 ml-auto mr-auto">
                <ul class="timeline timeline-simple">
                    <!-- <?php if ($reservasi['status'] == 0) { ?>
                        <li class="timeline-inverted">
                            <div class="timeline-badge danger">
                                <i class="material-icons">card_travel</i>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <span class="badge badge-pill badge-danger">Reservasi Perjalanan DIBATALKAN</span>
                                </div>
                                <div class="timeline-body">
                                    <p>Yaaahh, Perjalanan kamu dibatalkan.</p>
                                    <p><?= $reservasi['catatan']; ?></p>
                                </div>
                                <h6>
                                    <i class="ti-time"></i>
                                </h6>
                            </div>
                        </li>
                    <?php }; ?> -->
                    <li class="timeline-inverted">
                        <div class="timeline-badge primary">
                            <i class="material-icons">card_travel</i>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <span class="badge badge-pill badge-primary">Pengajuan Perjalanan Dinas</span>
                            </div>
                            <!-- <div class="timeline-body">
                                <p>Jenis Perjalanan : <?= $reservasi['jenis_perjalanan']; ?></p>
                                <p>Kendaraan : <?= $reservasi['nopol'] . ' (' . $reservasi['kepemilikan'] . ')'; ?></p>
                                <p>Tujuan : <?= $reservasi['tujuan']; ?></p>
                                <p>Keperluan : <?= $reservasi['keperluan']; ?></p>
                                <p>Estimasi Waktu Keberangkatan : <?= date('d/m/Y', strtotime($reservasi['tglberangkat'])); ?> <?= date('H:i', strtotime($reservasi['jamberangkat'])); ?></p>
                                <p>Estimasi Waktu Kembali : <?= date('d/m/Y', strtotime($reservasi['tglkembali'])); ?> <?= date('H:i', strtotime($reservasi['jamkembali'])); ?></p>
                            </div>
                            <h6>
                                <i class="ti-time"></i> <?= date('d/m/Y H:i', strtotime($reservasi['tglreservasi'])); ?>
                            </h6>
                        </div> -->
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>