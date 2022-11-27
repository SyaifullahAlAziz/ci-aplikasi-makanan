        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Data Menu</h4>
                            <!-- <span class="ml-1">Datatable</span> -->
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Menu</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Index</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->

                <?= $this->session->flashdata('success'); ?>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="<?= base_url('menu/add') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display table table-striped" style="min-width: 845px; color:black;">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Jenis</th>
                                                <th>Nama Kantin</th>
                                                <th>Nama Menu</th>
                                                <th>Harga Menu</th>
                                                <th>Foto Menu</th>
                                                <th>Deskripsi Menu</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($menu as $data) :
                                            ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $data->jenis ?></td>
                                                    <td><?= $data->nama_kantin ?></td>
                                                    <td><?= $data->nama_menu ?></td>
                                                    <td>Rp.<?= number_format($data->harga_menu, 0, ',', '.') ?></td>
                                                    <td><img src="<?= base_url('assets_admin/images/menu/' . $data->foto_menu) ?>" width="100px" alt=""></td>
                                                    <td><?= $data->deskripsi_menu ?></td>
                                                    <td>
                                                        <a href="<?= base_url('menu/edit/' . $data->id_menu) ?>" class="btn btn-success btn-block"><i class="fa fa-edit"></i></a>
                                                        <a onclick="return confirm('Apakah Anda Yakin Ingin Hapus Data?')" href="<?= base_url('menu/delete/' . $data->id_menu) ?>" class="btn btn-danger btn-block"><i class="fa fa-trash"></i></a>
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