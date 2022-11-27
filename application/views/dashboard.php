<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <?= $this->session->flashdata('success') ?>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <a href="<?= base_url('kantin') ?>">
                    <div class="card">
                        <div class="stat-widget-two card-body">
                            <div class="stat-content">
                                <div class="stat-text">Jumlah Kantin </div>
                                <div class="stat-digit"><?= $kantin->jumlah_kantin ?></div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success w-100" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a href="<?= base_url('keranjang') ?>">
                    <div class="card">
                        <div class="stat-widget-two card-body">
                            <div class="stat-content">
                                <div class="stat-text">Jumlah Keranjang</div>
                                <div class="stat-digit"><?= $keranjang->jumlah_keranjang ?></div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary w-100" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a href="<?= base_url('menu') ?>">
                    <div class="card">
                        <div class="stat-widget-two card-body">
                            <div class="stat-content">
                                <div class="stat-text">Jumlah Menu</div>
                                <div class="stat-digit"> <?= $menu->jumlah_menu ?></div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning w-100" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a href="<?= base_url('order') ?>">
                    <div class="card">
                        <div class="stat-widget-two card-body">
                            <div class="stat-content">
                                <div class="stat-text">Jumlah Order</div>
                                <div class="stat-digit"><?= $order->jumlah_order ?></div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger w-100" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- /# card -->
            </div>
            <!-- /# column -->
        </div>
    </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->