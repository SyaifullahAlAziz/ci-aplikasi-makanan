        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Data Order</h4>
                            <!-- <span class="ml-1">Datatable</span> -->
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Order</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Index</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->

                <?= $this->session->flashdata('success'); ?>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display table table-striped" style="min-width: 845px; color:black;">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama User</th>
                                                <th>No.Antrian</th>
                                                <th>Lokasi Antar</th>
                                                <th>Total Harga</th>
                                                <th>Tanggal Order</th>
                                                <th>Status Order</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($order as $data) :
                                            ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $data->nama_user ?></td>
                                                    <td><?= $data->no_antrian ?></td>
                                                    <td><?= $data->lokasi_antar ?></td>
                                                    <td>Rp.<?= number_format($data->total_harga, 0, ',', '.') ?></td>
                                                    <td><?= date('d-m-Y', strtotime($data->tgl_order)) ?></td>
                                                    <td>
                                                        <?php if ($data->status_order == 'Menunggu Konfirmasi') : ?>
                                                            <span class="badge badge-warning"><?= $data->status_order ?></span>
                                                        <?php else : ?>
                                                            <span class="badge badge-success"><?= $data->status_order ?></span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <?php if ($data->status_order == 'Menunggu Konfirmasi') : ?>
                                                            <a href="<?= base_url('order/konfirmasi/' . $data->id_detail_order) ?>" class="btn btn-success btn-block"><i class="fa fa-check-square-o"></i></a>
                                                        <?php endif; ?>
                                                        <a href="<?= base_url('order/detail/' . $data->id_detail_order) ?>" class="btn btn-primary btn-block"><i class="fa fa-info"></i></a>
                                                    </td>
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
        </div>
        <!--**********************************
            Content body end
        ***********************************-->