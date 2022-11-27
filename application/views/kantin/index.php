        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Data Kantin</h4>
                            <!-- <span class="ml-1">Datatable</span> -->
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Kantin</a></li>
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
                                <a href="<?= base_url('kantin/add') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display table table-striped" style="min-width: 845px; color:black;">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Kantin</th>
                                                <th>Alamat Kantin</th>
                                                <th>Foto Kantin</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($kantin as $data) :
                                            ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $data->nama_kantin ?></td>
                                                    <td><?= $data->alamat_kantin ?></td>
                                                    <td><img src="<?= base_url('assets_admin/images/kantin/' . $data->foto_kantin) ?>" width="100px" alt=""></td>
                                                    <td>
                                                        <a href="<?= base_url('kantin/edit/' . $data->id_kantin) ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                                        <a href="<?= base_url('kantin/delete/' . $data->id_kantin) ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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